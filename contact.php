<?php
include 'partials/header.php';
?>




<div class="form__section">
        <h1>Contact Me</h1>
        <form action="contact-logic.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" name="name" id="name">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email">
            <label for="subject">Subject:</label>
            <input type="text" name="subject" id="subject">
            <label for="message">Message</label>
            <textarea name="message" cols="30" rows="10"></textarea>
            <input type="submit" value="Send">
        </form>
    </div>


    

    


    <script src="js/main.js"></script>

   
