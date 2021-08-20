



<!DOCTYPE html>
<html class="no-js">
<head> 
<meta charset="utf-8">
<title></title>
<meta name="description" content="">
<meta name="HandheldFriendly" content="True">
<meta name="MobileOptimized" content="320">
<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui,maximum-scale=2">
<meta name="viewport" content="width=device-width, initial-scale=1, minimal-ui,maximum-scale=1">
<meta http-equiv="cleartype" content="on">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=cairo">
<link type="text/css" rel="stylesheet" href="assets/css/fonts.css" charset="utf-8">
<link type="text/css" rel="stylesheet" href="assets/css/style.css" charset="utf-8">
<link type="text/css" rel="stylesheet" href="assets/css/jquery.fancybox.css?v=2.0.6" charset="utf-8">
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/img/touch/apple-touch-icon-144x144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/img/touch/apple-touch-icon-114x114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/img/touch/apple-touch-icon-72x72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="assets/img/touch/apple-touch-icon-57x57-precomposed.png">
<link rel="shortcut icon" sizes="196x196" href="assets/img/touch/touch-icon-196x196.png">
<link rel="shortcut icon" href="assets/img/touch/apple-touch-icon.png">

<!-- Tile icon for Win8 (144x144 + tile color) -->
<meta name="msapplication-TileImage" content="assets/img/touch/apple-touch-icon-144x144-precomposed.png">
<meta name="msapplication-TileColor" content="#222222">

<!-- SEO: If mobile URL is different from desktop URL, add a canonical link to the desktop page -->
<!--
 <link rel="canonical" href="http://www.example.com/" >
 -->

<!-- Add to homescreen for Chrome on Android -->
<!--
 <meta name="mobile-web-app-capable" content="yes">
 -->

<!-- For iOS web apps. Delete if not needed. https://github.com/h5bp/mobile-boilerplate/issues/94 -->
<!--
 <meta name="apple-mobile-web-app-capable" content="yes">
 <meta name="apple-mobile-web-app-status-bar-style" content="black">
 <meta name="apple-mobile-web-app-title" content="">
 -->

<!-- This script prevents links from opening in Mobile Safari. https://gist.github.com/1042026 -->
<!--
 <script>(function(a,b,c){if(c in b&&b[c]){var d,e=a.location,f=/^(a|html)$/i;a.addEventListener("click",function(a){d=a.target;while(!f.test(d.nodeName))d=d.parentNode;"href"in d&&(d.href.indexOf("http")||~d.href.indexOf(e.host))&&(a.preventDefault(),e.href=d.href)},!1)}})(document,window.navigator,"standalone")</script>
 -->

<link rel="stylesheet" href="assets/css/normalize.css">
<link rel="stylesheet" href="assets/wow_book/wow_book.css" type="text/css">
<link rel="stylesheet" href="assets/css/main.css">
<script src="assets/js/vendor/modernizr-2.7.1.min.js"></script>
</head>
<body>

<!-- Add your site or application content here -->
<!--
<div class="header_wrape">
  <div class="header_logo">
    <div class="اسم-الدرس"> دورة مراقي الفلاح </div>
  </div>
</div>

 Add your site or application content here -->

<div class="footer_wrape">
  <div class="footer_logo"></div>
</div>

<!-- Add your site or application content here -->



<div class="book_container">
  <div id="book">
    <div id="cover"><img height="100%" src="assets/covers/front/h-10.jpg" width="100%" align="center"></div>
    <?php
    foreach($xml->para as $para){
        
        $myfile = fopen("lessons/Lesson.html", "w") or die("Unable to open file!");
         
       if(str_starts_with($para, 'الدرس')){
    
       
     
          
            fwrite($myfile, '<p class="اسم-الدرس"><a name="مقدمة_لعلم_العروض"></a>{{$para}}</p>');
       
        }
            elseif(str_starts_with($para, 'A')){

           fwrite($myfile, $para);
        }
            else{
              fwrite($myfile, $para);
       
              fclose($myfile); 
    }
     
    }

 
   
       
           ?>
          
  






<!-- if you don't need support for IE8 use jquery 2.1 --> 
<!-- <script src="js/vendor/jquery-2.1.0.min.js"></script> --> 
<script src="assets/js/vendor/jquery-1.11.2.min.js"></script> 
<script src="assets/js/helper.js"></script> 
<script src="assets/wow_book/wow_book.min.js"></script> 
<script type="text/javascript" src="assets/js/jquery.fancybox.js?v=2.0.6"></script> 
<script type="text/javascript">
	$(document).ready(function() {
		$(".fancybox").fancybox();
 	});
</script> 
<!-- <script src="js/main.js"></script> --> 
<script>
  $(function(){

   var bookOptions = {
     height   : 670
    ,width    : 1000
    ,maxWidth : 1000
    ,maxHeight : 700

    ,centeredWhenClosed : true
    ,hardcovers : true
    ,toolbar : "lastLeft, left, right, lastRight, zoomin, zoomout, slideshow, flipsound, fullscreen, thumbnails,share"
    ,thumbnailsPosition : 'left'
    ,responsiveHandleWidth : 50
    ,rtl: true
    ,container: window
    ,containerPadding: "20px"
,toolbarPosition: "bottom" // default "bottom"
, strings: {
         "lastLeftTooltip"  : "أذهب الي اخر صفحة" // go to last left page button tooltip
        ,"leftTooltip"      : "الصفحة التالية" // go to left page button tooltip
        ,"rightTooltip"     : "الصفحة السابقة" // go to right page button tooltip
        ,"lastRightTooltip" : "أذهب الي اول صفحة" // go to last right page button tooltip
        ,"firstTooltip"     : "الصفحة الاولي" // go to first page button tooltip
        ,"backTooltip"      : "السابق" // back to previous page button tooltip
        ,"nextTooltip"      : "التالي" // go to next page button tooltip
        ,"lastTooltip"      : "الاخيرة" // go to last page button tooltip
        ,"zoominTooltip"    : "تكبير الصفحة" // zoom in button tooltip
        ,"zoomoutTooltip"   : "تصغير الصفحة" // zoom out button tooltip
        ,"slideshowTooltip" : "تقليب ألي" // zoom out button tooltip
        ,"flipsoundTooltip" : "الصوت" // page flip sound button tooltip
        ,"fullscreenTooltip": "تكبير حجم الصفحة" // fullscreen button tooltip
        ,"thumbnailsTooltip": "المصغرات" // thumbnails button tooltip
        ,"tocTooltip"       : "فهرس الموضوعات" // show/hide table of contents button tooltip
        ,"downloadTooltip"  : "تحميل ملف PDF" // download button tooltip
        ,"homeTooltip"      : "الصفحة الرئيسية" // home button tooltip
        ,"shareTooltip"     : "المشاركة" // share button tooltip

        // pdf find control
        ,"findTooltip"         : "" // pdf find button tooltip
        ,"findInputPlaceHolder": "" // placeholder inside the input text
        ,"findPreviousTooltip" : "" // find previous match button tooltip
        ,"findNextTooltip"     : "" // find next match button tooltip
        ,"findMatchCase"       : "" // the label "Match case" beside the checkbox
      }
     

    // Uncomment the option toc to create a Table of Contents
    // ,toc: [                    // table of contents in the format
    //  [ "Introduction", 2 ],  // [ "title", page number ]
    //  [ "First chapter", 5 ],
    //  [ "Go to codecanyon.net", "http://codecanyon.net" ] // or [ "title", "url" ]
    // ]
   };

   $('#book').wowBook( bookOptions ); // create the book


   
   // How to use wowbook API
   // var book=$.wowBook("#book"); // get book object instance
   // book.gotoPage( 4 ); // call some method

  })
 </script>
</body>
</html>
