<?php
/**
 * @package    ecomecia_icons
 *
 * @author     oleg <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */

use Joomla\CMS\Helper\ModuleHelper;

    /**
     * "@var \Joomla\Registry\Registry  $params Параметры модуля
     */
defined('_JEXEC') or die;

// The below line is no longer used in Joomla 4
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require ModuleHelper::getLayoutPath('mod_ecommerce_icons', $params->get('layout', 'default'));
