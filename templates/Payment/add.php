<<!DOCTYPE html>
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
                            e
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
        </nav>
        </div>
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-10">
                <h2>E-commerce payments</h2>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a>E-commerce payments</a>
                    </li>
                    <li class="breadcrumb-item active">
                        <strong>Payments</strong>
                    </li>
                </ol>
            </div>
            <div class="col-lg-2">

            </div>
        </div>

        
            <div class="row">

                <div class="col-lg-12">

                    <div class="ibox">
                        <div class="ibox-title">
                            Payment method
                        </div>
                        
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="float-right">
                                            <i class="fa fa-cc-amex text-success"></i>
                                            <i class="fa fa-cc-mastercard text-warning"></i>
                                            <i class="fa fa-cc-discover text-danger"></i>
                                        </div>
                                        <h5 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Credit Card/Debit Card</a>
                                        </h5>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse in">
                                        <div class="panel-body">

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <h2>Information</h2>
                                                    <strong><h3><?php echo $this->Form->control('amount', ['hidden' => 'true'])."$ ".$payment->amount;?></h3></strong>
                                                    

                                                    <p class="m-t">
                                                       Every month we give VIP Club members opportunities to get free merchandise, discounts on rentals, exclusive sweepstakes offers, special updates, early access to rentals, wishlist items, flash sales and more!.

                                                    </p>
                                                    </div>
                                                <div class="col-md-8">
                                                    <?= $this->Form->create($payment, ['id' => 'payment-form']) ?>

                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label>CARD NUMBER</label>
                                                                    <div class="input-group">
                                                                        <?php echo $this->Form->control('card', ['id'=>'cn','class'=>'form-control','type' => 'tel', 'minLength' => 16, 'maxLength' => 16,'label'=>false]);?>
                                                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-7 col-md-7">
                                                                <div class="form-group">
                                                                    <label>EXPIRATION Month&Year</label>
                                                                    <?php echo "<select name='month' id='month'class='form-control'>";
                                                                    for($i=1; $i <13; $i++){
                                                                            echo "<option value='".$i."'>".$i."</option>";
                                                                        }
                                                                        echo "</select>";

                                                                        echo $this->Form->control('year',['id'=>'ex','class'=>'form-control','min' => date('Y'), 'max' => date('Y')+10]);?>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-5 col-md-5 float-right">
                                                                <div class="form-group">
                                                                    <label>CV CODE</label>
                                                                     <?php echo $this->Form->control('cvv',['id'=>'cv','class'=>'form-control','type'=>'password','minLength'=>3,'maxLength'=>3,'label'=>false]);?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <label>NAME OF CARD</label>
                                                                     <?php echo $this->Form->control('name',['id'=>'nm','class'=>'form-control','label'=>false]);?>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                         <?= $this->Form->button(__('PAY'),[ 'class' =>'btn btn-primary']) ?> 
                                                            </div>
                                                        </div>
                                                    </form>

                                                </div>

                                            </div>






                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>

<?php echo $this->Html->script("validation");?>
   
</body>

</html>