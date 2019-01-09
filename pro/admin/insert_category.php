<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert Product</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <style>
        * {
            font-family: 'Old Standard TT', serif;
        }
    </style>
    <?php
    require "functions2.php";
    $cat_title = $_POST['cat_title'];


    $insertcat = "INSERT INTO categories (cat_title)
                  VALUES ('$cat_title')";
    mysqli_query($con,$insertcat);

    ?>
</head>
<body>
<div class="container">
    <h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Add New </span> Category </h1>
    <form action="" method="post">

        <div class="row my-3">
            <div class="">
                <label for="pro_desc" class="float-md-right"><span class="d-sm-none d-md-inline"> Enter </span> category:</label>
            </div>
            <div class="">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-comment-alt"></i></div>
                    </div>
                    <textarea class="form-control" type="file" id="cat_title" name="cat_title" placeholder="Category Name"></textarea>
                </div>
            </div>
        </div>
        <div class="row my-3">
            <div class=""></div>
            <div class="">
                <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Insert Now </button>
            </div>
        </div>
    </form>
</div>
</body>
</html>