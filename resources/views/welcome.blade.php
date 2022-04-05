@extends('layouts.app')
@section("title")
 it
@endsection
@section("content")

<div class="undermenuarea">
    <div class="boxedshadow">
    </div>
    <!-- SLIDER AREA
    ================================================== -->
    <div id="da-slider" class="da-slider">
        <!--Slide 1-->
        <div class="da-slide">
            <h2> T|I Introduction </h2>
            <p>
                Online websites that incorporate conversation systems have become an increasingly prominent means of communication in many ends point applications such as news articles, online stores, and social media platforms.            </p>
            <a href="#" class="da-link" style="width:202px;">Read More</a>
            <div class="da-img">
                <img src="/front/images/001.jpg" alt="">
            </div>
        </div>
        <!--Slide 2-->
        <div class="da-slide">
            <h2>Problem Overview</h2>
            <p>
                Current conversation systems, such as comment sections in news article websites and online retailers' stores, their customers may encounter various toxic comments. 
            </p>
            <a href="#" class="da-link" style="width:192px;">Read More</a>
            <div class="da-img">
                <img src="/front/images/0020.jpg" alt="">
            </div>
        </div>
    
        <nav class="da-arrows">
        <span class="da-arrows-prev"></span>
        <span class="da-arrows-next"></span>
        </nav>
    </div>
</div>
<!-- UNDER SLIDER - BLACK AREA
================================================== -->
<div class="undersliderblack">
    <div class="grid">
        <div class="row space-bot">
            <div class="c12">
                <!--Box 1-->
                <div class="c4 introbox introboxfirst">
                    <div class="introboxinner">
                        <span class="homeicone">
                        <i class="icon-bolt"></i>
                        </span> 
                    <p> Registration in website</p>
                    <p> Upload Files & Overall Toxicity inspection</p>
                    

                    </div>
                </div>
                <!--Box 2-->
                <div class="c4 introbox introboxmiddle">
                    <div class="introboxinner">
                        <span class="homeicone">
                        <i class="icon-cog"></i>
                        </span> 
                        <p> Interpretation of the toxicity level</p>
                        <p> Comparison of the toxicity & Feedback</p>
                    </div>
                </div>
                <!--Box 3-->
                <div class="c4 introbox introboxlast">
                    <div class="introboxinner">
                        <span class="homeicone">
                        <i class="icon-lightbulb"></i>
                        </span>
                        <p> Reclassification of the comments </p>
                        <p> Comparison between the reclassification  </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="shadowunderslider">
</div>
<!-- START content area
================================================== -->
<div class="grid">
    <div class="row space-bot">
        <!--INTRO-->
        <div class="c12">
            <div class="royalcontent">
                <h1 class="royalheader">WELCOME TO T|I Toxicity Inspector System</h1>
                <h1 class="title" style="text-transform:none;">Our web applications will enable the users to evaluate the overall toxicity result and provide feedback on the results acquired.
                    .</h1>
            </div>
        </div>
        <!--Box 1-->
        <div class="c4">
            <h2 class="title hometitlebg"><i class="icon-qrcode smallrightmargin"></i> User Registration</h2>
            <div class="noshadowbox">
                <h5>Register</h5>
                <p>
                    Identify their task and register: The website will enable the users to securely log in and upload the comments that need to be inspected for their toxicity level.
                </p>
                <p class="bottomlink">
                    <a href="#" class="neutralbutton"><i class="icon-link"></i></a>
                </p>
            </div>
        </div>
        <!--Box 2-->
        <div class="c4">
            <h2 class="title hometitlebg"><i class="icon-cog smallrightmargin"></i> Data Distribution</h2>
            <div class="noshadowbox">
                <h5>Data Distribution</h5>
                <p>
                    Inspect the data distribution: in this function, the user will be able to see the topic molding for the comments and check the frequency of the words..
                </p>
                <p class="bottomlink">
                    <a href="#" class="neutralbutton"><i class="icon-link"></i></a>
                </p>
            </div>
        </div>
        <!--Box 3-->
        <div class="c4">
            <h2 class="title hometitlebg"><i class="icon-user" style="margin-right:10px;"></i> Toxicity inspection</h2>
            <div class="noshadowbox">
                <h5>Toxicity inspection</h5>
                <p>
                    Overall Toxicity inspection of comments set: in this function the user will be able to check the overall health (toxicity) of the comments collection..
                </p>
                <p class="bottomlink">
                    <a href="#" class="neutralbutton"><i class="icon-link"></i></a>
                </p>
            </div>
        </div>
    </div>
    <!-- SHOWCASE
    ================================================== -->
    <div class="row space-top">
        <div class="c12 space-top">
            <h1 class="maintitle ">
            <span>SHOWCASE</span>
            </h1>
        </div>
    </div>
    <div class="row space-bot">
        <div class="c12">
            <div class="list_carousel">
                <div class="carousel_nav">
                    <a class="prev" id="car_prev" href="#"><span>prev</span></a>
                    <a class="next" id="car_next" href="#"><span>next</span></a>
                </div>
                <div class="clearfix">
                </div>
                <ul id="recent-projects">
                    <!--featured-projects 1-->
                    <li>
                    <div class="featured-projects">
                        <div class="featured-projects-image">
                            <a href="#"><img src="/front/images/Bslider/1.jpg" class="imgOpa" alt=""></a>
                        </div>
                        <div class="featured-projects-content">
                            <h1><a href="#">  T|I Toxicity Inspector </a></h1>
                            
                        </div>
                    </div>
                    </li>
                    <!--featured-projects 2-->
                    <li>
                    <div class="featured-projects">
                        <div class="featured-projects-image">
                            <a href="#"><img src="/front/images/Bslider/8.jpg" class="imgOpa" alt=""></a>
                        </div>
                        <div class="featured-projects-content">
                            <h1><a href="#">T|I Toxicity Inspector </a></h1>
                            
                        </div>
                    </div>
                    </li>
                    <!--featured-projects 3-->
                    <li>
                    <div class="featured-projects">
                        <div class="featured-projects-image">
                            <a href="#"><img src="/front/images/Bslider/7.jpg" class="imgOpa" alt=""></a>
                        </div>
                        <div class="featured-projects-content">
                            <h1><a href="#">T|I Toxicity Inspector </a></h1>
                            
                        </div>
                    </div>
                    </li>
                    <!--featured-projects 4-->
                    <li>
                    <div class="featured-projects">
                        <div class="featured-projects-image">
                            <a href="#"><img src="/front/images/Bslider/6.jpg" class="imgOpa" alt=""></a>
                        </div>
                        <div class="featured-projects-content">
                            <h1><a href="#">T|I Toxicity Inspector </a></h1>
                            
                        </div>
                    </div>
                    </li>
                    <!--featured-projects 5-->
                    <li>
                    <div class="featured-projects">
                        <div class="featured-projects-image">
                            <a href="#"><img src="/front/images/Bslider/5.jpg" class="imgOpa" alt=""></a>
                        </div>
                        <div class="featured-projects-content">
                            <h1><a href="#">T|I Toxicity Inspector </a></h1>
                            
                        </div>
                    </div>
                    </li>
                    <!--featured-projects 6-->
                    <li>
                    <div class="featured-projects">
                        <div class="featured-projects-image">
                            <a href="#"><img src="/front/images/Bslider/4.jpg" class="imgOpa" alt=""></a>
                        </div>
                        <div class="featured-projects-content">
                            <h1><a href="#">T|I Toxicity Inspector </a></h1>
                            
                        </div>
                    </div>
                    </li>
                    <!--featured-projects 7-->
                    <li>
                    <div class="featured-projects">
                        <div class="featured-projects-image">
                            <a href="#"><img src="/front/images/Bslider/3.jpg" class="imgOpa" alt=""></a>
                        </div>
                        <div class="featured-projects-content">
                            <h1><a href="#">T|I Toxicity Inspector </a></h1>
                        
                        </div>
                    </div>
                    </li>
                    <!--featured-projects 8-->
                    <li>
                    <div class="featured-projects">
                        <div class="featured-projects-image">
                            <a href="#"><img src="/front/images/Bslider/2.jpg" class="imgOpa" alt=""></a>
                        </div>
                        <div class="featured-projects-content">
                            <h1><a href="#">T|I Toxicity Inspector </a></h1>
                            
                        </div>
                    </div>
                    </li>
                </ul>
                <div class="clearfix">
                </div>
            </div>
        </div>
    </div>
    <!-- CALL TO ACTION 
    ================================================== -->
    
</div><!-- end grid -->
@endsection

