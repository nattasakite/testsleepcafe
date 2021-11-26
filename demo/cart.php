<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- link to icon n bootstrap -->
    <script src="https://kit.fontawesome.com/e28f4cb1ad.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- custom css -->
    <link rel="stylesheet" href="css/style.css">

    <!-- connect to database -->
    <?php
    include("configBasket.php");
    ?>

</head>

<body>
    <div class="topnav " id="myTopnav">
    <!-- centered nav item -->
    <div class="d-flex justify-content-around">
    <!-- logo -->
    <a class="btn active" href="homepage.php" >
        <i class="fas fa-coffee" ></i> 
    </a>
    <a href="homepage.php" class="menu" >HOME</a> 
    <div class="dropdown">  <!-- menu -->
        <button class="dropbtn">MENU  <!-- menu-title -->
        <i class="fa fa-caret-down"></i>
        </button>
            <div class="dropdown-content">  <!-- menu-dropdown -->
                        <a href="beverage.php">BEVERAGE</a>
                        <a href="dessert.php">DESSERT</a>
                        <a href="food.php">FOOD</a>
                        <!-- <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a> -->
        </div> </div>
    <a href="contact.html" >CONTACT</a> 
    <a class="btn" href="cart.php" >
        <i class="fas fa-shopping-basket" ></i>
    </a>
    <a class="btn" href="profile.html" >
        <i class="fas fa-user" ></i>
    </a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
      
    </div>
    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
            x.className += " responsive";
            } else {
              x.className = "topnav";
            }
        }
    </script>
</body>

  <div>
  <h1 class="order">About Your Order </h1>
  </div>

<div class="card">
<div>
<table class="table">
<h1 class="myorder"> Order </h1>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Number</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
  <?php
          $sql="SELECT * FROM baskettest";
          $objQuery = mysqli_query($objCon,$sql);
          while($rows=mysqli_fetch_array($objQuery))
          {
            ?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $rows['name']; ?></td>
      <td>2</td>
      <td><?php echo $rows['price']; ?> ฿</td>
    </tr>
    <?php } ?>
    
  </tbody>
</table>
</div>

<div>
<table class="table">

  <thead>
   <h1 class="myorder"> Food Cost </h1>
  </thead>
  <tbody>
<?php
          $sql="SELECT price FROM baskettest";
          $objQuery = mysqli_query($objCon,$sql);
          $x = 0;
          while($rows=mysqli_fetch_array($objQuery))
          {
            $x = $x + $rows['price'];
          }
            ?>
    <tr>
      <td>Food cost</td>
      <td><?php echo $x; ?> ฿</td>
    </tr>
    <tr>
      <td>Delivery cost</td>
      <td>10 ฿</td>
    </tr>
    <tr>
      <td>Total</td>
      <td>20 ฿</td>
    </tr>
  </tbody>
</table>
</div>
<div>
<svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="303" height="144" viewBox="0 0 202 105.6"><g><rect x="0" y="0" width="202" height="96" fill="white"/><g transform="translate(13 10)"><g><rect x="10" y="0" width="2" height="76" fill="#535355"/><rect x="13" y="0" width="1" height="76" fill="#535355"/><rect x="16" y="0" width="1" height="76" fill="#535355"/><rect x="21" y="0" width="2" height="76" fill="#535355"/><rect x="24" y="0" width="1" height="76" fill="#535355"/><rect x="28" y="0" width="1" height="76" fill="#535355"/><rect x="32" y="0" width="1" height="76" fill="#535355"/><rect x="37" y="0" width="2" height="76" fill="#535355"/><rect x="40" y="0" width="1" height="76" fill="#535355"/><rect x="43" y="0" width="4" height="76" fill="#535355"/><rect x="48" y="0" width="1" height="76" fill="#535355"/><rect x="51" y="0" width="1" height="76" fill="#535355"/><rect x="54" y="0" width="1" height="76" fill="#535355"/><rect x="56" y="0" width="2" height="76" fill="#535355"/><rect x="60" y="0" width="1" height="76" fill="#535355"/><rect x="65" y="0" width="2" height="76" fill="#535355"/><rect x="68" y="0" width="2" height="76" fill="#535355"/><rect x="72" y="0" width="2" height="76" fill="#535355"/><rect x="76" y="0" width="1" height="76" fill="#535355"/><rect x="79" y="0" width="4" height="76" fill="#535355"/><rect x="85" y="0" width="1" height="76" fill="#535355"/><rect x="87" y="0" width="1" height="76" fill="#535355"/><rect x="89" y="0" width="4" height="76" fill="#535355"/><rect x="95" y="0" width="1" height="76" fill="#535355"/><rect x="98" y="0" width="2" height="76" fill="#535355"/><rect x="101" y="0" width="2" height="76" fill="#535355"/><rect x="105" y="0" width="2" height="76" fill="#535355"/><rect x="109" y="0" width="1" height="76" fill="#535355"/><rect x="111" y="0" width="1" height="76" fill="#535355"/><rect x="115" y="0" width="2" height="76" fill="#535355"/><rect x="120" y="0" width="2" height="76" fill="#535355"/><rect x="125" y="0" width="1" height="76" fill="#535355"/><rect x="128" y="0" width="1" height="76" fill="#535355"/><rect x="131" y="0" width="2" height="76" fill="#535355"/><rect x="136" y="0" width="1" height="76" fill="#535355"/><rect x="139" y="0" width="1" height="76" fill="#535355"/><rect x="142" y="0" width="1" height="76" fill="#535355"/><rect x="147" y="0" width="2" height="76" fill="#535355"/><rect x="150" y="0" width="1" height="76" fill="#535355"/><rect x="153" y="0" width="2" height="76" fill="#535355"/><rect x="158" y="0" width="3" height="76" fill="#535355"/><rect x="162" y="0" width="1" height="76" fill="#535355"/><rect x="164" y="0" width="2" height="76" fill="#535355"/><text x="88" y="88" text-anchor="middle" font-family="monospace" font-size="12" fill="black">Give us A++</text></g><defs>
			<linearGradient id="black" x1="0" x2="0" y1="0" y2="1">
				<stop offset="0%" stop-color="#000"/>
				<stop offset="100%" stop-color="#000"/>
			</linearGradient>
			<linearGradient id="navyBlue" x1="0" x2="0" y1="0" y2="1">
				<stop offset="0%" stop-color="#00379c"/>
				<stop offset="100%" stop-color="#00379c"/>
			</linearGradient>
			<linearGradient id="midnightGreen" x1="0" x2="0" y1="0" y2="1">
				<stop offset="0%" stop-color="#008000"/>
				<stop offset="100%" stop-color="#008000"/>
			</linearGradient>
			<linearGradient id="holo" x1="0" x2="0" y1="0" y2="1">
				<stop offset="0%" stop-color="#ae00ff"/>
				<stop offset="100%" stop-color="#009dff"/>
			</linearGradient>
			<linearGradient id="gradient" x1="0" x2="0" y1="0" y2="1">
				<stop offset="0%" stop-color="#d85bc6"/>
				<stop offset="100%" stop-color="#5c4cff"/>
			</linearGradient>
			<linearGradient id="neon" x1="0" x2="0" y1="0" y2="1">
				<stop offset="0%" stop-color="#00c400"/>
				<stop offset="100%" stop-color="#00612a"/>
			</linearGradient>
		</defs></g></g></svg>
</div>

<div style="width:100%; height:100%;  text-align:center">
<a href="Menu.html" >
<button class="button button4"  >back to Menu</button>
</a>
<a href="finish.php" >
<button class="button button1"   >Order now</button>
</a>
</div>


</div>

</html>


