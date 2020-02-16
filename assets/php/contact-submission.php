---
---
<?php
  /*
  we will validate fields before getting here, but we need to have an escape in the event of some server error failling to send the messsage
  }
  */
  $to = "{{ site.email }}";
  $subject = "{{ site.title }} contact";
  $name = $_REQUEST['name'] ;
  $email = $_REQUEST['email'] ;
  $message = $_REQUEST['message'] ;
  // Sanitize E-mail Address
  $email =filter_var($email, FILTER_SANITIZE_EMAIL);

  $message_body = "Name: ".$_POST["name"]."\n";
  $message_body .= "Email: ".$_POST["email"]."\n";
  $message_body .= "Message: ".$_POST["message"]."\n";

  $headers = "From:" . $email;

  mail($to, $subject, $message_body, $headers);

  $subject_response = "Thank you for your message" ;

  $message_body_response = "Hi ".$_POST["name"]."\n\n";

  $message_body_response .= "This is an automated response to the message you sent whilst browsing {{ site.url }}{{ site.baseurl }}.\n\n";

  $message_body_response .= "Thank you for your message, we will get back to you as soon.\n\n\n";

  $message_body_response .= "{{ site.owner }}\n\n";
  $message_body_response .= "{{ site.title }}\n\n\n";

  $message_body_response .= "Your message:\n\n".$_POST["message"];

  $headers_response = "From:" . $to;

  mail($email, $subject_response, $message_body_response, $headers_response );

  $host  = $_SERVER['HTTP_HOST'];

  header("Location: {{ site.baseurl }}/contact-confirm/"); /* Redirect browser */
  exit();
?>
