<?php
error_reporting(0);
?>
    <html>
<body>

<form action="" method="get">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit" name="submit">
</form>

</body>
</html>
<?php
if (isset($_GET["submit"])) {
//if($_SERVER['REQUEST_METHOD']=='GET') {
    echo "Welcome" . $_GET["name"] . "<br>";
    echo "Your email address is:" . $_GET["email"];
}
 ?>