<?php
class Contacto extends Eloquent { 
   
 protected $fillable = array('nombre', 'apellido', 'email','asunto','mensaje');    
   public static $rules = array(
      'nombre' => 'required|min:5',
      'email' => 'required|email',
      'asunto' => 'required|min:5',
      'mensaje' => 'required|min:5'
   );
   
   public static function validate($data){
      $reglas = self::$rules;
      return Validator::make($data, $reglas);
   }
}?>