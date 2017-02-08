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
	



	'ERR_BAD_LOGIN_PASSWORD'=> 'Utilizator sau parolă incorectă',
	'ERR_BODY_TOO_LONG'		=> '\rConţinutul mesajului este prea lung pentru a îl afişa pe tot. Afişare parţială.',
	'ERR_INI_ZLIB'			=> 'Nu s-a putut dezactiva temporar compresia zlib. Testul a eşuat.',
	'ERR_MAILBOX_FAIL'		=> 'Nu s-a găsit niciun cont de email.',
	'ERR_NO_IMAP'			=> 'Nu s-au găsit bibliotecile de acces la IMAP. Rezolvaţi aceasta înainte de a continua cu primirea mesajelor',
	'ERR_NO_OPTS_SAVED'		=> 'Nu au fost salvate opţiuni cu contul de email la InboundEmail. Revedeţi setările.',
	'ERR_TEST_MAILBOX'		=> 'Verificaţi setările şi încercaţi din nou.',
	
	'LBL_APPLY_OPTIMUMS'	=> 'Aplică opţiuni',
	'LBL_ASSIGN_TO_USER'	=> 'Atribuie utilizatorului',
	'LBL_AUTOREPLY_OPTIONS'	=> 'Opţiuni de autorăspuns',
	'LBL_AUTOREPLY'			=> 'Şablon de autorăspuns',
	'LBL_BASIC'				=> 'Configurare de bază',
	'LBL_CASE_MACRO'		=> 'Macro pentru cazuri',
	'LBL_CASE_MACRO_DESC'	=> 'Configuraţi macro-ul care va fi executat şi folosit pentru a asocia mesaje la un caz.',
	'LBL_CASE_MACRO_DESC2'	=> 'Alegeţi orice valoare dar păstraţi <b>"%1"</b>.',
	'LBL_CERT_DESC'			=> 'Forţează validarea certificatului de securitate al serverului de email - nu alegeţi dacă generaţi local certificatele.',
	'LBL_CERT'				=> 'Validează certificat',
	'LBL_CLOSE_POPUP'		=> 'Închide',
	'LBL_CREATE_NEW_GROUP'	=> '-- Creează grup de mesaje --',
	'LBL_CREATE_TEMPLATE'	=> 'Creează',
	'LBL_DEFAULT_FROM_ADDR'	=> 'De la adresa: ',
	'LBL_DEFAULT_FROM_NAME'	=> 'De la: ',
	'LBL_EDIT_TEMPLATE'		=> 'Editează',
	'LBL_EMAIL_OPTIONS'		=> 'Opţiuni pentru manipularea emailurilor',
	'LBL_FILTER_DOMAIN_DESC'=> 'Nu trimite răspunsuri automate la acest domeniu.',
	'LBL_FILTER_DOMAIN'		=> 'Fără autorăspuns la domemiu',
	'LBL_FIND_OPTIMUM_KEY'	=> 'f',
	'LBL_FIND_OPTIMUM_MSG'	=> '<br />Găseşte variabilele optime de conectare.',
	'LBL_FIND_OPTIMUM_TITLE'=> 'Găseşte configurarea optimă',
	'LBL_FIND_SSL_WARN'		=> '<br />Testarea modului SSL poate să dureze un timp îndelungat. Vă rugăm aşteptaţi.<br />',
	'LBL_FORCE_DESC'		=> 'Unele servere IMAP/POP3 au nevoie de anumiţi parametri. Bifaţi pentru a forţa un parametru negativ la conectare (/notls)',
	'LBL_FORCE'				=> 'Forţează specificaţia',
	'LBL_FOUND_MAILBOXES'	=> 'S-au găsit următoarele foldere. <br />Alegeţi unul:',
	'LBL_FOUND_OPTIMUM_MSG'	=> '<br />S-au găsit configurările optime. Folosiţi butonul de mai jos pentru a le aplica la contul dumneavoastră de email.',
	'LBL_FROM_ADDR'			=> 'De la adresa',
	'LBL_FROM_NAME_ADDR'	=> 'Răspunde cu nume/email',
	'LBL_FROM_NAME'			=> 'De la',
	'LBL_GROUP_QUEUE'		=> 'Atribuit grupului',
    'LBL_HOME'              => 'Start',
	'LBL_LIST_MAILBOX_TYPE'	=> 'Tip de cont',
	'LBL_LIST_NAME'			=> 'Nume:',
	'LBL_LIST_SERVER_URL'	=> 'Server de mail:',
	'LBL_LIST_STATUS'		=> 'Status:',
	'LBL_LOGIN'				=> 'Utilizator',
	'LBL_MAILBOX_DEFAULT'	=> 'INBOX',
	'LBL_MAILBOX_SSL_DESC'	=> 'Se foloseşte SSL la conectare. Dacă aceasta nu merge, verificaţi ca instalarea PHP să includă "--with-imap-ssl" în configurare.',
	'LBL_MAILBOX_SSL'		=> 'Foloseşte SSL',
	'LBL_MAILBOX_TYPE'		=> 'Acţiuni posibile',
	'LBL_MAILBOX'			=> 'Director monitorizat',
	'LBL_MARK_READ_DESC'	=> 'Marchează mesajele citite pe serverul de mail; nu le şterge.',
	'LBL_MARK_READ_NO'		=> 'Email marcat şters după import',
	'LBL_MARK_READ_YES'		=> 'Email lăsat pe server după import',
	'LBL_MARK_READ'			=> 'Păstrează mesajele pe server',
	'LBL_MODULE_NAME'		=> 'Primire email',
	'LBL_MODULE_TITLE'		=> 'Lista de conturi',
	'LBL_NAME'				=> 'Nume',
	'LBL_NO_OPTIMUMS'		=> 'Nu s-a găsit configurarea optimă. Verificaţi setările şi încercaţi din nou.',
	'LBL_ONLY_SINCE_DESC'	=> 'Când se foloseşte POP3, PHP nu poate să filtreze mesajele noi necitite. Această opţiune dă posibilitatea verificării mesajelor primite de la ultima accesare. Astfel se poate îmbunătăţi performanţa pentru un server de email care nu suportă IMAP.', 
	'LBL_ONLY_SINCE_NO'		=> 'Nu. Verifică toate mesajele de pe server.',
	'LBL_ONLY_SINCE_YES'	=> 'Da.',
	'LBL_ONLY_SINCE'		=> 'Importă doar de la ultima verificare:',
	'LBL_PASSWORD_CHECK'	=> 'Verificare parolă',
	'LBL_PASSWORD'			=> 'Parolă',
	'LBL_POP3_SUCCESS'		=> 'Testul de conectare cu serverul POP3 s-a încheiat cu succes.',
	'LBL_POPUP_FAILURE'		=> 'Conectarea de test nu a reuşit. Eroarea este mai jos.',
	'LBL_POPUP_SUCCESS'		=> 'Coectarea de test a reuşit. Setările funcţionează.',
	'LBL_POPUP_TITLE'		=> 'Testează setări',
	'LBL_PORT'				=> 'Portul serverului de mail',
	'LBL_QUEUE'				=> 'Coadă de mesaje',
	'LBL_SERVER_OPTIONS'	=> 'Configurare avansată',
	'LBL_SERVER_TYPE'		=> 'Tip de server',
	'LBL_SERVER_URL'		=> 'Adresa serverului',
	'LBL_SSL_DESC'			=> 'Dacă serverul de email suportă conectări securizate, după activarea acestei facilităţi emailurile se vor transfera incriptat.',
	'LBL_SSL'				=> 'Foloseşte SSL',
	'LBL_STATUS'			=> 'Status',
	'LBL_SYSTEM_DEFAULT'	=> 'System Default',
	'LBL_TEST_BUTTON_KEY'	=> 't',
	'LBL_TEST_BUTTON_TITLE'	=> 'Testează [Alt+T]',
	'LBL_TEST_SETTINGS'		=> 'Testează configurări',
	'LBL_TEST_SUCCESSFUL'	=> 'Testul s-a încheiat cu succes.',
	'LBL_TEST_WAIT_MESSAGE'	=> 'Un moment ...',
	'LBL_TLS_DESC'			=> 'Se foloseşte "Transport Layer Security" la comunicarea cu serverul de email - alegeţi opţiunea doar dacă serverul de email o suportă.',
	'LBL_TLS'				=> 'Foloseşte TLS',
	'LBL_WARN_IMAP_TITLE'	=> 'Avertisment IMAP',
	'LBL_WARN_IMAP'			=> 'Avertismente:',
	'LBL_WARN_NO_IMAP'		=> 'Acest sistem nu are activate/compilate bibliotecile de funcţii c-client IMAP în modulul PHP (--with-imap=/path/to/imap_c-client_library). Contactaţi administratorul pentru a rezolva această problemă.',
	
	'LNK_CREATE_GROUP'		=> 'Nou grup',
	'LNK_LIST_CREATE_NEW'	=> 'Nou cont de monitorizat',
	'LNK_LIST_MAILBOXES'	=> 'Conturile monitorizate',
	'LNK_LIST_QUEUES'		=> 'Toate cozile',
#	'LNK_LIST_QUEUES'		=> 'Toate cozile',
	'LNK_LIST_SCHEDULER'	=> 'Planificator de acţiuni',
	'LNK_LIST_TEST_IMPORT'	=> 'Testează importul de email',
	'LNK_NEW_QUEUES'		=> 'Nouă coadă',
#	'LNK_NEW_QUEUES'		=> 'Nouă coadă',
	'LNK_SEED_QUEUES'		=> 'Începe cozile de la echipe',
);

?>