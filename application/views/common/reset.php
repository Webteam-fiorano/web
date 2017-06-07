<section id="intro" class="intro-sectionMq">
    <div class="container">
        <div class="col-xs-12 resourceBanner ">
            <div class="productHead col-sm-8">
                <h1 class="productHeadTitle">Forgot Password</h1>

            </div>
        </div>
    </div>
    <a href="#"> &nbsp;</a>

</section>
<section>

    <?php echo  $act;?>

    <div class="container">
        <div class="section-header">
            <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Need Help - Password </h2>
            <div class="row  padding-top-50 padding-bottom-50" >
                <?php if($act==1){?>
                <div class="col-xs-12">
                    <div class="col-xs-12"><div class="col-sm-1 nopadding"><i class="fa fa-envelope-square col-xs-12" style="font-size: 80px;"></i></div>
                    <div class="col-sm-10">  <h2>Please check your Inbox </h2></div>

                    </div>
<div class="col-xs-12">   </hr> </div>
                        We have sent an password reset link to your registered Email ID - Please use the link to reset your password. If you do not find the email in your Inbox, check your Bulk Mail Folder.

                </div>
<?php }else{?>

                <div class="col-xs-12">
                    <div class="col-xs-12"><div class="col-sm-1 nopadding"><i class="fa fa-close col-xs-12" style="font-size: 80px;"></i></div>
                        <div class="col-sm-10">  <h2>Oops, Sorry </h2></div>

                    </div>

                    <div class="col-xs-12">   </hr> </div>
                    <p style="color:red">We were not able to find the Email ID in our records .</p>

                </div>
            </div>
            <?php } ?>
        </div>
    </div>

</section>