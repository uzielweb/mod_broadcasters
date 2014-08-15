<?php

/**

 * @copyright	Copyright (c) 2014 Ponto Mega (http://pontomega.com.br). All rights reserved.

 * @license		GNU General Public License version 2 or later; see LICENSE.txt

 */



// no direct access

defined('_JEXEC') or die;



JHtml::_('script', 'mod_broadcasters/script.js', array(), true);

JHtml::_('stylesheet', 'mod_broadcasters/style.css', array(), true);

?>
 <ul>
<li>
 <?php
  
foreach ($diasdasemana as $diasdasemana)
{
 echo $diasdasemana;
}
 ?>
 
</li> 
 
 </ul>
