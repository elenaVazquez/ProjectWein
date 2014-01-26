<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model');
        $this->load->helper('form');
    }

	public function index()
	{
		$this->load->view('login');
	}



	public function userLogin(){
		
		$this->load->library('form_validation');
		
		if(!isset($_POST['usernamelogin'])){       
            
            $this->load->view('panel_control');  

        }else{                                

            $this->form_validation->set_rules('usernamelogin','Username','required');        
            $this->form_validation->set_rules('passwordlogin','Password','required');
            
            if(($this->form_validation->run()==FALSE)){  

                $this->load->view('panel_control');                            
            }
            else{      
                $exists=$this->user_model->exists($_POST['usernamelogin'],$_POST['passwordlogin']);    
                ///aquí he d'anar al model i agafar les dades que necessito, enviar un boolea si ja ha insertat el celler 
                //sino l'ha insertat els links de wines i events han d'estar desactivats
                if($exists){    
                
                    $this->load->view('panel_control');
                
                } else{    
                    
                    $data['error']="E-mail o password incorrecta, por favor vuelva a intentar";
                    $this->load->view('login',$data);   
                
                }
            }
        }
		
	}
}

?>
