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





global $sugar_config;
 
$mod_strings = array (
// OOTB Scheduler Job Names:
'LBL_OOTB_WORKFLOW'		=> 'Sarcini de desfăşurare a proceselor',
'LBL_OOTB_REPORTS'		=> 'Execută sarcinile de raportare planificate',
'LBL_OOTB_IE'			=> 'Verifică conturile de email',
'LBL_OOTB_BOUNCE'		=> 'Execută noaptea emailuri de proces Process Bounced Campaign Emails',
'LBL_OOTB_CAMPAIGN'		=> 'Execută noaptea campaniile de marketing prin email',
'LBL_OOTB_PRUNE'		=> 'Şterge baza de date la începutul lunii',
// List Labels
'LBL_LIST_JOB_INTERVAL' => 'Interval:',
'LBL_LIST_LIST_ORDER' => 'Acţiuni:',
'LBL_LIST_NAME' => 'Acţiune:',
'LBL_LIST_RANGE' => 'Interval:',
'LBL_LIST_REMOVE' => 'Şterge:',
'LBL_LIST_STATUS' => 'Status:',
'LBL_LIST_TITLE' => 'Lista de acţiuni:',
'LBL_LIST_EXECUTE_TIME' => 'Va executa la:',
// human readable:
'LBL_SUN'		=> 'Duminică',
'LBL_MON'		=> 'Luni',
'LBL_TUE'		=> 'Marţi',
'LBL_WED'		=> 'Miercuri',
'LBL_THU'		=> 'Joi',
'LBL_FRI'		=> 'Vineri',
'LBL_SAT'		=> 'Sâmbătă',
'LBL_ALL'		=> 'În fiecare zi',
'LBL_EVERY_DAY'	=> 'În fiecare zi ',
'LBL_AT_THE'	=> 'La ',
'LBL_EVERY'		=> 'Fiecare ',
'LBL_FROM'		=> 'De la ',
'LBL_ON_THE'	=> 'Pe ',
'LBL_RANGE'		=> ' până ',
'LBL_AT' 		=> ' la ',
'LBL_IN'		=> ' în ',
'LBL_AND'		=> ' şi ',
'LBL_MINUTES'	=> ' minute ',
'LBL_HOUR'		=> ' ore',
'LBL_HOUR_SING'	=> ' oră',
'LBL_MONTH'		=> ' lună',
'LBL_OFTEN'		=> ' cât de des posibil.',
'LBL_MIN_MARK'	=> ' minute',


// crontabs
'LBL_MINS' => 'minute',
'LBL_HOURS' => 'ore',
'LBL_DAY_OF_MONTH' => 'data',
'LBL_MONTHS' => 'luni',
'LBL_DAY_OF_WEEK' => 'zi',
'LBL_CRONTAB_EXAMPLES' => 'Mai sus se folosesc notaţii standard crontab.',
// Labels
'LBL_ALWAYS' => 'Mereu',
'LBL_CATCH_UP' => 'Execută dacă este sărit',
'LBL_CATCH_UP_WARNING' => 'Debifaţi dacă această acţiune va lua mai mult de un moment pentru a se executa.',
'LBL_DATE_TIME_END' => 'Data & ora de terminare',
'LBL_DATE_TIME_START' => 'Data & ora de începere',
'LBL_INTERVAL' => 'Interval',
'LBL_JOB' => 'Acţiune',
'LBL_LAST_RUN' => 'Ultima execuţie',
'LBL_MODULE_NAME' => 'Acţiuni',
'LBL_MODULE_TITLE' => 'Acţiuni',
'LBL_NAME' => 'Nume acţiune',
'LBL_NEVER' => 'Niciodată',
'LBL_NEW_FORM_TITLE' => 'Nouă programare',
'LBL_PERENNIAL' => 'perpetuă',
'LBL_SEARCH_FORM_TITLE' => 'Caută acţiune',
'LBL_SCHEDULER' => 'Acţiune:',
'LBL_STATUS' => 'Status',
'LBL_TIME_FROM' => 'Activă de la',
'LBL_TIME_TO' => 'Activă până la',
'LBL_WARN_CURL_TITLE' => 'Avertisment cURL:',
'LBL_WARN_CURL' => 'Avertisment:',
'LBL_WARN_NO_CURL' => 'Acest sistem nu are bibliotecile cURL activate/compilate în modulul PHP (--with-curl=/usr/lib/curl_library). Luaţi legătura cu administratorul acestui sistem pentru a rezolva problema. Făra funcţiile din cURL nu se pot executa acţiunile planificatorului.',
'LBL_BASIC_OPTIONS' => 'Setare de bază',
'LBL_ADV_OPTIONS'		=> 'Opţiuni avansate',
'LBL_TOGGLE_ADV' => 'Opţiuni avansate',
'LBL_TOGGLE_BASIC' => 'Opţiuni de bază',
// Links
'LNK_LIST_SCHEDULER' => 'Lista de acţiuni',
'LNK_NEW_SCHEDULER' => 'Nouă acţiune',
'LNK_LIST_SCHEDULED' => 'Acţiuni',



// Messages
'SOCK_GREETING' => "\nAceasta este interfaţa pentru serviciul de programare a acţiunilor SugarCRM. \n[ Comenzi valide: start|restart|shutdown|status ]\nPentru a ieşi folosiţi 'quit'. Pentru a opri serviciul folosiţi 'shutdown'.\n",
'ERR_DELETE_RECORD' => 'Un număr de înregistrare trebuie specificat pentru a şterge acţiunea.',
'NTC_DELETE_CONFIRMATION' => 'Sunteţi sigur(ă) că vreţi să ştergeţi acţiunea?',
'NTC_STATUS' => 'Schimbaţi statusul în inactiv pentru a şterge această acţiune din liste',
'NTC_LIST_ORDER' => 'Alegeţi poziţia în care această acţiune va apare în liste',
'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Pentru configurare Windows Scheduler',
'LBL_CRON_INSTRUCTIONS_LINUX' => 'Pentru configurare Crontab',
'LBL_CRON_LINUX_DESC' => 'Adăugaţi această linie la crontab: ',
'LBL_CRON_WINDOWS_DESC' => 'Creaţi un fişier .bat cu următoarele comenzi: ',
'LBL_NO_PHP_CLI' => 'Dacă serveru nu are un interpretor PHP, puteţi folosi wget sau curl pentru a lansa comenzi.<br />pentru wget: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;wget --quiet --non-verbose '.$sugar_config['site_url'].'/cron.php > /dev/null 2>&1</b><br />pentru curl: <b>*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;*&nbsp;&nbsp;&nbsp;&nbsp;curl --silent '.$sugar_config['site_url'].'/cron.php > /dev/null 2>&1', 
// Subpanels
'LBL_JOBS_SUBPANEL_TITLE'	=> 'Jurnal acţiuni',
'LBL_EXECUTE_TIME'			=> 'Timp de execuţie',
// _DOM
'scheduler_status_dom' => 
	array (
	'Active' => 'Activ',
	'Inactive' => 'Inactiv',
	),
'scheduler_period_dom' => 
	array (
	'min' => 'Minutes',
	'hour' => 'Ore',
	),
);

?>