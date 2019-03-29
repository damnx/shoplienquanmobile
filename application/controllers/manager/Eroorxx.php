<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eroorxx extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    public function error403($parameter = NULL)
    {
        $this->load->view('backend/403',isset($data) ? $data : Null);
    }
    
}

?>