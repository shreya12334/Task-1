<?php
include("config.php");
$sender_name = $_POST['Custname'];
$rec_name = $_POST['Recname'];
$amount = (int)$_POST['amount'];

$sql = "insert into transaction (sender_name,rec_name,amount) values('$sender_name','$rec_name','$amount')";
$sql2 = "update customer set balance = balance+".$amount." where cust_name= '".$rec_name."' ";
$sql3 = "update customer set balance = balance-".$amount." where cust_name= '".$sender_name."' ";

if(mysqli_query($mysql, $sql) && mysqli_query($mysql, $sql2) && mysqli_query($mysql, $sql3)){
   
    


    header("location:customer.php");
       
    
   

}


    else
        echo "Error .\n".mysqli_error();
 
mysqli_close($mysql);


?>
