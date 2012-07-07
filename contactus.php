<head>
	<meta http-equiv="refresh" content="3; URL=/contact.html">
</head>
<?php
if(isset($_POST['email'])) {
     
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "chaselivingston@gmail.com";
    $email_subject = "SumSix Contact Form";
     
     
         
    $first_name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    
    $comments = $_POST['body']; // required
     

    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Name: ".clean_string($first_name)."\n";
    
    $email_message .= "Email: ".clean_string($email_from)."\n";
    
    $email_message .= "Comments: ".clean_string($comments)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.

Redirecting you back to previous page...
 
<?php
}
?>