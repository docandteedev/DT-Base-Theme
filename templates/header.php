<div class="off-canvas-wrapper" id="smooth-state-container">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
      <?php get_template_part('templates/partials/navigation/navbar-offcanvas-menu'); ?>
      <div class="off-canvas-content" data-off-canvas-content>
          <header data-sticky-container>
       
            <?php get_template_part("templates/partials/navigation/navbar-titlebar") ?>
            <div class="sticky" data-sticky data-margin-top="0" style="width:100%;">    
                <?php get_template_part("templates/partials/navigation/navbar-topnav"); ?>  
                <?php get_template_part("templates/partials/navigation/navbar-" . get_option("navbar_type")); ?>
            </div>      
          </header>