<?php

/**

 * @copyright	Copyright (c) 2014 Ponto Mega (http://pontomega.com.br). All rights reserved.

 * @license		GNU General Public License version 2 or later; see LICENSE.txt

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
 <ul class="pmbr">
 	<?php foreach ($rows as $row): ?>
	<li>
		<span class="pmbr_zero"><?php echo $row[0]; ?></span><span class="pmbr_one"> <?php echo $row[1]; ?></span><span class="pmbr_two"><?php echo $row[2]; ?></span><span class="pmbr_three"><?php echo $row[3]; ?></span><span class="pmbr_four"><?php if (!empty($row[4])): ?>
		com <?php echo $row[4]; ?></span>
		<?php endif; ?>
	</li> 
 	<?php endforeach; ?>
 </ul>

