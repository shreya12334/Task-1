<?php 

$cust_id= $_GET['id'];
include("config.php");
$result = mysqli_query($mysql,"select * from customer where cust_id='$cust_id'");

?>


<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
 
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>TASK 1</title>
  

  
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700|Raleway:400,700&display=swap" rel="stylesheet" />

  
  <link href="css/style.css" rel="stylesheet" />
  
  <link href="css/responsive.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="index.css">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Fredoka+One&family=Koulen&family=Lobster&family=Nunito:ital,wght@0,300;1,200&family=Oswald&family=PT+Serif:ital@1&display=swap" rel="stylesheet">
</head>

<body>
<div class="hero_area">
  <header class="header_section">
    <div class="container-fluid">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index.html">
          <span>
              TASK 1
            </span>
          </a>
          <div class="navbar-collapse" id="">
            <div class="custom_menu-btn">
              <button onclick="openNav()">
              <span class="s-1"> </span>
              <span class="s-2"> </span>
              <span class="s-3"> </span>
            </button>
          </div>
          <div id="myNav" class="overlay">                       
            <div class="overlay-content">
              <a href="index.html">HOME</a>
               <a href="customer.php">CUSTOMER</a>
                <a href="transaction.php">TRANSACTION</a>
              </div>
            </div>
          </div>
        </nav>
        
        <div class="card" style="width: 18rem;">
        <img src="https://cdn.icon-icons.com/icons2/1378/PNG/512/avatardefault_92824.png" class="card-img-top" alt="...">
        <div class="card-body">
          <?php while($res=mysqli_fetch_array($result)){?>
             <h5 class="card-title" style="text-align:center;">Customer ID: <?php echo  $res ['cust_id'];?></h5>
             <p class="card-text"></p>
             </div>
             <ul class="list-group list-group-flush">
               <li class="list-group-item"><h6>Name: <?php echo $res ['cust_name'];?></h6></li>
               <li class="list-group-item"><h6>Email: <?php echo  $res ['cust_email'] ;?></h6></li>   
               <li class="list-group-item"><h6>Balance: <?php echo  $res ['balance'];?></h6></li>
              </ul>
              <?php }?>
            </div>
          </div>
        </header>
      </div>
    </div>

  

  

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>

  <script>
    function openNav() {
      document.getElementById("myNav").classList.toggle("menu_width");
      document
        .querySelector(".custom_menu-btn")
        .classList.toggle("menu_btn-style");
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>





