<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Login</title>

    <link href="/assets/login/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="/assets/login/login.css" rel="stylesheet" id="bootstrap-css">

    <style>
        input[type=password] {

            background-color: #f6f6f6;

            border: none;

            color: #0d0d0d;

            padding: 15px 32px;

            text-align: center;

            text-decoration: none;

            display: inline-block;

            font-size: 16px;

            margin: 5px;

            width: 85%;

            border: 2px solid #f6f6f6;

            -webkit-transition: all 0.5s ease-in-out;

            -moz-transition: all 0.5s ease-in-out;

            -ms-transition: all 0.5s ease-in-out;

            -o-transition: all 0.5s ease-in-out;

            transition: all 0.5s ease-in-out;

            -webkit-border-radius: 5px 5px 5px 5px;

            border-radius: 5px 5px 5px 5px;

        }

        input[type=password]:focus {

            background-color: #fff;

            border-bottom: 2px solid #5fbae9;

        }

        input[type=password]:placeholder {

            color: #cccccc;

        }
    </style>
</head>


<body>

    <div class="wrapper fadeInDown">
        <div id="formContent">
            <!-- Tabs Titles -->

            <!-- Icon -->
            <div class="fadeIn first">
                <img src="/assets/img/icon_pbc.png" width="100px" id="icon" />
            </div>

            <!-- Login Form -->
            <form action="/auth/login_act" method="POST">
                <?= session()->get('pesan'); ?>
                <?= csrf_field(); ?>
                <input type="text" name="username" class="fadeIn second" name="username" placeholder="Username">
                <input type="password" name="password" class="fadeIn third" placeholder="Password">
                <input type="submit" class="fadeIn fourth" value="Log In">
            </form>

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <p>Login previlege</p>
            </div>

        </div>
    </div>




    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <script src="/assets/login//bootstrap.min.js"></script>
    <script src="/assets/login//jquery.min.js"></script>
</body>

</html>