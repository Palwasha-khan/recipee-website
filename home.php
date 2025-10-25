<?php
  include("header.php");
?>

<style>
    .header {
    background-image: url('img/home.jpeg');
    background-size: cover;             
    background-position: center center; 
    background-repeat: no-repeat;        
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    padding: 40px 30px;
    height: 100vh;   
    margin-top: 40px;
    position: relative;
    color: #ffffff;
    overflow: hidden;                  
   }

   .header h1{
   
    font-size: 50px;
   }

   .highlight{
    font-size: 60px;
    color: #ddd;
    font-weight: bold;
    font-family: 'Poppins';
    font-weight: 600;
    font-style: normal;
   }

   .header p{
    font-size: 35px;
   }

     body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            margin: 0;
            padding: 0;
        }
        h2.section-title {
            text-align: center;
            margin: 40px 0 20px;
            color: #bf5353;
        }
        .section {
            padding: 20px;
        }
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .card {
            background-color: #4c4c4c;
            color: white;
            width: 280px;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
            transition: transform 0.3s;
        }
        .card:hover {
            transform: scale(1.03);
        }
        .card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }
        .card-content {
            padding: 15px;
        }
        .card-content h3 {
            margin: 0 0 10px;
        }
        .card-content p {
            font-size: 14px;
            line-height: 1.4;
        }
        .card-content a {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 12px;
            background-color: #bf5353;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .category-section .card {
            background-color: white;
            color: #222220;
        }
        .category-section .card-content a {
            background-color: #bf5353;
            color: white;
        }
        .flex {
            margin: 50px;
        }
        :root {
        --animate-duration: 2s;
        --animate-delay: 0.9s;
}

</style>


    <!-- categories php-->

    <?php
      $conn = new mysqli("localhost", "root", "", "recipee_website");

     $quick_sql = "SELECT * FROM recipes WHERE total_time <= 30 LIMIT 3";
     $quick_result = $conn->query($quick_sql);

      $most_rated_sql = "SELECT * FROM recipes ORDER BY average_rating DESC LIMIT 3";
     $most_rated_result = $conn->query($most_rated_sql);
    ?>

<body>

<!-- header section -->
    
     <div class="header">
        <div class="container">
             
                 <h1 class="wow animate__animated animate__fadeInLeft"> Every <span class="highlight">recipee</span><br />
                has a <span class="highlight">story</span>
            </h1>
            <p class="wow animate__animated animate__zoomIn">let’s cook it together</p>
            
          
               
        </div>
      </div>

        <br><br><br>
        <hr>
        <div class="flex justify-center text-center mb-2 md:mb-3">
			<h2 class="wow animate__animated animate__fadeIn" ><span style="font-family: 'PlayfairDisplayItalic', serif;color: #bf5353;">SIMPLE RECIPES MADE FOR</span>
            <span style="font-family: 'DancingScript', cursive;color:rgb(99, 42, 42);"> real, actual, everyday life.</span></h2>
        </div>
        <hr>


<!-- Category Section -->

<div class="section category-section">
    <h2 class="section-title wow animate__animated animate__tada">Explore Categories</h2>
    <br><br>
    <div class="card-container">
        <div class="card">
            <img src="img/breakfast.jpeg" alt="Breakfast">
            <div class="card-content">
                <h3>Breakfast</h3>
                <a href="recipee.php?category=breakfast">View Recipes</a>
            </div>
        </div>
        <div class="card">
            <img src="img/lunch.jpeg" alt="Lunch">
            <div class="card-content">
                <h3>Lunch</h3>
                <a href="recipee.php?category=lunch">View Recipes</a>
            </div>
        </div>
        <div class="card">
            <img src="img/dinner.jpeg" alt="Dinner">
            <div class="card-content">
                <h3>Dinner</h3>
                <a href="recipee.php?category=dinner">View Recipes</a>
            </div>
        </div>
    </div>
</div>

<!-- Quick Recipes Section -->

<div class="section">
    <h2 class="section-title wow animate__animated animate__tada">Quick Recipes (Under 30 Minutes)</h2>
    <br>
    <div class="card-container">
        <?php while ($row = $quick_result->fetch_assoc()) { ?>
        <div class="card">
            <img src="recipe-img/<?php echo $row['recipe_img']; ?>" alt="<?php echo $row['Recipe_title']; ?>">
            <div class="card-content">
                <h3><?php echo $row['Recipe_title']; ?></h3>
                <p><?php echo substr($row['description'], 0, 80); ?>...</p>
                <a href="view_recipee.php?id=<?php echo $row['recipe_id']; ?>">View</a>
            </div>
        </div>
        <?php } ?>
    </div>
</div>

<!-- Most Rated Recipes Section -->

<div class="section">
    <h2 class="section-title wow animate__animated animate__tada">Top Rated Recipes</h2>
    <br>
    <div class="card-container">
        <?php while ($row = $most_rated_result->fetch_assoc()) { ?>
        <div class="card">
            <img src="recipe-img/<?php echo $row['recipe_img']; ?>" alt="<?php echo $row['Recipe_title']; ?>">
            <div class="card-content">
                <h3><?php echo $row['Recipe_title']; ?></h3>
                <p>Rating: <?php echo round($row['average_rating'], 1); ?> / 5</p>
                <a href="view_recipee.php?id=<?php echo $row['recipe_id']; ?>">View</a>
            </div>
        </div>
        <?php } ?>
    </div>
</div>


</body>



<?php
  include("footer.php");
?>