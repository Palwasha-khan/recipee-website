<style>
    /* footer css */
 .footer{
    text-align: left;
    padding: 50px ;
    color: #fff;
    background-color: #222220;
    border-top:2px solid #ddd;
   
 }
 .footer h2{
    color: #4c4c4c;
    margin-bottom: 30px;
 }
 .footer a{
    font-size: 20px;
    margin-left: 7px;
    color: #fff;
 }
 .footer a:hover{
    color:rgb(178, 73, 73);
 }
 .footer input {
     margin-top: 7px;
     width: 250px;
 }
 .footer .btn{
    margin-top: 10px;
    
 }
 .copyright{
    text-align: center;
 }
 
</style>
<!-- footer -->
 <html>
   <body>
      
    
       <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4" id="aa">
                    <h2>CONTACT US</h2>
                    <p><i class="fa-solid fa-home"></i>  F-141,sector-4B,namalom,220120</p>
                    <p><i class="fa-solid fa-envelope"></i>  info@siparecipee.com</p>
                    <p><i class="fa-solid fa-phone"></i>  111-222-999</p>

                </div>
                <div class="col-lg-4 col-md-4" id="aa">
                    <h2>ABOUT</h2>
                    <P> Our platform curates authentic, homegrown recipes that blend tradition with modern culinary excellence.</p>
                    <p> We aim to inspire every kitchen with reliable, step-by-step guidance rooted in cultural richness.</p>
                    </div>
                <div class="col-lg-4 col-md-4" id="aa">
                    <h2>STAY IN TOUCH</h2>
                    <a href="#"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin"></i></a>
                    <a href="#"><i class="fa-brands fa-pinterest"></i></a>
                    <a href="#"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    <a href="#"><i class="fa-brands fa-github"></i></a>
                    <input type="email" name="email" id="" class="form-control" placeholder="subscribe for updates">
                    <button class="btn btn-success">SUBSCRIBE</button>
                </div>
            </div>
            <hr>
            <div class="copyright">
            &copy; 2025 Recipiee. All rights reserved.
        </div>
        </div>
       </div>
   
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
     <script src="js/wow.min.js"></script>
             <script>
document.addEventListener("DOMContentLoaded", function () {
  const currentPage = window.location.pathname.split("/").pop(); 
  const navLinks = document.querySelectorAll(".navbar-nav a");

  navLinks.forEach(link => {
    const href = link.getAttribute("href");
    const hrefPage = href.split("/").pop();  

    if (hrefPage === currentPage || (hrefPage === "home.php" && currentPage === "")) {
      link.classList.add("active");

      // Also highlight the <li> parent if you want the list item styled
      link.parentElement.classList.add("active");
    }
  });
});
</script>

    
</body>

</html>
