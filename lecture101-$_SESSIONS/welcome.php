<?php
$username = "admin";
$password = "admin";
session_start();
if (isset($_SESSION['username'])) {
    echo "
              <style>
                  /* CSS styles for welcome message and logout button */
                  h1 {
                      text-align: center;
                      margin-top: 50px;
                      font-size: 24px;
                      opacity: 0;
                      transform: translateY(-20px);
                      animation: fadeIn 0.5s ease forwards;
                  }
                  .logout-button {
                      display: block;
                      width: 120px;
                      margin: 20px auto;
                      padding: 10px;
                      background-color: #007bff;
                      color: #fff;
                      text-align: center;
                      border: none;
                      border-radius: 5px;
                      cursor: pointer;
                  }
                  .logout-button:hover {
                      background-color: #0056b3;
                  }
                  @keyframes fadeIn {
                      0% {
                          opacity: 0;
                          transform: translateY(-20px);
                      }
                      100% {
                          opacity: 1;
                          transform: translateY(0);
                      }
                  }
              </style>
          </head>
          <body>
              <h1>Welcome " . $_SESSION['username'] . "</h1>
              <a href='logout.php'><input type='button' value='Logout' class='logout-button'></a>
          </body>
          </html>";
} elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST['username'] == $username && $_POST['password'] == $password) {
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        echo "<script>alert('Username or password incorrect!')</script>";
        echo "PLEASE LOGIN FIRST";
        echo " <a href='login.php'><input type='button' value='LOGIN FIRST' class='logout-button'></a>";
    }
} else {
    echo "<script>alert('PLEASE LOGIN FIRST')</script>";
    echo "LOGIN REQUIRED";
    echo " <a href='login.php'><input type='button' value='LOGIN FIRST' class='logout-button'></a>";
}
