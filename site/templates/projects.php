<?php snippet('header') ?>

<main class="projects row">
    
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="thumbnail thumbnail-scroll">
            <div class="caption">
                <h1><?php echo $page->title()->html() ?></h1>
                <?php echo $page->text()->kirbytext() ?>
            </div>
        </div>
    </div>
    
    <?php foreach($page->children()->visible() as $project): ?>
        <div class="col-md-3 col-sm-6 col-xs-12 zoom">
            <div class="thumbnail">
                <a href="<?php echo $project->url() ?>">
                    <? if($project->preview() != ''): ?>
                        <? $image = $project->images()->find( html($project->preview()) ); ?>
                        <?= thumb($image, array('width' => 720, 'height' => 560, 'crop' => true)); ?>
                        <? else: ?>
                            <img src="https://placeholdit.imgix.net/~text?txtsize=68&txt=720%C3%97560&w=720&h=560&fm=png" alt="Placeholder image">
                    <? endif ?>
                    <div class="caption">
                        <h2 class="<?php echo $project->titlesize() ?>"><?php echo $project->title()->excerpt(22) ?></h2>
                        <? if($project->teaser() != ''): ?>
                            <p><?php echo $project->teaser()->excerpt(50) ?></p>
                            <? else: ?>
                                <p><?php echo $project->text()->excerpt(50) ?></p>
                        <? endif ?>
                    </div>
                </a>
            </div>
        </div>
    <?php endforeach ?>

</main>

<?php snippet('footer') ?>