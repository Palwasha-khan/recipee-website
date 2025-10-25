<?php
  include("header.php");
?>
 <style>
    .header {
      background-color: #bf5353 !important;
      height: auto;
      width: 100%;
      text-align: center;
      padding: 30px;
      color: #fff;
      padding-bottom: 50px!important;
    }
     .header h1 {
      margin-top: 100px;
      margin-bottom: 20px;
      font-size: 50px;
      
    }
     .header i{
      margin: 8px;
      color: #ddd;
    }


    .header h2 {
      margin-top: 20px;
      margin-bottom: 100px;
      font-size: 40px;
      
    }
   

    .header p {
      margin-top: 5px;
      color: #ddd;
      margin-left: 70px;

    }

     .mission{
    
    padding: 50px;
    margin-top: 100px;
     

}

.mission #rightside{
    padding: 30px;

}

.mission #leftside{
    padding: 30px;
    


}
.mission #leftside p{
    text-align: justify;
    line-height: 30px;
    font-size: 25;
    margin-top: 15px;
}
.mission #leftside h1{
    margin-bottom: 20px;
    font-size: 35;
}

.mission #rightside img{
    height: 300px;
    border-radius: 2px;
    margin-left: 15;


}

    .team {
      padding: 40px 20px;
      text-align: center;
      color: #141414;
      
    }
    .team .row{
      margin-left: 100px;
    }

    .team p {
      color: #4c4c4c;
      line-height: 25px;
      font-size: 20px;
      margin-bottom: 15px;
    }

    .team h1,
    .team h3 {
      margin-bottom: 20px;
    }

    .team img {
      height: 120px;
      width: 120px;
      border-radius: 50%;
      margin-top: 20px;
    }

    .team-member {
      margin: 30px 30px;
      background-color: #bf5353;
      padding: 30px;
      height: 430px;
      color: white;
      border-radius: 7px;
    }

    .social-icons a {
      margin-left: 7px;
      margin-top: 10px !important;
      color: rgb(64, 168, 64);
      font-size: 20px;
      transition: color 0.3s ease;
      background-color: white;
      border-radius: 50%;
      padding: 10px;

    }

    .social-icons a:hover {
      color: #0a8d2b;
    }

   
  </style>
</head>
<body>

  <!-- Header -->
  <div class="header">
    <div class="container ">
      <h1><i class="fa-solid fa-fire-burner"></i>
       <i class="fa-solid fa-utensils"></i>
       <i class="fa-solid fa-blender"></i></h1>
      
      <h2 class="wow animate__animated animate__rollIn">ABOUT <span style="font-family: 'DancingScript', cursive;">SiPa RECIPES</span></h2>
      <h4 class="wow animate__animated animate__lightSpeedInLeft animate__delay-1s">WHO WE ARE?</h4>
      <p class="wow animate__animated animate__zoomIn animate__delay-2s" >From timeless classics to contemporary creations, each recipe is designed to deliver both flavor and finesse.</P>
                
      <p class="wow animate__animated animate__zoomIn animate__delay-2s" >Recipiee is more than just a recipe website; it's a community built around the love of cooking and sharing culinary stories.</p>
      <p class="wow animate__animated animate__zoomIn animate__delay-2s"> We believe that every dish has a unique narrative, and we're here to help you discover and create your own.</p>
    </div>
  </div>

  <!-- mission section -->
      <div class="mission">
        <div class="container">
            <div class="col-lg-6 col-md-6 " id="leftside">
                <h1 class="wow animate__animated animate__lightSpeedInLeft">WHY ARE WE DIFFERENT ? </h1>
                <P class="wow animate__animated animate__fadeInup animate__slower">To empower and inspire our audience by providing valuable content, tools, and resources that make a difference in their lives.</P>
                <p class="wow animate__animated animate__fadeInup">To create a seamless online experience that solves problems, fosters learning, and builds a strong community.</p>
            </div>
            <div class="col-lg-6 col-md-6 " id="rightside">
                <img src="img/mission.jpg" alt="" class="wow animate__animated animate__zoomIn">
            </div>
        </div>
      </div>

  <!-- Team Section -->
  <div class="team">
    <div class="container">
      <h1 class="wow animate__animated animate__rollIn">OUR JOURNEY</h1>
      <p class="wow animate__animated animate__zoomIn animate__slow">A passionate team of food enthusiasts, developers, and creatives united by a love for culinary storytelling.</p>
      <div class="row justify-content-center">
        
        <!-- Team Member 1 -->
        <div class="col-lg-5 col-md-6 text-center team-member wow animate__animated animate__flipInY animate__slow" data-wow-delay="0.8s">
          <img src="img/team1.jpg" alt="Sijjad">
          <h4><b>Sijjad</b></h4>
          <b>Head Chef</b>
          <p>Sijjad brings years of culinary expertise and a passion for innovative recipes to Recipiee.</p>
          <div class="social-icons" style="margin-top: 10px;">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-pinterest-p"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
          </div>
        </div>

        <!-- Team Member 2 -->
        <div class="col-lg-5 col-md-6 text-center team-member wow animate__animated animate__flipInY animate__slow" data-wow-delay="1.2s">
          <img src="img/tean2.jpeg" alt="Palwasha">
          <h4><b>Palwasha</b></h4>
          <b>Creative Director</b>
          <p>Palwasha focuses on the user experience and the storytelling aspect of each recipe.</p>
          <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
            <a href="#"><i class="fab fa-pinterest-p"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
          </div>
        </div>

      </div>
    </div>
  </div>
      <?php
  include("footer.php");
?>