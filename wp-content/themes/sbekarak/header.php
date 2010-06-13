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
</head>

<body>

<div id="header">
<?
global $options;
foreach ($options as $value) {
    if (get_settings( $value['id'] ) === FALSE) { $$value['id'] = $value['std']; } else { $$value['id'] = get_settings( $value['id'] ); }
}
?>
    <h1><a href="<?php echo get_settings('home'); ?>/"><img src="<?php bloginfo('template_url'); ?>/images/title.png" alt="sbekarak"></a></h1>
	
	<ul id="nav">
		<li><a href="/catalog_fr">Acceuil</a></li>
		<li><a href="/profil/" title="Profil">Profil</a></li>
		<li><a href="/presse/" title="Presse">Presse</a></li>
		<li><a href="/contact/" title="Contact">Contact</a></li>
		<li><a href="/sbekarak_catalog_2010.pdf" title="Catalogue">Catalogue (pdf)</a></li>
		<li><a href="/products-page/checkout/">Panier (<?php echo wpsc_cart_item_count(); ?>)</a></li>
	</ul>

</div>

<div style="clear:both;"></div>
<div id="wrap">
    <?php if($vc_banner) { ?><div class="splash"><?php if($vc_link) { ?><a href="<?php echo $vc_link;?>"><?php } ?><img src="<?php echo $vc_banner;?>" /><?php if($vc_link) { ?></a><?php } ?></div><?php } ?>
