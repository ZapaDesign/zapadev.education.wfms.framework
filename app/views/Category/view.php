<?php

/**
 * @var $this \zpdevfrw\View
 * @var $category array
 * @var $products array
 * @var $breadcrumbs string
 * @var $total int
 * @var $pagination object
 * */

?>

<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-light p-2">
            <?= $breadcrumbs ?>
        </ol>
    </nav>
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
            <h3 class="section-title"><?= $category['title'] ?></h3>
            
            <?php if(!empty($category['content'])): ?>
                <div class="category-desc mb-5">
                    <?= $category['content'] ?>
                </div>
            <?php endif; ?>

            <div class="row">
                <div class="col-sm-6">
                    <div class="input-group mb-3">
                        <label class="input-group-text" for="input-sort"><?php __('category_view_sort') ?>:</label>
                        <select class="form-select" id="input-sort">
                            <option selected=""><?php __('category_view_sort_by_default') ?></option>
                            <option value="1"><?php __('category_view_sort_title_asc') ?></option>
                            <option value="2"><?php __('category_view_sort_title_desc') ?></option>
                            <option value="3"><?php __('category_view_sort_price_asc') ?></option>
                            <option value="3"><?php __('category_view_sort_price_desc') ?></option>
                        </select>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="input-group ">
                        <label class="input-group-text" for="input-sort"><?php __('category_view_show') ?>:</label>
                        <select class="form-select" id="input-sort">
                            <option selected="">15</option>
                            <option value="1">25</option>
                            <option value="2">50</option>
                            <option value="3">75</option>
                            <option value="3">100</option>
                        </select>
                    </div>
                </div>
            </div>

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
                        <h2><?php __('category_view_no_products') ?></h2>
                    </div>
                <?php endif; ?>
                
            </div>
            
        </div>

    </div>
</div>