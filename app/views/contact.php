<?php
$this->layout('master') ?>

<h1>Contact View</h1>
<!-- the values from the form are sent to the controller through the Router under the name of the input using the variable $_REQUEST -->
<form action="/contact" method="post">
    <input type="text" name="name" placeholder="Name">
    <input type="email" name="email" placeholder="Email">
    <textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>
    <button type="submit">Send</button>
</form>
<div>
    <?php  

    if (isset($name)) {
        echo "Name: {$name}";
    };
    if (isset($email)) {
        echo "Email: {$email}";
    };
    if (isset($message)) {
        echo "Message: {$message}";
    };

    ?>
</div>