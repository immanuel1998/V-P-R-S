<?php include 'inc/needlogin.php'; ?>
<?php include 'inc/header.php'; ?>
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
				  <div class="mdl-card__title mdl-card--expand" style="background-color: #6c5ce7; color: white;">
				    <h2 class="mdl-card__title-text">Logout</h2>
				  </div>
				  <div class="mdl-card__supporting-text">
				  	<input type="hidden" name="ID" value="<?php echo trim($_GET["ID"]); ?>"/>
				    <strong style="color: #6c5ce7;">Are you sure you want to logout?</strong>
				  </div>
				  <div class="mdl-card__actions mdl-card--border">
				    <a class="mdl-button mdl-button--colored mdl-js-button mdl-button--raised mdl-js-ripple-effect" style="background-color: #6c5ce7; color: white;" href="logout.php">
				      Yes
				    </a>
				    <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect"  href="index.php">
				      Cancel
				    </a>
				  </div>
				</div>
			</form>
		</div>
	
<?php include 'inc/footer.php'; ?>