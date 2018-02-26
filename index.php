<?php
/**
 * Created by PhpStorm.
 * User: romankyshnir
 * Date: 2/26/18
 * Time: 20:50
 */

?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Hello, world!</title>
</head>
<body>
<div class="container">
    <h1>Use ajax</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label class="add-img">Add photo
            <input type="file" id="file" name="file">
        </label>
        <div class="form-group">
            <label for="bookName">Book name</label>
            <input type="text" id="bookName" name="bookName" class="form-control">
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" id="author" name="author" class="form-control">
        </div>
        <div class="form-group">
            <button id="button" class="btn btn-info">Add book</button>
        </div>
    </form>
    <h2>Result</h2>
    <div id="result"></div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="./ajax.js"></script>
</body>
</html>
