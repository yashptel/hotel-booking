<?php
  extract($_GET);
  include_once 'header.php';
  include_once 'sidebar.php';
  include 'includes/class-autoload.inc.php';
  if(isset($BuildingID)) {
    $ID = $BuildingID;
    $building = new BuildingsView();
    $resultBuilding = $building->showBuilding($ID);
    if(!$resultBuilding) {
      header("Location: buildings");
      die();
    }
  }
?>
<div id="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="buildings">Building</a></li>
      <li class="breadcrumb-item active">
        <?php
          if(isset($ID)) {
              echo("Edit");
          }
          else {
            echo("Add");
          } 
        ?> Building
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
          ?> Building Form
        </h1>
      </tr>
      <?php
        if(isset($ID)) {
          ?>
          <input name="BuildingID" type="hidden" value="<?php echo($resultBuilding['BuildingID']);?>">
        <?php
        }
      ?>
          <input name="whereToGo" type="hidden" value="buildings">

      <tr><td>Building Name</td>
        <td>:</td>
        <td><input name="BuildingName" type="text" value="<?php
        if(isset($ID)){
          echo($resultBuilding['BuildingName']);
        }
        ?>">
        </td>
      </tr>

      <tr><td>Building Location</td>
        <td>:</td>
        <td><input name="BuildingLocation" type="text" value="<?php
        if(isset($ID)){
          echo($resultBuilding['BuildingLocation']);
        }
        ?>">
        </td>
      </tr>

      <tr><td>Building Image</td>
        <td>:</td>
        <td><input id="fileToUpload" name="fileToUpload" type="file" accept="Image/.jpg, Image/.jpeg">
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
          
          <a href="buildings" class="btn btn-info">Back to List</a></td>
      </tr>
    </table>
  </form>
<?php
  include_once 'footer.php';
?>