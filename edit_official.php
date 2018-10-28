

	<?php 
	
		require_once "config.php"; 

	//Define Variables / Initialize with 0 values
	$PlateNo = $Driver = $EmployeeID = $Position = $Division = $PhoneNo = $Model = $Color = $PermitNo = $Remarks = "";
	$PlateNo_err = $Driver_err = $EmployeeID_err = $Position_err = $Division_err = $PhoneNo_err = $Model_err = $Color_err = $PermitNo_err = $Remarks_err = "";

	//Process data / Submit
	if(isset($_POST["ID"]) && !empty($_POST["ID"]))
	{
		$ID = $_POST["ID"];

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

		 $input_EmployeeID = trim($_POST["EmployeeID"]);
		    if(empty($input_EmployeeID)){
		        $EmployeeID_err = " : Please enter the EmployeeID.";     
		    }
		    else{
		        $EmployeeID = $input_EmployeeID;
		    }

		$input_Position = trim($_POST["Position"]);
		    if(empty($input_Position)){
		        $Position_err = " : Please enter Position.";
		    } else{
		        $Position = $input_Position;
		    }

	   $input_Division = trim($_POST["Division"]);
		    if(empty($input_Division)){
		        $Division_err = " : Please enter Division.";
		    } 
		    else{
		        $Division = $input_Division;
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
			    if(empty($PlateNo_err) && empty($Driver_err) && empty($EmployeeID_err) && empty($Position_err) && empty($Division_err) && empty($PhoneNo_err) && empty($Model_err) && empty($Color_err) && empty($PermitNo_err) && empty($Remarks_err)){
			        // Prepare an insert statement
			 		$sql = "UPDATE official_vehicles SET PlateNo=?, Driver=?, EmployeeID=?, Position=?, Division=?, PhoneNo=? , Model=?, Color=?, PermitNo=?, Remarks=?  WHERE ID=?";
			        if($stmt = $dbconn->prepare($sql)){
			            // Bind variables to the prepared statement as parameters
			            $stmt->bind_param("ssssssssssi", $param_PlateNo, $param_Driver, $param_EmployeeID, $param_Position, $param_Division, $param_PhoneNo, $param_Model, $param_Color, $param_PermitNo, $param_Remarks, $param_ID);
			            
			            // Set parameters
			            $param_PlateNo 			= $PlateNo;
			            $param_Driver 			= $Driver;
			            $param_EmployeeID 		= $EmployeeID;
			            $param_Position 		= $Position;
			            $param_Division	 		= $Division;
			            $param_PhoneNo			= $PhoneNo;
			            $param_Model 			= $Model;
			            $param_Color 			= $Color;
			            $param_PermitNo 		= $PermitNo;
			            $param_Remarks 			= $Remarks;
			            $param_ID 				= $ID;
			            
			            // Attempt to execute the prepared statement
			            if($stmt->execute()){
							// Records created successfully. Redirect to landing page
							echo "Successfully Added!";
			                header("location: h-official.php");
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
			else{
			    // Check existence of id parameter before processing further
			    if(isset($_GET["ID"]) && !empty(trim($_GET["ID"]))){
			        // Get URL parameter
			        $ID =  trim($_GET["ID"]);
			        
			        // Prepare a select statement
			        $sql = "SELECT * FROM official_vehicles WHERE ID = ?";
			        if($stmt = $dbconn->prepare($sql)){
			            // Bind variables to the prepared statement as parameters
			            $stmt->bind_param("i", $param_ID);
			            
			            // Set parameters
			            $param_ID = $ID;
			            
			            // Attempt to execute the prepared statement
			            if($stmt->execute()){
			                $result = $stmt->get_result();
			                
			                if($result->num_rows == 1){
			                    /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
			                    $row = $result->fetch_array(MYSQLI_ASSOC);
			                    
			                    // Retrieve individual field value
			                    $PlateNo 		= $row["PlateNo"];
			                    $Driver 		= $row["Driver"];
			                    $EmployeeID 	= $row["EmployeeID"];
			                    $Position 		= $row["Position"];
			                    $Division 		= $row["Division"];
			                    $PhoneNo 		= $row["PhoneNo"];
			                    $Model 			= $row["Model"];
			                    $Color 			= $row["Color"];
			                    $PermitNo 		= $row["PermitNo"];
			                    $Remarks		= $row["Remarks"];
			                    $ID 			= $row["ID"];


			                } else{
			                    // URL doesn't contain valid id. Redirect to error page
			                    header("location: error.php");
			                    exit();
			                }
			                
			            } else{
			                echo "Oops! Something went wrong. Please try again later.";
			            }
			        }
			        
			        // Close statement
			        $stmt->close();
			        
			        // Close connection
			        $dbconn->close();
			    }  else{
			        // URL doesn't contain id parameter. Redirect to error page
			        header("location: error.php");
			        exit();
			    }
			}
		?>
<?php include 'inc/header.php'; ?>
	<main class="mdl-layout__content mdl-color--grey-100">
		
        <div class="mdl-grid">
			<style type="text/css">
				
	.demo-card-wide.mdl-card {
			  width: 740px;
			  height: 510px;
			  
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
				color: #e74c3c;
			}
	</style>

<div id ="card_container">

<div class="demo-card-wide mdl-card mdl-shadow--2dp">
  <div class="mdl-card__title" style="background-color: #e74c3c;">
    <h2 class="mdl-card__title-text">Edit Details (Official)</h2>
  </div>
  
  
  <div class="mdl-card__supporting-text">
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
      
      <div class="div" >
	  <div  class="div_textfield mdl-textfield mdl-js-textfield mdl-textfield--floating-label" <?php echo (!empty($PlateNo_err)) ? 'has-error' : ''; ?>"> 
	    <input id="textfield" class="mdl-textfield__input" type="text" name="PlateNo" value="<?php echo $PlateNo; ?>">
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
	  <div  class="div_textfield mdl-textfield mdl-js-textfield  mdl-textfield--floating-label" <?php echo (!empty($EmployeeID_err)) ? 'has-error' : ''; ?>">
	    <input id="textfield" class="mdl-textfield__input" type="text" name="EmployeeID" value="<?php echo $EmployeeID; ?>" id="first">
	    <label class="form-label mdl-textfield__label">EmployeeID <span style="color: red;"><?php echo $EmployeeID_err;?></span>
	    </label>
	  </div>
	    <div  class="div_textfield mdl-textfield mdl-js-textfield mdl-textfield--floating-label" <?php echo (!empty($Position_err)) ? 'has-error' : ''; ?>">
	    <input id="textfield" class="mdl-textfield__input" type="text" name="Position" value="<?php echo $Position; ?>" id="last" >
	    <label class="form-label mdl-textfield__label">Position <span style="color: red;"><?php echo $Position_err;?></span>
	    </label>
	  </div>
      </div>

      <div class="div">
	  <div id="textfield" class="div_textfield mdl-textfield mdl-js-textfield mdl-textfield--floating-label" <?php echo (!empty($Division_err)) ? 'has-error' : ''; ?>">
	    <input class="mdl-textfield__input" type="text" name="Division" value="<?php echo $Division; ?>" id="first" >
	     <label class="form-label form-label mdl-textfield__label">Division <span style="color: red;"><?php echo $Division_err;?></span>
	    </label>
	  </div>
	     <div id="textfield"class="div_textfield mdl-textfield mdl-js-textfield mdl-textfield--floating-label" <?php echo (!empty($PhoneNo_err)) ? 'has-error' : ''; ?>">
		    <input class="mdl-textfield__input" type="text" name="PhoneNo" value="<?php echo $PhoneNo; ?>" id="last">
		     <label class="form-label mdl-textfield__label">Phone No. <span style="color: red;"><?php echo $PhoneNo_err;?></span>
	    	</label>
		    
		  </div>
      </div>
      <div class="div">
	  <div id="textfield" class="div_textfield mdl-textfield mdl-js-textfield mdl-textfield--floating-label" <?php echo (!empty($Model_err)) ? 'has-error' : ''; ?>">
	    <input class="mdl-textfield__input" type="text" name="Model" value="<?php echo $Model; ?>" id="first" >
	    <label class="form-label mdl-textfield__label">Model <span style="color: red;"><?php echo $Model_err;?></span>
	    </label>
	  </div>
	     <div id="textfield" class="div_textfield mdl-textfield mdl-js-textfield mdl-textfield--floating-label" <?php echo (!empty($Color_err)) ? 'has-error' : ''; ?>">
	    <input class="mdl-textfield__input" type="text" name="Color" value="<?php echo $Color; ?>" id="first" >
	    <label class="form-label mdl-textfield__label">Color <span style="color: red;"><?php echo $Color_err;?></span>
	    </label>

	  </div>
      </div>
      <div class="div">
	 
	      <div id="textfield" class="div_textfield mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <input class="mdl-textfield__input" type="text" name="PermitNo" value="<?php echo $PermitNo; ?>" id="first" >
		    <label class="form-label mdl-textfield__label">PermitNo <span style="color: red;"><?php echo $PermitNo_err;?></span>
	   	 	</label>
		  </div>
		  <div id="textfield" class="div_textfield mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
		    <input class="mdl-textfield__input" type="text" name="Remarks" value="<?php echo $Remarks; ?>" id="first" >
		    <label class="form-label mdl-textfield__label">Remarks <span style="color: red;"><?php echo $Remarks_err;?></span>
	   	 	</label>
		  </div>
      </div>
     
      <input type="hidden" name="ID" value="<?php echo $ID; ?>"/>
      <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" value="Submit">
       <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" style="background-color: #e74c3c; color: white;" href="h-official.php">
			   Cancel
	   </a>
      
</form>
  </div>
  
  
  
  
</div>
  </div>
</div>
</div>
	

<?php include 'inc/footer.php'; ?>