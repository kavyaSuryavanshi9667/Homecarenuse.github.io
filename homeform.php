<?php
$msg="";
if(isset($_POST['Name']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['City']) && isset($_POST['Service'])){
	$name= ($_POST['Name']);
	$email=($_POST['email']);
    $email=($_POST['phone']);
	$subject=($_POST['City']);
	$message=($_POST['Service']);

	// mysqli_query($con,"insert into contact_us(name,email,mobile,comment) values('$name','$email','$mobile','$comment')");
	// $msg="Message has been successfully sent!";
	
	// $html="<table><tr><td>Name</td><td>$name</td></tr><tr><td>Email</td><td>$email</td></tr><tr><td>Mobile</td><td>$mobile</td></tr><tr><td>Comment</td><td>$comment</td></tr></table>";
	
	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tsl";
	$mail->SMTPAuth=true;
	$mail->Username="global9667@gmail.com";
	$mail->Password="bvjs gjoz lumz doxi";
	$mail->SetFrom("global9667@gmail.com");
	$mail->addAddress("global9667@gmail.com");
	$mail->IsHTML(true);
	$mail->Subject="Clara Contact Details";
	$mail->Body= " Name - $name
	<br>  Email - $email 
	<br>  Subject - $subject 
	<br>  Message - $message";
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		echo $msg;
	}else{
		//echo "Error occur";
	}
	// echo $msg;
}
?>