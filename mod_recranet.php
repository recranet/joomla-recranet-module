<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_recranet
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$recranetConfig = array(
    'accommodationsView' => (string) $params->get('accommodationsView'),
    'category' => (int) $params->get('category'),
    'html5Mode' => (boolean) $params->get('html5Mode'),
    'locale' => (string) $params->get('locale'),
    'accommodation' => (int) $params->get('accommodation'),
    'organization' => (int) $params->get('organization')
);

$document = JFactory::getDocument();
$document->addStylesheet(JUri::base() . 'modules/mod_recranet/css/mod_recranet.css');

// Set base URL for Angular HTML5 Mode routing
if ($params->get('html5Mode')) {
    $link = JFactory::getApplication()->getMenu()->getActive()->link;
    $document->setBase(JRoute::_($link) . '/');
}

// Add jQuery to head
if ($params->get('jquery')) {
    $document->addScript('https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js');
}

// Add SDK loader to head
if ($params->get('sdk')) {
    $javascript = "" .
        "var recranetConfig = %s;" . PHP_EOL .

        "(function(d, random) {" . PHP_EOL .
        "    var l = d.createElement('link'); l.rel = 'stylesheet'; l.type = 'text/css';" . PHP_EOL .
        "    l.href = 'https://recranet.com/sdk/sdk.css?' + random + '=' + random + '&organization=' + recranetConfig.organization;" . PHP_EOL .
        "    var s = d.createElement('script'); s.type = 'text/javascript'; s.async = true;" . PHP_EOL .
        "    s.src = 'https://recranet.com/sdk/sdk.js?' + random + '=' + random;" . PHP_EOL .
        "    var h = d.getElementsByTagName('head')[0]; h.appendChild(l); h.appendChild(s);" . PHP_EOL .
        "})(document, (new Date()).getTime());";

    $document->addScriptDeclaration(sprintf($javascript, json_encode($recranetConfig)));
}

require JModuleHelper::getLayoutPath('mod_recranet', $params->get('layout', 'default'));
