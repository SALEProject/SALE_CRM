<?php /* Smarty version 2.6.11, created on 2013-03-15 02:55:08
         compiled from cache/modules/Import/Accountsbilling_address_state.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['billing_address_state']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['billing_address_state']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['billing_address_state']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['billing_address_state']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['billing_address_state']['name']; ?>
' size='30' 
    maxlength='100' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >