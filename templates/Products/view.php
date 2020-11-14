<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $product
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->IDcategory], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->IDcategory], ['confirm' => __('Are you sure you want to delete # {0}?', $product->IDcategory), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Product'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="products view content">
            <h3><?= h($product->IDcategory) ?></h3>
            <table>
                <tr>
                    <th><?= __('CategoryName') ?></th>
                    <td><?= h($product->categoryName) ?></td>
                </tr>
                <tr>
                    <th><?= __('QuantityperUnit') ?></th>
                    <td><?= h($product->QuantityperUnit) ?></td>
                </tr>
                <tr>
                    <th><?= __('Discontinued') ?></th>
                    <td><?= h($product->Discontinued) ?></td>
                </tr>
                <tr>
                    <th><?= __('IDcategory') ?></th>
                    <td><?= $this->Number->format($product->IDcategory) ?></td>
                </tr>
                <tr>
                    <th><?= __('SupplierID') ?></th>
                    <td><?= $this->Number->format($product->supplierID) ?></td>
                </tr>
                <tr>
                    <th><?= __('CategoryID') ?></th>
                    <td><?= $this->Number->format($product->categoryID) ?></td>
                </tr>
                <tr>
                    <th><?= __('Unitpreice') ?></th>
                    <td><?= $this->Number->format($product->Unitpreice) ?></td>
                </tr>
                <tr>
                    <th><?= __('UnitsInStock') ?></th>
                    <td><?= $this->Number->format($product->UnitsInStock) ?></td>
                </tr>
                <tr>
                    <th><?= __('UnitsOnOrder') ?></th>
                    <td><?= $this->Number->format($product->UnitsOnOrder) ?></td>
                </tr>
                <tr>
                    <th><?= __('ReoderLevel') ?></th>
                    <td><?= $this->Number->format($product->ReoderLevel) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
