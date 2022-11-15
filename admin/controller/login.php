<?php

// Redirect user to admin page if there is a session.
if (in_array(session('user_rank'), [1, 2])) {
    header('Location:' . site_url('admin/index'));
    exit;
}

// Login process
if (post('submit')) {
    if ($data = form_control()) {

        $row = $db->from('users')
            ->where('user_url', permalink($data['user_name']))
            ->where('user_rank', 3, '!=')
            ->first();

        if (!$row) {
            $error = ' Girdiğiniz bilgiler hatalı lütfen kontrol edin.';
        } else {
            if (password_verify($data['user_password'], $row['user_password'])) {
                if ($row['user_rank'] == 3){
                    $error = 'Bu bölüme girmek için yetkiniz bulunmuyor.';
                }
                User::Login($row);
                header('Location:' . admin_url());
            } else {
                $error = 'Şifreniz hatalı, lütfen kontrol edin!';
            }
        }
    } else {
        $error = ' Lütfen bilgilerinizi girin.';
    }
}
require admin_view('login');

