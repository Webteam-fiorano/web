<?php // CONTENT ?>



<section id="what_we_do">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 do text-center">
                <h4>Business components are software modules that follow the semantics of business-functions, as distinct from technical components that are typically implement a single technical function. For instance, "update customer address" is a service component since it has a meaning relevant in a business context, while "update database table" is a technical component since it implements a technical function that has no direct business relevance. The process of developing applications as a collection of service components that exchange information via request/reply or events is referred to as Service Component Architecture (SCA). SCA applications can be modified, managed and changed with little or no programmer intervention, making the SCA approach significantly more attractive for the deployment of business systems in comparison with traditional monolithic application design.<br><br>SCA has three important characteristics:<b>Encapsulation, Modularity and Integrated Support for Services and Events.</b></h4>
            </div>

            <div class="col-sm-12 do">
                <div class="col-sm-3 hidden-xs do_image"><img src="/assets/images/products/Efficiency.png" class="img-responsive" width="100px" height="100px"/></div>

                <div class="col-sm-9 slide_right">
                    <h4>Encapsulation </h4>
                    <p>A well-known feature from the days of object-oriented programming in the late 70s - refers to the separation of the interface and implementation of a software component. The external interfaces of a service component expose the relevant functions offered by the component, while the internal implementation details are 'hidden' from unauthorized external access. Business components can be "client-based", in which case they have service-interfaces that can be called by external programs to invoke functions, or event-driven, in which case they have event-descriptors that have to be matched at runtime for an event to be consumed at an input port. Since the only access to a service component is via its external interfaces, the internal implementation of the component can be changed without affecting any applications using the component. As such, it is possible to replace an existing service component in a SCA application with a new component that shares the same interfaces but has a different internal implementation. The separation of interface from implementation allows service components to be designed, developed and tested by independent teams of developers in different geographical locations provided that the interface contracts between the components remain fixed. Encapsulation also supports versioning, configuration management, dynamic deployment and a host of other useful features for the development of modern distributed business applications</p>
                </div>
            </div>
            <div class="col-sm-12 do">
                <div class="col-sm-9 slide_left">
                    <h4>Modularity </h4>
                    <p>It refers to the process of decomposing a problem into a set of smaller problems. Business components are modular in the sense that each service component implements a relevant business function. The internal implementation of single Service Component module typically consists of a series of steps or "activities" which are chained together to implement the information flow required by the component.<br><br>The Fiorano SCA platform is unique in that it incorporates a service component model that allows developers to specify request/reply or event-driven external interfaces, together with BPEL (Business Process Execution Language) activities for the internal implementation of the component. A Fiorano service component is thus coarse-grained, since the internal implementation may be a BPEL flow with any level of complexity. Multiple coarse-grained components can be combined in a "higher-level" SOA or EDA flow, enabling flexible SCA applications. </p>
                </div>
                <div class="col-sm-3 hidden-xs do_image"><img src="/assets/images/products/Efficiency.png" class="img-responsive" width="100px" height="100px"/></div>
            </div>
            <div class="col-sm-12 do">
                <div class="col-sm-3 hidden-xs do_image"><img src="/assets/images/products/Efficiency.png" class="img-responsive" width="100px" height="100px"/></div>

                <div class="col-sm-9 slide_right">
                    <h4> Integrated Support for Services and Events</h4>
                    <p>The Fiorano SCA platform supports service components with both service-interfaces (supporting SOA) and event-descriptors (supporting EDA), leading to a common design and deployment model for both services and events. Importantly, the Fiorano platform implements a single metadata repository for service components (including request/reply and event-driven interfaces), together with shared development and management tools, enabling componentized SCA applications that combine services and events in a common architecture model.</p>
                </div>
            </div>

            <div class="col-sm-12 text-left">
                <strong class="b">Learn more:</strong>
                <ul class="redbullet">
                    <li><a href="<?php echo site_url('products/service_component_architecture_benefits');?>">&nbsp;Benefits of Service Component Architecture</a></li>
                    <li><a href="<?php echo site_url('products/application_integration');?>">&nbsp;The Mission of Application Integration</a></li>
                    <li><a href="<?php echo site_url('products/streamlining_integration_strategy');?>">&nbsp;Streamlining your Integration Strategy</a></li>
                    <li><a href="<?php echo site_url('products/service_components');?>">&nbsp;Service Component Architecture: Unifying SOA and EDA</a></li>
                </ul>
            </div>

        </div>
    </div>
</section>