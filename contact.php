<?php

if($_POST["submit"]) {
    $recipient="cherezzabo@gmail.com";
    $subject="New request from D&K Club";
    $sender=$_POST["user_name"];
    $phone=$_POST["user_phone"];

    $mailBody="Name: $sender\nPhone: $phone";

    mail($recipient, $subject, $mailBody, "From: $sender ");

    $thankYou="<p>Спасибо, мы приняли вашу заявку! В ближайшее время вам перезвонят по указанному вами телефону.</p>";
}

?>