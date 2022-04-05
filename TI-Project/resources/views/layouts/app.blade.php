<!DOCTYPE HTML>
<html>
<head><meta name="viewport" content="width=device-width"/>
<title>T|I Toxicity Inspector System</title>
<!-- STYLES & JQUERY 
================================================== -->
<link rel="stylesheet" type="text/css" href="/front/css/style.css"/>
<link rel="stylesheet" type="text/css" href="/front/css/icons.css"/>
<link rel="stylesheet" type="text/css" href="/front/css/slider.css"/>
<link rel="stylesheet" type="text/css" href="/front/css/skinbrown.css"/><!-- change skin color -->
<link rel="stylesheet" type="text/css" href="/front/css/responsive.css"/>
<script src="/front/js/jquery-1.9.0.min.js"></script><!-- the rest of the scripts at the bottom of the document -->
</head>
<body>
<div class="boxedtheme">
<!-- TOP LOGO & MENU
================================================== -->
<div class="grid">
    <div class="row space-bot">
        <!--Logo-->
        <div class="c4">
            <a href="/">
            <img src="/front/images/logo.png" class="logo" alt="">
            </a>
        </div>
        <!--Menu-->
        <div class="c8">
            <nav id="topNav">
            <ul id="responsivemenu">
                <li class="active"><a href="/"><i class="icon-home homeicon"></i><span class="showmobile">Home</span></a></li>
                <li><a href="#">Toxicity</a>
                <ul style="display: none;">
                    <li><a href="/upload-file">Upload Files</a></li>
                </ul>
                </li>
                <li><a href="/result.html">Result</a>
                
                </li>
                <li><a href="/about">About</a>
                
                </li>      

                 @if(!Auth::check())    
                <li class="last"><a href="/login">Login</a></li>

                 <li class="last"><a href="/register">Sign Up</a></li>
                 @else

                  <li class="last"><a href="/logout">logout</a></li>

                 @endif
                
            </ul>
            </nav>
        </div>
    </div>
</div>

@yield('content')

<!-- FOOTER
================================================== -->
<div id="wrapfooter">
    <div class="grid">
        <div class="row" id="footer">
            <!-- to top button  -->
            <p class="back-top floatright">
                <a href="#top"><span></span></a>
            </p>
            <!-- 1st column -->
            <div class="c3">
                <img src="/front/images/logo-footer.png" style="padding-top: 70px;" alt="">
            </div>
            <!-- 2nd column -->
            <div class="c3">
                <h2 class="title"><i class="icon-twitter"></i> Follow us</h2>
                <hr class="footerstress">
                <div id="ticker" class="query">
                </div>
            </div>
            <!-- 3rd column -->
            <div class="c3">
                <h2 class="title"><i class="icon-envelope-alt"></i> Contact</h2>
                <hr class="footerstress">
                <dl>
                    <dt>King Suad University- Teamwork </dt>
                    <dd><span>Telephone:</span>+966550000000</dd>
                    <dd>E-mail: <a href="#">RJL@gmail.com</a></dd>
                </dl>
                <ul class="social-links" style="margin-top:15px;">
                    <li class="twitter-link smallrightmargin">
                    <a href="#" class="twitter has-tip" target="_blank" title="Follow Us on Twitter">Twitter</a>
                    </li>
                    <li class="facebook-link smallrightmargin">
                    <a href="#" class="facebook has-tip" target="_blank" title="Join us on Facebook">Facebook</a>
                    </li>
                    <li class="google-link smallrightmargin">
                    <a href="#" class="google has-tip" title="Google +" target="_blank">Google</a>
                    </li>
                    <li class="linkedin-link smallrightmargin">
                    <a href="#" class="linkedin has-tip" title="Linkedin" target="_blank">Linkedin</a>
                    </li>
                    <li class="pinterest-link smallrightmargin">
                    <a href="#" class="pinterest has-tip" title="Pinterest" target="_blank">Pinterest</a>
                    </li>
                </ul>
            </div>
            <!-- 4th column -->
            <div class="c3">
                <h2 class="title"><i class="icon-link"></i> Links</h2>
                <hr class="footerstress">
                <ul>
                    <li><a href="index.html">Our Project</a></li>
                    
                </ul>
            </div>
            <!-- end 4th column -->
        </div>
    </div>
</div>
<!-- copyright area -->
<div class="copyright">
    <div class="grid">
        <div class="row">
            <div class="c6">
                T|I &copy; 2022. All Rights Reserved.
            </div>
            <div class="c6">
                <span class="right">
                    Reem -  Jawaher -   Lamiaa  </span>
            </div>
        </div>
    </div>
</div>

</div>
<!-- JAVASCRIPTS
================================================== -->
<!-- all -->
<script src="/front/js/modernizr-latest.js"></script>

<!-- menu & scroll to top -->
<script src="/front/js/common.js"></script>

<!-- slider -->
<script src="/front/js/jquery.cslider.js"></script>

<!-- cycle -->
<script src="/front/js/jquery.cycle.js"></script>

<!-- carousel items -->
<script src="/front/js/jquery.carouFredSel-6.0.3-packed.js"></script>

<!-- twitter -->
<script src="/front/js/jquery.tweet.js"></script>

<!-- Call Showcase - change 4 from min:4 and max:4 to the number of items you want visible -->
<script type="text/javascript">
$(window).load(function(){          
            $('#recent-projects').carouFredSel({
                responsive: true,
                width: '100%',
                auto: true,
                circular    : true,
                infinite    : false,
                prev : {
                    button      : "#car_prev",
                    key         : "left",
                        },
                next : {
                    button      : "#car_next",
                    key         : "right",
                            },
                swipe: {
                    onMouse: true,
                    onTouch: true
                    },
                scroll : 2000,
                items: {
                    visible: {
                        min: 4,
                        max: 4
                    }
                }
            });
        }); 
</script>

<!-- Call opacity on hover images from carousel-->
<script type="text/javascript">
$(document).ready(function(){
    $("img.imgOpa").hover(function() {
      $(this).stop().animate({opacity: "0.6"}, 'slow');
    },
    function() {
      $(this).stop().animate({opacity: "1.0"}, 'slow');
    });
  });
</script>
</body>
</html>
