<?php // CONTENT ?>



<section id="what_we_do">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 do">
                    <div class="col-sm-12">
                        <h3>Service Components</h3>
                        <p>Service Components are software programs or a set of programs and data that implement functions that are relevant in a business context. For instance, while updating a table in a database has only a technical meaning, the process of updating a customer address - whatever that involves technically - has a business meaning. Hence "update customer address" or "check inventory in warehouse" are Service Components since they have business semantics as opposed to technical semantics. Service Component Architecture (SCA) refers to the design and composition of business applications from modular Service Components.</p>
                    </div>
                </div>
                <div class="col-sm-12 do">
                    <div class="col-sm-12">
                        <h3>Service Oriented Architecture (SOA)</h3>
                        <p>SOA refers to the design of applications via components (often referred to as "services") that expose interfaces that can be called by other client applications; multiple components can be chained together via request/reply calls to create a larger "composite application" which could potentially be considered a logical module within a larger business process. Unfortunately, the primary focus of SOA has been the concept of accessing functions in remote components to create a distributed application based on request/reply semantics. SOA infrastructure typically does not mandate any particular component-model that guides developers to create software modules based on a coarser level of granularity that matches higher-level business functions rather than lower-level technical functions. As such, typical SOA applications focus more on the notion of distributed computing rather than on the creation of reusable, modular Service Components, resulting in software systems that are difficult to develop, deploy, modify and change.</p>
                    </div>
                </div>
                <div class="col-sm-12 do">
                    <div class="col-sm-12">
                        <h3>Event Driven Architecture (EDA)</h3>
                        <p>EDA refers to the design of applications as a collection of components that exchange events to perform business-functions. The major difference between SOA and EDA is that in an SOA, all intermediate Service Components suspend their operation until the relevant request/reply call returns, while in an EDA all Service Components continue to operate since their focus is on processing incoming messages and publishing outgoing messages; EDA is thus typically more efficient than an SOA approach due to pipelined, concurrent processing of events by multiple software modules chained together (since there is no waiting for blocked calls to return). Unfortunately, current EDA approaches suffer from the same problem as SOA since the focus is more on the event-exchanges between distributed software components rather than on the modularity and granularity of the components participating in the EDA process. </p>
                    </div>
                </div>
                <div class="col-sm-12 do">
                    <div class="col-sm-7">
                        <h3>Service Component Architecture (SCA)</h3>
                        <p>SCA is an architectural approach in which application developers decompose problems into smaller modules, each of which executes a well-defined business function and is implemented as an encapsulated component. The interactions between Service Components may be either request/reply (SOA) or via events (EDA). Service Component Architecture thus moves the focus of application design from the concept of distributed computing towards the intelligent design of modular Service Components. A single SCA application may involve multiple request/reply calls as well as multiple event-exchanges. As such, SCA logically unifies SOA and EDA into a single framework, since the distributed nature of the interaction between Service Components in an application is now overshadowed by the notion of software modularity. Finding the right level of granularity at which to implement a Service Component now becomes more important than the request/reply or event-driven exchanges of information between the components themselves.</p>
                    </div>
                    <div class="col-sm-5 hidden-xs do_image"><img src="/assets/images/resources/sca.jpg" class="img-responsive" width="600px" height="600px"/></div>
                </div>

                <div class="col-sm-12 text-right">
                    <b class="b">Learn more:</b>
                    <p>
                        <img src="<?=__IMAGES__?>/ra1.gif" /><a href="<?php echo site_url('products/service_components_characteristics');?>">
                            <strong>&nbsp;Characteristics of Service Components</strong></a>
                    </p>
                    <p>
                        <img src="<?=__IMAGES__?>/ra1.gif" />
                        <a href="<?php echo site_url('products/service_component_architecture_benefits');?>">
                            <strong>&nbsp;Benefits of Service Component Architecture (SCA)</strong>
                        </a>
                    </p>
                    <p><img src="<?=__IMAGES__?>/ra1.gif" />
                        <a href="<?php echo site_url('products/application_integration');?>">
                            <strong>&nbsp;The Mission of Application Integration</strong>
                        </a>
                    </p>
                    <p>
                        <img src="<?=__IMAGES__?>/ra1.gif" />
                        <a href="<?php echo site_url('products/streamlining_integration_strategy');?>">
                            <strong>&nbsp;Streamlining Integration Strategy</strong>
                        </a>
                    </p>
                </div>

            </div>
        </div>
</section>