<?php 
    class PostController extends BaseController
{
 public $layout = 'admin.inicio';
 public $mensaje="";
    /* get functions */
    public function listPost()
    {
        $posts = Post::orderBy('id','desc')->paginate(10);
        $this->layout->title = 'Post listings';
        $this->layout->main = View::make('dash')->nest('content','posts.list',compact('posts'));
    }
    public function showPost(Post $post)
    {
//        $comments = $post->comments()->where('approved', '=', 1)->get();
        $this->layout->title = $post->title;
        $this->layout->main = View::make('home')->nest('content', 'posts.single', compact('post'));
    }
 
    public function newPost()
    {
//return 1;
    //return  View::make('admin.inicio')->with('title','ti');
    $this->layout->title = 'New Post';
    $this->layout->main = View::make('posts.new');
    }
 
    public function editPost(Post $post)
    {
        $this->layout->title = 'Edit Post';
        $this->layout->main = View::make('dash')->nest('content', 'posts.edit', compact('post'));
    }
 
    public function deletePost(Post $post)
    {
        $post->delete();
        return Redirect::route('post.list')->with('success', 'Post is deleted!');
    }
 
    /* post functions */
    public function savePost()
    {
        $post = new Post;
        $nomn="";
//        $input = Input::all();

    $file = (Input::file("imagen")!="")?Input::file("imagen"):"";
    
    if ($file!=""){
        $trozos = explode(".", $file->getClientOriginalName()); 
        $extension = end($trozos);
        array_pop($trozos);
        $nombf=implode($trozos);
         
        $nombre_fichero = 'img_notas/'.$file->getClientOriginalName();
        
        if (file_exists($nombre_fichero)) {
            $nomn=$nombf.'_'.date('ymdhis').'.'.$extension;
        }else{
            $nomn=$file->getClientOriginalName();
        }    
    }
    
    $input = array(
        "title"     =>    Input::get("title"),
        "bajada"    =>    Input::get("bajada"),
        "lugar"     =>    Input::get("lugar"),
        "content"   =>    Input::get("content"),
        "imagen"    =>    $nomn,
        "pie"       =>    Input::get("pie"),
        "visible"   =>    1,
    );
    
    $dataUpload = array(
        "title"    =>    Input::get("title"),
        "content"        =>    Input::get("content"),
        "imagen"        =>    Input::file("imagen")
    );    

    $validator = Post::validate($dataUpload);
		if($validator->fails()){
        Session::reflash();
        	$errors = $validator->messages()->all();
            $this->layout->main = View::make('posts.new')
                    ->withInput($input)
					->with('errors', $errors);
		
        }else{
            
            $post->fill($input);
        if($post->save()){
            if ($file!=""){
////////////////////////////////////////////////////////////////////////
                $file->move("img_notas",$nomn);
///////////////////////////////////////////////////////////////////////
            }
            Session::flash('mensaje', "Nota registrada correctamente");
            return Redirect::to('admin/post/new');

        } 
			}

    }
 
    public function updatePost(Post $post)
    {
        $data = [
            'title' => Input::get('title'),
            'content' => Input::get('content'),
        ];
        $rules = [
            'title' => 'required',
            'content' => 'required',
        ];
        $valid = Validator::make($data, $rules);
        if ($valid->passes())
        {
            $post->title = $data['title'];
            $post->content = $data['content'];
            $post->read_more = (strlen($post->content) > 120) ? substr($post->content, 0, 120) : $post->content;
            if(count($post->getDirty()) > 0) /* avoiding resubmission of same content */
            {
                $post->save();
                return Redirect::back()->with('success', 'Post is updated!');
            }
            else
                return Redirect::back()->with('success','Nothing to update!');
        }
        else
            return Redirect::back()->withErrors($valid)->withInput();
    }

}?>