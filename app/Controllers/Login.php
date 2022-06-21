<?php
namespace App\Controllers;  
use CodeIgniter\Controller;
use App\Models\UsersModel;
  
class Login extends Controller
{
    
    public function index()
    {
        # code...
        helper(['form']);
        echo view('login');
    }
    

    public function loginAuth()
    {
        $session = session();
        $userModel = new UsersModel();
        $username = $this->request->getVar('username');
        $password = $this->request->getVar('password');
        
        $data = $userModel->where('username', $username)->first();
        
        if($data){
            $pass = $data['password'];
            $authenticatePassword = password_verify($password, $pass);
            if($authenticatePassword){
                $ses_data = [
                    'id' => $data['id'],
                    'username' => $data['username'],
                    'hak_access' => $data['hak_access'],
                    'isLoggedIn' => TRUE
                ];
                $session->set($ses_data);
                if($data['hak_access']=='Administrator' || $data['hak_access']=='Petugas'){
                    return redirect()->to('/admin');
                }else{
                    return redirect()->to('/myaccount');
                }
                
            
            }else{
                $session->setFlashdata('msg', 'Password salah.');
                return redirect()->to('/login');
            }
        }else{
            $session->setFlashdata('msg', 'Username tidak ditemukan.');
            return redirect()->to('/login');
        }
    }
    public function logOut()
    {
        $session = session();

        $session->destroy();
        return redirect()->to('/');
    }
}