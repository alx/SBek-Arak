<?php
/*
Template Name: Home
*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="distribution" content="global" />
<meta name="robots" content="follow, all" />
<meta name="language" content="en" />

<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

<script type="text/javascript"><!--//--><![CDATA[//><!--
sfHover = function() {
	if (!document.getElementsByTagName) return false;
	var sfEls = document.getElementById("nav").getElementsByTagName("li");
	for (var i=0; i<sfEls.length; i++) {
		sfEls[i].onmouseover=function() {
			this.className+=" sfhover";
		}
		sfEls[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
		}
	}
}
if (window.attachEvent) window.attachEvent("onload", sfHover);
//--><!]]></script>
<script type='text/javascript' src='/wp-content/themes/sbekarak/jquery.elementstack.js'></script> 
</head>

<body>
    
    <div class="entete1" align="center"><img src="../kadomaru-gif/HEADTOP.gif" /></div> 
    <div class="entete" align="center">SBek Arak</div> 
    <div class="entete2" align="center"><img src="../kadomaru-gif/HEADBOTTOM.gif" /></div> 
    <div class="footer1"><img src="../kadomaru-gif/FOOTTOP.gif" /><div> 
    <div class="footer a"> 
    <table align="center" cellpadding="5"> 
    <tr> 
    <td><a href="../catalogue.html">English</a></td> 
    <td><a href="../fr_catalogue.html">Français</a></td> 
    <td><a href="../it_catalogue.html">Italiano</a></td> 
    <td><a href="../jp_catalogue.html">Japanese</a></td> 
    </tr> 
    <tr> 
    <td colspan="4"><a href="">...UNDER CONSTRUCTION...</a></td> 
    </tr> 
    </table> 
    </div> 
    <div class="footer2"><img src="../kadomaru-gif/FOOTBOTTOM.gif" /></div> 
    </center>
                                    
    <?php do_action('wp_footer'); ?>

</body>
</html>