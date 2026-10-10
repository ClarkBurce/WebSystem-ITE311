<?php

namespace App\Controllers;

use App\Models\UserModel;

class AuthController extends BaseController
{
    // Displays the registration form
    public function register()
    {
        return view('auth/register');
    }

    // Processes the registration form
    public function storeRegister()
    {
        $rules = [
            'name'                  => 'required|min_length[3]',
            'email'                 => 'required|valid_email|is_unique[users.email]',
            'password'              => 'required|min_length[6]',
            'password_confirmation' => 'required|matches[password]',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $userModel = new UserModel();
        $userModel->insert([
            'name'     => $this->request->getPost('name'),
            'email'    => $this->request->getPost('email'),
            'password' => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role'     => 'user',
        ]);

        return redirect()->to('/login')->with('success', 'Registration successful. You may now log in.');
    }

    // Displays the login form
    public function login()
    {
        return view('auth/login');
    }

    // Processes the login form
    public function authenticate()
    {
        $rules = [
            'email'    => 'required|valid_email',
            'password' => 'required',
        ];

        if (! $this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $userModel = new UserModel();
        $user = $userModel->where('email', $this->request->getPost('email'))->first();

        if ($user && password_verify($this->request->getPost('password'), $user['password'])) {
            session()->regenerate();
            session()->set([
                'user_id'    => $user['id'],
                'name'       => $user['name'],
                'email'      => $user['email'],
                'role'       => $user['role'],
                'isLoggedIn' => true,
            ]);

            return redirect()->to('/dashboard')->with('success', 'Welcome back!');
        }

        return redirect()->back()->withInput()->with('errors', ['email' => 'Invalid email or password.']);
    }

    // Protected page: only logged-in users can see it
    public function dashboard()
    {
        return view('auth/dashboard');
    }

    // Logs the user out and clears the session
    public function logout()
    {
        session()->remove(['user_id', 'name', 'email', 'role', 'isLoggedIn']);
        session()->regenerate(true);

        return redirect()->to('/login')->with('success', 'You have been logged out.');
    }
}