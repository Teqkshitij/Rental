<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Royalty Exotic Cars</title>

    <link href="/cars/css/bootstrap.min.css" rel="stylesheet">
    <link href="/cars/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="/cars/css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <link href="/cars/css/animate.css" rel="stylesheet">
    <link href="/cars/css/style.css" rel="stylesheet">



</head>

<body>

    <div id="wrapper">

        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <img alt="image" class="rounded-circle" src="/cars/img/profile_small.jpg" />
                            <span class="block m-t-xs font-bold">Royalty Exotic Cars</span>
                            <?= $this->Html->link(__('Logout'), ['controller'=>'Carusers','action' => 'logout'], ['class' => 'btn btn-xs btn-outline btn-primary']) ?><i class="fa fa-long-arrow-right"></i>

                        </div>
                        <div class="logo-element">

                        </div>
        </nav>

        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">

                        <form role="search" class="navbar-form-custom" action="search_results.html">

                        </form>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message">Welcome to Royal Car Bookings</span>
                        </li>

                    </ul>

                </nav>
            </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>E-commerce grid</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>E-commerce</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Products grid</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>

            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">

                    <?php foreach ($carinfo as $carinfo) : ?>


                        <div class="col-md-3">
                            <div class="ibox">
                                <div class="ibox-content product-box">

                                    <div class="product-imitation">
                                        <td><a href='<?php echo $this->Url->build(['controller' => 'Carinfo', 'action' => 'view', $carinfo->id]) ?> '>
                                                <?= $this->Html->image($carinfo->car_image, ['class' => 'img-preview']) ?></a></td>

                                    </div>
                                    <div class="product-desc">
                                        <h1><b><?= h($carinfo->car_name) ?></b></h1>

                                        <div class="m-t text-righ">

                                            <?= $this->Html->link(__('Click to book'), ['action' => 'view', $carinfo->id], ['class' => 'btn btn-xs btn-outline btn-primary']) ?><i class="fa fa-long-arrow-right"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    <?php endforeach; ?>

                </div>




            </div>
            <div class="footer">
                <div class="float-right">
                    10GB of <strong>250GB</strong> Free.
                </div>
                <div>
                    <strong>Copyright</strong> Example Company &copy; 2014-2018
                </div>
            </div>

        </div>
    </div>



    <!-- Mainly scripts -->
    <script src="/cars/js/jquery-3.1.1.min.js"></script>
    <script src="/cars/js/popper.min.js"></script>
    <script src="/cars/js/bootstrap.js"></script>
    <script src="/cars/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="/cars/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="/cars/js/inspinia.js"></script>
    <script src="/cars/js/plugins/pace/pace.min.js"></script>

</body>

</html>