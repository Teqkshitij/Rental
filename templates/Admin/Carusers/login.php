<!doctype html>
  <html lang="en">
  <head>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/admin.css">

    <link rel="stylesheet" href="/css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="/css/admin2.css">

    <script type="text/javascript" src="/js/validation.js"></script>

    <title> Admin Login</title>
  </head>
  <body>
  

  <div class="d-md-flex half">
    <div class="bg main" style="background-image: url('/img/bg_1.jpg');"></div>
    <div class="contents container">
        <?php echo $this->Flash->render(); ?>

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-12">
            <div class="form-block mx-auto">
              <div class="text-center mb-5">
              <h3>Login </h3>
              <!-- <p class="mb-4">Lorem ipsum dolor sit amet elit. Sapiente sit aut eos consectetur adipisicing.</p> -->
              </div>
              <?= $this->Form->create(null,['id'=>'adminlogin']) ?>
                <div class="form-group first">
        <?= $this->Form->control('email',['required' => true, 'class' => 'form-control', 'placeholder' => 'Enter E-Mail']) ?>
                </div>
                <div class="form-group last mb-3">
        <?= $this->Form->control('password', ['required' => true, 'class' => 'form-control', 'placeholder' => 'Enter Password']) ?>
                </div>
                

    <?= $this->Form->submit(__('Login'), ['class' => 'btn btn-block btn-primary']); ?><hr>
    <?= $this->Form->end() ?><br><p>
     <?= $this->Html->link(__('User Login'), ['prefix'=>false,'controller'=>'Carusers','action' => 'login']) ?><br>
    
</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/mian.js"></script>
  </body>
</html>


