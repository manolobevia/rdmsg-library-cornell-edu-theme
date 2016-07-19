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
//$theme_path = base_path() . 'sites/all/themes/africana-library-cornell-edu-theme/';
$theme_path = drupal_get_path('theme',$GLOBALS['theme']) . '/';
?>


<!-- BLOCKS -->

<?php //print render($page['navigation']); ?>

<?php //print render($page['footer']); ?>




<section class="row hero">

            <div class="hero-content">

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 about">

                    <h1>RESEARCH DATA MANAGEMENT <br />SERVICE GROUP<br /><span>Comprehensive Data Management Planning & Services</span></h1>
                   

                    <p>The Research Data Management Service Group (RDMSG) is a collaborative, campus-wide organization that assists with creating and implementing data management plans, applying best practices for managing data, and finding data management services at any stage of the research process.</p>

                    <a href='#' class='button-home'>Email Us</a>

                    <a href='#' class='button-home'>Online Office Hours</a>

                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 how">


                     <div id="how-do-i">

                        <a class="how-do-i-select" href="#">How do I ...<span><i class="fa fa-angle-down" aria-hidden="true"></i></span></a>

                        <ul class="how-do-i-options">
                            <li><a href="#">Trim garlic stems</a></li>
                            <li><a href="#">Harvest potatoes early</a></li>
                            <li><a href="#">Plant tomato seeds</a></li>
                        </ul>

                    </div>
                </div>
            </div>
            
        </section>


        <header>

            <a class="cu-logo"href="http://www.cornell.edu"><img src="/<?php print $theme_path; ?>images/cornell-logo.png" /></a>
            <a class="search" href="#"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>

            <?php print render($page['main_nav']); ?>

        </header>
        

        <section class="row home-features">


            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            
                <article>

                    <header>
                    
                        <h1>RECENT NEWS</h1>

                        <h2>Cornell Geospatial Forum</h2>

                        <time itemprop="dateCreated" datetime="2016-01-29"> Jan 29, 2016</time>

                    </header>

                    <p>The second annual Cornell Geospatial Forum, a one day gathering of faculty, staff, students, and community members to discuss geospatial science and technology research and extension at Cornell and the surrounding Ithaca community, will be held Tuesday October 13th, 2015.</p>

                    <a href='#' class='button-graphic'>Read more</a>

                </article>

            </div>


            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            
                <article>

                    <header>
                    
                        <h1>RECENT NEWS</h1>

                        <h2>Cornell Geospatial Forum</h2>

                        <time itemprop="dateCreated" datetime="2016-01-29"> Jan 29, 2016</time>

                    </header>

                    <p>The second annual Cornell Geospatial Forum, a one day gathering of faculty, staff, students, and community members to discuss geospatial science and technology research and extension at Cornell and the surrounding Ithaca community, will be held Tuesday October 13th, 2015.</p>

                    <a href='#' class='button-graphic'>Read more</a>

                </article>

            </div>


            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            
                <article>

                    <header>
                    
                        <h1>RECENT NEWS</h1>

                        <h2>Cornell Geospatial Forum</h2>

                        <time itemprop="dateCreated" datetime="2016-01-29"> Jan 29, 2016</time>

                    </header>

                    <p>The second annual Cornell Geospatial Forum, a one day gathering of faculty, staff, students, and community members to discuss geospatial science and technology research and extension at Cornell and the surrounding Ithaca community, will be held Tuesday October 13th, 2015.</p>

                    <a href='#' class='button-graphic'>Read more</a>

                </article>

            </div>

        </section>

    <section class="row home-features">


            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            
                <article>

                    <header>
                    
                        <h1>RECENT NEWS</h1>

                        <h2>Cornell Geospatial Forum</h2>

                        <time itemprop="dateCreated" datetime="2016-01-29"> Jan 29, 2016</time>

                    </header>

                    <p>The second annual Cornell Geospatial Forum, a one day gathering of faculty, staff, students, and community members to discuss geospatial science and technology research and extension at Cornell and the surrounding Ithaca community, will be held Tuesday October 13th, 2015.</p>

                    <a href='#' class='button-graphic'>Read more</a>

                </article>

            </div>


            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            
                <article>

                    <header>
                    
                        <h1>RECENT NEWS</h1>

                        <h2>Cornell Geospatial Forum</h2>

                        <time itemprop="dateCreated" datetime="2016-01-29"> Jan 29, 2016</time>

                    </header>

                    <p>The second annual Cornell Geospatial Forum, a one day gathering of faculty, staff, students, and community members to discuss geospatial science and technology research and extension at Cornell and the surrounding Ithaca community, will be held Tuesday October 13th, 2015.</p>

                    <a href='#' class='button-graphic'>Read more</a>

                </article>

            </div>


            <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
            
                <article>

                    <header>
                    
                        <h1>RECENT NEWS</h1>

                        <h2>Cornell Geospatial Forum</h2>

                        <time itemprop="dateCreated" datetime="2016-01-29"> Jan 29, 2016</time>

                    </header>

                    <p>The second annual Cornell Geospatial Forum, a one day gathering of faculty, staff, students, and community members to discuss geospatial science and technology research and extension at Cornell and the surrounding Ithaca community, will be held Tuesday October 13th, 2015.</p>

                    <a href='#' class='button-graphic'>Read more</a>

                </article>

            </div>

        </section>




        <footer>

            <?php print render($page['footer']); ?>

        </footer>


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->

        <!-- Latest compiled and minified JavaScript 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>-->








