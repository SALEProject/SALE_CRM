<?php /* Smarty version 2.6.11, created on 2015-06-27 08:40:56
         compiled from themes/BRM/tpls/footer.tpl */ ?>
<!--end body panes-->
        </td></tr></table>
    </div>
    <div class="clear"></div>
</div>
<div id="bottomLinks">
<?php if ($this->_tpl_vars['AUTHENTICATED']):  echo $this->_tpl_vars['BOTTOMLINKS']; ?>

<?php endif; ?>
</div>
<div class="row" align="center">
                <div class="col-lg-12">
                    Pentru informaţii detaliate despre celelalte programe operaţionale cofinanţate de Uniunea Europeană vă invităm să vizitaţi <a href='www.fonduri-ue.ro'>www.fonduri-ue.ro</a>
					<br>
					Conţinutul acestui material nu reprezintă în mod obligatoriu poziţia oficială a Uniunii Europene sau a Guvernului României.</p>
                </div>
            </div>

<div id="footer">
	<table style="width: 100%">
		<tr>
			<td class="footerbar">
				<div id="responseTime" class="brm_responseTime">
			    		<?php echo $this->_tpl_vars['STATISTICS']; ?>

				</div>
			</td>
			<td class="footerbar" width="30%">
				<div class="brm_4ecopyright">
					<p>powered by 4E Software</p>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div id="copyright" class="brm_sugarcopyright">
					<?php echo $this->_tpl_vars['COPYRIGHT']; ?>

				</div>
			</td>
			<td>
	                   <div id="4Esoft">
                           	<img src="index.php?entryPoint=getImage&themeName=BRM&themeName=BRM&themeName=BRM&imageName=4esoftware_logo_pr.jpg" width="90px" height="90px"/>
 			   </div>
			</td>
		</tr>
	</table>
</div>
<script>
<?php echo '
if(SUGAR.util.isTouchScreen()) {
        setTimeout(resizeHeader,10000);
}

//qe_init function sets listeners to click event on elements of \'quickEdit\' class
 if(typeof(DCMenu) !=\'undefined\'){
    DCMenu.qe_refresh = false;
    DCMenu.qe_handle;
 }
function qe_init(){

    //do not process if YUI is undefined
    if(typeof(YUI)==\'undefined\' || typeof(DCMenu) == \'undefined\'){
        return;
    }


    //remove all existing listeners.  This will prevent adding multiple listeners per element and firing multiple events per click
    if(typeof(DCMenu.qe_handle) !=\'undefined\'){
        DCMenu.qe_handle.detach();
    }

    //set listeners on click event, and define function to call
    YUI().use(\'node\', function(Y) {
        var qe = Y.all(\'.quickEdit\');
        var refreshDashletID;
        var refreshListID;

        //store event listener handle for future use, and define function to call on click event
        DCMenu.qe_handle = qe.on(\'click\', function(e) {
            //function will flash message, and retrieve data from element to pass on to DC.miniEditView function
            ajaxStatus.flashStatus(SUGAR.language.get(\'app_strings\', \'LBL_LOADING\'),800);
            e.preventDefault();
            if(typeof(e.currentTarget.getAttribute(\'data-dashlet-id\'))!=\'undefined\'){
                refreshDashletID = e.currentTarget.getAttribute(\'data-dashlet-id\');
            }
            if(typeof(e.currentTarget.getAttribute(\'data-list\'))!=\'undefined\'){
                refreshListID = e.currentTarget.getAttribute(\'data-list\');
            }
            DCMenu.miniEditView(e.currentTarget.getAttribute(\'data-module\'), e.currentTarget.getAttribute(\'data-record\'),refreshListID,refreshDashletID);
        });

    });
}

    qe_init();


	SUGAR_callsInProgress++;
	SUGAR._ajax_hist_loaded = true;
    if(SUGAR.ajaxUI)
    	YAHOO.util.Event.onContentReady(\'ajaxUI-history-field\', SUGAR.ajaxUI.firstLoad);
</script>
'; ?>


</body>
</html>