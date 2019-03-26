<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Host_nick_lien_quan_mobile_widget extends MY_Widget
{
    public function index()
    {
        $data = null;
        $arr = array();
        $arr['select'] = '*';
        $arr['table'] = 'product';
        $arr['order_by_desc'] = 'id';
        $arr['where'] = array('deleted' => NULL ,'feature' => 1,'status' => 1,'published <='=>time(),'quantity >= '=>1);
        $data['postFeatureS'] = $this->product_model->get_all($arr,0,4);
        $this->load->view('views', $data);
    }
}
