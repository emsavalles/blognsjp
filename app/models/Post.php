<?php

class Post extends Eloquent {

 protected $fillable = array('title', 'bajada', 'lugar','imagen','content','pie');    
   public static $rules = array(
      'title' => 'required|min:5',
      'content' => 'required|min:5',
      'imagen' => 'image|mimes:jpeg,bmp,png'
   );
   
   public static function validate($data){
      $reglas = self::$rules;
        $mensajes = array(
            'title.required' => 'El campo t&iacute;tulo es requerido',
            'title.min' => 'El campo t&iacute;tulo debe tener al menos 5 caracteres.',
            'content.required' => 'El campo contenido es requerido',
        );
      return Validator::make($data, $reglas,$mensajes);
   }
}
//'image'=>'required|image|mimes:jpeg,jpg,png,bmp,gif,svg'
?>