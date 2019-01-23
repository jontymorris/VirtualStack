<?php include_once('global.php'); ?>

<!doctype html>
<html>
    <head>
        <title>
            <?php echo $TITLE; ?> - previous work
        </title>

        <?php include('partials/head.php'); ?>
    </head>
    <body>
        <?php include('partials/nav.php'); ?>

        <!-- Content -->
        <div class="container content">
            <h2>What we've done</h2>
            We let our previous work speak for us.
        </div>

        <div class="container content grid one-one-one">
            <div class="portfolio">
                <a href="https://backridgebutcher.co.nz" target="_blank">
                    <img src="images/portfolio/brb.jpg">
                    Backridge Butcher
                </a>
            </div>
            <div class="portfolio">
                <a href="https://red-bricks-hawkes-bay.co.nz/" target="_blank">
                    <img src="images/portfolio/bricks.jpg">
                    Red Bricks and Sleepers
                </a>
            </div>
            <div class="portfolio">
                <a href="https://puketapu-international.com/" target="_blank">
                    <img src="images/portfolio/puketapu.jpg">
                    Puketapu International
                </a>
            </div>
            <div class="portfolio">
                <a href="http://test.modernyoganapier.co.nz/" target="_blank">
                    <img src="images/portfolio/yoga.jpg">
                    Modern Yoga Napier
                </a>
            </div>
        </div>
        
        <?php include('partials/footer.php'); ?>
        <?php include('partials/extra.php'); ?>

    </body>
</html>