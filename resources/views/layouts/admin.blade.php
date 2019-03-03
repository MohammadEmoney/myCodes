<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.incs.head')
</head>

<body>
<!-- container section start -->
<section id="container" class="">


    @include('layouts.incs.header')
    <!--header end-->

    <!--sidebar start-->
    @include('layouts.incs.sidebar')
    <!--sidebar end-->

    <!--main content start-->
    @yield('content')
    <!--main content end-->
</section>
<!-- container section start -->

<!-- javascripts -->
@include('layouts.incs.footer')
<script>
    //knob
    $(function() {
        $(".knob").knob({
            'draw': function() {
                $(this.i).val(this.cv + '%')
            }
        })
    });

    //carousel
    $(document).ready(function() {
        $("#owl-slider").owlCarousel({
            navigation: true,
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true

        });
    });

    //custom select box

    $(function() {
        $('select.styled').customSelect();
    });

    /* ---------- Map ---------- */
    $(function() {
        $('#map').vectorMap({
            map: 'world_mill_en',
            series: {
                regions: [{
                    values: gdpData,
                    scale: ['#000', '#000'],
                    normalizeFunction: 'polynomial'
                }]
            },
            backgroundColor: '#eef3f7',
            onLabelShow: function(e, el, code) {
                el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
            }
        });
    });
</script>
@yield('script')
</body>

</html>
