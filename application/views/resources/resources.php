<style>

   .info-box {
       padding: 60px 0 61px 0;
      // background: #2e6da4;
      //  background: #fff;
   }
   .info-box .wrapper {
       position: relative;
       padding: 0 0 6px 0;
       height: 300px;
   }
   .info-box .wrapper:before {
       content: "";
       display: block;
       width: 94px;
       height: 96%;
       position: absolute;
       z-index: 0;
       background:#023765;
       left: -10px;
       top: 10px;

   }
   .info-box .wrapper:after {
       content: "";
       display: block;
       width: 94px;
       height: 100%;
       position: absolute;
       z-index: 0;
       background: #023765;
       right: -6px;

   }
   .info-box article {
       text-align: center;
       padding: 14px 40px 34px 40px;
       box-sizing: border-box;
       position: relative;
       height: 290px;
       display: flex;
       justify-content: center;
       align-items: center;
   }
   .info-box article h2,
   .info-box article p {
       z-index: 3;
       position: relative;
   }
   .info-box article h2 {
       font-size: 1.5vw;
       line-height: 30px;
       font-weight: 700;
   }
   .info-box article h2:before {
       font-family: 'FontAwesome';
       font-size: 56px;
       -webkit-border-radius: 100% 100% 100% 100%;
       -moz-border-radius: 100% 100% 100% 100%;
       border-radius: 100% 100% 100% 100%;
       display: inline-block;
       padding: 10px;
       width: 90px;
       height: 90px;
       line-height: 67px;
       color: #ffffff;
       position: absolute;
       top: -100px;
       left: 40%;
       margin-left: -47px;
   }
   .info-box article p {
       color: #8d7a65;
       margin-bottom: 1px;
       font-family: 'Tahoma', 'Arial', 'sans-serif';
   }
   .info-box article .shadow {
       background: url(images/infoshadow.png) 0 100% no-repeat;
       position: absolute;
       width: 100%;
       height: 100%;
       bottom: -9px;
       left: 0;
   }
   #art1 h2:before {
       content: url(/fiorano_ci/assets/images/resources/2-mins.png);
       /*width:100px;
       padding:10px;*/
       //background: rgba(120, 138, 65, 0.8);
   }
   #art2 h2:before {
      // content: "\f040";
       content: url(/fiorano_ci/assets/images/resources/Whitepaper.png);
       //background: rgba(227, 169, 0, 0.8);
   }
   #art3 h2:before {
       content: url(/fiorano_ci/assets/images/resources/Datasheets.png);

   }
   #art4 h2:before {
       content: url(/fiorano_ci/assets/images/resources/demos-videos.png);
   }
   #art5 h2:before {
       content: url(/fiorano_ci/assets/images/resources/Case-Studies.png);

   }
   #art6 h2:before {
       content: url(/fiorano_ci/assets/images/resources/Product-Documentation.png);

   }
   #art7 h2:before {
       content: url(/fiorano_ci/assets/images/resources/Analyst.png);

   }
   #art8 h2:before {
        content: url(/fiorano_ci/assets/images/resources/Developer-Zone.png);

    }

   .info-box article:before {
       content: "";
       display: block;
       position: absolute;
       background: #efe9dc;
       width: 50%;
       height: 100%;
       top: 0;
       left: 0;
       z-index: 2;
       -webkit-transition: all 300ms ease-in-out;
       -moz-transition: all 300ms ease-in-out;
       -ms-transition: all 300ms ease-in-out;
       -o-transition: all 300ms ease-in-out;
       transition: all 300ms ease-in-out;
       -webkit-transition: all 300ms ease-in-out 300ms ease-in-out;
       -moz-transition: all 300ms ease-in-out 300ms ease-in-out;
       -o-transition: all 300ms ease-in-out 300ms ease-in-out;
       transition: all 300ms ease-in-out 300ms ease-in-out;
       -webkit-transform: skew(0, 6deg);
       -moz-transform: skew(0, 6deg);
       -o-transform: skew(0, 6deg);
   }
   .info-box article:after {
       content: "";
       display: block;
       position: absolute;
       background: #fffcf5;
       width: 50%;
       height: 100%;
       top: 0;
       right: 0;
       z-index: 2;
       -webkit-transition: all 300ms ease-in-out;
       -moz-transition: all 300ms ease-in-out;
       -ms-transition: all 300ms ease-in-out;
       -o-transition: all 300ms ease-in-out;
       transition: all 300ms ease-in-out;
       -webkit-transition: all 300ms ease-in-out 300ms ease-in-out;
       -moz-transition: all 300ms ease-in-out 300ms ease-in-out;
       -o-transition: all 300ms ease-in-out 300ms ease-in-out;
       transition: all 300ms ease-in-out 300ms ease-in-out;
       -webkit-transform: skew(0, -6deg);
       -moz-transform: skew(0, -6deg);
       -o-transform: skew(0, -6deg);
   }
   .info-box article:hover a {
       top: 95%;
   }
   .info-box article:hover:after,
   .info-box article:hover:before {
      // background: #fffefb;
       background: #9cb2fb;
       -webkit-transform: skew(0, 0);
       -moz-transform: skew(0, 0);
       -o-transform: skew(0, 0);
   }
   .info-box article:hover .button-figure {
       top: 94%;
   }
    @media(max-width:767px) {

       .info-box article h2 {
           font-size: 2.5vw;
       }
     }
   @media(max-width:430px) {
       .info-box article{
           width:100%;
           height:50%;
           margin-bottom:20px;
       }
       .info-box .wrapper:before {
           height:240%;
       }
       .info-box .wrapper:after {
           height:250%;
       }
       .info-box{
           padding-left: 50px;
           padding-right: 50px;
       }
       .info-box article h2 {
           font-size: 4vw;
       }
   }
</style>

<section id="intro" class="intro-sectionresources">
    <div class="container">
        <div class="col-sm-12 resourceBanner ">
            <div class="productHead col-sm-8">
                <h1 class="productHeadTitle">Fiorano Resources</h1>
                <div class="col-sm-8 hidden-xs nopadding">
                    <p class="productHeadDesc hidden-xs" >
                        Learn more about our products with a resource library covering 2-minute explainers, datasheets, demos, case studies and more.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <a href="#"> &nbsp;</a>
    <div class="bs-example pull-right">
        <ul class="breadcrumb">
            <li> <a href="<?php echo site_url(''); ?>">Home</a></li>
            <li> <a href="<?php echo site_url('resources'); ?>">Resources</a></li>

        </ul>
    </div>
</section>

<section class="">
    <div class="container">
        <div class="section-header">
            <h1 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Fiorano Resources</h1>

        </div>
    </div>
<div class="info-box">
    <div class="container">

        <div class="wrapper col-sm-12">
            <a href="<?php echo site_url('resources/downloads'); ?>">
                <article class="ib-col-3 col-sm-2-half" id="art6">
                    <h2>Product Downloads</h2>
                    <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->

                    <span class="shadow"></span>
                </article>
            </a>
            <a href="<?php echo site_url('resources/datasheets'); ?>">
                <article class="ib-col-3 col-sm-2-half" id="art3">
                    <h2>Datasheets</h2>
                    <!--  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
                    <!-- <a href="http://alethemes.com/milagro/events/" class="button-figure">
                         See more					<span></span>
                     </a>-->
                    <span class="shadow"></span>
                </article>
            </a>
            <a href="<?php echo site_url('resources/documentation'); ?>">
                <article class="ib-col-3 col-sm-2-half" id="art6">
                    <h2>Product Documentation</h2>
                    <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->

                    <span class="shadow"></span>
                </article>
            </a>

            <a href="<?php echo site_url('resources/online_tutorials'); ?>">
            <article class="ib-col-3 col-sm-2-half" id="art4">
                <h2>Demos, Videos & Tutorials </h2>
                <span class="shadow"></span>
            </article>
            </a>
            <a href="<?php echo site_url('company/prod_review'); ?>">
                <article class="ib-col-3 col-sm-3 col-sm-2-half" id="art7">
                    <h2>Analyst Report & Product Reviews</h2>
                    <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->

                    <span class="shadow"></span>
                </article>
            </a>
        </div>
    </div>
</div>
</section>
<section class="even-section">
<div class="info-box art-New">
    <div class="container padding-bottom-50 padding-top-50">
        <div class="wrapper col-sm-12">


            <a href="<?php echo site_url('resources/twominute_explainers'); ?>">
                <article class="ib-col-3 col-sm-2-half " id="art1">
                    <h2>2-Minute Explainers</h2>
                    <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->
                    <!-- <a href="http://alethemes.com/milagro/course/" class="button-figure">
                         See more					<span></span>
                     </a>-->
                    <span class="shadow"></span>
                </article>
            </a>
            <a href="<?php echo site_url('resources/whitepapers'); ?>">
                <article class="ib-col-3 col-sm-2-half" id="art2">
                    <h2>Whitepapers</h2>
                    <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->

                    <span class="shadow"></span>
                </article>
            </a>

            <a href="<?php echo site_url('resources/casestudies'); ?>">
            <article class="ib-col-3 col-sm-2-half " id="art5">
                <h2>Case studies </h2>
              <!--  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->

                <span class="shadow"></span>
            </article>
            </a>
            <a href="<?php echo __ROOT__; ?>/componentgallery/comp_index.php">
            <article class="ib-col-3 col-sm-2-half" id="art6">
                <h2>Component Gallery</h2>
                <!--<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->

                <span class="shadow"></span>
            </article>
            </a>

            <a href="<?php echo __ROOT__ ?>/devzone/support.php">
            <article class="ib-col-3 col-sm-2-half" id="art8">
                <h2>Technical Support </h2>
               <!-- <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>-->

                <span class="shadow"></span>
            </article>
            </a>
        </div>
    </div>
</div>
</section>
<?php /*

<section class="offer-section offer-section-three section service-page-three-offer" id="resource">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">2-Minute Explainers</h2>
            <!--<p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>-->
        </div>

        <div class="row  padding-top-50 padding-bottom-50" id="vid-thumb">
            <ul class="col-sm-12">
                <li class=" col-sm-4">
                    <ul class="demo-2 effect">
                        <li>
                            <h2 class="zero">Fiorano Cloud Integration & SOA </h2>
                            <p class="zero">Click here to Know More.</p>
                        </li>

                        <li><img class="top" src="<?php echo base_url('assets/images/resources/image1.jpg')?> " alt=""/></li>
                    </ul>


                </li>


                <li class=" col-sm-4">
                    <ul class="demo-2 effect">
                        <li>
                            <h2 class="zero">Fiorano ESB – Simplifying Integration</h2>
                            <p class="zero">Click here to Know More.</p>
                        </li>

                        <li><img class="top" src="<?php echo base_url('assets/images/resources/image1.jpg')?>" alt=""/></li>
                    </ul>


                </li>



                <li class=" col-sm-4">
                    <ul class="demo-2 effect">
                        <li>
                            <h2 class="zero">Fiorano ESB: Avoiding a Spaghetti Architecture</h2>
                            <p class="zero">Click here to Know More.</p>
                        </li>

                        <li><img class="top" src="<?php echo base_url('assets/images/resources/image1.jpg')?>" alt=""/></li>
                    </ul>

                </li>

            </ul>
        </div>
        <div class="col-sm-12 "> <button class="btn btn-submit pull-right"> Know More</button></div>
    </div>
</section>


<section class="offer-section offer-section-three section service-page-three-offer even-section" id="resource">
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Fiorano Integration Platform – Resources</h2>
            <!--<p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>-->
        </div>

        <div class="row">
            <div class="ofer-items">
                <div class="col-md-4 col-sm-6 col-sm-12">
                    <div class="single-offer-item row">
                        <h3>Integration Demos & Videos</h3>
                        <div class="offer-icon">
                            <div class="offer-icon-animate">
                                 <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-file-video-o fa-stack-1x fa-inverse"></i>
                    </span>
                            </div>
                        </div>
                        <div class="offer-details">
                            <!-- <p> <a href="" >Fiorano Integration Platform
                                      Simplifying Integration</a></p>-->

                            <h4> <a href="" >Database Synchronization</a></h4>
                            <p>Can synchronize distributed databases over the Fiorano ESB in less than 5 minutes without any programming</p>
                            <h4> <a href="" >HL7 Integration Flow</a></h4>
                            <p>How systems using HL7 protocol can easily be integrated using Fiorano</p>
                            <!--<p>  <a href="" >SAP Integration</a></p>
                            <p> <a href="" >Temenos T24 - Fiorano ESB Integration</a></p>-->
                            <p class="text-center align-center"><a href="" class="read-more ">Read all</a></p>

                        </div>

                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-sm-12">
                    <div class="single-offer-item row">
                        <h3>Whitepapers </h3>
                        <div class="offer-icon">
                            <div class="offer-icon-animate">
                                <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-file-word-o fa-stack-1x fa-inverse"></i>
                    </span>
                            </div>
                        </div>
                        <div class="offer-details ">

                            <h4><a href="" >REST-Based SOA </a></h4>
                            Efficient, Dynamic, Flexible SOA Implementations
                            <h4><a href="" >Message-Driven SOA</a></h4>
                            Getting rapid results with SOA
                            <br>
                            &nbsp;
                            <br>
                            <br>
                            <p class="text-center align-center"><a href="" class="read-more">Read all</a></p>


                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-sm-12">
                    <div class="single-offer-item row">
                        <h3>Casestudies</h3>
                        <div class="offer-icon">
                            <div class="offer-icon-animate">
                               <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                 <i class="fa fa-files-o fa-stack-1x fa-inverse"></i>
                                </span>
                            </div>
                        </div>
                        <div class="offer-details  ">

                            <h4> <a href="" >Gamma Dynacare </a></h4>
                            Fiorano Helps Gamma-Dynacare for Quick and Accurate Reporting of Medical Tests

                            <h4>  <a href="" >Zale Corporation </a></h4>
                            <p>   Zale Corporation, North America's leading specialty retailer in fine jewelry, watches and diamonds deploys Fiorano SOA</p>

                            <p class="text-center align-center"><a href="" class="read-more">Read all</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


*/?>

