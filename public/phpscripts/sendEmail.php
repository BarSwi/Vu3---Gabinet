<?php
    $_POST = json_decode(file_get_contents("php://input"), true);
    ini_set('display_errors','0');
    $message = $_POST['message'];
    $name = $_POST['name'];
    $checkbox = $_POST['checkbox'];
    if(isset($_POST['phone'])) $phone = $_POST['phone'];
    $email = $_POST['email'];
    if(!is_numeric($phone) || !isset($name) || !isset($message) || !$checkbox){
        echo '2';
        exit();
    }
    $subject = "Pytanie od: ".$name;
    $message_mail = "<h2>Imię i nazwisko: ".$name."</h2>";
    $message_mail .= "<h2>Adres email: ".$email."</h2>";
    if(isset($phone)){
        $message_mail .= "<h2>Numer telefonu: ".$phone."</h2>";
    }
    $message_mail .= "<h2>Pytanie: ".$message."</h2>";
    $headers = "From: Gabinet gabinet@gabinetdobreslowo.pl \r\n";
    $headers .= "Content-type: text/html \r\n";
    if(mail('gabinet.dobreslowo.jk@gmail.com', $subject, $message_mail, $headers)){
       echo '1';
       exit(); 
    }
    else{
        echo '2';
        exit();
    }
    
?>