<?php
/**
 * Created by PhpStorm.
 * User: harikrishnan
 * Date: 6/29/2017
 * Time: 3:18 PM
 */
?>
<script>
    $(document).ready(function () {
        var img = document.getElementById('tech');
//or however you get a handle to the IMG
        var width = img.clientWidth;
        var height = img.clientHeight;

        $(".techBox").css("min-height",height );
        $(".techcontent").css("height",height );
        $(".techFirst").css("height",height );


    });
</script>
<section class="section-contact">
    <div class="container">
        <div class="col-xs-12 productBanner ">
            <div class="productHead col-sm-8">
                <h1 class="productHeadTitle">Fiorano Technical Support</h1>
            </div>
            <div class=" col-sm-8 padding-top-50 padding-top-hidxs padding-bottom-20 align-center" >
                <div class="col-sm-8 text-center align-center center-block" style="">

                    <a  href="http://support.fiorano.com"target="_blank"> <button type="button" class="download-binaries btn-success btn btn-large downHeadBtn"><i class="fa fa-large fa-user-o"></i> Support Portal Login</button></a>
                </div>


            </div>

        </div>
    </div>
</section>
<section class="tech-body">
<div class="container">
    <div class="col-xs-12 padding-top-50 padding-bottom-50">
        <div class="col-xs-12">
            <div class="col-sm-offset-2 col-sm-4 ">
                <div class="col-xs-12 techBox nopadding ">
                    <img src="<?php echo base_url('assets/images/company/tech-support-block.jpg') ?>" class="img-responsive techImage" id="tech"/>
                    <div class="col-xs-12 techcontent techFirst">
                       <div class="col-xs-12 ">
                           <a  href="http://support.fiorano.com"target="_blank"><button class="btn btn-success col-sm-offset-3 col-xs-offset-2"> Support Portal Login  </button></a>
                       </div>
                        <div class="col-xs-12 padding-top-10">
                            <a href="mailto:licensing@fiorano.com?Subject= Request%20Fiorano%20Support%20Portal%20Login" target="_top">
                           <button class="btn btn-danger  col-sm-offset-4 col-xs-offset-3"> Request Login  </button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 hidden-lg hidden-sm hidden-md padding-top-10"> &nbsp; </div>
            <div class="col-sm-4 ">
                <div class="col-xs-12 techBox nopadding">
                    <img src="<?php echo base_url('assets/images/company/licensing-support-block.jpg') ?>" class="img-responsive techImage"/>
                    <div class="col-xs-12 techcontent techSecond" >

                        <div><a  href="#" data-toggle="modal" id="lice" data-target="#contact_us"> <button class="btn btn-disabled tecbtn col-xs-offset-4"> Contact Us </button></a></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xs-12 padding-top-20">
            <div class="col-sm-offset-2 col-sm-4 padding-top-10">

                <div class="col-xs-12 techBox nopadding">
                    <img src="<?php echo base_url('assets/images/company/AMC-support-block.jpg') ?>" class="img-responsive techImage"/>
                    <div class="col-xs-12 techcontent techFirst">
                        <div class="col-xs-12">
                            <a  href="http://support.fiorano.com"target="_blank"><button class="btn btn-success col-sm-offset-3 col-xs-offset-2"> Support Portal Login  </button></a>
                        </div>
                        <div class="col-xs-12 padding-top-10">
                            <a href="mailto:licensing@fiorano.com?Subject= Request%20Fiorano%20Support%20Portal%20Login" target="_top">
                                <button class="btn btn-danger col-sm-offset-4 col-xs-offset-3"> Request Login  </button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 hidden-lg hidden-sm hidden-md padding-top-10"> &nbsp; </div>
            <div class="col-sm-4 padding-top-10">
                <div class="col-xs-12 techBox nopadding">
                    <img src="<?php echo base_url('assets/images/company/evaluation-support-block.jpg') ?>" class="img-responsive techImage"/>
                    <div class="col-xs-12 techcontent techSecond"

                    <div><a  href="#" id="eval" data-toggle="modal" data-target="#contact_us">  <button class="btn tecbtn btn-disabled col-xs-offset-4"> Contact Us </button></a></div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</section>
<section ">
    <div class="col-xs-12 padding-bottom-20 padding-top-20 text-center " style="background: #dbdbdb">
        <p> Use of all our software is subject to the <a href="<?php echo base_url('assets/pdf/docs/license.pdf')?>" target="_blank">Fiorano End User License Agreement</a></p>
    </div>
</section>

<script>
    $(document).ready(function(){
        $('#lic_catDiv').hide();


        $("#profile").change(function(){
            var dat= $('#profile').attr('class');
            var datval= $( "#profile" ).val()
                if(dat=="det form-control"){

                if(datval=="Existing Fiorano customer"){
                    $('#lic_catDiv').show();
                    $("#lic_cat").attr("required", "true");
                    $("#your_mess").attr('class', 'col-sm-6 padding-top-20');

                }else{
                    $('#lic_catDiv').hide();
                    $('#lic_cat').removeAttr('required');
                    $("#your_mess").attr('class', 'col-sm-12 padding-top-20');
                }
            }else{
                return true;
            }
        });


       $('#eval').click(function(){
           $('.modal-title').text('Contact Us for Evaluation Support');
           var temp = "Evaluation Support";
           var vald ="Evaluation";
           var newOption = $('<option> </option>');
           newOption.attr('value', vald).text(temp);
           $('#category').append(newOption);
           $("#category > [value=Evaluation]").attr("selected", "true");
           $('#messsge_cat').hide();
           $("#your_mess").attr('class', 'col-sm-12 padding-top-20');
           $('#lic_catDiv').hide();
           $("#profile").attr('class', 'form-control');
       }) ;
        $('#lice').click(function(){
            $('.modal-title').text('Contact Us for Licensing Support');
            $("#category > [value=Licensing]").attr("selected", "true");
            $('#messsge_cat').hide();
            $("#your_mess").attr('class', 'col-sm-12 padding-top-20');
            $("#profile").attr('class', 'det form-control');
           // $('#lic_catDiv').show();
        }) ;


        $('#contactBtn').click(function () {
            $('#lic_catDiv').hide();
            $('.modal-title').text('Contact Us');
            $("#category option:selected").prop("selected", false)
            $('#messsge_cat').show();
            $("#your_mess").attr('class', 'col-sm-6 padding-top-20');
            $("#profile").attr('class', 'form-control');
       });

    });
</script>