<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Auth extends BaseController
{
    public function login()
    {
        $session = session();
        $validation = \Config\Services::validation();
        $request = service('request');

        // Here i created rules for email and password
        $validation = \Config\Services::validation();
        // Variable comes from the html the id from the input
        // Format: variable, human readable name, rules seperated by |
        // So this following rule means variable email is Email which means it should not be null and has valid email format
        $validation->setRule('email', 'Email', 'required|valid_email');
        // The following rule means variable password, ma,ed Password and it should not be null
        $validation->setRule('password', 'Password', 'required');

        // Other Rules
        // min_length[]
        // max_length[]
        // permit_empty
        // matches[<variable name here>]

        $post = $request->getPost();

        if (! $validation->run($post)) {
            $session->setFlashdata('errors', $validation->getErrors());
            $session->setFlashdata('old', $post);
            return redirect()->back()->withInput();
        }
        

        $email = $request->getPost('email');

        $userModel = new \App\Models\UsersModel();
        $user = $userModel->where('email', $email)->first();

        if (!$user) {
            $session->setFlashdata('errors', ['email' => 'No account found for that email']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }

        $userArr = is_array($user) ? $user : (method_exists($user, 'toArray') ? $user->toArray() : (array) $user);

        if (! password_verify($request->getPost('password'), $userArr['password_hash'] ?? '')) {
            $session->setFlashdata('errors', ['password' => 'Incorrect password']);
            $session->setFlashdata('old', ['email' => $email]);
            return redirect()->back()->withInput();
        }

        $session->set([
            'id' => $userArr['id'] ?? null,
            'email' => $userArr['email'] ?? null,
            'display_name' => $userArr['name'] ?? '',
        ]);

        return redirect()->to('/landing');
    }
}
