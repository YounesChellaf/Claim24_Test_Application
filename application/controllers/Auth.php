<?php
/**
 * Created by PhpStorm.
 * Date: 8/19/19
 * Time: 1:12 AM
 */

class Auth extends CI_Controller {


    public function __construct()
    {
        parent::__construct();
        $this->load->helper("url");
    }

    public function login(){
        if (isset($_SESSION['logged_user'])){
            redirect(base_url(),'refresh');
        }
        else {
            if (isset($_POST['login'])) {
                $this->form_validation->set_rules('email', 'Email', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
                if ($this->form_validation->run() == true) {
                    $email = $_POST['email'];
                    $password = md5($_POST['password']);
                    $querry = $this->db->select('*')->from('users')->where(array('email' => $email, 'password' => $password))->get();
                    $user = $querry->row();
                    if ($user->email) {
                        $this->session->set_flashdata("success", "You are logged in");
                        $_SESSION['logged_user'] = true;
                        $_SESSION['username'] = $user->user_name;
                        redirect("/", "refresh");
                    } else {
                        $this->session->set_flashdata("error", "No such an account with that email and password");

                    }
                }
            }
            $this->load->view('login');
        }
    }



    public function register(){
        if (isset($_SESSION['logged_user'])){
            redirect(base_url());
        }
        else {
            if (isset($_POST['register'])) {
                $this->form_validation->set_rules('first_name', 'First Name ', 'required');
                $this->form_validation->set_rules('last_name', 'Last Name ', 'required');
                $this->form_validation->set_rules('user_name', 'User Name', 'required');
                $this->form_validation->set_rules('email', 'Email', 'required');
                $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
                $this->form_validation->set_rules('confirm_password', 'Confirmed Password', 'required|min_length[6]|matches[password]');
                if ($this->form_validation->run() == true) {
                    $data = array(
                        'first_name' => $_POST['first_name'],
                        'last_name' => $_POST['last_name'],
                        'email' => $_POST['email'],
                        'user_name' => $_POST['user_name'],
                        'password' => md5($_POST['password']),
                        'created_at' => date('Y-m-d')
                    );
                    $this->db->insert('users', $data);
                    $this->session->set_flashdata("success", "Your account registered succesfully");
                    redirect("Auth/register", "refresh");
                }
            }
            $this->load->view('register');
        }
    }
}