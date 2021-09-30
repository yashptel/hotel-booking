<?php
  extract($_GET);
  include_once 'header.php';
  include_once 'sidebar.php';
  include 'includes/class-autoload.inc.php';
  if(isset($RoomTypeID)) {
    $ID = $RoomTypeID;
    $roomType = new RoomTypesView();
    $resultRoomType = $roomType->showRoomType($ID);
    if(!$resultRoomType) {
      header("Location: room-types");
      die();
    }
  }
?>
<div id="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="room-types">Room Type</a></li>
      <li class="breadcrumb-item active">
        <?php
          if(isset($ID)) {
              echo("Edit");
          }
          else {
            echo("Add");
          } 
        ?> Room Type
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
          ?> Room Type Form
        </h1>
      </tr>
      <?php
        if(isset($ID)) {
          ?>
          <input name="RoomTypeID" type="hidden" value="<?php echo($resultRoomType['RoomTypeID']);?>">
        <?php
        }
      ?>
          <input name="whereToGo" type="hidden" value="roomtypes">

      <tr><td>Room Type Name</td>
        <td>:</td>
        <td><input name="RoomTypeName" type="text" value="<?php
        if(isset($ID)){
          echo($resultRoomType['RoomTypeName']);
        }
        ?>">
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
          
          <a href="room-typess" class="btn btn-info">Back to List</a></td>
      </tr>
    </table>
  </form>
<?php
  include_once 'footer.php';
?>