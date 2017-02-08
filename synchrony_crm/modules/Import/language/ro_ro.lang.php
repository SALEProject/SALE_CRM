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
  'LBL_IMPORT_MODULE_NO_DIRECTORY' => 'Directorul ',
  'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => ' nu există sau nu se poate scrie în el.',
  'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'Fişierul nu a fost trimis corect. Valoarea pentru \'upload_max_filesize\' din php.ini este prea mică.',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => 'Fişier prea mare. Max:',
  'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => 'Bytes. Schimbaţi $sugar_config[\'upload_maxsize\'] din fişierul config.php.',
  'LBL_MODULE_NAME' => 'Import',
  'LBL_TRY_AGAIN' => 'Încercaţi don nou',
  'LBL_ERROR' => 'Eroare:',
  'ERR_MULTIPLE' => 'Mai multe coloane au fost definite cu acelaşi nume de câmp.',
  'ERR_MISSING_REQUIRED_FIELDS' => 'Câmpurile necesare lipsesc:',
  'ERR_SELECT_FULL_NAME' => 'Nu puteţi alege Nume complet când sunt selectate Prenume şi Nume.',
  'ERR_SELECT_FILE' => 'Alegeţi un fişier pentru încărcare.',
  'LBL_SELECT_FILE' => 'Alegeţi un fişier:',
  'LBL_CUSTOM' => 'Personalizare',
  'LBL_CUSTOM_CSV' => 'Format personalizat delimitat de virgule',
  'LBL_CSV' => 'Fişier CSV',
  'LBL_TAB' => 'Fişier TSV',
  'LBL_CUSTOM_DELIMETED' => 'Fişier cu valori delimitate nonstandard',
  'LBL_CUSTOM_DELIMETER' => 'Delimitator:',
  'LBL_CUSTOM_TAB' => 'Format personalizat delimitat de taburi',
  'LBL_DONT_MAP' => '-- Nu mapa acest câmp --',
  'LBL_STEP_1_TITLE' => 'Etapa 1: Selectarea sursei',
  'LBL_WHAT_IS' => 'Care este sursa de date?',
  'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
  'LBL_ACT' => 'Act!',
  'LBL_ACT_2005' => 'Act! 2005',
  'LBL_SALESFORCE' => 'Salesforce.com',
  'LBL_MY_SAVED' => 'Surse salvate:',
  'LBL_PUBLISH' => 'publică',
  'LBL_DELETE' => 'şterge',
  'LBL_PUBLISHED_SOURCES' => 'Surse publicate:',
  'LBL_UNPUBLISH' => 'nepublicat',
  'LBL_NEXT' => 'Următor >',
  'LBL_BACK' => '< Anterior',
  'LBL_STEP_2_TITLE' => 'Etapa 2: Încărcare fişier de export',
  'LBL_HAS_HEADER' => 'Are antet:',
  'LBL_NUM_1' => '1.',
  'LBL_NUM_2' => '2.',
  'LBL_NUM_3' => '3.',
  'LBL_NUM_4' => '4.',
  'LBL_NUM_5' => '5.',
  'LBL_NUM_6' => '6.',
  'LBL_NUM_7' => '7.',
  'LBL_NUM_8' => '8.',
  'LBL_NUM_9' => '9.',
  'LBL_NUM_10' => '10.',
  'LBL_NUM_11' => '11.',
  'LBL_NUM_12' => '12.',
  'LBL_NOTES' => 'Note:',
  'LBL_NOW_CHOOSE' => 'Alegeţi fişierul de importat:',
  'LBL_IMPORT_OUTLOOK_TITLE' => 'Microsoft Outlook 98 şi 2000 pot exporta date în format CSV din care se poate importa în sistem. Pentru a vă exporta datele din Outlook urmaţi paşii:',
  'LBL_OUTLOOK_NUM_1' => 'Porniţi <b>Outlook</b>',
  'LBL_OUTLOOK_NUM_2' => 'Selectaţi din meniu <b>File</b> şi aici <b>Import and Export ...</b> ',
  'LBL_OUTLOOK_NUM_3' => 'Alegeţi <b>Export to a file</b> şi daţi clic <b>Next</b>',
  'LBL_OUTLOOK_NUM_4' => 'Alegeţi <b>Comma Separated Values (Windows)</b> şi daţi clic <b>Next</b>.<br />  Notă: Se poate să vi se ceară instalarea componentei de export.',
  'LBL_OUTLOOK_NUM_5' => 'Alegeţi <b>Contacts</b> şi daţi clic <b>Next</b>. Puteţi selecta diferite foldere de contacte dacă aveţi stocate contactele în acest mod.',
  'LBL_OUTLOOK_NUM_6' => 'Alegeţi numele de fişierului cu date şi daţi clic <b>Next</b>',
  'LBL_OUTLOOK_NUM_7' => 'Daţi clic <b>Finish</b>',
  'LBL_IMPORT_ACT_TITLE' => 'Act! poate să exporte date în format CSV din care se poate importa în sistem. Pentru a vă exporta date din Act! urmaţi paşii:',
  'LBL_ACT_NUM_1' => 'Porniţi <b>Act!</b>',
  'LBL_ACT_NUM_2' => 'Alegeţi din meniu <b>File</b> şi aici <b>Data Exchange</b> apoi <b>Export ...</b>',
  'LBL_ACT_NUM_3' => 'Alegeţi fişier de tip <b>Text-Delimited</b>',
  'LBL_ACT_NUM_4' => 'Alegeţi un nume de fişier şi folder unde să se salveze datele şi daţi clic <b>Next</b>',
  'LBL_ACT_NUM_5' => 'Alegeţi <b>Contacts records only</b>',
  'LBL_ACT_NUM_6' => 'Daţi clic pe <b>Options ...</b> ',
  'LBL_ACT_NUM_7' => 'Alegeţi <b>Comma</b> ca separator de câmpuri',
  'LBL_ACT_NUM_8' => 'Bifaţi <b>Yes, export field names</b> şi daţi clic pe <b>OK</b>',
  'LBL_ACT_NUM_9' => 'Daţi clic <b>Next</b>',
  'LBL_ACT_NUM_10' => 'Alegeţi <b>All Records</b> şi daţi clic pe <b>Finish</b>',
  'LBL_IMPORT_SF_TITLE' => 'Salesforce.com poate exporta date în format CSV din care se poate importa în sistem. Pentru a exporta din salesforce.com urmaţi paşii:',
  'LBL_SF_NUM_1' => 'Deschideţi http://www.salesforce.com şi autentificaţi-vă',
  'LBL_SF_NUM_2' => 'Daţi clic pe <b>Reports</b> din meniul principal',
  'LBL_SF_NUM_3' => 'Pentru a exporta conturile de organizaţii daţi clic pe <b>Active Accounts</b> <br /> Pentru a exporta contactele daţi clic pe <b>Mailing List</b>',
  'LBL_SF_NUM_4' => '<b>Pasul 1: Alegeţi tipul de raport</b> selectaţi <b>Tabular Report</b> şi daţi clic pe <b>Next</b>',
  'LBL_SF_NUM_5' => '<b>Pasul 2: Selectaţi coloanele raportului</b> alegeţi coloanele care trebuie exportate şi daţi clic <b>Next</b>',
  'LBL_SF_NUM_6' => '<b>Pasul 3: Alegeţi informaţiile necesare</b> daţi clic pe <b>Next</b>',
  'LBL_SF_NUM_7' => '<b>Pasul 4: Ordonaţi coloanele raportului</b> apoi daţi clic pe <b>Next</b>',
  'LBL_SF_NUM_8' => '<b>Pasul 5: Alegeţi criteriile raportului</b> pentru câmpul <b>Start Date</b> alegeţi o dată din trecut pentru a include toate conturile. Puteţi în acelaşi timp să exportaţi un subset din aceste conturi prin folosirea criteriilor avansate. După acestea daţi clic pe <b>Run Report</b>',
  'LBL_SF_NUM_9' => 'Un raport va fi generat şi se vor afişa <b>Export Generation Status: Complete.</b> Acum daţi clic pe <b>Export to Excel</b>',
  'LBL_SF_NUM_10' => 'În <b>Export Report:</b> pentru <b>Export File Format:</b> alegeţi CSV şi daţi clic pe <b>Export</b>.',
  'LBL_SF_NUM_11' => 'Va apărea un dialog pentru salvarea fişierului de export.',
  'LBL_IMPORT_CUSTOM_TITLE' => 'Un număr mare de aplicaţii dau posibilitatea exportării datelor în CSV. În general multe dintre acestea urmează etapele:',
  'LBL_CUSTOM_NUM_1' => 'Se porneşte aplicaţia şi se deschide fişierul de date',
  'LBL_CUSTOM_NUM_2' => 'Se alege din meniu <b>Save As...</b> sau <b>Export ...</b> ',
  'LBL_CUSTOM_NUM_3' => 'Se salvează fişierul în format <b>CSV</b> sau <b>Comma Separated Values</b>',
  'LBL_IMPORT_TAB_TITLE' => 'Numeroase aplicaţii vă permit să exportaţi datele în <b>Tab Delimited text file (.tsv or .tab)</b>.  În general multe dintre acestea urmează etapele:',
  'LBL_TAB_NUM_1' => 'Se porneşte aplicaţia şi se deschide fişierul de date',
  'LBL_TAB_NUM_2' => 'Se alege din meniu <b>Save As...</b> sau <b>Export ...</b>',
  'LBL_TAB_NUM_3' => 'Se salvează fişierul în format <b>TSV</b> sau <b>Tab Separated Values</b>',
  'LBL_STEP_3_TITLE' => 'Etapa 3: Confirmaţi câmpurile şi faceţi import',
  'LBL_SELECT_FIELDS_TO_MAP' => 'Din lista de mai jos alegeţi câmpurile din fişierul de import care trebuie importate în fiecare câmp din sistem. După aceasta daţi clic pe <b>Importă</b>:',
  'LBL_DATABASE_FIELD' => 'Câmp din baza de date',
  'LBL_HEADER_ROW' => 'Antet',
  'LBL_ROW' => 'Rând',
  'LBL_SAVE_AS_CUSTOM' => 'Salvează ca mapare personalizată:',
  'LBL_CONTACTS_NOTE_1' => 'Trebuie să fie mapate ori numele ori prenumele.',
  'LBL_CONTACTS_NOTE_2' => 'Dacă numele întreg va fi mapat prenumele şi numele vor fi ignorate.',
  'LBL_CONTACTS_NOTE_3' => 'Dacă numele întreg va fi mapat atunci la inserarea în baza de date acesta va fi împărţit în nume şi prenume.',
  'LBL_CONTACTS_NOTE_4' => 'Câmpurile care se termină în Adresa 2 şi Adresa 3 vor fi concatenate cu Adresa inainte de inserarea în baza de date.',
  'LBL_ACCOUNTS_NOTE_1' => 'Numele organizaţiei trebuie să fie mapat.',
  'LBL_ACCOUNTS_NOTE_2' => 'Câmpurile care se termină în Adresa 2 şi Adresa 3 vor fi concatenate cu Adresa inainte de inserarea în baza de date.',
  'LBL_OPPORTUNITIES_NOTE_1' => 'Numele afacerii, numele contului de organizaţie, data închiderii şi statusul sunt câmpuri necesare.',
  'LBL_IMPORT_NOW' => 'Importă',
  'LBL_' => '',
  'LBL_CANNOT_OPEN' => 'Nu se poate deschide fişierul de import pentru citire.',
  'LBL_NOT_SAME_NUMBER' => 'În fişier nu este acelaşi număr de câmpuri pe fiecare linie',
  'LBL_NO_LINES' => 'În fişierul de import nu există nicio linie',
  'LBL_FILE_ALREADY_BEEN_OR' => 'Fişierul de import deja a fost procesat sau nu există',
  'LBL_SUCCESS' => 'Importat cu succes:',
  'LBL_SUCCESSFULLY' => 'Import reuşit',
  'LBL_LAST_IMPORT_UNDONE' => 'Ultimul import nu a fost validat',
  'LBL_NO_IMPORT_TO_UNDO' => 'Nu există import de anulat.',
  'LBL_FAIL' => 'Import nereuşit:',
  'LBL_RECORDS_SKIPPED' => 'înregistrări sărite pentru că nu aveau unul sau mai multe câmpuri necesare',
  'LBL_IDS_EXISTED_OR_LONGER' => 'înregistrări sărite pentru că identificatorii existau deja sau erau mai mari de 36 caractere',
  'LBL_RESULTS' => 'Rezultate',
  'LBL_IMPORT_MORE' => 'Încă un import',
  'LBL_FINISHED' => 'Termină',
  'LBL_UNDO_LAST_IMPORT' => 'Anulează ultimul import',
  'LBL_LAST_IMPORTED'=>'Ultimul importat',
  'ERR_MULTIPLE_PARENTS' => 'Puteţi avea un singur ID de părinte definit',
  'LBL_DUPLICATES' => 'Informaţii duplicate',
  'LBL_DUPLICATE_LIST' => 'Descarcă lista de duplicate',
  'LBL_UNIQUE_INDEX' => 'Alege indexul pentru compararea de duplicate',
);
?>