<?php
/**
 * En este controlador estan las funciones relacionadas con la gestion de usuarios 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Cont_user extends CI_Controller {

	public function index()
	{
    
	}
        /**
         * Llama a la vista donde esta el formulario de registro
         */
        public function Registro(){
                    $this->CargaPlantilla(
                            $this->load->view('reg_user',"",TRUE));
        }
        /**
         * Llama a la vista de logueo, en caso de error en el logueo le pasa un mensaje de error. 
         * @param type $error
         */
        public function Login($error=""){
                    $this->CargaPlantilla("",
                            $this->load->view('login',array(
                'error'=>$error),TRUE));
        }
        
        protected function CargaPlantilla($cuerpo='',$zonaverde="") {
            $this->load->view('Pagina_principal',array(
                'cuerpo'=>$cuerpo,
                'zonaverde'=>$zonaverde
                ));            
        }
}

