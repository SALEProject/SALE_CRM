<?php /* Smarty version 2.6.11, created on 2015-02-24 12:01:34
         compiled from cache/modules/Project/EditView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_include', 'cache/modules/Project/EditView.tpl', 45, false),array('function', 'counter', 'cache/modules/Project/EditView.tpl', 51, false),array('function', 'sugar_getimagepath', 'cache/modules/Project/EditView.tpl', 54, false),array('function', 'sugar_translate', 'cache/modules/Project/EditView.tpl', 57, false),array('function', 'html_options', 'cache/modules/Project/EditView.tpl', 100, false),array('function', 'sugar_getimage', 'cache/modules/Project/EditView.tpl', 324, false),array('modifier', 'default', 'cache/modules/Project/EditView.tpl', 50, false),array('modifier', 'strip_semicolon', 'cache/modules/Project/EditView.tpl', 68, false),array('modifier', 'lookup', 'cache/modules/Project/EditView.tpl', 125, false),array('modifier', 'count', 'cache/modules/Project/EditView.tpl', 205, false),)), $this); ?>


<script>
<?php echo '
$(document).ready(function(){
$("ul.clickMenu").each(function(index, node){
$(node).sugarActionMenu();
});
});
'; ?>

</script>
<div class="clear"></div>
<form action="index.php" method="POST" name="<?php echo $this->_tpl_vars['form_name']; ?>
" id="<?php echo $this->_tpl_vars['form_id']; ?>
" <?php echo $this->_tpl_vars['enctype']; ?>
>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons">
<input type="hidden" name="module" value="<?php echo $this->_tpl_vars['module']; ?>
">
<?php if (isset ( $_REQUEST['isDuplicate'] ) && $_REQUEST['isDuplicate'] == 'true'): ?>
<input type="hidden" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<?php else: ?>
<input type="hidden" name="record" value="<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
">
<?php endif; ?>
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="<?php echo $_REQUEST['return_module']; ?>
">
<input type="hidden" name="return_action" value="<?php echo $_REQUEST['return_action']; ?>
">
<input type="hidden" name="return_id" value="<?php echo $_REQUEST['return_id']; ?>
">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
<?php if (( ! empty ( $_REQUEST['return_module'] ) || ! empty ( $_REQUEST['relate_to'] ) ) && ! ( isset ( $_REQUEST['isDuplicate'] ) && $_REQUEST['isDuplicate'] == 'true' )): ?>
<input type="hidden" name="relate_to" value="<?php if ($_REQUEST['return_relationship']):  echo $_REQUEST['return_relationship'];  elseif ($_REQUEST['relate_to'] && empty ( $_REQUEST['from_dcmenu'] )):  echo $_REQUEST['relate_to'];  elseif (empty ( $this->_tpl_vars['isDCForm'] ) && empty ( $_REQUEST['from_dcmenu'] )):  echo $_REQUEST['return_module'];  endif; ?>">
<input type="hidden" name="relate_id" value="<?php echo $_REQUEST['return_id']; ?>
">
<?php endif; ?>
<input type="hidden" name="offset" value="<?php echo $this->_tpl_vars['offset']; ?>
">
<?php $this->assign('place', '_HEADER'); ?> <!-- to be used for id for buttons with custom code in def files-->
<input type="hidden" name="is_template" value="<?php echo $this->_tpl_vars['is_template']; ?>
" />   
<div class="action_buttons"><?php if ($this->_tpl_vars['bean']->aclAccess('save')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button primary" onclick="var _form = document.getElementById('EditView'); <?php if ($this->_tpl_vars['isDuplicate']): ?>_form.return_id.value=''; <?php endif; ?>_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" id="SAVE_HEADER"><?php endif; ?>  <?php if (! empty ( $_REQUEST['return_action'] ) && $_REQUEST['return_action'] == 'ProjectTemplatesDetailView' && ( ! empty ( $this->_tpl_vars['fields']['id']['value'] ) || ! empty ( $_REQUEST['return_id'] ) )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="var _form = document.getElementById('EditView');_form.action.value='ProjectTemplatesDetailView'; _form.module.value='<?php echo $_REQUEST['return_module']; ?>
'; _form.record.value='<?php echo $_REQUEST['return_id']; ?>
';_form.submit();" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL<?php echo $this->_tpl_vars['place']; ?>
"/><?php elseif (! empty ( $_REQUEST['return_action'] ) && $_REQUEST['return_action'] == 'DetailView' && ( ! empty ( $this->_tpl_vars['fields']['id']['value'] ) || ! empty ( $_REQUEST['return_id'] ) )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="var _form = document.getElementById('EditView');_form.action.value='DetailView'; _form.module.value='<?php echo $_REQUEST['return_module']; ?>
'; _form.record.value='<?php echo $_REQUEST['return_id']; ?>
';_form.submit();" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL<?php echo $this->_tpl_vars['place']; ?>
"/><?php elseif ($this->_tpl_vars['is_template']): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="var _form = document.getElementById('EditView');_form.action.value='ProjectTemplatesListView'; _form.module.value='<?php echo $_REQUEST['return_module']; ?>
'; _form.record.value='<?php echo $_REQUEST['return_id']; ?>
';_form.submit();" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL<?php echo $this->_tpl_vars['place']; ?>
"/><?php else: ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="var _form = document.getElementById('EditView');_form.action.value='index'; _form.module.value='<?php echo $_REQUEST['return_module']; ?>
'; _form.record.value='<?php echo $_REQUEST['return_id']; ?>
';_form.submit();" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL<?php echo $this->_tpl_vars['place']; ?>
"/><?php endif; ?> <?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input id="btn_view_change_log" title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Project", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?><div class="clear"></div></div>
</td>
<td align='right'>
<?php echo $this->_tpl_vars['PAGINATION']; ?>

</td>
</tr>
</table><?php echo smarty_function_sugar_include(array('include' => $this->_tpl_vars['includes']), $this);?>

<span id='tabcounterJS'><script>SUGAR.TabFields=new Array();//this will be used to track tabindexes for references</script></span>
<div id="EditView_tabs"
>
<div >
<div id="detailpanel_1" class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['def']['templateMeta']['panelClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'edit view edit508') : smarty_modifier_default($_tmp, 'edit view edit508')); ?>
">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<h4>&nbsp;&nbsp;
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(1);">
<img border="0" id="detailpanel_1_img_hide" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "basic_search.gif"), $this);?>
"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(1);">
<img border="0" id="detailpanel_1_img_show" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "advanced_search.gif"), $this);?>
"></a>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PROJECT_INFORMATION','module' => 'Project'), $this);?>

<script>
document.getElementById('detailpanel_1').className += ' expanded';
</script>
</h4>
<table width="100%" border="0" cellspacing="1" cellpadding="0"  id='LBL_PROJECT_INFORMATION'  class="yui3-skin-sam edit view panelContainer">
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='name_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Project'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (strlen ( $this->_tpl_vars['fields']['name']['value'] ) <= 0):  $this->assign('value', $this->_tpl_vars['fields']['name']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['name']['value']);  endif; ?>  
<input type='text' name='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
' 
id='<?php echo $this->_tpl_vars['fields']['name']['name']; ?>
' size='30' 
maxlength='50' 
value='<?php echo $this->_tpl_vars['value']; ?>
' title=''      accesskey='7'  >
<td valign="top" id='status_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'Project'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! isset ( $this->_tpl_vars['config']['enable_autocomplete'] ) || $this->_tpl_vars['config']['enable_autocomplete'] == false): ?>
<select name="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" 
title=''       
>
<?php if (isset ( $this->_tpl_vars['fields']['status']['value'] ) && $this->_tpl_vars['fields']['status']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status']['options'],'selected' => $this->_tpl_vars['fields']['status']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status']['options'],'selected' => $this->_tpl_vars['fields']['status']['default']), $this);?>

<?php endif; ?>
</select>
<?php else:  $this->assign('field_options', $this->_tpl_vars['fields']['status']['options']);  ob_start();  echo $this->_tpl_vars['fields']['status']['value'];  $this->_smarty_vars['capture']['field_val'] = ob_get_contents(); ob_end_clean();  $this->assign('field_val', $this->_smarty_vars['capture']['field_val']);  ob_start();  echo $this->_tpl_vars['fields']['status']['name'];  $this->_smarty_vars['capture']['ac_key'] = ob_get_contents(); ob_end_clean();  $this->assign('ac_key', $this->_smarty_vars['capture']['ac_key']); ?>
<select style='display:none' name="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
" 
title=''          
>
<?php if (isset ( $this->_tpl_vars['fields']['status']['value'] ) && $this->_tpl_vars['fields']['status']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status']['options'],'selected' => $this->_tpl_vars['fields']['status']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['status']['options'],'selected' => $this->_tpl_vars['fields']['status']['default']), $this);?>

<?php endif; ?>
</select>
<input
id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
-input"
name="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
-input"
size="30"
value="<?php echo ((is_array($_tmp=$this->_tpl_vars['field_val'])) ? $this->_run_mod_handler('lookup', true, $_tmp, $this->_tpl_vars['field_options']) : smarty_modifier_lookup($_tmp, $this->_tpl_vars['field_options'])); ?>
"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-down.png"), $this);?>
" id="<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
-image"></button><button type="button"
id="btn-clear-<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
-input', '<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
');sync_<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
()"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<?php echo '
<script>
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo ' = [];
'; ?>

<?php echo '
(function (){
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['status']['name'];  echo '");
if (typeof select_defaults =="undefined")
select_defaults = [];
select_defaults[selectElem.id] = {key:selectElem.value,text:\'\'};
//get default
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value)
select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
}
//SUGAR.AutoComplete.{$ac_key}.ds = 
//get options array from vardefs
var options = SUGAR.AutoComplete.getOptionsArray("");
YUI().use(\'datasource\', \'datasource-jsonschema\',function (Y) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.ds = new Y.DataSource.Function({
source: function (request) {
var ret = [];
for (i=0;i<selectElem.options.length;i++)
if (!(selectElem.options[i].value==\'\' && selectElem.options[i].innerHTML==\'\'))
ret.push({\'key\':selectElem.options[i].value,\'text\':selectElem.options[i].innerHTML});
return ret;
}
});
});
})();
'; ?>

<?php echo '
YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputNode = Y.one('#<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
-input');
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputImage = Y.one('#<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
-image');
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputHidden = Y.one('#<?php echo $this->_tpl_vars['fields']['status']['name']; ?>
');
<?php echo '
function SyncToHidden(selectme){
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['status']['name'];  echo '");
var doSimulateChange = false;
if (selectElem.value!=selectme)
doSimulateChange=true;
selectElem.value=selectme;
for (i=0;i<selectElem.options.length;i++){
selectElem.options[i].selected=false;
if (selectElem.options[i].value==selectme)
selectElem.options[i].selected=true;
}
if (doSimulateChange)
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'change\');
}
//global variable 
sync_';  echo $this->_tpl_vars['fields']['status']['name'];  echo ' = function(){
SyncToHidden();
}
function syncFromHiddenToWidget(){
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['status']['name'];  echo '");
//if select no longer on page, kill timer
if (selectElem==null || selectElem.options == null)
return;
var currentvalue = SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.get(\'value\');
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.simulate(\'keyup\');
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById(\'';  echo $this->_tpl_vars['fields']['status']['name']; ?>
-input<?php echo '\'))
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.set(\'value\',selectElem.options[i].innerHTML);
}
}
YAHOO.util.Event.onAvailable("';  echo $this->_tpl_vars['fields']['status']['name'];  echo '", syncFromHiddenToWidget);
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 0;
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 0;
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions = <?php echo count($this->_tpl_vars['field_options']); ?>
;
if(SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions >= 300) <?php echo '{
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 1;
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 200;
<?php echo '
}
'; ?>

if(SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions >= 3000) <?php echo '{
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 1;
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 500;
<?php echo '
}
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.optionsVisible = false;
<?php echo '
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.plug(Y.Plugin.AutoComplete, {
activateFirstItem: true,
'; ?>

minQueryLength: SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen,
queryDelay: SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay,
zIndex: 99999,
<?php echo '
source: SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.ds,
resultTextLocator: \'text\',
resultHighlighter: \'phraseMatch\',
resultFilters: \'phraseMatch\',
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.expandHover = function(ex){
var hover = YAHOO.util.Dom.getElementsByClassName(\'dccontent\');
if(hover[0] != null){
if (ex) {
var h = \'1000px\';
hover[0].style.height = h;
}
else{
hover[0].style.height = \'\';
}
}
}
if('; ?>
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen<?php echo ' == 0){
// expand the dropdown options upon focus
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'focus\', function () {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.ac.sendRequest(\'\');
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.optionsVisible = true;
});
}
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'click\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'click\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'dblclick\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'dblclick\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'focus\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'focus\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'mouseup\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'mouseup\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'mousedown\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'mousedown\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'blur\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'blur\');
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.optionsVisible = false;
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['status']['name'];  echo '");
//if typed value is a valid option, do nothing
for (i=0;i<selectElem.options.length;i++)
if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.get(\'value\'))
return;
//typed value is invalid, so set the text and the hidden to blank
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.set(\'value\', select_defaults[selectElem.id].text);
SyncToHidden(select_defaults[selectElem.id].key);
});
// when they click on the arrow image, toggle the visibility of the options
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputImage.ancestor().on(\'click\', function () {
if (SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.optionsVisible) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.blur();
} else {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.focus();
}
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.ac.on(\'query\', function () {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.set(\'value\', \'\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.ac.on(\'visibleChange\', function (e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.expandHover(e.newVal); // expand
});
// when they select an option, set the hidden input with the KEY, to be saved
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.ac.on(\'select\', function(e) {
SyncToHidden(e.result.raw.key);
});
});
</script> 
'; ?>

<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='estimated_start_date_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_START','module' => 'Project'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="dateTime">
<?php $this->assign('date_value', $this->_tpl_vars['fields']['estimated_start_date']['value']); ?>
<input class="date_input" autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['estimated_start_date']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['estimated_start_date']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='0'    size="11" maxlength="10" >
<?php ob_start(); ?>alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
" style="position:relative; top:6px" border="0" id="<?php echo $this->_tpl_vars['fields']['estimated_start_date']['name']; ?>
_trigger"<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('other_attributes', ob_get_contents());ob_end_clean();  echo smarty_function_sugar_getimage(array('name' => 'jscalendar','ext' => ".gif",'other_attributes' => ($this->_tpl_vars['other_attributes'])), $this);?>

</span>
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['estimated_start_date']['name']; ?>
",
form : "EditView",
ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['estimated_start_date']['name']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
startWeekday: <?php echo ((is_array($_tmp=@$this->_tpl_vars['CALENDAR_FDOW'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
,
step : 1,
weekNumbers:false
}
);
</script>
<td valign="top" id='priority_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIORITY','module' => 'Project'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' >
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (! isset ( $this->_tpl_vars['config']['enable_autocomplete'] ) || $this->_tpl_vars['config']['enable_autocomplete'] == false): ?>
<select name="<?php echo $this->_tpl_vars['fields']['priority']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['priority']['name']; ?>
" 
title=''       
>
<?php if (isset ( $this->_tpl_vars['fields']['priority']['value'] ) && $this->_tpl_vars['fields']['priority']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['priority']['options'],'selected' => $this->_tpl_vars['fields']['priority']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['priority']['options'],'selected' => $this->_tpl_vars['fields']['priority']['default']), $this);?>

<?php endif; ?>
</select>
<?php else:  $this->assign('field_options', $this->_tpl_vars['fields']['priority']['options']);  ob_start();  echo $this->_tpl_vars['fields']['priority']['value'];  $this->_smarty_vars['capture']['field_val'] = ob_get_contents(); ob_end_clean();  $this->assign('field_val', $this->_smarty_vars['capture']['field_val']);  ob_start();  echo $this->_tpl_vars['fields']['priority']['name'];  $this->_smarty_vars['capture']['ac_key'] = ob_get_contents(); ob_end_clean();  $this->assign('ac_key', $this->_smarty_vars['capture']['ac_key']); ?>
<select style='display:none' name="<?php echo $this->_tpl_vars['fields']['priority']['name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['priority']['name']; ?>
" 
title=''          
>
<?php if (isset ( $this->_tpl_vars['fields']['priority']['value'] ) && $this->_tpl_vars['fields']['priority']['value'] != ''):  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['priority']['options'],'selected' => $this->_tpl_vars['fields']['priority']['value']), $this);?>

<?php else:  echo smarty_function_html_options(array('options' => $this->_tpl_vars['fields']['priority']['options'],'selected' => $this->_tpl_vars['fields']['priority']['default']), $this);?>

<?php endif; ?>
</select>
<input
id="<?php echo $this->_tpl_vars['fields']['priority']['name']; ?>
-input"
name="<?php echo $this->_tpl_vars['fields']['priority']['name']; ?>
-input"
size="30"
value="<?php echo ((is_array($_tmp=$this->_tpl_vars['field_val'])) ? $this->_run_mod_handler('lookup', true, $_tmp, $this->_tpl_vars['field_options']) : smarty_modifier_lookup($_tmp, $this->_tpl_vars['field_options'])); ?>
"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-down.png"), $this);?>
" id="<?php echo $this->_tpl_vars['fields']['priority']['name']; ?>
-image"></button><button type="button"
id="btn-clear-<?php echo $this->_tpl_vars['fields']['priority']['name']; ?>
-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['priority']['name']; ?>
-input', '<?php echo $this->_tpl_vars['fields']['priority']['name']; ?>
');sync_<?php echo $this->_tpl_vars['fields']['priority']['name']; ?>
()"><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<?php echo '
<script>
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo ' = [];
'; ?>

<?php echo '
(function (){
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['priority']['name'];  echo '");
if (typeof select_defaults =="undefined")
select_defaults = [];
select_defaults[selectElem.id] = {key:selectElem.value,text:\'\'};
//get default
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value)
select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
}
//SUGAR.AutoComplete.{$ac_key}.ds = 
//get options array from vardefs
var options = SUGAR.AutoComplete.getOptionsArray("");
YUI().use(\'datasource\', \'datasource-jsonschema\',function (Y) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.ds = new Y.DataSource.Function({
source: function (request) {
var ret = [];
for (i=0;i<selectElem.options.length;i++)
if (!(selectElem.options[i].value==\'\' && selectElem.options[i].innerHTML==\'\'))
ret.push({\'key\':selectElem.options[i].value,\'text\':selectElem.options[i].innerHTML});
return ret;
}
});
});
})();
'; ?>

<?php echo '
YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputNode = Y.one('#<?php echo $this->_tpl_vars['fields']['priority']['name']; ?>
-input');
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputImage = Y.one('#<?php echo $this->_tpl_vars['fields']['priority']['name']; ?>
-image');
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.inputHidden = Y.one('#<?php echo $this->_tpl_vars['fields']['priority']['name']; ?>
');
<?php echo '
function SyncToHidden(selectme){
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['priority']['name'];  echo '");
var doSimulateChange = false;
if (selectElem.value!=selectme)
doSimulateChange=true;
selectElem.value=selectme;
for (i=0;i<selectElem.options.length;i++){
selectElem.options[i].selected=false;
if (selectElem.options[i].value==selectme)
selectElem.options[i].selected=true;
}
if (doSimulateChange)
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'change\');
}
//global variable 
sync_';  echo $this->_tpl_vars['fields']['priority']['name'];  echo ' = function(){
SyncToHidden();
}
function syncFromHiddenToWidget(){
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['priority']['name'];  echo '");
//if select no longer on page, kill timer
if (selectElem==null || selectElem.options == null)
return;
var currentvalue = SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.get(\'value\');
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.simulate(\'keyup\');
for (i=0;i<selectElem.options.length;i++){
if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById(\'';  echo $this->_tpl_vars['fields']['priority']['name']; ?>
-input<?php echo '\'))
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.set(\'value\',selectElem.options[i].innerHTML);
}
}
YAHOO.util.Event.onAvailable("';  echo $this->_tpl_vars['fields']['priority']['name'];  echo '", syncFromHiddenToWidget);
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 0;
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 0;
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions = <?php echo count($this->_tpl_vars['field_options']); ?>
;
if(SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions >= 300) <?php echo '{
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 1;
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 200;
<?php echo '
}
'; ?>

if(SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.numOptions >= 3000) <?php echo '{
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen = 1;
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay = 500;
<?php echo '
}
'; ?>

SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.optionsVisible = false;
<?php echo '
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.plug(Y.Plugin.AutoComplete, {
activateFirstItem: true,
'; ?>

minQueryLength: SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen,
queryDelay: SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.queryDelay,
zIndex: 99999,
<?php echo '
source: SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.ds,
resultTextLocator: \'text\',
resultHighlighter: \'phraseMatch\',
resultFilters: \'phraseMatch\',
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.expandHover = function(ex){
var hover = YAHOO.util.Dom.getElementsByClassName(\'dccontent\');
if(hover[0] != null){
if (ex) {
var h = \'1000px\';
hover[0].style.height = h;
}
else{
hover[0].style.height = \'\';
}
}
}
if('; ?>
SUGAR.AutoComplete.<?php echo $this->_tpl_vars['ac_key']; ?>
.minQLen<?php echo ' == 0){
// expand the dropdown options upon focus
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'focus\', function () {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.ac.sendRequest(\'\');
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.optionsVisible = true;
});
}
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'click\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'click\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'dblclick\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'dblclick\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'focus\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'focus\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'mouseup\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'mouseup\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'mousedown\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'mousedown\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.on(\'blur\', function(e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.simulate(\'blur\');
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.optionsVisible = false;
var selectElem = document.getElementById("';  echo $this->_tpl_vars['fields']['priority']['name'];  echo '");
//if typed value is a valid option, do nothing
for (i=0;i<selectElem.options.length;i++)
if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.get(\'value\'))
return;
//typed value is invalid, so set the text and the hidden to blank
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.set(\'value\', select_defaults[selectElem.id].text);
SyncToHidden(select_defaults[selectElem.id].key);
});
// when they click on the arrow image, toggle the visibility of the options
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputImage.ancestor().on(\'click\', function () {
if (SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.optionsVisible) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.blur();
} else {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.focus();
}
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.ac.on(\'query\', function () {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputHidden.set(\'value\', \'\');
});
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.ac.on(\'visibleChange\', function (e) {
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.expandHover(e.newVal); // expand
});
// when they select an option, set the hidden input with the KEY, to be saved
SUGAR.AutoComplete.';  echo $this->_tpl_vars['ac_key'];  echo '.inputNode.ac.on(\'select\', function(e) {
SyncToHidden(e.result.raw.key);
});
});
</script> 
'; ?>

<?php endif; ?>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='estimated_end_date_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_END','module' => 'Project'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
<span class="required">*</span>
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<span class="dateTime">
<?php $this->assign('date_value', $this->_tpl_vars['fields']['estimated_end_date']['value']); ?>
<input class="date_input" autocomplete="off" type="text" name="<?php echo $this->_tpl_vars['fields']['estimated_end_date']['name']; ?>
" id="<?php echo $this->_tpl_vars['fields']['estimated_end_date']['name']; ?>
" value="<?php echo $this->_tpl_vars['date_value']; ?>
" title=''  tabindex='0'    size="11" maxlength="10" >
<?php ob_start(); ?>alt="<?php echo $this->_tpl_vars['APP']['LBL_ENTER_DATE']; ?>
" style="position:relative; top:6px" border="0" id="<?php echo $this->_tpl_vars['fields']['estimated_end_date']['name']; ?>
_trigger"<?php $this->_smarty_vars['capture']['default'] = ob_get_contents();  $this->assign('other_attributes', ob_get_contents());ob_end_clean();  echo smarty_function_sugar_getimage(array('name' => 'jscalendar','ext' => ".gif",'other_attributes' => ($this->_tpl_vars['other_attributes'])), $this);?>

</span>
<script type="text/javascript">
Calendar.setup ({
inputField : "<?php echo $this->_tpl_vars['fields']['estimated_end_date']['name']; ?>
",
form : "EditView",
ifFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
daFormat : "<?php echo $this->_tpl_vars['CALENDAR_FORMAT']; ?>
",
button : "<?php echo $this->_tpl_vars['fields']['estimated_end_date']['name']; ?>
_trigger",
singleClick : true,
dateStr : "<?php echo $this->_tpl_vars['date_value']; ?>
",
startWeekday: <?php echo ((is_array($_tmp=@$this->_tpl_vars['CALENDAR_FDOW'])) ? $this->_run_mod_handler('default', true, $_tmp, '0') : smarty_modifier_default($_tmp, '0')); ?>
,
step : 1,
weekNumbers:false
}
);
</script>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif;  echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='description_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Project'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<?php if (empty ( $this->_tpl_vars['fields']['description']['value'] )):  $this->assign('value', $this->_tpl_vars['fields']['description']['default_value']);  else:  $this->assign('value', $this->_tpl_vars['fields']['description']['value']);  endif; ?>  
<textarea  id='<?php echo $this->_tpl_vars['fields']['description']['name']; ?>
' name='<?php echo $this->_tpl_vars['fields']['description']['name']; ?>
'
rows="4" 
cols="60" 
title='' tabindex="0" 
 ><?php echo $this->_tpl_vars['value']; ?>
</textarea>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() { initPanel(1, 'expanded'); }); </script>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_PROJECT_INFORMATION").style.display='none';</script>
<?php endif; ?>
<div id="detailpanel_2" class="<?php echo ((is_array($_tmp=@$this->_tpl_vars['def']['templateMeta']['panelClass'])) ? $this->_run_mod_handler('default', true, $_tmp, 'edit view edit508') : smarty_modifier_default($_tmp, 'edit view edit508')); ?>
">
<?php echo smarty_function_counter(array('name' => 'panelFieldCount','start' => 0,'print' => false,'assign' => 'panelFieldCount'), $this);?>

<h4>&nbsp;&nbsp;
<a href="javascript:void(0)" class="collapseLink" onclick="collapsePanel(2);">
<img border="0" id="detailpanel_2_img_hide" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "basic_search.gif"), $this);?>
"></a>
<a href="javascript:void(0)" class="expandLink" onclick="expandPanel(2);">
<img border="0" id="detailpanel_2_img_show" src="<?php echo smarty_function_sugar_getimagepath(array('file' => "advanced_search.gif"), $this);?>
"></a>
<?php echo smarty_function_sugar_translate(array('label' => 'LBL_PANEL_ASSIGNMENT','module' => 'Project'), $this);?>

<script>
document.getElementById('detailpanel_2').className += ' expanded';
</script>
</h4>
<table width="100%" border="0" cellspacing="1" cellpadding="0"  id='LBL_PANEL_ASSIGNMENT'  class="yui3-skin-sam edit view panelContainer">
<?php echo smarty_function_counter(array('name' => 'fieldsUsed','start' => 0,'print' => false,'assign' => 'fieldsUsed'), $this);?>

<?php ob_start(); ?>
<tr>
<td valign="top" id='assigned_user_name_label' width='12.5%' scope="col">
<?php ob_start();  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_USER_NAME','module' => 'Project'), $this); $this->_smarty_vars['capture']['label'] = ob_get_contents();  $this->assign('label', ob_get_contents());ob_end_clean();  echo ((is_array($_tmp=$this->_tpl_vars['label'])) ? $this->_run_mod_handler('strip_semicolon', true, $_tmp) : smarty_modifier_strip_semicolon($_tmp)); ?>
:
</td>
<?php echo smarty_function_counter(array('name' => 'fieldsUsed'), $this);?>


<td valign="top" width='37.5%' colspan='3'>
<?php echo smarty_function_counter(array('name' => 'panelFieldCount'), $this);?>


<input type="text" name="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" class="sqsEnabled" tabindex="0" id="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" size="" value="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['value']; ?>
" title='' autocomplete="off"  	 >
<input type="hidden" name="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['id_name']; ?>
" 
id="<?php echo $this->_tpl_vars['fields']['assigned_user_name']['id_name']; ?>
" 
value="<?php echo $this->_tpl_vars['fields']['assigned_user_id']['value']; ?>
">
<span class="id-ff multiple">
<button type="button" name="btn_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" id="btn_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_USERS_TITLE'), $this);?>
" class="button firstChild" value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_SELECT_USERS_LABEL'), $this);?>
"
onclick='open_popup(
"<?php echo $this->_tpl_vars['fields']['assigned_user_name']['module']; ?>
", 
600, 
400, 
"", 
true, 
false, 
<?php echo '{"call_back_function":"set_return","form_name":"EditView","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}'; ?>
, 
"single", 
true
);' ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-select.png"), $this);?>
"></button><button type="button" name="btn_clr_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" id="btn_clr_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
" tabindex="0" title="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_USERS_TITLE'), $this);?>
"  class="button lastChild"
onclick="SUGAR.clearRelateField(this.form, '<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
', '<?php echo $this->_tpl_vars['fields']['assigned_user_name']['id_name']; ?>
');"  value="<?php echo smarty_function_sugar_translate(array('label' => 'LBL_ACCESSKEY_CLEAR_USERS_LABEL'), $this);?>
" ><img src="<?php echo smarty_function_sugar_getimagepath(array('file' => "id-ff-clear.png"), $this);?>
"></button>
</span>
<script type="text/javascript">
SUGAR.util.doWhen(
		"typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['<?php echo $this->_tpl_vars['form_name']; ?>
_<?php echo $this->_tpl_vars['fields']['assigned_user_name']['name']; ?>
']) != 'undefined'",
		enableQS
);
</script>
</tr>
<?php $this->_smarty_vars['capture']['tr'] = ob_get_contents();  $this->assign('tableRow', ob_get_contents());ob_end_clean();  if ($this->_tpl_vars['fieldsUsed'] > 0):  echo $this->_tpl_vars['tableRow']; ?>

<?php endif; ?>
</table>
<script type="text/javascript">SUGAR.util.doWhen("typeof initPanel == 'function'", function() { initPanel(2, 'expanded'); }); </script>
</div>
<?php if ($this->_tpl_vars['panelFieldCount'] == 0): ?>
<script>document.getElementById("LBL_PANEL_ASSIGNMENT").style.display='none';</script>
<?php endif; ?>
</div></div>

<script language="javascript">
    var _form_id = '<?php echo $this->_tpl_vars['form_id']; ?>
';
    <?php echo '
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == \'\') ? \'EditView\' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
    '; ?>

</script>
<?php $this->assign('place', '_FOOTER'); ?> <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
<div class="action_buttons"><?php if ($this->_tpl_vars['bean']->aclAccess('save')): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_KEY']; ?>
" class="button primary" onclick="var _form = document.getElementById('EditView'); <?php if ($this->_tpl_vars['isDuplicate']): ?>_form.return_id.value=''; <?php endif; ?>_form.action.value='Save'; if(check_form('EditView'))SUGAR.ajaxUI.submitForm(_form);return false;" type="submit" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_SAVE_BUTTON_LABEL']; ?>
" id="SAVE_FOOTER"><?php endif; ?>  <?php if (! empty ( $_REQUEST['return_action'] ) && $_REQUEST['return_action'] == 'ProjectTemplatesDetailView' && ( ! empty ( $this->_tpl_vars['fields']['id']['value'] ) || ! empty ( $_REQUEST['return_id'] ) )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="var _form = document.getElementById('EditView');_form.action.value='ProjectTemplatesDetailView'; _form.module.value='<?php echo $_REQUEST['return_module']; ?>
'; _form.record.value='<?php echo $_REQUEST['return_id']; ?>
';_form.submit();" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL<?php echo $this->_tpl_vars['place']; ?>
"/><?php elseif (! empty ( $_REQUEST['return_action'] ) && $_REQUEST['return_action'] == 'DetailView' && ( ! empty ( $this->_tpl_vars['fields']['id']['value'] ) || ! empty ( $_REQUEST['return_id'] ) )): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="var _form = document.getElementById('EditView');_form.action.value='DetailView'; _form.module.value='<?php echo $_REQUEST['return_module']; ?>
'; _form.record.value='<?php echo $_REQUEST['return_id']; ?>
';_form.submit();" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL<?php echo $this->_tpl_vars['place']; ?>
"/><?php elseif ($this->_tpl_vars['is_template']): ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="var _form = document.getElementById('EditView');_form.action.value='ProjectTemplatesListView'; _form.module.value='<?php echo $_REQUEST['return_module']; ?>
'; _form.record.value='<?php echo $_REQUEST['return_id']; ?>
';_form.submit();" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL<?php echo $this->_tpl_vars['place']; ?>
"/><?php else: ?><input title="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_TITLE']; ?>
" accessKey="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_KEY']; ?>
" class="button" onclick="var _form = document.getElementById('EditView');_form.action.value='index'; _form.module.value='<?php echo $_REQUEST['return_module']; ?>
'; _form.record.value='<?php echo $_REQUEST['return_id']; ?>
';_form.submit();" type="button" name="button" value="<?php echo $this->_tpl_vars['APP']['LBL_CANCEL_BUTTON_LABEL']; ?>
" id="CANCEL<?php echo $this->_tpl_vars['place']; ?>
"/><?php endif; ?> <?php if ($this->_tpl_vars['bean']->aclAccess('detail')):  if (! empty ( $this->_tpl_vars['fields']['id']['value'] ) && $this->_tpl_vars['isAuditEnabled']): ?><input id="btn_view_change_log" title="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
" class="button" onclick='open_popup("Audit", "600", "400", "&record=<?php echo $this->_tpl_vars['fields']['id']['value']; ?>
&module_name=Project", true, false,  { "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] } ); return false;' type="button" value="<?php echo $this->_tpl_vars['APP']['LNK_VIEW_CHANGE_LOG']; ?>
"><?php endif;  endif; ?><div class="clear"></div></div>
</div>
</form>
<?php echo $this->_tpl_vars['set_focus_block']; ?>

<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
function(){SUGAR.util.buildAccessKeyLabels();});
</script><script type="text/javascript">
YAHOO.util.Event.onContentReady("EditView",
    function () { initEditView(document.forms.EditView) });
//window.setTimeout(, 100);
window.onbeforeunload = function () { return onUnloadEditView(); };
// bug 55468 -- IE is too aggressive with onUnload event
if ($.browser.msie) {
$(document).ready(function() {
    $(".collapseLink,.expandLink").click(function (e) { e.preventDefault(); });
  });
}
</script><?php echo '
<script type="text/javascript">
addForm(\'EditView\');addToValidate(\'EditView\', \'date_entered_date\', \'date\', false,\'Date Created\' );
addToValidate(\'EditView\', \'date_modified_date\', \'date\', false,\'Date Modified\' );
addToValidate(\'EditView\', \'assigned_user_id\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_USER_ID','module' => 'Project','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'modified_user_id\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_USER_ID','module' => 'Project','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'modified_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_MODIFIED_NAME','module' => 'Project','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'created_by\', \'assigned_user_name\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED_BY','module' => 'Project','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'created_by_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_CREATED','module' => 'Project','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'name\', \'name\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_NAME','module' => 'Project','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'description\', \'text\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DESCRIPTION','module' => 'Project','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'deleted\', \'bool\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DELETED','module' => 'Project','for_js' => true), $this); echo '\' );
addToValidateDateBeforeAllowBlank(\'EditView\', \'estimated_start_date\', \'date\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_START','module' => 'Project','for_js' => true), $this); echo '\', \'estimated_end_date\', \'true\' );
addToValidate(\'EditView\', \'estimated_end_date\', \'date\', true,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_DATE_END','module' => 'Project','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'status\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_STATUS','module' => 'Project','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'priority\', \'enum\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_PRIORITY','module' => 'Project','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'total_estimated_effort\', \'int\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_TOTAL_ESTIMATED_EFFORT','module' => 'Project','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'total_actual_effort\', \'int\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_LIST_TOTAL_ACTUAL_EFFORT','module' => 'Project','for_js' => true), $this); echo '\' );
addToValidate(\'EditView\', \'assigned_user_name\', \'relate\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_USER_NAME','module' => 'Project','for_js' => true), $this); echo '\' );
addToValidateBinaryDependency(\'EditView\', \'assigned_user_name\', \'alpha\', false,\'';  echo smarty_function_sugar_translate(array('label' => 'ERR_SQS_NO_MATCH_FIELD','module' => 'Project','for_js' => true), $this); echo ': ';  echo smarty_function_sugar_translate(array('label' => 'LBL_ASSIGNED_TO','module' => 'Project','for_js' => true), $this); echo '\', \'assigned_user_id\' );
</script><script language="javascript">if(typeof sqs_objects == \'undefined\'){var sqs_objects = new Array;}sqs_objects[\'EditView_assigned_user_name\']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};</script>'; ?>
