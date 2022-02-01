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
                            <?= $this->Html->link(__('Logout'), ['prefix'=>'Admin','controller' => 'Carusers', 'action' => 'logout'], ['class' => 'btn btn-xs btn-outline btn-primary']) ?><i class="fa fa-long-arrow-right"></i>
                        
                       


                        </div>
                        <li>
                    
                    <?= $this->Html->link(__('Add Cars'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
                    <li>
                    
                    
                    
                </li>
                  
              </li>

            </div>




        </nav>

        <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
        
            <form role="search" class="navbar-form-custom" action="search_results.html">
                <div class="form-group">
                    
                </div>
            </form>
        </div>
            <ul class="nav navbar-top-links navbar-right">
                <li>
                    <span class="m-r-sm text-muted welcome-message">Royalty Exotic Cars.</span>
                </li>
                <li>
                    
                  
              </li>
                
                   

        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2><b>Cars Info</b></h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Admin</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Info</a>
                        </li>
                        
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
        <div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-6">
                    
                </div>
                    </div>
                    <div class="ibox-content">

                        <table class="table">
                            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('car_image',['type'=>'file']) ?></th>
                    <th><?= $this->Paginator->sort('car_name') ?></th>
                    <th><?= $this->Paginator->sort('four') ?></th>
                    <th><?= $this->Paginator->sort('eigth') ?></th>
                    <th><?= $this->Paginator->sort('twentyfour') ?></th>
                    <th><?= $this->Paginator->sort('model') ?></th>
                    <th><?= $this->Paginator->sort('engine') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                   
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                

                    <?php foreach ($carinfo as $carinf): ?>
                <tr>
                    <td><?= $this->Number->format($carinf->id) ?></td>
                    <td><a href='<?php echo $this->Url->build(['prefx'=>'Admin','controller' => 'Carinfo', 'action' => 'view', $carinf->id]) ?> '>
                        <?= $this->Html->image($carinf->car_image, ['class' => 'img-preview']) ?></a></td>

                    <td><?= h($carinf->car_name) ?></td>
                    <td><?= h($carinf->four) ?></td>
                    <td><?= h($carinf->eigth) ?></td>
                    <td><?= h($carinf->twentyfour) ?></td>
                    <td><?= h($carinf->model) ?></td>
                    
                    <td><?= h($carinf->engine) ?></td>
                    <td><?= h($carinf->description) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $carinf->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $carinf->id]) ?> 
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $carinf->id], ['confirm' => __('Are you sure you want to delete # {0}?', $carinf->id)]) ?> 
                    </td>
                 
                                        </div>
                                    </div>
                                </div>
                            </div>


                        <?php endforeach; ?>

                    </div>

                    
                </div>





            <!-- </div> -->
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

    <!-- <script>
        $('documnet').ready(function() {
            $('#search').keyup(function() {
                var searchkey = $(this).val();
                searchCars(searchkey);
            });

            function searchCars(keyword) {
                var data = keyword;
                $.ajax
                    method: 'get',
                    url: " echo $this->Url->build(['prefix' => false, 'controller' => 'Carinfo', 'action' => 'search']); ",
                    data: {
                        keyword: data
                    },
                    success: function(response) {
                        $('.table-content').html(response);
                    }
                });
            };
        });
    </script> -->

    <!-- Mainly scripts -->
    <!-- <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script> -->


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