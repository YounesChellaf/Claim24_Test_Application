<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }


	public function index()
	{
        $data['menu'] = $this->load->view('main',NULL, TRUE);
		$this->load->view('index',$data);
	}

    function fetch()
    {
        $this->load->model('auth_model');
        echo $this->auth_model->fetch_data($this->uri->segment(3));
    }

    function file(){
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="sample.csv"');
        $data = array(
            'aaa,bbb,ccc,dddd',
            '123,456,789',
            '"aaa","bbb"'
        );

        $fp = fopen('php://output', 'wb');
        foreach ( $data as $line ) {
            $val = explode(",", $line);
            fputcsv($fp, $val);
        }
        fclose($fp);
    }
}
