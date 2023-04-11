<?php
session_start();

    require('connection.php');

    if(isset($_POST['submit'])){

        $username = $_SESSION['username'];
        $msg = $_POST['new_message'];

        $sql = "INSERT INTO message(username, msg_txt) VALUES ('$username', '$msg')";

        $result = mysqli_query($conn, $sql);

        if($result){
            header("location:home.php?send=success");
        }else{
            header("location:home.php?send=failed");
        }
        mysqli_close($conn);


    }

    $sql2 = "SELECT * FROM message INNER JOIN user ON message.username = user.username";
    $result2 = mysqli_query($conn, $sql2);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
    <div class="main-body2 card">
        <div class="container-fluid">
            <div class="" style="  background-color: #333; padding: 10px;">
                <?php 

                echo "<a href=\"#\">". $_SESSION['username'] . "</a>
                <a href=\"logout.php\" class=\"logout\">Logout</a>    
            </div><div class=\"message_sect\" style=\"padding: 20px;\">
            ";
            while ($res = mysqli_fetch_assoc($result2)){
                echo "
                <label for=\"name\">" . $res['name']. " : </label>
                <span class=\"message_disp\">" . $res['msg_txt'] . "</span><br>";
                } ?>
            </div>
            <div class="" style="text-align: center; margin:auto;">
                <form action="home.php" method="post" class="">
                    <textarea name="new_message" class="form-control" id="" cols="20" rows="5"></textarea><br>
                    <button type="submit" name="submit" class="btn-default">Send</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>