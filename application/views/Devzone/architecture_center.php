<section id="devzone">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 well devzone_shadow">
                    <div class="col-sm-12 padding-top-50 padding-bottom-50 devzone_topmost">
                        <h4 class="padding-bottom-20 text-center">Product Architecture Center</h4>
                        <h5 class="text-center">The content presented on this page includes links to information designed to help ensure that your Fiorano Platform® implementation is well designed by developing a solid plan.</h5>
                    </div>

                    <div class="col-sm-12 devzone_top">
                        <div class="col-sm-6 text-center devzone_topmost_left">
                        <div class="col-sm-12 padding-top-50 padding-bottom-50 devzone_top_left">
                            <h4>Essentials</h4>
                            <div class="col-sm-12">
                                <h5 class="text-center"><a href="<?php echo __ROOT__?>/whitepapers/dc/fiorano_architecture.php">Fiorano Enterprise Service Bus<sup>&reg;</sup> Architecture and Concepts</a></h5>
                                <ul>
                                    <li><p>An overview of Fiorano Enterprise Service Bus<sup>&reg;</sup> architecture and concepts.</p></li>
                                </ul>
                                <h5 class="text-center"><a href="<?php echo __ROOT__?>/whitepapers/soaesb/ESB_Best_Practices.php">ESB Best Practices</a></h5>
                                <ul>
                                    <li><p>Understanding best practices for a successful Enterprise Service Bus Implementation.</p></li>
                                </ul>
                                <p style="margin-bottom:0">
                                    <b class="b">ESB Best Practices</b>
                                    <a href="<?php echo __ROOT__?>/downloads/login.php?action=More_ESB_Best_Practices&s=whitepapers" target="_blank" style="padding-left:40px">Download PDF <img src="<?php echo __IMAGES__?>/acrobat.gif"></a>
                                </p>
                                <ul>
                                    <li>Understanding more best practices for a successful Implementation of the Fiorano Enterprise Service Bus<sup>&reg;</sup>.</li>
                                </ul>
                            </div>
                        </div>
                        </div>
                        <div class="col-sm-6 text-center">
                            <div class="col-sm-12 padding-top-50 padding-bottom-50 devzone_top_middle">
                                <h4>Relevant Whitepapers</h4>
                                <div class="col-sm-12">
                                    <h5 class="text-center"><a href="<?php echo __ROOT__?>/whitepapers/soaesb/fiorano_unifying_soa_eda.php">Service Component Architecture - Unifying SOA and EDA</a></h5>
                                    <ul>
                                        <li><p>Learn more how this new architecture concept logically unifies SOA and EDA into a single framework.</p></li>
                                    </ul>
                                    <h5 class="text-center"><a href="<?php echo __ROOT__?>/whitepapers/soaesb/fiorano_soaif.php">Services Oriented Architecture Implementation Frameworks</a></h5>
                                    <ul>
                                        <li><p>A guide to business benefits of Services Oriented Architecture Implementation Frameworks. (SOAIF)</p></li>
                                    </ul>
                                    <h5 class="text-center"><a href="<?php echo __ROOT__?>/whitepapers/soaesb/fiorano_esb.php">Demystifying Enterprise Service Bus Technology</a></h5>
                                    <ul>
                                        <li><p>Learn how ESBs cut implementation complexities and dramatically reduce TCO of Integration projects.</p></li>
                                    </ul>
                                </div>
                            </div>                        </div>

                    </div>
                </div>
                <div class="col-sm-12 devzone_bottom">
                    <div class="col-sm-12 devzone_bottomost_left">
                    <div class="col-sm-12 well padding-top-50 padding-bottom-50 devzone_bottom_left">
                        <h4 class="text-center">Technical Articles and Documentation</h4>
                        <div class="col-sm-12">
                            <h5 class="text-center"><a href="/documentation/display/ESB<?php echo DIR_PLAIN_SOA ?>/">Fiorano Platform Documentation Center</a></h5>
                            <ul>
                                <li><p>Fiorano Platform includes a comprehensive set of documentation that covers every aspect of its implementation. Besides the online help this includes detailed information on GUI tools provided with Fiorano Platform, the documentation includes PDF files that introduce you to the underlying concepts and help you in installing, configuring, and administering a Fiorano Platform setup.</p></li>
                            </ul>
                            <h5 class="text-center"><a href="/documentation/display/ESB<?php echo DIR_PLAIN_SOA ?>/Release+Notes">Release Notes</a></h5>
                            <ul>
                                <li><p>Besides enriching the Business Component model, Fiorano Platform delivers significant improvement in event throughput across the peer network, while exposing more JMS semantics at the Event Process Composition level. This document lists some of the key features delivered with the Fiorano Platform release. Also included is a list of known limitations of the GA release.</p></li>
                            </ul>
                            <h5 class="text-center"><a href="/documentation/display/ESB<?php echo DIR_PLAIN_SOA ?>/Developing">Getting Started</a></h5>
                            <ul>
                                <li><p>This guide gets you started with the Fiorano Platform. It lists the procedures for starting and shutting down the various Fiorano Platform servers and tools, and provides links to documents containing detailed information on all aspects of Fiorano Platform.</p></li>
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>

        </div>
</section>
<script>
    $(document).ready(function(){
        if(screen.width < 1024) {
            return;
        }
       $(".devzone_top_left,.devzone_top_middle,.devzone_top_right").css({'height':($(".devzone_top").height()+'px')});
       $(".devzone_bottom_left,.devzone_bottom_right").css({'height':($(".devzone_bottom").height()+'px')});
    });
</script>