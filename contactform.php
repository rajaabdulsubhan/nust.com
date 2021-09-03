<?php
	if(isset($_POST['submit'])){
		$name=$_POST['fullname'];
	  $email=$_Post['email'];
		$phone=$_POST['phone'];
    $address=$_POST['address'];
		$com=$_POST['comment'];
    

		$to='rajasubhankhan01@gmail.com'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message="Name :".$name."\n"."email :".$email."\n"."Phone :".$phone."\n"."comment :".$com."\n"."Wrote the following :"."\n\n".$address;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>
<!doctype html>
<html>
<head>
<meta name="viewport" content="with=device width, initial-scale=1.0">
<title>AL-MADINA PRINTERS</title>
<link rel="stylesheet" href="css/mysheet.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>
<body>
<section class="header">
<nav>
<a href=""><img src="images/amlogo.jpg"></a>
<div class="nav-links">
    <i class="fa fa-times" aria-hidden="true"></i>
    <ul>
      <ul>
        <li><a href="index.html">HOME</a></li>
        <li><a href="about.html">ABOUT</a></li>
        <li><a href="gallery.php">GALLERY</a></li>
        <li><a href="contactform.html">CONTACT</a></li>
</ul>
<i class="fa fa-bars" aria-hidden="true"></i>
</nav>
<div class="text-box">
<h1> Contact Us </h1>

</div>
</section>
<div class="contact-section">

  <div class="border"></div>
  <form action="index.html" method="POST">
    Name:<input type="text" name="name"/><br></br>
    Email: <input type="text" name="email"/><br></br>
    Phone number:<input type="number" name="phone"/><br></br>
    address:<input type="text" name="address"/><br></br>
    Comment:<input type="text" name="comment"><br></br>
  <input type="submit" name="save" value="submit"/>
  

</form>
</div>


  </body>
</html>
