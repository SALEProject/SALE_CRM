<?php /* Smarty version 2.6.11, created on 2013-03-06 02:38:34
         compiled from cache/modules/Import/Accountsshipping_address_postalcode.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['shipping_address_postalcode']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['shipping_address_postalcode']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['shipping_address_postalcode']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['shipping_address_postalcode']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['shipping_address_postalcode']['name']; ?>
' size='30' 
    maxlength='20' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >