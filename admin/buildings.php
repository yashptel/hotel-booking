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
      <li class="breadcrumb-item active">Buildings</li>
    </ol>
    <!-- Page Content -->
    <h1 align="center">Buildings</h1>
      <a href="alter-building" class="btn btn-primary">Add New Building Type</a>
    <hr>
    <div style="overflow-x:auto;">
      <table border="1" align="center" cellpadding="10">
        <tr align="center">
          <th>Building ID</th>
          <th>Building Name</th>
          <th>Building Location</th>
          <th>Building Image</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>
        <?php
        $Buildings = new BuildingsView();
        $resultBuildings = $Buildings->showAllBuildings();
        foreach ($resultBuildings as $resultBuilding):
        ?>
          <tr>
            <td align="center"><?=  $resultBuilding['BuildingID'] ?></td>
            <td align="center"><?= $resultBuilding['BuildingName'] ?></td>
            <td align="center"><?= $resultBuilding['BuildingLocation'] ?></td>
            <td align="center"><a class="building-image" href="./uploads/<?= $resultBuilding['BuildingImageName'] ?>"><img src="./uploads/<?= $resultBuilding['BuildingImageName'] ?>"></a></td>

            <td align="center"><a class="img" href="alter-building?BuildingID=<?php echo($resultBuilding['BuildingID']); ?>"><img src="images/edit.png" height="25" width="25"></a>
            <td align="center"><form action="routes" method="post">
                <input name="whereToGo" type="hidden" value="buildings">
                <input name="BuildingID" type="hidden" value="<?=  $resultBuilding['BuildingID'] ?>">
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