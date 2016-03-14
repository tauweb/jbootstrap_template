<?php
/**
 * @package     Joomla.Site
 * @subpackage  Templates.jbootstrap_template
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include the template parameters
include 'includes/params.php';
// Include template variablses
include 'includes/variables.php';
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<?php //Include template head ?>
	<?php include 'tmpls/head.php'; ?>
</head>

<body oncopy="return false" class="site_ <?php echo $option
	. ' view-' . $view
	. ($layout ? ' layout-' . $layout : ' no-layout')
	. ($task ? ' task-' . $task : ' no-task')
	. ($itemid ? ' itemid-' . $itemid : '')
	. ($params->get('fluidContainer') ? ' fluid' : '');
?>">
	<!-- <div class="body"> -->

	<?php include 'tmpls/header.php'; ?>

	<?php // This is old.  ?>
	<?php if ($this->countModules('_position-1')) : ?>
		<nav class="navigation" role="navigation">
			<div class="navbar pull-left">
				<a class="btn btn-navbar collapsed" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
			</div>
			<div class="nav-collapse">
				<jdoc:include type="modules" name="position-1" style="none" />
			</div>
		</nav>
	<?php endif; ?>

	<jdoc:include type="modules" name="banner" style="xhtml" />

	<?php include 'tmpls/top-columns.php'; ?>

	<!-- Mian part. Content. -->
	<div class="<?=$classContainer;?> content">
		<div class="row-fluid">
			<?php if ($this->countModules('position-8')) : ?>
				<!-- Begin Sidebar -->
				<div id="sidebar" class="col-md-3">
					<div class="sidebar-nav">
						<jdoc:include type="modules" name="position-8" style="xhtml" />
					</div>
				</div>
				<!-- End Sidebar -->
			<?php endif; ?>
			<main id="content" role="main" class="<?php echo $span; ?>">
				<!-- Begin Content -->
				<jdoc:include type="modules" name="position-3" style="xhtml" />
				<jdoc:include type="message" />
				<jdoc:include type="component" />
				<jdoc:include type="modules" name="position-2" style="none" />
				<!-- End Content -->
			</main>
			<?php if ($this->countModules('position-7')) : ?>
				<div id="aside" class="col-md-3">
					<!-- Begin Right Sidebar -->
					<jdoc:include type="modules" name="position-7" style="well" />
					<!-- End Right Sidebar -->
				</div>
			<?php endif; ?>
		</div>
	</div>
	<!-- </div>  End body -->

	<?php  include_once "tmpls/footer.php";?>
	<!-- Footer -->
<!-- 	<footer class="footer" role="contentinfo">
		<div class="container<?php echo ($params->get('fluidContainer') ? '-fluid' : ''); ?>">
			<hr />
			<jdoc:include type="modules" name="footer" style="none" />
			<p class="pull-right">
				<a class="readmore" href="#top" id="back-top">
					<?php //echo JText::_('TPL_JBOOTSTRAP_TEMPLATE_BACKTOTOP'); ?>
					Вверх
				</a>
			</p>
			<p>
				&copy; <?php echo date('Y'); ?> <?php echo $sitename; ?>
			</p>
		</div>
	</footer> -->
	<jdoc:include type="modules" name="debug" style="none" />
</body>
</html>