<?php 
    if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $msg = $_POST['msg'];

    $to = 'hankdennel@gmail.com';
    $email_subject = "Contact form submission:";
    $email_body = "You have received a new message \n Name: $fname \n Email: $email \n message: $msg";
    mail($to,$email_subject,$email_body);
    }
?>
<script type="text/javascript">
     alert("Thank You! \n Your request has been sent. \n You will be contacted by a Client Service Representative shortly.");
     window.location.assign("contact.html"); 
  </script>
  <?php
  exit;
  ?>