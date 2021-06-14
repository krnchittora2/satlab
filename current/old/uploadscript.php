<?php
foreach ($_FILES["upfile"] as $key => $error) {
if ($error == UPLOAD_ERR_OK) {
$tmp_name = $_FILES["upfile"]["tmp_name"][$key];
$name = $_FILES["upfile"]["name"][$key];
move_uploaded_file($tmp_name, "misc/$name");
}
}
?>