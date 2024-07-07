<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <style>
      body {
          display: flex;
          justify-content: center;
          align-items: center;
          height: 100vh;
          margin: 0;
      }
      form {
          border: 1px solid #ccc;
          padding: 20px;
          border-radius: 5px;
          width: 300px;
      }
      input[type="text"],
      input[type="password"] {
          width: 100%;
          padding: 10px;
          margin: 5px 0;
          border: 1px solid #ccc;
          border-radius: 3px;
          box-sizing: border-box;
      }
      input[type="submit"] {
          width: 100%;
          padding: 10px;
          margin-top: 10px;
          background-color: #007bff;
          color: #fff;
          border: none;
          border-radius: 3px;
          cursor: pointer;
      }
      input[type="submit"]:hover {
          background-color: #0056b3;
      }
  </style>
</head>

<body>
    <center>
      <h2 style="text-align: center;">Admin Login</h2>
        <form action="" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="n" required><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="p" required><br>
        <input type="submit" name="sub" value="Login">
        </form>

    <div class="login">
        <?php
        if (isset($_POST['sub'])) {
            $eid = htmlspecialchars($_POST['n']);
            $pass = htmlspecialchars($_POST['p']);

            if ($eid == '' || $pass == '') {
                echo "<p style=\"color: red; text-align: center;\">Please fill username and password</p>";
            } else {
                // Improved with proper password verification method
                if ($eid == "admin" && $pass == "sudobash") {
                    // Start a session and store user information if needed
                    session_start();
                    $_SESSION['user'] = $eid;
                    // Redirect to header loco
                    header("Location: home.html");
                    exit;
                } else {
                    echo "<p style=\"color: red; text-align: center;\">Username or password is incorrect</p>";
                }
            }
        }
        ?>
    </div>
    </center>
</body>
</html>