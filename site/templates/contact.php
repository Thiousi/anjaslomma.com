<?php snippet('header') ?>

<main class="contact row">
    <div class="col-md-12">
        <div class="thumbnail">
            <?php snippet('breadcrumb') ?>
            <div class="caption">
                <h1><?php echo $page->title()->html() ?></h1>
                <?php echo $page->text()->kirbytext() ?>
                <?php if ($page->showform() == 'on'): ?>
                    <?php snippet('contactform') ?>
                <?php endif ?>
            </div>
        </div>
    </div>
</main>

<?php snippet('footer') ?>