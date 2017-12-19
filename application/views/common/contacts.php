<link href="<?php echo base_url('assets/css/css-map/cssmap-continents.css'); ?>" rel="stylesheet" type="text/css" />


<script type="text/javascript" src="https://cssmapsplugin.com/5/jquery.cssmap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){

// CSSMap;
        $("#map-continents").CSSMap({
            "size": 1450,
            "tooltips": "floating-top-center",
            "responsive": "auto",
            "onClick":function(e){var a=e.children('a');
                var url = a.attr('href').split('#')[1]+".php";
                window.location ="http://www.fiorano.com//partners/"+url;
            }
        });
// END OF THE CSSMap;

    });
</script>

<section class="section-contact">
    <div class="container">
        <div class="col-xs-12 productBanner ">
            <div class="productHead col-sm-8">
                <h1 class="productHeadTitle">Contact Us</h1>

            </div>
            <div class=" col-sm-8 padding-top-50">
                <div class="col-sm-12 padding-bottom-20">

                    <button type="button" style="" href="#" data-toggle="modal" data-target="#contact_us" class="download-binaries btn-danger btn btn-large downHeadBtn"><i class="fa fa-large fa-user-o"></i> Sales Enquiries</button>
                </div>
                <div class="col-sm-12 padding-bottom-20">
                    <a href="<?php echo site_url('company/support')?>"  class="btn-success btn btn-large downHeadBtn"><i class="fa fa-large fa-user"></i> Technical Support</a>
                </div>

            </div>

        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="row">
            <div class="section-header">
                <h1 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"> USA </h1>
                <!--<p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>-->
            </div>
            <div class="col-xs-12 padding-bottom-50">
                <div class="col-sm-6 padding-top-20 col-xs-12">
                    <div class="col-md-3 hidden-sm hidden-xs"></div>
                    <div class="col-md-9 pull-right col-xs-12">
                        <p  class="">
                        <h4><strong >Fiorano Software, Inc.</strong></h4>
                        </p>
                        <p>
                            230 California Avenue, Suite 103<br/>

                            Palo Alto, CA 94306<br/>
                            USA <br/>
                            Tel: +1-650-326-1136<br/>
                            Fax: +1-646-607-5875
                        </p>
                        <p>1-800-663-3621 (Toll-Free within the USA)<br/>
                            <a href="#" data-toggle="modal" data-target="#contact_us">Email
                                us, we will contact you!</a> <br/>
                        </p>
                    </div>

                </div>
                <div class="col-sm-1 hidden-xs" style="border-left: #C0C0C0 2px solid;height:230px;">
                    &nbsp;
                </div>
                <div class="col-sm-5 col-xs-12 padding-top-20 padding-sideways-0">
                    <div class="col-xs-12 socialIcon padding-top-50 padding-top-hidxs padding-sideways-0">

                        <div class="col-sm-12 nopadding text-center">
                            <a href="https://www.facebook.com/Fiorano.Global/" title="Facebook" target="_blank" class="fa fa-facebook-square"></a>
                            <a href="https://twitter.com/FioranoGlobal" title="Twitter" target="_blank" class="fa fa-twitter-square"></a>
                            <a href="#" class="fa fa-google-plus-square"></a>
                            <a href="https://www.linkedin.com/company-beta/19105/?pathWildcard=19105" title="Linkedin" target="_blank" class="fa fa-linkedin-square"></a>
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

<section class="contact-offices" >
    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown animated white" style="visibility: visible; animation-name: fadeInDown;"> Worldwide Offices </h2>
            <!--<p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>-->
        </div>

    <div class="contact-bg" style="height:700px;">


    </div>
        <div class="backgrond-contact-bg  ">
            <div class="nopadding col-xs-12 padding-top-70" style="margin-top:-210px !important;">
                <div class="container">
                    <div class="col-xs-12 nopadding">



                    <div class="col-sm-4 col-xs-12 white text-center align-center padding-top-50">
                        <img src="<?php echo base_url('assets/images/company/UK_Icon.png')?>" class="text-center align-center"/>
                        <h3><b>UNITED
                                KINGDOM</b></h3>

                        <p class="white">
                            <b>Fiorano Software Ltd.</b><br/>
                            3000 Hillswood Drive,<br/>
                            Hillswood Business Park,<br/>
                            Chertsey, Surrey, KT16 0RS, <br/>
                            UK<br/>
                            Tel: +44 (0) 1932 895005<br/>
                            Fax: +44 (0) 1932 325413<br />
                            <br/>
                            <a class="white" href="#" data-toggle="modal" data-target="#contact_us">Email
                                us, we will contact you!</a></p>



                    </div>
                    <div class="col-sm-4 col-xs-12 white text-center align-center padding-top-50">
                        <img src="<?php echo base_url('assets/images/company/France_Icon.png')?>" class="text-center align-center"/>
                        <h3><b>FRANCE</b></h3>


                        <p class="white">
                            <b>Fiorano Software Ltd.</b><br/>
                            Immeuble Louis Vuitton,<br/>
                            101 avenue des Champs &Eacute;lys&eacute;es,<br/>
                            75008 Paris<br/>
                            FRANCE<br/>
                            Tel: +33 1 5652 9446<br/>
                            Fax: +33 1 5652 9292<br/>
                            <br/>
                            <a class="white" href="#" data-toggle="modal" data-target="#contact_us">Email
                                us, we will contact you!</a></p>




                    </div>
                    <div class="col-sm-4 col-xs-12 white text-center align-center padding-top-50">
                        <img src="<?php echo base_url('assets/images/company/Germany_Icon.png')?>" class="text-center align-center"/>
                        <h3><b>GERMANY</b></h3>


                        <p class="white">
                            <b>Fiorano Software Ltd.</b> <br/>
                            Bruehler Str. 21, <br/>
                            D-68782  <br/>Bruehl <br/>
                            GERMANY <br/>
                            Tel: +49 6202 702007 <br/>
                            <!--                                                Fax: +49 (0)211 97712519<br />-->
                            <br/><br/>
                            <a class="white" href="#" data-toggle="modal" data-target="#contact_us">Email
                                us, we will contact you!</a></p>




                    </div>
                    </div>
                    <div class="col-xs-12 nopadding ">
                        <div class="col-sm-4 col-xs-12 white text-center align-center padding-top-50">
                            <img src="<?php echo base_url('assets/images/company/UAE_Icon.png')?>" class="text-center align-center"/>
                            <h3><b>UNITED
                                    ARAB EMIRATES</b></h3>


                            <p class="white">
                                <b>Fiorano Software Ltd.</b><br/>
                                Dubai Internet City, Building 16,<br/>
                                Ground Floor, EX-22, <br/>
                                PO Box 73030,<br/>
                                UNITED ARAB EMIRATES<br/>
                                Tel: +971 4 319 7349<br/>
                                Fax: +44 (0) 1932 325413<br/>
                                <br>
                                <a class="white" href="#" data-toggle="modal" data-target="#contact_us">Email
                                    us, we will contact you!</a></p>




                        </div>
                        <div class="col-sm-4 col-xs-12 white text-center align-center padding-top-50">
                            <img src="<?php echo base_url('assets/images/company/China_Icon.png')?>" class="text-center align-center"/>
                            <h3><b>CHINA</b></h3>


                            <p class="white">
                                <b>Shubei Software Technology </b><br/>
                                Techchart Plaza, No.30 Xueyuan Road<br/>
                                Building A, Suite 503,<br/>
                                Haidian District, Beijing 100083<br/>
                                CHINA<br/>
                                Tel: +86 10 82608510<br/>
                                Fax: +86 10 82608511-8001<br/><br/>
                                <a class="white" href="#" data-toggle="modal" data-target="#contact_us">Email
                                    us, we will contact you!</a></p>
                        </div>
                        <div class="col-sm-4 col-xs-12 white text-center align-center padding-top-50">
                            <img src="<?php echo base_url('assets/images/company/India_Icon.png')?>" class="text-center align-center"/>
                            <h3><b>INDIA</b></h3>
                            <p class="white">
                                <b>Fiorano Software Technologies
                                    Pvt. Ltd.</b> <br/>
                                # 1, UGF, Inventor, ITPL, <br/>
                                Whitefield Road, <br/>
                                Bangalore - 560 066<br/>
                                INDIA <br/>
                                Tel: +91 80 4017 0000 <br/>
                                Fax: +91 80 4017 0047 <br />
                                <br/>
                                <a class="white" href="#" data-toggle="modal" data-target="#contact_us">Email
                                    us, we will contact you!</a></p>
                        </div>

                    </div>

                </div>
                <div class="col-xs-12 nopadding ">
                    <div class=" col-sm-offset-2 col-sm-4 col-xs-12 white text-center align-center padding-top-50">
                        <img src="<?php echo base_url('assets/images/company/Japan_Icon.png')?>" class="text-center align-center"/>
                        <h3><b>JAPAN</b></h3>
                        <p class="white">
                           <b>Fiorano Software Kabushiki Kaisha.</b> <br/>
                                Level 11, Aoyama Palacio Tower, <br/>
                                3-6-7 Kita-Aoyama, Minato-ku, <br/>
                                Tokyo 107-0061 <br/>
                                JAPAN <br/>
                                Tel: +81 3 5464 8743 <br/>
                                Fax: +81 3 4496 6466 <br />
                                <br/>
                            <a class="white" href="#" data-toggle="modal" data-target="#contact_us">Email
                                us, we will contact you!</a></p>
                    </div>

                    <div class="col-sm-4 col-xs-12 white text-center align-center padding-top-50 padding-bottom-50">
                        <img src="<?php echo base_url('assets/images/company/Singapore_Icon.png')?>" class="text-center align-center"/>
                        <h3><b>SINGAPORE</b></h3>
                        <p class="white">
                            <b>Fiorano Software Pte. Ltd.</b><br/>
                            Level 42,<br/>
                            Suntec Tower Three, <br/>
                            8 Temasek Boulevard- 038988<br/>
                            SINGAPORE <br/>
                            Tel: +65 6829 2234<br/>
                            Fax: +65 6826 4015<br/><br/>
                                <a class="white" href="#" data-toggle="modal" data-target="#contact_us">Email
                                    us, we will contact you!</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-bottom">
    <div class="container">
        <div class="row">
            <div class="section-header padding-bottom-20">
                <h2 class="section-title text-center wow fadeInDown white animated" style="visibility: visible; animation-name: fadeInDown;padding-top: 2% !important;">Sales Inquiries</h2>
                <p class="text-center wow fadeInDown animated white" style="visibility: visible; animation-name: fadeInDown;">
                    <a id="lang-sel" class="lang-sel white" href="#" data-toggle="modal" data-target="#contact_us">
                        <b>Click here</b>

                    </a> to reach a member of the Fiorano sales staff for sales related inquiries.<br>
                    Call: +1-650-326-1136 or 1-800-663-3621 (Toll-Free within the USA)<br></p>
            </div>
        </div>
    </div>
</section>












