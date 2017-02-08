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
 * Contributor: Belghir Raul Cristian
 ********************************************************************************/

$mod_strings = array (





















































































'LBL_SUGAR_NETWORK_DESC'=>'Retea',
'LBL_ADMINISTRATION_HOME_DESC'=>'Setari',
'LBL_USERS_DESC'=>'Adaugare / modificare utliliztori',
'LBL_EMAIL_DESC'=>'Conturi de email ',
'LBL_TOOLS_DESC'=>'Administrare campuri / interfete ',



	'LBL_REPAIR_IE' => 'Repară conturile de email',
	'LBL_REPAIR_IE_DESC' => 'Repară conturile de email prin incriptarea parolei contului.',
	'LBL_REPAIR_IE_SUCCESS'	=> 'Toate conturile de email au fost reparate cu succes!',
	'LBL_REPAIR_IE_FAILURE'	=> 'Următoarele conturi de email trebuie reparate manual - reintroduceţi numele de utilizator şi parola pentru fiecare:',
	
	'LBL_OOTB_WORKFLOW'		=> 'Sarcini de proces',
	'LBL_OOTB_REPORTS'		=> 'Execută sarcini programate de raportare',
	'LBL_OOTB_IE'			=> 'Verifică conturile de email',
	'LBL_OOTB_BOUNCE'		=> 'Procesează pe timp de noapte emailuri refuzate din campaniile de email',
	'LBL_OOTB_CAMPAIGN'		=> 'Procesează pe timp de noapte campanii de marketing prin',
	'LBL_OOTB_PRUNE'		=> 'Şterge baza de date pe întâi ale lunii',

	'BTN_REBUILD_CONFIG' =>'Reconstruieşte',
	'DESC_MODULES_INSTALLED' => 'Următoarele module au fost instalate:',
	'DESC_FILES_QUEUED' => 'Următoarele module sunt gata de instalare:',
	'DESC_FILES_INSTALLED' => 'Următoarele actualizări sunt gata de instalare:',
	
	'DESC_DROPDOWN_EDITOR' => 'Adaugă, şterge sau schimbă listele de selecţie din aplicaţie',
	'DESC_EDIT_CUSTOM_FIELDS' => 'Editează câmpurile personalizate create',
	'DESC_IFRAME' => 'Adaugă secţiuni care pot să afişeze orice site web',
	
	'ERR_DELETE_RECORD' => 'Un număr de înregistrare trebuie specificat pentu a şterge organizaţia.',
	'ERR_NOT_FOR_ORACLE'=>'Această funcţie nu este implementată pentru configuraţia actuală.',
    'ERR_NOT_FOR_MSSQL'=>'Această funcţie nu este implementată pentru configuraţia actuală.',
	
	'ERR_UW_CONFIG_FAILED'						=> "Eroare de scriere în fişierul config.php.",
	'ERR_UW_COPY_FAILED'						=> 'Nu s-a putut copia fişierul ',
	'ERR_UW_INVALID_VIEW'						=> 'S-a specificat o vedere invalidă.',
	'ERR_UW_NO_FILES'							=> "Nu s-au specificat fişierele de copiat.",
	'ERR_UW_NO_INSTALL_FILE'					=> "Nu s-a specificat fişierul de instalare.",
	'ERR_UW_NO_LANG'							=> "Nu s-a specificat numele limbii.",
	'ERR_UW_NO_LANG_DESC'						=> "Nu s-a specificat descrierea limbii.",
	'ERR_UW_NO_MODE'							=> "Nu s-a specificat modul de operare.",
	'ERR_UW_NO_TEMP_DIR'						=> "Nu s-a specificat directorul temorar pentru copierea fişierelor.",
	'ERR_UW_NO_UPDATE_RECORD'					=> 'Nu s-a putut găsi înregistrarea instalării pentru ',
	'ERR_UW_NO_VIEW'							=> "Vedere nedefinită. Mergeţi la panoul de administrare pentru a ajunge la pagina aceasta.",
	'ERR_UW_UPLOAD_ERROR'						=> "A apărut o eroare la încărcarea fişierului, încercaţi din nou!<br />\n",
	'ERR_UW_NO_UPLOAD_FILE'						=> "Specificaţi un fişier şi încercaţi din nou!<br />\n",
	'ERR_UW_NOT_RECOGNIZED'						=> 'nu este recunoscut',
	'ERR_UW_NOT_VALID_UPLOAD'					=> 'Format invalid.',
	'ERR_UW_NOT_ACCEPTIBLE_TYPE'				=> "Nu puteţi încărca decât pachete cu module, teme sau limbi de pe această pagină.",
	'ERR_UW_ONLY_PATCHES'						=> "Nu puteţi încărca decât revizii de pe această pagină.",
	'ERR_UW_NO_MANIFEST'						=> "Arhiva zip nu conţine fişierul manifest.php. Nu se poate continua.",
	'ERR_UW_REMOVE_FAILED'						=> 'Nu s-a putut şterge fişierul ',
	'ERR_UW_REMOVE_PACKAGE'						=> "A apărut o problemă la dezinstalarea pachetului ",
	'ERR_UW_RUN_SQL'							=> "Eroare la rularea fişierului sql: ",
	'ERR_UW_UPDATE_CONFIG'						=> "Eroare la modificarea noii versiuni in fişierul config.php.",
	
	
	'LBL_UW_BTN_DELETE_PACKAGE'				=> 'Şterge pachet',
	'LBL_UW_BTN_INSTALL'						=> 'Instalează',
	'LBL_UW_BTN_UPLOAD'							=> 'Încarcă',
	'LBL_UW_BTN_BACK_TO_MOD_LOADER'			=> 'Înapoi la încărcătorul de pachete',
	'LBL_UW_BTN_BACK_TO_UW'						=> 'Înapoi la asistentul de actualizări',
	'LBL_UW_FOLLOWING_FILES'					=> 'Următoarele fişiere au fost ',
	'LBL_UW_INCLUDING'							=> 'Inclus',
	'LBL_UW_NO_FILES_SELECTED'					=> 'Nu s-au selectat fişiere pentru ',
	'LBL_UW_NO_INSTALLED_UPGRADES'				=> "<i>Nicio actualizare înregistrată.</i><br />\n",
	'LBL_UW_NONE'								=> 'Niciunul',
	'LBL_UW_NOT_AVAILABLE'						=> "Nu este disponibil",
	'LBL_UW_OP_MODE'							=> 'Mod de operare:',
	'LBL_UW_PACKAGE_REMOVED'					=> " a fost şters.<br />\n",
	'LBL_UW_UNINSTALL'							=> 'Dezinstalează',
	'LBL_UW_UPGRADE_SUCCESSFUL'				=> "<b />Actualizarea s-a desfăşurat cu succes!</b><br />\n",
	'LBL_UW_UPLOAD_MODULE'						=> 'Modul',
	'LBL_UW_UPLOAD_SUCCESS'						=> " a fost încărcat.<br />\n",
	
	'LBL_UW_DESC_MODULES_INSTALLED'			=> 'Următorul modul a fost instalat:',
	'LBL_UW_DESC_MODULES_QUEUED'				=> 'Următoarele module sunt pregătite pentru instalare:',
	'LBL_UW_MODULE_READY' 			=> 'Modulul este pregătit pentru instalare.',
	'LBL_UW_MODULE_READY_UNISTALL' 			=> 'Modulul este pregătit pentru dezinstalare.',
	'ERROR_FLAVOR_INCOMPATIBLE' => 'Fişierul încărcat nu este compatibil cu această variantă a SugarCRM (OS, PRO sau ENT): ',
	'ERROR_LICENSE_EXPIRED'=> "Eroare: Licenţa a expirat cu ",
	'ERROR_LICENSE_EXPIRED2' => " zile în urmă. Mergeţi la <a href='index.php?action=LicenseSettings&module=Administration'>'\"Managementul licenţei\"</a> în panoul de administrare şi introduceţi o nouă cheie de licenţă. Dacă nu introduceţi o nouă cheie de licenţă în timp de 30 de zile de la expirare, nu vă veţi mai putea autentifica în aplicaţie.",
	'ERROR_MANIFEST_TYPE' => 'Fişierul de manifest trebuie să specifice tipul de pachet.',
	'ERROR_PACKAGE_TYPE' => 'Fişierul de manifest specifică un tip de pachet nerecunoscut',
	'ERROR_VALIDATION_EXPIRED'=> "Eroare: cheia de validare a expirat cu ",
	'ERROR_VALIDATION_EXPIRED2' => " zile în urmă. Mergeţi la <a href='index.php?action=LicenseSettings&module=Administration'>'\"Managementul licenţei\"</a> în panoul de administrare şi introduceţi o nouă cheie de validare. Dacă nu introduceţi o cheie de validare în timp de 30 de zile de la expirare, nu vă veţi mai putea autentifica în aplicaţie.",
	'ERROR_VERSION_INCOMPATIBLE' => 'Fişierul încărcat nu este compatibil cu această versiune de SugarCRM: ',

	'FATAL_LICENSE_ALTERED' => "Licenţa a fost modificată de la ultima validare. <br /> Mergeţi la <a href='index.php?action=LicenseSettings&module=Administration'>'\"Managementul licenţei\"</a> în panoul de administrare.",
	'FATAL_LICENSE_EXPIRED'=> "Eroare fatală: Cheia de licenţa este expirată de mai mult de 30 de zile",
	'FATAL_LICENSE_EXPIRED2'=> "Mergeţi la <a href='index.php?action=LicenseSettings&module=Administration'>'\"Managementul licenţei\"</a>  în panoul de administrare şi actualizaţi cheia de licenţă pentru a reveni la funcţionalitate completă.",
	'FATAL_LICENSE_REQUIRED' => "Eroare fatală: Este necesară cheia de licenţă.<br /> Mergeţi la <a href='index.php?action=LicenseSettings&module=Administration'>'\"Managementul licenţei\"</a> în panoul de administrare şi actualizaţi cheia de licenţă pentru a reveni la funcţionalitate completă.",
	'FATAL_VALIDATION_EXPIRED'=> "Eroare fatală: Cheia de validare a licenţei este expirată de mai mult de 30 de zile",
	'FATAL_VALIDATION_EXPIRED2'=> "Mergeţi la <a href='index.php?action=LicenseSettings&module=Administration'>'\"Managementul licenţei\"</a> în panoul de administrare şi actualizaţi cheia de licenţă pentru a reveni la funcţionalitate completă.",
	'FATAL_VALIDATION_REQUIRED' => "Eroare fatală: Este necesară cheia de validare a licenţei.<br /> Mergeţi la <a href='index.php?action=LicenseSettings&module=Administration'>'\"Managementul licenţei\"</a> în panoul de administrare şi actualizaţi cheia de licenţă pentru a reveni la funcţionalitate completă. <br /> Ori resalvaţi licenţa pentru autentificare ori exportaţi cheia şi importaţi cheia de validare. " ,
	'HEARTBEAT_MESSAGE'=>"<br /> Când este activată sistemul va trimite periodic statistici anonime la SugarCRM Inc. despre instalare ceea ce va contribui la înţelegerea modurilor de folosire şi la îmbunătăţirea produsului. În schimbul acestor informaţii administratorii vor primi notificări de actulalizare când noi versiuni sunt gata.",

	'LBL_ADMINISTRATION_HOME_TITLE' => 'Sistem',
	'LBL_ALLOW_USER_TABS' => 'Permite utilizatorilor să configureze secţiunile',
	'LBL_APPLY_DST_FIX_DESC' => 'Acest pas obligatoriu va actualiza funcţionalitatea legată de managementul timpului (DOAR MYSQL).',
	'LBL_APPLY_DST_FIX' => 'Aplică afişarea corectă a timpului cu ora de vară/iarnă',
	'LBL_AVAILABLE_UPDATES'=>'Actualizări existente',
	'LBL_BACKUP_BACK_HOME' => 'Înapoi la panoul de administrare',
	'LBL_BACKUP_CONFIRM' => 'Confirmă setările',
	'LBL_BACKUP_CONFIRMED' => 'Setările confirmate. Apăsaţi Execută pentru a face copia de rezervă.',
	'LBL_BACKUP_DIRECTORY_ERROR' => 'Directorul de backup trebuie specificat.',
	'LBL_BACKUP_DIRECTORY_EXISTS' => 'Directorul de backup nu există şi nu a putut fi creat.',
	'LBL_BACKUP_DIRECTORY_NOT_WRITABLE' => 'Directorul de backup există, dar nu poate fi deschis pentru scriere.',
	'LBL_BACKUP_DIRECTORY_WRITABLE' => 'Trebuie să poată fi scris de aplicaţie',
	'LBL_BACKUP_DIRECTORY' => 'Director:',
	'LBL_BACKUP_FILE_AS_SUB' => 'Numele fişierul specificat există deja în director ca şi subdirector',
	'LBL_BACKUP_FILE_EXISTS' => 'Fişierul specificat există deja în director.',
	'LBL_BACKUP_FILE_STORED' => 'Copie de rezervă păstrată ca ',
	'LBL_BACKUP_FILENAME_ERROR' => 'Fişierul de backup trebuie specificat.',
	'LBL_BACKUP_FILENAME' => 'Nume fişier:',
	'LBL_BACKUP_INSTRUCTIONS_1' => 'Scopul acestui utilitar este de a ajuta la crearea de copii de rezervă ale fişierelor de aplicaţie Sugar. Copii de rezervă la baza de date trebuie făcute în mod regulat. Pentru mai multe detalii folosiţi documentaţia sistemului de gestiune a bazei de date',
	'LBL_BACKUP_INSTRUCTIONS_2' => 'Pentru a face o copie de rezervă a fişierelor de aplicaţie Sugar într-un fişier zip, introduceţi informaţiile următoare:',
	'LBL_BACKUP_RUN_BACKUP' => 'Execută',
	'LBL_BACKUP_TITLE' => 'Salvări online',
	'LBL_BACKUP' => 'Planifică salvări de rezervă online în Sugar Online Data Vault. Activează restaurarea sistemului din salvarea de rezervă.',
	'LBL_BACKUPS_TITLE' => 'Salvări de rezervă',
	'LBL_BACKUPS' => 'Salvări de rezervă',
	'LBL_BUG_TITLE' => 'Defecte',
	'LBL_CHANGE_NAME_TABS'=>'Schimbă titlurile secţiunilor',
	'LBL_CHECK_NOW_LABEL' =>'Verifică acum',
	'LBL_CHECK_NOW_TITLE' =>'Verifică acum',
	'LBL_CHOOSE_WHICH'=>'Alegeţi care secţiuni sunt afişate în toată aplicaţia',
	'LBL_CLEAR_CHART_DATA_CACHE_DESC'=>'Şterge datele din cache-ul pentru grafice.',
	'LBL_CLEAR_CHART_DATA_CACHE_TITLE'=>'Şterge graficele din cache',
	'LBL_CONFIG_CHECK' =>'Verifică configuraţia',
	'LBL_CONFIGURATOR_DESC'=>'Modifică config.php',
	'LBL_CONFIGURATOR_TITLE'=>'Configurator',
	'LBL_CONFIGURE_SETTINGS_TITLE' => 'Configurare sistem',
	'LBL_CONFIGURE_SETTINGS' => 'Alegeţi parametri de configurare globală',
	'LBL_CONFIGURE_TABS' => 'Configurare secţiuni',
	'LBL_CONFIGURE_GROUP_TABS' => 'Configurare grupuri de secţiuni',
	'LBL_CONFIGURE_GROUP_TABS_DESC' => 'Adaugă şi editează grupuri de secţiuni',
	'LBL_CONFIGURE_UPDATER'=>'Configurează actualizările SugarCRM',
	'LBL_COULD_NOT_CONNECT'=>'Erore: Serverul Sugar nu poate fi contactat. Verificaţi proxy-ul de la <a href="index.php?module=Configurator&action=EditView">Configurare sistem</a> în panoul de administrare. Ultima dată încercat la @ ',
	'LBL_CURRENCY' => 'Alegeţi valuta şi ratele de schimb',
	'LBL_DIAG_CANCEL_BUTTON' => 'Închide',
	'LBL_DIAG_EXECUTE_BUTTON' => 'Execută diagnostic',
	'LBL_DIAGNOSTIC_ACCESS' => 'Trebuie să fiţi un administrator pentru a folosi utilitarul de diagnostic.',
	'LBL_DIAGNOSTIC_BEANLIST_DESC' => 'Această informaţie specifică dacă beanFiles specificat în beanList există. Aici poate apare o problemă cu un modul impropriu definit.',
	'LBL_DIAGNOSTIC_BEANLIST_GREEN' => 'Verde înseamnă că fişierul există.',
	'LBL_DIAGNOSTIC_BEANLIST_ORANGE' => 'Portocaliu înseamnă că nu există fişier indexat deci se poate căuta.',
	'LBL_DIAGNOSTIC_BEANLIST_RED' => 'Roşu înseamnă că fişierul nu există.',
	'LBL_DIAGNOSTIC_BLBF'=>'Fişierele BeanList/BeanFiles există',
	'LBL_DIAGNOSTIC_CALCMD5'=>'&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Copiază vectorul calculat de hash-uri',
	'LBL_DIAGNOSTIC_CONFIGPHP'=>'SugarCRM config.php',
	'LBL_DIAGNOSTIC_CUSTOMDIR'=>'Date personalizate din SugarCRM',
	'LBL_DIAGNOSTIC_DELETELINK' => 'Şterge fişierul de diagnostic',
	'LBL_DIAGNOSTIC_DESC'=>'Preia configurarea sistemului pentru diagnostic şi analiză',
	'LBL_DIAGNOSTIC_DONE' => 'Termină',
	'LBL_DIAGNOSTIC_DOWNLOADLINK' => 'Descarcă fişierul de diagnostic',
	'LBL_DIAGNOSTIC_EXECUTING' => 'Se execută operaţiile de diagnostic ...',
	'LBL_DIAGNOSTIC_FILESMD5'=>'&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;Copiere files.md5',
	'LBL_DIAGNOSTIC_GETBEANFILES' => 'Se verifică dacă fişierele bean există ...',
	'LBL_DIAGNOSTIC_GETCONFPHP' => 'Se preia config.php ...',
	'LBL_DIAGNOSTIC_GETCUSTDIR' => 'Se preia directorul personal ...',
	'LBL_DIAGNOSTIC_GETMD5INFO' => 'Se preia insformaţia md5 ...',
	'LBL_DIAGNOSTIC_GETMYSQLINFO' => 'Informaţii mysql',
	'LBL_DIAGNOSTIC_GETMYSQLTD' => 'Salvări mysql',
	'LBL_DIAGNOSTIC_GETMYSQLTS' => 'Schema mysql',
	'LBL_DIAGNOSTIC_GETPHPINFO' => 'Se preia phpinfo()',
	'LBL_DIAGNOSTIC_GETSUGARLOG' => 'Se preia sugarcrm.log',
	'LBL_DIAGNOSTIC_GETTING' => 'Se preia informaţia ...',
	'LBL_DIAGNOSTIC_MD5'=>'Informaţii MD5',
	'LBL_DIAGNOSTIC_MYSQLDUMPS'=>'MySQL - Conţinutul tabelelor de configurare',
	'LBL_DIAGNOSTIC_MYSQLINFO'=>'MySQL - Informaţii generale',
	'LBL_DIAGNOSTIC_MYSQLSCHEMA'=>'MySQL - Schema tuturor tabelelor',
	'LBL_DIAGNOSTIC_NO_MYSQL' => 'Nu aveţi instalat MySQL. Funcţiile MySQL au fost blocate.',
	'LBL_DIAGNOSTIC_PHPINFO'=>'phpinfo()',
	'LBL_DIAGNOSTIC_SUGARLOG'=>'Jurnalul SugarCRM',
	'LBL_DIAGNOSTIC_TITLE'=>'Uilitar de diagnostic',
	'LBL_DIAGNOSTIC_VARDEFS'=>'Schema SugarCRM (VARDEFS)',
	'LBL_DIAGNOSTIC_DELETED' => 'Fişierul a fost şters',
	'LBL_DISPLAY_TABS'=>'Afişază secţiunile',
	'LBL_DOCUMENTATION_TITLE' => 'Documentaţie',
	'LBL_DOCUMENTATION' => 'Accesează documentaţia pentru end-user şi administrator',
	'LBL_DROPDOWN_EDITOR' => 'Editor de liste de opţiuni',
	'LBL_DST_APPLY_FIX' => 'Aplică corecţia pentru schimbarea orei la datele existente. Faceţi o copie de rezervă înainte de a continua.',
	'LBL_DST_BEFORE_DESC' => 'Această reparaţie va face modificări în datele dumneavoastră. Faceţi o copie de rezervă la baza de date înainte de a continua.',
	'LBL_DST_BEFORE' => 'Înainte de a începe:',
	'LBL_DST_CURRENT_SERVER_TIME_ZONE_LOCALE' => 'Localizare specificată de server:',
	'LBL_DST_CURRENT_SERVER_TIME_ZONE' => 'Fus orar specificat de server:',
	'LBL_DST_CURRENT_SERVER_TIME' => 'Ora locală specificată de server:',
	'LBL_DST_END_DATE_TIME' => 'Data şi ora de terminare',
	'LBL_DST_FIX_CONFIRM_DESC' => 'Revedeţi valorile de mai jos şi să confirmaţi că sistemul dumneavoastră este corect configurat.',
	'LBL_DST_FIX_CONFIRM' => 'Confirmare: ',
	'LBL_DST_FIX_DONE_DESC' => 'Corecţia pentru schimbarea corectă a orei a fost aplicată.',
	'LBL_DST_FIX_TARGET' => 'Ţinta:',
	'LBL_DST_FIX_USER_TZ' => 'Acest pas setează fusul orar pentru toţi utilizatorii la cea mai probabilă valoare.',
	'LBL_DST_FIX_USER' => 'Fus orar al utilizatorului: <br />(OPŢIONAL)',
	'LBL_DST_SET_USER_TZ' => 'Alege fusul orar',
	'LBL_DST_START_DATE_TIME' => 'Data şi ora de începere',
	'LBL_DST_UPGRADE' => 'Actualizare:',
	'LBL_EDIT_CUSTOM_FIELDS' => 'Editare câmpuri personalizate',
	'LBL_EDIT_TABS'=>'Editează secţiuni',
	'LBL_EMAIL_TITLE' => 'Email',
	'LBL_ENABLE_MAILMERGE' => 'Activează preluarea de emailuri?',
	'LBL_ERROR_VERSION_INFO' => 'Eroare la obţinerea versiunii.',
	'LBL_EXPORT_CUSTOM_FIELDS_TITLE' => 'Exportă structuri de câmpuri personalizate',
	'LBL_EXPORT_CUSTOM_FIELDS' => 'Exportă definiţii de câmpuri personalizate într-un fişier .sugar',
	'LBL_EXPORT_DOWNLOAD_KEY' =>'Exportă cheie de acces',
	'LBL_EXTERNAL_DEV_DESC' => 'Migrează o structură de câmpuri personalizate de pe un sistem pe altul',
	'LBL_EXTERNAL_DEV_TITLE' => 'Migrare câmpuri personalizate',
	'LBL_FORECAST_TITLE' => 'Previziuni',
	'LBL_GLOBAL_TEAM_DESC' => 'Vizibil global',
	'LBL_GO' => 'Execută',
	'LBL_HELP_BOOKMARK' => 'Acces rapid',
	'LBL_HELP_EMAIL' => 'Email',
	'LBL_HELP_LINK' => 'Legătură la această pagină',
	'LBL_HELP_PRINT' => 'Tipăreşte',
	'LBL_HIDE_TABS'=>'Ascunde sceţiuni',
	'LBL_HT_DONE' => '-- Terminat --',
	'LBL_HT_NO_WRITE_2' => 'Dacă vreţi să nu permiteţi ca fişierele dv. să fie accesate din browser, faceţi un fişier .htaccess în rădăcina web a aplicaţiei cu liniile:',
	'LBL_HT_NO_WRITE' => 'Nu se poate scrie în fişierul: ',
	'LBL_ICF_ADDING' => 'Se adaugă metadatele câmpurilor personalizate ',
	'LBL_ICF_DROPPING' => 'Se şterg metadatele câmpurilor personalizate',
	'LBL_ICF_IMPORT_S' => 'Importă structură',
	'LBL_IFRAME'=> 'Portal',
	'LBL_IMPORT_CUSTOM_FIELDS_DESC'=> '<br />Importă un fişier .sugar care a fost exportat de pe alt calculator. Aceasta va face ca structura de câmpuri personalizate de pe acest server să fie la fel cu cea de pe calculatorul sursă. Se recomandă să exportaţi structura de câmpuri personalizate înainte de a importa alta. După importul structurii de câmpuri aplicaţia vă va prezenta automat pagina de actualizare a câmpurilor personalizate şi vă va informa de modificăriloe care vor fi făcute în baza de date. Dacă sunteţi de acord cu aceste modificări folosiţi link-ul la modul non-simulation de jos. Dacă doriţi să anulaţi procesul de import faceţi un alt import la structura de rezervă pe care aţi exportat-o înainte de această acţiune. <br /> Avertisment: Aceasta va şterge orice structură de câmpuri personalizate definită anterior care nu se află în fişierul .sugar şi orice date stocate în acele câmpuri.',
	'LBL_IMPORT_CUSTOM_FIELDS_STRUCT'=> ' Structură de câmpuri personalizate (SugarCustomFieldStruct.sugar)',
	'LBL_IMPORT_CUSTOM_FIELDS_TITLE' => 'Importă structuri de câmpuri personalizate',
	'LBL_IMPORT_CUSTOM_FIELDS' => 'Importă definiţii de câmpuri personalizate dintr-un fişier .sugar',
	'LBL_IMPORT_VALIDATION_KEY' => 'Importă cheie de validare',
	'LBL_INBOUND_EMAIL_TITLE' => 'Emailuri primite',
	'LBL_LAYOUT' => 'Adaugă, şterge sau schimbă aranjarea câmpurilor şi panourilor',
	'LBL_LOCALE_DEFAULT_CURRENCY_ISO4217'		=> 'Cod de valuta ISO 4217',
	'LBL_LOCALE_DEFAULT_CURRENCY_NAME'			=> 'Valuta',
	'LBL_LOCALE_DEFAULT_CURRENCY_SYMBOL'		=> 'Simbol valutar',
	'LBL_LOCALE_DEFAULT_CURRENCY'				=> 'Valuta iniţială',
	'LBL_LOCALE_DEFAULT_DATE_FORMAT'			=> 'Formatul iniţial de dată ',
	'LBL_LOCALE_DEFAULT_DECIMAL_SEP'			=> 'Simbol de separare zecimale',
	'LBL_LOCALE_DEFAULT_LANGUAGE'				=> 'Limba iniţială',
	'LBL_LOCALE_DEFAULT_NAME_FORMAT'			=> 'Formatul iniţial de nume',
	'LBL_LOCALE_DEFAULT_NUMBER_GROUPING_SEP'	=> 'Simbol de separare mii',
	'LBL_LOCALE_DEFAULT_SYSTEM_SETTINGS'		=> 'Interfaţa utilizator',
	'LBL_LOCALE_DEFAULT_TIME_FORMAT'			=> 'Formatul iniţial de timp',
	'LBL_LOCALE_EXAMPLE_NAME_FORMAT'			=> 'Exemplu',
	'LBL_LOCALE_NAME_FORMAT_DESC'				=> '"s" Titlu <br />"f" Prenume <br />"l" Nume',
	'LBL_LOCALE_TITLE'							=> 'Setări de standarde locale',
	'LBL_LOCALE' => 'Atribuie localizarea corectă pentru sistem.',
	'LBL_MAILBOX_DESC' => 'Configurează conturile de email monitorizate',
	'LBL_MANAGE_CURRENCIES' => 'Valute',
	'LBL_MANAGE_GROUPS_TITLE'	=> 'Managementul grupurilor',
	'LBL_MANAGE_GROUPS'			=> 'Managementul grupurilor',
	'LBL_MANAGE_LAYOUT' => 'Editor de încadrare',
	'LBL_MANAGE_LOCALE'	=> 'Standarde locale',
	'LBL_MANAGE_MAILBOX' => 'Primire emailuri',
	'LBL_MANAGE_MAILBOX' => 'Primire emailuri',
	'LBL_MANAGE_OPPORTUNITIES' => 'Afaceri',
	'LBL_MANAGE_RELEASES' => 'Distribuţii',
	'LBL_MANAGE_ROLES_TITLE' => 'Managementul rolurilor',
	'LBL_MANAGE_ROLES' => 'Gestiunea rolurilor şi a proprietăţilor acestora',
	'LBL_MANAGE_USERS_TITLE' => 'Managementul utilizatorilor',
	'LBL_MANAGE_USERS' => 'Gestiunea conturilor de utilizatori şi a parolelor',
	'LBL_MANUAL_VALIDATION_TXT' => 'Validare manuală',
	'LBL_MANUAL_VALIDATION' => 'Dacă aveţi probleme cu validarea automată, verificaţi configurarea severului proxy <a href="index.php?module=Administration&action=ConfigureSettings">Configurare sistem</a> din panoul de administrare. Dacă sistemul dv. nu poate comunica cu serverul de validare licenţă, ar trebui să continuaţi cu paşii necesari pentru <a href="#" onclick="toggleDisplay(\'mainbody\');toggleDisplay(\'manualbody\');">Validarea manuală</a>. ',
	'LBL_MANUAL_VALIDATION1' => 'Pasul 1: Generaţi un fişier pentru obţinerea unei licenţe apăsând butonul următor. ',
	'LBL_MANUAL_VALIDATION2' => 'Apoi salvaţi fişierul (sugarkey.lic) pe calculatorul dv.',
	'LBL_MANUAL_VALIDATION3' => 'Pasul 2: Transferaţi sugarkey.lic pe un sistem unde puteţi accesa Internetul. <br /><br />Mergeţi la <a href="http://updates.sugarcrm.com/license">http://updates.sugarcrm.com/license</a> şi trimiteţi fişierul sugarkey.lic.  <br /><br />Site-ul de validare a licenţei va face validarea imediat şi vă va returna cheia de validare (sugarvalidationkey.lic) dacă procesul se încheie cu succes. Vi se va cere să salvaţi fişierul.',
	'LBL_MANUAL_VALIDATION4' => 'Pasul 3: Transferaţi cheia de validare (sugarvalidationkey.lic) pe sistemul cu SugarCRM. Importaţi cheia de validare folosind formularul de mai jos: ',
	'LBL_MANUAL_VALIDATION5' => 'După ce importaţi cheia de validare aţi încheiat procesul de validare manuală. Sistemul va actualiza data de expirare a cheii de validare, care este următoarea dată la care trebuie revalidare.',
	'LBL_MASS_EMAIL_CONFIG_DESC'=> 'Configurează accesul la email',
	'LBL_MASS_EMAIL_CONFIG_TITLE'=>'Configurare email',
	'LBL_MASS_EMAIL_MANAGER_DESC'=> 'Gestionează lista emailurilor de trimis',
	'LBL_MASS_EMAIL_MANAGER_HEADER'=>'Managementul campaniilor de marketing prin email',
	'LBL_MASS_EMAIL_MANAGER_TITLE'=> 'Trimitere emailuri',
	'LBL_MASSAGE_MASS_EMAIL_DESC'=>'SugarCRM 3.5.1+ necesită un upgrade la datele de mass email. Daţi clic pe "Actualizare" pentru a continua.',
	'LBL_MASSAGE_MASS_EMAIL'=>'Corecţie pentru data şi ora GMT de trimitere emailuri',
	'LBL_ML_ACTION' => 'Acţiune',
	'LBL_ML_DESCRIPTION' => 'Descriere',
	'LBL_ML_INSTALLED' => 'Data de instalare',
	'LBL_ML_NAME' => 'Nume',
	'LBL_ML_PUBLISHED' => 'Date publicării',
	'LBL_ML_TYPE' => 'Tip',
	'LBL_ML_UNINSTALLABLE' => 'Dezinstalabil',
	'LBL_ML_VERSION' => 'Versiune',
	'LBL_MODULE_LOADER_TITLE' => 'Încărcare pachet',
	'LBL_MODULE_LOADER' => 'Adaugă sau şterge pachete cu module, teme sau limbi',
	'LBL_MODULE_NAME' => 'Administrare',
	'LBL_MODULE_TITLE' => 'Administrare: Start',
	'LBL_NEVER'=>'Niciodată',
	'LBL_NEW_FORM_TITLE' => 'Nouă organizaţie',
	'LBL_NOTIFY_SUBJECT' => 'Subiect:',
	'LBL_PERFORM_UPDATE'=>'Execută actualizare',
	'LBL_PLUGINS_TITLE' => 'Sugar Forge',
	'LBL_PLUGINS' => 'Module şi extensii pentru SugarCRM.',
	'LBL_PROXY_AUTH'=>'Autentificare?',
	'LBL_PROXY_HOST'=>'Proxy',
	'LBL_PROXY_ON_DESC'=>'Foloseşte un server proxy pentru a accesa informaţii externe cum sunt actualizările pentru SugarCRM.',
	'LBL_PROXY_ON'=>'Activează serverul proxy?',
	'LBL_PROXY_PASSWORD'=>'Parola',
	'LBL_PROXY_PORT'=>'Port',
	'LBL_PROXY_TITLE'=>'Configurare proxy',
	'LBL_PROXY_USERNAME'=>'Utilizator',
	'LBL_REBUILD_AUDIT_DESC' => 'Reconstruieşte tabela de audit.',
	'LBL_REBUILD_AUDIT_TITLE' => 'Reconstruieşte audit',
	'LBL_REBUILD_CONFIG_DESC' =>'Reconstruieşte config.php printr-o actualizare de versiune şi o adăugare de valori iniţiale dacă nu sunt declarate explicit.',
	'LBL_REBUILD_CONFIG' =>'Reconstruieşte fişierul de configurare',
	'LBL_REBUILD_DASHLETS_DESC_SHORT' => 'Reconstruieşte cache pentru casetele de afişare.',
	'LBL_REBUILD_DASHLETS_DESC_SUCCESS' => 'Fişierul de cache pentru casete a fost reconstruit.',
	'LBL_REBUILD_DASHLETS_DESC' => 'Se şterge cache-ul pentru şi se scanează registrul pentru casetele de afişare.',
	'LBL_REBUILD_DASHLETS_TITLE' => 'Reconstruieşte casetele de afişare',
    'LBL_REBUILD_JAVASCRIPT_LANG_TITLE' => 'Reconstruieşte afişarea in alte limbi',
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC_SHORT' => 'Reconstruieşte javascripturi pentru alte limbi',
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC' => 'Se şterg javascripturile pentru alte limbi.',
	'LBL_REBUILD_EXTENSIONS_DESC' => 'Reconstruieşte extensii inclusiv vardefs, limbi, meniuri şi administrare',
	'LBL_REBUILD_EXTENSIONS_TITLE' => 'Reconstruieşte extensii',
	'LBL_REBUILD_HTACCESS_DESC'=>'Reconstruieşte direct fişierul .htaccess pentru limitarea accesului la anumite resurse.',
	'LBL_REBUILD_HTACCESS'=>'Reconstruieşte fişierul .htaccess',
	'LBL_REBUILD_REL_DESC'=>'Reconstruieşte metadatele de relaţie şi şterge fişierul de cache.',
	'LBL_REBUILD_REL_TITLE'=>'Reconstruieşte relaţii',
	'LBL_REBUILD_SCHEDULERS_DESC_SHORT' => 'Reconstruieşte toate acţiunile iniţiale ale planificatorului.',
	'LBL_REBUILD_SCHEDULERS_DESC_SUCCESS' => 'Reconstrucţia acţiunilor este completă.',
	'LBL_REBUILD_SCHEDULERS_DESC' => 'Prin refacerea acţiunilor planificatorului se vor şterge toate cele existente şi jurnalul lor. Toate acţiunile iniţiale vor fi reconstruite cu atributele de la început incluzând aici şi Activ sau Inactiv.',
	'LBL_REBUILD_SCHEDULERS_TITLE' => 'Reconstruieşte acţiuni',
	'LBL_REBUILD' => 'Reconstruieşte',
	'LBL_RELEASE' => 'Gestiune distribuţii şi versiuni',
	'LBL_RENAME_TABS'=>'Redenumire secţiuni',
	'LBL_REPAIR_ACTION' => 'Ce acţiune vreţi să urmaţi?',
	'LBL_REPAIR_DATABASE_DESC' =>'Repară baza de date pe baza fişierului vardefs (DOAR MYSQL)',
	'LBL_REPAIR_DATABASE_TEXT'=>'Acest utilitar vă permite să actualizaţi baza de date prin validarea modificărilor din vardefs şi a relaţiilor dintre metadate. <br />Aveţi trei opţiuni: <br />Afişază codul SQL care va fi executat <br /> Exportă codul SQL într-un fişier<br /> Execută codul SQL',
	'LBL_REPAIR_DATABASE' =>'Repară baza de date',
	'LBL_REPAIR_DISPLAYSQL' =>'Afişază sursa SQL',
	'LBL_REPAIR_ENTRY_POINTS_DESC' => 'Repară verificarea din punctele de intrare în scripturi. Executaţi aici dacă aveţi erori de tipul \'Not A Valid Entry Point\'.',
	'LBL_REPAIR_ENTRY_POINTS' => 'Repară punctele de intrare în scripturi',
	'LBL_REPAIR_EXECUTESQL' =>'Execută codul SQL',
	'LBL_REPAIR_EXPORTSQL' =>'Exportă codul SQL',
	'LBL_REPAIR_INDEX_DESC'=>'Validează şi opţional repară indexul bazei de date după definiţiile din fişierele vardef.',
	'LBL_REPAIR_INDEX'=>'Repară index',
	'LBL_REPAIR_ROLES'=>'Repară roluri',
	'LBL_REPAIR_ROLES_DESC'=>'Repară rolurile prin adăugarea modulelor noi care suportă controlul accesului şi adăugarea acestuia la cele existente',
	'LBL_RETURN' => 'Înapoi',
	'LBL_REVALIDATE'=>'Revalidează' ,
	'LBL_SEND_STAT'=>'<b>Trimite statistici anonime de folosire</b> - Dacă este aleasă această opţiune, aplicaţia va trimite statistici anonime despre instalare la SugarCRM Inc. de fiecare dată când se verifică după noi versiuni. Aceste informaţii ne vor ajuta să înţelegem mai bine cum este utilizat sistemul şi să îi aducem îmbunătăţiri.',

	'LBL_STATUS'=>'Status ',
	'LBL_STUDIO_DESC' => 'Editează liste de opţiuni, câmpuri personalizate, etichete şi aranjarea în pagină',
	'LBL_STUDIO_TITLE' => 'Studio',
	'LBL_STUDIO' => 'Studio',
	'LBL_SUGAR_NETWORK_TITLE' => 'Servicii',
	'LBL_SUGAR_SCHEDULER_TITLE' => 'Planificator de acţiuni',
	'LBL_SUGAR_SCHEDULER' => 'Gestionează acţiuni planificate',
	'LBL_SUGAR_UPDATE_TITLE'=>'Actualizări pentru SugarCRM',
	'LBL_SUGAR_UPDATE'=>'Verifică actualizări.',
	'LBL_SUGARCRM_HELP' => 'Ajutor',
	'LBL_SUPPORT_TITLE' => 'Suport tehnic pentru SugarCRM',
	'LBL_SUPPORT' => 'Acces la portal personalizat pentru suport tehnic sau alte facilităţi',
	'LBL_TIMEZONE' => 'Fus orar',
	'LBL_TO'	=> ' la ',
	'LBL_UPDATE_CHECK_AUTO'=>'Automat',
	'LBL_UPDATE_CHECK_MANUAL'=>'Manual',
	'LBL_UPDATE_CHECK_TYPE'=>'<b>Verifică automat după noi actualizări</b> - Dacă este aleasă această opţiune, aplicaţia va verifica periodic după versiuni recent apărute.',
	'LBL_UPDATE_DESCRIPTIONS'=>'Descriere',
	'LBL_UPDATE_TITLE'=>'Actualizări SugarCRM',
	'LBL_UPGRADE_STUDIO_TITLE'=>'Actualizare la studio',
	'LBL_UPGRADE_STUDIO_DESC'=>' Actualizare fişiere din versiuni mai mici decât 4.5 pentru Studio 4.5',
	'LBL_UPGRADE_CURRENCY' => 'Modifică valutele în ',
	'LBL_UPGRADE_CUSTOM_LABELS_DESC'=>'Actualizează formatul pentru etichetele câmpurilor personalizate în fiecare fişier de limbă.',
	'LBL_UPGRADE_CUSTOM_LABELS_TITLE'=>'Actualizează etichetele personalizate',
	'LBL_UPGRADE_DB_BEGIN' => 'Start actualizare',
	'LBL_UPGRADE_DB_COMPLETE' => 'Actuallizare completă',
	'LBL_UPGRADE_DB_FAIL' => 'Actualizare nereuşită',
	'LBL_UPGRADE_DB_TITLE' => 'Actualizare DB',
	'LBL_UPGRADE_DB' => 'Actualiyare DB de la versiunea 2.0.x la 2.5 ',
	'LBL_UPGRADE_TITLE' => 'Repară',
	'LBL_UPGRADE_VERSION'=>'Se modifică versiunea',
	'LBL_UPGRADE_WIZARD_TITLE' => 'Asistent pentru actualizări',
	'LBL_UPGRADE_WIZARD' => 'Asistent pentru actualizările sistemului',
	'LBL_UPGRADE' => 'Verifică şi repară aplicaţia SugarCRM',
	'LBL_UPLOAD_UPGRADE' => 'Încarcă pachet: ',
	'LBL_UPTODATE'=>'Folosiţi ultima versiune a aplicaţiei',
	'LBL_USERS_TITLE' => 'Utilizatori',
	'LBL_VALIDATION_FAIL_DATE'=>'Ultima validare eşuată: ',
	'LBL_VALIDATION_FILE'=>'Fişierul cu cheia de validare',
	'LBL_VALIDATION_SUCCESS_DATE'=>'Ultima validare reuşită: ',
	'LNK_NEW_USER' => 'Nou utilizator',
	'LNK_REPAIR_CUSTOM_FIELD' => 'Repară câmpuri personalizate',
	'LNK_SELECT_CUSTOM_FIELD' => 'Selectează câmpuri personalizate',
	'MSG_CONFIG_FILE_READY_FOR_REBUILD' => 'Fişierul config.php este pregătit pentru a fi reconstruit.',
	'MSG_CONFIG_FILE_REBUILD_FAILED' => 'Fişierul config.php nu a putut fi reconstruit.',
	'LBL_CONFIG_TABS'=>'Adăugaţi sau ştergeţi secţiuni mai jos pentru a le face vizibile sau ascunse pentru utilizatori.',
	'MSG_CONFIG_FILE_REBUILD_SUCCESS' => 'Fişierul config.php a fost construit cu succes.',
	'MSG_INCREASE_UPLOAD_MAX_FILESIZE' => 'Avertisment: Configurarea PHP trebuie schimbată pentru a permite upload de max 6MB. Modificţi valoarea upload_max_filesize din php.ini de la ',
	'MSG_MAKE_CONFIG_FILE_WRITABLE' => 'Modificaţi config.php să poată fi scris şi încercaţi din nou.',
	'MSG_REBUILD_EXTENSIONS' => 'Mergeţi la <a href="index.php?module=Administration&action=Upgrade">Repară</a> din panoul de administrare şi daţi comanda Reconstruieşte extensii.',
	'MSG_REBUILD_RELATIONSHIPS' => 'Mergeţi la <a href="index.php?module=Administration&action=Upgrade">Repară</a> din panoul de administrare şi daţi comanda Reconstruieşte relaţii.',
	'WARN_INSTALLER_LOCKED'=>'Avertisment: Pentru a vă proteja datele, programul de instalare trebuie blocat prin setarea installer_locked=true în fişierul config.php.',
	'WARN_LICENSE_EXPIRED'=> "Notificare: Licenţa expiră în ",
	'WARN_LICENSE_EXPIRED2' =>" zi(le). Mergeţi la <a href='index.php?action=LicenseSettings&module=Administration'>'\"Managementul licenţei\"</a> din panoul de administrare pentru a introduce altă cheie. Dacă nu introduceţi o nouă cheie după mai mult de 30 de zile de la expirare, nu vă veţi mai putea autentifica în aplicaţie.",
	'WARN_LICENSE_SEATS'=>  "Avertisment: Numărul de licenţe pentru utilizatori depăşit cu",
	'WARN_LICENSE_SEATS2' => ". Mergeţi la <a href='index.php?action=LicenseSettings&module=Administration'>'\"Managementul licenţei\"</a> în panoul de administrare.",
	'WARN_REPAIR_CONFIG' => 'Avertisment: Fişierul config.php trebuie să fie reparat.  Folosiţi "Repară" din panoul de administrare pentru a repara fişierul de configurare.',
	'WARN_UPGRADE_APP'=> "O versiune nouă a aplicaţiei este disponibilă.",
	'WARN_UPGRADE' => 'Avertisment: Actualizaţi ',
	'WARN_UPGRADE2'=>' prin facilitatea din <a href="index.php?module=Administration&action=Upgrade">panoul de administrare</a>',
	'WARN_VALIDATION_EXPIRED'=> "Notificare: Cheia dumneavoastră de validare expiră în ",
	'WARN_VALIDATION_EXPIRED2' =>" zi(le). Mergeţi la <a href='index.php?action=LicenseSettings&module=Administration'>'\"Managementul licenţei\"</a> din panoul de administrare.",



    'LBL_UW_SUCCESSFUL' => 'Terminare cu succes',
    'LBL_UW_PATCH_READY'=> '<h2>Gata de intalare</h2>',
    'LBL_UW_SHOW_DETAILS'=> 'Arată detalii',
    'LBL_UW_HIDE_DETAILS'=> 'Ascunde detalii',
    'LBL_UW_CHECK_ALL'=>'Bifează tot',
);


?>