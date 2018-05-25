<?php
/**
 * Created by PhpStorm.
 * User: Computer
 * Date: 12/13/2017
 * Time: 9:21 AM
 */

class Database extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('database_model');
    }

    public function index()
    {
        $data['title']      = 'Database';
        $data['active']     = 'database';
        $data['content']    = 'database';
        $data['query']      = $this->database_model->get_entries();
        $data['modal']      = '';
        $data['css']        = '';
        $data['js']         = '';
        $this->parser->parse('template/template', $data);
    }
}