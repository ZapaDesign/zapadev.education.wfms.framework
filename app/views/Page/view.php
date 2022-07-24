<?php

/**
 * @var $page array
 * @var $breadcrumbs string
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
                    <?= $page['title'] ?>
                </li>
            </ol>
        </div>
    </div>
</div>

<div class="container py-3">
    <div class="row">

        <div class="col-lg-12 category-content">
            <h1 class="section-title"><?= $page['title'] ?></h1>

            <div class="row">
                <?= $page['content'] ?>

            </div>

        </div>

    </div>
</div>