<?php
include("config.php");
$result = mysqli_query($mysql,"select * from transaction order by id");

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
      </div>
    </header>
    <h2 style="color:#f2f2f2; margin-left:600px; font-family: 'Oswald', sans-serif;">TRANSACTION HISTORY</h2>
   
    <table id="customers">
  <tr>
    <th>ID</th>
    <th>Sender Name</th>
    <th>Reciever Name</th>
    <th>Amount</th>
    <th>Date and Time</th>
  </tr>
  <tbody>
                    <?php
                    while($res=mysqli_fetch_array($result)){
                        echo '<tr>';
                        echo '<td>'.$res['id'].'</td>';
                        echo '<td>'.$res['sender_name'].'</td>';
                        echo '<td>'.$res['rec_name'].'</td>';
                        echo '<td>'.$res['amount'].'</td>';
                        echo '<td>'.$res['time'].'</td>';
                       
                        echo '</tr>';
                    }

                    ?>


                </tbody>
</table>

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
</body>

</html>