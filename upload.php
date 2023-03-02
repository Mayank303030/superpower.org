<?php
if ($_FILES['video']['error'] == 0) {
    $temp = $_FILES['video']['tmp_name'];
    $name = $_FILES['video']['name'];
    move_uploaded_file($temp, "uploads/$name");
    echo "File uploaded successfully.";
} else {
    echo "Error uploading file.";
}
?>
