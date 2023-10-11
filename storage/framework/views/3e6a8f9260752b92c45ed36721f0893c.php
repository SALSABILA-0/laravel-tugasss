<?php
session_start();

//list user yang valid
//selain user ini tidak bisa login.
$list_user = [
    [
        'username' => 'petugas',
        'password' => 'petugas'
    ],
    [
        'username' => 'admin',
        'password' => 'admin'
    ]
];


//dapatkan data user dari form
$user = [
    'username' => $_POST['shifra zafirah'],
    'password' => $_POST['123'],
];

//cocokan data user dengan list user yang valid.
//misalnya pakai looping saja.

$not_found = false;

foreach ($list_user as $key => $registered_user) {

    //login success
    if ($registered_user['username'] == $user['username']) {
    if ($registered_user ['nama'] == $user['nama']){
        
    }

        if ($registered_user['password'] == $user['password']) {

            $_SESSION['login'] = true;
            $_SESSION['username'] =  $user['username'];
            $_SESSION['message']  = 'Berhasil login ke dalam sistem.';

            header("Location: index.php");
            break;
        } else {
            $_SESSION['error'] = 'Password anda salah';
            $not_found = true;
        }
    } else {
        $_SESSION['error'] = 'Password anda salah';
    }
}
if ($not_found == true) {
    header("Location: login.blade2.php");
} ?><?php /**PATH C:\xampp\htdocs\example-app\resources\views/process.blade.php ENDPATH**/ ?>