<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php
if (isset($_REQUEST['tels']))
//if "email" is filled out, send email
  {
  //send email
  $tels=$_REQUEST['tels'];


		$username = "sse-sahibj";
        $password = "sahibj";
        $type = "0";
        $dlr = "1";
        $destination;
        $source = "SAHIBJ";
        $message = "We have received your request for Call Back. We will get back to you shrotly. Regards, Sahibji Team";
		$message = str_replace(' ', '%20', $message);

//header("Location:http://quick.smseasy.in:8080/bulksms/bulksms?username=".$username."&password=".$password."&type=".$type."&dlr=".$dlr. "&destination=".$tels."&source=" .$source."&message=".$message);


$str= "?username=".$username."&password=".$password."&type=".$type."&dlr=".$dlr. "&destination=".$tels."&source=" .$source."&message=".$message;

echo "http://quick.smseasy.in:8080/bulksms/bulksms".$str;
$ch=curl_init();
 curl_setopt($ch,CURLOPT_URL,'http://quick.smseasy.in:8080/bulksms/bulksms'.$str);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_exec($ch);
 curl_close($ch); 
 $error=curl_error($ch);
 echo $error;
  }
?>



<form action="" method="post" target="_self" class="wpcf7-form" novalidate="novalidate">
  <p align="center">Enter Your Number (required)<br>
    <span class="wpcf7-form-control-wrap your-number">
    <input type="tel" aria-invalid="false" name="tels" aria-required="true" id="tels" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel" size="40" value="" name="your-number">
    </span> </p>
  <p align="center">+91-22-650XXXXX, +91-9820XXXXXX<br>
    Key in your contact no. above to talk to a Sahibji Travels associate immediately. </p>
  <p><br>
  </p>
  <p align="center">
    <input type="submit" class="wpcf7-form-control wpcf7-submit" value="Send">
</form>
</body>
</html>
