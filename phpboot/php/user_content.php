<?php if(!isset($_SESSION['user'])){ ?>
    <div class="container">
        <h1 class="text-center">Velkommen!</h1>
        <h2 class="text-center pb-3">Log venligst ind for at se resten af sitets indhold.</h2>
    </div>
<?php } if(isset($_SESSION['user']) && $_SESSION['user'] == 'Alex'){ ?>
    <div class="container">
        <h3 class="text-center">Velkommen tilbage Alex.</h3>
        <p>Her vil du kunne finde indhold som kun du vil kunne se.</p>
    </div>
<?php } if ( isset( $_SESSION[ 'user' ] ) && $_SESSION[ 'user' ] == 'Martin' ) { ?>
    <div class="container text-center pb-3">
        <img src="images/martin.jpg" class="image-border" alt="Martin Lorentsen" width="300" height="500"/>
    </div>
<?php } if ( isset( $_SESSION[ 'user' ] ) && $_SESSION[ 'user' ] == 'Chris' ) { ?>
<!--https://unsplash.com/photos/fG5jun4bYBQ-->
    <div class="container text-center">
        <img src="images/waterfall.jpg" class="image-border" alt="Vandfald"  width="250" height="375"/>
    </div>
<?php } if ( isset( $_SESSION[ 'user' ] ) && $_SESSION[ 'user' ] == 'Henrik' ) { ?>
    <div class="container "><img src="images/corner_top.png" width="24" height="24" class="float-right mt-1"/>
        <h3 class="text-center pt-4">Expertise:</h3>
        <h4 class="text-center pb-4">Html | CSS | JavaScript | PHP</h4>
        <img src="images/corner_bottom.png" alt="" width="24" height="24" class="mb-4"/>
    </div>
<?php } if ( isset( $_SESSION[ 'user' ] ) && $_SESSION[ 'user' ] == 'Rudolf' ) { ?>
    <!--https://unsplash.com/photos/ATx9ogzHW38-->
    <div class="container text-center"><img src="images/reindeer.jpg" class="image-border" alt="Rensdyr"  width="547" height="365"/>
        <p>Lidt tidligt at sige god jul, så her er et par rensdyr i stedet.</p>
    </div>
<?php } ?>