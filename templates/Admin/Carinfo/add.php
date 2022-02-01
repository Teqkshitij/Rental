<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Carinfo $carinfo
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Carinfo'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="carinfo form content">
            <?= $this->Form->create($carinfo,['type'=>'file']) ?>
            <fieldset>
                <legend><?= __('Add Carinfo') ?></legend>
                <?php
                    echo $this->Form->control('car_image',['type'=>'file']);
                    echo $this->Form->control('car_name');
                    echo $this->Form->control('four',['label'=>'4 Hours']);
                    echo $this->Form->control('eight',['label'=>'8 Hours']);
                    echo $this->Form->control('twentyfour',['label'=>'24 Hours']);
                    echo $this->Form->control('model');
                    echo $this->Form->control('engine');
                    echo $this->Form->control('description');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
