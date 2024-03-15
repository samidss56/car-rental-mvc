<?php
class Login_model
{
    private $username = 'admin';
    private $password = 'admin';
    public function cekAuth($data)
    {
        // Memeriksa apakah data yang diterima kosong
        if (empty($data['username']) || empty($data['password'])) {

            return false;
        }

        // Jika data tidak kosong, dapat dilakukan pengecekan autentikasi
        $input_username = $data['username'];
        $input_password = $data['password'];

        // Pengecekan apakah username dan password yang diterima sesuai dengan yang telah ditentukan
        if ($input_username == $this->username && $input_password == $this->password) {
            // Jika sesuai, autentikasi berhasil
            return ['success', 'Berhasil Login'];
        } else {
            // Jika tidak sesuai, autentikasi gagal
            return ['error', 'Gagal login cek username atau password anda'];
        }
    }
}