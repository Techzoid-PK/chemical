  <?php 
    if (isset($_POST['send'])) {
    $fname = $_POST['name'];
    $email = $_POST['email'];
    $num = $_POST['phone_no'];
    $msg = $_POST['msg'];

    $to = 'hankdennel@gmail.com';
    $email_subject = "Contact form submission:";
    $email_body = "You have received a new message \n Name: $fname \n Email: $email \n Phone No: $phone_no \n message: $msg";
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