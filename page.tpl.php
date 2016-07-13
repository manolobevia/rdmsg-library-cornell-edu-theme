<?php
/**
 * @file
 * Default theme implementation to display a single Drupal page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.tpl.php template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - $base_path: The base URL path of the Drupal installation. At the very
 *   least, this will always default to /.
 * - $directory: The directory the template is located in, e.g. modules/system
 *   or themes/bartik.
 * - $is_front: TRUE if the current page is the front page.
 * - $logged_in: TRUE if the user is registered and signed in.
 * - $is_admin: TRUE if the user has permission to access administration pages.
 *
 * Site identity:
 * - $front_page: The URL of the front page. Use this instead of $base_path,
 *   when linking to the front page. This includes the language domain or
 *   prefix.
 * - $logo: The path to the logo image, as defined in theme configuration.
 * - $site_name: The name of the site, empty when display has been disabled
 *   in theme settings.
 * - $site_slogan: The slogan of the site, empty when display has been disabled
 *   in theme settings.
 *
 * Navigation:
 * - $main_menu (array): An array containing the Main menu links for the
 *   site, if they have been configured.
 * - $secondary_menu (array): An array containing the Secondary menu links for
 *   the site, if they have been configured.
 * - $breadcrumb: The breadcrumb trail for the current page.
 *
 * Page content (in order of occurrence in the default page.tpl.php):
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title: The page title, for use in the actual HTML content.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 * - $messages: HTML for status and error messages. Should be displayed
 *   prominently.
 * - $tabs (array): Tabs linking to any sub-pages beneath the current page
 *   (e.g., the view and edit tabs when displaying a node).
 * - $action_links (array): Actions local to the page, such as 'Add menu' on the
 *   menu administration interface.
 * - $feed_icons: A string of all feed icons for the current page.
 * - $node: The node object, if there is an automatically-loaded node
 *   associated with the page, and the node ID is the second argument
 *   in the page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - $page['help']: Dynamic help text, mostly for admin pages.
 * - $page['highlighted']: Items for the highlighted content region.
 * - $page['content']: The main content of the current page.
 * - $page['sidebar_first']: Items for the first sidebar.
 * - $page['sidebar_second']: Items for the second sidebar.
 * - $page['header']: Items for the header region.
 * - $page['footer']: Items for the footer region.
 *
 * @see bootstrap_preprocess_page()
 * @see template_preprocess()
 * @see template_preprocess_page()
 * @see bootstrap_process_page()
 * @see template_process()
 * @see html.tpl.php
 *
 * @ingroup themeable
 */
?>

<?php
//$theme_path = base_path() . 'sites/all/themes/africana_library_cornell_edu_theme/';
$theme_path = drupal_get_path('theme',$GLOBALS['theme']) . '/';
?>

<!-- <?php print $theme_path; ?> -->


<?php print $messages; ?>

<?php if (!empty($tabs)): ?>
    <?php print render($tabs); ?>
<?php endif; ?>

<?php if (!empty($page['help'])): ?>
    <?php print render($page['help']); ?>
<?php endif; ?>












<section class="row hero interior-pages">

            <div class="hero-content">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 about">

                    <h1>RESEARCH DATA MANAGEMENT SERVICE GROUP<br /><span>Comprehensive Data Management Planning & Services</span></h1>

                </div>
            </div>
            
        </section>



        <header>

            <a class="cu-logo"href="http://www.cornell.edu"><img src="/<?php print $theme_path; ?>images/cornell-logo.png" /></a>
            <a href=""><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>


            <nav class="navbar navbar-default">
            
                <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->

                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                        <ul class="nav navbar-nav">
                            <li class="active"><a href="/">Home</a></li>
                            <li><a href="/content/about">About</a></li>
                            <li><a href="/services">Services</a></li>
                            <li><a href="/content/data-management-planning">Data Management Planning</a></li>
                            <li><a href="/content/best-practices">Best Practices </a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
            
        </header>
        

    <section class="row interior-content">


        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

            <!--<div class="row">
    <div class="nav navbar-nav pull-right nav-rdmsg" > <?php print render($page['navigation']); ?> </div>
</div>-->
            
             <div class="row">
    <div class="breadcrumb-wrapper"><!--TO DO: SEMANTIC--> 
      <?php print render($breadcrumb); ?>
    </div>
 </div>

 
            <h3><?php print $title ?></h3>
        
        	<?php print render($page['content']); ?>
           
        </div>




    </section>




        <footer>

            <div class="social-media">
                
                <a href="#"><img src="/<?php print $theme_path; ?>images/icon-twitter.png" alt=""></a>
                <a href="#"><img src="/<?php print $theme_path; ?>images/icon-flicker.png" alt=""></a>

            </div>

            <nav>
                <ul>
                    <li><a class="active" href="#">Home</a> / </li>
                    <li><a href="#">Contact RDMSG</a> / </li>
                    <li><a href="#">Office Hours</a> / </li>
                    <li><a href="#">Join our mailing list</a> / </li>
                    <li><a href="#">Privacy Statement</a> / </li>
                    <li><a href="#">FAQ</a> / </li>
                    <li><a href="#">Site Map</a></li>
                </ul>
            </nav>

            <p>Creative Commons License: This work is licensed under a Creative Commons Attribution 4.0 International License / <a href="#" title="">Image Credits</a></p>

        </footer>




