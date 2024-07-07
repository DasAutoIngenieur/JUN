<html>
    <head><title></title></head>
    <body>
        <label>Name</label>
        <input type="text" name="name" id="name">

        <label>email</label>
        <input type="email" name="email" id="email">

        <label>phone</label>
        <input type="text" name="phone" id="name">

        <label>car</label>
        <input type="text" name="car" id="name">

        <button type="submit" name="submit">Purchase</button>
    </body>
</html>


<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include('connection.php');

    if(isset($_POST['sub'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $car = $_POST['car'];

        $query = "INSERT INTO `sales` VALUES ('', '$name', '$email', '$phone', '$car')";
        $con->query($query); 
        
        echo "<script>alert('Purchase order sent!, We will contact you about Pricing shortly')</script>";
    }
    ?>