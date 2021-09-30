<?php

class FloorsView extends Floors {
  
  public function showAllFloors() {
    $result = $this->getAllFloors();
    return $result;
  }

  public function showFloor($ID) {
    $result = $this->getFloor($ID);
    return $result;
  }
  
}