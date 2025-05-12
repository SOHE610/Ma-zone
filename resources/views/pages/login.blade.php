<!DOCTYPE html>
<html lang="zxx">
    <head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Links Of CSS File -->
		<link rel="stylesheet" href="assets/css/sidebar-menu.css">
		<link rel="stylesheet" href="assets/css/simplebar.css">
		<link rel="stylesheet" href="assets/css/apexcharts.css">
		<link rel="stylesheet" href="assets/css/prism.css">
		<link rel="stylesheet" href="assets/css/rangeslider.css">
        <link rel="stylesheet" href="assets/css/quill.snow.css">
        <link rel="stylesheet" href="assets/css/google-icon.css">
        <link rel="stylesheet" href="assets/css/remixicon.css">
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">
        <link rel="stylesheet" href="assets/css/fullcalendar.main.css">
        <link rel="stylesheet" href="assets/css/jsvectormap.min.css">
        <link rel="stylesheet" href="assets/css/lightpick.css">
		<link rel="stylesheet" href="assets/css/style.css">
		
		<!-- Favicon -->
		<link rel="icon" type="image/png" href="assets/images/favicon.png">
		<!-- Title -->
		<title>Trezo - Bootstrap 5 Admin Dashboard Template</title>
    </head>
    <body class="boxed-size bg-white">
        <!-- Start Preloader Area -->
        <div class="preloader" id="preloader">
            <div class="preloader">
                <div class="waviy position-relative">
                    <span class="d-inline-block">T</span>
                    <span class="d-inline-block">R</span>
                    <span class="d-inline-block">E</span>
                    <span class="d-inline-block">Z</span>
                    <span class="d-inline-block">O</span>
                </div>
            </div>
        </div>
        <!-- End Preloader Area -->

        <!-- Start Main Content Area -->
        <div class="container">
            <div class="main-content d-flex flex-column p-0">
                <div class="m-auto m-1230">
                    <div class="row align-items-center">
                        <div class="col-lg-6 d-none d-lg-block">
                            <img src="assets/images/login.jpg" class="rounded-3" alt="login">
                        </div>
                        <div class="col-lg-6">
                            <div class="mw-480 ms-lg-auto">
                                <div class="d-inline-block mb-4">
                                    <img src="assets/images/logo.svg" class="rounded-3 for-light-logo" alt="login">
                                    <img src="assets/images/white-logo.svg" class="rounded-3 for-dark-logo" alt="login">
                                </div>
                                <h3 class="fs-28 mb-2">Welcome back to Trezo!</h3>
                                <p class="fw-medium fs-16 mb-4">Sign In with social account or enter your details</p>
                               
                                <form action='/logins' method='post'>
                                    @csrf
                                    <div class="form-group mb-4">
                                        <label class="label text-secondary">Email Address</label>
                                        <input type="email" name="email_contact" class="form-control h-55" placeholder="example@trezo.com">
                                    </div>
                                    <div class="form-group mb-4">
                                        <label class="label text-secondary">Password</label>
                                        <input type="password" name="password" class="form-control h-55" placeholder="Type password">
                                    </div>
                                    <div class="form-group mb-4">
                                        <a href="forget-password.html" class="text-decoration-none text-primary fw-semibold">Forgot Password?</a>
                                    </div>
                                    <div class="form-group mb-4">
                                        <button type='submit' class="btn btn-primary fw-medium py-2 px-3 w-100">
                                            <div class="d-flex align-items-center justify-content-center py-1">
                                                <i class="material-symbols-outlined text-white fs-20 me-2">login</i>
                                                <span>Login</span>
                                            </div>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <p>Don’t have an account. <a href="register.html" class="fw-medium text-primary text-decoration-none">Register</a></p>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Start Main Content Area -->

        
        <button class="switch-toggle settings-btn dark-btn p-0 bg-transparent position-absolute top-0 d-none" id="switch-toggle">
            <span class="dark"><i class="material-symbols-outlined">light_mode</i></span> 
            <span class="light"><i class="material-symbols-outlined">dark_mode</i></span>
        </button>
     
        <!-- Link Of JS File -->
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/sidebar-menu.js"></script>
        <script src="assets/js/dragdrop.js"></script>
        <script src="assets/js/rangeslider.min.js"></script>
        <script src="assets/js/quill.min.js"></script>
        <script src="assets/js/data-table.js"></script>
        <script src="assets/js/prism.js"></script>
        <script src="assets/js/clipboard.min.js"></script>
        <script src="assets/js/feather.min.js"></script>
        <script src="assets/js/simplebar.min.js"></script>
        <script src="assets/js/apexcharts.min.js"></script>
        <script src="assets/js/echarts.js"></script>
        <script src="assets/js/swiper-bundle.min.js"></script>
        <script src="assets/js/fullcalendar.main.js"></script>
        <script src="assets/js/jsvectormap.min.js"></script>
        <script src="assets/js/world-merc.js"></script>
        <script src="assets/js/moment.min.js"></script>
        <script src="assets/js/lightpick.js"></script>
        <script src="assets/js/custom/apexcharts.js"></script>
        <script src="assets/js/custom/echarts.js"></script>
        <script src="assets/js/custom/custom.js"></script>
    </body>
</html>