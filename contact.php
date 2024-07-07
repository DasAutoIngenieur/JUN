<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JUN Racing Technologies - Contact</title>
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
<body>
    <div class="container min-h screen px-28 py-5 bg-black">
        <nav class="">
            <ul class="text-center flex-items-center justify-start select-none">
                <li class="list-image-none inline-block px-5 mr-12"><a href="index.html"><img src="img/logo.png" class="w-15 h-11 cursor-pointer" alt="JUN_logo"></a></li>
                <li class="list-none inline-block px-5 navbar-link exo-2-extra-light"><a href="index.html" class="no-underline text-white px-2">Home</a></li>
                <li class="list-none inline-block px-5 navbar-link exo-2-extra-light"><a href="sales.html" class="no-underline text-white px-2">Vehicle Sales</a></li>
                <li class="list-none inline-block px-5 navbar-link exo-2-extra-light"><a href="parts.html" class="no-underline text-white px-2">Vehicle Parts</a></li>
                <li class="list-none inline-block px-5 navbar-link exo-2-extra-light"><a href="service.html" class="no-underline text-white px-2">Services</a></li>
                <li class="list-none inline-block px-5 navbar-link exo-2-extra-light"><a href="contact.html" class="no-underline text-white px-2">Contacts</a></li>
                <li class="list-none inline-block px-5 navbar-link exo-2-extra-light"><a href="demo.html" class="no-underline text-white px-2">Demo-Cars</a></li>
                <li class="list-none inline-block px-5 navbar-link exo-2-extra-light"><a href="about.html" class="no-underline text-white px-2">About</a></li>
                <li class="list-none inline-block px-3 navbar-link exo-2-extra-light"><a href="disclaimer.html" class="no-underline text-white px-2">Disclaimer</a></li>
            </ul>
        </nav>
       <!-- might want to add something here -->
    </div>

<div class="container">
    <div class="flex-items-center justify-center text-left py-6 px-28">
        <div class="max-w-md mx-auto mt-10 bg-white p-6 py-5 rounded-lg shadow-md">
            <h2 class="exo-2-regular text-xl font-semibold mb-4 text-center">Get in touch with us</h2>
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
                    <label for="message" class="exo-2-regular block text-gray-700 font-medium mb-2">Message</label>
                    <textarea id="message" name="message" class="exo-2-regular w-full px-4 py-2 rounded-lg shadow-sm focus:outline-none" rows="4" placeholder="Your Message"></textarea>
                </div>
                <button type="submit" name="sub" class="gray-500 bg-yellow-500 hover:bg-black text-black hover:text-white font-bold py-3 px-6 rounded-none transition-colors duration-200 ease-in inline-flex items-center space-x-2">Send Message</button>
            </form>
        </div>
        <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    include('connection.php');

    if(isset($_POST['sub'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $query = "INSERT INTO `contact` VALUES ('', '$name', '$email', '$message')";
        $con->query($query); 
        
        echo "<script>alert('Message Sent')</script>";
    }
?>

    </div>
</div>

<!-- ignore the br tags -->
<br>
<br>
<br>
<!--  -->

<div class="container">
    <div class="flex-items-center justify-center text-left py-6 px-28">
        <h3 class="bebas-neue-regular text-black text-3xl">Showroom Info</h3>
        <p class="bebas-neue-regular text-black text-2xl px-28 pt-4 leading-relaxed tracking-wider">Address: 759-1 Sankakucho,
            Hanamigawa-Ku,
            Chiba, 262-0011</p>
        <p class="bebas-neue-regular text-black text-2xl px-28 leading-relaxed tracking-wider">Phone: 043-216-8808</p>
        <p class="bebas-neue-regular text-black text-2xl px-28 pb-4 leading-relaxed tracking-wider">Email: onizuka@junracing-jpn.com</p>
    </div>

</div>

<div class="container px-28 py-5 bg-black">
    <footer class="flex flex-col space-y-10 justify-center m-10">

        <nav class="flex justify-center flex-wrap gap-6 text-white font-medium">
            <a class="text-white hover:text-red-600 transition-colors duration-200 ease-in exo-2-extra-light subpixel-antialiased" href="index.html">Home</a>
            <a class="text-white hover:text-red-600 transition-colors duration-200 ease-in exo-2-extra-light subpixel-antialiased" href="about">About</a>
            <a class="text-white hover:text-yellow-600 transition-colors duration-200 ease-in exo-2-extra-light subpixel-antialiased" href="contact.html">Contacts</a>
            <a class="text-white hover:text-yellow-600 transition-colors duration-200 ease-in exo-2-extra-light subpixel-antialiased" href="disclaimer.html">Disclaimer</a>
            <a class="text-white hover:text-green-600 transition-colors duration-200 ease-in exo-2-extra-light subpixel-antialiased" href="sales.html">Vehicle Sales</a>
            <a class="text-white hover:text-green-600 transition-colors duration-200 ease-in exo-2-extra-light subpixel-antialiased" href="parts.html">Vehicle Parts</a>
        </nav>
        <center>
            <a href="index.html">
                <img src="img/logo2.png" alt=""/>
            </a>
        </center>
        <div class="flex justify-center space-x-5">
            <a href="https://instagram.com" target="_blank" rel="noopener noreferrer">
                <img src="https://img.icons8.com/fluent/30/000000/instagram-new.png" />
            </a>
            <a href="https://twitter.com" target="_blank" rel="noopener noreferrer">
                <img src="https://img.icons8.com/fluent/30/000000/twitter.png" />
            </a>
        </div>
        <p class="text-center text-customYellow exo-2-regular">&copy; 2024 JUN RACING TECHNOLOGIES Inc,<br> All Rights Reserved.</p>
    </footer>
</div>
</body>
</html>