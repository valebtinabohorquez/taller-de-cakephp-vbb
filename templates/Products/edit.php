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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $product->IDcategory],
                ['confirm' => __('Are you sure you want to delete # {0}?', $product->IDcategory), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Products'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="products form content">
            <?= $this->Form->create($product) ?>
            <fieldset>
                <legend><?= __('Edit Product') ?></legend>
                <?php
                    echo $this->Form->control('categoryName');
                    echo $this->Form->control('supplierID');
                    echo $this->Form->control('categoryID');
                    echo $this->Form->control('QuantityperUnit');
                    echo $this->Form->control('Unitpreice');
                    echo $this->Form->control('UnitsInStock');
                    echo $this->Form->control('UnitsOnOrder');
                    echo $this->Form->control('ReoderLevel');
                    echo $this->Form->control('Discontinued');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
