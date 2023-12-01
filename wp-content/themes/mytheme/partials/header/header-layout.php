<?php
/**
 * Main Header Layout Output
 * Have a look at framework/hooks/actions to see what is hooked into the header
 * See all header parts at partials/header/
 *
 * @package		Total
 * @subpackage	Partials/Header
 * @author		Alexander Clarke
 * @copyright	Copyright (c) 2014, Symple Workz LLC
 * @link		http://www.wpexplorer.com
 * @since		Total 1.6.0
 * @version		1.0.0
 */

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Return if header is disabled
if ( ! wpex_display_header() ) {
	return;
} ?>

<?php wpex_hook_header_before(); ?>

	<header id="site-header" class="<?php wpex_header_classes(); ?> desktop-header" role="banner">
		<?php wpex_hook_header_top(); ?>
		<div id="site-header-inner" class="container clr">
			<?php wpex_hook_header_inner(); ?>
		</div><!-- #site-header-inner -->
		<?php wpex_hook_header_bottom(); ?>
	</header><!-- #header -->
    
    
    <div class="ipad ipad-header">
	<div class="ipad-container">
    	<div class="ipad-nav ipad-float">
        
        
			<a href="#mobile-menu" class="mobile-menu-toggle"><span class="fa fa-bars"></span></a>
					
        <!--<i class="fa fa-bars" aria-hidden="true"></i>-->
        </div>
        
        <div class="ipad-logo ipad-float">
        <a href="<?php echo get_home_url(); ?>"><img src="http://edibledialect.com/wp-content//uploads/2016/10/logo-1.svg" /></a>
        
        
       
        
        </div>
        
        <div class="ipad-search ipad-float">
       <form class="searchbox" method="get" action="<?php echo get_home_url(); ?>" role="search" >
        <input type="search" placeholder="Search......" name="s" class="searchbox-input" onkeyup="buttonUp();" required>
        
        <input type="submit" class="searchbox-submit" value="GO">
        <span class="searchbox-icon"><i class="fa fa-search" aria-hidden="true"></i></span>
    </form>
        </div>
        
        <div class="ipad-social ipad-float">
        	<ul>
				<li><a href="https://www.facebook.com/edibledialect/"><img src="http://edibledialect.com/wp-content//uploads/2016/10/facebook-svg.svg"></a></li>
				<li><a href="https://twitter.com/edible_dialect"><img src="http://edibledialect.com/wp-content//uploads/2016/10/twitter-svg.svg"></a></li>
		 		<li><a href="https://www.instagram.com/edibledialect/"><img src="http://edibledialect.com/wp-content//uploads/2016/10/instagram-svg.svg"></a></li>
            </ul>
        </div>
        
        <div class="ipad-subscribe ipad-float">
       <a href="javascript:void(0)"><h3>Subscribe<br/><span>Or<br/>Give a Gift</span></h3></a>
        </div>
    </div>
</div>

<?php wpex_hook_header_after(); ?>