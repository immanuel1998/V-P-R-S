	<?php 
	require_once "config.php"; 

	//Define Variables / Initialize with 0 values
	$PlateNo = $Driver = $PhoneNo = $Model = $Color = $BusinessAdd = $PermitNo = $Remarks = "";
	$PlateNo_err = $Driver_err = $PhoneNo_err = $Model_err = $Color_err = $BusinessAdd_err = $PermitNo_err = $Remarks_err = "";


	//Process data / Submit
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		 $input_PlateNo = trim($_POST["PlateNo"]);
		    if(empty($input_PlateNo)){
		        $PlateNo_err = " : Please enter Plate No. ";
		    }
		     else{
		        $PlateNo = $input_PlateNo;
		    }

		 $input_Driver = trim($_POST["Driver"]);
		    if(empty($input_Driver)){
		        $Driver_err = " : Please enter Driver.";
		    }  
		    else{
		        $Driver = $input_Driver;
		    }

		$input_PhoneNo = trim($_POST["PhoneNo"]);
		    if(empty($input_PhoneNo)){
		        $PhoneNo_err = " : Please enter the PhoneNo.";     
		    } else{
		        $PhoneNo = $input_PhoneNo;
		    }

		$input_Model = trim($_POST["Model"]);
		    if(empty($input_Model)){
		        $Model_err = " : Please enter Model.";
		    } else{
		        $Model = $input_Model;
		    }

		$input_Color = trim($_POST["Color"]);
		    if(empty($input_Color)){
		        $Color_err = " : Please enter Color.";
		    } 
		    else{
		        $Color = $input_Color;
		    }

		$input_BusinessAdd = trim($_POST["BusinessAdd"]);
		    if(empty($input_BusinessAdd)){
		        $BusinessAdd_err = ":Please enter B-Address.";
		    } 
		    else{
		        $BusinessAdd = $input_BusinessAdd;
		    }

		$input_PermitNo = trim($_POST["PermitNo"]);
		    if(empty($input_PermitNo)){
		        $PermitNo_err = " : Please enter PermitNo.";
		    } else{
		        $PermitNo = $input_PermitNo;
		    }

		$input_Remarks = trim($_POST["Remarks"]);
		    if(empty($input_Remarks)){
		        $Remarks_err = " : Please enter Remarks.";
		    }
		    else{
		        $Remarks = $input_Remarks;
		    }

		    // Check input errors before inserting in database
			    if(empty($PlateNo_err) && empty($Driver_err) && empty($PhoneNo_err) && empty($Model_err) && empty($Color_err) && empty($BusinessAdd_err) && empty($PermitNo_err) && empty($Remarks_err)){
			        // Prepare an insert statement
			        $sql = "INSERT INTO private_vehicles (PlateNo, Driver, PhoneNo, Model, Color, BusinessAdd, PermitNo, Remarks) VALUES (?, ?, ? , ?, ?, ?, ?, ?)";
			 
			        if($stmt = $dbconn->prepare($sql)){
			            // Bind variables to the prepared statement as parameters
			            $stmt->bind_param("ssssssss", $param_PlateNo, $param_Driver, $param_PhoneNo, $param_Model, $param_Color, $param_BusinessAdd,  $param_PermitNo, $param_Remarks);
			            
			            // Set parameters
			            $param_PlateNo 			= $PlateNo;
			            $param_Driver 			= $Driver;
			            $param_PhoneNo			= $PhoneNo;
			            $param_Model 			= $Model;
			            $param_Color 			= $Color;
			            $param_BusinessAdd 		= $BusinessAdd;
			            $param_PermitNo 		= $PermitNo;
			            $param_Remarks 			= $Remarks;
			            
			            // Attempt to execute the prepared statement
			            if($stmt->execute()){
							// Records created successfully. Redirect to landing page
							echo "Successfully Added!";
			                header("location: h-private.php");
			                exit();
			            } else{
			                echo "Something went wrong. Please try again later.";
			            }
			        }
			         
			        // Close statement
			        $stmt->close();
			    }
			    
			    // Close connection
			    $dbconn->close();
			}
	?>

<?php include 'inc/header.php'; ?>
	<main class="mdl-layout__content mdl-color--grey-100">
		
        <div class="mdl-grid">
			<style type="text/css">
				
			.demo-card-wide.mdl-card {
			  width: 740px;
			  height: 433px;
			  
			}

			.mdl-card__actions {
			  outline: skyblue solid 5px;
			  z-index: 4;
			}
			.div {
			  display:flex;
			  margin-top: 10px;
			  justify-content: left;
			}
			.demo-card-wide {
			  height: 200px;
			  // outline: limegreen 10px solid;
			}


			.demo-card-wide > .mdl-card__title {
			  color: #fff;
			  height: 64px;
			  background-color: #3498db;
			}

			.mdl-card__title-text {
			  position: relative;
			  top: 6px;
			  
			}

			.demo-card-wide > .mdl-card__menu {
			  color: #fff;
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

			#textfield {
			  width: 300px;			 
			}
			.div_textfield {
				 margin-right: 20px;
			}
			.form-label{
				color: #3498db;
			}
	</style>

<div id ="card_container">

<div class="demo-card-wide mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title" style="background-color: #3498db;">
    <h2 class="mdl-card__title-text">Register New Vehicle (Private)</h2>
  </div>
  
  
  <div class="mdl-card__supporting-text">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      
      <div class="div" >
	  <div  class="div_textfield mdl-textfield mdl-js-textfield mdl-textfield--floating-label" <?php echo (!empty($PlateNo_err)) ? 'has-error' : ''; ?>"> 
	    <input id="textfield" class="mdl-textfield__input" type="text" name="PlateNo" value="<?php echo $PlateNo; ?>" id="first">
	    <label class="form-label mdl-textfield__label">Plate No. <span style="color: red;"><?php echo $PlateNo_err;?></span>
		</label>
	   </div>
	    <div  class="div_textfield mdl-textfield mdl-js-textfield mdl-textfield--floating-label" <?php echo (!empty($Driver_err)) ? 'has-error' : ''; ?>">
	    <input id="textfield" class="mdl-textfield__input" type="text" name="Driver" value="<?php echo $Driver; ?>" id="last">
	    <label class="form-label mdl-textfield__label">Driver <span style="color: red;"><?php echo $Driver_err;?></span>
	    </label>
	  </div>
      </div>
      <div class="div">
	     <div id="textfield"class="div_textfield mdl-textfield mdl-js-textfield mdl-textfield--floating-label" <?php echo (!empty($PhoneNo_err)) ? 'has-error' : ''; ?>">
		    <input class="mdl-textfield__input" type="text" name="PhoneNo" value="<?php echo $PhoneNo; ?>" id="last">
		     <label class="form-label mdl-textfield__label">Phone No. <span style="color: red;"><?php echo $PhoneNo_err;?></span>
	    	</label>
		  </div>
		    <div id="textfield" class="div_textfield mdl-textfield mdl-js-textfield mdl-textfield--floating-label" <?php echo (!empty($Model_err)) ? 'has-error' : ''; ?>">
	    <input class="mdl-textfield__input" type="text" name="Model" value="<?php echo $Model; ?>" id="first" >
	    <label class="form-label mdl-textfield__label">Model <span style="color: red;"><?php echo $Model_err;?></span>
	    </label>
	  </div>
      </div>
      <div class="div">
	
	      <div id="textfield" class="div_textfield mdl-textfield mdl-js-textfield mdl-textfield--floating-label" <?php echo (!empty($Color_err)) ? 'has-error' : ''; ?>">
		    <input class="mdl-textfield__input" type="text" name="Color" value="<?php echo $Color; ?>" id="first" >
		    <label class="form-label mdl-textfield__label">Color <span style="color: red;"><?php echo $Color_err;?></span>
		    </label>
	      </div>
	       <div id="textfield" class="div_textfield mdl-textfield mdl-js-textfield mdl-textfield--floating-label" <?php echo (!empty($BusinessAdd_err)) ? 'has-error' : ''; ?>">
		    <input class="mdl-textfield__input" type="text" name="BusinessAdd" value="<?php echo $BusinessAdd; ?>" id="first" >
		    <label class="form-label mdl-textfield__label">Business Address <span style="color: red;"><?php echo $BusinessAdd_err;?></span>
		    </label>
	      </div>
      </div>
      <div class="div">
	      <div id="textfield" class="div_textfield mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <input class="mdl-textfield__input" type="text" name="PermitNo" value="<?php echo $PermitNo; ?>" id="first" >
		    <label class="form-label mdl-textfield__label">PermitNo <span style="color: red;"><?php echo $PermitNo_err;?></span>
	    </label>
		
		  </div>
		  <div id="textfield" class="div_textfield mdl-textfield mdl-js-textfield mdl-textfield--floating-label" <?php echo (!empty($Remarks_err)) ? 'has-error' : ''; ?>">
	    <input class="mdl-textfield__input" type="text" name="Remarks" value="<?php echo $Remarks; ?>" id="first" >
	    <label class="form-label mdl-textfield__label">Remarks <span style="color: red;"><?php echo $Remarks_err;?></span>
	    </label>
	  </div>
      </div>
      
      <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored"  value="Submit">
       <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" style="background-color: #3498db; color: white;" href="h-private.php">
			   Cancel
	   </a>
      
</form>
  </div>
  
  
  
  
</div>
  </div>
</div>
</div>
	

<?php include 'inc/footer.php'; ?>