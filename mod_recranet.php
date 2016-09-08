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

// Set base URL for Angular HTML5 Mode routing
if ((boolean) $params->get('html5Mode')) {
    $link = JFactory::getApplication()->getMenu()->getActive()->link;
    JFactory::getDocument()->setBase(JRoute::_($link) . '/');
}

require JModuleHelper::getLayoutPath('mod_recranet', $params->get('layout', 'default'));
