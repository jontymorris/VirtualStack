<?php include_once('global.php'); ?>

<!doctype html>
<html>
    <head>
        <title>
            <?php echo $TITLE; ?> - what we do
        </title>

        <?php include('partials/head.php'); ?>
    </head>
    <body>
        <?php include('partials/nav.php'); ?>

        <!-- Content -->
        <div class="container content">
            <h2>What we do</h2>
            The VirtualStack team has a wide range of expertise. Our goal is to empower local businesses with moden technology.
        </div>

        <div class="container content grid one-one-one">
            <div class="service">
                <h3>Website development <i class="fas fa-code"></i></h3>
                We spealize in web design and development. Every business needs a professionally designed website that is mobile responsive so they can grow their online presence.
            </div>

            <div class="service">
                <h3>Web hosting <i class="fas fa-server"></i></h3>
                Hosting your website can be a tricky task and isn’t everyones cup of tea. We can take care of the geeky details and host your website for you.
            </div>
            
            <div class="service">
                <h3>CMS integration <i class="fas fa-edit"></i></h3>
                Everyone wants to edit their website. We can integrate your website with a well known content managment system such as Wordpress or Sporty to make editing a breeze.            </div>

            <div class="service">
                <h3>Website maintenance <i class="fas fa-tools"></i></h3>
                Have an existing website that needs updating? We’re the team for the job! We provide maintenance services that can keep your old website looking fresh.
            </div>
            
            <div class="service">
                <h3>Mobile apps <i class="fas fa-mobile-alt"></i></h3>
                Mobile apps are powering more businesses everyday. Do you need an affordable mobile app that will take your business into the future?
            </div>
            
            <div class="service">
                <h3>Desktop software <i class="fas fa-desktop"></i></h3>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas ut erat ex. Fusce at quam erat. Morbi consectetur ipsum fringilla vestibulum euismod.
            </div>
        </div>
        
        <?php include('partials/footer.php'); ?>
        <?php include('partials/extra.php'); ?>

    </body>
</html>