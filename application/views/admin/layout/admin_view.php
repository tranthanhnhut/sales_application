<?php
$this->csrf = array(
    'name' => $this->security->get_csrf_token_name(),
    'hash' => $this->security->get_csrf_hash(),
);
if (!isset($this->session->userdata['id'])):
    $this->load->view('login/login', array('csrf' => $this->csrf));
else:
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="<?php echo base_url() ?>uploads/site/logo.ico" rel="shortcut icon" type="image/x-icon" />
    <title><?php if(isset($title)){ echo $title; }else{ echo 'SB Admin - Start Bootstrap Template'; } ?></title>
    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url() ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="<?php echo base_url() ?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>css/sb-admin.css" rel="stylesheet">
    <style>
        .img-circle{
            border-radius: 50%;
        }
        .logo-admin{
            padding:4% 0;
        }
        .logo-admin a span{
            color:#777;
        }
        .logo-admin a:hover{
            text-decoration: none;
        }
    </style>
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.html">Start Bootstrap</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
                <a class="nav-link" href="index.html">
                    <i class="fa fa-fw fa-dashboard"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
                <a class="nav-link" href="charts.html">
                    <i class="fa fa-fw fa-area-chart"></i>
                    <span class="nav-link-text">Charts</span>
                </a>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
                    <i class="fa fa-user"></i>
                    <span class="nav-link-text">Thành viên</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseMulti">
                    <li>
                        <a href="<?php echo base_url('wp-admin/user') ?>">Danh sách Thành viên</a>
                    </li>
                    <li>
                        <a href="#">Thêm Thành viên</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Menu Levels">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti" data-parent="#exampleAccordion">
                    <i class="fa fa-list"></i>
                    <span class="nav-link-text">Menu</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseMulti">
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a href="#">Second Level Item</a>
                    </li>
                    <li>
                        <a class="nav-link-collapse collapsed" data-toggle="collapse" href="#collapseMulti2">Third Level</a>
                        <ul class="sidenav-third-level collapse" id="collapseMulti2">
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                            <li>
                                <a href="#">Third Level Item</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                <a class="nav-link" href="tables.html">
                    <i class="fa fa-fw fa-table"></i>
                    <span class="nav-link-text">Tables</span>
                </a>
            </li>
<!--            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">-->
<!--                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">-->
<!--                    <i class="fa fa-fw fa-wrench"></i>-->
<!--                    <span class="nav-link-text">Components</span>-->
<!--                </a>-->
<!--                <ul class="sidenav-second-level collapse" id="collapseComponents">-->
<!--                    <li>-->
<!--                        <a href="navbar.html">Navbar</a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="cards.html">Cards</a>-->
<!--                    </li>-->
<!--                </ul>-->
<!--            </li>-->
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
                <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
                    <i class="fa fa-fw fa-file"></i>
                    <span class="nav-link-text">Pages</span>
                </a>
                <ul class="sidenav-second-level collapse" id="collapseExamplePages">
                    <li>
                        <a href="login.html">Login Page</a>
                    </li>
                    <li>
                        <a href="register.html">Registration Page</a>
                    </li>
                    <li>
                        <a href="forgot-password.html">Forgot Password Page</a>
                    </li>
                    <li>
                        <a href="blank.html">Blank Page</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Link">
                <a class="nav-link" href="#">
                    <i class="fa fa-fw fa-link"></i>
                    <span class="nav-link-text">Link URL</span>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                    <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
<!--            <li class="nav-item dropdown">-->
<!--                <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                    <i class="fa fa-fw fa-envelope"></i>-->
<!--                    <span class="d-lg-none">Messages-->
<!--              <span class="badge badge-pill badge-primary">12 New</span>-->
<!--            </span>-->
<!--                    <span class="indicator text-primary d-none d-lg-block">-->
<!--              <i class="fa fa-fw fa-circle"></i>-->
<!--            </span>-->
<!--                </a>-->
<!--                <div class="dropdown-menu" aria-labelledby="messagesDropdown">-->
<!--                    <h6 class="dropdown-header">New Messages:</h6>-->
<!--                    <div class="dropdown-divider"></div>-->
<!--                    <a class="dropdown-item" href="#">-->
<!--                        <strong>David Miller</strong>-->
<!--                        <span class="small float-right text-muted">11:21 AM</span>-->
<!--                        <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>-->
<!--                    </a>-->
<!--                    <div class="dropdown-divider"></div>-->
<!--                    <a class="dropdown-item" href="#">-->
<!--                        <strong>Jane Smith</strong>-->
<!--                        <span class="small float-right text-muted">11:21 AM</span>-->
<!--                        <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>-->
<!--                    </a>-->
<!--                    <div class="dropdown-divider"></div>-->
<!--                    <a class="dropdown-item" href="#">-->
<!--                        <strong>John Doe</strong>-->
<!--                        <span class="small float-right text-muted">11:21 AM</span>-->
<!--                        <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>-->
<!--                    </a>-->
<!--                    <div class="dropdown-divider"></div>-->
<!--                    <a class="dropdown-item small" href="#">View all messages</a>-->
<!--                </div>-->
<!--            </li>-->
<!--            <li class="nav-item dropdown">-->
<!--                <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                    <i class="fa fa-fw fa-bell"></i>-->
<!--                    <span class="d-lg-none">Alerts-->
<!--              <span class="badge badge-pill badge-warning">6 New</span>-->
<!--            </span>-->
<!--                    <span class="indicator text-warning d-none d-lg-block">-->
<!--              <i class="fa fa-fw fa-circle"></i>-->
<!--            </span>-->
<!--                </a>-->
<!--                <div class="dropdown-menu" aria-labelledby="alertsDropdown">-->
<!--                    <h6 class="dropdown-header">New Alerts:</h6>-->
<!--                    <div class="dropdown-divider"></div>-->
<!--                    <a class="dropdown-item" href="#">-->
<!--              <span class="text-success">-->
<!--                <strong>-->
<!--                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>-->
<!--              </span>-->
<!--                        <span class="small float-right text-muted">11:21 AM</span>-->
<!--                        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>-->
<!--                    </a>-->
<!--                    <div class="dropdown-divider"></div>-->
<!--                    <a class="dropdown-item" href="#">-->
<!--              <span class="text-danger">-->
<!--                <strong>-->
<!--                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>-->
<!--              </span>-->
<!--                        <span class="small float-right text-muted">11:21 AM</span>-->
<!--                        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>-->
<!--                    </a>-->
<!--                    <div class="dropdown-divider"></div>-->
<!--                    <a class="dropdown-item" href="#">-->
<!--              <span class="text-success">-->
<!--                <strong>-->
<!--                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>-->
<!--              </span>-->
<!--                        <span class="small float-right text-muted">11:21 AM</span>-->
<!--                        <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>-->
<!--                    </a>-->
<!--                    <div class="dropdown-divider"></div>-->
<!--                    <a class="dropdown-item small" href="#">View all alerts</a>-->
<!--                </div>-->
<!--            </li>-->
            <li class="nav-item logo-admin">
                <a href="#">
                    <img src="<?php echo base_url('uploads/site/user.png') ?>" class="img-circle" alt="Avatar">
                    <span><?php echo $this->session->userdata['user'] ?></span>
                    <i class="icon-submenu lnr lnr-chevron-down"></i>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
                    <i class="fa fa-fw fa-sign-out"></i>Logout</a>
            </li>
        </ul>
    </div>
</nav>
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <?php echo $breadcrum; ?>
        <?php echo $contents ?>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class="sticky-footer">
        <div class="container">
            <div class="text-center">
                <small>Copyright © Your Website <?php echo date("Y") ?></small>
            </div>
        </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Đăng xuất</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Chọn "Đăng xuất" nếu bạn muốn kết thúc phiên làm việc hiện tại.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy bỏ</button>
                    <a class="btn btn-primary" href="<?php echo base_url('login/logout') ?>">Đăng xuất</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() ?>js/jquery-1.10.2.js"></script>
    <script src="<?php echo base_url() ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() ?>vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
<!--    <script src="--><?php //echo base_url() ?><!--vendor/chart.js/Chart.min.js"></script>-->
    <script src="<?php echo base_url() ?>vendor/datatables/jquery.dataTables.js"></script>
    <script src="<?php echo base_url() ?>vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() ?>js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="<?php echo base_url() ?>js/sb-admin-datatables.min.js"></script>
<!--    <script src="--><?php //echo base_url() ?><!--js/sb-admin-charts.min.js"></script>-->

    <script type="text/javascript">
        $(document).ready(function () {
           $('#dataUser').DataTable({
                    "ajax": "<?php echo base_url('wp-admin/user/data-user') ?>"
           });
        });

        $("#dataUser").on("click", ".userdelete #userDelete", function(){
            var table = $('#dataUser').DataTable();
            var mydata = $(this).attr('value');
            var name = $(this).attr('data');
            var conf=confirm("Are you sure you want to delet this : "+name);
            if(conf){
                var row = $(this).parents('tr');
                // table.row( $(this).parents('tr') ).remove().draw();
                $.ajax({
                    type : "post",
                    url: "<?php echo base_url('wp-admin/user/delete') ?>",
                    data: {'<?php echo $this->security->get_csrf_token_name(); ?>':'<?php echo $this->security->get_csrf_hash(); ?>','idUser':mydata},
                    async:false,
                    success: function(data){
                        if(data ==1)
                        {
                            row.remove();
                        }
                    }
                });
            }
            else {
                return false;
            }
        });
    </script>
</div>
</body>

</html>
<?php endif;?>