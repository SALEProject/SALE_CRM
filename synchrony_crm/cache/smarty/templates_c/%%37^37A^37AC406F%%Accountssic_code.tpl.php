<?php /* Smarty version 2.6.11, created on 2013-03-06 02:38:34
         compiled from cache/modules/Import/Accountssic_code.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['sic_code']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['sic_code']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['sic_code']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['sic_code']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['sic_code']['name']; ?>
' size='30' 
    maxlength='10' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >