<?php session_start(); ?>
<?php if (!isset($_SESSION['current_session'])) header('Location: login.php'); ?>
<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard | <?php echo $_SESSION['current_session']['user']['last_name'] . ' ' . $_SESSION['current_session']['user']['first_name']; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container mb-8">
        <div class="row center-align">
            <div class="col-xs-12 col-sm-12 col-md-12 col-xl-12 col-lg-12">
                <div class="jumbotron">                
                    <p class="mb-4">Dashboard</p>
                    <hr>
                    <p>Welcome back <?php echo $_SESSION['current_session']['user']['last_name'] . ' ' . $_SESSION['current_session']['user']['first_name']; ?></p>
                    <span>To make sure that that I don’t get distracted by server-level issues, I decided to host my application on the Cloudways PHP hosting platform because I get a highly optimized hosting stack and no server management hassles. You can try out Cloudways for free by signing for an account.</span>
                                   <a href="logout.php">LOGOUT</a>
                    <p>this is the norml user user page</p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="./jquery.js"></script>
</body>
</html>