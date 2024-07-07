<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin Dashboard</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- tailwinds css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- style contains navbar animation, keyframes and fonts -->
    <link href="style.css" rel="stylesheet">
    <style>
        .table {
	  text-align: center;
      vertical-align: middle;
	  overflow: hidden;
	  width: 80%;
	  margin: 0 auto;
        display: table;
        padding: 0 0 8em 0;
        }
        th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd; /* Add a bottom border to all cells */
        border-right: 1px solid #ddd; /* Add a right border to all cells */
        }
        .button {
        display: inline-block;
        padding: 10px 20px;
        color: white;
        text-decoration: none;
        background-color: black;
        border: none; /* Remove default link styles */
        }
    </style>


</head>
<body>
    <div class="container min-h screen px-28 py-5 bg-black">
        <nav class="">
            <ul class="text-center flex-items-center justify-start select-none">
                <li class="list-none inline-block px-5 exo-2-extra-light"><a href="sales.php" class="no-underline text-white px-2">Vehicle Orders</a></li>
                <li class="list-none inline-block px-5 exo-2-extra-light"><a href="parts.php" class="no-underline text-white px-2">Part</a></li>
                <li class="list-none inline-block px-5 exo-2-extra-light"><a href="service.php" class="no-underline text-white px-2">Services</a></li>
                <li class="list-none inline-block px-5 exo-2-extra-light"><a href="contact.php" class="no-underline text-white px-2">Contact</a></li>
                <li class="list-none inline-block px-5 exo-2-extra-light"><a href="demo.php" class="no-underline text-white px-2">Demo-Cars</a></li>
            </ul>
        </nav>
       <!-- might want to add something here -->
    </div>

    <div class="container px-28 py-5">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Message</th>
                    <th colspan="2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                error_reporting(E_ALL);
                include('connection.php');
                $data = "SELECT * FROM contact ORDER BY id DESC";
                $val = $con->query($data);
                $i = 1;
                if ($val->num_rows > 0) {
                  while ($row = $val->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $i++ . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['message'] . "</td>";
                    echo "<td><a href='delete-contact.php?id={$row['id']}' class='button'>Delete</a></td>";
                    echo "<td><a href='edit-contact.php?id={$row['id']}' class='button'>Edit</a></td>";
                    echo "</tr>";
                  }
                } else {
                  echo "<tr><td colspan='7' class='text-center'><b>No data available</b></td></tr>";
                }
                ?>
              </tbody>
        </table>
    </div>
    
    
<div class="container px-28 py-5">
    <footer class="flex flex-col space-y-10 justify-center m-10">
        <p class="text-center text-black exo-2-regular">&copy; 2024 JUN RACING TECHNOLOGIES Inc,<br> All Rights Reserved. <br>Made by DasAutoIngenieur.</p>
    </footer>
</div>
</body>
</html>