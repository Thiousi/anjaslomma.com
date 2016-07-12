<nav class="navbar navbar-default navbar-inverse">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar top-bar"></span>
            <span class="icon-bar middle-bar"></span>
            <span class="icon-bar bottom-bar"></span>
        </button>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav nav-justified">
            <?php foreach($pages->visible() as $p): ?>
                <?php if($p->hasVisibleChildren()): ?>
                    <li class="dropdown<?php e($p->isOpen(), ' active') ?>">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <?php echo $p->title()->html() ?> <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <?php foreach($p->children()->visible() as $p): ?>
                                <li <?php e($p->isOpen(), ' class="active"') ?>>
                                    <a href="<?php echo $p->url() ?>">
                                        <?php echo $p->title()->html() ?>
                                    </a>
                                </li>
                            <?php endforeach ?>
                        </ul>
                    </li>
                    <?php else: ?>
                        <li <?php e($p->isOpen(), ' class="active"') ?>>
                            <a href="<?php echo $p->url() ?>">
                                <?php echo $p->title()->html() ?>
                            </a>
                        </li>
                <?php endif ?>
            <?php endforeach ?>
        </ul>
    </div>
</nav>
