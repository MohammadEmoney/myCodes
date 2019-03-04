<!DOCTYPE html>
<html lang="en">

<head>
    @include('front.incs.head')
</head>

<body>
<div id="wrapper">
    <!-- toggle top area -->
    <div class="hidden-top">
        <div class="hidden-top-inner container">
            <div class="row">
                <div class="span12">
                    <ul>
                        <li><strong>We are available for any custom works this month</strong></li>
                        <li>Main office: Springville center X264, Park Ave S.01</li>
                        <li>Call us <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- end toggle top area -->
    <!-- start header -->
    @include('front.incs.header')
    <!-- end header -->
    <section id="featured">
        <!-- start slider -->
        <!-- Slider -->
    @include('front.incs.slider')
        <!-- end slider -->
    </section>
    <section class="callaction">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="big-cta">
                        <div class="cta-text">
                            <h3>We've created more than <span class="highlight"><strong>5000 websites</strong></span> this year!</h3>
                        </div>
                        <div class="cta floatright">
                            <a class="btn btn-large btn-theme btn-rounded" href="#">Request a quote</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @yield('content')
    <section id="bottom">
        <div class="container">
            <div class="row">
                <div class="span12">
                    <div class="aligncenter">
                        <div id="twitter-wrapper">
                            <div id="twitter">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('front.incs.footer')
</div>
<a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
<!-- javascript
  ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="/front/js/jquery.js"></script>
<script src="/front/js/jquery.easing.1.3.js"></script>
<script src="/front/js/bootstrap.js"></script>
<script src="/front/js/jcarousel/jquery.jcarousel.min.js"></script>
<script src="/front/js/jquery.fancybox.pack.js"></script>
<script src="/front/js/jquery.fancybox-media.js"></script>
<script src="/front/js/google-code-prettify/prettify.js"></script>
<script src="/front/js/portfolio/jquery.quicksand.js"></script>
<script src="/front/js/portfolio/setting.js"></script>
<script src="/front/js/jquery.flexslider.js"></script>
<script src="/front/js/jquery.nivo.slider.js"></script>
<script src="/front/js/modernizr.custom.js"></script>
<script src="/front/js/jquery.ba-cond.min.js"></script>
<script src="/front/js/jquery.slitslider.js"></script>
<script src="/front/js/animate.js"></script>

<!-- Template Custom JavaScript File -->
<script src="/front/js/custom.js"></script>

</body>
</html>
