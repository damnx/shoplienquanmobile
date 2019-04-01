<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cardloaded extends MY_Controller
{
    private $API_KEY = 'f16771b60689b910e34fed6fe4c9dd5c'; //Api Key của tài khoản quý khách trên hệ thống TRUMTHE247.COM
    private $API_SECRET = 'c1f6b8920b479f8dcf4248be903f8fea'; //Api Serect của tài khoản quý khách trên hệ thống TRUMTHE247.COM
    private $URL_CHARGE_API = 'https://trumthe247.com/restapi/charge'; //Url post nạp thẻ. Không đổi.
    private $DEBUG_FILE_LOG = true; // True nếu cần ghi log, false nếu ko cần.
    private $FILE_LOG_SUCCESS = 'trumthe247_success.txt'; //Tên file logs thành công.
    private $FILE_LOG_ERROR = 'trumthe247_error.txt'; //Tên file logs thất bại.

    public function __construct()
    {
        parent::__construct();
        // $this->load->library('recaptcha');
    }

    public function callbackTrumthe()
    {
        $validate = $this->ValidateCallback();

        if ($validate != false) { //Nếu xác thực callback đúng thì chạy vào đây.
            $status = $validate['status']; //Trạng thái thẻ nạp, thẻ thành công = 1, thẻ thất bại != 1, xem bảng mã lỗi.
            $desc = $validate['desc']; //Mô tả chi tiết lỗi.
            $serial = $validate['card_data']['serial']; //Số serial của thẻ.
            $pin = $validate['card_data']['pin']; //Mã pin của thẻ.
            $card_type = $validate['card_data']['card_type']; //Loại thẻ. vd: VTT, VMS, VNP.
            $amount = $validate['card_data']['amount']; //Mệnh giá của thẻ.
            $content = $validate['content']; //Nội dung quý khách đã đẩy lên ở phần nạp thẻ.

            if ($status == 1) {
                $trumthe247->WriteLog('trumthe247_callback_success.txt', json_encode($validate)); //Ghi log để debug.
                $post = array('status' => 1, 'message' => $desc);
                $arr['where'] = array('code' => $pin, 'seri' => $serial);
                $data['return'] = $this->card_model->update($post, $where, 'card_loaded');

            } else {
                $trumthe247->WriteLog('trumthe247_callback_failed.txt', json_encode($validate)); //Ghi log để debug.
                $post = array('status' => 1, 'message' => $desc);
                $arr['where'] = array('code' => $pin, 'seri' => $serial);
                $data['return'] = $this->card_model->update($post, $where, 'card_loaded');
            }
        }
    }

    public function index()
    {
        // đây là code phần nạp thẻ
        $data = array();
        $checkLogin = $this->check_use;
        $data['check_login'] = $this->check_use;
        if (!isset($checkLogin) && count($checkLogin) <= 0) {
            $data['return'] = array('status' => '1', 'data' => '', 'mes' => 'Bạn cần đang nhập trước khi nạp tiền vào tài khoản');
        } else {
            $post = $this->input->post();
            if (!empty($post)) {
                if (!isset($_POST['card_type']) || !isset($_POST['card_amount']) || !isset($_POST['serial']) || !isset($_POST['pin'])) {
                    $data['return']['status'] = 1;
                    $data['return']['mes'] = 'Bạn cần nhập đầy đủ thông tin';
                } else {
                    $type = $_POST['card_type'];
                    $amount = $_POST['card_amount'];
                    $seri = $_POST['serial'];
                    $pin = $_POST['pin'];

                    if ($type == '' || $amount == '' || $seri == '' || $pin == '') {
                        $data['return']['status'] = 1;
                        $data['return']['mes'] = 'Bạn cần nhập đầy đủ thông tin';
                    } else {
                        $note = 'nạp card  pin : ' . $pin . ' serial: ' . $seri; //đây là ghi chú gửi lên hệ thống để validate người dùng khi bên mình gửi về, ví dụ là UID của người nạp.

                        if ($amount < 50000) {
                            $type .= '2';
                        }

                        $charge_result = $this->ChargeCard($type, $seri, $pin, $amount, $note); //thực hiện đẩy thẻ lên hệ thống TrumThe247.Com

                        if ($charge_result == false) { //Có lỗi trong quá trình đẩy thẻ.
                            $data['return']['status'] = 1;
                            $data['return']['mes'] = 'Có lỗi trong quá trình xử lý, xin thử lại hoặc liên hệ Admin';
                            $arr = array(
                                'id_use' => $checkLogin['id'],
                                'code' => $pin,
                                'seri' => $seri,
                                'denominations' => $amount,
                                'type' => $type,
                                'before' => 0,
                                'after' => 0,
                                'published' => time(),
                                'status' => 1,
                                'message' => 'Có lỗi trong quá trình xử lý, xin thử lại hoặc liên hệ Admin',
                            );
                            $this->card_model->insert($arr, 'card_loaded');

                        } else if (is_string($charge_result)) { //Có lỗi trả về của hệ thống TRUMTHE247.COM.
                            $data['return']['status'] = 1;
                            $data['return']['mes'] = $charge_result;
                            $arr = array(
                                'id_use' => $checkLogin['id'],
                                'code' => $pin,
                                'seri' => $seri,
                                'denominations' => $amount,
                                'type' => $type,
                                'before' => 0,
                                'after' => 0,
                                'published' => time(),
                                'status' => 1,
                                'message' => $charge_result,
                            );
                            $this->card_model->insert($arr, 'card_loaded');
                        } else if (is_object($charge_result)) { //Gửi thẻ thành công lên hệ thống.
                            $data['return']['status'] = 0;
                            $data['return']['mes'] = 'Gửi thẻ thành công!';
                            $arr = array(
                                'id_use' => $checkLogin['id'],
                                'code' => $pin,
                                'seri' => $seri,
                                'denominations' => $amount,
                                'type' => $type,
                                'before' => 0,
                                'after' => 0,
                                'published' => time(),
                                'status' => 0,
                                'message' => 'Gửi thẻ thành công lên hệ thống',
                            );
                            $this->card_model->insert($arr, 'card_loaded');

                        } else {
                            $data['return']['status'] = 1;
                            $data['return']['mes'] = 'Có lỗi trong quá trình xử lý';
                            $arr = array(
                                'id_use' => $checkLogin['id'],
                                'code' => $pin,
                                'seri' => $seri,
                                'denominations' => $amount,
                                'type' => $type,
                                'before' => 0,
                                'after' => 0,
                                'published' => time(),
                                'status' => 0,
                                'message' => 'Có lỗi trong quá trình xử lý',
                            );
                            $this->card_model->insert($arr, 'card_loaded');
                        }
                    }
                }
            }
        }
        $this->load->view('frontend/header', isset($data) ? $data : null);
        $this->load->view('frontend/cardloaded', isset($data) ? $data : null);
        $this->load->view('frontend/footer', isset($data) ? $data : null);
    }

    private function ValidateCallback()
    { //Hàm kiểm tra callback từ trumthe247.com
        if (isset(
            $_POST['api_key'],
            $_POST['api_secret'],
            $_POST['status'],
            $_POST['desc'],
            $_POST['card_data']['serial'],
            $_POST['card_data']['pin'],
            $_POST['card_data']['card_type'],
            $_POST['card_data']['amount'],
            $_POST['card_data']['real_amount'],
            $_POST['card_data']['charge_time']
        )) {
            if ($_POST['api_key'] == $this->API_KEY && $_POST['api_secret'] == $this->API_SECRET) { //Xác thực API, tránh kẻ lạ gửi dữ liệu ảo.
                return $_POST; //xác thực thành công, return mảng dữ liệu từ TRUMTHE247.COM trả về.
            }
        }

        return false; //Xác thực callback thất bại.
    }

    private function ChargeCard($telco, $serial, $pin, $amount, $note)
    { //Hàm gửi dữ liệu thẻ lên hệ thống trumthe247.com
        /*
        $telco: nhà mạng. Vd: VTT, VMS, VNP.
        $serial: số seri của thẻ.
        $pin: mã thẻ.
        $amount: mệnh giá thẻ.
        $note: ghi chú. Quý khách có thể thêm giá trị để xác thực giao dịch cho khách hàng của quý khách. Ví dụ: User ID khách hàng của quý khách, Mã GD, ...
         */
        $validate = $this->ValidateCard($telco, $serial, $pin); //Xác thực định dạng thẻ.
        if ($validate != true) {
            if ($this->DEBUG_FILE_LOG == true) //Kiểm tra nếu Debug ghi file log = true thì thực hiện ghi dữ liệu đẩy thẻ vào file log.
            {
                $this->WriteLog($this->FILE_LOG_ERROR, $validate);
            }

            return $validate;
        }

        $dataPost = array( //Mảng chứa dữ liệu đẩy thẻ lên server TrumThe247.Com
            'card' => $telco,
            'amount' => $amount,
            'serial' => $serial,
            'pin' => $pin,
            'api_key' => $this->API_KEY,
            'api_secret' => $this->API_SECRET,
            'content' => $note,
        );

        $charge_response = $this->CurlPost($this->URL_CHARGE_API, $dataPost); //Thực hiện POST cURL dữ liệu lên Server.
        $response_object = json_decode($charge_response, false); //Parse kết quả đẩy thẻ về dạng đối tượng Object.
        if (empty($response_object->status)) { //Kiểm tra nếu không tồn tại Response Status, thì là kết quả đẩy thẻ lên Server TrumThe247 bị lỗi. Thực hiện ghi vào file logs, theo dõi file để kiểm tra lỗi.
            if ($this->DEBUG_FILE_LOG == true) {
                $this->WriteLog($this->FILE_LOG_ERROR, $charge_response);
            }

            return false;
        }

        if ($response_object->status != 1) { //Kiểm tra nếu Response Status khác 1, tức là thẻ đẩy lên bị sai hoặc cấu hình dữ liệu sai, theo dõi mô tả lỗi hoặc so sánh Status Code trong bảng mã lỗi ở file Document hướng dẫn.
            if ($this->DEBUG_FILE_LOG == true) //Kiểm tra nếu Debug ghi file log = true thì thực hiện ghi dữ liệu đẩy thẻ vào file log.
            {
                $this->WriteLog($this->FILE_LOG_ERROR, $charge_response);
            }

            return $response_object->desc;
        }

        if ($this->DEBUG_FILE_LOG == true) //Kiểm tra nếu Debug ghi file log = true thì thực hiện ghi dữ liệu đẩy thẻ vào file log.
        {
            $this->WriteLog($this->FILE_LOG_SUCCESS, $charge_response);
        }
        //Ghi kết quả đẩy thẻ thành công vào file log thành công.

        return $response_object; //Trả về kết đối tượng Object.
    }

    private function ValidateCard($telco, $serial, $pin)
    { //Hàm kiểm tra định dạng thẻ.
        $s_length = strlen($serial);
        $p_length = strlen($pin);

        if ($telco == 'VTT' || $telco == 'VTT2') {
            if ($s_length != 11 && $s_length != 14) {
                return 'Số serial thẻ không đúng.';
            }

            if ($p_length != 13 && $p_length != 15) {
                return 'Mã thẻ không đúng.';
            }

        }

        if ($telco == 'VMS' || $telco == 'VMS2') {
            if ($s_length != 15) {
                return 'Số serial thẻ không đúng.';
            }

            if ($p_length != 12) {
                return 'Mã thẻ không đúng.';
            }

        }

        if ($telco == 'VNP' || $telco == 'VNP2') {
            if ($s_length != 14) {
                return 'Số serial thẻ không đúng.';
            }

            if ($p_length != 14) {
                return 'Mã thẻ không đúng.';
            }

        }

        return true;
    }

    private function CurlPost($url, $dataPost)
    { //Hàm cURL POST dữ liệu.
        if (!is_array($dataPost)) {
            return false;
        }
        
        $dataPost = http_build_query($dataPost);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $dataPost);
        $ref = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; //Nếu kết quả cURL bị lỗi xác thực tên miền, thử thay thế $ref = tên miền của bạn. Ví dụ: $ref = 'https://trumthe247.com';
        curl_setopt($ch, CURLOPT_REFERER, $ref);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

        $result = curl_exec($ch);

        if (curl_error($ch)) {
            $error_msg = curl_error($ch);
        }

        curl_close($ch);

        if (isset($error_msg)) {
            return $error_msg;
        }

        return $result;
    }

    private function WriteLog($file_name, $content)
    { //Hàm xử lý việc ghi file log.
        if (empty($file_name)) {
            return false;
        }

        $fp = fopen($file_name, 'a');
        if (fwrite($fp, date('H:i:s d/m/Y', time()) . ' - ' . $content . PHP_EOL) == false) {
            return false;
        }

        fclose($fp);

        return true;
    }

}
