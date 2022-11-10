<style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&family=Poppins:wght@200&display=swap');

    header h2 {
        margin-top: 10px;
        padding-left: 1rem;
        font-weight: 600;
        font-family: "Montserrat", sans-serif !important;
    }

    .logo-icon img {
        margin-left: 1rem;
    }

    @media only screen and (max-width: 1200px) {
        header {
            margin-left: 250px !important;
            transition: margin-left 300ms;
        }
    }

    @media only screen and (max-width: 1169px) {
        header {
            margin-left: 50px !important;
            transition: margin-left 300ms;
        }

        .logo-icon img {
            margin-left: -40px !important;
            transition: margin-left 300ms;
        }
    }
    
    @media only screen and (max-width: 900px) {
        .title{
            display: none;
        }
        .title2{
            display: block;
        }
    }

    @media only screen and (max-width: 768px) {
        header {
            margin-left: 0px !important;
            transition: margin-left 300ms;
        }

        .logo-icon img {
            margin-left: 0px !important;
            transition: margin-left 300ms;
        }
    }
</style>
<!-- ============================================================== -->
<!-- Topbar header -->
<!-- ============================================================== -->
<header class="topbar" data-navbarbg="skin1" style="margin-left: 250px; height: 69px;">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <div class="navbar-header" data-logobg="skin1">
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <a class="navbar-brand" href="index.php">
                <!-- Logo icon -->
                <b class="logo-icon">
                    <img src="../src/images/uccLogo.png" alt="homepage" style="margin-top:-50px;margin-bottom:-50px; width: 50px;" />
                </b>
                <h2>Welcome, UCCnian!</h2>
            </a>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a class="nav-toggler waves-effect waves-dark d-block d-md-none" href="javascript:void(0)" style="color: black !important;"><i class="ti-menu ti-close"></i></a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
    </nav>
</header>
<!-- ============================================================== -->
<!-- End Topbar header -->
<!-- ============================================================== -->