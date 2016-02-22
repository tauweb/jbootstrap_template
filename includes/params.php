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
JHtml::_('bootstrap.framework');
// $doc->addScript($this->baseurl . '/templates/' . $this->template . '/js/template.js');

// Добавление библиотек
// Модальные окна
JHtml::_('behavior.modal');

// Тултипы
JHtml::_('behavior.tooltip');

// Установка контент-генератора
$this->setGenerator('Каждый раз когда вы заходите на сайт, тысячи миньонов пишут весь код своими маленькими ручками.');

// Браузер==========================================================================================
// Определяем браузер и выводим сообщения вслучае говна
$browser = JBrowser::getInstance();

$browserName = $browser->getBrowser();
$browserIsRobot = $browser->isRobot();
$browserIsMobile = $browser->isMobile();

if ($browserName !== 'chrome' and $browserName !== 'mozilla' and !$browserIsRobot and !$browserIsMobile){
  $browserMessage = "<strong>Ваш браузер $browserName</strong>. 
    Для корректного серфинга сети рекомендуем установить один из современных браузеров 
    <a target='_blank' href='https://www.google.com/chrome/browser/index.html'>Chrome</a> или 
    <a target='_blank' href='https://www.mozilla.org/ru/firefox'>Firefox</a>.";

  $app->enqueueMessage("$browserMessage", 'Notice');
}
// =================================================================================================

// Добавление JS
// Подсветка синтаксиса
// На данны момент переопределен в конце head
// $doc->addScript(JUri::root(true).'/media/system/js/highlighter.js');

// Add Stylesheets
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/template.css');
$doc->addStyleSheet($this->baseurl . '/templates/' . $this->template . '/css/wm.css');


// Check for a custom CSS file
$userCss = JPATH_SITE . '/templates/' . $this->template . '/css/user.css';

if (file_exists($userCss) && filesize($userCss) > 0)
{
  $doc->addStyleSheetVersion('templates/' . $this->template . '/css/user.css');
}


// Load optional RTL Bootstrap CSS
JHtml::_('bootstrap.loadCss', false, $this->direction);

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