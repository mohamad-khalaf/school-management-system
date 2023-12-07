
<?php 

    include("../config.php");

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $sql = "SELECT * FROM `users` WHERE `id` = '$id'";
        $res = mysqli_query($connect, $sql);
        $data = json_encode(mysqli_fetch_array($res, MYSQLI_ASSOC));
        print_r($data);
    }
?>