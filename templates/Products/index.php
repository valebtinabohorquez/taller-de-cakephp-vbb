<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface[]|\Cake\Collection\CollectionInterface $products
 */
?>
<div class="products index content">
    <?= $this->Html->link(__('New Product'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Products') ?></h3>
    <div class="table-responsive">
    <?= $this->Html->link('Add products', ['action' => 'add']) ?>
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('IDcategory') ?></th>
                    <th><?= $this->Paginator->sort('categoryName') ?></th>
                    <th><?= $this->Paginator->sort('supplierID') ?></th>
                    <th><?= $this->Paginator->sort('categoryID') ?></th>
                    <th><?= $this->Paginator->sort('QuantityperUnit') ?></th>
                    <th><?= $this->Paginator->sort('Unitpreice') ?></th>
                    <th><?= $this->Paginator->sort('UnitsInStock') ?></th>
                    <th><?= $this->Paginator->sort('UnitsOnOrder') ?></th>
                    <th><?= $this->Paginator->sort('ReoderLevel') ?></th>
                    <th><?= $this->Paginator->sort('Discontinued') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($products as $product): ?>
                <tr>
                    <td><?= $this->Number->format($product->IDcategory) ?></td>
                    <td><?= h($product->categoryName) ?></td>
                    <td><?= $this->Number->format($product->supplierID) ?></td>
                    <td><?= $this->Number->format($product->categoryID) ?></td>
                    <td><?= h($product->QuantityperUnit) ?></td>
                    <td><?= $this->Number->format($product->Unitpreice) ?></td>
                    <td><?= $this->Number->format($product->UnitsInStock) ?></td>
                    <td><?= $this->Number->format($product->UnitsOnOrder) ?></td>
                    <td><?= $this->Number->format($product->ReoderLevel) ?></td>
                    <td><?= h($product->Discontinued) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $product->IDcategory]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->IDcategory]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->IDcategory], ['confirm' => __('Are you sure you want to delete # {0}?', $product->IDcategory)]) ?>
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
