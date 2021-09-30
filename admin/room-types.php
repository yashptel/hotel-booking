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
      <li class="breadcrumb-item active">RoomTypes</li>
    </ol>
    <!-- Page Content -->
    <h1 align="center">RoomTypes</h1>
      <a href="alter-room-type" class="btn btn-primary">Add New Room Type</a>
    <hr>
    <div style="overflow-x:auto;">
      <table border="1" align="center" cellpadding="10">
        <tr align="center">
          <th>Room Type ID</th>
          <th>Room Type Name</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        <?php
        $roomTypes = new RoomTypesView();
        $resultRoomTypes = $roomTypes->showAllRoomTypes();
        foreach ($resultRoomTypes as $resultRoomType):
        ?>
          <tr>
            <td align="center"><?=  $resultRoomType['RoomTypeID'] ?></td>
            <td align="center"><?= $resultRoomType['RoomTypeName'] ?></td>

            <td align="center"><a class="img" href="alter-room-type?RoomTypeID=<?php echo($resultRoomType['RoomTypeID']); ?>"><img src="images/edit.png" height="25" width="25"></a>
            <td align="center">
            <form action="routes" method="post">
              <input name="whereToGo" type="hidden" value="roomtypes">
              <input name="RoomTypeID" type="hidden" value="<?=  $resultRoomType['RoomTypeID'] ?>">
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