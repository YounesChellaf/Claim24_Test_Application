<?php
class Autocomplete extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    function fetch()
    {
        $this->load->model('autocomplete_model');
        echo $this->autocomplete_model->fetch_data($this->uri->segment(3));
    }
}
