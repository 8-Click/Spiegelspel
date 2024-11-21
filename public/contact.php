<?php 
include_once("core/html.php");
?><link rel="stylesheet" href="<?=BASEURL_PUBLIC?>assets/css/contact.css"><?php
include_once("core/header.php");?>

<div class="homeContainer">
    <div class="textBox">CONTACT</div>
    <div class="contactForm">
        <form action="#">
            <label for="firstName">Voornaam</label>
            <input class="inputBox" type="text" id="firstname" name="firstname">
            <label for="lastname">Achternaam</label>
            <input class="inputBox" type="text" id="lastname" name="lastname">
            <label for="email">E-mail</label>
            <input class="inputBox" type="email" id="email" name="email">
            <label for="question">Vraag</label>
            <input class="inputBox" type="text" id="question" name="question">
            <input type="submit" value="Verzend">
        </form>
    </div>
</div>