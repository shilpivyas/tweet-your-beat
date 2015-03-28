
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<title>JQuery Cycle Plugin - Pager Demo with Prev/Next Controls</title>
<link rel="stylesheet" type="text/css" media="screen" href="../jq.css" />
<link rel="stylesheet" type="text/css" media="screen" href="cycle.css" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
<script type="text/javascript" src="http://malsup.github.com/chili-1.7.pack.js"></script>
<script type="text/javascript" src="http://malsup.github.com/jquery.cycle.all.js"></script>
<style type="text/css">
#main { margin: 20px }
#nav { 
    position: absolute;
    z-index: 10;
    top: 247px;
    right: 683px;
}
#nav li { float: left; list-style: none}
#nav a { margin: 5px; padding: 3px 5px; border: 1px solid #ccc; background: #fc0; text-decoration: none }
#nav li.activeSlide div { background: #faa; color: black }
#nav a:focus { outline: none; }
.nav-num {
    background-color: #5F9EA0;
    padding: 2px 8px;
    border-radius: 15px;
    margin-right: 5px;
    cursor: pointer;
}
</style>
<script type="text/javascript">
$(function() {

    $('#slideshow').cycle({
        fx:      'scrollHorz',
        timeout:  1000,
        prev:    '#prev',
        next:    '#next',
        pager:   '#nav',
        pagerAnchorBuilder: pagerFactory
    });

    function pagerFactory(idx, slide) {
//        var s = idx > 2 ? ' style="display:none"' : '';
//        alert(s);
        return '<li><div class="nav-num">'+(idx+1)+'</div></li>';
    };
    
});
</script>
</head>
<body>
<div><a id="logo" href="http://jquery.com" title="Powered By jQuery"></a></div>
<div id="main">

<div id="demos">
    <div style="text-align:center;margin:auto;width:300px">
        <a href="#"><span id="prev">Prev</span></a> 
        <a href="#"><span id="next">Next</span></a>
        <ul id="nav"></ul>
    </div>
    <div id="slideshow" class="pics" style="margin:auto;clear:left;margin-top:40px">
        <img src="images/image (2).png" />
        <img src="http://malsup.github.com/images/beach2.jpg" />
        <img src="http://malsup.github.com/images/beach3.jpg" />
        <img src="http://malsup.github.com/images/beach4.jpg" />
        <img src="http://malsup.github.com/images/beach5.jpg" />
        <img src="http://malsup.github.com/images/beach6.jpg" />
        <img src="http://malsup.github.com/images/beach7.jpg" />
        <img src="http://malsup.github.com/images/beach8.jpg" />
    </div>
</div>
</body>
</html>
