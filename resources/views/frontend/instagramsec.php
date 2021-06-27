     <!-- Instagram Begin -->
    <div class="instagram">
        <div class="container-fluid">
            <div class="row">
            <!--
            <h5 style="text-align: center">Show Instagram Feed on your Website</h5>-->

            <div id="instafeed-container">
            </div>
        
            <script src="https://cdn.jsdelivr.net/gh/stevenschobert/instafeed.js@2.0.0rc1/src/instafeed.min.js"></script>
            <script type="text/javascript">
            var userFeed = new Instafeed({
                get: 'user',
                limit: 6,
                target: "instafeed-container",
                resolution: 'standard_resolution',
                accessToken: 'IGQVJYRzQ2TF9feW5VU2ZAabkxMSmREMTFGU1V3SDdiSHI1YWpWd1E1aWJfeFZAodGhYN0g5ZADl1MmZAEeVBSN2dPWWJDNEd1NlczaGJGRkxTa0p2ZAVdnOE81NGJJdG8zYmRycjNBa29YVTNzVGRVX1k1MwZDZD',
                template: '<a href="{{link}}"><img src="{{image}}" /></a>',
            });
            userFeed.run();
            </script>

                <!--
'<a href="{{model.images.low_resolution.url}}"><span>dziala</span><img src="{{image}}" /></a>',
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="{{ asset('img/instagram/insta-1.jpg') }}">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ clothdiva_shop</a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="{{ asset('img/instagram/insta-2.jpg') }}">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ clothdiva_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="{{ asset('img/instagram/insta-3.jpg') }}">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ clothdiva_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="{{ asset('img/instagram/insta-4.jpg') }}">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ clothdiva_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="{{ asset('img/instagram/insta-5.jpg') }}">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ clothdiva_shop</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                    <div class="instagram__item set-bg" data-setbg="{{ asset('img/instagram/insta-6.jpg') }}">
                        <div class="instagram__text">
                            <i class="fa fa-instagram"></i>
                            <a href="#">@ clothdiva_shop</a>
                        </div>
                    </div>
                </div>
        -->
            </div>
        </div>
    </div>
     <!--Instagram End -->
