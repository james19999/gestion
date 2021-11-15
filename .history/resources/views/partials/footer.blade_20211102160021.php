<footer id="footer">

    <div class="footer2">
        <div class="container">
            <div class="row">

                <div class="col-md-6 panel">
                    <div class="panel-body">
                        <p class="simplenav">
                            <a href="index.html">Home</a> |
                            <a href="about.html">About</a> |
                            <a href="services.html">Services</a> |
                            <a href="price.html">Price</a> |
                            <a href="projects.html">Projects</a> |
                            <a href="contact.html">Contact</a>
                        </p>
                    </div>
                </div>

                <div class="col-md-6 panel">
                    <div class="panel-body">
                        <p class="text-right">
                            Copyright &copy; 2015. Template by <a href="http://webthemez.com/" rel="develop">WebThemez.com</a>
                        </p>
                    </div>
                </div>

            </div>
            <!-- /row of panels -->
        </div>
    </div>
</footer>

<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="assets/js/modernizr-latest.js"></script>
<script type='text/javascript' src='{{ asset('assets/js/jquery.min.js') }}'></script>
<script type='text/javascript' src='{{ asset('assets/js/fancybox/jquery.fancybox.pack.js') }}'></script>

<script type='text/javascript' src='assets/js/jquery.mobile.customized.min.js'></script>
<script type='text/javascript' src='assets/js/jquery.easing.1.3.js'></script>
<script type='text/javascript' src='assets/js/camera.min.js'></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/custom.js"></script>
<script>
    jQuery(function(){

        jQuery('#camera_wrap_4').camera({
            height: '750',
            loader: 'bar',
            pagination: false,
            thumbnails: false,
            hover: false,
            opacityOnGrid: false,
            imagePath: 'assets/images/'
        });

    });
</script>
