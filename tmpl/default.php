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
<div class="pmbr"> 	                  
  <?php foreach ($rows as $row): ?>      	                  
  <div class="pmbr_li">                  
    <div class="pmbr_one">                              
      <?php if (!empty($row[0])): ?>                                          
      <?php echo $row[0]; ?>      		                                      
      <?php endif; ?><br /><hr>                                           
      <?php if (!empty($row[1])): ?>                                               
      <?php echo $row[1]; ?>      		                                      
      <?php endif; ?>   &nbsp;                     
      <?php echo JText::_( 'PMBR_HOURS' ); ?>    &nbsp;-&nbsp;                                              
      <?php if (!empty($row[2])): ?>                                           
      <?php echo $row[2]; ?>   &nbsp;                     
      <?php echo JText::_( 'PMBR_HOURS' ); ?>    		                                      
      <?php endif; ?>   	                      	                                   
    </div>		                                         
    <div class="pmbr_two">                                        
      <?php if (!empty($row[3])): ?>                                           
      <?php echo $row[3]; ?>      		                                      
      <?php endif; ?><br /><hr>                             
      <?php if (!empty($row[4])): ?>           
      <?php echo $row[4]; ?>
      <?php else: ?>
       &nbsp;       		                                      
      <?php endif; ?>      	                               
    </div>                 
  </div>   	                  
  <?php endforeach; ?>              
</div>