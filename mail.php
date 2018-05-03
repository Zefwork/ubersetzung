<?php

$recepient = "info@web-clique.com";
$sitename = "Übersetzung";

$name = trim($_POST["name"]);
$email = trim($_POST["email"]);
$call = trim($_POST["call"]);
$message = "Имя: $name \nE-mail: $email \nТекст: $call";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");