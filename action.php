<?php
 $path = 'data.txt';
 if (isset($_POST['flname']) && isset($_POST['phone'])) {
    $fh = fopen($path,"a+");
    $string = $_POST['flname'].' - '.$_POST['phone'];
    fwrite($fh,$string); // Write information to the file
    fclose($fh); // Close the file
 }
?>
