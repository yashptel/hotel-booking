<?php
  include_once 'header.php';
  include_once 'sidebar.php';
  include 'includes/class-autoload.inc.php';
?>

<div id="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Rooms</li>
    </ol>
    <!-- Page Content -->
    <h1 align="center">Rooms</h1>
      <a href="alter-room" class="btn btn-primary">Add New Room</a>
    <hr>
    <div style="overflow-x:auto;">
      <table border="1" align="center" cellpadding="10">
        <tr align="center">
          <th>Room ID</th>
          <th>Room Number</th>
          <th>Room Type ID</th>
          <th>Floor ID</th>
          <th>Image</th>
          <th>Room Capacity</th>
          <th>Room Tariff</th>
          <th>Air Conditioner</th>
          <th>Television</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        <?php
        $rooms = new RoomsView();
        $resultRooms = $rooms->showAllRooms();
        foreach ($resultRooms as $resultRoom):
        ?>
          <tr>
            <td align="center"><?=  $resultRoom['RoomID'] ?></td>
            <td align="center"><?= $resultRoom['RoomNumber'] ?></td>
            <td align="center"><?= $resultRoom['RoomTypeID'] ?></td>
            <td align="center"><?= $resultRoom['FloorID'] ?></td>
            <td align="center"><a class="building-image" href="./uploads/<?= $resultRoom['RoomImage'] ?>"><img src="./uploads/<?= $resultRoom['RoomImage'] ?>"></a></td>
            <td align="center"><?= $resultRoom['RoomCapacity'] ?></td>
            <td align="center"><?= $resultRoom['RoomTariff'] ?></td>
            <td align="center"><?= $resultRoom['IsAC'] ?></td>
            <td align="center"><?= $resultRoom['IsTV'] ?></td>
            
            <td align="center"><a class="img" href="alter-room?roomID=<?php echo($resultRoom['RoomID']); ?>"><img src="images/edit.png" height="25" width="25"></a>
            <td align="center">
              <form action="routes" method="post">
                <input name="whereToGo" type="hidden" value="rooms">
                <input name="RoomID" type="hidden" value="<?=  $resultRoom['RoomID'] ?>">
                <button class="img" type="submit" name="Submit" value="Delete"><img src="images/delete.png" height="25" width="25"></button>
              </form>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div
<?php
  include_once 'footer.php';
?>