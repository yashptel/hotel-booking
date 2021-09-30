<?php

class RoomsView extends Rooms {
  
  public function showAllRooms() {
    $result = $this->getAllRooms();
    return $result;
  }

  public function showRoom($ID) {
    $result = $this->getRoom($ID);
    return $result;
  }

  public function getImgName($req) {
    extract($req);
    $imgName = $this->getImageName($req);
    return $imgName;
  }
  
}