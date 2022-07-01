<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\PesertaModel;

class Register extends BaseController
{
    public function create_action()
    {
        $userModel = new UsersModel();
        $pesertaModel = new PesertaModel();
        $data = [

                'kode_peserta' => $pesertaModel->kodePeserta($this->request->getVar('jk')),
                'nisn' => $this->request->getVar('nisn'),
                'nama' => $this->request->getVar('nama'),
                'email' => $this->request->getVar('email'),
                'asal_sekolah' => $this->request->getVar('nama_sekolah'),
                'jk' => $this->request->getVar('jk'),
                'hp' => $this->request->getVar('hp')
            ];
            $dataLogin = [
                'username' => $this->request->getVar('nisn'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT),
                'hak_access' => 'Peserta'
            ];
        if($userModel->getUser($this->request->getVar('nisn')) == false){
            
            $message = "<h1>Informasi Pendaftaran SISCAPASKA</h1>Kepada ".$this->request->getVar('nama')." Berikut Info untuk Login <br> Username = ".$this->request->getVar('nisn')."<br> Password = ". $this->request->getVar('password')."<br>Jangan Lupakan Username & Password"; 
            $this->sendEmail($this->request->getVar('email'),'Info Pendaftaran', $message);
            $pesertaModel->save($data);
            $userModel->save($dataLogin);
            session()->setFlashdata("success", "Good Job, Anda Berhasil Membuat Akun, Silahkan Login Untuk Melengkapi Formulir");
            return redirect()->to('/');
        }else{
            session()->setFlashdata("error", "Gagal Membuat Akun");
            return redirect()->to('/');
        }
    }

    public function store()
    {
        helper(['form']);
        $rules = [
            'name'          => 'required|min_length[2]|max_length[50]',
            'email'         => 'required|min_length[4]|max_length[100]|valid_email|is_unique[users.email]',
            'password'      => 'required|min_length[4]|max_length[50]',
            'confirmpassword'  => 'matches[password]'
        ];

        if ($this->validate($rules)) {
            $userModel = new UserModel();
            $data = [
                'name'     => $this->request->getVar('name'),
                'email'    => $this->request->getVar('email'),
                'password' => password_hash($this->request->getVar('password'), PASSWORD_DEFAULT)
            ];
            $userModel->save($data);
            return redirect()->to('');
        } else {
            $data['validation'] = $this->validator;
            echo view('signup', $data);
        }
    }
    private function sendEmail($to, $title, $message){

        $this->email->setFrom('siscapaska23@gmail.com','SISCAPASKA 2023');
        $this->email->setTo($to);

        // $this->email->attach($attachment);

        $this->email->setSubject($title);
        $this->email->setMessage($message);

        if(! $this->email->send()){
            return false;
        }else{
            return true;
        }
    }
}
