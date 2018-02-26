<?php
/**
 * Created by PhpStorm.
 * User: romankyshnir
 * Date: 2/26/18
 * Time: 20:50
 */
if (!empty($_FILES))
{
    $path = $_FILES['file']['tmp_name'];
    $name = $_FILES['file']['name'];

    $checkUpload = move_uploaded_file($path,__DIR__.'/i/'.$name);

    if ($checkUpload)
    {
        echo '/i/'.$name;
    }
}
else
{
    echo "Sorry, but I don't have any files(";
}
