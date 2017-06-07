<?php
/**
 * Created by PhpStorm.
 * User: harikrishnan
 * Date: 2/13/2017
 * Time: 11:16 AM
 */
?>
<section id="intro" class="microservice-section">
    <div class="container">
        <div class="col-xs-12 productBanner ">
            <div class="productHead col-sm-8">
                <h1 class="productHeadTitle">Microservices : Key Benefits</h1>

            </div>
            <!--  <div class="productHeadDownload col-sm-4 ">
                  <a href="#" class="download-binaries btn-danger btn btn-large downHeadBtn bannnerbtn"><i class="fa fa-large fa-download"></i>  &nbsp; Download Product &nbsp;  &nbsp;</a><br><br>
                  <a href="" class="btn-success btn btn-large downHeadBtn bannnerbtn"><i class="fa fa-large fa-arrow-circle-down"></i> &nbsp;Get Resources </a>
                  <br><br>
                  <a href="" class="btn-success btn btn-large downHeadBtn bannnerbtn"><i class="fa fa-large fa-phone-square"></i> &nbsp;&nbsp;&nbsp;Request Demo&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
              </div>-->

        </div>
    </div>
    <a href="#"> &nbsp;</a>
    <div class="bs-example pull-right">
        <ul class="breadcrumb">
            <li> <a href="<?php echo site_url(''); ?>">Home</a></li>
            <li> <a href="<?php echo site_url('products'); ?>">Products</a></li>
            <li> <a href="<?php echo site_url('products/fiorano_integration'); ?>"> Fiorano Integration</a></li>
            <li> <a href="<?php echo site_url('products/fiorano_microservices'); ?>"> Fiorano Integration</a></li>
            <li class="active"> Microservices</li>
        </ul>
    </div>
</section>
<?php /*<section  class="about-section">

<div class="content-section-a">

    <div class="container">
        <div class="row">
            <div class="section-header">
                <h1 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Fiorano Studio Tool </h1>
                <!--<p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>-->
            </div>
            <div class="col-lg-5 col-sm-5 productLeft">
                <hr class="section-heading-spacer">
                <div class="clearfix"></div>

                <p class="productDesc">Today's enterprises incorporate a myriad of software applications and platforms including J2EE, .NET, Web Services, UNIX and Legacy Systems developed in multiple languages. Deploying flexible business processes in this environment is a complex, time-consuming and error-prone task, making it difficult to adapt to changing business requirements.
                </p>
                <p class="text-justify">Fiorano ESB™ simplifies this task by enabling the rapid assembly, deployment and management of event-driven business processes spanning multiple technology assets using visual tools.
                </p>

            </div>
            <div class="col-lg-7 col-sm-7 productRight">
                <img class="img-responsive" src="<?php echo base_url('assets/images/products/Event-Interception.png')?>" alt="Fiorano SOA Platform">
            </div>
        </div>

    </div>
</div>
</section> */?>
<section>
    <div class="container">
    <div class="row padding-top-50 padding-bottom-50" >
        <div class="section-header padding-bottom-50">
            <h1 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Key Benefits </h1>
        </div>
        <div class="col-sm-4 col-xs-12 bk-white padding-bottom-50">
            <div class="col-xs-12 padding-top-20">
                <h3> Easy, unbounded Scalability </h3>
                <hr class="double-grey">
                <p> Since each Microservice typically runs in its own process and is stateless (in the sense that there is no centralized state-manager in
                    a well-implemented Microservices platform), it can be scaled and managed independently of other Microservices in an assembly. For instance,
                    if a given Microservice participating in an application is performing poorly, it is possible to redeploy it by simply moving it to a more
                    powerful hardware platform. The redeployment does not affect other Microservices sending messages to (or receiving messages from) the Microservice
                    being scaled. Multiple concurrently running copies of a single Microservice can be created and deployed easily across the enterprise network or cloud,
                    allowing performance to be scaled linearly by distributing incoming messages across multiple instances of the Microservice as required.
                </p>


            </div>
        </div>
        <div class="col-sm-4 col-xs-12 bk-black">

            <div class="col-xs-12 padding-top-20">
                <h3> Independent Teams for Service Development and Application Assembly </h3>
                <hr class="double-white">
                <p> In the Microservices approach, Service-development is separated from Application Assembly. Further each Microservice (or set of Microservices relevant to
                    a particular business domain) is typically developed by an independent team, where each team has all the required expertise (including core domain knowledge,
                    user-interface development skills, etc.). Once developed and tested, the Microservices are typically published to a 'registry' on the Microservices Platform.
                    Instances of multiple services can then be used to create application assemblies to accomplish a given business task. This independence and separation of development,
                    both of the Microservices themselves and later of the application assembly, enables further agility and better quality in the creation of end-user business solutions.
                    Unlike Monolithic systems, applications are not developed ground-up in the Microservices approach; rather, they are assembled from previous built and tested Microservices. </p>


            </div>
        </div>
        <div class="col-sm-4 col-xs-12 bk-white">

            <div class="col-xs-12 padding-top-20">
                <h3>Multi-language Development for added Flexibility </h3>
                <hr class="double-grey">
                <p> Each Microservice can be developed in any programming language, allowing true multi-language, multi-platform flexibility in application deployment. For instance, a single application
                    assembly can be composed using Microservices written in Java, C, C++ and C# and JavaScript, since each Microservice can be written in any programming language chosen by the developer(s)
                    of the Microservice. This level of flexibility is again in stark contrast with existing Monolithic application development techniques, where systems are typically tightly coupled and
                    typically developed in a single, chosen programming language.
                </p>


            </div>
        </div>

        <hr>
      <!--  <div class="col-xs-12 nopadding padding-top-20"> &nbsp; </div>-->
        <div class="col-sm-6 col-xs-12 bk-white padding-top-50">

            <div class="col-xs-12 padding-top-20 padding-bottom-50">
                <h3>Ideal granularity to enable agility and reuse </h3>
                <hr class="double-grey">
                <p> Microservices typically run in individual processes, giving them an ideal level of granularity: neither too small nor too big. Typically, each Microservice implements a single business
                    function, which ensures that the interfaces remain simple (typically one or a few inputs and a similar number of outputs). Because of their simple, often data-format-driven interfaces,
                    Microservices can be rapidly and efficiently "rewired", allowing developers to prototype multiple scenarios of a solution very rapidly. Such agility is impossible to achieve with
                    monolithic application development techniques and difficult even with classic SOA approaches. Combined with a platform that allows dynamic deployment, Microservices can be deployed
                    as 'agents' at runtime to remote machines across cloud and hybrid environments; Solution composition can thus be performed on a single machine, while the Microservices in the composed
                    assembly are deployed on demand across the cloud or enterprise as required at runtime, leading to the ultimate deployment agility.
                </p>


            </div>
        </div>
        <div class="col-sm-6 col-xs-12 bk-black margintop-50" >

            <div class="col-xs-12 padding-top-20 padding-bottom-50">
                <h3>Easier testing and deployment across multiple Environments</h3>
                <hr class="double-white">
                <p> Since each Microservice is designed, built and tested in an independent team responsible for ensuring both the correctness and quality of the developed Service, the Application developer
                    assembling multiple Microservices to solve a business problem has a relatively stronger degree of confidence in the individual components of his/her solution in comparison with the monolithic
                    approach. For each Microservice, it is possible to set 'profiles' for multiple environments including Development, Test, Staging and Production. To move an entire application assembly from "Development"
                    to "Testing" (or another downstream environment like "Staging" or "Production"), all that the application composer needs to do is choose the target environment; the underlying platform then picks up the
                    relevant profiles, applies them to each Microservice in the assembly, and moves the entire assembly to the new environment. This dramatically eased, automated deployment process is again in stark contrast
                    to the monolithic approach, which is typically script-based and error-prone.
                </p>


            </div>
        </div>
    </div>
    </div>
</section>
