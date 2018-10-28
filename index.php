    <?php include 'inc/header.php'; ?>
      <main class="mdl-layout__content mdl-color--grey-100">
        <div class="mdl-grid demo-content">
            <!-- Wide card with share menu button -->
          <style>
          .demo-card-wide.mdl-card {
            width: 100%;
            margin-top: 20px;
          }
          .demo-card-wide > .mdl-card__title {
            color: black;
            height: 100px;
            color: white;
          }
          .demo-card-wide > .mdl-card__menu {
            color: #fff;
          }
          </style>
                      
            <div class="mdl-grid">
              <div class="mdl-cell mdl-cell--4-col">
                <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                  <div class="mdl-card__title" style=" background-color:#e74c3c;">
                    <h2 class="mdl-card__title-text">Official Service Vehicles</h2>
                  </div>
                  <div class="mdl-card__supporting-text">
                    <?php
                            require_once "config.php";
                            $query1      =   "SELECT COUNT(*) FROM official_vehicles";
                            $result1     =   mysqli_query($dbconn,$query1);
                            $rows        =   mysqli_fetch_row($result1);
                            echo "<h4>Total Registered : ".$rows[0]."</h4>";  
                    ?>
                  </div>
                  <div class="mdl-card__actions mdl-card--border">
                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="h-official.php" style=" background-color:#e74c3c;color: white;">
                      View Record
                    </a>
                  </div>
                </div>
              </div>

            <div class="mdl-cell mdl-cell--4-col">
                <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                  <div class="mdl-card__title" style=" background-color:#2ecc71;">
                    <h4 class="mdl-card__title-text">Employee Service Vehicles</h4>
                  </div>
                  <div class="mdl-card__supporting-text">
                    <?php
                            require_once "config.php";
                            $query1      =   "SELECT COUNT(*) FROM employee_vehicles";
                            $result1     =   mysqli_query($dbconn,$query1);
                            $rows        =   mysqli_fetch_row($result1);
                            echo "<h4>Total Registered : ".$rows[0]."</h4>";  
                    ?>
                  </div>
                  <div class="mdl-card__actions mdl-card--border">
                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="h-employee.php" style=" background-color:#2ecc71;color: white;">
                      View Record
                    </a>
                  </div>
                </div>
              </div>

           <div class="mdl-cell mdl-cell--4-col">
                <div class="demo-card-wide mdl-card mdl-shadow--2dp">
                  <div class="mdl-card__title" style=" background-color:#3498db;">
                    <h3 class="mdl-card__title-text">Private Service Vehicles</h3>
                  </div>
                  <div class="mdl-card__supporting-text">
                    <?php
                            require_once "config.php";
                            $query1      =   "SELECT COUNT(*) FROM private_vehicles";
                            $result1     =   mysqli_query($dbconn,$query1);
                            $rows        =   mysqli_fetch_row($result1);
                            echo "<h4>Total Registered : ".$rows[0]."</h4>";  
                    ?>
                  </div>
                  <div class="mdl-card__actions mdl-card--border">
                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="h-private.php" style=" background-color:#3498db;color: white;">
                      View Record
                    </a>
                  </div>
                </div>
              </div>

            </div>
          </div>
         
      <?php include 'inc/footer.php'; ?>
    
