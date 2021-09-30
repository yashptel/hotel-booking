<?php

class Buildings extends Dbh {

  protected function getAllBuildings() {
    $sql = "SELECT * FROM `building`";
    $stmt = $this->connect()->query($sql);
      $result = $stmt->fetchAll();
      return $result;
  }

  protected function getBuilding($ID) {
    $sql = "SELECT * FROM `building` WHERE `BuildingID` = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$ID]);

    $result = $stmt->fetch();
    return $result;
  }

  protected function setBuilding($req) {
    extract($req);
    $BuildingImageName = $_FILES['fileToUpload']['name'];
    $sql = "INSERT INTO `building` (`BuildingID`, `BuildingName`, `BuildingLocation`, `BuildingImageName`) VALUES (NULL, ?, ?, ?);";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$BuildingName, $BuildingLocation, $BuildingImageName]);
  }

  protected function updateBuilding($req) {
    extract($req);
    $BuildingImageName = $_FILES['fileToUpload']['name'];
    $sql = "UPDATE `building` SET `BuildingName` = ?, `BuildingLocation` = ?, `BuildingImageName` = ? WHERE `building`.`BuildingID` = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$BuildingName, $BuildingLocation, $BuildingImageName, $BuildingID]);
  }

  protected function deleteBuilding($req) {
    extract($req);
    if(isset($BuildingID)) {
      $sql = "DELETE FROM `building` WHERE `building`.`BuildingID` = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$BuildingID]);
    }
  }

  protected function getImageName($req) {
    extract($req);
    if(isset($BuildingID)) {
      $sql = "SELECT `BuildingImageName` FROM `building` WHERE `BuildingID` = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$BuildingID]);
      $result = $stmt->fetch();
      extract($result);
      return $BuildingImageName;
    }
  }
}