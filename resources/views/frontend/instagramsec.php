<!-- Instagram Begin -->
<div class="instagram">
    <div class="container-fluid">
        <div class="row">
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
                    template: '<a target="_blank" href="{{link}}"><img src="{{image}}" /></a>',
                });
                userFeed.run();
            </script>
        </div>
    </div>
</div>
<!--Instagram End -->