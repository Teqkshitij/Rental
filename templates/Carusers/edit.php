<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Caruser $caruser
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $caruser->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $caruser->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Carusers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="carusers form content">
            <?= $this->Form->create($caruser) ?>
            <fieldset>
                <legend><?= __('Edit Caruser') ?></legend>
                <?php
                    echo $this->Form->control('email');
                    echo $this->Form->control('password');
                    echo $this->Form->control('user_type');
                    echo $this->Form->control('status');
                    echo $this->Form->control('created_date');
                    echo $this->Form->control('modified_date');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
