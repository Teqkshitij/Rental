<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">User Form</h3>
              </div>
            
               <?= $this->Form->create($caruser,['style'=>'width:270px', 'id'=>'adduser']) ?>
                <div class="card-body">
                  <div class="form-group">
                    <?php echo $this->Form->control('user_profile.first_name',['class'=>'form-control']); ?>
                  </div>
                  <div class="form-group">
                    <?php echo $this->Form->control('user_profile.last_name',['class'=>'form-control']);?>
                  </div>
                  <div class="form-group">
                    <?php echo $this->Form->control('email',['class'=>'form-control']);?>
                  </div>
                  <div class="form-group">
                    <?php echo $this->Form->control('user_profile.contact',['class'=>'form-control']);?>
                  </div>
                  <div class="form-group">
                    <?php echo $this->Form->control('user_profile.address',['class'=>'form-control']);?>
                  </div>
                  <div class="form-group">
                    <?php echo $this->Form->control('password',['class'=>'form-control']);?>
                  </div>
                  <div class="form-group">
                    <?php echo $this->Form->control('confirm_password',['type'=>'password','class'=>'form-control']);?>
                  </div>
                 
                  
                

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button><br>
                  <?= $this->Html->link("Add User", ['prefix'=>false,'controller'=>'Carusers','action' => 'add']) ?><br>
                 <?= $this->Html->link("Admin Login", ['prefix'=>'Admin','controller'=>'Carusers','action' => 'login']) ?>
                 <?= $this->Html->link("User Login", ['prefix'=>false,'controller'=>'Carusers','action' => 'login']) ?>

                </div>

              
            </div>
            <?= $this->Form->end() ?>
          </div>