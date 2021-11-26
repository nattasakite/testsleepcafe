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

    <style>
        ::-webkit-scrollbar { width: 10px; }
        ::-webkit-scrollbar-track { background: none; }
        ::-webkit-scrollbar-thumb:hover { background: #555; }
        ::-webkit-scrollbar-thumb {
            background: rgb(116, 116, 116); 
            border-radius: 5px;
        }
        body { overflow: overlay; }
    </style>

</head>

<body>
    <div class="topnav fixed-top" id="myTopnav">
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
            </div> </div>
        <a href="contact.html" >CONTACT</a> 
        <a class="btn" href="cart.php" >
            <i class="fas fa-shopping-basket" ></i>
        </a>
        <div id="main">
    <button class="openbtn" style="background-color:#714e3531 " onclick="openNav()"><i class="fas fa-user" ></i></button>  
    </div>

</div>
</div>

<!-- ************************add this********************************* -->
<div id="mySidebar" class="sidebar">
 
<!-- content -->
<div class="p-5 container d-flex flex-wrap float-right " style="position: absolute;    padding-right: 0px !important;">

  <div class="m-2 cardd" style="width:40rem;; padding-top: 20px;">
     <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
 
    <img class="center" style="top:9rem;border-radius: 0% 0% 20% 20%; width: 17rem;" src="0.jpg">
  <div class="card-body" style="padding: 0rem 1rem;" >
        <i class="fas fa-star center" style="color: Tomato; font-size:12pt; display: inline-block;"> vip user   </i> 
    <h3 class="center uwuu" style="margin-top: 1rem;">NAH NHANG MAH</h3> 
    <h5 class="center uwu"> order : 10001   |   review : 3</h5>
    <br>
    <br>
 

    <h5 class="center uwu" style="background-color: white;"> 
    Thank you so much! <i class="far fa-kiss-beam"></i> </h5> <br>
    <h5 class="center uwu" style="background-color: white;"> 
    We appriciate your words. </h5> <br>
   <h5 class="center uwu" style="background-color: white;"> 
    Do you want to tell us more? </h5><br>

<!-- <div> posted reviews</div> -->
<a href="#"> <i class="fas fa-edit center p-3" style="color: Tomato; display: inline-block;" >  write more reviews </i></a>
<br>
  <button class="buttonn buttonn2 center" style="margin: top 1rem;">check order</button> <br>
  <button class="buttonn buttonn2 center">log out</button>

  </div>
  </div>
  </div>



</div>
<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "40rem";
  document.getElementById("main").style.right = "40rem";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.top= "0";
}
</script>
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
            <th scope="col"></th>
            <th scope="col">Qty</th>
            <th scope="col"></th>
            <th scope="col">Price</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
        <?php
            include("config.php");
            
            $sql="SELECT * FROM cart";
            $objQuery = mysqli_query($objCon, $sql);
            $num = 1;
            while($rows = mysqli_fetch_array($objQuery))
            {
        ?>
        <tr>
            <th scope="row"><?php echo $num; ?></th>
            <td><?php echo $rows['name']; ?></td>
            
            <!-- decrease item -->
            <td>
            <form action="decrease.php" method="post">
                <input type="hidden" name="id" value="<?=$rows['ID']?>">
                <button type="submit" class="border-0 bg-transparent">
                    <div class="fas fa-minus" style="color: #d4c0ab;"></div>
                </button>
            </form>
            </td>

            <td style="text-align: center;"><?php echo $rows['quantity']?></td>

            <!-- add item -->
            <td> 
            <form action="add.php" method="post">
                <input type="hidden" name="id" value="<?=$rows['ID']?>">
                <button type="submit" class="border-0 bg-transparent">
                    <div class="fas fa-plus" style="color: #d4c0ab;"></div>
                </button>
            </form>
            </td>

            <td style="text-align: right;"><?php echo $rows['cost']; ?> ฿</td>

            <!-- drop item -->
            <td>
            <form action="delete.php" method="post">
                <input type="hidden" name="id" value="<?=$rows['ID']?>">
                <button type="submit" class="border-0 bg-transparent">
                    <div class="fas fa-trash-alt" style="color: #d4c0ab;"></div>
                </button>
            </form>
            </td>
        </tr>

        <?php 
            $num += 1;
            } 
        ?>
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
            $sql="SELECT SUM(cost*quantity) as price FROM cart";
            $objQuery = mysqli_query($objCon,$sql);
            $price = mysqli_fetch_array($objQuery)['price'];
        ?>
        <tr>
            <td>Food cost</td>
            <td style="text-align: right;"><?php echo $price; ?> ฿</td>
        </tr>
        <tr>
            <td>Delivery cost</td>
            <td style="text-align: right;">10.00 ฿</td>
        </tr>
        <tr>
            <td>Total</td>
            <td style="text-align: right;"><?php echo number_format($price+10, 2, '.') . " ฿";?></td>
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
        <a href="welcome.html">
            <button class="button button4">back to Menu</button>
        </a>
        <a href="finish.php" >
            <button class="button button1">Order now</button>
        </a>
    </div>


</div>



</html>