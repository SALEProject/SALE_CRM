<?php /* Smarty version 2.6.11, created on 2013-03-06 02:38:34
         compiled from cache/modules/Import/Accountsemail_addresses_non_primary.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['email_addresses_non_primary']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['email_addresses_non_primary']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['email_addresses_non_primary']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['email_addresses_non_primary']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['email_addresses_non_primary']['name']; ?>
' size='30' 
     
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >