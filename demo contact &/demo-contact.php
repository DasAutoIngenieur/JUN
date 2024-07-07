<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Purchase Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="style.css" rel="stylesheet">
    <link href="carousel.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>
<body class="bg-black">
    <div class="container min-h screen flex-items-center py-5">
        <nav class="flex-items-center">
            <ul class="text-center flex-items-center justify-start select-none">
                <li class="list-image-none inline-block px-5 mr-12"><a href="../index.html"><img src="logo.png" class="w-15 h-11 cursor-pointer" alt="JUN_logo"></a></li>
            </ul>
        </nav>
       <!-- might want to add something here -->
    </div>

    <div class="container">
        <div class="flex-items-center justify-center text-left py-6 px-28">
            <div class="max-w-md mx-auto mt-10 bg-white p-6 py-5 rounded-lg shadow-md">
                <h2 class="exo-2-regular text-xl font-semibold mb-4 text-center"></h2>
                <form action="#" method="POST">
                    <div class="mb-4">
                        <label for="name" class="exo-2-regular text-gray-700 font-medium mb-2">Name</label>
                        <input type="text" id="name" name="name" class="exo-2-regular w-full px-4 py-2 rounded-lg shadow-sm focus:outline-none" placeholder="Your Name">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="exo-2-regular block text-gray-700 font-medium mb-2">Email</label>
                        <input type="email" id="email" name="email" class="exo-2-regular w-full px-4 py-2 rounded-lg shadow-sm focus:outline-none" placeholder="Your Email">
                    </div>
                    <div class="mb-6">
                        <label for="message" class="exo-2-regular block text-gray-700 font-medium mb-2">Request</label>
                        <textarea type="text" id="message" name="request" class="exo-2-regular w-full px-4 py-2 rounded-lg shadow-sm focus:outline-none" rows="4" placeholder="Your Message"></textarea>
                    </div>
                    <button type="submit" name="sub" class="gray-500 bg-yellow-500 hover:bg-black text-black hover:text-white font-bold py-3 px-6 rounded-none transition-colors duration-200 ease-in inline-flex items-center space-x-2">Purchase</button>
                </form>
            </div>
        </div>
    </div>


    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include('connection.php');

    if(isset($_POST['sub'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $request = $_POST['request'];

        $query = "INSERT INTO `demo` VALUES ('', '$name', '$email', '$request')";
        $con->query($query); 
        
        echo "<script>alert('Purchase order sent!, We will contact you about Pricing shortly')</script>";
    }
?>

<div class="container px-28 py-5">
    <footer class="flex flex-col space-y-10 justify-center m-10">
        <center>
            <a href="../index.html">
                <img src="logo2.png" alt=""/>
            </a>
        </center>
            <p class="text-center text-yellow-400 exo-2-regular">&copy; 2024 JUN RACING TECHNOLOGIES Inc,<br> All Rights Reserved.</p>
    </footer>
</div>
</body>
</html>