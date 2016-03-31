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
    'accommodationsView' => $params->get('accommodationsView'),
    'organization' => $params->get('organization'),
    'category' => $params->get('category'),
    'breakpointSmall' => $params->get('breakpointSmall'),
    'breakpointMedium' => $params->get('breakpointMedium'),
    'breakpointLarge' => $params->get('breakpointLarge')
);

require JModuleHelper::getLayoutPath('mod_recranet', $params->get('layout', 'default'));
