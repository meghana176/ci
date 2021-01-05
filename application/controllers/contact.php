<?php
//application/controllers/Contact.php

// Contact controller
// This controller is used to manage the contact form page
class Contact extends CI_Controller
{

    // Constructor, load the model
    public function __construct() 
    {
        parent::__construct();
        // Load contact model
        $this->load->model('contact_model');
    }

    // Main controller for the contact form
    public function index()
    {
        // Load form libraries
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->helper('url');

        // Check if data are provided
        $this->form_validation->set_rules('email', 'e-mail', 'trim|required' , array('required' => "Valid email required") );
        $this->form_validation->set_rules('title', 'Titre', 'trim|required', array('required' => "Tile required") );
        $this->form_validation->set_rules('message', 'message', 'trim|required', array('required' => "Message required") );

        if ($this->form_validation->run() === FALSE)
        {
            // Form is not valid, display the form once again
            $this->displayForm();
        }
        else
        {
            // Form is valid, send the message
            $this->contact_model->sendMessage();
            redirect('/');
        }
    }

    // Display the contact form
    private function displayForm()
    {
        // Prepare data to the controler
        $data['headerTitle'] = 'Contact';
        $data['headerDescription'] = 'Page de contact';
        $data['title'] = 'Contact';

        // Display page
        $this->load->view('templates/header', $data);
        $this->load->view('templates/alert', $data);
        $this->load->view('contact/index', $data);
        $this->load->view('templates/footer', $data);
    }

}
