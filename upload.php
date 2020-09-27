<html>
<body>
<?php
$target_dir = "img/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "<p>Sorry, your file is too large.</p>";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "mp4" && $imageFileType != "webm") 
{
  echo "<p>Sorry, only MP4 and WEBM files are allowed.</p>";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "<p>Sorry, your file was not uploaded.</p>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "<p>The file </p>". basename( $_FILES["fileToUpload"]["name"]). "<p> has been uploaded.</p>";
  } else {
    echo "<p>Sorry, there was an error uploading your file.</p>";
  }
}
?>
</body>
</html>