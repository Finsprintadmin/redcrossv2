<!DOCTYPE html>
<html lang="en" dir="ltr" data-nav-layout="vertical" data-vertical-style="overlay" data-theme-mode="light" data-header-styles="light" data-menu-styles="light" data-toggled="close">

<head>

    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Krc-Sign In</title>
    <meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
    <meta name="Author" content="Spruko Technologies Private Limited">
    <meta name="keywords" content="admin,admin dashboard,admin panel,admin template,bootstrap,clean,dashboard,flat,jquery,modern,responsive,premium admin templates,responsive admin,ui,ui kit.">

    <!-- Favicon -->
    <link rel="icon" href="../assets/images/brand-logos/favicon.ico" type="image/x-icon">

    <!-- Main Theme Js -->
    <script src="../assets/js/authentication-main.js"></script>

    <!-- Bootstrap Css -->
    <link id="style" href="../assets/libs/bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- Style Css -->
    <link href="../assets/css/styles.min.css" rel="stylesheet" >

    <!-- Icons Css -->
    <link href="../assets/css/icons.min.css" rel="stylesheet" >


    <link rel="stylesheet" href="../assets/libs/swiper/swiper-bundle.min.css">

</head>

<body class="bg-white">



<div class="row authentication mx-0">

    <div class="col-xxl-5 col-xl-5 col-lg-12">
        <div class="row justify-content-center align-items-center h-100">
            <div class="col-xxl-8 col-xl-7 col-lg-7 col-md-7 col-sm-8 col-12">
                <div class="p-5">
                    <div class="mb-4">
                        <a href="{{url('/')}}">
                            <img src="{{asset('assets/images/brand-logos/krclogo1.png')}}" alt="" class="authentication-brand desktop-logo">

                        </a>
                    </div>
                    <p class="h5 fw-semibold mb-2">Digital Fundraising Platform</p>
                    <p class="mb-3 text-muted op-7 fw-normal">Welcome back...</p>

                    <div class="text-center my-5 authentication-barrier">
                        <p class="h5 fw-semibold mb-2">Sign In</p>
                    </div>
                    <x-auth-session-status class="mb-4" :status="session('status')" />
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row gy-3">
                            <div class="col-xl-12 mt-0">
                                <label for="email" class="form-label text-default">Email</label>
                                <input type="text" class="form-control form-control-lg" name="email" placeholder="Email">
                            </div>
                            <div class="col-xl-12 mb-3">

                                <div class="input-group">
                                    <input type="password" class="form-control form-control-lg" name="password" placeholder="password">
                                    <button class="btn btn-light" type="button" onclick="createpassword('signin-password',this)" name="password"><i class="ri-eye-off-line align-middle"></i></button>
                                </div>
                                <div class="mt-2">
{{--                                    <div class="form-check">--}}
{{--                                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">--}}
{{--                                        <label class="form-check-label text-muted fw-normal" for="defaultCheck1">--}}
{{--                                            Remember password ?--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                            <div class="col-xl-12 d-grid mt-2">
                                <button type="submit" class="btn btn-lg btn-primary">Sign In</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-7 col-xl-7 col-lg-7 d-xl-block d-none px-0">
        <div class="authentication-cover">
            <div class="aunthentication-cover-content rounded">
                <div class="swiper keyboard-control">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="text-fixed-white text-center p-5 d-flex align-items-center justify-content-center">
                                <div>
                                    <div class="mb-5">
                                        <img src="{{asset('assets/images/authentication/krc_slider_1.png')}}" class="authentication-image" alt="">
                                    </div>
                                    <h6 class="fw-semibold">Blood Donation Drive</h6>
                                    <p class="fw-normal fs-14 op-7"> At Kenya Red Cross, we believe in the power of compassion and community support to make a difference in people's lives. Our Blood Donation Drives aim to address the critical need for blood in hospitals and medical facilities across the country. </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="text-fixed-white text-center p-5 d-flex align-items-center justify-content-center">
                                <div>
                                    <div class="mb-5">
                                        <img src="{{asset('assets/images/authentication/krc_slider_2.png')}}" class="authentication-image" alt="">
                                    </div>
                                    <h6 class="fw-semibold">Clean Water Projects</h6>
                                    <p class="fw-normal fs-14 op-7"> Kenya Red Cross is committed to quenching the thirst of communities in need and nurturing lives through our Clean Water Projects. </p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="text-fixed-white text-center p-5 d-flex align-items-center justify-content-center">
                                <div>
                                    <div class="mb-5">
                                        <img src="{{asset('assets/images/authentication/krc_slider_3.png')}}" class="authentication-image" alt="">
                                    </div>
                                    <h6 class="fw-semibold">Kenya Red Cross' Rapid Response</h6>
                                    <p class="fw-normal fs-14 op-7"> Despite the daunting challenges, Kenya Red Cross swiftly activated its emergency response team, comprising highly trained personnel in search and rescue operations.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>

</div>


<!-- Custom-Switcher JS -->
<script src="../assets/js/custom-switcher.min.js"></script>

<!-- Bootstrap JS -->
<script src="../assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Swiper JS -->
<script src="../assets/libs/swiper/swiper-bundle.min.js"></script>

<!-- Internal Sing-Up JS -->
<script src="../assets/js/authentication.js"></script>

<!-- Show Password JS -->
<script src="../assets/js/show-password.js"></script>

</body>

</html>
