<?php

if(isset($_POST['submit'])){
    move_uploaded_file($_FILES['fileToUpload']['tmp_name'],"uploads/".$_FILES['fileToUpload']['name']);




}

?>