<?php
if(isset($_POST['btn'])){
    $filename=$_FILES['file123']['name'];
    $filepath=$_FILES['file123']['tmp_name'];

    $q= move_uploaded_file($filepath,"uploads/".$filename);
    if($q)
    {
        echo"<img width='200px' src='uploads/$filename'>";
    }
}
?>
<html>
    <body>
        <form method="post" enctype="multipart/form-data">
            File:<input type="file" name="file123"/>
            <input type="submit" name="btn"/>
        </form>
    </body>
</html>