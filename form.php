<?php

//create short variable names
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$name=trim($name);
$email=trim($email);
$subject=StripSlashes($subject);
$message=StripSlashes($message);
//modify the next line with your own email address
$toaddress='loisbielefeld@gmail.com';


mail($toaddress,$subject,$message,"From: $name <$email>");
//clear the variables
$name='';
$email='';
$subject='';
$message='';
echo "response=passed";
	
?>