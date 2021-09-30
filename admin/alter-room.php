<?php
  extract($_GET);
  include_once 'header.php';
  include_once 'sidebar.php';
  include 'includes/class-autoload.inc';
  if(isset($roomID)) {
    $ID = $roomID;
    $rooms = new RoomsView();
    $resultRooms = $rooms->showRoom($ID);
    if(!$resultRooms) {
      header("Location: rooms");
      die();
    }
  }
?>
<div id="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="ListBuilding">Building</a></li>
      <li class="breadcrumb-item active">
        <?php
          if(isset($ID)) {
              echo("Edit");
          }
          else {
            echo("Add");
          } 
        ?> Room
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
          ?> Room Form
        </h1>
      </tr>
      <?php
        if(isset($ID)) {
          ?>
          <input name="RoomID" type="hidden" value="<?php echo($resultRooms['RoomID']);?>">
        <?php
        }
      ?>
          <input name="whereToGo" type="hidden" value="rooms">

      <tr><td>Room Number</td>
        <td>:</td>
        <td><input name="RoomNumber" type="number" value="<?php
        if(isset($ID)){
          echo($resultRooms['RoomNumber']);
        }
        ?>">
        </td>
      </tr>

      <tr><td>Room Type ID</td>
        <td>:</td>
        <td>
          <select name="RoomTypeID">
            <?php
              $roomTypes = new RoomTypesView();
              $resultRoomsTypes = $roomTypes->showAllRoomTypes();
            ?>
            <?php foreach($resultRoomsTypes as $resultRoomsType): ?>
              <option value="<?php echo($resultRoomsType['RoomTypeID']); ?>" <?php if(isset($ID) && $resultRooms['RoomTypeID'] == $resultRoomsType['RoomTypeID']) {echo 'selected';} ?>><?php echo($resultRoomsType['RoomTypeName']); ?></option>
            <?php endforeach; ?>
          </select>
        </td>
      </tr>

      <tr><td>Floor ID</td>
        <td>:</td>
        <td>
          <select name="FloorID">
            <?php
              $floors = new FloorsView();
              $resultFloors = $floors->showAllFloors();
            ?>
            <?php foreach($resultFloors as $resultFloor): ?>
              <option value="<?php echo($resultFloor['FloorID']); ?>" <?php 
                if(isset($ID) && $resultRooms['FloorID'] == $resultFloor['FloorID']) {
                  echo 'selected';
                  } ?>
                  >
                  <?php echo($resultFloor['FloorID'])." in Building ID ".($resultFloor['BuildingID']); ?>
                  </option>
            <?php endforeach; ?>
          </select>
        </td>
      </tr>

      <tr><td>Room Capacity</td>
        <td>:</td>
        <td>
        <select name="RoomCapacity">
            <?php 
              $maxCapacity = 6;
              for($count = 1; $count <= $maxCapacity; $count++):
            ?>
              <option value="<?php echo $count; ?>" 
              <?php 
                if (isset($ID) && $resultRooms['RoomCapacity'] == $count) {
                    echo 'selected';
                }
              ?>
              >
              <?php echo $count; ?>
              </option>
            <?php endfor; ?>
          </select>
        </td>
      </tr>

      <tr><td>Room Tariff</td>
        <td>:</td>
        <td><input name="RoomTariff" type="number" value="<?php
        if(isset($ID)){
          echo($resultRooms['RoomTariff']);
        }
        ?>">
        </td>
      </tr>

      <tr><td>Air Conditioned</td>
        <td>:</td>
        <td>
        <select name="IsAC">
              <option value="1" 
              <?php 
                if (isset($ID) && $resultRooms['IsAC'] == 1) {
                    echo 'selected';
                }
              ?>>
              Yes
              </option>
              <option value="0" 
              <?php 
                if (isset($ID) && $resultRooms['IsAC'] == 0) {
                    echo 'selected';
                }
              ?>>
              No
              </option>
          </select>
        </td>
      </tr>
      
      <tr><td>Television</td>
        <td>:</td>
        <td>
          <select name="IsTV">
            <option value="1" 
              <?php 
                if (isset($ID) && $resultRooms['IsTV'] == 1) {
                    echo 'selected';
                }
              ?>>
              Yes
            </option>
            <option value="0" 
              <?php 
                if (isset($ID) && $resultRooms['IsTV'] == 0) {
                    echo 'selected';
                }
              ?>>
              No
            </option>
          </select>
        </td>
      </tr>


      


      <tr><td>Room Image</td>
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
            
            <a href="rooms" class="btn btn-info">Back to List</a></td>
        </tr>
      </table>
    </form>
<?php
  include_once 'footer.php';
?>