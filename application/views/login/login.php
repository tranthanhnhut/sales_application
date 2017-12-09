<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo base_url() ?>uploads/site/logo.ico" rel="shortcut icon" type="image/x-icon" />
    <title>Đăng nhập</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
    <!-- Custom particles JavaScript-->
    <script src="<?php echo base_url() ?>css/particles.css"></script>
    <style>
        .panel{
            position: absolute;
            z-index:10;
            width:27%;
            height:auto;
            top:5%;
            left:35%;
            z-index:100;
        }
        .card-header{
            color:#fff;
        }
        .form-group label{
            color:#fff;
        }
        .btn-primary{
            background-color: #1b1e2129;
            border-color: #1b1e2154;
        }
        .btn-primary:hover{
            background-color: #1b1e2129;
            border-color: #1b1e2154;
        }
        .btn-submit{
            width:100%;
            cursor: pointer;
            border:none;
            border-radius: 5px;
            background: #fff;
            padding: 2% 0;
        }
    </style>
</head>

<body class="bg-dark">
<div class="panel" style="display: block;">
    <div class="container">
        <div class="card card-login mx-auto mt-5">
            <div class="card-header">Đăng Nhập</div>
            <div class="card-body">
                <form method="post" action="<?php echo base_url('login'); ?>">
                    <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
                    <?php
                        if(isset($data) ==1):
                    ?>
                        <div class="alert alert-danger">
                            <strong>Error !</strong> Đăng nhập thất bại.
                        </div>
                    <?php endif; ?>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên đăng nhập</label>
                        <input class="form-control" name="username" id="exampleInputUsername" type="text" placeholder="Tên đăng nhập" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Mật khẩu</label>
                        <input class="form-control" name="password" id="exampleInputPassword" type="password" placeholder="Mật khẩu" required>
                    </div>
                    <button style="submit" name="subLogin" class="btn-submit ">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="particles-js"></div>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Core particles JavaScript-->
<script src="<?php echo base_url() ?>js/particles.js"></script>
<!-- Core app JavaScript-->
<script src="<?php echo base_url() ?>js/app.js"></script>
</body>

</html>
