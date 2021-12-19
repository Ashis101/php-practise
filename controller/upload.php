<?php



$target_dir = __DIR__."/"."uploads/";
$target_file = $target_dir .$_FILES["newfile"]["name"];
echo $target_file;
var_dump(move_uploaded_file($_FILES["newfile"]["tmp_name"], $target_file));

  if (move_uploaded_file($_FILES["newfile"]["tmp_name"], $target_file)) {
    echo "The file ". htmlspecialchars( basename( $_FILES["newfile"]["name"])). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

?>

?>