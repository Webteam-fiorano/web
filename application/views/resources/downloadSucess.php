<?php
/**
 * Created by PhpStorm.
 * User: Hari
 * Date: 20-12-2017
 * Time: 18:08
 */
?>
<section id="intro" class="intro-sectionresources">
    <div class="container">
        <div class="col-xs-12 resourceBanner ">
            <div class="productHead col-sm-8">
                <h1 class="productHeadTitle">Fiorano Platform - Thank you for downloading
                </h1>

            </div>
        </div>
    </div>
    <a href="#"> &nbsp;</a>
    <div class="bs-example pull-right">
        <ul class="breadcrumb">
            <li> <a href="<?php echo site_url(''); ?>">Home</a></li>
            <li> <a href="<?php echo site_url('resources/downloads'); ?>">Downloads</a></li>

        </ul>
    </div>

</section>
<section class="padding-bottom-70 ">
<div class="container">
    <div class="col-xs-12">
        <div class="section-header nopadding">
            <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                <?php if(!empty($product)){ echo $product; }?>
            </h2>
        </div>

    </div>
    <div class="col-xs-12 align-center text-center padding-top-30">
        <p >
            If you have given your phone number, someone will contact you shortly to assist you with the installation and license key instructions.
        </p>
        <p>
            Thank you for your interest in <b> <?php if(!empty($product)){ echo $product; }?> </b>download. Please check your email for the download links.
        </p>
    </div>
</div>
</section>
