<?php
    $a = $_POST['pass'];
    $b = $_POST['pass2'];
    $mail = $_POST['mail'];
     if(!empty($_POST['login']) and !empty($_POST['pass2'] and !empty($_POST['pass']))){
         if($a==$b){
        $logpas= $_POST['login'].$_POST['pass'].$_POST['mail'];
        file_put_contents('C:/Users/Никита/Desktop/Кодинг/OpenServer/domains/Registration/Handler/avto/Autoriz/logpas.txt',$logpas,FILE_APPEND);
        mail($mail,'test','Code:');
        header('Location: /Handler/avto/index2.php');
        exit;
    }};
?>
