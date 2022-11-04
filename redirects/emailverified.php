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
    <title>Verification Success</title>
    <link rel="icon" href="../src/images/uccLogo.png">
    <link rel="stylesheet" href="src/thankyouStyle.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
  </head>
  <body>
    <section>
      <div class="modal-box">
        <i class="fa-regular fa-circle-check"></i>
        <h2>Verification Successful.</h2>
        <h3>Thankyou for verifying your account. You can now log in with your student number.</h3>
        <h3>After you press the button, you will be redirected to the login page.</h3>
        <form method="POST" action="">
        <div class="buttons">
        <button  type="submit" name="submit" value="Close">Close</button>
        </div>
        </form>
      </div>
    </section>
  </body>
</html>