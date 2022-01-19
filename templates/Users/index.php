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
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="block m-t-xs font-bold">David Williams</span>
                            
                        </a>
                        
                    </div>
                    <div class="logo-element">
                     
                    </div>
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
                
                   

        </nav>
        </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2><b>User Info</b></h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">User</a>
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
                    <th><?= $this->Paginator->sort('Primary drivers Full name') ?></th>
                    <th><?= $this->Paginator->sort('Secondary drivers Full name') ?></th>
                    <th><?= $this->Paginator->sort('Email-Id') ?></th>
                    <th><?= $this->Paginator->sort('Contact Number') ?></th>
                    <th><?= $this->Paginator->sort('license') ?></th>
                    <th><?= $this->Paginator->sort('Country of Residence') ?></th>
                    <th><?= $this->Paginator->sort('Car') ?></th>
                    <th><?= $this->Paginator->sort('Breakdown Insurance') ?></th>
                    <th><?= $this->Paginator->sort('Prepaid Gas Credit') ?></th>
                    <th><?= $this->Paginator->sort('destination') ?></th>
                    <th><?= $this->Paginator->sort('Questions or Concerns?') ?></th>
                   <!--  <th class="actions"><?= __('Actions') ?></th> -->
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->id) ?></td>
                    <td><?= h($user->name) ?></td>
                    <td><?= h($user->full_name) ?></td>
                    <td><?= h($user->email) ?></td>
                    <td><?= h($user->contact) ?></td>
                    <td><?= h($user->license) ?></td>
                    <td><?= h($user->address) ?></td>
                    <td><?= $this->Html->link(__($user->carinfo->car_name), ['controller'=>'Carinfo','action' => 'view',$user->carinfo_id]) ?></td>
                    <td><?= h($user->insurance) ?></td>
                    <td><?= h($user->gas) ?></td>
                    <td><?= h($user->destination) ?></td>
                    <td><?= h($user->question) ?></td>
                    <td class="actions">
                       <!--  <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?> -->
                       <!--  <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> -->
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
                        </table>

                    </div>
                </div>
            
                    

            </div>
        </div>
        <div class="footer">
           
                <strong>Copyright</strong> Example Company &copy; 2014-2018
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

