<?php
require "get_db2.php";

function getCat()
{
    global $con;
    $getQuery = "select * from categories";
    $getresult=mysqli_query($con,$getQuery);
    while($row=mysqli_fetch_assoc($getresult))
    {
        $id=$row['cat_id'];
        $title= $row['cat_title'];
        echo"<option><a class='nav-link' href='#'>$title</a></option>";
    }
}

function getBr()
{
    global $con;
    $getQuery = "select * from brands";
    $getresult=mysqli_query($con,$getQuery);
    while($row=mysqli_fetch_assoc($getresult))
    {
        $id=$row['br_id'];
        $title= $row['br_title'];
        echo"<option><a class='nav-link' href='#'>$title</a></option>";
    }
}


