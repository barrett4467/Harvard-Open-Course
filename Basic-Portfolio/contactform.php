<?php 

if($_POST["message"]){
    // $name=$_POST["first-name"] + $_POST["last-name"]
    mail("barrettcode@gmail.com", "Email from $name",
    $_POST["Hi this is the message:"]. "From: an@email.address");
}
?>