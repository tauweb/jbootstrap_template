  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <jdoc:include type="head" />
  <?php // Use of Google Font ?>
  <?php if ($this->params->get('googleFont')) : ?>
    <link href='//fonts.googleapis.com/css?family=<?php echo $this->params->get('googleFontName'); ?>' rel='stylesheet' type='text/css' />
    <style type="text/css">
      h1,h2,h3,h4,h5,h6,.site-title{
        font-family: '<?php echo str_replace('+', ' ', $this->params->get('googleFontName')); ?>', sans-serif;
      }
    </style>
  <?php endif; ?>
  <?php // Template color ?>
  <?php if ($this->params->get('templateColor')) : ?>
  <style type="text/css">
    body.site
    {
      border-top: 3px solid <?php echo $this->params->get('templateColor'); ?>;
      background-color: <?php echo $this->params->get('templateBackgroundColor'); ?>
    }
    a
    {
      color: <?php echo $this->params->get('templateColor'); ?>;
    }
    .navbar-inner, .nav-list > .active > a, .nav-list > .active > a:hover, .dropdown-menu li > a:hover, .dropdown-menu .active > a, .dropdown-menu .active > a:hover, .nav-pills > .active > a, .nav-pills > .active > a:hover,
    .btn-primary
    {
      background: <?php echo $this->params->get('templateColor'); ?>;
    }
    .navbar-inner
    {
      -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, .25), inset 0 -1px 0 rgba(0, 0, 0, .1), inset 0 30px 10px rgba(0, 0, 0, .2);
      -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, .25), inset 0 -1px 0 rgba(0, 0, 0, .1), inset 0 30px 10px rgba(0, 0, 0, .2);
      box-shadow: 0 1px 3px rgba(0, 0, 0, .25), inset 0 -1px 0 rgba(0, 0, 0, .1), inset 0 30px 10px rgba(0, 0, 0, .2);
    }
  </style>
  <?php endif; ?>
  <!--[if lt IE 9]>
    <script src="<?php echo JUri::root(true); ?>/media/jui/js/html5.js"></script>
  <![endif]-->

  <!-- Подсветка синтаксиса -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.0.0/styles/default.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.0.0/highlight.min.js"></script>
  <script>hljs.initHighlightingOnLoad();</script>
<script></script>