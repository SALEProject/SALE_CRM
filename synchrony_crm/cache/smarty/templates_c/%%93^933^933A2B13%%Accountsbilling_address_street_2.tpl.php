<?php /* Smarty version 2.6.11, created on 2013-03-15 02:32:56
         compiled from cache/modules/Import/Accountsbilling_address_street_2.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['billing_address_street_2']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['billing_address_street_2']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['billing_address_street_2']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['billing_address_street_2']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['billing_address_street_2']['name']; ?>
' size='30' 
    maxlength='150' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >