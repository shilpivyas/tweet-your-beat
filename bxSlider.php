<html>
    <head>
        <link rel="stylesheet" href="lib/css/my_style.css" type="text/css" />
        <link rel="stylesheet" href="lib/css/jquery.bxslider.css" type="text/css" />
        <link rel="stylesheet" href="lib/css/ui-lightness/jquery-ui-1.9.2.custom.min.css" type="text/css" />
        <script type="text/javascript" src="lib/js/jquery-1.8.3.js"></script>
        <script type="text/javascript" src="lib/js/jquery-ui-1.9.2.custom.min.js"></script>

        <script type="text/javascript" src="lib/js/jquery.bxslider.min.js"></script>
        <script type="text/javascript">
            jQuery(document).ready(function(){
                jQuery('.slider1').bxSlider({
                    slideWidth: 200,
                    minSlides: 2,
                    maxSlides: 3,
                    slideMargin: 10
                });
            });
        </script>
    </head>
    <body>
        <div class="slider1">
            <div class="slide"><img src="http://placehold.it/350x150&text=FooBar1"></div>
            <div class="slide"><img src="http://placehold.it/350x150&text=FooBar2"></div>
            <div class="slide"><img src="http://placehold.it/350x150&text=FooBar3"></div>
            <div class="slide"><img src="http://placehold.it/350x150&text=FooBar4"></div>
            <div class="slide"><img src="http://placehold.it/350x150&text=FooBar5"></div>
            <div class="slide"><img src="http://placehold.it/350x150&text=FooBar6"></div>
            <div class="slide"><img src="http://placehold.it/350x150&text=FooBar7"></div>
            <div class="slide"><img src="http://placehold.it/350x150&text=FooBar8"></div>
            <div class="slide"><img src="http://placehold.it/350x150&text=FooBar9"></div>
        </div>
    </body>
</html>