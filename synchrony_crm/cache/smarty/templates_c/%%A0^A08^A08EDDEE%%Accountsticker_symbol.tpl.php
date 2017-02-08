<?php /* Smarty version 2.6.11, created on 2013-03-06 02:38:34
         compiled from cache/modules/Import/Accountsticker_symbol.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['ticker_symbol']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['ticker_symbol']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['ticker_symbol']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['ticker_symbol']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['ticker_symbol']['name']; ?>
' size='30' 
    maxlength='10' 
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >