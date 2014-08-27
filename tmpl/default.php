<?php

/**

 * @copyright    Copyright (c) 2014 Ponto Mega (http://pontomega.com.br). All rights reserved.

 * @license        GNU General Public License version 2 or later; see LICENSE.txt

 */



// no direct access

defined('_JEXEC') or die;

$rows = array();
foreach ($diasdasemana as $diadasemana) {
    foreach ($diadasemana as $key => $value) {
        $rows[$key][] = $value;
    }
}



JHtml::_('script', 'mod_broadcasters/script.js', array(), true);

JHtml::_('stylesheet', 'mod_broadcasters/style.css', array(), true);

?>
 <ul>
     <?php foreach ($rows as $row): ?>
    <li>
        <?php echo $row[0]; ?> de <?php echo $row[1]; ?> as <?php echo $row[2]; ?> - <?php echo $row[3]; ?>
        <?php if (!empty($row[4])): ?>
        com <?php echo $row[4]; ?>
        <?php endif; ?>
    </li> 
     <?php endforeach; ?>
 </ul>
