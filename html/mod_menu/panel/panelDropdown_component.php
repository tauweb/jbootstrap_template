<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Note. It is important to remove spaces between elements.
$isActiveLink = (($item->id == $active_id) OR ($item->type == 'alias' AND $item->params->get('aliasoptions') == $active_id)) ? ' active' : ''; // Is active link? (NEW)
$isParent = $item->parent ? ' dropdown-toggle' : ''; // Have submenu? (New)
$anchorCss = $item->anchor_css ? 'class="' . $item->anchor_css . '" ' : ''; // (NEW)

// $class = $item->anchor_css ? 'class="' . $item->anchor_css . '" ' : ''; // Original
$class = 'class="' . trim($anchorCss . $isActiveLink . $isParent. ' nav-link') . '"'; // (NEW)
$title = $item->anchor_title ? 'title="' . $item->anchor_title . '" ' : '';

if ($item->menu_image)
{
	$item->params->get('menu_text', 1) ?
	$linktype = '<img src="' . $item->menu_image . '" alt="' . $item->title . '" /><span class="image-title">' . $item->title . '</span> ' :
	$linktype = '<img src="' . $item->menu_image . '" alt="' . $item->title . '" />';
}
else
{
	$linktype = $item->title;
}

// If menu have dropdown submenu
$dropdown = $isParent ? 'data-toggle="dropdown"' : ''; // NEW

switch ($item->browserNav)
{
	default:
	case 0:
?><a <?php echo $class; echo $dropdown;?>href="<?php echo $item->flink; ?>" <?php echo $title; ?>><?php echo $linktype; ?></a><?php
		break;
	case 1:
		// _blank
?><a <?php echo $class; echo $dropdown;?>href="<?php echo $item->flink; ?>" target="_blank" <?php echo $title; ?>><?php echo $linktype; ?></a><?php
		break;
	case 2:
	// Use JavaScript "window.open"
?><a <?php echo $class; echo $dropdown;?>href="<?php echo $item->flink; ?>" onclick="window.open(this.href,'targetWindow','toolbar=no,location=no,status=no,menubar=no,scrollbars=yes,resizable=yes');return false;" <?php echo $title; ?>><?php echo $linktype; ?></a>
<?php
		break;
}
