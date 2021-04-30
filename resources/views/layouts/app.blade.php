<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="author" content="www.learn.mozisha.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <meta property="og:title" content="{{$data['sm_title']}}">
    <meta property="og:description" content="{{$data['sm_description']}}">
    <meta property="og:image" content="{{$data['sm_image']}}">
    <meta property="og:url" content="{{$data['sm_url']}}">

    <meta property="twitter:title" content="{{$data['sm_title']}}">
    <meta property="twitter:description" content="{{$data['sm_description']}}">
    <meta property="twitter:image" content="{{$data['sm_image']}}">
    <meta property="twitter:url" content="{{$data['sm_url']}}">

    <meta name="description" content="{{$data['description']}}" />
    <meta name="keywords" content="{{$data['keywords']}}" />
    <meta name="DC.title" content="{{$data['dc_title']}}" />
    <meta name="copyright" content="Copyright-learn.mozisha.com: {{date("Y", time())}}" />
    <meta name="robots" content="index,index" />
    <meta name="robots" content="index,follow" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="author" content="Mozisha international">




    <title>{{$data['title']}}</title>
    <link rel="icon" href="{{asset('assets/img/favicon.png')}}" type="image/x-icon">
    <!-- Custom CSS -->
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet">


    <!-- Custom Color Option -->
    <link href="{{asset('assets/css/colors.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/css/toastr.css')}}">
    <livewire:styles />
</head>

<body class="red-skin">

<!-- ============================================================== -->
<!-- Preloader - style you can find in spinners.css -->
<!-- ============================================================== -->
<div id="preloader"><div class="preloader"><span></span><span></span></div></div>


<!-- ============================================================== -->
<!-- Main wrapper - style you can find in pages.scss -->
<!-- ============================================================== -->
<div id="main-wrapper">

    <!-- ============================================================== -->
    <!-- Top header  -->
    <!-- ============================================================== -->
    <!-- Start Navigation -->
    @if(Route::currentRouteName() == 'about')
        <div class="header header-light head-shadow">
            <div class="container">
                <nav id="navigation" class="navigation navigation-landscape">
                    <div class="nav-header">
                        <a class="nav-brand" href="#">
                            <img src="{{asset('assets/img/logo-black.png')}}" class="logo" alt="" />
                        </a>
                        <div class="nav-toggle"></div>
                    </div>
                    @livewire('user-navigation')
                </nav>
            </div>
        </div>
    @else
        <div class="header dark-text header-transparent change-logo">
            <div class="container">
                <nav id="navigation" class="navigation navigation-landscape">
                    <div class="nav-header">
                        <a class="nav-brand static-logo" href="#"><img src="{{asset('assets/img/logo-black.png')}}" class="logo" alt="Mozisha logo" /></a>
                        <a class="nav-brand fixed-logo" href="#"><img src="{{asset('assets/img/logo-black.png')}}" class="logo" alt="Mozisha logo" /></a>
                        <div class="nav-toggle"></div>
                    </div>
                    @livewire('user-navigation')
                </nav>
            </div>
        </div>
    @endif

    <!-- End Navigation -->

    <div class="clearfix"></div>



        @yield('content')



    <!-- ============================ Footer Start ================================== -->
    <footer class="dark-footer skin-dark-footer">
        <div>
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-3">
                        <div class="footer-widget">
                            <img src="{{asset('assets/img/logo-light.png')}}" class="img-footer" alt="" />
                            <div class="footer-add">
                                <p>4967  Sardis Sta, Victoria 8007, Montreal.</p>
                                <p>+1 246-345-0695</p>
                                <p>info@learnup.com</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3">
                        <div class="footer-widget">
                            <h4 class="widget-title">Navigations</h4>
                            <ul class="footer-menu">
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="faq.html">FAQs Page</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="blog.html">Blog</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3">
                        <div class="footer-widget">
                            <h4 class="widget-title">New Categories</h4>
                            <ul class="footer-menu">
                                <li><a href="#">Designing</a></li>
                                <li><a href="#">Nusiness</a></li>
                                <li><a href="#">Software</a></li>
                                <li><a href="#">WordPress</a></li>
                                <li><a href="#">PHP</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-3">
                        <div class="footer-widget">
                            <h4 class="widget-title">Help & Support</h4>
                            <ul class="footer-menu">
                                <li><a href="#">Documentation</a></li>
                                <li><a href="#">Live Chat</a></li>
                                <li><a href="#">Mail Us</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Faqs</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-12">
                        <div class="footer-widget">
                            <h4 class="widget-title">Download Apps</h4>
                            <a href="#" class="other-store-link">
                                <div class="other-store-app">
                                    <div class="os-app-icon">
                                        <i class="lni-playstore theme-cl"></i>
                                    </div>
                                    <div class="os-app-caps">
                                        Google Play
                                        <span>Get It Now</span>
                                    </div>
                                </div>
                            </a>
                            <a href="#" class="other-store-link">
                                <div class="other-store-app">
                                    <div class="os-app-icon">
                                        <i class="lni-apple theme-cl"></i>
                                    </div>
                                    <div class="os-app-caps">
                                        App Store
                                        <span>Now it Available</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-lg-6 col-md-6">
                        <p class="mb-0">© 2021 Mozilearn. Powered By <a href="https://smart.mozisha.com/">Smart Developers</a>.</p>
                    </div>

                    <div class="col-lg-6 col-md-6 text-right">
                        <ul class="footer-bottom-social">
                            <li><a href="#"><i class="ti-facebook"></i></a></li>
                            <li><a href="#"><i class="ti-twitter"></i></a></li>
                            <li><a href="#"><i class="ti-instagram"></i></a></li>
                            <li><a href="#"><i class="ti-linkedin"></i></a></li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </footer>
    <!-- ============================ Footer End ================================== -->

    <!-- Log In Modal -->
    <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="registermodal" aria-hidden="true">
        @livewire('user-login')
    </div>
    <!-- End Modal -->

    <!-- Sign Up Modal -->
    <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="sign-up" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered login-pop-form" role="document">
            <div class="modal-content" id="sign-up">
                <span class="mod-close" data-dismiss="modal" aria-hidden="true"><i class="ti-close"></i></span>
                <div class="modal-body">
                    <h4 class="modal-header-title">Sign Up</h4>
                    <div class="login-form">
                        <form>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Full Name">
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Username">
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="*******">
                            </div>


                            <div class="form-group">
                                <button type="submit" class="btn btn-md full-width pop-login">Sign Up</button>
                            </div>

                        </form>
                    </div>
                    <div class="text-center">
                        <p class="mt-3"><i class="ti-user mr-1"></i>Already Have An Account? <a href="#" class="link">Go For LogIn</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Modal -->

    <a id="back2Top" class="top-scroll" title="Back to top" href="#"><i class="ti-arrow-up"></i></a>


</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- Laravel livewire script -->
<!-- ============================================================== -->
<livewire:scripts />
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/popper.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/select2.min.js')}}"></script>
<script src="{{asset('assets/js/slick.js')}}"></script>
<script src="{{asset('assets/js/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/counterup.min.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
<script  src="{{asset('assets/js/toastr.js')}}"></script>
<script>
    window.livewire.on('alert', param => {
        toastr[param['type']](param['message'], param['type']);
    });
</script>
<!-- ============================================================== -->
<!-- This page plugins -->
<!-- ============================================================== -->

</body>

</html>
