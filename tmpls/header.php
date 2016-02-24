<!-- Header -->
<header class="header" role="banner">
<!--  header-top-menu-->
<?php include 'header-top-menu.php'; ?>
<!-- End header-top-menu  -->
<!-- <div class="<?php echo $classContainer; ?>"> -->
<div class="header-inner clearfix">

<div class="pageheader">
  <div class="<?php echo $classContainer; ?>">
    <h1><?php echo $logo; ?></h1>
    <p class="lead">
      <?php if ($this->params->get('sitedescription')) : ?>
        <?php echo '<div class="site-description">' . htmlspecialchars($this->params->get('sitedescription')) . '</div>'; ?>
      <?php endif; ?>
    </p>

    <a class="brand pull-left" href="<?php echo $this->baseurl; ?>/">
      <?php echo $logo; ?>
      <?php if ($this->params->get('sitedescription')) : ?>
        <?php echo '<div class="site-description">' . htmlspecialchars($this->params->get('sitedescription')) . '</div>'; ?>
      <?php endif; ?>
    </a>
    <div class="header-search pull-right">
      <jdoc:include type="modules" name="position-0" style="none" />
    </div>
  </div>

  </div>
</div>
<!-- </div> -->
</header>
