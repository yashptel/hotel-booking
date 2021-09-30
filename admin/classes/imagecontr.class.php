<?php

  class ImageContr extends Image {
    public function uploadImg($req) {
      $this->uploadImage($req);
    }
    public function deleteImg($imageName) {
      $this->deleteImage($imageName);
    }
  }

?>