<?php
/*
+ ----------------------------------------------------------------------------+
|     e107 website system
|     Bootstrap 3 Theme for e107 v2.x

|     ¦Steve Dunstan 2001-2002
|     http://e107.org
|     jalist@e107.org
|
|     Released under the terms and conditions of the
|     GNU General Public License (http://gnu.org).
|
|     $Source: /e107_themes/BS_Gaming_01/theme.php,v $
|     $Revision: 1.00 $
|     $Date: 2015/11/07 $
|     $Author: fizi $
+----------------------------------------------------------------------------+
*/
if (!defined('e107_INIT')) { exit; }

// [multilanguage]
e107::lan('theme'); // loads e107_themes/CURRENT_THEME/languages/English.php (when English is selected)

define("BOOTSTRAP", 	3);
define("FONTAWESOME", 	4);
define('VIEWPORT', 		"width=device-width, initial-scale=1.0");   

e107::css("theme", 			"css/bootstrap.css"); // 3.3.7  
e107::css('theme', 			'css/bootstrap-theme.css'); // 3.3.7
e107::css("theme", 			"css/font-awesome.css"); // 4.7.0 
e107::css("theme", 			"css/animate.css");  // 3.5.1 
e107::css("theme", 			"css/bootstrap-calendar.css");  // Bootstrap 3 CSS Document for Calendar 


e107::js("theme", 			"js/jquery-3.1.1.js"); // 3.1.1
e107::js("theme", 			"js/jquery-migrate-3.0.0.js"); // 3.0.0
e107::js("theme", 			"js/jquerynoconflict.js");

e107::js("theme", 			"js/bootstrap.js"); // 3.3.7
 
e107::js("theme", 			"js/jquery.lettering.js");  // 0.7.0 
  
e107::js("theme", 			"js/custom.js");
                 
e107::js("footer-inline", 	"$('.e-tip').tooltip({container: 'body'})"); // activate bootstrap tooltips. 

define('OTHERNEWS_COLS',false); // no tables, only divs. 
define('OTHERNEWS_LIMIT', 3); // Limit to 3. 
define('OTHERNEWS2_COLS',false); // no tables, only divs. 
define('OTHERNEWS2_LIMIT', 3); // Limit to 3. 

 
// applied before every layout.
$LAYOUT['_header_'] = "  
<div id='header' class='navbar navbar-default navbar-fixed-top'> 
  <div class='container'> 
    <div class='navbar-header'>
      <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.navbar-collapse'>
        <span class='sr-only'>Toggle navigation</span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>
    </div>
    <div class='collapse navbar-collapse'>                 
      {NAVIGATION=main}
      <ul class='nav navbar-nav navbar-right'>    
        {BOOTSTRAP_USERNAV: placement=top}       
      </ul> 
    </div>
  </div>
</div>
<div class='container'>
  <div class='header-caption'>
    <div class='pull-left'>
      <div class='sitename'><a href='".e_HTTP."index.php' title='{SITENAME}'>{SITENAME}</a></div>
      <div class='sitetag'>{SITETAG}</div>
    </div>
  </div>
</div>	
";

// applied after every layout. 
$LAYOUT['_footer_'] = "
<div class='container'> 
  <div id='footer-menus'>
    <div class='row'>
      <div class='col-md-4'>
        {SETSTYLE=footermenu}
        {MENU=3}
      </div>
      <div class='col-md-4'>
        {SETSTYLE=footermenu}
        {MENU=4}
      </div>
      <div class='col-md-4'>
        {SETSTYLE=footermenu}
        {MENU=5}
      </div>
    </div>
  </div>
  <div id='footer-navbar' class='navbar'>
    <div class='row'>
      <div class='col-md-6 col-sm-12'>
        {NAVIGATION=footer}
      </div>
      <div class='col-md-6 col-sm-12'>
        <div class='site-info'>
          {SITEDISCLAIMER}
          {THEME_DISCLAIMER}
        </div>
      </div>
    </div>  
  </div>        
  <a href='#' class='movetotop'><span class='glyphicon glyphicon-chevron-up'></span></a>
</div>
";


// Default layout 
$LAYOUT['BS_Gaming_01_sidebar_left'] = " 
<div class='container'>
  <div class='content-topwrapper'>
    <div class='pull-left col-xs-12 col-sm-6 col-lg-4'>
      {SEARCH}
    </div>
    <div class='pull-right col-xs-12 col-sm-6 col-lg-8 text-right'>  
      {XURL_ICONS}
    </div>
  </div>
</div>
<div class='hidden-xs container'>
  <div class='slider-wrap'>
    {SETSTYLE=slider}
    {MENU=featurebox}
  </div>  
</div>
<div class='container'>
  <div class='content-wrapper'>
    <div class='row'>
      <div class='col-md-4'>
        {SETSTYLE=leftside}
        {MENU=1}
        {MENU=2}
      </div>
      <div class='col-md-8'>
        <div id='banner-panel1'>
          {SETIMAGE: w=600}
          {BANNER}
        </div>
        <div class='page-content-rightbox'> 
          {SETSTYLE=rightside}
{---}       
        </div>
      </div>
    </div>
  </div> 
</div>        
";

// Custom layout for Forum's pages 
$LAYOUT['BS_Gaming_01_full_width'] = " 
<div class='container'>
  <div class='content-topwrapper'>
    <div class='pull-left col-xs-12 col-sm-6 col-lg-4'>
      {SEARCH}
    </div>
    <div class='pull-right col-xs-12 col-sm-6 col-lg-8 text-right'>  
      {XURL_ICONS}
    </div>
  </div>
</div>
<div class='hidden-xs container'>
  <div class='slider-wrap'>
    {SETSTYLE=slider}
    {MENU=featurebox}
  </div>  
</div>
<div class='container'>
  <div class='content-wrapper'>
    <div class='row'>
      <div class='col-md-12'>
        <div class='page-content-rightbox'> 
          {SETSTYLE=rightside}
{---}       
        </div>
      </div>
    </div>
  </div> 
</div>        
";


function rand_tag(){
        $tags = file(e_BASE."files/taglines.txt");
        return stripslashes(htmlspecialchars($tags[rand(0, count($tags))]));
}


//        [newsstyle]
/* NEWSSTYLE IS UNUSED FOR NOW */
/* NEWSSTYLE IS IN THEME FOLDER/TEMPLATES/NEWS/news_template.php */

      

//  [list of news category]
/* NEWSLISTSTYLE IS UNUSED FOR NOW */
/* NEWSLISTSTYLE IS IN THEME FOLDER/TEMPLATES/NEWS/news_template.php */



// define('ICONPRINTPDF', 'pdf.png');
// define('ICONMAIL', 'email.png');
// define('ICONPRINT', 'printer.png');
// define('ICONSTYLE', 'float: left; border:0');
define('COMMENTLINK', LAN_THEME_1);
define('COMMENTOFFSTRING', LAN_THEME_2);
define('PRE_EXTENDEDSTRING', '<div class="btn btn-inverse">');
define('EXTENDEDSTRING', LAN_THEME_3);
define('POST_EXTENDEDSTRING', '</div>');
define('TRACKBACKSTRING', LAN_THEME_7);
define('TRACKBACKBEFORESTRING', '&nbsp;|&nbsp;');

define('BULLET', "bullet.png");
define('bullet', "bullet.png");


// linkstyle
/* LINKSTYLE IS UNUSED FOR NOW */
/* LINKSTYLE IS IN THEME FOLDER/TEMPLATES/navigation_template.php */


/**
 * @param string $caption
 * @param string $text
 * @param string $id : id of the current render
 * @param array $info : current style and other menu data. 
 */
function tablestyle($caption, $text, $id='', $info=array()){
       
//  global $style; // no longer needed.

  $style = $info['setStyle'];
  
  echo "<!-- tablestyle: style=".$style." id=".$id." -->\n\n";
	
	$type = $style; 
  
  if($style == 'slider'){
    echo "{$text}";
  }
  else if($style == 'leftside'){ 
    echo "<div class='leftmenu-box'>
            <div class='leftmenu-box-title'>          		                                                      
              <h2>{$caption}</h2>
            </div>
            <div class='leftmenu-box-body'>{$text}</div> 
          </div>";
  }
  else if($style == 'rightside'){ 
    echo "<div class='rightmenu-box'>  
            <div class='rightmenu-box-title'>        		                                                      
              <h2>{$caption}</h2>
            </div>
            <div class='rightmenu-box-body'>{$text}</div> 
          </div>";
  }
  else if($style == 'footermenu'){   
    echo "<div class='footermenu-box'>  
            <div class='footermenu-box-title'>         		                                                      
              <h2>{$caption}</h2>
            </div>
            <div class='footermenu-box-body'>{$text}</div> 
          </div>"; 
  }
  else {
    echo "<div class='othermenu-box'>
		        <div class='othermenu-box-title'>         
              <h2>{$caption}</h2>                  
            </div>		                                 
            <div class='othermenu-box-body'>{$text}</div>                       
          </div>";
	}
}

// chatbox post style
// $CHATBOXSTYLE in THEME FOLDER/templates/chatbox_menu/chat_template.php    


// Image Version Example
// $SEARCH_SHORTCODE in THEME FOLDER/search_template.php

?>