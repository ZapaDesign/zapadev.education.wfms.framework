<?php

/**
 * @var $this \zpdevfrw\View
 * @var $s string
 * @var $products array
 * @var $breadcrumbs string
 * @var $total int
 * @var $pagination object
 * */

?>

<div class="container py-3">
    <div class="row">
        <div class="col-lg-12 category-content">
            <ol class="breadcrumb bg-light p-2">
                <li class="breadcrumb-item">
                    <a href="<?= base_url() ?>">
                        <i class="fas fa-home"></i>
                    </a></li>
                <li class="breadcrumb-item">
                    <?php __('search_index_title') ?>
                </li>
            </ol>
        </div>
    </div>
</div>

<div class="container py-3">
    <div class="row">

        <!--        <div class="col-lg-3 sidebar">
        
                    <div class="mb-2 sidebar-toggler">
                        <button class="btn btn-light" type="button">Категории <i class="fas fa-chevron-circle-down"></i></button>
                    </div>
        
                    <div class="sidebar-toggle sticky-top">
                        <div class="list-group">
                            <a href="#" class="list-group-item list-group-item-action">Компьютеры</a>
                            <a href="#" class="list-group-item list-group-item-action">Планшеты</a>
                            <a href="#" class="list-group-item list-group-item-action active">Ноутбуки</a>
                            <a href="#" class="list-group-item list-group-item-action">&nbsp;&nbsp;&nbsp;- Mac</a>
                            <a href="#" class="list-group-item list-group-item-action active">&nbsp;&nbsp;&nbsp;- Windows</a>
                            <a href="#" class="list-group-item list-group-item-action">Телефоны</a>
                            <a href="#" class="list-group-item list-group-item-action">Камеры</a>
                        </div>
                    </div>
        
                </div>-->

        <div class="col-lg-12 category-content">
            <h1 class="section-title"><?php __('search_index_title') ?></h1>
            
            <h4><?= ___('search_index_query') .  h($s); ?></h4>
            
            <?php if(!empty($category['content'])): ?>
                <div class="category-desc mb-5">
                    <?= $category['content'] ?>
                </div>
            <?php endif; ?>
            
            <div class="row">
                <?php if(!empty($products)): ?>
                    <?php $this->getPart('parts/products_loop', compact('products')); ?>

                    <div class="row">
                        <div class="col-md-12">
                            <p class="mt-4 mb-4">
                                <?= count($products) ?>
                                <?php __('tpl_total_pagination') ?>
                                <?= $total ?>
                            </p>
                            
                            <?php if( $pagination->countPages > 1 ): ?>
                                <?= $pagination ?>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="mt-5 mb-5">
                        <h2><?php __('search_index_not_found') ?></h2>
                    </div>
                <?php endif; ?>

            </div>

        </div>

    </div>
</div>