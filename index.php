<?php include_once('global.php'); ?>

<!doctype html>
<html>
    <head>
        <title>
            <?php echo $TITLE; ?> - web design and development
        </title>

        <?php include('partials/head.php'); ?>
    </head>
    <body>
        <?php include('partials/nav.php'); ?>
        <?php include('partials/header.php'); ?>

        <!-- Content -->
        <div class="container content">
            We're a small team of talented people who are passionate about what we do. VirtualStack's goal is to make technology easy and accessible to local businesses throughout the Bay. We believe that every small business should have a website as they play a vital role in reaching larger audiences.
        </div>

        <div class="container content grid one-one">
            <div>
                <h3>
                    We handle the geeky bits
                    <i class="fas fa-tools"></i>
                </h3>
                When it comes to making websites and mobile apps, we're the go-to guys. We make the entire process easy to understand and explain everything without the geek speak.
            </div>
            <div>
                <h3>
                    Straightforward pricing
                    <i class="fas fa-coins"></i>
                </h3>
                No one likes surprises when they're checking their bills. We use straightforward pricing so you know how much the project will cost before we start anything.
            </div>
        </div>

        <div class="container content">
            <blockquote>
                The VirtualStack team made the daunting task of getting a website seem quick and easy. Jonty answered all of my questions and even brought up topics I hadn't thought about. Would highly recommend!
            </blockquote>
            <span class="small-text right">
                Glenn Morris, Backridge Butcher
            </span>
        </div>
        
        <?php include('partials/footer.php'); ?>
        <?php include('partials/extra.php'); ?>

        <script src="js/slider.js"></script>
    </body>
</html>