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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT
    'ERR_DELETE_RECORD' => 'Un număr de înrregistrare trebuie specificat pentru a şterge referinţa.',
    'LBL_ACCOUNT_DESCRIPTION'=> 'Descriere organizaţie',
    'LBL_ACCOUNT_ID'=>'ID organizaţie',
    'LBL_ACCOUNT_NAME' => 'Nume organizaţie:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Activităţi',
    'LBL_ADD_BUSINESSCARD' => 'Adaugă carte de vizită',
    'LBL_ADDRESS_INFORMATION' => 'Adresă',
    'LBL_ALT_ADDRESS_CITY' => 'Adresă alternativă - Oraş:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Adresă alternativă - Ţara:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Adresă alternativă - Cod poştal:',
    'LBL_ALT_ADDRESS_STATE' => 'Adresă alternativă - Stat/judeţ:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Adresă alternativă - Strada 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Adresă alternativă - Strada 2:',
    'LBL_ALT_ADDRESS_STREET' => 'Adresă alternativă - Strada:',
    'LBL_ALTERNATE_ADDRESS' => 'Altă adresă:',
    'LBL_ANY_ADDRESS' => 'O adresă:',
    'LBL_ANY_EMAIL' => 'Un email:',
    'LBL_ANY_PHONE' => 'Un telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuit lui',
    'LBL_BACKTOLEADS' => 'Înapoi la referinţe',
    'LBL_BUSINESSCARD' => 'Converteşte referinţă',
    'LBL_CITY' => 'Oraş:',
    'LBL_CONTACT_ID' => 'ID contact',
    'LBL_CONTACT_INFORMATION' => 'Informaţii referinţă',
    'LBL_CONTACT_NAME' => 'Nume referinţă:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Afaceri:',
    'LBL_CONTACT_ROLE' => 'Rol:',
    'LBL_CONTACT' => 'Referinţă:',
    'LBL_CONVERTED_ACCOUNT'=>'Organizaţie convertită:',
    'LBL_CONVERTED_CONTACT' => 'Contact convertit:',
    'LBL_CONVERTED_OPP'=>'Afacere convertită:',
    'LBL_CONVERTED'=> 'Convertit',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Converteşte referinţă [Alt+V]',
    'LBL_CONVERTLEAD' => 'Converteşte referinţă',
    'LBL_COUNTRY' => 'Ţara:',
    'LBL_CREATED_ACCOUNT' => 'Nouă organizaţie creată',
    'LBL_CREATED_CALL' => 'Nou apel creat',
    'LBL_CREATED_CONTACT' => 'Nou contact creat',
    'LBL_CREATED_MEETING' => 'Nouă întâlnire creată',
    'LBL_CREATED_OPPORTUNITY' => 'Nouă afacere creată',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Referinţe',
    'LBL_DEPARTMENT' => 'Departament:',
    'LBL_DESCRIPTION_INFORMATION' => 'Descriere',
    'LBL_DESCRIPTION' => 'Descriere:',
    'LBL_DO_NOT_CALL' => 'Nu contacta telefonic:',
    'LBL_DUPLICATE' => 'Referinţe similare',
    'LBL_EMAIL_ADDRESS' => 'Email:',
    'LBL_EMAIL_OPT_OUT' => 'Nu contacta prin email:',
    'LBL_EXISTING_ACCOUNT' => 'S-a folosit o organizaţie existentă',
    'LBL_EXISTING_CONTACT' => 'S-a folosit un contact existent',
    'LBL_EXISTING_OPPORTUNITY' => 'S-a folosit o afacere existentă',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Prenume:',
    'LBL_FULL_NAME' => 'Nume întreg:',
    'LBL_HISTORY_SUBPANEL_TITLE'=>'Istorie',
    'LBL_HOME_PHONE' => 'Telefon acasă:',
    'LBL_IMPORT_VCARD' => 'Importă vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Creează automat o nouă referinţă prin importul unui vCard.',
    'LBL_INVALID_EMAIL'=>'Email invalid:',
    'LBL_INVITEE' => 'Raport direct',
    'LBL_LAST_NAME' => 'Nume:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Descriere:',
    'LBL_LEAD_SOURCE' => 'Sursă:',
    'LBL_LIST_ACCOUNT_NAME' => 'Nume organizaţie',
    'LBL_LIST_CONTACT_NAME' => 'Nume referinţă',
    'LBL_LIST_CONTACT_ROLE' => 'Rol',
    'LBL_LIST_DATE_ENTERED' => 'Data creării',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'Prenume',
    'LBL_VIEW_FORM_TITLE' => 'Vizualizare referinţă',
    'LBL_LIST_FORM_TITLE' => 'Lista de referinţe',
    'LBL_LIST_LAST_NAME' => 'Nume',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Descriere',
    'LBL_LIST_LEAD_SOURCE' => 'Sursă',
    'LBL_LIST_MY_LEADS' => 'Referinţele mele',
    'LBL_LIST_NAME' => 'Nume',
    'LBL_LIST_PHONE' => 'Telefon birou',
    'LBL_LIST_REFERED_BY' => 'Recomandat de',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Titlu',
    'LBL_MOBILE_PHONE' => 'Mobil:',
    'LBL_MODULE_NAME' => 'Referinţe',
    'LBL_MODULE_TITLE' => 'Referinţe: Start',
    'LBL_NAME' => 'Nume:',
    'LBL_NEW_FORM_TITLE' => 'Nouă referinţă',
    'LBL_NEW_PORTAL_PASSWORD' => 'Nouă parolă portal:',
    'LBL_OFFICE_PHONE' => 'Telefon birou:',
    'LBL_OPP_NAME' => 'Nume afacere:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Valoare afacere:',
    'LBL_OPPORTUNITY_ID'=>'ID afacere',
    'LBL_OPPORTUNITY_NAME' => 'Nume afacere:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Alt email:',
    'LBL_OTHER_PHONE' => 'Alt telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_ACTIVE' => 'Portal activ:',
    'LBL_PORTAL_APP'=> 'Aplicaţie portal',
    'LBL_PORTAL_INFORMATION' => 'Informaţii portal',
    'LBL_PORTAL_NAME' => 'Nume portal:',
    'LBL_PORTAL_PASSWORD_ISSET' => 'Parola de portal activă:',
    'LBL_POSTAL_CODE' => 'Cod poştal:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Adresă principală - Oraş:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Adresă principală - Ţara:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Adresă principală - Cod poştal:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Adresă principală - Stat/judeţ:',
    'LBL_PRIMARY_ADDRESS_STREET_2'=>'Adresă principală - Strada 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3'=>'Adresă principală - Strada 3:',   
    'LBL_PRIMARY_ADDRESS_STREET' => 'Adresă principală - Strada:',
    'LBL_PRIMARY_ADDRESS' => 'Adresă principală:',
    'LBL_REFERED_BY' => 'Recomandat de:',
    'LBL_REPORTS_TO_ID'=>'Raportează la ID',
    'LBL_REPORTS_TO' => 'Raportează lui:',
    'LBL_SALUTATION' => 'Apelativ',
    'LBL_SEARCH_FORM_TITLE' => 'Caută referinţă',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Alege referinţele bifate',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Alege referinţele bifate',
    'LBL_STATE' => 'Stat/judeţ:',
    'LBL_STATUS_DESCRIPTION' => 'Descriere status:',
    'LBL_STATUS' => 'Status:',
    'LBL_TITLE' => 'Titlu:',
    'LNK_IMPORT_VCARD' => 'Importă vCard',
    'LNK_LEAD_LIST' => 'Referinţe',
    'LNK_NEW_ACCOUNT' => 'Nouă organizaţie',
    'LNK_NEW_APPOINTMENT' => 'Nouă programare',
    'LNK_NEW_CONTACT' => 'Nou contact',
    'LNK_NEW_LEAD' => 'Nouă referinţă',
    'LNK_NEW_NOTE' => 'Nouă notă',
    'LNK_NEW_OPPORTUNITY' => 'Nouă afacere',
    'LNK_SELECT_ACCOUNT' => 'Alege organizaţie',
    'MSG_DUPLICATE' => 'Referinţe similare au fost găsite. Verificaţi pentru referinţe pe care le vreţi asociate cu înregistrările care se vor adăuga prin această conversie.',
    'NTC_COPY_ALTERNATE_ADDRESS' => 'Copiază adresa alternativă în adresa primară',
    'NTC_COPY_PRIMARY_ADDRESS' => 'Copiază adresa primară în adresa alternativă',
    'NTC_DELETE_CONFIRMATION' => 'Sunteţi sigur(ă) că vreţi să ştergeţi întregistrarea?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Pentru crearea unei afaceri este nevoie un cont de organizaţie.\n Adăugaţi o organizaţie sau alegeţi una existentă.',
    'NTC_REMOVE_CONFIRMATION' => 'Sunteţi sigur(ă) că vreţi să ştergeţi această referinţă de la caz?',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => 'Sunteţi sigur(ă) că vreţi să ştergeţi această înregistrare ca raport direct?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE'=>'Campanii',
    'LBL_TARGET_OF_CAMPAIGNS'=>'Campanii cu succes:',
    'LBL_TARGET_BUTTON_LABEL'=>'Destinaţie',
    'LBL_TARGET_BUTTON_TITLE'=>'Destinaţie',
    'LBL_TARGET_BUTTON_KEY'=>'T',
    'LBL_CAMPAIGN_ID'=>'ID campanie',
  	'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilizator',
	 'LNK_IMPORT_LEADS' => 'Importa referinţe',


);


?>
