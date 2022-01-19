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
            <?= $this->Html->link(__('Edit Caruser'), ['action' => 'edit', $caruser->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Caruser'), ['action' => 'delete', $caruser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caruser->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Carusers'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Caruser'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="carusers view content">
            <h3><?= h($caruser->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($caruser->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('User Type') ?></th>
                    <td><?= h($caruser->user_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= h($caruser->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($caruser->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created Date') ?></th>
                    <td><?= h($caruser->created_date) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified Date') ?></th>
                    <td><?= h($caruser->modified_date) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
