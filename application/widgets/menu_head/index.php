<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu_head_widget   extends MY_Widget
{
    function index()
    {
        $data = null;
        $arr = array();
        $arr['select'] = '*';
        $arr['table'] = 'menu';
        $arr['order_by_asc'] = 'wednesday';
        $arr['where'] = array('status' => 1,'parent_id'=>0,'mid'=>1);
        $data['menus'] = $this->menu_model->get_all($arr,0,500);
        $this->load->view('views',$data);
    }
}