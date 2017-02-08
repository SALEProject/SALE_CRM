<?php /* Smarty version 2.6.11, created on 2013-03-15 02:54:06
         compiled from cache/modules/Import/Accountsbilling_address_country.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['billing_address_country']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['billing_address_country']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['billing_address_country']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['billing_address_country']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['billing_address_country']['name']; ?>
' size='30' 
     
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >