<?php
  extract($_GET);
  include_once 'header.php';
  include_once 'sidebar.php';
  include 'includes/class-autoload.inc.php';
  if(isset($FloorID)) {
    $ID = $FloorID;
    $floor = new FloorsView();
    $resultFloor = $floor->showFloor($ID);
    if(!$resultFloor) {
      header("Location: floors");
      die();
    }
  }
?>
<div id="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="floors">Floor</a></li>
      <li class="breadcrumb-item active">
        <?php
          if(isset($ID)) {
              echo("Edit");
          }
          else {
            echo("Add");
          } 
        ?> Floor
      </li>
    </ol>
    <!-- Page Content -->
    <form action="routes" method="POST" enctype="multipart/form-data">
      <table align="center" cellpadding="10">
        <tr><h1 align="center">
          <?php
            if(isset($ID)) {
              echo("Edit");
            }
            else{
              echo("Add");
            } 
          ?> Floor Form
        </h1>
      </tr>
      <?php
        if(isset($ID)) {
          ?>
          <input name="FloorID" type="hidden" value="<?php echo($resultFloor['FloorID']);?>">
        <?php
        }
      ?>
          <input name="whereToGo" type="hidden" value="floors">

      <tr><td>Floor Name</td>
        <td>:</td>
        <td><input name="FloorName" type="text" value="<?php
        if(isset($ID)){
          echo($resultFloor['FloorName']);
        }
        ?>">
        </td>
      </tr>

      <tr><td>Building ID</td>
        <td>:</td>
        <td>
          <select name="BuildingID">
            <?php 
              $buildings = new BuildingsView();
              $resultBuildings = $buildings->showAllBuildings();
              foreach($resultBuildings as $resultBuilding): ?>
              <option value="<?php 
                echo($resultBuilding['BuildingID']);
                ?>" <?php
                  if(isset($ID) && $resultFloor['BuildingID'] == $resultBuilding['BuildingID']) {
                    echo 'selected';
                    }
                    ?>
                    >
                    <?php echo($resultBuilding['BuildingID']); ?>
                    </option>
            <?php endforeach; ?>
          </select>
        </td>
      </tr>

      <tr>
        <td colspan="3" align="center">
          <input type="submit" name="Submit" value="<?php
          if(isset($ID)) {
            echo("Edit");
          }
          else{
            echo("Add");
          } 
          ?>" class="btn btn-primary">
          
          <a href="floors" class="btn btn-info">Back to List</a></td>
      </tr>
    </table>
  </form>
<?php
  include_once 'footer.php';
?>