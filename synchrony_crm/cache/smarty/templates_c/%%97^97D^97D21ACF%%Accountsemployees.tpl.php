<?php /* Smarty version 2.6.11, created on 2013-03-06 02:38:34
         compiled from cache/modules/Import/Accountsemployees.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['employees']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['employees']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['employees']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['employees']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['employees']['name']; ?>
' size='30' 
    maxlength='10' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >