<?php 
    include('connection.php');
    session_start();
    date_default_timezone_set("Asia/Calcutta");

    $paymentid=$_POST['payment_id'];
    $productname=$_POST['product_name'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email_id=$_POST['email_id'];
    $product_amount=$_POST['product_amount'];
    $dt=date('Y-m-d h:i:s');

    $sql="insert into orders (product_name,payment_id,product_amount, firstname,lastname, emailid, added_date, payment_type) values ('".$productname."','".$paymentid."', '".$product_amount."','".$first_name."','".$last_name."','".$email_id."','".$dt."', 'SUCCESS')";

    $result=mysqli_query($conn,$sql);

    if($result){
        echo 'done';
        $_SESSION['paymentid']=$paymentid;
        $_SESSION['personname']=$first_name." ".$last_name;
        $_SESSION['productname']=$productname;
        $_SESSION['productamount']=$product_amount;
        $_SESSION['email']=$email_id;
        $_SESSION['date']=$dt;
    } else {
        echo "";
    }
?>