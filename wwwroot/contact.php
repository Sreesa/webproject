<?php  

$txtFName=$_POST['txtFName'];
$txtLName=$_POST['txtLName'];
$txtCmpName=$_POST['txtCmpName'];
$txtJobTitle=$_POST['txtJobTitle'];
$txtTelephone=$_POST['txtTelephone'];
$txtEmail=$_POST['txtEmail'];
$ddlCountry=$_POST['ddlCountry'];
$txtURL=$_POST['txtURL'];
$txtDescription=$_POST['txtDescription'];
$fupAttach=$_POST['fupAttach'];
$chkNL=$_POST['chkNL'];

$to = "info@neo-elite.com";
$from="info@neo-elite.com";
$subject = 'Contact form submitted by a User';

$message ="Dear Admin,\r\nPlease find the Contact information provided by a user below.\r\n\r\n
First Name: " . $txtFName . "\r\n
Last Name: " . $txtLName . "\r\n
Company Name: " . $txtCmpName . "\r\n
Job Title: " . $txtJobTitle . "\r\n
Telephone: " . $txtTelephone . "\r\n
Email: " . $txtEmail . "\r\n
Country: " . $ddlCountry . "\r\n";

if($txtURL != "http://")
  $message = $message . "\r\nWebsite: " . $txtURL . "\r\n";

$message = $message . "\r\nProject Description: " . $txtDescription . "\r\n";

if(isset($_POST['chkNL']))
  $message = $message . "\r\nI would like to receive newsletter from Neomorph Technologies: Yes\r\n";
else
  $message = $message . "\r\nI would like to receive newsletter from Neomorph Technologies: No\r\n";
$message = $message . "\r\n\r\nRegards,\r\nFlintQube Infoways Private Ltd.";

// Start
/* GET File Variables */ 
$tmpName = $_FILES['attachment']['tmp_name']; 
$fileType = $_FILES['attachment']['type']; 
$fileName = $_FILES['attachment']['name']; 

/* Start of headers */ 
$headers = "From: $from"; 

if (file($tmpName)) { 
  /* Reading file ('rb' = read binary)  */
  $file = fopen($tmpName,'rb'); 
  $data = fread($file,filesize($tmpName)); 
  fclose($file); 

  /* a boundary string */
  $randomVal = md5(time()); 
  $mimeBoundary = "==Multipart_Boundary_x{$randomVal}x"; 

  /* Header for File Attachment */
  $headers .= "\nMIME-Version: 1.0\n"; 
  $headers .= "Content-Type: multipart/mixed;\n" ;
  $headers .= " boundary=\"{$mimeBoundary}\""; 

  /* Multipart Boundary above message */
  $message = "This is a multi-part message in MIME format.\n\n" . 
  "--{$mimeBoundary}\n" . 
  "Content-Type: text/plain; charset=\"iso-8859-1\"\n" . 
  "Content-Transfer-Encoding: 7bit\n\n" . 
  $message . "\n\n"; 

  /* Encoding file data */
  $data = chunk_split(base64_encode($data)); 

  /* Adding attchment-file to message*/
  $message .= "--{$mimeBoundary}\n" . 
  "Content-Type: {$fileType};\n" . 
  " name=\"{$fileName}\"\n" . 
  "Content-Transfer-Encoding: base64\n\n" . 
  $data . "\n\n" . 
  "--{$mimeBoundary}--\n"; 
}

$flgchk = mail ("$to", "$subject", "$message", "$headers"); 

header("Location: thankyou.html");
?>