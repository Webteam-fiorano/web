<section id="intro" class="intro-sectionresources">
    <div class="container">
        <div class="col-xs-12 resourceBanner ">
            <div class="productHead col-sm-8">
                <h1 class="productHeadTitle">Request Fiorano Demos & Tutorials</h1>

            </div>
        </div>
    </div>
    <a href="#"> &nbsp;</a>
</section>
    <section>
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Demos & Tutorials – Help us with Information </h2>
                <p class="text-center wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">Please fill out the information below and click "Submit" to proceed to the demo.
                    Fields marked with <span class="red">*</span> are required.</p>
            </div>

            <div class="row padding-bottom-50 padding-top-50">
                <div class="col-sm-12 form-group">
                    <?php echo form_open('resources/demo_interest')?>
                    <hr>
                    <div class="col-xs-12">
                        <input type="hidden" name="d_type" value="<?php echo $d_type;?>">
                        <input type="hidden" name="f_loc" value="<?php echo $f_loc;?>">
                        <div class="col-xs-4 ">
                            <strong>Business Issues (Check all that apply) <span class="reqMention">*</span></strong>
                        </div>
                        <div class="col-xs-8">
                            <div class="col-sm-6"><input type="checkbox" name="checkgroup[]" value="Integration of disparate applications" id="Integration of disparate applications"><label for="Integration of disparate applications">Integration of disparate applications</label> </div>
                            <div class="col-sm-6"><input type="checkbox" name="checkgroup[]" value="Messaging middleware" id="Messaging middleware"><label for="Messaging middleware">Messaging middleware</label></div>
                            <div class="col-sm-6"><input type="checkbox" name="checkgroup[]" value="Enterprise Architecture - SOA Initiative" id="Enterprise Architecture - SOA Initiative"><label for="Enterprise Architecture - SOA Initiative">Enterprise Architecture &ndash; SOA Initiative </label></div>
                            <div class="col-sm-6"><input type="checkbox" name="checkgroup[]" value="Database synchronization/dataflow" id="Database synchronization/dataflow"><label for="Database synchronization/dataflow">Database synchronization/dataflow </label></div>
                            <div class="col-sm-6"><input type="checkbox" name="checkgroup[]" value="Extending existing IT infrastructure" id="Extending existing IT infrastructure"><label for="Extending existing IT infrastructure">Extending existing IT infrastructure </label></div>
                            <div class="col-sm-6"><input type="checkbox" name="checkgroup[]" value="SAP Integration" id="SAP Integration"><label for="SAP Integration">SAP Integration </label></div>

                            <div class="col-sm-6"><input type="checkbox" name="checkgroup[]" value="Legacy System Integration" id="Legacy System Integration"><label for="Legacy System Integration">Legacy System Integration</label></div>
                            <div class="col-sm-6"><input type="checkbox" name="checkgroup[]" value="Mergers and Acquisitions" id="Mergers and Acquisitions"><label for="Mergers and Acquisitions">Mergers and Acquisitions </label></div>
                            <div class="col-sm-6"><input type="checkbox" name="checkgroup[]" value="Cloud Integration (on-premise to cloud etc.)" id="Cloud Integration (on-premise to cloud etc.)"><label for="Cloud Integration (on-premise to cloud etc.)">Cloud Integration (on-premise to cloud etc.)</label></div>
                            <div class="col-sm-6"><input type="checkbox" name="checkgroup[]" value="Cloud ESB (hosted PaaS)" id="Cloud ESB (hosted PaaS)" ><label for="Cloud ESB (hosted PaaS)">Cloud ESB (hosted PaaS)</label></div>

                            <div class="col-sm-6"><input type="checkbox" name="checkgroup[]" value="VAR/ISV/Distributor" id="VAR/ISV/Distributor"><label for="VAR/ISV/Distributor">VAR/ISV/Distributor </label></div>
                            <div class="col-sm-6"><input type="checkbox" name="checkgroup[]" value="Other" id="Other" onClick="enableordisableme()"><label for="Other">Other</label> <input type="text" value="(Please specify)" id="otherText" name="Other_Business_Issues" disabled> </div>


                        </div>
                    </div>
                    <div class="col-xs-12 padding-top-20">
                        <div class="col-xs-4">
                            <strong>Implementation Stage <span class="reqMention">*</span></strong>
                        </div>
                        <div class="col-xs-6">
                            <select name="implementationstages" class="form-control" OnChange="disp_others()" required="required">
                                <option value="Select" selected>Please Select</option>
                                <option value="Researching technology choices">Researching technology choices </option>
                                <option value="Evaluating shortlisted choices/vendors">Evaluating shortlisted choices/vendors </option>
                                <option value="Proof of concept in progress">Proof of concept in progress </option>
                                <option value="Researching implementation best practices">Researching implementation best practices </option>
                                <option value="Other">Other</option>
                            </select>

                        </div>
                        <div class="col-xs-3" style="display:none; padding-left:15px;" id="Other_Implementations"><input type="text" value="" name="Other_Implementation_Stages"></div>

                    </div>
                    <div class="col-xs-12 padding-top-20">
                        <div class="col-xs-4">
                            <strong>Planned Usage <span class="reqMention">*</span></strong>
                        </div>
                        <div class="col-xs-6">
                            <select name="usage" class="form-control" required="required">
                                <option value="Select" selected>Please Select</option>
                                <option value="End-user">End-user </option>
                                <option value="SI/Partner">SI/Partner </option>
                            </select>
                        </div>
                    </div>
                    <div class="col-xs-12 padding-top-20">
                        <div class="col-xs-4">
                            <strong>Brief Description of Project</strong>
                        </div>
                        <div class="col-xs-6">
                            <textarea class="form-control" name="description" rows=5 cols=30></textarea>
                        </div>
                    </div>
                    <div class="col-xs-12 padding-top-20">
                        <div class="col-xs-4">

                        </div>
                        <div class="col-xs-6">
                            <button type="submit"  class="btn btn-success  pull-right"> Submit</button> &nbsp;&nbsp;
                            <button type="button" class="btn btn-default " data-dismiss="modal">Close</button>
                        </div>
                    </div>
                    <?php echo form_close();?>
                </div>
            </div>
        </div>
    </section>
<script>
    $(document).ready(function(){
        $('#Other').click(function(){
            if($("#Other").prop('checked') == true){
                $('#otherText').prop("disabled", false);
                $('#otherText').val('');
            }else{
                $('#otherText').prop("disabled", true);
                $('#otherText').val('(Please specify)');
            }
        });

    });
</script>