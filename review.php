<?php
  include("header.php");
  session_start();  
?>


  <!-- php of review form -->
 
<?php
$error = "";
$message = "";

if (array_key_exists("submit", $_POST)) {

    $link = mysqli_connect("localhost", "root", "", "recipee_website");

    if (mysqli_connect_error()) {
        die("There is an error in the connection.");
    }

     
    if (!$_POST['name']) {
        $error .= "Name is required.<br>";
    }
    if (!$_POST['email']) {
        $error .= "Email is required.<br>";
    }
     if (!isset($_POST['Recipe_title']) || empty($_POST['Recipe_title'])) {
    $error .= "Recipe title is required.<br>";
    }
    if (!$_POST['rating']) {
        $error .= "Rating is required.<br>";
    }
    if (!$_POST['review']) {
        $error .= "Reviews is required.<br>";
    }

    if ($error != "") {
        $_SESSION['form_error'] = "<div class='alert alert-danger'>$error</div>";
    } else {
        $query = "INSERT INTO review (`Name`, `Email`, `Recipe_title`, `Rating`,`Reviews`) 
        VALUES (
            '" . mysqli_real_escape_string($link, $_POST['name']) . "',
            '" . mysqli_real_escape_string($link, $_POST['email']) . "',
            '" . mysqli_real_escape_string($link, $_POST['Recipe_title']) . "',
            '" . mysqli_real_escape_string($link, $_POST['rating']) . "',
            '" . mysqli_real_escape_string($link, $_POST['review']) . "'
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
 

<!-- html of review form -->

<body>
       
        <div class="review" id="review">
        <div class="container">
            <div class="row">
              <form method="post">
                <br>
                <h1 class="wow animate__animated animate__fadeInUp">REVIEW</h1>
                <p class="wow animate__animated animate__fadeInup">Your feedback helps us grow — share your experience and inspire others in our culinary community.</p>
                

                <?php
                 if (isset($_SESSION['form_success'])) {
                    echo $_SESSION['form_success'];
                    unset($_SESSION['form_success']); // Remove after showing
                    }

 
                   if (isset($_SESSION['form_error'])) {
                   echo $_SESSION['form_error'];
                   unset($_SESSION['form_error']); // Remove after showing
                   }
                ?>



                <div class="col-lg-12 col-md-12" id="left">
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon1"><i class="fa-solid fa-user"></i></span>
                        <input type="text" name="name" class="form-control" aria-describedby="sizing-addon1" placeholder="Full name">
                    </div>
                    <div class="input-group input-group-lg">
                        <span class="input-group-addon" id="sizing-addon1"><i class="fa-solid fa-envelope"></i></span>
                        <input type="text" name="email" class="form-control" aria-describedby="sizing-addon1" placeholder="Email address">
                    </div>

                    <div class="input-group input-group-lg" style="width: 840px;" >
                       <label for="recipe_id">Select Recipe:</label>
                       <select name="Recipe_title" class="form-control" required>
                       <option value="">Choose a recipe</option>
                         <?php
                          $conn = new mysqli("localhost", "root", "", "recipee_website");
                          $query = "SELECT Recipe_title FROM recipes";
                          $result = $conn->query($query);
                          while ($row = $result->fetch_assoc()):
                          ?>
                       <option value="<?= htmlspecialchars($row['Recipe_title']) ?>">
                       <?= htmlspecialchars($row['Recipe_title']) ?>
                       </option>
                       <?php endwhile; ?>
                      </select>
                    </div>
                    
                    
                     
                    <div class="input-group input-group-lg" style="width: 840px;" >
                         <label for="rating">Rating : </label>
                        <input type="number" name="rating" class="form-control"   placeholder="1-5" max="5" min="1">
                    </div>
                    
                

                    <div class="input-group">
                      <label for="review">Reviews : </label>
                        <textarea cols="109" name="review" style="color: #4c4c4c;" rows="6" class="form-control1" placeholder="Write your reviews here..."></textarea>
                    </div>
                    <button class="btn btn-lg btn-danger" name="submit">SUBMIT YOUR REVIEW!</button>
                </div>
                </form>
            </div>
        </div>
      </div>
</body>


<?php
  include("footer.php");
?>