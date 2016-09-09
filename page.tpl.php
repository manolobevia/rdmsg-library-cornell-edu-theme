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





<section class="row hero interior-pages">

            <div class="hero-content">

                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 about">

                    <h1>RESEARCH DATA MANAGEMENT SERVICE GROUP<br /><span>Comprehensive Data Management Planning & Services</span></h1>

                </div>
            </div>
            
        </section>



        <header>

            <a class="cu-logo"href="http://www.cornell.edu"><img src="/<?php print $theme_path; ?>images/cornell-logo.png" /></a>
            <a class="search" href="#"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>

            <?php print render($page['main_nav']); ?>
            
        </header>

        <aside class="search-banner">

            <h2>Search</h2>

            <form accept-charset="UTF-8" id="search-form" method="post" action="/search/node" class="search-form clearfix">
                <div>
                    <div id="edit-basic" class="form-wrapper form-group">
                        
                        <div class="input-group">

                            <input type="text" maxlength="255" size="40" value="" name="keys" id="edit-keys" class="form-control form-text" placeholder="Search">

                            <span class="input-group-btn">

                            <button class="btn btn-default" type="submit"><i aria-hidden="true" class="icon glyphicon glyphicon-search"></i></button>

                            </span>

                        </div>

                        <!--<button type="submit" value="Search" name="op" id="edit-submit" class="element-invisible btn btn-primary form-submit">Search</button>-->

                    </div>

                        <input type="hidden" value="form-91yuMdF26jPxhk15D3oIkVZItXRtVfQAr0XJu6xi3Ns" name="form_build_id">
                        <input type="hidden" value="search_form" name="form_id">
                </div>
            </form>

            <a href="#" class="close-search-banner"><i class="fa fa-times-circle-o" aria-hidden="true"></i></a>

        </aside>
        

    <section class="row interior-content">


        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

           

            <?php if (!empty($tabs)): ?>
                <?php print render($tabs); ?>
            <?php endif; ?>


            <h2 class="title"><?php print $title ?></h2>
            
            <?php print render($page['content']); ?>

           
        </div>




    </section>




        <footer>

            <?php print render($page['footer']); ?>

        </footer>



 <div class="row">
    <div class="breadcrumb-wrapper"><!--TO DO: SEMANTIC--> 
      <?php print render($breadcrumb); ?>
    </div>
 </div>


