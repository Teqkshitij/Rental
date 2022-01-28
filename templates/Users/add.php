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
                            <?= $this->Form->create($user,['id'=>'user']) ?>
                                <div class="form-group  row"><label class="col-sm-2 col-form-label">Date</label>

                                    <div class="col-sm-10"> <?php echo $this->Form->date('date',['class'=>'form-control','id'=>'date']);?>
                                </div>
                            </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Time</label>
                                    <div class="col-sm-10"><?php echo $this->Form->time('time',['class'=>'form-control','id'=>'time']);?> 
                                    </div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Primary drivers Full name</label>

                                    <div class="col-sm-10"><?php echo $this->Form->control('name',['class'=>'form-control','label'=>false]);?></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-sm-2 col-form-label">Secondary drivers Full name</label>

                                    <div class="col-sm-10"><?php echo $this->Form->control('full_name',['class'=>'form-control','label'=>false]);?></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-lg-2 col-form-label">Email-Id</label>

                                    <div class="col-lg-10"><?php echo $this->Form->control('email',['class'=>'form-control','label'=>false]);?></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-lg-2 col-form-label">Contact Number</label>

                                    <div class="col-lg-10"><?php echo $this->Form->control('contact',['class'=>'form-control','label'=>false]);?></div>
                                </div>

                                <div class="form-group row"><label class="col-lg-2 col-form-label">License Number</label>

                                    <div class="col-lg-10"><?php echo $this->Form->control('license',['class'=>'form-control','label'=>false]);?></div>
                                </div>
                                <div class="form-group row"><label class="col-lg-2 col-form-label">Package</label>
                                    <div class="col-lg-10"> <?php echo $this->Form->select('package',[
                                                                ['value'=>$package->four,'text'=>'4-Hours: $'.$package->four],
                     
                                                                ['value'=>$package->eight,'text'=>'8-Hours: $'.$package->eight],
                                                                ['value'=>$package->twentyfour,'text'=>'24-Hours: $'.$package->twentyfour],
                                                                ],['class'=>'form-control','label'=>false])."<br>";?></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-lg-2 col-form-label">Country of Residence</label>

                                    <div class="col-lg-10"><?php echo $this->Form->select('address',[['value'=>'United States','text'=>'United States'],['value'=>'International and Canada','text'=>'International and Canada']],['class'=>'form-control','label'=>false])."<br>";?></div>
                                </div>
                                <div class="hr-line-dashed"></div>

                                <div class="form-group row"><label class="col-lg-2 col-form-label">Breakdown Insurance</label>

                                    <div class="col-lg-10"><?php echo $this->Form->select('insurance',[['value'=>'US$149.00 - Yes, I would like to purchase Breakdown Insurance. (Recommended)','text'=>'US$149.00 - Yes, I would like to purchase Breakdown Insurance. (Recommended)'],['value'=>'IUS$0.00 - No, I do NOT want to purchase Breakdown Insurance.','text'=>'US$0.00 - No, I do NOT want to purchase Breakdown Insurance.']],['class'=>'form-control','label'=>false])."<br>";?></div>
                                </div>
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row"><label class="col-lg-2 col-form-label">Prepaid Gas Credit</label>

                                    <div class="col-lg-10"><?php echo $this->Form->select('gas',[['value'=>'US$99.00 - Yes, I would like to purchase the Prepaid Gas Credit. (Recommended)','text'=>'US$99.00 - Yes, I would like to purchase the Prepaid Gas Credit. (Recommended)'],['value'=>'IUS$0.00 - No, I do NOT want to purchase Breakdown Insurance.','text'=>'IUS$0.00 - No, I do NOT want to purchase Breakdown Insurance.']],['class'=>'form-control','label'=>false])."<br>";?></div>
                                </div>
                                <div class="form-group row"><label class="col-lg-2 col-form-label">Destination</label>

                                    <div class="col-lg-10"><?php echo $this->Form->control('destination',['class'=>'form-control','label'=>false]);?></div>
                                </div>
                                <div class="form-group row"><label class="col-lg-2 col-form-label">Questions OR Concerns?</label>

                                    <div class="col-lg-10"><?php  echo $this->Form->textarea('question',['class'=>'form-control','label'=>false]);?></div>
                                </div>

                
                                
                                <div class="hr-line-dashed"></div>
                                <div class="form-group row">
                                    <div class="col-sm-4 col-sm-offset-2">
                                        
                                         <?= $this->Form->button(__('Submit'),['class'=>'btn btn-sm btn-primary float-left']) ?> 


                                       
                                    </div>
                                </div>
                            <?= $this->Form->end() ?>
                        </div>
                    </div>
                </div>
        
            
          <footer>
                <strong>Copyright</strong> Example Company &copy; 2014-2018</footer>
     
            




       <!-- Mainly scripts -->
<script src="/cars/js/jquery-3.1.1.min.js"></script>
<script src="/cars/js/popper.min.js"></script>
    <script src="/cars/js/bootstrap.js"></script>
<script src="/cars/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="/cars/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

<!-- Custom and plugin javascript -->
<script src="/cars/js/inspinia.js"></script>
<script src="/cars/js/plugins/pace/pace.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

<?php echo $this->Html->script("validation");?>
   
</body>

</html>





