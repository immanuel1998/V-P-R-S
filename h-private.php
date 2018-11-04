<?php include 'inc/needlogin.php'; ?>
<?php include 'inc/header.php'; ?>
	 <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid">
			
			<div class="mdl-cell mdl-cell--12-col"><!-- Wide card with share menu button -->
			<style>
			.demo-card-wide.mdl-card {
			  width: 100%;
			}
			.demo-card-wide > .mdl-card__title {
			  color: #fff;
			  height: 500px;
			  background: url('../assets/demos/welcome_card.jpg') center / cover;
			}
			.demo-card-wide > .mdl-card__menu {
			  color: #fff;
			}
				.table-responsive { min-height: .01%; overflow-x: auto; } @media screen and (max-width: 767px) { .table-responsive { width: 100%; margin-bottom: 15px; overflow-y: hidden; -ms-overflow-style: -ms-autohiding-scrollbar; border: 1px solid #ddd; } .table-responsive>.table { margin-bottom: 0; } .table-responsive>.table>thead>tr>th, .table-responsive>.table>tbody>tr>th, .table-responsive>.table>tfoot>tr>th, .table-responsive>.table>thead>tr>td, .table-responsive>.table>tbody>tr>td, .table-responsive>.table>tfoot>tr>td { white-space: nowrap; } .table-responsive>.table-bordered { border: 0; } .table-responsive>.table-bordered>thead>tr>th:first-child, .table-responsive>.table-bordered>tbody>tr>th:first-child, .table-responsive>.table-bordered>tfoot>tr>th:first-child, .table-responsive>.table-bordered>thead>tr>td:first-child, .table-responsive>.table-bordered>tbody>tr>td:first-child, .table-responsive>.table-bordered>tfoot>tr>td:first-child { border-left: 0; } .table-responsive>.table-bordered>thead>tr>th:last-child, .table-responsive>.table-bordered>tbody>tr>th:last-child, .table-responsive>.table-bordered>tfoot>tr>th:last-child, .table-responsive>.table-bordered>thead>tr>td:last-child, .table-responsive>.table-bordered>tbody>tr>td:last-child, .table-responsive>.table-bordered>tfoot>tr>td:last-child { border-right: 0; } .table-responsive>.table-bordered>tbody>tr:last-child>th, .table-responsive>.table-bordered>tfoot>tr:last-child>th, .table-responsive>.table-bordered>tbody>tr:last-child>td, .table-responsive>.table-bordered>tfoot>tr:last-child>td { border-bottom: 0; } }
		
				
			</style>

			<?php
                    // Include config file
                    require_once "db/config.php";
                    $ID = 1;
                    // Attempt select query execution
                    $sql ="SELECT * FROM private_vehicles";
                    if($result = $dbconn->query($sql)){
                        if($result->num_rows > 0){
                        	$query1      =   "SELECT COUNT(*) FROM private_vehicles";
                            $result1     =   mysqli_query($dbconn,$query1);
                            $rows        =   mysqli_fetch_row($result1);
                            echo "<h4 style='text-align:center;'>Total Registered (Private Service Vehicles) : "."( ".$rows[0]." )"."</h4>";  
                        	echo "<div class='table-responsive'>";
                            echo "<table id='myTable' class='row-border hover stripe mdl-shadow--2dp ' style='width:100%;'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        
                                        echo "<th class='mdl-data-table__cell--non-numeric'>ID.</th>";
                                        echo "<th class='mdl-data-table__cell--non-numeric'>Plate No.</th>";
                                        echo "<th class='mdl-data-table__cell--non-numeric'>Driver</th>";
                                
                                        echo "<th class='mdl-data-table__cell--non-numeric'>Phone No.</th>";
                                        echo "<th class='mdl-data-table__cell--non-numeric'>Model</th>";
                                        
                                        echo "<th class='mdl-data-table__cell--non-numeric'>Color</th>";
                                        echo "<th class='mdl-data-table__cell--non-numeric'>Business Address</th>";
                                        echo "<th class='mdl-data-table__cell--non-numeric'>Permit No.</th>";
                                        echo "<th class='mdl-data-table__cell--non-numeric'>Remarks</th>";
                                        echo "<th class='mdl-data-table__cell--non-numeric'>Options</th>";
                                        
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = $result->fetch_array()){
                                    echo "<tr>";
                                        echo "<td class='mdl-data-table__cell--non-numeric'>" . $ID++ . "</td>";
                                        echo "<td class='mdl-data-table__cell--non-numeric'>" . $row['PlateNo'] . "</td>";
                                        echo "<td class='mdl-data-table__cell--non-numeric'>" . $row['Driver'] . "</td>";
                                        echo "<td class='mdl-data-table__cell--non-numeric'>" . $row['PhoneNo'] . "</td>";
                                        
                                        echo "<td class='mdl-data-table__cell--non-numeric'>" . $row['Model'] . "</td>";
                                        
                                        echo "<td class='mdl-data-table__cell--non-numeric'>" . $row['Color'] . "</td>";
                                        echo "<td class='mdl-data-table__cell--non-numeric'>" . $row['BusinessAdd'] . "</td>";
                                        echo "<td class='mdl-data-table__cell--non-numeric' style='color:red;'>" . $row['PermitNo'] . "</td>";
                                        echo "<td class='mdl-data-table__cell--non-numeric'>" . $row['Remarks'] . "</td>";

                                        echo "<td>";
                                            echo "<a href='edit_private.php?ID=". $row['ID'] ."' title='Edit Record' data-toggle='tooltip'><img src='assets/images/edit.png' width='25'></a>";
                                            echo ' ';

                                            echo "<a href='delete_private.php?ID=". $row['ID'] ."' title='Delete Record' data-toggle='tooltip'><img src='assets/images/delete.png' width='25'></a>";
                          
                                        echo "</td>";
                                      
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            echo "</div>";
                            // Free result set
                            $result->free();
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . $dbconn->error;
                    }
                    
                    // Close connection
                    $dbconn->close();
                    ?>

			 <div class="mdl-card__actions mdl-card--border">
			    <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect" style="background-color: #3498db; color: white;" href="add_private.php">
					  Register New Vehicle
				</a>
                <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored" style="color: white;" href="TCPDF/User/private_vehicles.php">
                      Get PDF
                </a>
              </div>
			  </div>
			 
			</div>
     	</div>

        <script type="text/javascript">
            $(document).ready(function(){
                $('#myTable').dataTable();
                //myTable is you table id.
                //
             });
        </script>

<?php include 'inc/footer.php'; ?>