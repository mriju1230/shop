<!DOCTYPE html>
<html lang="en">

  
<!-- Mirrored from themes.hody.co/html/comet/shop-3col.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jan 2017 09:50:52 GMT -->
<head>
    <title>Comet | Creative Multi-Purpose HTML Template</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="{{ asset('css/bundle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Halant:300,400" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-46276885-13', 'auto');
      ga('send', 'pageview');
    </script>
  </head>

  <body>
    @include('layouts.components.loader')

    @include('layouts.components.menu')

    @include('layouts.components.hero')
    

    @section('main')
    @show


    <!-- Footer-->
    <footer id="footer-widgets">
      <div class="container">
        <div class="go-top">
          <a href="#top">
            <i class="ti-arrow-up"></i>
          </a>
        </div>
        <div class="row">
          <div class="col-md-6 ov-h">
            <div class="row">
              <div class="col-sm-4">
                <div class="widget">
                  <h6 class="upper">About Comet</h6>
                  <p>
                    <span>Fourth Floor</span>
                    <span>New York, NY 10011</span>
                    <span>hello@comet.com</span>
                  </p><a href="#" class="btn btn-color-out btn-sm">Hire Us!</a>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="widget">
                  <h6 class="upper">Culture</h6>
                  <ul class="list-unstyled">
                    <li>
                      <a href="#">Team</a>
                    </li>
                    <li>
                      <a href="#">Process</a>
                    </li>
                    <li>
                      <a href="#">Story</a>
                    </li>
                    <li>
                      <a href="#">Careers</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="widget">
                  <h6 class="upper">Case Studies</h6>
                  <ul class="list-unstyled">
                    <li>
                      <a href="portfolio-single-1.html">Neleman Cava</a>
                    </li>
                    <li>
                      <a href="portfolio-single-2.html">Sweet Lane</a>
                    </li>
                    <li>
                      <a href="portfolio-single-3.html">Jeff Burger</a>
                    </li>
                    <li>
                      <a href="portfolio-single-1.html">Juice Meds</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-md-offset-2">
            <div class="row">
              <div class="col-md-12">
                <div class="widget">
                  <h6 class="upper">Stay in touch</h6>
                  <p>Sign Up to get the latest updates.</p>
                  <div class="footer-newsletter">
                    <form data-mailchimp="true" class="inline-form">
                      <div class="input-group">
                        <input type="email" name="email" placeholder="Your Email" class="form-control"><span class="input-group-btn"><button type="submit" data-loading-text="Loading..." class="btn btn-color">Subscribe</button></span>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end of row-->
      </div>
      <!-- end of container-->
    </footer>
    <footer id="footer">
      <div class="container">
        <div class="footer-wrap">
          <div class="row">
            <div class="col-md-4">
              <div class="copy-text">
                <p><i class="icon-heart red mr-15"></i>© 2015 Comet Agency.</p>
              </div>
            </div>
            <div class="col-md-4">
              <ul class="list-inline">
                <li>
                  <a href="#">About</a>
                </li>
                <li>
                  <a href="#">Services</a>
                </li>
                <li>
                  <a href="#">Blog</a>
                </li>
                <li>
                  <a href="#">Contact</a>
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <div class="footer-social">
                <ul>
                  <li>
                    <a target="_blank" href="#"><i class="ti-facebook"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="#"><i class="ti-twitter-alt"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="#"><i class="ti-linkedin"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="#"><i class="ti-instagram"></i></a>
                  </li>
                  <li>
                    <a target="_blank" href="#"><i class="ti-dribbble"></i></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- end of row-->
        </div>
      </div>
      <!-- end of container-->
    </footer>
    <!-- end of footer-->
    <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/bundle.js') }}"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
  </body>


<!-- Mirrored from themes.hody.co/html/comet/shop-3col.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 11 Jan 2017 09:51:09 GMT -->
</html>