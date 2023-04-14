<?php

// This argument is used to pass properties from the data source (home.php) to the view master for rendering the view.
$this->layout('master', ['title' => 'My title']); 

?>
<!-- The variable $name is passed from HomeController.php, it is a regular variable, so could be any name -->
<h1>Home View <?php echo $name; ?> </h1>