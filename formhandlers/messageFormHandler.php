<?php require_once '../public/partials/header.php' ?>

<main>
   <section class="section-container">
      <?php
      $submit = $_POST['submit'];
    

      if (!isset($submit)) {
         echo "Something went wrong. Your message was not sent. Please try again.";
      } if (isset($submit)) {
         $name = $_POST['name'];
         $visitor_email = $_POST['email'];
         $message = $_POST['message'];
   
      if ($name === '' || $visitor_email === ''|| $message === '' ){
         header('Location: /index.php?mailsent');
      }
         
         $emailFrom = 'guest@drgabrielcodes.com';
         $subject = $_POST['subject'];
         
         $emailTo = "gabriel4n44@yahoo.com";
         $emailBody = 'You have a new message from ' . $name . 'at DrGabrielCodes\n' . 'Guesst\'s email: ' . $visitor_email . '\n\n' . $message . '\n';
         $headers = 'From: $emailFrom\r\n ';
         $headers .= 'Reply-To: $visitor_email\r\n';

         mail($emailTo, $subject, $emailBody, $headers);
         
         
         //header('Location: /index.php?mailsent');

         echo "Thank you " . $name . " for contacting us.  You have successfully sent a message to DGCodes.  <br>";
      } 

      ?>
      <p>Click
         <a href="/public/book-appointment.php">here</a> to go back to the appointment page
      </p>
      <p> Or click
         <a href="/index.php">here</a> to go back to the homepage.
      </p>
   </section>
</main>
<?php require_once '../public/partials/footer.php' ?>