<?php
include("config.php");
$result = mysqli_query($mysql,"select * from customer order by cust_id");
$result2 = mysqli_query($mysql,"select * from customer order by cust_id");
$result3 = mysqli_query($mysql,"select * from customer order by cust_id");
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
      </div>
    </header>

    <h2 style="color:#f2f2f2; margin-left:630px; font-family: 'Oswald', sans-serif;">CUSTOMER DETAILS</h2>
    
    <table id="customers">
      <tr>
        <th>SR.NO</th>
        <th>Name</th>
        <th>Email</th>
        <th>Balance</th>
      </tr>
      <tr>
        <?php
                    while($res=mysqli_fetch_array($result)){
                        echo '<tr>';
                        echo '<td><a href="viewcust.php?id='.$res['cust_id'].'">'.$res['cust_id'].'</a></td>';
                        echo '<td><a href="viewcust.php?id='.$res['cust_id'].'">'.$res['cust_name'].'</a></td>';
                        echo '<td><a href="viewcust.php?id='.$res['cust_id'].'">'.$res['cust_email'].'</a></td>';
                        echo '<td><a href="viewcust.php?id='.$res['cust_id'].'">'.$res['balance'].'</a></td>';
                         echo '</tr>';
                    }
                    ?>
   </tr>
  </table>
  
  <table id="button1">
     <tr>
        <td>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat" style="background-color:#04AA6D; border:#04AA6D;">Start Transaction</button>
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Transaction</h5>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                     </div>
                     <div class="modal-body">
                       <form action="transfer.php" method="post">
                         <div class="mb-3">
                           <label for="recipient-name"  class="col-form-label">Sender name:</label>
                           <select name="Custname" id="" class="form-control">
                             <option>Select Sender</option>
                             <?php 
                                        
                                       
                                    
                                        while($res2=mysqli_fetch_array($result2)){
                                            ?>
                                            <option value="<?php echo $res2['cust_name']?>"> <?php echo $res2['cust_name']?></option>
                                            
                                            <?php
                                        }
                                        
                                        

            
                                ?>
                                </select>
                              </div>
                               <div class="mb-3">
                                 <label for="recipient-name" class="col-form-label">Receiver name:</label>
                                 <select name="Recname" id="" class="form-control">
                                   <option>Select Reciever</option>
                                    <?php 
                                        
                                       
                                    
                                        while($res2=mysqli_fetch_array($result3)){
                                            ?>
                                            <option value="<?php echo $res2['cust_name']?>"> <?php echo $res2['cust_name']?></option>
                                            
                                            <?php
                                        }
                                        
                                        

            
                                ?>
                                 </select>
                                 </div>
                                  <div class="mb-3">
                                     <label for="recipient-name" class="col-form-label">Amount:</label>
                                     <input type="text" class="form-control" id="recipient-name" name="amount">
          </div>
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" style="background-color:#04AA6D; border:#04AA6D">Send</button>
        </form>
      </div>
    </div>
  </div>
      </td>
    </tr>
  </table>
   

    </div>
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