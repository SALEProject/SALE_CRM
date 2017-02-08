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
  'LBL_MODULE_NAME' => 'Afaceri',
  'LBL_MODULE_TITLE' => 'Afaceri: Start',
  'LBL_SEARCH_FORM_TITLE' => 'Caută afaceri',
  'LBL_VIEW_FORM_TITLE' => 'Vizualizare afacere',
  'LBL_LIST_FORM_TITLE' => 'Lista de afaceri',
  'LBL_OPPORTUNITY_NAME' => 'Nume afacere:',
  'LBL_OPPORTUNITY' => 'Afacere:',
  'LBL_NAME' => 'Nume afacere',
  'LBL_INVITEE' => 'Contacte',
  'LBL_LIST_OPPORTUNITY_NAME' => 'Afacere',
  'LBL_LIST_ACCOUNT_NAME' => 'Nume organizaţie',
  'LBL_LIST_AMOUNT' => 'Valoare',
  'LBL_LIST_DATE_CLOSED' => 'Data de terminare',
  'LBL_LIST_SALES_STAGE' => 'Stadiul',
  'LBL_ACCOUNT_ID'=>'ID organizaţie',
  'LBL_CURRENCY_ID'=>'ID Valută',
  'LBL_TEAM_ID' =>'ID Echipă',
//DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_sales_stage' => 'LBL_LIST_SALES_STAGE',
  'db_name' => 'LBL_NAME',
  'db_amount' => 'LBL_LIST_AMOUNT',
  'db_date_closed' => 'LBL_LIST_DATE_CLOSED',
//END DON'T CONVERT
  'UPDATE' => 'Afaceri - Actualizare valută',
  'UPDATE_DOLLARAMOUNTS' => 'Actualizează valori în USD',
  'UPDATE_VERIFY' => 'Verifică valori',
  'UPDATE_VERIFY_TXT' => 'Verifică faptul că valorile afacerilor sunt valori zecimale valide formate din caracterele 0-9 şi .',
  'UPDATE_FIX' => 'Repară valorile',
  'UPDATE_FIX_TXT' => 'Încearcă să repare toate valorile invalide prin obţinerea unui zecimal din valoarea curentă. Aceasta va face o salvare de rezervă a valorilor modificate într-un câmp amount_backup. Dacă rezultatele obţinute nu sunt cele dorite nu repetaţi acţiunea. Valorile invalide vor rămâne permanente',
  'UPDATE_DOLLARAMOUNTS_TXT' => 'Actualizează valori în USD pentru afaceri bazat pe ratele de conversie curente. Această valoare este folosită să se afişeze graficele şi valorile din liste.',
  'UPDATE_CREATE_CURRENCY' => 'Nouă valută:',
  'UPDATE_VERIFY_FAIL' => 'Înregistrează verificare ratată:',
  'UPDATE_VERIFY_CURAMOUNT' => 'Valoarea curentă:',
  'UPDATE_VERIFY_FIX' => 'Prin reparare ar da',
  'UPDATE_INCLUDE_CLOSE' => 'Include înregistrările închise',
  'UPDATE_VERIFY_NEWAMOUNT' => 'Nouă valoare:',
  'UPDATE_VERIFY_NEWCURRENCY' => 'Nouă valută:',
  'UPDATE_DONE' => 'Terminat',
  'UPDATE_BUG_COUNT' => 'S-au găsit erori şi s-au încercat să se rezolve:',
  'UPDATE_BUGFOUND_COUNT' => 'S-au găsit erori:',
  'UPDATE_COUNT' => 'Înregistrări actualizate:',
  'UPDATE_RESTORE_COUNT' => 'Restaurate:',
  'UPDATE_RESTORE' => 'Restaurează',
  'UPDATE_RESTORE_TXT' => 'Restaurează valorile din copia de rezervă făcută în timpul reparaţiei.',
  'UPDATE_FAIL' => 'Nu s-a putut actualiza - ',
  'UPDATE_NULL_VALUE' => 'Valoarea este NULL şi se va atribui zero -',
  'UPDATE_MERGE' => 'Converteşte în valută',
  'UPDATE_MERGE_TXT' => 'Converteşte valute diferite într-una singură. Dacă se găsesc mai multe înregistrări cu valute diferite pentru una şi aceeaşi, puteţi să le convertiţi într-o singură valută.',
  'LBL_ACCOUNT_NAME' => 'Nume organizaţie:',
  'LBL_AMOUNT' => 'Suma:',
  'LBL_CURRENCY' => 'Valuta:',
  'LBL_DATE_CLOSED' => 'Data de terminare:',
  'LBL_TYPE' => 'Tip:',
  'LBL_NEXT_STEP' => 'Următorul pas:',
  'LBL_LEAD_SOURCE' => 'Sursă:',
  'LBL_SALES_STAGE' => 'Stadiu:',
  'LBL_PROBABILITY' => 'Probabilitate (%):',
  'LBL_DESCRIPTION' => 'Descriere:',
  'LBL_DUPLICATE' => 'Posibilă duplicare de afacere',
  'MSG_DUPLICATE' => 'Prin crearea acestei afaceri s-ar putea să apară o dublură. Puteţi ori să alegeţi o afacere în lista de mai jos sau să creaţi o nouă afacere cu datele introduse anterior.',
  'LBL_NEW_FORM_TITLE' => 'Nouă afacere',
  'LNK_NEW_OPPORTUNITY' => 'Nouă afacere',



  'LNK_OPPORTUNITY_LIST' => 'Afaceri',
  'ERR_DELETE_RECORD' => 'Un număr de înregistrare trebuie să fie specificat pentru a şterge afacerea.',
  'LBL_TOP_OPPORTUNITIES' => 'Afacerile mele',
  'NTC_REMOVE_OPP_CONFIRMATION' => 'Sunteţi sigur(ă) ca vreţi să ştergeţi acest contact de la afacere?',
	'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Sunteţi sigur(ă) ca vreţi să ştergeţi această afacere din proiect?',
	'LBL_AMOUNT_BACKUP'=>'Valori rezervate',
	'LBL_DEFAULT_SUBPANEL_TITLE' => 'Afaceri',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Activităţi',
	'LBL_HISTORY_SUBPANEL_TITLE'=>'Istorie',
    'LBL_RAW_AMOUNT'=>'Valoare brută',
	
    'LBL_LEADS_SUBPANEL_TITLE' => 'Referinţe',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacte',



    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proiecte',
	    'LBL_ASSIGNED_TO_NAME' => 'Atribuit lui:',
	'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilizator',
	
	
	
	
    'LBL_LIST_SALES_STAGE' => 'Stadiul vânzării',
	
	'LNK_IMPORT_OPPORTUNITIES' => 'Oportunitati'

);

?>
