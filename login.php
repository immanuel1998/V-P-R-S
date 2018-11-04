<?php 
    require_once "db/config.php";
    $username = $password = "";
    $usernameErr = $passwordErr = "";

    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = trim($_POST["username"]);
            if(empty($username)){
                $usernameErr = "Username is required.";
            }
             else{
                $username = $username;
            }

         $password = trim($_POST["password"]);
            if(empty($password)){
                $passwordErr = "Password is required.";
            }
             else{
                $password = $password;
            }

        if ($username && $password) {
                $check_username = mysqli_query($dbconn, "SELECT * FROM users WHERE username ='$username'");
                $check_username_row = mysqli_num_rows($check_username);

        if ($check_username_row > 0) {
            
           while ($row = mysqli_fetch_assoc($check_username)) {
                $user_id = $row["user_id"];
                $db_password = $row["password"];
                $db_account_type = $row["account_type"];

            if ($password == $db_password) {

                    session_start();

                    $_SESSION["user_id"] = $user_id;

                    if ($db_account_type == "1") { 
                       
                        echo "<script>window.location.href='index.php';</script>";
                    }else {
                        echo "Error encountered. Please check your code.";
                    }
                    
                    }

                    }

                }
            }


    }
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <link rel="stylesheet" href="assets/material.min.css">
    <link rel="stylesheet" href="assets/css/loginform.css">
    <title>Login</title>
                <style type="text/css">
                
                .error {

                    color: red;

                }
                .mdl-layout {
                    align-items: center;
                  justify-content: center;
                }
                .mdl-layout__content {
                    padding: 24px;
                    flex: none;
                }
                .div_textfield {
                 margin-right: 20px;
                }
                #textfield {
                width: 300px;          
                }


            </style>
</head>
<body>
<div class="login-container">
  <section class="login" id="login">
    <header>
      <h2>V - P - R - S</h2>
    </header>
    <form class="login-form" method="POST" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <span style="color: red;"><?php echo $usernameErr;?></span>
      <input type="text" class="login-input" placeholder="Username" name="username" value="<?php echo $username; ?>"/>
      <span style="color: red;"><?php echo $passwordErr;?></span>
      <input type="password" class="login-input" placeholder="Password" name="password" value="<?php echo $password; ?>"/>
      <div class="submit-container">
        <button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">LOGIN</button>
      </div>
    </form>
  </section>
</div>
</body>
</html>