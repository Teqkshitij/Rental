<script type="text/javascript" src="/js/validation.js"></script>


<div class="row">
  <div class="col-md-6 mx-auto p-0">
    <div class="card">
      <div class="login-box">
        <div class="login-snip"> <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Login</label> <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab"></label>
          <div class="login-space">

          <?= $this->Form->create(null,['id'=>'adminlogin']) ?>

            <div class="login">
              <div class="group"><?= $this->Form->control('email', ['required' => true, 'class' => 'input', 'placeholder' => 'Enter E-Mail']) ?></div>
              <div class="group"><?= $this->Form->control('password', ['required' => true, 'class' => 'input', 'placeholder' => 'Enter Password']) ?></div>

              <!-- <div class="group"> <input id="check" type="checkbox" class="check" checked> <label for="check"><span class="icon"></span> Keep me Signed in</label> </div> -->
              <!-- <div class="group"> <input type="submit" class="button" value="Sign In"> </div> -->
              <?= $this->Form->submit(__('Login'), ['class' => 'btn btn-success']); ?><br>
              <div class="group"> <?= $this->Html->link(__('Forgot Password?'), ['prefix' => false, 'controller' => 'Carusers', 'action' => 'forgotpassword']) ?></div>


              <div class="hr"></div>
              <div class="foot">
                <?= $this->Html->link(__('Admin Login'), ['prefix' => 'Admin', 'controller' => 'Carusers', 'action' => 'login']) ?><br>
                <?= $this->Html->link(__('Add User'), ['prefix' => false, 'controller' => 'Carusers', 'action' => 'add']) ?>



              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<link rel="stylesheet" href="/css/login.css">
