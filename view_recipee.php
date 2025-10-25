<?php
  include("header.php");
?>
 

                 <!-- php fetching recipe -->


    <?php
$conn = new mysqli("localhost", "root", "", "recipee_website");
$id = $_GET['id'];

$query = "SELECT * FROM recipes WHERE recipe_id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();
$recipe = $result->fetch_assoc();
$row = $result->fetch_assoc();
?>

                      <!-- html code -->

<!DOCTYPE html>
<html>
<head>
    <title><?= htmlspecialchars($recipe['Recipe_title']) ?></title>
     <style>
 
        .recipe-detail{

             border: 5px solid #4c4c44;
             width:  700px;
             margin: 100px auto; 
             padding: 30px;
             background-color: #fff;
             border-top-left-radius: 15%;
             border-bottom-right-radius: 15%;

        }

        .view h1{
            text-align: center;     

        }
         .recipe-detail img{
            height: 300px;
            width: 250px;
        }
        body{
            background-image: url('img/bg.jpeg');
            background-size: cover;             
            background-position: center center; 
            background-repeat: no-repeat;  
        }
        
</style>

</head>
<body>

                      <!-- show recipe -->

 
 

    <div class="view">
    <div class="recipe-detail">
        <h1><?= htmlspecialchars($recipe['Recipe_title']) ?></h1>
        <br>
        <hr>
        <div class="row">
            <div class="col-md-6" id="abc">
              <p><strong><i class="fa-regular fa-clock"></i> Total Time:</strong> <?= $recipe['total_time'] ?> mins</p>
            </div>

            <div class="col-md-6" id="abc">
               <p><strong><i class="fa-solid fa-utensils"></i> Servings:</strong> <?= $recipe['serving'] ?></p> 
            </div>
        </div><hr>
 <br><br>

        <div class="row">

        <div class="col-md-6" id="abc">
        <p><strong>  Prep Time:</strong> <?= $recipe['prep_time'] ?> mins</p>
        <p><strong>  Cook Time:</strong> <?= $recipe['cook_time'] ?> mins</p>
        <br>
        <h3><i class="fa-solid fa-bars-staggered"></i> Ingredients:</h3>
        <ul>
           <?php 
           $ingredients = explode(',', $recipe['ingredients']); 
           foreach($ingredients as $item): ?>
           <li><?= htmlspecialchars(trim($item)) ?></li>
          <?php endforeach; ?>
         </ul>
         </div>

         <div class="col-md-6" id="abc"> 
        <img src="recipe-img/<?= $recipe['recipe_img'] ?>" alt="Recipe Image">
        </div>
         </div><hr>


        <h3><i class="fa-solid fa-clipboard-list"></i> Instructions:</h3>
         <ol>
          <?php
          $steps = preg_split('/\d+\.\s*/', $recipe['instructions'], -1, PREG_SPLIT_NO_EMPTY);
          foreach ($steps as $step): ?>
          <li><?= htmlspecialchars(trim($step)) ?></li>
          <?php endforeach; ?>
          </ol>
       <br>
       <a href="recipee.php" class="back-link">← Back to All Recipes</a>
    </div>
    </div>

   
</body>
</html>


<?php
  include("footer.php");
?>