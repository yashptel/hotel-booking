<?php

class Rooms extends Dbh {

  protected function getAllRooms() {
    $sql = "SELECT * FROM `room`";
    $stmt = $this->connect()->query($sql);
      $result = $stmt->fetchAll();
      return $result;
  }

  protected function getRoom($ID) {
    $sql = "SELECT * FROM `room` WHERE `RoomID` = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$ID]);
    $result = $stmt->fetch();
    return $result;
  }

  protected function setRoom($req) {
    extract($req);
    $RoomImage = $_FILES['fileToUpload']['name'];
    $sql = "INSERT INTO `room` (`RoomID`, `RoomNumber`, `RoomTypeID`, `FloorID`, `RoomImage`, `RoomCapacity`, `RoomTariff`, `IsAC`, `IsTV`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?);";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$RoomNumber, $RoomTypeID, $FloorID, $RoomImage, $RoomCapacity, $RoomTariff, $IsAC, $IsTV]);
  }

  protected function updateRoom($req) {
    extract($req);
    $RoomImage = $_FILES['fileToUpload']['name'];
    $sql = "UPDATE `room` SET `RoomNumber` = ?, `RoomTypeID` = ?, `FloorID` = ?, `RoomImage` = ?, `RoomCapacity` = ?, `RoomTariff` = ?, `IsAC` = ?, `IsTV` = ? WHERE `room`.`RoomID` = ?";
    $stmt = $this->connect()->prepare($sql);
    $stmt->execute([$RoomNumber, $RoomTypeID, $FloorID, $RoomImage, $RoomCapacity, $RoomTariff, $IsAC, $IsTV, $RoomID]);
  }

  protected function deleteRoom($req) {
    extract($req);
    if(isset($RoomID)) {
      $sql = "DELETE FROM `room` WHERE `room`.`RoomID` = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$RoomID]);
    }
  }

  protected function getImageName($req) {
    extract($req);
    if(isset($RoomID)) {
      $sql = "SELECT `RoomImage` FROM `room` WHERE `RoomID` = ?";
      $stmt = $this->connect()->prepare($sql);
      $stmt->execute([$RoomID]);
      $result = $stmt->fetch();
      extract($result);
      return $RoomImage;
    }
  }
}