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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $carinfo->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $carinfo->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Carinfo'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="carinfo form content">
            <?= $this->Form->create($carinfo) ?>
            <fieldset>
                <legend><?= __('Edit Carinfo') ?></legend>
                <?php
                    echo $this->Form->control('car_image');
                    echo $this->Form->control('car_name');
                    echo $this->Form->control('four');
                    echo $this->Form->control('eight');
                    echo $this->Form->control('twentyfour');
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
