<?php
/*
 for($i=4;$i>=1;$i--){?>
    <div class="seccion1">
    	<h2>
        	<table>
                <tr>
                    <th style="background:#426660; width:40px; height:40px"><?php echo $i?></th>
                    <td></td>
                </tr>
            </table>
        </h2>
    </div>
<?php }
*/?>
@foreach($posts as $post)
    <div class="seccion1">
    	<h2>
        	<table>
                <tr>
                    <th style="background:#426660; width:40px; height:40px"></th>
                    <td>{{link_to_route('post.show',$post->title,$post->id)}}</td>
                </tr>
            </table>
        </h2>
        <figure>
        <?php if($post->imagen!=""){?>
            <img src="img_notas/{{$post->imagen}}"/>
        <?php }?>
        </figure>
    </div>
@endforeach
<!--
@if(!empty($notFound))
<p>Sorry nothing found for your query!</p>
@else
@foreach($posts as $post)
    <article class="post">
        <header class="post-header">
            <h1 class="post-title">
                {{link_to_route('post.show',$post->title,$post->id)}}
            </h1>
            <div class="clearfix">
                <span class="left date">{{explode(' ',$post->created_at)[0]}}</span>
                <span class="right label">{{$post->comment_count}} comments </span>
            </div>
        </header>
        <div class="post-content">
            <p>{{$post->read_more.' ...'}}</p>
            <span>{{link_to_route('post.show','Read full article',$post->id)}}
        </div>
        <footer class="post-footer">
            <hr>
        </footer>
    </article>
@endforeach
{{$posts->links()}}
@endif
-->