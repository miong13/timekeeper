<?php

namespace App\Controllers;

use App\Models\Users;

class Home extends BaseController
{
    public function index(): string
    {

        // $user = new Users();
        // $result = $user->where('email', 'admin@admin.com')->first();
        // print_r($result);
        // $user->checkUsernameAndPassword('','');

        try {
            //code...
            // $email = $this->request->getPost('email');
            // $passw = $this->request->getPost('pword');
    
            $user = new Users;
            $result = $user->where('email', $email)->first();
            print_r($result);
            return json_encode($result);
            return $this->response->setJSON($result);
        } catch (\Throwable $th) {
            //throw $th;
            return view('login');
        }

        // return view('login');
    }
}
