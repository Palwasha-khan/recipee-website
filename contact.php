<?php
  include("header.php");
?>

  
 <!--  php section  -->

 <?php
session_start();  

$error = "";
$message = "";

if (array_key_exists("submit", $_POST)) 
{

    $link = mysqli_connect("localhost", "root", "", "recipee_website");

    if (mysqli_connect_error()) {
        die("There is an error in the connection.");
    }

     
    if (!$_POST['contactname']) {
        $error .= "Name is required.<br>";
    }
    if (!$_POST['contactemail']) {
        $error .= "Email is required.<br>";
    }
    if (!$_POST['contactmessage']) {
        $error .= "Message is required.<br>";
    }

    if ($error != "") {
        $_SESSION['form_error'] = "<div class='alert alert-danger'>$error</div>";
    } else {
        $query = "INSERT INTO contact (`Name`, `Email`, `Phone`, `Message`) 
        VALUES (
            '" . mysqli_real_escape_string($link, $_POST['contactname']) . "',
            '" . mysqli_real_escape_string($link, $_POST['contactemail']) . "',
            '" . mysqli_real_escape_string($link, $_POST['contactphone']) . "',
            '" . mysqli_real_escape_string($link, $_POST['contactmessage']) . "'
        )";

        if (!mysqli_query($link, $query)) {
            $_SESSION['form_error'] = "<div class='alert alert-danger'>Could not submit — try again later.</div>";
        } else {
            $_SESSION['form_success'] = "<div class='alert alert-success'>Your response was submitted — thank you!</div>";
        }

        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    }
 }
 ?>


 <!-- html section -->


 <div class="contact" id="contact">
     <div class="container">
         <div class="row">
               <form method="post">
                <br>
                  <h1 class="wow animate__animated animate__fadeInUp">CONTACT</h1>
                  <p class="wow animate__animated animate__fadeInup">We’d love to hear from you — reach out with your questions, feedback, or collaborations.</p>
                
                      <?php
                       if (isset($_SESSION['form_success'])) {
                         echo $_SESSION['form_success'];
                         unset($_SESSION['form_success']); 
                        }

 
                         if (isset($_SESSION['form_error'])) {
                           echo $_SESSION['form_error'];
                           unset($_SESSION['form_error']);  
                         }
                        ?>



                  <div class="col-lg-12 col-md-12" id="left">
                     <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon1"><i class="fa-solid fa-user"></i></span>
                        <input type="text" name="contactname" class="form-control" aria-describedby="sizing-addon1" placeholder="Full name">
                     </div>
                     <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon1"><i class="fa-solid fa-envelope"></i></span>
                        <input type="text" name="contactemail" class="form-control" aria-describedby="sizing-addon1" placeholder="Email address">
                     </div>
                     <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon1"><i class="fa-solid fa-phone"></i></span>
                        <input type="text" name="contactphone" class="form-control" aria-describedby="sizing-addon1" placeholder="phone">
                     </div>
                     <div class="input-group">
                        <textarea cols="112" name="contactmessage" style="color: #4c4c4c;" rows="6" class="form-control1" placeholder="Write your message here..."></textarea>
                     </div>
                     <button class="btn btn-lg btn-danger" name="submit">SUBMIT YOUR MESSAGE!</button>
                  </div>
             </form>
         </div>
     </div>
 </div>


<?php
  include("footer.php");
?>