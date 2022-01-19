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
                        <img alt="image" class="rounded-circle" src="/cars/img/profile_small.jpg"/>
                        <span class="block m-t-xs font-bold">Royalty Exotic Cars</span>
                    </div>

                    <div class="logo-element">
                        <?= $this->Html->link(__('List Cars'), ['action' => 'index'] )?>
                        
                    </div>
                    <li>
                    
                      <?= $this->Html->link(__('List Carinfo'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
                    
                </li>
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

            </nav>
        </div>
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>Rayalty Exotic Cars </h2>
                
                    <li class="breadcrumb-item active">
                        <strong>Car details</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">

            </div>
        </div>

        <div class="wrapper wrapper-content animated fadeInRight">

            <div class="row">
                <div class="col-lg-12">

                    <div class="ibox product-detail">
                        <div class="ibox-content">

                            <div class="row">
                                <div class="col-md-5">


                                    <div class="product-images">

                                        <div>
                                             <?= $this->Html->image($carinfo->car_image, ['class'=>'img-preview']) ?>
                                            <div class="image-imitation">
                                                                                                                

                                            </div>
                                        </div>
                                        

                                    </div>

                                </div>
                                <div class="col-md-7">

                                    <h2 class="font-bold m-b-xs">
                                        <?= h($carinfo->car_name) ?>
                                    </h2>
                                    <hr>
                                    <div>
                                        <table>
                                         <tr>
                                            <th><?= __('Model: ') ?></th>
                                            <td><?= h($carinfo->model) ?></td>
                                        </tr>
                                    </div>
                                </table>
                                <hr>
                                <table>
                                    <tr>
                                        <th><?= __('Engine:     ') ?></th>
                                        <td><?= h($carinfo->engine) ?></td>
                                    </tr>
                                </table>
                                <hr>
                                    
                                    <div class="m-t-md">
                                        <h2 class="product-main-price"> 
                                            <table>
                                                <tr>
                                                <th><?= __('4 Hours:') ?></th>
                                                <td><?= '$ '.$this->Number->format($carinfo->four) ?></td>
                                            </tr>
                                            <tr>
                                                <th><?= __('8 Hours:') ?></th>
                                                <td><?= '$ '.$this->Number->format($carinfo->eight) ?></td>
                                            </tr>
                                            <tr>
                                                <th><?= __('24 Hours:') ?></th>
                                                <td><?= '$ '.$this->Number->format($carinfo->twentyfour) ?></td>
                                            </tr>
                                            </table>
                                        </h2>
                                    </div>
                                    <hr>

                                   
                                    <h4>Car description</h4>

                                    <div>
                                         <?= $this->Text->autoParagraph(h($carinfo->description)); ?>
                                        <br/>
                                        <br/>
                                    </div>
                                        
                                    <hr>
                                    

                                    <div>
                                        <div class="btn-group">
                                            <?= $this->Html->link(__('Click to Book'),['controller'=>'Users','action'=>'add',$carinfo->id],['class'=>'btn btn-primary btn-sm']) ?>
                                            
                                        </div>
                                    </div>



                                </div>
                            </div>

                        </div>
                        




        </div>
        <div class="footer">
            
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
