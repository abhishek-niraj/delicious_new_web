<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main_controller extends Welcome
{
    public function __construct()
    {
        parent::__construct();
        //check user

    }

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
     * @see https://codeigniter.com/userguide3/general/urls.html
     */

    public function stores_loc()
    {
        $this->load->view('header');
        $this->load->view('stores_location');
        $this->load->view('footer');
    }
}
