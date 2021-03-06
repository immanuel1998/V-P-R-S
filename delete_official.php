<?php include 'inc/needlogin.php'; ?>
<?php include 'inc/header.php'; ?>
<?php
// Process delete operation after confirmation
if(isset($_POST["ID"]) && !empty($_POST["ID"])){
    // Include config file
    require_once "db/config.php";
    
    // Prepare a delete statement
    $sql = "DELETE FROM official_vehicles WHERE ID = ?";
    
    if($stmt = $dbconn->prepare($sql)){
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("i", $param_ID);
        
        // Set parameters
        $param_ID = trim($_POST["ID"]);
        
        // Attempt to execute the prepared statement
        if($stmt->execute()){
            // Records deleted successfully. Redirect to landing page
            echo "<script>window.location.href='h-employee';</script>";
            exit();
        } else{
            echo "Oops! Something went wrong. Please try again later.";
        }
    }
     
    // Close statement
    $stmt->close();
    
    // Close connection
    $dbconn->close();
} else{
    // Check existence of id parameter
    if(empty(trim($_GET["ID"]))){
        // URL doesn't contain id parameter. Redirect to error page
        header("location: error.php");
        exit();
    }
}
?>
	<main class="mdl-layout__content mdl-color--grey-100">
		<!-- Square card -->
		<style>
		.demo-card-square.mdl-card {
		  width: 320px;
		  height: 100px;
		}
		.demo-card-square > .mdl-card__title {
		  color: #fff;
		  background:
		    url('../assets/demos/dog.png') bottom right 15% no-repeat #46B6AC;
		}
		#card_container {
			  height: 600px;
			  width:100%;
			 display:flex;
			  flex-direction: row;
			  // outline: red solid 10px;
			  justify-content: center;
			  align-items: center;
			}
		</style>
		<div id="card_container">
			<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
				<div class="demo-card-square mdl-card mdl-shadow--2dp">
				  <div class="mdl-card__title mdl-card--expand" style="background-color: #e74c3c; color: white;">
				    <h2 class="mdl-card__title-text">Delete</h2>
				  </div>
				  <div class="mdl-card__supporting-text">
				  	<input type="hidden" name="ID" value="<?php echo trim($_GET["ID"]); ?>"/>
				    <strong style="color: #e74c3c;">Are you sure you want to delete this record?</strong>
				  </div>
				  <div class="mdl-card__actions mdl-card--border">
				  	<input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"  value="Yes">
				    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" style="background-color: #e74c3c; color: white;" href="h-official.php">
				      NO
				    </a>
				  </div>
				</div>
			</form>
		</div>
	
<?php include 'inc/footer.php'; ?>