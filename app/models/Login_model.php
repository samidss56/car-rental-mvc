<?php
class Login_model
{
    private $username = 'admin';
    private $password = 'admin';
    public function cekAuth($data)
    {
        if (empty($data['username']) || empty($data['password'])) {

            return false;
        }

        $input_username = $data['username'];
        $input_password = $data['password'];

        if ($input_username == $this->username && $input_password == $this->password) {
            return ['success', 'Berhasil Login'];
        } else {
            return ['error', 'Gagal login cek username atau password anda'];
        }
    }
}
