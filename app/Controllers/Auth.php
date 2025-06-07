<?php namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    public function register()
    {
        helper(['form']);
        if ($this->request->getMethod() === 'post') {
            $rules = [
                'username' => 'required|min_length[3]|is_unique[users.username]',
                'email'    => 'required|valid_email|is_unique[users.email]',
                'password' => 'required|min_length[6]',
                'pass_confirm' => 'required_with[password]|matches[password]'
            ];

            if (!$this->validate($rules)) {
                return view('auth/register', [
                    'validation' => $this->validator
                ]);
            }

            $model = new UserModel();
            $model->save([
                'username' => $this->request->getPost('username'),
                'email'    => $this->request->getPost('email'),
                'password' => $this->request->getPost('password'),
                'role'     => 'user'
            ]);

            return redirect()->to('/login')->with('success', 'Registrasi berhasil. Silakan login.');
        }

        return view('auth/register');
    }

    public function login()
    {
        helper(['form']);
        if ($this->request->getMethod() === 'post') {
            $rules = [
                'email'    => 'required|valid_email',
                'password' => 'required'
            ];

            if (!$this->validate($rules)) {
                return view('auth/login', [
                    'validation' => $this->validator
                ]);
            }

            $model = new UserModel();
            $user = $model->where('email', $this->request->getPost('email'))->first();

            if ($user && password_verify($this->request->getPost('password'), $user['password'])) {
                $this->setUserSession($user);
                return redirect()->to('/dashboard');
            }

            return redirect()->back()->with('error', 'Email atau password salah.');
        }

        return view('auth/login');
    }

    private function setUserSession($user)
    {
        $data = [
            'id'       => $user['id'],
            'username' => $user['username'],
            'email'    => $user['email'],
            'role'     => $user['role'],
            'isLoggedIn' => true
        ];

        session()->set($data);
        return true;
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to('/login');
    }
}
