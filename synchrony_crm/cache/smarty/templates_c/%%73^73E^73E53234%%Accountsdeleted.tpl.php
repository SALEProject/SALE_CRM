<?php /* Smarty version 2.6.11, created on 2013-03-06 02:38:35
         compiled from cache/modules/Import/Accountsdeleted.tpl */ ?>

<?php if (strval ( $this->_tpl_vars['fields']['deleted']['value'] ) == '1' || strval ( $this->_tpl_vars['fields']['deleted']['value'] ) == 'yes' || strval ( $this->_tpl_vars['fields']['deleted']['value'] ) == 'on'): ?> 
<?php $this->assign('checked', 'CHECKED');  else:  $this->assign('checked', "");  endif; ?>
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['deleted']['name']; ?>
" value="0"> 
<input type="checkbox" id="<?php echo $this->_tpl_vars['fields']['deleted']['name']; ?>
" 
name="<?php echo $this->_tpl_vars['fields']['deleted']['name']; ?>
" 
value="1" title='' tabindex="1" <?php echo $this->_tpl_vars['checked']; ?>
 >