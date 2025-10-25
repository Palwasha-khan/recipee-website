<?php
  include("header.php");
?>

 <style>
        
        .header{
             background-color: #bf5353;    
              height: auto;
              padding: 30px;
              margin-top: 20px;
              margin-bottom: 60px;
               /* background-image: url('img/bg.jpeg');
             background-size: cover;             
             background-position: center center; 
             background-repeat: no-repeat;  */

        }
         
        #left{
            padding: 30px;
            width: 350px;
        }
        #left img{
            margin-top: 100px;
            height: 200px;
            width: 200px;
            border-radius: 10%;
          
        }
        #right{
            padding: 30px;
        }
        .header h1{
            text-align: left;
            font-size: 50px;
            color: #fff;
            margin-top: 100px;
            font-family: 'PlayfairDisplayItalic';
           
        }
        
        .header p{
            color: #ddd;
            text-align: justify;
            line-height: 30px;
            font-size: 20px;
            
        }
        body {
            background-color: #f9f9f9;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
         h1 i{
             
            margin-right: 4px;
            border: 2px solid #bf5353;
            border-radius: 5%;
            padding: 5px;
        }
        h1 {
            text-align: center;
            color: #bf5353;
            margin-top: 30px;
            margin-bottom: 30px;
        }
        form {
            text-align: center;
            margin: 20px;
        }
        select {
            padding: 8px 12px;
            font-size: 16px;
            border-radius: 6px;
            border: 1px solid #ccc;
        }

        .recipes {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            padding: 30px;
            max-width: 1200px;
            margin: auto;
            margin-bottom: 30px;
        }
        .recipe-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 12px;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.05);
            overflow: hidden;
            text-align: center;
            margin: 20px;
            transition: transform 0.2s ease;
        }
        .recipe-card:hover {
            transform: scale(1.02);
        }
        .recipe-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .recipe-card h2 {
            color: #4c4c4c;
            margin: 10px 0;
        }
        .recipe-card p {
            padding: 0 15px;
            color: #666;
        }
        .view-btn {
            display: inline-block;
            margin: 15px;
            padding: 10px 18px;
            background-color: #bf5353;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
        }
        .view-btn:hover{
            color:#f9f9f9;
            background-color:rgb(171, 86, 86)!important;
        }
        
    </style>

</head>

<!-- php -->


 <?php
$conn = new mysqli("localhost", "root", "", "recipee_website");
 
$categoryQuery = "SELECT DISTINCT category FROM recipes";
$categoryResult = $conn->query($categoryQuery);

 
$category = isset($_GET['category']) ? $_GET['category'] : null;

if ($category) {
    $query = "SELECT * FROM recipes WHERE category = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $category);
    $stmt->execute();
    $result = $stmt->get_result();
} else {
     $query = "SELECT * FROM recipes";
    $result = $conn->query($query);
}
?>


<body>
    <div class="header">
        <div class="conatiner">
         <div class="row">
          <div class="col-md-6" id="left">
          <img src="img/header12.jfif" alt="" srcset=""> 
          </div>
          <div class="col-md-6" id="right">
          <h1>RECIPES</h1>
          <p>We’ve organized these recipes every way we could think of so
             you don't have to! Dietary restrictions, weeknight dinners, meal prep recipes,
              some of our most tried-and-true… no matter how you browse, we’re sure you’ll find
               just what you were looking for.</p>
          </div>
          </div>
          
        </div>
    </div>
    <h1><i class="fa-solid fa-list-check"></i>    Browse Recipes</h1>

    <!-- Category Filter -->
    <form method="GET" action="recipee.php">
        <label for="category">Filter by Category:</label>
        <select name="category" onchange="this.form.submit()">
            <option value="">All Categories</option>
            <?php while ($row = $categoryResult->fetch_assoc()): ?>
                <option value="<?= htmlspecialchars($row['category']) ?>" 
                    <?= ($row['category'] == $category) ? 'selected' : '' ?>>
                    <?= htmlspecialchars($row['category']) ?>
                </option>
            <?php endwhile; ?>
        </select>
    </form>

    <!-- Recipes Grid -->
    <div class="recipes">
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="recipe-card wow animate__animated animate__flipInY  ">
                
                <img src="recipe-img/<?= htmlspecialchars($row['recipe_img']) ?>" alt="Recipe Image">
                <h2><?= htmlspecialchars($row['Recipe_title']) ?></h2>
                <p><?= htmlspecialchars($row['description']) ?></p>
                <a href="view_recipee.php?id=<?= $row['recipe_id'] ?>" class="view-btn">View Recipe</a>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>



<?php
  include("footer.php");
?>