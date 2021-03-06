<?php snippet('header') ?>

<main class="project row">
    <div class="col-md-12">
        <div class="thumbnail">
            <?php snippet('breadcrumb') ?>
            <div class="caption">
                <h1><?php echo $page->title()->html() ?></h1>
                <?php echo $page->text()->kirbytext() ?>
            </div>
        </div>
    </div>
</main>

<?php snippet('footer') ?>