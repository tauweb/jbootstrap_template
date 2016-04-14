<!-- Header -->
<header class="header" role="banner">
<?php include 'header-top-menu.php'; ?>
<!-- <div class="<?php echo $classContainer; ?>"> -->
<div class="header-inner clearfix">

<div class="pageheader">
  <?php //include 'header-top-menu.php'; ?>
  <div class="<?php echo $classContainer; ?> pageheader-inner">
    <h1><?php echo $logo; ?></h1>
    <p class="lead">
      <?php if ($this->params->get('sitedescription')) : ?>
        <?php echo '<div class="site-description">' . htmlspecialchars($this->params->get('sitedescription')) . '</div>'; ?>
      <?php endif; ?>
    </p>
    <div class="header-search _pull-right">
      <jdoc:include type="modules" name="position-0" style="none" />
    </div>
  </div>

  </div>
</div>
<!-- </div> -->
</header>
