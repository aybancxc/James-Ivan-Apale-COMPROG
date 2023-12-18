<?php 
    include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayban's Shop</title>
    <link rel="stylesheet" href="port.css" type="text/css">

    <!-- boxicons link !-->
    <link rel="stylesheet"
  href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- googlefonts link !-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,900;1,800&display=swap" rel="stylesheet">
</head>
<body>
    
    <!-- header section !-->
    <header>
        <a href="#" class="logo"><span>J</span>ames Ivan Apale</a>

        <ul class="navbar">
        <i class='bx bxs-bell bx-tada' ></i>
            <li class="about1"><a href="/aboutme/about.html">About</a></li>
            <li><a href="login.php" >Log Out</a></li>
            <!-- <li><a href="#" target="_blank">Portfolio</a></li> -->
            <!-- <li><a href="/shoes shop/shoes.html" >Shoes Shop</a></li> 
        </ul>
        <div class="home-text">
            <!-- <span>Software Developer</span> -->
            <!-- <h1 class="name">James Ivan Apale</h1> -->
        </div>

        <!-- <div class="menu-btn">
            <span>INTRO</span>
            <div class="bx bx-menu" id="menu-icon"></div>
        </div> -->
        
    </header>
    <!--home section-->
    <section class="home">  
        
        <!-- <div class="home-text">
            <span>Software Developer</span>
            <h1 class="name">James Ivan Apale</h1>
        </div> -->
        <img src="eyy.jpg">
        <br>
        <h3>About my Self</h3>
    <!-- </section> -->
    <!--Custom js file link-->
    <section id="projects">
    <!-- <h2>Projects</h2> -->
    <div class="project" onclick="showProjectDetails('cashier.php')">
        <img class="logo-pizza" src="logo pizza.jpg" alt="Project 1">
        <h3>Pizza Shope</h3>
        
    </div>

    <div class="project" onclick="showProjectDetails('project2.html')">
        <img class="logo-pizza" src="shoe.jpg" alt="Project 2">
        <h3>Shoe Shop</h3>
        
    </div>
    <!-- Add more projects as needed -->
</section>
</section>

<!-- ... your existing HTML code ... -->

<script>
    function showProjectDetails(url) {
        window.location.href = url;
    }
</script>
    

</body>
     
</html> 
