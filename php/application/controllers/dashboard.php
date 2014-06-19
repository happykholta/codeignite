<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
	public function index()
	{
		$this->load->view('dashboard'); 
	}
    public function addnews()
    {
        $data = $_POST;
        $this->load->model('tbnews');
        $result=$this->tbnews->addnews($data);
        if($result==1)
        {
            $this->session->set_flashdata('msg', '<font style="color:green">news add sucessful</font>');
            redirect('Dashboard/index');

        }else{
            $this->session->set_flashdata('msg', '<font style="color:red">Error plese try again</font>');
            redirect('Dashboard/index');
        }

    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */