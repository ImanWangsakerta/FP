<?php

    if(isset($_POST['username']) || isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        // echo $username;
        if ($username == 'admin@admin.com' && $password == 'admin'){
            header('Location: /');
        }else{
            echo "username atau password salah";
        }
    }
?>