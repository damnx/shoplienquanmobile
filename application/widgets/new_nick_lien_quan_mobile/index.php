<?php if (!defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class New_nick_lien_quan_mobile_widget extends MY_Widget
{
    public function index()
    {
        $data = null;
        $join['0'] = array('table'=>'relationships','join_condition'=>'product.id = relationships.candidate_key');
        $arr = array();
        $arr['select'] = 'product.id,product.name,product.describe,product.alias,product.thumb,product.type, product.price,product.fake_price,product.quantity,product.rank,product.vang,product.ngoc,product.trang_phuc,product.tuong';
        $arr['table'] = 'product';
        $arr['join'] = $join;
        $arr['order_by_desc'] = 'product.id';
        $arr['where'] = array('relationships.candidate_table' =>'product','relationships.foreign_key'=>'96','relationships.foreign_table'=>'category','product.quantity >= '=>'1' ,'deleted' => NULL ,'status' => '1','published <='=>time());
        $data['newProducts'] = $this->product_model->join($arr,8,0);

        $this->load->view('views', $data);
    }
}
