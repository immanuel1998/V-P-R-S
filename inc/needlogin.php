 <?php 
      // Initialize the session
      session_start(); 
      // Check if the user is logged in, if not then redirect him to login page
        if (isset($_SESSION["user_id"])) {
        require_once "db/config.php";
        $user_id = $_SESSION["user_id"];

        $get_record = mysqli_query($dbconn, "SELECT * FROM users WHERE user_id = '$user_id'");
        while ($row_edit = mysqli_fetch_assoc($get_record)) {
            $db_username = $row_edit["username"];
            $db_password = $row_edit["password"];
        }


      } else {
        echo "<script>window.location.href='loginconfirmation.php';</script>";
      }
    ?>