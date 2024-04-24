<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function checkLogin()
    {
        $this->load->library('input');
        $this->load->library('session');
        $this->load->model('user_model');

        $username = $this->input->post('pseudo');
        $mdp = $this->input->post('mdp');

        // Check if the user exists
        $user = $this->user_model->checkLogin($username);

        if ($user == null || $user['mdp'] != $mdp) {
            // Redirect to login page
            redirect('login');
        } else {
            // Set user session
            $this->session->set_userdata('user', $user);
            // Redirect to home page
            redirect('home');
        }
    }

    public function inscription(){
        $this->load->library('input');
        $this->load->library('session');
        $this->load->model('user_model');
        $username = $this->input->post('pseudo');
        $mdp = $this->input->post('mdp');

        $user = array(
            'pseudo' => $username,
            'mdp' => $mdp
        );
        $this->user_model->inscription($user);
        redirect('login');
    }

}