<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "latihan";

$con = mysqli_connect("$host", "$username", "$password", "$database");

if (!$con) {
    header("Location: ../errors/dberror.php");
    die();
}


function query($query)
{
    global $con;

    $result = mysqli_query($con, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}
function tambah($data)
{
    global $con;
    $name = htmlspecialchars($data['name']);
    $meta_title = htmlspecialchars($data['meta_title']);
    $meta_keyword = htmlspecialchars($data['meta_keyword']);
   
    $image = posts();
    if (!$image) {
        return false;
    }

    // query
    $query = "INSERT INTO posts 
            (name, meta_title, meta_keyword, image, ta)
         VALUES
            ( '$name', '$meta_title', '$meta_keyword', '$image', 0)";

    mysqli_query($con, $query);

    return mysqli_affected_rows($con);
}
?>