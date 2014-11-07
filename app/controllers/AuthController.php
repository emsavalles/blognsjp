<?php
class AuthController extends BaseController {

    public function showLogin()
    {
        // Verificamos que el usuario no esté autenticado
        if (Auth::check())
        {
            // Si está autenticado lo mandamos a la raíz donde estara el mensaje de bienvenida.
            return Redirect::to('/admin');
        }
        // Mostramos la vista login.blade.php (Recordemos que .blade.php se omite.)
        return View::make('login');
    }
    
    public function postLogin()
    {
        // Guardamos en un arreglo los datos del usuario.
        $userdata = array(
            'username' => Input::get('username'),
            'password'=> Input::get('password'),
            'confirmed'=>1,
            'tipo'=>1
        );
        // Validamos los datos y además mandamos como un segundo parámetro la opción de recordar el usuario.
        if(Auth::attempt($userdata))
        {
            // De ser datos válidos nos mandara a la bienvenida
            return Redirect::to('/admin');
        }
        // En caso de que la autenticación haya fallado manda un mensaje al formulario de login y también regresamos los valores enviados con withInput().
        return Redirect::to('login')
                    ->with('mensaje_error', 'Tus datos son incorrectos')
                    ->withInput();
    }    

    public function logOut()
    {
        Auth::logout();
        return Redirect::to('login');
        //            ->with('mensaje_error', 'Tu sesión ha sido cerrada.');
    }
    
}//Fin AuthController
?>