<!-- BOTTOM -->
<div id="bottom">
    <div class="container">
        <div class="row">

            <div class="col-sm-4 col-xs-12 custom_footer1">
                <div id="fb-root"></div>
                <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.3";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>
                <div class="fb-page" data-href="https://www.facebook.com/maytinhdebandongbo" data-width="280" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/maytinhdebandongbo"><a href="https://www.facebook.com/maytinhdebandongbo">Máy tính để bàn đồng bộ</a></blockquote></div></div>
            </div>

            <div class="col-sm-4 col-xs-12 custom_footer2">
                <div id="map-canvas"></div>
            </div>

            <div class="col-sm-4 col-xs-12">
                <div class="custom_footer3 clearfix">
                    <h3>Follow us</h3>
                    <ul>
                        <li><a href="https://twitter.com/"><i class="fa fa-twitter-square"></i><span>Twitter</span></a></li>
                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook-square"></i><span>Facebook</span></a></li>
                        <li><a href="https://google.com/"><i class="fa fa-google-plus-square"></i><span>Google+</span></a></li>

                    </ul>
                </div>

                <div class="custom_footer4 clearfix">
                    <h3>Địa chỉ</h3>
                    <ul>
                        <li><i class="fa fa-map-marker"></i>10/26 Hoàng Hoa Thám, P7, Q.Bình Thạnh, TP.Hồ Chí Minh</li>
                        <li><i class="fa fa-phone"></i>08 62788887 / 0938 176 671</li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://maps.googleapis.com/maps/api/js"></script>
<script>
    function initialize() {
        var mapCanvas = document.getElementById('map-canvas');
        var mapOptions = {
            center: new google.maps.LatLng(10.8290224,106.6705422),
            zoom: 15,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(mapCanvas, mapOptions)
    }
    google.maps.event.addDomListener(window, 'load', initialize);
</script>