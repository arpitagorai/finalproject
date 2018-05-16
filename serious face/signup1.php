<?php

$con = mysqli_connect('localhost','root','12345','clubs') or die ("Database Connection Failed");



$first=$_POST['first'];

$last=$_POST['last'];

$username=$_POST['username'];

$dep=$_POST['dep'];

$sem=$_POST['sem'];

$sec=$_POST['sec'];

$dob=$_POST['dob'];

$cn=$_POST['cn'];

$sex=$_POST['sex'];

$em=$_POST['EMAIL'];

$password=$_POST['password'];

$cpassword=$_POST['cpassword'];


if($password == $cpassword)

{

		
		//Checking the values are existing in the database or not

		$query = "insert into signup (first, last, username, intrest, duration,days, DOB, contact, gender,mail)
values('$first', '$last', '$username', '$dep', '$sem', '$sec', '$dob', '$cn', '$sex', '$em')";

		$result=mysqli_query($con, $query) or die("error".mysqli_error($con));


		$query2 = "insert into login (username, password) values('$username', '$password')";

		mysqli_query($con, $query2);

		?>
		
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array();
 window.ftypes = new Array();
fnames[0]='EMAIL';
ftypes[0]='email';
fnames[1]='FNAME';
ftypes[1]='text';
fnames[2]='LNAME';
ftypes[2]='text';
}(jQuery));
var $mcj = jQuery.noConflict(true);
</script>
<!--End mc_embed_signup-->
<script type='text/javascript'>alert('Signup Sucessfull');

    window.location.assign("login.html")
</script>";
  
		<?php

		//header("location: login.html");

		
}
else
{
	?><script type='text/javascript'>alert('Signup Failed');

		function newDoc() {
    window.location.assign("index.html")
}newDoc();
</script>";
  
		<?php
	//header("location: index.html");

}

mysqli_close($con);

?>