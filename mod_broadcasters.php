<?php

/**

 * @copyright	@copyright	Copyright (c) 2014 Ponto Mega (http://pontomega.com.br). All rights reserved.

 * @license		GNU General Public License version 2 or later; see LICENSE.txt

 */



// no direct access

defined('_JEXEC') or die;



// include the syndicate functions only once

require_once dirname(__FILE__) . '/helper.php';





$class_sfx = htmlspecialchars($params->get('class_sfx'));

$diasdasemana = json_decode($params->get('horarios'));

require(JModuleHelper::getLayoutPath('mod_broadcasters', $params->get('layout', 'default')));
