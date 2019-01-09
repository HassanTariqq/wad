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
    $br_title = $_GET['br_title'];


    $insertbr = "INSERT INTO brands (br_title)
                  VALUES ('$br_title')";
    mysqli_query($con,$insertbr);

    ?>
</head>
<body>
<div class="container">
    <h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> <span class="d-none d-sm-inline"> Add New </span> Brand </h1>
    <form action="" method="get">

        <div class="row my-3">
            <div class="">
                <label for="pro_desc" class="float-md-right"><span class="d-sm-none d-md-inline"> Enter </span> Brand:</label>
            </div>
            <div class="">
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="far fa-comment-alt"></i></div>
                    </div>
                    <textarea class="form-control" type="file" id="br_title" name="br_title" placeholder="Brand Name"></textarea>
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