            <footer class="row">
                <div class="col-xs-6">
                    <?php snippet('list-social') ?>
                </div>
                <div class="col-xs-6 text-right">
                    <?php echo $site->copyright()->kirbytext() ?>
                </div>
            </footer>

        </div> <!-- .container -->

        <?php echo js('assets/js/vendor/jquery.min.js') ?>
        <?php echo js('assets/js/vendor/plugins.min.js') ?>
        <?php echo js('assets/js/onload.js') ?>

    </body>
</html>
