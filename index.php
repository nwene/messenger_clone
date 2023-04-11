<html>

<head>
    <title>Messenger Clone</title>
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>
    <div class="main-body">
        <div class="main-title">
            <p>Manage your team easily and secretly</p>
        </div>
        <div style="text-align: center; padding: 10px"><img src="img/messenger.png" width="60" height="60"></div>
        <span style="color:crimson;">
            <?php if(isset($_GET['login'])){
                echo "Username or Password is incorrect";
            }
            ?>
        </span>
        <form action="login.php" method="post" class="form-container">
            <label class="label">Username:</label>
            <input type="text" class="form-control" name="username" placeholder="username">
            <br>
            <span class="label">Password:</span>
            <input type="password" class="form-control" name="password" placeholder="Password">
            <br>
            <input type="submit" name="login" class="text-center btn-default" style="margin:auto;">
        </form>
    </div>
    <footer class="col text-center">
        <p>All Rights Reserved &copy <?php echo date('Y') ?></p>
    </footer>

</body>

</html>