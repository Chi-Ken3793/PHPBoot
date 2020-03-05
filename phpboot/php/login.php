<?php
if ( !empty( $_POST[ 'username' ] ) || !empty( $_POST[ 'password' ] ) ) {
    if ( isset( $_POST[ 'username' ] ) && isset( $_POST[ 'password' ] ) ) {

        $users = [
            'Alex' => 123,
            'Martin' => 'banan',
            'Chris' => 'secret',
            'Henrik' => 101,
            'Rudolf' => 'jul'
        ];

        $user = false;

        foreach ( $users as $username => $password ) {
            if ( ( $_POST[ 'username' ] ) == $username && ( $_POST[ 'password' ] ) == $password ) {
                $user = $_POST[ 'username' ];
                break;
            }
        }
        if ( $user ) {
            ?>
        <div class="navtop-login text-center py-1">Velkommen
    <?php $user ?>
        </div>
    <?php $_SESSION[ 'user' ] = $user; } else { ?>
        <div class="navtop-warning text-center py-1">Forkert Login</div>
    <?php }}} ?>
<div class="container-fluid navtop">
    <div class="row">
        <div class="col-12 col-md-5 text-center">
            <img src="images/logo.png" width="270" height="50" class="navtop-img mt-0 mt-md-2">
        </div>
        <div class="col-12 col-md-7">
            <form method="post">
                <div class="form-row pt-1 pt-md-3 float-right">
                    <div class="form-group px-1">
                        <input type="text" class="form-control" id="username" placeholder="Username" name="username">
                    </div>
                    <div class="form-group px-1">
                        <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                    </div>
                    <?php if ( isset( $_SESSION[ 'user' ] ) ) { ?>
                        <div class="form-group pl-2"><a href="logout.php" class="btn btn-primary">Logout</a></div>
                    <?php } else { ?>
                        <div class="form-group pl-2">
                            <input class="btn btn-primary" type="submit" value=Login>
                        </div>
                    <?php } ?>
                </div>
            </form>
        </div>
    </div>
</div>