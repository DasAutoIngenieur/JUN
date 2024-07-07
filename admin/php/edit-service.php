<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
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
    <div class="container min-h screen flex-items-center py-5">
        <nav class="flex-items-center">
            
        </nav>
    </div>

    <div class="container">
        <div class="flex-items-center justify-center text-left py-6 px-28">
            <div class="max-w-md mx-auto mt-10 bg-white p-6 py-5 rounded-lg shadow-md">
                <h2 class="exo-2-regular text-xl font-semibold mb-4 text-center"></h2>
                <form action="#" method="POST">
                    <div class="mb-4">
                        <label for="name" class="exo-2-regular text-gray-700 font-medium mb-2">Name</label>
                        <input type="text" id="name" name="name" class="exo-2-regular w-full px-4 py-2 rounded-lg shadow-sm focus:outline-none">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="exo-2-regular block text-gray-700 font-medium mb-2">Email</label>
                        <input type="email" id="email" name="email" class="exo-2-regular w-full px-4 py-2 rounded-lg shadow-sm focus:outline-none">
                    </div>
                    <div class="mb-6">
                        <label for="name" class="exo-2-regular text-gray-700 font-medium mb-2">Service</label>
                        <input type="text" id="name" name="service" class="exo-2-regular w-full px-4 py-2 rounded-lg shadow-sm focus:outline-none">
                    </div>
                    <div class="mb-6">
                        <label for="name" class="exo-2-regular text-gray-700 font-medium mb-2">Request</label>
                        <textarea type="text" id="name" name="request" class="exo-2-regular w-full px-4 py-2 rounded-lg shadow-sm focus:outline-none"></textarea>
                    </div>
                    <button type="submit" name="sub" class="gray-500 bg-yellow-500 hover:bg-black text-black hover:text-white font-bold py-3 px-6 rounded-none transition-colors duration-200 ease-in inline-flex items-center space-x-2">Purchase</button>
                </form>
            </div>
        </div>
    </div>


    <?php
        error_reporting(1);
        include('connection.php');

        $id = $_GET['id'];
        $val = $con->query("Select * from service where id=$id");
        $data = mysqli_fetch_array($val);

            if(isset($_POST['sub'])) {
                $service_name=$_POST['name'];
                $service_email=$_POST['email'];
                $service_service=$_POST['service'];
                $service_request=$_POST['request'];
                
                $con->query("update parts set name='$service_name'
    ,email='$service_email',service='$service_service',request='$service_request' where id=$id");
    header('location:service.php');
                }
            ?>

<div class="container px-28 py-5">
    <footer class="flex flex-col space-y-10 justify-center m-10">
    
    </footer>
</div>
</body>
</html>


