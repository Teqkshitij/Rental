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
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="block m-t-xs font-bold">Royalty Exotic Cars</span>

                            </a>

                        </div>
                        <div class="logo-element">
                        <?= $this->Html->link(__('List Cars'), ['action' => 'index'] )?>
                        <?= $this->Html->link(__('List Users'), ['controller'=>'Users','action' => 'index'] )?>


                        </div>
                        <li>
                    
                    <?= $this->Html->link(__('List Carinfo'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
                    <li>
                    
                      <?= $this->Html->link(__('List Users'), ['controller'=>'Users','action' => 'index'], ['class' => 'side-nav-item']) ?>
                    
                </li>
                  
              </li>

            </div>




        </nav>
        <div id="page-wrapper" class="gray-bg">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">


                        <div class="form-group">

                        </div>

                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li>
                            <span class="m-r-sm text-muted welcome-message">Royalty Exotic Cars.</span>
                        </li>



                </nav>
            </div>
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2><b>Car Info</b></h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="#">Admin</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Edit</a>
                        </li>

                    </ol>
                </div>
                </nav>
            </div>

            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Booking Form</h2>
                    <?= $this->Flash->render() ?>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a>Forms</a>
                        </li>
                        <li class="breadcrumb-item active">
                            <strong>Booking Form</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            <div class="wrapper wrapper-content animated fadeInRight">
                <div class="row">
                    <div class="col-lg-7">


                        <div class="ibox-content">
                            <div class="row">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="ibox-content">
                    <?= $this->Form->create($carinfo,['type'=>'file']) ?>
                    <div class="form-group  row"><label class="col-sm-2 col-form-label">Car Image</label>

                        <div class="col-sm-10"> <?php echo $this->Form->control('car_image', ['type' => 'file'], ['class' => 'form-control', 'id' => 'car_image']); ?>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Car Name</label>
                        <div class="col-sm-10"><?php echo $this->Form->control('car_name', ['class' => 'form-control', 'id' => 'car_name', 'label' => false]); ?>
                        </div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Four Hours</label>

                        <div class="col-sm-10"><?php echo $this->Form->control('four', ['class' => 'form-control', 'label' => false]); ?></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Eight Hours</label>

                        <div class="col-sm-10"><?php echo $this->Form->control('eight', ['class' => 'form-control', 'label' => false]); ?></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Twenty Four Hours</label>

                        <div class="col-sm-10"><?php echo $this->Form->control('twentyfour', ['class' => 'form-control', 'label' => false]); ?></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Model</label>

                        <div class="col-sm-10"><?php echo $this->Form->control('model', ['class' => 'form-control', 'label' => false]); ?></div>
                    </div>
                    <div class="hr-line-dashed"></div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Engine</label>

                        <div class="col-sm-10"><?php echo $this->Form->control('engine', ['class' => 'form-control', 'label' => false]); ?></div>
                    </div>

                    <div class="hr-line-dashed"></div>
                    <div class="form-group row"><label class="col-sm-2 col-form-label">Description</label>

                        <div class="col-sm-10"><?php echo $this->Form->control('description', ['class' => 'form-control', 'label' => false]); ?></div>
                    </div>
                    <div>
                        <div class="btn-group">

                            <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary btn-sm']) ?>
                        </div>

                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>