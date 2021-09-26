<?php
    $logpas = $_POST['login2'].$_POST['pass3'];
    if(!empty($_POST['login2']) && !empty($_POST['pass3'])){
        if (strpos(file_get_contents('logpas.txt'), $logpas) !== false){
            header('location: /Handler/avto/Autoriz/home-page/home-page.php');
            exit;
        } else {
            echo 'error';
        };
    };
?>