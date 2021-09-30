<?php

class BuildingsContr extends Buildings {
  
  public function createBuilding($req) {
    $this->setBuilding($req);
  }

  public function changeBuilding($req) {
    $this->updateBuilding($req);
  }

  public function removeBuilding($req) {
    $this->deleteBuilding($req);
  }

}