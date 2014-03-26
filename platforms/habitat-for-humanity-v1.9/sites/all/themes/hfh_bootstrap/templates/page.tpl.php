<div id="headerWrapper">
<div class="container">
<div id="header">
   <div class="row-fluid" >
    <div class="span4"> 
      <?php if ($logo): ?>
        <a class="logo pull-left" href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>">
          <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
        </a>
      <?php endif; ?>
    </div>
    <div class="span4">
      <?php if ($page['headerMiddle']): ?>
        <?php print render($page['headerMiddle']); ?>
      <?php endif; ?>
    </div>
   <div class="span4">
      <?php if ($page['headerRight']) { ?>
        <?php print render($page['headerRight']); ?>
      <?php } else { ?>
     <div class="row-fluid" id="mini-nav" style="padding-top:20px; ">
     </div>
      <?php } ?>
   </div>
   </div>
  </div>
</div>
</div>
</div>
<nav id="navbar" role="banner" class="navbar">
  <div class="navbar-inner">
    <div class="container" id="menu-bar">
      <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <?php if ($site_name): ?>
        <h1 id="site-name">
          <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" class="brand"><?php print $site_name; ?></a>
        </h1>
      <?php endif; ?>

      <?php if ($primary_nav || $secondary_nav || !empty($page['navigation'])): ?>
        <div class="nav-collapse">
	  <a class="brand" href="/home"><img src="/sites/all/themes/hfh_bootstrap/HfH_logo_Wh_Sm.png" alt="Habitat for Humanity"></a>
          <nav role="navigation">
            <?php if ($primary_nav): ?>
              <?php print render($primary_nav); ?>
            <?php endif; ?>
            <?php if (!empty($page['navigation'])): ?>
              <?php print render($page['navigation']); ?>
            <?php endif; ?>
            <?php if ($secondary_nav): ?>
              <?php print render($secondary_nav); ?>
            <?php endif; ?>
          </nav>
        </div>
      <?php endif; ?>
    </div>
  </div>
</nav>

<?php 
$bgColor = theme_get_setting('background_color'); 
switch ($bgColor) {
  case 0:
   $background = 'background:#005596'; 
   break;
  case 1:
   $background = 'background:#FFF';
   break;
  case 2:
    $background = 'background:#3986d9; background-image: -webkit-gradient(linear, 0% 0%, 0% 100%, from(#3986d9), to(#1d5ea0)); background-image: -webkit-linear-gradient(top, #3986d9, #1d5ea0); background-image: -moz-linear-gradient(top, #3986d9, #1d5ea0);background-image:-ms-linear-gradient(top, #3986d9, #1d5ea0); background-image: -o-linear-gradient(top, #3986d9, #1d5ea0);';
   break;
  case 3:
   $background = 'background:#005596 url(http://d2apcanm8vupu6.cloudfront.net/images/blueprint_003.jpg);';
   break;
}
?>
<div id="background" style='<?php echo $background;?>' >
<div class="container">
<div class="row">
<div class="span3">
    <?php if ($page['sidebar_first']): ?>
        <?php print render($page['sidebar_first']); ?>
    <?php endif; ?>

</div>
<div class="span9 content-column">
<div id="content">
  <!--header role="banner" id="page-header" -->
    <!--?php if ( $site_slogan ): ? -->
      <!--p class="lead"><?php print $site_slogan; ?></p -->
    <!--?php endif; ?-->
    <!--?php print render($page['header']); ?-->
  <!--/header -->
  <div class="row-fluid">
    <!--section class="<?php print _bootstrap_content_span($columns); ?>"-->
    <section class="span12" <?php if (!drupal_is_front_page()) { ?> style ="background-color:white; padding:20px; margin-bottom:20px; overflow:auto;-webkit-border-radius: 4px;-moz-border-radius: 4px;border-radius: 4px;" <?php } ?>>
      <?php if ($page['highlighted']): ?>
        <div class="highlighted hero-unit"><?php print render($page['highlighted']); ?></div>
      <?php endif; ?>  
      <!--?php if ($breadcrumb): print $breadcrumb; endif;?-->
      <a id="main-content"></a>
      <?php print render($title_prefix); ?>
      <?php if ($title): 
        if (!drupal_is_front_page()) { ?>
           <h1 class="page-header"><?php print $title; ?></h1>
       <?php } ?>
      <?php endif; ?>
      <?php print render($title_suffix); ?>
      <?php print $messages; ?>
      <?php if ($tabs): ?>
        <div style="background-color:white;">
        <?php print render($tabs); ?>
        </div>
      <?php endif; ?>
      <?php if ($page['help']): ?> 
        <div class="well"><?php print render($page['help']); ?></div>
      <?php endif; ?>
      <?php if ($action_links): ?>
        <ul class="action-links"><?php print render($action_links); ?></ul>
      <?php endif;?>
      <?php if ($breadcrumb): ?>
        <div style=" <?php $style="padding:20px;background-color:white;margin-bottom:20px;padding-bottom:20px;min-height:".(empty($tabs['#primary']) ? 350 : 290)."px;"; echo $style; ?> ">
      <?php endif;?>
      <?php print render($page['content']); ?>
      <?php
	if (drupal_is_front_page()) {
      ?>
        <div class="row-fluid" >
	  <div class="span12">
	     <?php if ($page['main_slider']): ?>
        	<?php print render($page['main_slider']); ?>
    	     <?php endif; ?>
	  </div>
       </div>
       <div class="row-fluid">
	  <div class=" <?php $span = "span".($page['state_news'] ? 6 : 12); echo $span; ?> ">
	     <?php if ($page['local_news']): ?>
                <?php print render($page['local_news']); ?>
             <?php endif; ?>
	  </div>
        <?php if ($page['state_news']): ?>
          <div class="span6">
                <?php print render($page['state_news']); ?>
          </div>
	  <?php endif; ?>
       </div>
      <?php
	}
      ?>
      <?php if ($breadcrumb): ?>
        </div>
      <?php endif;?>

   </section>
      
    <?php if ($page['sidebar_second']): ?>
      <aside class="span3" role="complementary">
        <?php print render($page['sidebar_second']); ?>
      </aside>  <!-- /#sidebar-second -->
    <?php endif; ?>
</div>
  </div>
</div>
</div>
</div>
</div>
<div class="container">
<div class="row-fluid">
<?php if ($page['sponsors']): ?>
  <div class="span12">
    <div class="callWraper">
     <div class="row">
       <div class="span12"
          <?php print render($page['sponsors']); ?>
       </div>
     </div><!-- /#sponsors -->
    </div>
  </div>
<?php endif; ?>
</div>
</div>
<div class="footerWraper">
  <footer class="footer container">
    <div class="row-fluid">
      <div class="span4">
        <?php if ($page['footer']): ?>
           <?php print render($page['footer']); ?>
        <?php endif; ?>
      </div>
      <div class="span4">
        <?php if ($page['footerMiddle']): ?>
           <?php print render($page['footerMiddle']); ?>
        <?php endif; ?>
      </div>
      <div class="span4">
        <?php if ($page['footerRight']): ?>
           <?php print render($page['footerRight']); ?>
        <?php endif; ?>
      </div>
    </div> 
  </footer>
</div>

