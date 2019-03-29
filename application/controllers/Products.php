<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Products extends MY_Controller
{

    public function index($parameter = null)
    {

        if (isset($parameter) && !empty($parameter)) {
            $arr = array();
            $arr['select'] = '*';
            $arr['table'] = 'menu';
            $arr['where'] = array('alias' => $parameter);
            $menu = $this->menu_model->get($arr);

            $arr = array();
            $arr['select'] = '*';
            $arr['table'] = 'category';
            $arr['where'] = array('id' => $menu['id_category']);
            $category = $this->category_model->get($arr);

            if (isset($menu) && count($menu) > 0) {
                if ($menu['product_posts'] == 'product') {
                    $data['post'] = $category;
                    $arr = array();
                    $arr['where'] = array('relationships.candidate_table' => 'product', 'relationships.foreign_table' => 'category', 'relationships.foreign_key' => $menu['id_category'], 'deleted' => null, 'product.status' => 1, 'product.quantity >=' => 1);
                    $arr['order_by_desc'] = 'id';

                    if (!isset($_GET['page'])) {
                        $page = 1;
                    } else {
                        $page = $_GET['page'];
                    }

                    if (isset($_GET['rank'])) {
                        $arr['like'] = array('rank' => $_GET['rank']);
                    }

                    if (isset($_GET['gia'])) {
                        if ($_GET['gia'] == '1') {
                            $arr['where'] = array('relationships.candidate_table' => 'product', 'relationships.foreign_table' => 'category', 'relationships.foreign_key' => $menu['id_category'], 'deleted' => null, 'product.status' => 1, 'product.quantity >=' => 1, 'product.price <=' => 100000);
                        }

                        if ($_GET['gia'] == '2') {
                            $arr['where'] = array('relationships.candidate_table' => 'product', 'relationships.foreign_table' => 'category', 'relationships.foreign_key' => $menu['id_category'], 'deleted' => null, 'product.status' => 1, 'product.quantity >=' => 1, 'product.price <=' => 200000, 'product.price >=' => 100000);
                        }

                        if ($_GET['gia'] == '3') {
                            $arr['where'] = array('relationships.candidate_table' => 'product', 'relationships.foreign_table' => 'category', 'relationships.foreign_key' => $menu['id_category'], 'deleted' => null, 'product.status' => 1, 'product.quantity >=' => 1, 'product.price <=' => 300000, 'product.price >=' => 200000);
                        }

                        if ($_GET['gia'] == '4') {
                            $arr['where'] = array('relationships.candidate_table' => 'product', 'relationships.foreign_table' => 'category', 'relationships.foreign_key' => $menu['id_category'], 'deleted' => null, 'product.status' => 1, 'product.quantity >=' => 1, 'product.price <=' => 400000, 'product.price >=' => 300000);
                        }

                        if ($_GET['gia'] == '6') {
                            $arr['where'] = array('relationships.candidate_table' => 'product', 'relationships.foreign_table' => 'category', 'relationships.foreign_key' => $menu['id_category'], 'deleted' => null, 'product.status' => 1, 'product.quantity >=' => 1, 'product.price >=' => 500000);
                        }
                    }

                    if (isset($_GET['orderBy'])) {
                        if ($_GET['orderBy'] == 'tuong') {
                            $arr['order_by_desc'] = 'tuong';
                        }
                    }

                    if (isset($_GET['orderBy'])) {
                        if ($_GET['orderBy'] == 'trang_phuc') {
                            $arr['order_by_desc'] = 'trang_phuc';
                        }
                    }

                    if (isset($_GET['orderBy'])) {
                        if ($_GET['orderBy'] == 'rank') {
                            $arr['order_by_desc'] = 'rank';
                        }
                    }

                    $current_url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                    $total_rows = $this->product_model->count_product($arr);

                    $per_page = 12;
                    $total_page = ceil($total_rows / $per_page);
                    $page = ($page > $total_page) ? $total_page : $page;
                    $page = ($page < 1) ? 1 : $page;
                    $page = $page - 1;
                    $data['pagination'] = $this->my_libraies_pagination->pagination($current_url, $total_rows, $per_page);

                    $data['products'] = $this->product_model->product($arr, $page * $per_page, $per_page);

                    $data['attributes'] = $this->attribute_model->attributes($menu['id_category']);
                    if (is_array($data['attributes']) && count($data['attributes']) > 0) {
                        foreach ($data['attributes'] as $key => $attributes) {
                            $arr = array();
                            $arr['select'] = '*';
                            $arr['table'] = 'detail_attribute';
                            $arr['where'] = array('id_attribute' => $attributes['id']);
                            $arr['order_by_asc'] = 'id';
                            $data['attributes'][$key]['detail_attribute'] = $this->detail_attribute_model->get_all($arr, 0, 5000);
                        }
                    }
                } elseif ($menu['product_posts'] == 'posts') {
                    $data['category_check'] = $category;

                    $arr = array();
                    $arr['where'] = array('relationships.candidate_table' => 'posts', 'relationships.foreign_table' => 'category', 'relationships.foreign_key' => $menu['id_category'], 'deleted' => null, 'posts.status' => 1);
                    $arr['order_by_desc'] = 'id';

                    if (!isset($_GET['page'])) {
                        $page = 1;
                    } else {
                        $page = $_GET['page'];
                    }

                    $current_url = base_url(uri_string());
                    $total_rows = $this->posts_model->count_posts($arr);

                    $per_page = 6;
                    $total_page = ceil($total_rows / $per_page);
                    $page = ($page > $total_page) ? $total_page : $page;
                    $page = ($page < 1) ? 1 : $page;
                    $page = $page - 1;
                    $data['pagination'] = $this->my_libraies_pagination->pagination($current_url, $total_rows, $per_page);
                    $data['posts'] = $this->posts_model->posts($arr, $page * $per_page, $per_page);
                }
            } else {
                show_404();
            }
        } else {
            show_404();
        }
        $data['setting'] = $this->setting;
        if (isset($category) && count($category) > 0) {
            $data['setting']['title'] = $category['name'];
            $data['setting']['thumb'] = $category['thumb'];
            $data['setting']['description'] = $category['description'];
            $data['setting']['url'] = base_url(uri_string());
        }
        $data['check_login'] = $this->check_use;
        if ($menu['product_posts'] == 'product') {
            if ($menu['id_category'] == '97') {
                $this->load->view('frontend/header', isset($data) ? $data : null);
                $this->load->view('frontend/productsRamdom', isset($data) ? $data : null);
                $this->load->view('frontend/footer', isset($data) ? $data : null);
            } else {
                $this->load->view('frontend/header', isset($data) ? $data : null);
                $this->load->view('frontend/products', isset($data) ? $data : null);
                $this->load->view('frontend/footer', isset($data) ? $data : null);
            }

        } elseif ($menu['product_posts'] == 'posts') {
            $this->load->view('frontend/header', isset($data) ? $data : null);
            $this->load->view('frontend/posts', isset($data) ? $data : null);
            $this->load->view('frontend/footer', isset($data) ? $data : null);
        }

    }
}
