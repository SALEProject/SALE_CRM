<?php /* Smarty version 2.6.11, created on 2016-10-13 12:39:15
         compiled from themes/BRM/tpls/header.tpl */ ?>
<div align="center">
			<a href='http://www.fonduri-ue.ro/' target='_blank'><img src="index.php?entryPoint=getImage&themeName=BRM&themeName=BRM&imageName=logo-ue.png" alt=""/></a>
		</div>
        <!-- Title -->
        <div class="row" align="center">			
			<div>
				<p>Programul Operational Sectorial "Cresterea Competitivitatii Economice" - <i><b>Investitii pentru viitorul dumneavoastra</b></i></p>
				<p><b>Sistem Alternativ de Licitatii Electronice SALE - SMIS 46690</b> - Proiect cofinantat prin Fondul European de Dezvoltare Regionala</p>
			</div>
			<br>
			
        </div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "themes/BRM/tpls/_head.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<body onMouseOut="closeMenus();">
<a name="top"></a>
<?php echo $this->_tpl_vars['DCSCRIPT']; ?>

<div id="header">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "themes/BRM/tpls/_companyLogo.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "themes/BRM/tpls/_globalLinks.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "themes/BRM/tpls/_welcome.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <div class="clear"></div>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "themes/BRM/tpls/_headerSearch.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <div class="clear"></div>
    <?php if (! $this->_tpl_vars['AUTHENTICATED']): ?>
    <br /><br />
    <?php endif; ?>
    <div id="ajaxHeader">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "themes/BRM/tpls/_headerModuleList.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </div>
    <div class="clear"></div>
    <div class="line"></div>
</div>

<?php echo '
<iframe id=\'ajaxUI-history-iframe\' src=\'index.php?entryPoint=getImage&imageName=blank.png\'  title=\'empty\' style=\'display:none\'></iframe>
<input id=\'ajaxUI-history-field\' type=\'hidden\'>
<script type=\'text/javascript\'>
if (SUGAR.ajaxUI && !SUGAR.ajaxUI.hist_loaded)
{
    YAHOO.util.History.register(\'ajaxUILoc\', "", SUGAR.ajaxUI.go);
    ';  if ($_REQUEST['module'] != 'ModuleBuilder'): ?>    YAHOO.util.History.initialize("ajaxUI-history-field", "ajaxUI-history-iframe");
    <?php endif;  echo '
}
</script>
'; ?>


<div id="main">
    <div id="content" <?php if (! $this->_tpl_vars['AUTHENTICATED']): ?>class="noLeftColumn" <?php endif; ?>>
        <table style="width:100%"><tr><td>