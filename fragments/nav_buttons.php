<?php
    if(isset($_SESSION["user"])) {
?>
    <div class="col-4 header-loginw3ls text-lg-right text-center">
        <a href="services/logout.php" class="log">
            <i class="fas fa-user mr-2"></i> Logout</a>
    </div>
<?php
    } else {
?>
    <div class="col-4 header-loginw3ls text-lg-right text-center">
        <a href="#" class="log" data-toggle="modal" data-target="#exampleModalCenter1">
            <i class="fas fa-user mr-2"></i> Login</a>
    </div>
    <div class="col-4 header-loginw3ls">
        <a href="#" class="log" data-toggle="modal" data-target="#exampleModalCenter2">
            <i class="fas fa-key mr-2"></i> Register</a>
    </div>
<?php
    }
?>