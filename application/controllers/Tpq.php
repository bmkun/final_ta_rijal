<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tpq extends CI_Controller
{


    function index()
    {
        $this->load->view("tpq/header");
        $this->load->view("tpq/content");
        $this->load->view("tpq/footer");
    }
}
