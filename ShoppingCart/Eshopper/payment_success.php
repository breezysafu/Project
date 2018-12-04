<?php
session_start();
if($_SESSION["paypalphp"]=="")
{
    ?>

    <script type="text/javascript">
        window.location="shop.php";
    </script>

    <?php
}
$link=mysqli_connect("localhost","root","rusakhatun");
mysqli_select_db($link,"shoppingcart");
$order_id=$_GET["id"];

$res=mysqli_query($link,"select * from checkout_address order by id=$order_id");
while($row=mysqli_fetch_array($res))
{
    $fname=$row["firstname"];
    $lname=$row["lastname"];
    $email=$row["email"];
    $address=$row["address"];
    $city=$row["city"];
    $pincode=$row["pincode"];
    $contactno=$row["contactno"];
}
mysqli_query($link,"insert into confirm_order_address VALUES('','$fname','$lname','$email','$address','$city','$pincode','$contactno') ");

$res=mysqli_query($link,"select id from confirm_order_address order by id desc limit 1");
while($row=mysqli_fetch_array($res))
{
    $id=$row["id"];
}

foreach($_COOKIE['item'] as $name1 => $value)
{
    $values11=explode("__",$value);

    mysqli_query($link,"insert into confirm_order_product VALUES('','$id','$values11[1]','$values11[2]','$values11[3]','$values11[0]','$values11[4]') ");

}

echo "your order get successfully, we'll deliver product soon";

$_SESSION["pay"]="";
$_SESSION["paypalphp"]="";

?>

<script type="text/javascript">
    setTimeout(function(){
        window.location="shop.php"
    },3000);
</script>
