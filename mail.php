<?php

$to = "overnex03@gmail.com";
$sitename = "TinySlimeStudio.pl";
$body = "";

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$title = trim($_POST["title"]);
$text = trim($_POST["text"]);

$body = "Title: $title \nName: $name \nEmail: $email \nText: $text";

$pagetitle = "$sitename - $title";

mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient"); 

?>
