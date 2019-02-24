<?php include_once('global.php'); ?>

<!doctype html>
<html>
    <head>
        <title>
            <?php echo $TITLE; ?> | Web design and development
        </title>
        
        <meta name="description" content="We're a small team that is passionate about making websites and mobile apps. We make the process easy and explain everything without the geek speak.">

        <?php include('partials/head.php'); ?>
    </head>
    <body>
        <?php include('partials/nav.php'); ?>
        <?php include('partials/header.php'); ?>

        <!-- Content -->
        <div class="container content">
            We're a small team of talented people who are passionate about what we do. VirtualStack's goal is to make technology easy and accessible to local businesses throughout The Bay. We believe that every small business should have a website as they play a vital role in reaching larger audiences.
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
            <h3>What our clients say</h3>
            <blockquote>
            Getting a website seemed so overwhelming. When I finally took action and approached the VirtualStack team, I was gladly suprised by how quick and easy the process felt. Jonty answered all my questions and more. Would highly recommend!
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
