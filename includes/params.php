<?php

$app             = JFactory::getApplication();
$doc             = JFactory::getDocument();
$user            = JFactory::getUser();
$this->language  = $doc->language;
$this->direction = $doc->direction;

// Getting params from template
$params = $app->getTemplate(true)->params;

// Detecting Active Variables
$option   = $app->input->getCmd('option', '');
$view     = $app->input->getCmd('view', '');
$layout   = $app->input->getCmd('layout', '');
$task     = $app->input->getCmd('task', '');
$itemid   = $app->input->getCmd('Itemid', '');
$sitename = $app->get('sitename');

// File contains unsets template variables
require_once ('unset.php');

// Output as HTML5
$doc->setHtml5(true);

if($task == "edit" || $layout == "form" )
{
  $fullWidth = 1;
}
else
{
  $fullWidth = 0;
}

// Add JavaScript Frameworks
// JHtml::_('bootstrap.framework');

// Добавление библиотек
// JHtml::_('behavior.modal'); // Модальные окна
// JHtml::_('behavior.tooltip'); // Тултипы

// Add Js
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/jquery.js');
$doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/bootstrap.js');
// $doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/template.js');
// $doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/umd/collapse.js');
// $doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/umd/util.js');

// Установка контент-генератора
$this->setGenerator('Каждый раз когда вы заходите на сайт, тысячи миньонов пишут весь код своими маленькими ручками.');

// Add Stylesheets
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/template.css');

// Check for a custom CSS file
$userCss = JPATH_SITE . '/templates/' . $this->template . '/css/user.css';

if (file_exists($userCss) && filesize($userCss) > 0)
{
  $doc->addStyleSheetVersion('templates/' . $this->template . '/css/user.css');
}


// Load optional RTL Bootstrap CSS
// JHtml::_('bootstrap.loadCss', true, $this->direction);

// Adjusting content width
if ($this->countModules('position-7') && $this->countModules('position-8'))
{
  $span = "col-md-6";
}
elseif ($this->countModules('position-7') && !$this->countModules('position-8'))
{
  $span = "col-md-9";
}
elseif (!$this->countModules('position-7') && $this->countModules('position-8'))
{
  $span = "col-md-9";
}
else
{
  $span = "col-md-12";
}

// Logo file or site title param
if ($this->params->get('logoFile'))
{
  $logo = '<img src="' . JUri::root() . $this->params->get('logoFile') . '" alt="' . $sitename . '" />';
}
elseif ($this->params->get('sitetitle'))
{
  $logo = '<span class="site-title" title="' . $sitename . '">' . htmlspecialchars($this->params->get('sitetitle')) . '</span>';
}
else
{
  $logo = '<span class="site-title" title="' . $sitename . '">' . $sitename . '</span>';
}