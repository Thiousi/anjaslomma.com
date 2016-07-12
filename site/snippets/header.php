<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <title><?php echo $page->title()->html() ?>&nbsp;&#47;&#47;&nbsp;<?php echo $site->title()->html() ?></title>

        <meta name="author" content="<?php echo $site->author()->html() ?>" />

        <?php if ($page->description() != ''): ?>
            <meta name="description" content="<?php echo $page->description()->html() ?>" />
            <?php else: ?>
                <meta name="description" content="<?php echo $site->description()->html() ?>" />
        <?php endif ?>

        <meta name="robots" content="index, follow" />

        <link rel="author" href="humans.txt" />

        <?php echo css('assets/css/main.min.css') ?>

        <?php snippet('favicons') ?>

        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <?php if ($site->background() != ''): ?>
        <?php $image = $site->images()->find( html( $site->background() ) ); ?>
        <body class="body body-<?php echo $site->backgroundstyle() ?>"  style="background-image:url(<?php echo $image->url() ?>);">

        <?php else: ?>
            <body>

    <?php endif ?>

        <?php/*
        <?php if ($site->background() != ''): ?>
            <?php $image = $site->images()->find(html($site->background())); ?>
            <div class="body body-<?php echo $site->backgroundstyle() ?>"  style="background-image:url(<?php echo $image->url() ?>);">
        <?php endif ?>
        */?>




        <div class="container">
            <?php if ($page == 'home'): ?>
                <header class="outer">
                    <div class="inner">
                        <div class="row">
                            <?php snippet('title') ?>
                        </div>
                        <?php snippet('navbar') ?>
                    </div>
                </header>
                <?php else: ?>
                    <header class="row">
                        <?php snippet('title') ?>
                    </header>
                    <?php snippet('navbar') ?>
            <?php endif ?>
