<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class testController extends Controller
{  

 

 
public function create(){

  $pageTop=' <!DOCTYPE html>
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
      <div class="??????-??????????"> ???????? ?????????? ???????????? </div>
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
    ';
  $footer='<div id="cover"><img height="100%" src="assets/covers/front/h-10.jpg" width="100%" align="center"></div>
        
  </div>
  </div>

  <!-- if you dont need support for IE8 use jquery 2.1 --> 
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
      ,thumbnailsPosition : "left"
      ,responsiveHandleWidth : 50
      ,rtl: true
      ,container: window
      ,containerPadding: "20px"
  ,toolbarPosition: "bottom" // default "bottom"
  , strings: {
           "lastLeftTooltip"  : "???????? ?????? ?????? ????????" // go to last left page button tooltip
          ,"leftTooltip"      : "???????????? ??????????????" // go to left page button tooltip
          ,"rightTooltip"     : "???????????? ??????????????" // go to right page button tooltip
          ,"lastRightTooltip" : "???????? ?????? ?????? ????????" // go to last right page button tooltip
          ,"firstTooltip"     : "???????????? ????????????" // go to first page button tooltip
          ,"backTooltip"      : "????????????" // back to previous page button tooltip
          ,"nextTooltip"      : "????????????" // go to next page button tooltip
          ,"lastTooltip"      : "??????????????" // go to last page button tooltip
          ,"zoominTooltip"    : "?????????? ????????????" // zoom in button tooltip
          ,"zoomoutTooltip"   : "?????????? ????????????" // zoom out button tooltip
          ,"slideshowTooltip" : "?????????? ??????" // zoom out button tooltip
          ,"flipsoundTooltip" : "??????????" // page flip sound button tooltip
          ,"fullscreenTooltip": "?????????? ?????? ????????????" // fullscreen button tooltip
          ,"thumbnailsTooltip": "????????????????" // thumbnails button tooltip
          ,"tocTooltip"       : "???????? ??????????????????" // show/hide table of contents button tooltip
          ,"downloadTooltip"  : "?????????? ?????? PDF" // download button tooltip
          ,"homeTooltip"      : "???????????? ????????????????" // home button tooltip
          ,"shareTooltip"     : "????????????????" // share button tooltip
  
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
  
     $("#book").wowBook( bookOptions ); // create the book
  
  
     
     // How to use wowbook API
     // var book=$.wowBook("#book"); // get book object instance
     // book.gotoPage( 4 ); // call some method
  
    })
   </script>
  </body>
  </html>';


  $remove = array('??', '??', '??', '??', '??', '??', '??', '??', '??', '??');
 
  $poetry=0;
  $count=1;  //???????????? ???????????? ?????????????? ?????? ??????
  $page=1;  
  $lesson=0;
  $line=0;
  $text='';
  $check_photo=0;//???????????? ???????????? ?????? ?????????? ???????? ???? ???????? 
  $video_id=0;
  $videos=array();
  // $xmll=simplexml_load_file('maged.xml');
  // $xmll=simplexml_load_file('realwordd.xml');

  $xmlll=simplexml_load_file('word47.xml');
  // foreach ($xmlll->children() as $child)
  // {
  
  //   if($child->getName()=="para"){
  //       echo"para"."<br>";
  //   }
  //   if($child->getName()=="informaltable"){
  //     echo"informaltable true"."<br>";
  // }
  // if($child->getName()=="title"){
  //     echo"??????????????"."<br>";
  // }
  
   
 
  



  $myfile = fopen("lessons/lesson".$count.".html", "w") or die("Unable to open file!");       
  // foreach($xmll as $para){
    foreach ($xmlll->children() as $child)
    {
      if($child->getName()=="para"){
        //       echo"para"."<br>";
        if (!empty($child)){
          if(str_starts_with($child, '??????????')){
            
           
      
         $Name_Lesson=ltrim(strstr($child,":"),':');
         $lesson++;
         //echo $Name_Lesson;
           
            if ($count !=0){
              if(!($page%2==0)){
                $text.=' </div></div><div id="page"><div class="top"></div><div dir="rtl" class="text-contaner">';
              }
              $text.=' </div></div>';
              $text = $pageTop.$text.$footer;
             fwrite($myfile,$text);
             $text="";
             $page=1;
             $line=0;
             $check_photo=0;
            
             $myfile = fopen("lessons/lesson".$lesson.".html", "w") or die("Unable to open file!");   
            }
      
              
      
        $text.='<div id="page1">
              
        <div class="top"><div align="center" class="??????-??????????">
       
          <p class="??????-??????????"><a name="??????????_????????_????????????">'.$Name_Lesson.' </a></p>
         
      
        </div></div>
       
        <div dir="rtl" class="text-contaner">
      
        
        ';
        
        $videos=array("0_wb9cupgq","0_93risyfy","0_v1gjqvk8","0_vuus1him","0_aqc1g6oq","0_eugtahwn",
            "0_ey63juwy","0_s46orl6h","0_e55axir7","0_f3cn7q3d","0_wb5mtq4v","0_m6behpyq",
             "0_0kig3l2h","0_sqydl1pc","0_scmw51db","0_m2okd300","0_vz75aeex","0_28etwpig",
            "0_6lend3n4","0_z8p7yx6h","0_j60cr28a","0_j58mj9yu","0_yhosllqh","0_hqf9k3sg",
            "0_9qrys8it","0_rrxqoid3","0_puf9noiz","0_kar0f2ui","0_ac8olvxi","0_vb58l1i1", 
            "0_wyga4jol","0_00cieb8l","0_sh0bt6ng","0_2qcwt6vy","0_bg3yra96","0_6t959qtm",
            "0_pt0sq8bm",  "0_eosmw5yn","0_zmerk8yk","0_dnprdl95","0_86by6ypn","0_3bh8g64v",
            "0_ma6xasr2","0_7alfct54","0_cdps7sas","0_siti4126","0_weznh5sd");
        
        
        
        $text.="<p align='center' class='????????-????????????????'><a data-fancybox='' data-type='iframe' href='https://reach.esteam.rocks/p/102/sp/10200/embedIframeJs/uiconf_id/23448169/partner_id/102?iframeembed=true&playerId=kaltura_player_1591890467&entry_id=".$videos[$video_id]."' class='btn btn-primary'>???????? ?????? ?????????????? ?????????????? ????????????????</a></p>";
        
        //$count++;
        $line++;
        $video_id++; 
        continue;
          }
        
      
      
          
          if ($line>20){  
            $page++;
            $text.=' </div></div><div id="page"><div class="top"></div><div dir="rtl" class="text-contaner">';
            $line=0;
      
          }
      
          
          if (str_starts_with($child, 'A'))
          {
            
        
      
            if((17 <= $line) && ($line <= 21)){
              $page++;
      
              $text.=' </div></div><div id="page"><div class="top"></div><div dir="rtl" class="text-contaner">';
              $line=0;
      
            }
      
      
      
      
          $text.='   <p class="????????"><a name="lesson-1B" class="??????????">'.trim($child, "A").' </a>
      
              </p>';
      
              $line++;  
        //$count++;
        continue;
        }
        
        if (str_starts_with($child, 'h'))
        {
          
      
      if (strchr($child,"p")) 
      {
      
        if ($check_photo==0) {
       
          $text.='<p align="center" class="????????-????????????????"><a data-fancybox="images" href="assets/pp/'.$child.'.JPG">???????? ?????? ?????????????? ?????????????? ??????????????????</a></p>';
          $check_photo++;
          
          continue;
        }
        if ($check_photo!=0){
          $text.='<p align="center" class="????????-????????????????"><a data-fancybox="images"  style="display:none;" href="assets/pp/'.$child.'.JPG">???????? ?????? ?????????????? ?????????????? ??????????????????</a></p>';
        
        continue;
        }
        
       
       
      
      
      }
      
      if (strchr($child,"v")) continue;
      
  
       
      }
      
        
      
        if (!(str_starts_with($child, 'A'))){
      
         
      
         
        
       
               
          $plines=0;
                $plines=ceil(mb_strlen(str_replace($remove, '', $child),'UTF-8')/60);
      
                $line=$line+$plines;
                $text.='<p class="????????-????????????">
                '.$child.' 
             </p>';
      
      
               
              
      
               //   $count++;
                  
                  continue;
              
      
                  
      
        }
      
          
        
        
      
      
      
                
        }
        
       

          }
         
          if($child->getName()=="informaltable"){
           
          foreach($child->tgroup->tbody->row as $row){
           foreach($row->entry as $entry){
          
            // echo $entry->para;
             if(strchr($entry->para,"*")) continue;
            $text.='<p class="poetry">
               '.$entry->para.'';
                   
        
        
           }
          
          }

          
           }
          
        }

  $text.=' </div></div>';
  $text = $pageTop.$text.$footer;
  
fwrite($myfile,$text);
       
fclose($myfile);
   return view("test");
    

          


}
   
}