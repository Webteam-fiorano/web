<?php // CONTENT ?>



<section id="what_we_do">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 do text-center"><h4>The process of developing applications as a collection of Service Components that exchange information via request/reply or events is referred to as Service Component Architecture (SCA). In contrast to traditional monolithic applications that are designed as a single whole, SCA applications consist of a coalition of Service Components that communicate either via events (EDA) or via request/reply calls (SOA). SCA offers several key advantages over the traditional approach of monolithic application design:</h4></div>
            <div class="col-sm-12 we_do">
                <div class="col-sm-5 do_left slide_left">
                    <h4>Flexibility of Development</h4>
                    <p>Service Components are easier to develop because the semantics of each independent Service Component are significantly less complex than the overall of a single, (relatively large) monolithic application; each Service Component can be developed by a different team of developers, each of whom focus only on their component without having to know the details of work done by others. </p>
                </div>
                <div class="col-sm-2 hidden-xs do_image"><img src="/assets/images/products/Efficiency.png" class="img-responsive" width="100px" height="100px"/></div>
                <div class="col-sm-5 slide_right">
                    <h4>Reuse</h4>
                    <p> Since each Service Component has well-defined interfaces, each component can be developed, tested and debugged independent of the other components. This not only speeds up project implementations but, in the case of well-designed Service Components, also leads to significantly enhanced reuse.</p>
                </div>
            </div>
            <div class="col-sm-12 we_do">
                <div class="col-sm-5 do_left slide_left">
                    <h4>Dynamic Deployment and Runtime Modification/Replacement</h4>
                    <p>Service Components can be dynamically deployed to remote nodes at runtime, and components within a process can be easily replaced by new or updated components, further reducing the time taken to modify or change an existing process in response to business requirements.</p>
                </div>
                <div class="col-sm-2 hidden-xs do_image"><img src="/assets/images/products/Efficiency.png" class="img-responsive" width="100px" height="100px"/></div>
                <div class="col-sm-5 slide_right">
                    <h4>Configuration Management and Version Control</h4>
                    <p>Service Components facilitate version control and dynamic configuration management, allowing fine-grained control over deployments across the enterprise. </p>
                </div>
            </div>
            <hr>
            <div class="col-sm-12 do">
                <div class="col-sm-3 hidden-xs do_image"><img src="/assets/images/products/Efficiency.png" class="img-responsive" width="100px" height="100px"/></div>

                <div class="col-sm-9">
                    <h2>Service Component Domains </h2>
                    <p>Enterprises that choose the SCA approach will have multiple domains of Service Components to ease the task of developing and deploying componentized SOA and EDA applications. For instance, the finance department may have a set of reusable Service Components that only make sense in that domain; likewise, the manufacturing department may have its own unique set of Service Components developed to optimize the processes within that department.<br><br>While it may not be organizationally or technically possible to effectively reuse all Service Components across multiple departments, most large organizations will federate their domains to maximize their reuse of component designs and implementations. In many cases, even when an enterprise has multiple packaged-applications and/or complex legacy systems, it is possible to create a Service Components that access the relevant modules to permit reuse. Even though multiple component domains are an absolute requirement for most enterprise over time, a single set of base Service Components can address the needs of over 70% of most small to medium-sized integration projects. The Fiorano ESB platform incorporates this base set of components "out of the box" allowing a large number of integration projects to be implemented by business analysts with little or no programmer intervention.</p>
                </div>
            </div>

            <div class="col-sm-12 text-left">
                <strong class="b">Learn More: </strong>
                <ul class="pad redbullet">
                    <li><a href="<?php echo site_url('products/application_integration');?>">&nbsp;The Mission of Application Integration</a></li>
                    <li><a href="<?php echo site_url('products/streamlining_integration_strategy');?>">&nbsp;Streamlining your Integration Strategy</a></li>
                    <li><a href="<?php echo site_url('products/service_components');?>">&nbsp;Service Component Architecture: Unifying SOA and EDA</a></li>
                </ul>

            </div>
        </div>
</section>