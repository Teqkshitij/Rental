<div class="row">
    <div class="col-md-4 offset-md-4">
        <?php echo $this->Flash->render() ?>
        <div class="card">
            <h3 class="card-header">Forget Password</h3>
            <div class="card-body">
                <?php echo $this->Form->create() ?>
                <div class="form-group">
                    <?php echo $this->Form->control('email', ['class' => 'form-control']) ?>
                </div>

                <?php
                echo $this->Form->button('Get New Password', ['class' => 'btn btn-primry']);
                echo $this->Html->link('Login', ['prefix' => false, 'controller' => 'Carusers', 'action' => 'login'], ['class' => 'btn btn-primry']);
                echo $this->Form->end();
                ?>

            </div>
        </div>
    </div>
</div>