<?php
  include("header.php");
?>
 
<head>
    
    <style>
          body{
            
            background-color: #bf5353;
          }
         .service{
          color: #4c4c4c;
           width: 700px;
          margin: 120px auto;
          background-color: #fff;
          border: 7px solid #4c4c4c;
          border-radius: 2%; 
          /* padding: 40px; */
         }
         .service h2{
        color: #bf5353; 
        text-align: center;
        }
         .input-group label {
          color: #4c4c4c;
         }
         .service input ,.service textarea,.service select{
          border: 1px solid #4c4c4c;
          width: 450px;
         }
    </style>
</head>


<!-- php of submit recipee -->

<?php
$conn = new mysqli("localhost", "root", "", "recipee_website");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['Recipe_title'];
    $category = $_POST['Category'];
    $description = $_POST['description'];
    $ingredients = $_POST['ingredients'];
    $instructions = $_POST['instructions'];
    $prep_time = $_POST['prep_time'];
    $cook_time = $_POST['cook_time'];
    $total_time = $_POST['total_time'];

    // Image handling
    $imageName = $_FILES['recipe_img']['name'];
    $imageTmp = $_FILES['recipe_img']['tmp_name'];
    $imagePath = "images/" . basename($imageName);

    // Move uploaded file to images folder
    if (move_uploaded_file($imageTmp, $imagePath)) {
        $stmt = $conn->prepare("INSERT INTO submit_recipe (Recipe_title, Category, description, ingredients, instructions, prep_time, cook_time, total_time, recipe_img) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssiiss", $title, $category, $description, $ingredients, $instructions, $prep_time, $cook_time, $total_time, $imageName);

        if ($stmt->execute()) {
            echo "Recipe submitted successfully!";
        } else {
            echo " Error saving recipe: " . $stmt->error;
        }
    } else {
        echo " Failed to upload image.";
    }
    if ($stmt->execute()) {
    header("Location: " . $_SERVER['PHP_SELF'] . "?submitted=true");
    exit();
}

}
?>


<!-- submit recipee form -->


<body>   
    <div class="service">
    <form action="service.php" method="POST" enctype="multipart/form-data"><br>
         <h2 class="wow animate__animated animate__fadeInUp">Submit Your Recipe</h2>
         <?php if (isset($_GET['submitted'])): ?>
         <div class="alert alert-success" id="success-message" style="width: 600px; margin:0 auto;">✅ Recipe submitted successfully!</div>
         <script>
            if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.pathname);
              }
             </script>
             <?php endif; ?>



    <!-- Recipe Title -->
    <div class="input-group input-group-lg">
      <label for="Recipe_title">Recipe Title:</label>
      <input type="text" class="form-control" name="Recipe_title"
             value="<?php echo isset($_POST['Recipe_title']) ? htmlspecialchars($_POST['Recipe_title']) : ''; ?>"
             required>
    </div>

    <!-- Category -->
    <div class="input-group input-group-lg">
      <label for="Category">Category:</label>
      <select class="form-control" name="Category" required>
        <option value="">Select Category</option>
        <option value="breakfast" <?php if (isset($_POST['Category']) && $_POST['Category'] == 'breakfast') echo 'selected'; ?>>Breakfast</option>
        <option value="lunch" <?php if (isset($_POST['Category']) && $_POST['Category'] == 'lunch') echo 'selected'; ?>>Lunch</option>
        <option value="dinner" <?php if (isset($_POST['Category']) && $_POST['Category'] == 'dinner') echo 'selected'; ?>>Dinner</option>
      </select>
    </div>

    <!-- Prep Time -->
    <div class="input-group input-group-lg">
      <label for="prep_time">Preparation Time (minutes):</label>
      <input type="number" class="form-control" name="prep_time"
             value="<?php echo isset($_POST['prep_time']) ? $_POST['prep_time'] : ''; ?>" required>
    </div>

    <!-- Cook Time -->
    <div class="input-group input-group-lg">
      <label for="cook_time">Cooking Time (minutes):</label>
      <input type="number" class="form-control" name="cook_time"
             value="<?php echo isset($_POST['cook_time']) ? $_POST['cook_time'] : ''; ?>" required>
    </div>

    <!-- Total Time -->
    <div class="input-group input-group-lg">
      <label for="total_time">Total Time (minutes):</label>
      <input type="number" class="form-control" name="total_time"
             value="<?php echo isset($_POST['total_time']) ? $_POST['total_time'] : ''; ?>" required>
    </div>

    <!-- Description -->
    <div class="input-group input-group-lg">
      <label for="description">Description:</label>
      <textarea class="form-control" name="description" rows="4"
                required><?php echo isset($_POST['description']) ? htmlspecialchars($_POST['description']) : ''; ?></textarea>
    </div>

    <!-- Ingredients -->
    <div class="input-group input-group-lg">
      <label for="ingredients">Ingredients (comma-separated):</label>
      <textarea class="form-control" name="ingredients" rows="4"
                required><?php echo isset($_POST['ingredients']) ? htmlspecialchars($_POST['ingredients']) : ''; ?></textarea>
    </div>

    <!-- Instructions -->
    <div class="input-group input-group-lg">
      <label for="instructions">Instructions:</label>
      <textarea class="form-control" name="instructions" rows="5"
                required><?php echo isset($_POST['instructions']) ? htmlspecialchars($_POST['instructions']) : ''; ?></textarea>
    </div>

    <!-- Image Upload -->
    <div class="input-group input-group-lg">
      <label for="recipe_img">Recipe Image:</label>
      <input type="file" class="form-control" name="recipe_img" accept="image/*" required>
    </div>

    <!-- Submit Button -->
    <div class="input-group input-group-lg">
      <input class="btn" type="submit" value="SUBMIT YOUR RECIPE">
    </div>

  </form>
</div>
</body>




<?php
  include("footer.php");
?>