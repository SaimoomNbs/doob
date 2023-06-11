<!doctype html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <meta name="theme-color" content="#000000">
    <title>Doob</title>
    <link rel="icon" type="image/png" href="assets/img/logo.svg.svg" sizes="32x32">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/logo.svg.svg">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <!-- loader -->
    <div id="loader">
        <img src="assets/img/logo-tr.png" alt="icon" class="loading-icon">
    </div>
    <!-- * loader -->
    
    <!-- App Header -->
    <div class="appHeader no-border transparent position-absolute">
        <!-- <div class="left">
            <a href="#" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle"></div>
        <div class="right">
        </div> -->

    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section mt-2 text-center">
            <img src="assets/img/doob-tr.png" alt="icon" class="img-fluid">
        </div>
        <div class="section mb-5 p-2">

            <form action="doob-membership.php">
                <div class="card">
                    <div class="card-body pb-1">
                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <!-- <label class="label" for="email1">E-mail</label> -->
                                <input type="email" class="form-control" id="email1" placeholder="Your e-mail">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>

                        <div class="form-group basic">
                            <div class="input-wrapper">
                                <!-- <label class="label" for="password1">Password</label> -->
                                <input type="password" class="form-control" id="password1" autocomplete="off"
                                    placeholder="Your password">
                                <i class="clear-input">
                                    <ion-icon name="close-circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="form-links mt-2">
                    <div>
                        <a href="app-register.html">Register Now</a>
                    </div>
                    <div><a href="app-forgot-password.html" class="text-muted">Forgot Password?</a></div>
                </div>

                <div class="form-button-group  transparent">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Log in</button>
                </div>

            </form>
        </div>

    </div>
    <!-- * App Capsule -->



    <!-- ========= JS Files =========  -->
    <!-- Bootstrap -->
    <script src="assets/js/lib/bootstrap.bundle.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Splide -->
    <script src="assets/js/plugins/splide/splide.min.js"></script>
    <!-- Base Js File -->
    <script src="assets/js/base.js"></script>


</body>

</html>