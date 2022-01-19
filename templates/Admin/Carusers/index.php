<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Caruser[]|\Cake\Collection\CollectionInterface $carusers
 */
?>
<div class="carusers index content">
    <?= $this->Html->link(__('New Caruser'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Carusers') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('user_type') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created_date') ?></th>
                    <th><?= $this->Paginator->sort('modified_date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($carusers as $caruser): ?>
                <tr>
                    <td><?= $this->Number->format($caruser->id) ?></td>
                    <td><?= h($caruser->email) ?></td>
                    <td><?= h($caruser->user_type) ?></td>
                    <td><?= h($caruser->status) ?></td>
                    <td><?= h($caruser->created_date) ?></td>
                    <td><?= h($caruser->modified_date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $caruser->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $caruser->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $caruser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $caruser->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
