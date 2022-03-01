<?php namespace App\Controllers\base;

use CodeIgniter\Controller;
use App\Models\base\DashboardModel;

class Lupa_password extends Controller
{
    public function __construct() {
        //mengisi variable global dengan data
        $this->session = session();
        
        $this->DashboardModel = new DashboardModel(); 
        helper('text');
       
	    $this->request = \Config\Services::request(); //memanggil class request
        $this->uri = $this->request->uri; //class request digunakan untuk request uri/url
    }

    public function index()
    {
        $data['title'] = 'Reset Password';
        $data['view'] = 'base/dashboard/auth/lupa_password';
        return view('base/dashboard/auth/layout', $data);
        // echo $_SESSION['id'];
    }

    public function do_kirim(){

        $email= $this->request->getPost('email');
        $hasil = $this->DashboardModel->get_user_by_email($email);
        if(count($hasil) > 0)
        {
            $id = $hasil[0]->id;
            $hp = $hasil[0]->hp;
            $token = md5(random_string('alnum', 8).$email);
            $update = $this->DashboardModel->token_reset($token, $id);
            // $update = $this->DashboardModel->reset_password($password, $id);
            $pesan = 'Hallo Kak,<br>
            Terimakasih sudah menggunakan layanan <b>'.DOMAIN_UTAMA.'<b><br>
            Silahkan Klik Tautan berikut untuk ubah password baru<br>
            <a href="'.SITE_UTAMA.'/ganti_password/'.$token.'">KLIK DISINI</a><br><br>
            <b>Terima Kasih dan Sukses Selalu</b>';
            $kirim = $this->sendEmail($email, 'Reset Password', $pesan);
            $token_wa = $this->DashboardModel->get_token();
            $message = 'Hallo Kak, Terimakasih sudah menggunakan layanan *'.DOMAIN_UTAMA.'*
            
Reset Password Berhasil,
Silahkan Klik Tautan berikut untuk ubah password baru
*'.SITE_UTAMA.'/ganti_password/'.$token.'*

*Terimakasih dan Sukses Selalu*';
        
        
            if($kirim){
                $url = 'http://nusagateway.com/api/send-message.php';
                $curl = curl_init($url);
        $gateway = ['token' => $token_wa,'phone' => $hp,'message' => $message];
         curl_setopt($curl, CURLOPT_POSTFIELDS, $gateway);
        // curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);
            $this->session->setFlashdata('success', ['Email Reset Password Berhasil Dikirim']);
            return redirect()->to(base_url('/login'));
            }else{
                $this->session->setFlashdata('errors', ['Gagal Terkirim']);
            return redirect()->to(base_url('/lupa_password'));
            }
            
        }
        else
        {
            $this->session->setFlashdata('errors', ['Email Salah']);
            return redirect()->to(base_url('/lupa_password'));
        }
		
    }
    
    public function ganti_password()
    {
        $token = $this->uri->getSegment(3);
        $hasil = $this->DashboardModel->get_user_by_token($token);
        if(!empty($hasil)){
        $id = $hasil[0]->id;
        $hp = $hasil[0]->hp;
        $created = $hasil[0]->created_token;
        $durasi = '+1 days';
        $tglExp = strtotime($durasi, strtotime($created));
        $today = strtotime('now');
        if($today >= $tglExp) {
                $this->session->setFlashdata('errors', ['Token Expired, Ulang Kembali']);
            return redirect()->to(base_url('/lupa_password'));
            }else {
        $data['id_user'] = $id;
        $data['title'] = 'Ganti Password';
        $data['view'] = 'base/dashboard/auth/ganti_password';
        return view('base/dashboard/auth/layout', $data);
            }
        }else{
            $this->session->setFlashdata('errors', ['Token Tidak Valid, Ulang Kembali']);
            return redirect()->to(base_url('/lupa_password'));
        }
    }
    public function update_password(){
        $id= $this->request->getPost('id_user');
        $pass= $this->request->getPost('pass');
        $pass2= $this->request->getPost('pass2');
        if($pass == $pass2){
            $password = md5($pass);
            $update = $this->DashboardModel->update_password($password, $id);
            
            $this->session->setFlashdata('success', ['Password Berhasil Diubah']);
            return redirect()->to(base_url('/login'));

        } else  {
            $this->session->setFlashdata('errors', ['Password tidak sama']);
            return redirect()->back()->withInput();
        }

            
    }
    private function sendEmail($to, $title, $pesan){
        foreach ($this->DashboardModel->get_setting() as $row) {
                $email_kirim = $row->email;
                $pass_email = $row->pass_email;
                $host_email = $row->host_email;
        }
        $nama = SITE_NAME;
        $email_smtp = \Config\Services::email();
        $config["protocol"] = "smtp";
        //isi sesuai nama domain/mail server
        $config["SMTPHost"]  = $host_email;
        //alamat email SMTP
        $config["SMTPUser"]  = $email_kirim; 

        //password email SMTP
        $config["SMTPPass"]  = $pass_email; 
        $config["SMTPPort"]  = 587;
        $config["SMTPCrypto"] = "tls";

        $email_smtp->initialize($config);

		$email_smtp->setFrom($email_kirim, $nama);
		$email_smtp->setTo($to);
		$email_smtp->setSubject($title);
		$email_smtp->setMessage($pesan);

		if(!$email_smtp->send()){
			return false;
		}else{
			return true;
		}
    }
}
