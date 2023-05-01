<?php
if (isset($_POST['submit'])) {
  header("Location: ../requestAppointment.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="src/images/uccLogo.png">
  <link rel="stylesheet" href="src/appointment-success-sub-style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>

<body>
  <section>
    <div>
    <div class="modal-box">
      <i class="fa-regular fa-circle-check"></i>
      <h2>Successfuly Submitted.</h2>
      <h3>We appreciate you sharing your concern.</h3>
      <h3>We'll get back to you once we reviewed your concern.</h3>
      <form method="POST">
        <div class="buttons">
          <button class="close-btn" name="submit">Close</button>
        </div>
      </form>
    </div>
  </section>
</body>

</html>