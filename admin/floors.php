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
      <li class="breadcrumb-item active">Floors</li>
    </ol>
    <!-- Page Content -->
    <h1 align="center">Floors</h1>
      <a href="alter-floor" class="btn btn-primary">Add New Floor</a>
    <hr>
    <div style="overflow-x:auto;">
      <table border="1" align="center" cellpadding="10">
        <tr align="center">
          <th>Room ID</th>
          <th>Floor Name</th>
          <th>Building ID</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        <?php
        $Floors = new FloorsView();
        $resultFloors = $Floors->showAllFloors();
        foreach ($resultFloors as $resultFloor):
        ?>
          <tr>
            <td align="center"><?=  $resultFloor['FloorID'] ?></td>
            <td align="center"><?= $resultFloor['FloorName'] ?></td>
            <td align="center"><?= $resultFloor['BuildingID'] ?></td>

            <td align="center"><a class="img" href="alter-floor?FloorID=<?php echo($resultFloor['FloorID']); ?>"><img src="images/edit.png" height="25" width="25"></a>
            <td align="center">
            <form action="routes" method="post">
              <input name="whereToGo" type="hidden" value="floors">
              <input name="FloorID" type="hidden" value="<?=  $resultFloor['FloorID'] ?>">
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