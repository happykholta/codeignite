<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Newseditor extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function login()
	{
        if(trim($_POST['Uname']) <> ''){

     $username=$_POST['Uname'];
     $pass=$_POST['pass'];

     /***************** import model ********************************/
     $this->load->model('tbuser');
     $setVarialble=$this->tbuser->verifylogin($username,$pass); 

     if(($setVarialble*1) > 0) {

         ob_start();
         session_start();
         //$_SESSION['uname']=$username;
         $userinfo = array(
         'uname' => $username
         );
         $this->session->set_userdata($userinfo);

         //$this->Dashboard->index();
         //$this->load->view('nsctmp/dashboard');
         //exit;
         redirect('Dashboard/index');

        }else{

          $this->session->set_flashdata('msg', '<font style="color:red">Username and password incorrect</font>');
          redirect('Welcome/index');

         }

}else{
     $this->session->set_flashdata('msg', '<font style="color:red">plese fill the data</font>');
     redirect('Welcome/index');

     }

		$this->load->view('dashboard');
	}

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Welcome/index');
        
    }
    public function display()
    {
        $id=$_GET['id'];
        //exit;
        $this->load->model('tbnews');
        $setVarialble=$this->tbnews->getnews($id);      
        echo json_encode($setVarialble);
        exit;

    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */