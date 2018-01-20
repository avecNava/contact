<?php 
require('smtp-validate-email.php');//it produce fatal error and stop script where as include produce arning and script will continue
$from =trim($_POST['inputEmail']);
$validator=new SMTP_Validate_Email($from);
//$validator->debug=true;
$smtp_results=$validator->validate();
//echo $smtp_results[$from];
var_dump($smtp_results);










/*// the email to validate $email = 'user@example.com'; // an optional sender $sender = 'user@mydomain.com';
 // instantiate the class $SMTP_Validator = new SMTP_validateEmail(); 
 // turn on debugging if you want to view the SMTP transaction $SMTP_Validator->debug = true;
  // do the validation $results = $SMTP_Validator->validate(array($email), $sender); 
  // view results echo $email.' is '.($results[$email] ? 'valid' : 'invalid')."\n";

// send email? if ($results[$email]) { //mail($email, 'Confirm Email', 'Please reply to this email to confirm', 'From:'.$sender."\r\n"); // send email } else { echo 'The email addresses you entered is not valid'; } ```








*/



?>