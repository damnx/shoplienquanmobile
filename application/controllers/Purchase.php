<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Purchase extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $user = $this->check_use;
        $post = $this->input->post();
        if (!isset($user) && count($user) <= 0) {
            $data = array('status' => '1', 'data' => '', 'mess' => 'Bạn cần đang nhập trước khi mua tài khoản');
        }
        if ($post && $post['id']) {
            $arr = array();
            $arr['select'] = '*';
            $arr['table'] = 'product';
            $arr['where'] = array('id' => trim($post['id']));
            $product = $this->product_model->get($arr);
            if ($product) {
                if (isset($product['fake_price']) && $product['fake_price'] != 0) {
                    if ((int) $product['fake_price'] > (int) $user['money']) {
                        $data = array('status' => '1', 'data' => '', 'mess' => 'Tài khoản bản không đủ tiền bạn cần nạp thêm tiền vào tài khoản');
                    } else {
                        $arrOrder = array(
                            'use_name' => $user['id'],
                            'id_sp' => $product['id'],
                            'status' => 1,
                            'price' => $product['fake_price'],
                            'quantity' => 1,
                            'published' => time(),
                        );
                        $this->card_model->insert($arrOrder, 'orders');

                        $arr = array(
                            'quantity' => 0,
                        );
                        $where = array('id' => $post['id']);
                        $this->product_model->update($arr, $where, 'product');

                        $money = (int) $user['money'] - (int) $product['fake_price'];

                        $arrMoney = array(
                            'money' => $money,
                        );

                        $whereUser = array('id' => $user['id']);
                        $this->use_model->update($arrMoney, $whereUser, 'use');
                        $data = array('status' => '0', 'data' => '', 'mess' => 'Giao dịch thành công');
                    }
                } else {
                    if ((int) $product['price'] > (int) $user['money']) {
                        $data = array('status' => '1', 'data' => '', 'mess' => 'Tài khoản bản không đủ tiền bạn cần nạp thêm tiền vào tài khoản');
                    } else {
                        $arrOrder = array(
                            'use_name' => $user['id'],
                            'id_sp' => $product['id'],
                            'status' => 1,
                            'price' => $product['price'],
                            'quantity' => 1,
                            'published' => time(),
                        );
                        $this->product_model->insert($arrOrder, 'orders');

                        $arr = array(
                            'quantity' => 0,
                        );
                        $where = array('id' => $post['id']);
                        $this->product_model->update($arr, $where, 'product');
                        $money = (int) $user['money'] - (int) $product['price'];
                        $arrMoney = array(
                            'money' => $money,
                        );
                        $whereUser = array('id' => $user['id']);
                        $this->use_model->update($arrMoney, $whereUser, 'use');
                        $data = array('status' => '0', 'data' => '', 'mess' => 'Giao dịch thành công');
                    }
                }
            } else {
                $data = array('status' => '1', 'data' => '', 'mess' => 'Mua tài khoản thất bại');
            }

        } else {
            $data = array('status' => '1', 'data' => '', 'mess' => 'Mua tài khoản thất bại');
        }
        if ($data) {

            echo json_encode($data);
        } else {

        }

    }
}
