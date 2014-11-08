<?php

class ContactoController extends \BaseController {
    public function getContacto() 
    {
        $this->layout->title = utf8_encode('Contáctanos');
        $this->layout->main = View::make('contacto');
    }

	public function postContacto(){
		$contacto = new Contacto;
        $input = Input::all();
        $this->layout->title = utf8_encode('Contáctanos');
		
		$validator = Contacto::validate($input);
		if($validator->fails()){
			$errors = $validator->messages()->all();
            $this->layout->main = View::make('contacto')
                    ->withInput($input)
					->with('errors', $errors);
		}else{
            
            $contacto->fill($input);
            $contacto->save();
            Session::flash('mensaje', "Su mensaje se registr&oacute; correctamente");
            return Redirect::back();
			}
	}//postContacto
}//ContactoController
