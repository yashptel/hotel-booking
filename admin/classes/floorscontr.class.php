<?php

class FloorsContr extends Floors {
  
  public function createFloor($req) {
    $this->setFloor($req);
  }

  public function changeFloor($req) {
    $this->updateFloor($req);
  }

  public function removeFloor($req) {
    $this->deleteFloor($req);
  }

}