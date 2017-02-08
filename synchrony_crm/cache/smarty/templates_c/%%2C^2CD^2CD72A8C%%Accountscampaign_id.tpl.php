<?php /* Smarty version 2.6.11, created on 2013-03-06 02:38:34
         compiled from cache/modules/Import/Accountscampaign_id.tpl */ ?>

<?php if (strlen ( $this->_tpl_vars['fields']['campaign_id']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['campaign_id']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['campaign_id']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['campaign_id']['name']; ?>
' 
    id='<?php echo $this->_tpl_vars['fields']['campaign_id']['name']; ?>
' size='30' 
     
    value='<?php echo $this->_tpl_vars['value']; ?>
' title=''  tabindex='1'      >