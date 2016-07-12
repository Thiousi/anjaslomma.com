<ol class="breadcrumb">
    <?php foreach($site->breadcrumb() as $crumb): ?>
        <li <?php e($crumb->isActive(), ' class="active"') ?>>
            <a href="<?php echo $crumb->url() ?>">
                <?php echo html($crumb->title()) ?>
            </a>
        </li>
    <?php endforeach ?>    
</ol>
