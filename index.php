<?php

try{
    $db=new mysqli("localhost","root", "", "contact_form_db");


} catch(Exception $exc){
    echo $exc->getTraceAsString();
}

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['msg'])){
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $msg=$_POST['msg'];
    
    $is_insert= $db->query("INSERT INTO `contact_data`(`id`, `name`, `email`, `message`) VALUES ("$name","$email","$msg")");
    if($is_insert==TRUE){
        echo "<h2>Thank you, Your Request is Submitted</h2>";
        exit();
    }
}



?>

<html>
<head>
        <title>Contact Form</title>

</head>

<body>
    <form method="post" action="">
        <input type="text" name="name" placeholder="Name"><br><br>
        <input type="email" name="email" placeholder="Email"><br><br>
        <textarea name="msg" placeholder="Type you request"></textarea><br>
        <input type="submit" value="submit request">
    </form>    
</body>


</html>





