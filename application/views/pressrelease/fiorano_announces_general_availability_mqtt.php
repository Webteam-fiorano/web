<?php
/**
 * Created by PhpStorm.
 * User: harikrishnan
 * Date: 6/14/2017
 * Time: 1:07 PM
 */?>

<section  class="pressrelease-banner">
    <div class="container">
        <div class="col-xs-12  text-center padding-top-20">
            <h2>Press Releases</h2>
        </div>
    </div>
    <a href="#"> &nbsp;</a>
    <div class="bs-example pull-right padding-top-50">
        <ul class="breadcrumb">
            <li> <a href="<?php echo site_url(''); ?>">Home</a></li>
            <li> <a href="<?php echo site_url('company/pressreleases'); ?>">Press Releases</a></li>
            <li class="active">Fiorano MQTT </li>
        </ul>
    </div>
</section>

<section class="pressrelease-content">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 padding-bottom-20">
                <h3>Fiorano announces general availability of Fiorano MQTT: the preferred messaging protocol for the IoT revolution</h3>
            <!--    <h4>Fiorano Enterprise Service Bus seamlessly integrates EBank’s Temenos T24 core banking system with 3rd party suppliers and channels</h4>-->

            </div>

            <div class="col-xs-12 pressrelease-uservoice padding-top-20 padding-bottom-20">
                <div class=" col-sm-2"><img class="img-responsive" src="<?php echo base_url('assets/images/fiorano_logo.png')?>"></div>
                <div class=" col-sm-8"><p>"With an estimated projection of 50 billion connected devices by 2020, IoT is the key trend in the technology industry today and enterprises are keen to leverage the IoT technology for driving their business. They require an enterprise class; standards based scalable solution to provide real-time data. Fiorano MQTT will enable these organizations to make informed decisions based on actionable information gathered from various heterogeneous sources."</p></div>
                <div class=" col-sm-2 padding-top-20"> <strong>Atul Saini  <br>
                        CEO, Fiorano Software

                       </strong></div>

            </div>
            <div class="col-xs-12">
                <div class="col-sm-9 padding-top-50 padding-bottom-50">
                    <p>
                        PALO ALTO, California, 15th Dec, 2015. Fiorano Software, a leading provider of enterprise integration and messaging infrastructure technology, today announced general availability of Fiorano MQTT, the enterprise scale MQTT message broker. Modern organizations facing the challenge of connecting large enterprise systems with multiple devices can leverage Fiorano MQTT’s best-in-class performance to gain access to real-time data.</p>
                    <p>IoT is often quoted as the next disruptive technology and MQTT (MQ Telemetry Transport) is the preferred messaging protocol for IoT and connected devices. MQTT provides a minimalistic approach towards machine-to-machine communication among resource constrained devices. Fiorano MQTT takes this charter forward and provides added performance, scalability and security to match the requirements of an enterprise.</p>
                    <p>MQTT v3.1.1 is now an OASIS Standard and Fiorano MQTT supports all the features of the latest version of the protocol like LWT (last will & testament), retained messages and all QoS Levels (Quality of Service) among others. The product comes with added features like MQTT-JMS conversion - allowing any device/sensor to communicate seamlessly with any JMS based backend system, shared and replicated High-Availability (HA) models - for better performance, client authentication via LDAP plug-in and TLS 1.2 - for added security.</p>
                        <p>Fiorano MQTT can be used either as a message broker for IoT, connecting a myriad of devices with backend enterprise applications, as a hub for machine-to-machine real-time communication, or as a local hub connecting devices and sensors. Client-side persistence provides enhanced reliability of message delivery by Fiorano MQTT ensuring all devices and systems are always updated with the latest information, even during server-down conditions.
                    </p>
<p>
    Always at the forefront of technology, Fiorano has helped a vast number of organizations worldwide with their integration needs. With the launch of Fiorano MQTT, Fiorano brings the IoT revolution at the door steps of enterprises, enabling them to effectively capitalize on this emerging technology.

</p>

                    <h3>About Fiorano</h3>
                    <p>
                        Founded in 1995, Fiorano is a trusted provider of enterprise integration middleware, high performance messaging and distributed systems. Fiorano's innovative event-driven SOA platform integrates applications and complex technologies into an enterprise nervous system. Fiorano's hybrid Cloud-ESB integrates applications across SaaS, PaaS and on-premise worlds.
                    </p><p>
                        Global leaders including Federal Bank, Commercial Bank of Africa, NASA, US Coast Guard, POSCO, British Telecom, AT&T Labs, Vodafone and L'Oréal have deployed Fiorano's solutions to drive innovation through open, standards-based, event-driven SOA applications yielding unprecedented productivity.
                    </p>
                </div>
                <div class="col-sm-3 nopadding">
                    <div class="col-xs-12  padding-top-50  shareBoxPress">

                        <div class="col-xs-12 nopadding text-center">
                            <h4>Share this Press release</h4>
                            <hr class="double-white">
                        </div>
                        <div class="col-xs-12 nopadding">
                            <div class="social-btns nopadding  ">

                                <!--                                facebook js-->
                                <div id="fb-root"></div>
                                <script>(function(d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[0];
                                        if (d.getElementById(id)) return;
                                        js = d.createElement(s); js.id = id;
                                        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.9&appId=107010336512550";
                                        fjs.parentNode.insertBefore(js, fjs);
                                    }(document, 'script', 'facebook-jssdk'));</script>
                                <!--                                twitter js-->
                                <div id="twitter-wjs"></div>
                                <script>window.twttr = (function(d, s, id) {
                                        var js, fjs = d.getElementsByTagName(s)[1],
                                            t = window.twttr || {};
                                        if (d.getElementById(id)) return t;
                                        js = d.createElement(s);
                                        js.id = id;
                                        js.src = "https://platform.twitter.com/widgets.js";
                                        fjs.parentNode.insertBefore(js, fjs);

                                        t._e = [];
                                        t.ready = function(f) {
                                            t._e.push(f);
                                        };

                                        return t;
                                    }(document, "script", "twitter-wjs"));</script>
                                <a class="fb-share-button btn facebook fb-xfbml-parse-ignore" target="_blank" data-href="<?php echo site_url('pressreleases/fiorano_announces_general_availability_mqtt');?>" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fwww.fiorano.com%2Fnew%2Findex.php%2Fpressreleases%2Ffiorano_announces_general_availability_mqtt&amp;src=sdkpreparse" onclick="return !window.open(this.href, 'Facebook', 'width=600,height=500, left=24, top=24, scrollbars, resizable')"><i class="fa fa-facebook"></i></a>
                                <a class="twitter-share-button btn twitter" href="https://twitter.com/intent/tweet?url=http%3A%2F%2Fwww.fiorano.com%2Fnew%2Findex.php%2Fpressreleases%2Ffiorano_announces_general_availability_mqtt" onclick="return !window.open(this.href, 'Twitter', 'width=600,height=500, left=24, top=24, scrollbars, resizable')"><i class="fa fa-twitter"></i></a>
                                <a class="btn google" href="https://plus.google.com/share?url=http://www.fiorano.com/new/index.php/pressreleases/fiorano_announces_general_availability_mqtt" onclick="return !window.open(this.href, 'Google+', 'width=400,height=400, left=24, top=24, scrollbars, resizable')"><i class="fa fa-google"></i></a>
                                <a class="btn dribbble" href="mailto: ?Subject=Your%20Subject&amp;body=http%3A%2F%2Fwww.fiorano.com%2Fnew%2Findex.php%2Fpressreleases%2Ffiorano_announces_general_availability_mqtt"><i class="fa fa-envelope"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">



        <div class="col-xs-12 text-center">
            <img src="<?php echo base_url('assets/images/company/press-release-bottom-image.jpg') ?>" class="img-responsiveq"/>
        </div>
    </div>
</section>