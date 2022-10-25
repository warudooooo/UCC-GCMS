<?php
  if (isset($_POST['submit'])) {
    header("Location: ../index.php");
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Verification</title>
    <link rel="icon" href="../src/images/uccLogo.png">
    <link rel="stylesheet" href="src/thankyouStyle.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
  </head>
  <body>
    <section>
      <div class="modal-box">
        <i class="fa-regular fa-circle-check"></i>
        <h2>Thank you.</h2>
        <h3>We have sent a verification email to you. Please check your email for confirmation.</h3>
        <h3>If there's no email, please check your spam folder.</h3>
        <form method="POST" action="">
        <div class="buttons">
        <button  type="submit" name="submit" value="Close">Close</button>
        </div>
        </form>
      </div>
    </section>
  </body>
</html>