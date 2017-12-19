<!--Cludo Search-->
<link href="http://customer.cludo.com/css/templates/v1.1/essentials/cludo-search.min.css" type="text/css" rel="stylesheet">
<!--[if lte IE 9]>
<script src="https://api.cludo.com/scripts/xdomain.js" slave="https://api.cludo.com/proxy.html" type="text/javascript"></script>
<![endif]-->
<section>
    <div class="container">
        <div class="col-xs-12">


        <form id="fiorano-cludo1" >

            <div class="col-xs-12 padding-top-70">
                <div class="col-xs-9 cludo-search">
                    <input type="search"  class="form-control" autocomplete="off"/>
                </div>
               <div class="col-xs-3">
                   <button class="btn btn-success " type="submit">
                       <i class="fa fa-search"> Search</i>
                   </button>
               </div>

            </div>

        </form>
        </div>
        <div class="col-xs-12 padding-bottom-50 padding-top-50">
        <div id="cludo-search-results" class="col-xs-12">
            <div class="cludo-r col-xs-12">
                  <div class="cludo-c-9">
                    <div class="search-result-count"></div>
                    <div class="search-did-you-mean"></div>
                    <div class="search-results"></div>
                </div>
                <div class="cludo-c-3" >
                    <h4> Category</h4>
                    <hr>
                    <div class="search-filters">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>


<script type="text/javascript" src="//customer.cludo.com/scripts/bundles/search-script.min.js"></script>
<script>
    var CludoSearch;
    (function () {
        var cludoSettings = {
            customerId: 694,
            engineId: 8889,
            searchUrl: '<?php echo site_url('company/search')?>',
            language: 'en',
            searchInputs: ['fiorano-cludo1'],
            type: 'inline',
            searchApiUrl: 'https://api-eu1.cludo.com/api/v3'
        };
        CludoSearch= new Cludo(cludoSettings);
        CludoSearch.init();
    })();
</script>
