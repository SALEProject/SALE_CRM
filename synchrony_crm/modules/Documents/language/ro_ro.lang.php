<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Public License Version
 * 1.1.3 ("License"); You may not use this file except in compliance with the
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an "AS IS" basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied.  See the License
 * for the specific language governing rights and limitations under the
 * License.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *    (i) the "Powered by SugarCRM" logo and
 *    (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * The Original Code is: SugarCRM Open Source
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) 2004-2006 SugarCRM, Inc.;
 * All Rights Reserved.
 *
 * Description: Defines the Romanian language pack for the base application.
 * Contributor:  Belghir Raul Cristian
 ********************************************************************************/






$mod_strings = array (
	//module
	'LBL_MODULE_NAME' => 'Documente',
	'LBL_MODULE_TITLE' => 'Documente: Start',
	'LNK_NEW_DOCUMENT' => 'Nou Document',
	'LNK_DOCUMENT_LIST'=> 'Documente',
	'LBL_DOC_REV_HEADER' => 'Revizii documente',
	'LBL_SEARCH_FORM_TITLE'=> 'Caută documente',
	//vardef labels
	'LBL_DOCUMENT_ID' => 'ID-ul documentului',	
	'LBL_NAME' => 'Nume document',
	'LBL_DESCRIPTION' => 'Descriere',
	'LBL_CATEGORY' => 'Categorie',
	'LBL_SUBCATEGORY' => 'Subcategorie',
	'LBL_STATUS' => 'Status', 
	'LBL_CREATED_BY'=> 'Creat de',
	'LBL_DATE_ENTERED'=> 'Data intrării',
	'LBL_DATE_MODIFIED'=> 'Data modificării',
	'LBL_DELETED' => 'Şters',
	'LBL_MODIFIED'=> 'Modificat de',
	'LBL_CREATED'=> 'Creat de',
	'LBL_RELATED_DOCUMENT_ID'=>'ID-ul documentului asociat',
	'LBL_RELATED_DOCUMENT_REVISION_ID'=>'ID-ul reviziei documentului asociat',
	'LBL_IS_TEMPLATE'=>'Este un şablon',
	'LBL_TEMPLATE_TYPE'=>'Tip de document',
	
	'LBL_REVISION_NAME' => 'Numărul reviziei',
	'LBL_FILENAME' => 'Nume fişier',
	'LBL_MIME' => 'Tip MIME',
	'LBL_REVISION' => 'Revizie',
	'LBL_DOCUMENT' => 'Documente în legătură',
	'LBL_LATEST_REVISION' => 'Ultima revizie',
	'LBL_CHANGE_LOG'=> 'Jurnalul de modificări',
	'LBL_ACTIVE_DATE'=> 'Data publicării',
	'LBL_EXPIRATION_DATE' => 'Data expirării',
	'LBL_FILE_EXTENSION'  => 'Extensia fişierului',
	
	'LBL_CAT_OR_SUBCAT_UNSPEC'=>'Nespecificat',
	//document edit and detail view
	'LBL_DOC_NAME' => 'Nume document:',
	'LBL_FILENAME' => 'Nume fişier:',
	'LBL_DOC_VERSION' => 'Revizie:',
	'LBL_CATEGORY_VALUE' => 'Categorie:',
	'LBL_SUBCATEGORY_VALUE'=> 'Subcategorie:',
	'LBL_DOC_STATUS'=> 'Status:',
	'LBL_LAST_REV_CREATOR' => 'Revizie creată de:',
	'LBL_LAST_REV_DATE' => 'Ultima reviziei:',
	'LBL_DOWNNLOAD_FILE'=> 'Descarcă fişierul:',
	'LBL_DET_RELATED_DOCUMENT'=>'Document asociat:',
	'LBL_DET_RELATED_DOCUMENT_VERSION'=>"Revizia documentului asociat:",
	'LBL_DET_IS_TEMPLATE'=>'Document şablon:',
	'LBL_DET_TEMPLATE_TYPE'=>'Tip de document:',



	'LBL_DOC_DESCRIPTION'=>'Descriere:',
	'LBL_DOC_ACTIVE_DATE'=> 'Data publicării:',
	'LBL_DOC_EXP_DATE'=> 'Data expirării:',
	
	//document list view.	
	'LBL_LIST_FORM_TITLE' => 'Lista de documente',
	'LBL_LIST_DOCUMENT' => 'Document',
	'LBL_LIST_CATEGORY' => 'Categorie',
	'LBL_LIST_SUBCATEGORY' => 'Subcategorie',
	'LBL_LIST_REVISION' => 'Revizie',
	'LBL_LIST_LAST_REV_CREATOR' => 'Publicat de',
	'LBL_LIST_LAST_REV_DATE' => 'Ultima revizie',
	'LBL_LIST_VIEW_DOCUMENT'=>'Vizualizeză',
    'LBL_LIST_DOWNLOAD'=> 'Descarcă',
	'LBL_LIST_ACTIVE_DATE' => 'Data publicării',
	'LBL_LIST_EXP_DATE' => 'Data expirării',
	'LBL_LIST_STATUS'=>'Status',

	//document search form.
	'LBL_SF_DOCUMENT' => 'Nume document:',
	'LBL_SF_CATEGORY' => 'Categorie:',
	'LBL_SF_SUBCATEGORY'=> 'Subcategorie:',
	'LBL_SF_ACTIVE_DATE' => 'Data publicării:',
	'LBL_SF_EXP_DATE'=> 'Data expirări:',
	
	'DEF_CREATE_LOG' => 'Document creat',
	
	//error messages
	'ERR_DOC_NAME'=>'Nume document',
	'ERR_DOC_ACTIVE_DATE'=>'data publicării',
	'ERR_DOC_EXP_DATE'=> 'Data expirării',
	'ERR_FILENAME'=> 'Nume fişier',
	'ERR_DOC_VERSION'=> 'Versiune document',
	'ERR_DELETE_CONFIRM'=> 'Vreţi să ştergeţi revizia aceasta de document?',
	'ERR_DELETE_LATEST_VERSION'=> 'Nu aveţi voie să ştergeţi ultima revizie a unui document.',
	'LNK_NEW_MAIL_MERGE' => 'Nou şablon de email',
	'LBL_MAIL_MERGE_DOCUMENT' => 'Şablon de email:',
	
	'LBL_TREE_TITLE' => 'Documente',
	//sub-panel vardefs.
	'LBL_LIST_DOCUMENT_NAME'=>'Nume document',
	'LBL_CONTRACT_NAME'=>'Nume contract:',
	'LBL_LIST_IS_TEMPLATE'=>'Document şablon',
	'LBL_LIST_TEMPLATE_TYPE'=>'Tip document',
	'LBL_LIST_SELECTED_REVISION'=>'Revizie selectată',
	'LBL_LIST_LATEST_REVISION'=>'Ultima revizie',
	'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Contracte asemănătoare',
    //'LNK_DOCUMENT_CAT'=>'Document Categories',
);


?>