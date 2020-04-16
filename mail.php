<?php
    if (isset($_POST['submit'])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $comment=$_POST['comment'];

        $to='ami.ishtyak@gmail.com';
        $subject='From AmiIshtyak';
        $massage="Name: ".$name."\n\n"."Written:"."\n".$comment;
        $headers="From  ".$email;
        
        if(mail($to, $subject, $massage, $headers)){
            echo readfile("successful.html");
        }
        else echo readfile("error.html");
    }
?>