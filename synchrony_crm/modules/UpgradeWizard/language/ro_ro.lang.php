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





$mod_strings = array(
	'DESC_MODULES_INSTALLED'					=> 'Următoarele module au fost instalate:',
	'DESC_MODULES_QUEUED'						=> 'Următoarele module sunt pregătite pentru instalare:',
	
	'ERR_UW_CANNOT_DETERMINE_GROUP'				=> 'Nu se poate determina grupul',
	'ERR_UW_CANNOT_DETERMINE_USER'				=> 'Nu se poate determina proprietarul',
	'ERR_UW_CONFIG_WRITE'						=> 'Eroare la modificarea versiunii în fişierului config.php.',
	'ERR_UW_CONFIG'								=> 'Modificaţi fişierul config.php să poată fi scris.',
	'ERR_UW_DIR_NOT_WRITABLE'					=> 'Nu se poate scrie în director',
	'ERR_UW_FILE_NOT_COPIED'					=> 'Fişier necopiat',
	'ERR_UW_FILE_NOT_DELETED'					=> 'Probleme la ştergerea pachetului ',
	'ERR_UW_FILE_NOT_READABLE'					=> 'Fişierul nu poate fi citit.',
	'ERR_UW_FILE_NOT_WRITABLE'					=> 'Fişierul nu poate fi mutat sau scris',
	'ERR_UW_FLAVOR_2'							=> 'Actualizează varianta SugarCRM: ',
	'ERR_UW_FLAVOR'								=> 'Varianta de sistem SugarCRM: ',
	'ERR_UW_LOG_FILE_UNWRITABLE'				=> './upgradeWizard.log nu a putut fi creat sau scris. Verificaţi permisiunile directorului SugarCRM.', 
	'ERR_UW_MYSQL_VERSION'						=> 'SugarCRM necesiă MySQL versiunea 4.1.2 sau mai nou. S-a găsit: ',
	'ERR_UW_NO_FILE_UPLOADED'					=> 'Specificaţi un fişier şi încercaţi din nou!<br />\n',
	'ERR_UW_NO_FILES'							=> 'O eroare a apărut, nu s-au găsit fişiere pentru verificare.',
	'ERR_UW_NO_MANIFEST'						=> 'Fişierul zip nu conţine un manifest.php. Nu se poate continua.',
	'ERR_UW_NO_VIEW'							=> 'S-a specificat o vedere invalidă.',
	'ERR_UW_NO_VIEW2'							=> 'Vedere nedefinită. Mergeţi la panoul de administrare pentru a ajunge la această pagină.',
	'ERR_UW_NOT_VALID_UPLOAD'					=> 'Fişier invalid încărcat.',
	'ERR_UW_ONLY_PATCHES'						=> 'Nu se pot încărca decât petece din această pagină.',
	'ERR_UW_PREFLIGHT_ERRORS'					=> 'S-au găsit erori în timpul verificării iniţiale',
	'ERR_UW_UPLOAD_ERR'							=> 'A apărut o eroare la încârcarea fişierului, încercaţi din nou!<br />\n',
	'ERR_UW_VERSION'							=> 'Versiunea sistemului SugarCRM: ',
	'ERR_UW_WRONG_TYPE'							=> 'Această pagină nu este pentru rulare ',

	'LBL_BUTTON_BACK'							=> 'Înapoi',
	'LBL_BUTTON_CANCEL'							=> 'Anulare',
	'LBL_BUTTON_DELETE'							=> 'Şterge pachet',
	'LBL_BUTTON_DONE'							=> 'Termină',
	'LBL_BUTTON_INSTALL'						=> 'Actualizare iniţială',
	'LBL_BUTTON_NEXT'							=> 'Următor',
	'LBL_BUTTON_RECHECK'						=> 'Reverifică',

	'LBL_UPLOAD_UPGRADE'						=> 'Încarcă actualizare: ',

	'LBL_UW_BACKUP_FILES_EXIST_TITLE'			=> 'Salvare de rezervă',
	'LBL_UW_BACKUP_FILES_EXIST'					=> 'Fişierele salvate din această actualizare pot fi găsite în',
	'LBL_UW_BACKUP'								=> 'Salvare de rezervă',
	'LBL_UW_CANCEL_DESC'						=> 'Asistentul de actualizare a fost oprit. Toate fişierele temporare şi fişierele zip încărcate au fost şterse.<br /><br />Apăsaţi  "Următor" pentru a restarta asistentul.',
	'LBL_UW_CHARSET_SCHEMA_CHANGE'				=> 'Se schimbă encodingul la schema',
	'LBL_UW_CHECK_ALL'							=> 'Verifică tot',
	'LBL_UW_CHECKLIST'							=> 'Verifică lista',
	'LBL_UW_COMMIT_ADD_TASK_DESC_1'				=> "Salvări de rezervă ale fişierelor suprascrise se găsesc în directorul următor: \n",
	'LBL_UW_COMMIT_ADD_TASK_DESC_2'				=> "Combină manual următoarele fişiere:\n",
	'LBL_UW_COMMIT_ADD_TASK_NAME'				=> 'Proces de actualizare: Adăugaţi manual fişierele',
	'LBL_UW_COMMIT_ADD_TASK_OVERVIEW'			=> 'Folosiţi o metodă cunoscută de diferenţiere pentru a adăuga aceste fişiere. Până la terminarea acestei acţiuni aplicaţia SugarCRM instalată se va afla într-o stare inconsistentă şi trecerea la noua versiune nu va fi terminată.',
	'LBL_UW_COMPLETE'							=> 'Termină',

	'LBL_UW_COMPLIANCE_ALL_OK'					=> 'Toate condiţiile de rulare sunt îndeplinite',
	'LBL_UW_COMPLIANCE_CALLTIME'				=> 'Setări PHP: Call Time Pass By Reference',
	'LBL_UW_COMPLIANCE_CURL'					=> 'Modul cURL',
	'LBL_UW_COMPLIANCE_IMAP'					=> 'Modul IMAP',
	'LBL_UW_COMPLIANCE_MBSTRING'				=> 'Modul MBStrings',
	'LBL_UW_COMPLIANCE_MEMORY'					=> 'Stări PHP: Limita de memorie',
	'LBL_UW_COMPLIANCE_MSSQL_MAGIC_QUOTES'		=> 'MS SQL Server & PHP Magic Quotes GPC',
	'LBL_UW_COMPLIANCE_MYSQL'					=> 'Versiune MySQL minimă',
	'LBL_UW_COMPLIANCE_PHP_INI'					=> 'Locaţia pentru php.ini',
	'LBL_UW_COMPLIANCE_PHP_VERSION'				=> 'Versiune PHP minimă',
	'LBL_UW_COMPLIANCE_SAFEMODE'				=> 'Setări PHP: Safe Mode',
	'LBL_UW_COMPLIANCE_TITLE'					=> 'Verificare configurări de server',
	'LBL_UW_COMPLIANCE_TITLE2'					=> 'Configurări detectate',
	'LBL_UW_COMPLIANCE_XML'						=> 'Parsing de XML',

	'LBL_UW_COPIED_FILES_TITLE'					=> 'Fişiere copiate cu succes',
	'LBL_UW_CUSTOM_TABLE_SCHEMA_CHANGE'			=> 'Modificări la schema tabelei de date personalizate',

	'LBL_UW_DB_CHOICE1'							=> 'Asistentul de actualizare rulează codul SQL',
	'LBL_UW_DB_CHOICE2'							=> 'Comenyile SQL se execută manual',
	'LBL_UW_DB_INSERT_FAILED'					=> 'Comanda INSERT a generat eroare - rezultatele comparate diferă',
	'LBL_UW_DB_ISSUES_PERMS'					=> 'Privilegii de acces la baza de date',
	'LBL_UW_DB_ISSUES'							=> 'Probleme cu baza de date',
	'LBL_UW_DB_METHOD'							=> 'Metoda de actualizare la baza de date',
	'LBL_UW_DB_NO_ADD_COLUMN'					=> 'ALTER TABLE [table] ADD COLUMN [column]',
	'LBL_UW_DB_NO_CHANGE_COLUMN'				=> 'ALTER TABLE [table] CHANGE COLUMN [column]',
	'LBL_UW_DB_NO_CREATE'						=> 'CREATE TABLE [table]',
	'LBL_UW_DB_NO_DELETE'						=> 'DELETE FROM [table]',
	'LBL_UW_DB_NO_DROP_COLUMN'					=> 'ALTER TABLE [table] DROP COLUMN [column]',
	'LBL_UW_DB_NO_DROP_TABLE'					=> 'DROP TABLE [table]',
	'LBL_UW_DB_NO_ERRORS'						=> 'Toate privilegiile sunt disponibile',
	'LBL_UW_DB_NO_INSERT'						=> 'INSERT INTO [table]',
	'LBL_UW_DB_NO_SELECT'						=> 'SELECT [x] FROM [table]',
	'LBL_UW_DB_NO_UPDATE'						=> 'UPDATE [table]',
	'LBL_UW_DB_PERMS'							=> 'Privilegii',

	'LBL_UW_DESC_MODULES_INSTALLED'				=> 'Următoarele actualizări au fost instalate:',
	'LBL_UW_END_DESC'							=> 'Felicitări, sistemul dumneavoastră este acum actualizat.',
	'LBL_UW_END_DESC2'							=> 'Dacă aţi ales să executaţi manual etape ca suprascrieri de fişiere sau comenzi SQL, faceţi asta acum. Până la terminarea acestor acţiuni aplicaţia instalată se va afla într-o stare instabilă.',
	'LBL_UW_REPAIR_INDEX'						=> 'Pentru mărirea performanţelor bazei de date, rulaţi scriptul <a href="index.php?module=Administration&action=RepairIndex" target="_blank">Reparare index</a>.',	

	'LBL_UW_FILE_DELETED'						=> " a fost şters.<br>",
	'LBL_UW_FILE_GROUP'							=> 'Grup',
	'LBL_UW_FILE_ISSUES_PERMS'					=> 'Permisiuni fişier',
	'LBL_UW_FILE_ISSUES'						=> 'Problemă de acces',
	'LBL_UW_FILE_NEEDS_DIFF'					=> 'Fişierul necesită un diff manual',
	'LBL_UW_FILE_NO_ERRORS'						=> '<b>Toate fişierele pot fi suprascrise</b>',
	'LBL_UW_FILE_OWNER'							=> 'Proprietar',
	'LBL_UW_FILE_PERMS'							=> 'Permisii',
	'LBL_UW_FILE_UPLOADED'						=> ' a fost încărcat',
	'LBL_UW_FILE'								=> 'Nume fişier',
	'LBL_UW_FILES_QUEUED'						=> 'Următoarele actualizări sunt pregătite pentru instalare:',
	'LBL_UW_FILES_REMOVED'						=> "Următoarele fişiere vor fi şterse din sistem:<br />\n",

	'LBL_UW_FROZEN'								=> 'Etapele necesare trebuie parcurse înainte de a continua.',
	'LBL_UW_HIDE_DETAILS'						=> 'Ascunde detalii',
	'LBL_UW_IN_PROGRESS'						=> 'În curs de procesare',
	'LBL_UW_INCLUDING'							=> 'Se include',
	'LBL_UW_INCOMPLETE'							=> 'Incomplet',
	'LBL_UW_INSTALL'							=> 'Instalare fişier',
	'LBL_UW_MANUAL_MERGE'						=> 'Suprascriere manuală',
	'LBL_UW_MODULE_READY_UNINSTALL'				=> "Modulul este gata pentru dezinstalare. Daţi clic pe \"Aprobă\" pentru a contiua.<br />\n",
	'LBL_UW_MODULE_READY'						=> "Modulul este gata pentru instalare. Daţi clic pe \"Aprobă\" pentru a contiua.",
	'LBL_UW_NO_INSTALLED_UPGRADES'				=> 'Nu s-au detectat actualizări.',
	'LBL_UW_NONE'								=> 'Niciunul',
	'LBL_UW_NOT_AVAILABLE'						=> 'Nedisponibil',
	'LBL_UW_OVERWRITE_DESC'						=> "Toate fişierele modificate vor fi rescrise - incluzând orice modificare la codul sursă sau modificare de teme. Sunteţi sigur(ă) că vreţi să continuaţi?",
	'LBL_UW_OVERWRITE_FILES_CHOICE1'			=> 'Rescrie toate fişierele',
	'LBL_UW_OVERWRITE_FILES_CHOICE2'			=> 'Rescriere manuală - se păstrează tot',
	'LBL_UW_OVERWRITE_FILES'					=> 'Metoda de rescriere',
	'LBL_UW_PATCH_READY'						=> 'Actualizarea este pregătită de începere. Clic pe butonul "Aprobă" de mai jos pentru a continua.',
	'LBL_UW_PATCH_READY2'						=> '<h2>Notă: Există aranjamente personalizate</h2><br />Următoarele fişiere au noi câmpuri sau aranjamentele în pagină modificate în Studio. Actualizările pe care doriţi să le faceţi conţin modificări la aceste fişiere. Pentru <u>fiecare fişier</u> puteţi:<br /><ul><li>[<b>Default</b>] reţine versiunea actuală prin a-l lăsa nebifat. Modificările aduse de versiunea nouă vor fi ignorate.</li>sau<li>Acceptaţi versiunile noi ale fişierelor prin folosirea bifei. Aranjamentele în pagină vor trebui să fie aplicate din nou în Studio.</li></ul>',

	'LBL_UW_PREFLIGHT_ADD_TASK'					=> 'Creează sarcini pentru rescriere manuală?',
	'LBL_UW_PREFLIGHT_COMPLETE'					=> 'Verificare preliminară',
	'LBL_UW_PREFLIGHT_DIFF'						=> 'Diferenţiat ',
	'LBL_UW_PREFLIGHT_EMAIL_REMINDER'			=> 'Vă trimiteţi un email cu o notificare pentru rescrierea manuală?',
	'LBL_UW_PREFLIGHT_FILES_DESC'				=> 'Fişierele listate mai jos au fost modificate. Debifaţi itemii care necesita rescriere manuală. <i>Orice aranjamente modificate sunt detectate şi automat debifate; faceţi alegerile necesare.',
	'LBL_UW_PREFLIGHT_NO_DIFFS'					=> 'Nu este necesară o rescriere manuală.',
	'LBL_UW_PREFLIGHT_NOT_NEEDED'				=> 'Nu e necesar.',	
	'LBL_UW_PREFLIGHT_PRESERVE_FILES'			=> 'Fişiere autoprotejate:',
	'LBL_UW_PREFLIGHT_TESTS_PASSED'				=> 'Toate testele preliminare au trecut. Daţi clic "Next" pentru aprobarea modificărilor.',
	'LBL_UW_PREFLIGHT_TOGGLE_ALL'				=> 'Comută toate fişierele',

	'LBL_UW_REBUILD_TITLE'						=> 'Reconstruieşte rezultat',
	'LBL_UW_SCHEMA_CHANGE'						=> 'Modificări la schemă',

	'LBL_UW_SHOW_COMPLIANCE'					=> 'Arată setările detectate',
	'LBL_UW_SHOW_DB_PERMS'						=> 'Arată permisiunile lipsă din baza de date',
	'LBL_UW_SHOW_DETAILS'						=> 'Arată detaliile',
	'LBL_UW_SHOW_DIFFS'							=> 'Arată fişierele care necesită rescriere manuală',
	'LBL_UW_SHOW_NW_FILES'						=> 'Arată fişierele cu permisiuni restrictive',
	'LBL_UW_SHOW_SCHEMA'						=> 'Arată scriptul de modificare a schemei',
	'LBL_UW_SHOW_SQL_ERRORS'					=> 'Arată interogările defectuoase',
	'LBL_UW_SHOW'								=> 'Arată',

	'LBL_UW_SKIPPED_FILES_TITLE'				=> 'Fişiere sărite',
	'LBL_UW_SKIPPING_FILE_OVERWRITE'			=> 'Se sare peste rescrierea fişierelor - este selectată rescrierea manuală.',
	'LBL_UW_SQL_RUN'							=> 'Verifică dacă au fost executate manual comenzile SQL',
	'LBL_UW_START_DESC'							=> 'Bine aţi venit la Asistentul de actualizare SugarCRM. Acest asistent este construit să ajute adminstratorii la actualizarea aplicaţiei SugarCRM. Vă rugăm să urmaţi instrucţiunile date cu grijă.',
	'LBL_UW_START_DESC2'						=> 'Se recomandă ca procesul de actualizare să fie aplicat la o instanţă de rezervă a serverului principal. Faceţi copii de rezervă la baza de date şi la fişierele de sistem (toate fişierele din directorul SugarCRM) înainte de a începe operaţia - prevenirea este întodeauna mai bună decât repararea.', 
	'LBL_UW_START_UPGRADED_UW_DESC'				=> 'Noul asistent de actualizare va relua procesul. Vă rugăm să continuaţi.',
	'LBL_UW_START_UPGRADED_UW_TITLE'			=> 'Bine aţi venit la noul asistent de actualizare',

	'LBL_UW_SYSTEM_CHECK_CHECKING'				=> 'Se verifică, vă rugăm aşteptaţi. Asta ar putea lua până la 30 de secunde.',
	'LBL_UW_SYSTEM_CHECK_FILE_CHECK_START'		=> 'Se găsesc fişierele potrivite pentru verificare.',
	'LBL_UW_SYSTEM_CHECK_FILES'					=> 'Fişiere',
	'LBL_UW_SYSTEM_CHECK_FOUND'					=> 'Găsite',

	'LBL_UW_TITLE_CANCEL'						=> 'Anulează',
	'LBL_UW_TITLE_COMMIT'						=> 'Aprobă actualizarea',
	'LBL_UW_TITLE_END'							=> 'Note',
	'LBL_UW_TITLE_PREFLIGHT'					=> 'Verificare preliminară',
	'LBL_UW_TITLE_START'						=> 'Start',
	'LBL_UW_TITLE_SYSTEM_CHECK'					=> 'Verificări la sistem',
	'LBL_UW_TITLE_UPLOAD'						=> 'Încarcă pachet de actualizare',
	'LBL_UW_TITLE'								=> 'Asistent de actualizare',
	'LBL_UW_UNINSTALL'							=> 'Dezinstalează',
	
);
?>