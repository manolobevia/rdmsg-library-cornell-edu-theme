<div class="cornell-brand hidden-xs">
  <div class="container">
    <div class="row">
      <div class="cornell-logo">
        <div class="cu-logo"> <img src="/sites/all/themes/rdmsgtheme/img/layout/cul-logo-white.gif"> <a id="insignia-link" href="http://www.cornell.edu/">Cornell Insignia</a>
          <div class="unit-signature-links"> <a id="cornell-link" href="http://www.cornell.edu/">Cornell University</a> <a id="unit-link" href="/">Cornell University Library</a> </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="navbar">
<div class="navbar-header">
  <div class="mobile-insignia visible-xs"> <a href="http://www.cornell.edu"><img src="/sites/all/themes/rdmsgtheme/img/layout/insignia.png" alt=""></a> </div>
  <a class="navbar-brand visible-xs" href="#">Cornell University Library</a> </div>
<div class="navbar">
  <div class="container">
    <div class="row">
      <div class="col-sm-4 pull-left"> <a href="/"><img src="/sites/all/themes/rdmsgtheme/img/rdmsgnewlogo.jpg" class="img-responsive hidden-phone"></a> </div>
      <div class="col-sm-8 pull-right ">
        <div class="row">
          <div class="col-sm-12"><?php print render($page['search-box']); ?></div>
        </div>
          <div class="row">
            <div class="nav navbar-nav pull-right nav-rdmsg" > <?php print render($page['navigation']); ?> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="main-content" id="maincontent">
<div class="container">
  <div class="row">
    <div class="breadcrumb-wrapper"><!--TO DO: SEMANTIC--> 
      <?php print render($breadcrumb); ?> </div>
  </div>
  <?php
      // Render the sidebars to see if there's anything in them.
      $sidebar  = render($page['sidebar']);
    ?>
  <?php // if there is a sidebar, then create two column layout ?>
  <?php if ($sidebar): ?>
  <div class="row primary-wrapper"> <?php print render($tabs); ?> <?php print $messages; ?>
    <div class="col-lg-3 col-sm-3">
      <div class="news secondary-feature"> <?php print render($page['home-sidebar']); ?> </div>
    </div>
    <?php print render($page['highlighted']); ?>
    <?php if ($action_links): ?>
    <ul class="action-links">
      <?php print render($action_links); ?>
    </ul>
    <?php endif; ?>
    <div class="col-lg-7 col-sm-7"> <?php print render($page['content']); ?> </div>
    <!--/main-text-->
    
    <div class="col-lg-2 col-sm-2"> <?php print render($page['sidebar']); ?> </div>
    <!--/sidebar--> 
    
  </div>
  <?php else: ?>
  <div class="row primary-wrapper rdmsg-header">
    <div class="container">
      <div class="row"> 
        <!-- <div class="rdmsg-logo">
            <img src="/sites/all/themes/rdmsg/img/logo.png">
          </div>-->
        <div class="nav-rdmsg"> <?php print render($page['header']); ?> </div>
      </div>
      <?php print render($tabs); ?> <?php print render($page['highlighted']); ?> <?php print $messages; ?> <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
      <ul class="action-links">
        <?php print render($action_links); ?>
      </ul>
      <?php endif; ?>
      <?php if ($title): ?>
      <h1><?php print $title; ?></h1>
      <?php endif; ?>
      <?php print render($page['content']); ?> </div>
    <?php endif; ?>
  </div>
  <!-- /container --> 
</div>
<!-- /main-content -->

<footer>
  <div class="container">
    <div class="row">
      <div class="footer-primary"> <?php print render($page['footer-primary']); ?> </div>
    </div>
  </div>
</footer>