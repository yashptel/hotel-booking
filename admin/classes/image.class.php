<?php

  class Image {
    
    protected function uploadImage($req) {
      $file_name = $_FILES['fileToUpload']['name'];
      $target_dir = "uploads/";
      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
      $uploadOk = 1;
      $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      // Check if image file is a actual image or fake image
      if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
        if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
        } else {
          echo "File is not an image.";
          $uploadOk = 0;
        }
      }
      if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
      }
      if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
      && $imageFileType != "gif" ) {
          echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
          $uploadOk = 0;
      }

      if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
      } else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
        } else {
          echo "Sorry, there was an error uploading your file.";
        }
      }
    }

    protected function deleteImage($imageName) {
      $target_dir = "uploads/";
      $target_file = $target_dir . $imageName;
      if (file_exists($target_file)) {
        unlink($target_file);
        echo "File Deleted.";
        // die();
      }
      echo "File not Deleted.";
        // die();
    }
  }

?>