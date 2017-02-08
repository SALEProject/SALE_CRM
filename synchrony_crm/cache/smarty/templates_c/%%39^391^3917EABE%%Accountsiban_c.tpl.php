<?php /* Smarty version 2.6.11, created on 2013-03-15 02:55:25
         compiled from cache/modules/Import/Accountsiban_c.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['iban_c']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['iban_c']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['iban_c']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['iban_c']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['iban_c']['name']; ?>
' size='30' 
    maxlength='255' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >