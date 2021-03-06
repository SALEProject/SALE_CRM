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
	'LBL_CONFIRM_DELETE'		=> 'Sunteţi sigur(ă) că vreţi să ştergeţi acest folder?',




	'ERR_ARCHIVE_EMAIL'			=> 'Eroare: Selectaţi emailurile pentru arhivare.',
	'ERR_DATE_START'			=> 'Data de începere',
	'ERR_DELETE_RECORD'			=> 'Eroare: Un număr de înregistrare trebuie specificat pentru a şterge organizaţia.',	
	'ERR_NOT_ADDRESSED'			=> 'Eroare: Un email trebuie să aibe adresă la Către, CC sau BCC',
	'ERR_TIME_START'			=> 'Ora de începere',
	'LBL_ACCOUNTS_SUBPANEL_TITLE'=> 'Organizaţii',	
	'LBL_ADD_ANOTHER_FILE'		=> 'Adaugă alt fişier',
    'LBL_ADD_DASHLETS'          => 'Add Dashlets',        
	'LBL_ADD_DOCUMENT'			=> 'Adaugă un fişier din documente',
	'LBL_ADD_FILE'				=> 'Adaugă un fişier',
	'LBL_ARCHIVED_EMAIL'		=> 'Email arhivat',
	'LBL_ARCHIVED_MODULE_NAME'	=> 'Arhivează email',
	'LBL_ATTACHMENTS'			=> 'Ataşamente:',
	'LBL_BCC'					=> 'BCC:',
	'LBL_BODY'					=> 'Conţinut:',
	'LBL_BUGS_SUBPANEL_TITLE'	=> 'Defecte',
	'LBL_CC'					=> 'CC:',
	'LBL_COLON'					=> ':',
	'LBL_COMPOSE_MODULE_NAME'	=> 'Compune email',
	'LBL_CONTACT_FIRST_NAME'	=> 'Prenume contact',
	'LBL_CONTACT_LAST_NAME'		=> 'Nume contact',
	'LBL_CONTACT_NAME'			=> 'Contact:',
	'LBL_CONTACTS_SUBPANEL_TITLE'=> 'Contacte',
	'LBL_CREATED_BY'			=> 'Creat de',
	'LBL_DATE_AND_TIME'			=> 'Data şi ora de trimitere:',
	'LBL_DATE_SENT'				=> 'Data de trimitere:',
	'LBL_DATE'					=> 'Data de trimitere:',
	'LBL_DESCRIPTION'			=> 'Descriere',
	'LBL_EDIT_ALT_TEXT'			=> 'Editează text alternativ',
	'LBL_EDIT_MY_SETTINGS'		=> 'Editează configurări personale',
	'LBL_EMAIL_ATTACHMENT'		=> 'Ataşament',
	'LBL_EMAIL_EDITOR_OPTION'	=> 'Trimite email HTML',
	'LBL_EMAIL_SELECTOR'		=> 'Selectează',
	'LBL_EMAIL'					=> 'Email:',
	'LBL_EMAILS_ACCOUNTS_REL'	=> 'Emailuri:Organizaţii',
	'LBL_EMAILS_BUGS_REL'		=> 'Emailuri:Defecte',
	'LBL_EMAILS_CASES_REL'		=> 'Emailuri:Cazuri',
	'LBL_EMAILS_CONTACTS_REL'	=> 'Emailuri:Contacte',
	'LBL_EMAILS_LEADS_REL'		=> 'Emailuri:Referinţe',
	'LBL_EMAILS_OPPORTUNITIES_REL'=> 'Emailuri:Afaceri',
	'LBL_EMAILS_PROJECT_REL'	=> 'Emailuri:Proiecte',
	'LBL_EMAILS_PROJECTTASK_REL'=> 'Emailuri:Lucrări',
	'LBL_EMAILS_PROSPECT_REL'	=> 'Emailuri:Prospecte',
	'LBL_EMAILS_TASKS_REL'		=> 'Emailuri:Sarcini',
	'LBL_EMAILS_USERS_REL'		=> 'Emailuri:Utilizatori',
	'LBL_ERROR_SENDING_EMAIL'	=> 'Eroare de trimitere',
	'LBL_FORWARD_HEADER'		=> 'Retrimite început:',
	'LBL_FROM_NAME'				=> 'De la',
	'LBL_FROM'					=> 'De la adresa:',
	'LBL_HTML_BODY'				=> 'Conţinut HTML',
	'LBL_INVITEE'				=> 'Destinatari',
	'LBL_LEADS_SUBPANEL_TITLE'	=> 'Referinţe',
	'LBL_MESSAGE_SENT'			=> 'Mesaj trimis',
	'LBL_MODIFIED_BY'			=> 'Modificat de',
	'LBL_MODULE_NAME_NEW'		=> 'Arhiva emailuri',
	'LBL_MODULE_NAME'			=> 'Lista de emailuri',
	'LBL_MODULE_TITLE'			=> 'Emailuri: ',
	'LBL_NEW_FORM_TITLE'		=> 'Arhiva emailuri',
	'LBL_NOT_SENT'				=> 'Eroare de trimitere',
	'LBL_NOTE_SEMICOLON'		=> 'Notă: Folosiţi virgulă sau punct şi virgulă ca separator pentru adresele de email.',
	'LBL_NOTES_SUBPANEL_TITLE' => 'Ataşamente',
	'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Afaceri',
	'LBL_PROJECT_SUBPANEL_TITLE'=> 'Proiecte',
	'LBL_PROJECT_TASK_SUBPANEL_TITLE'=> 'Lucrări',
    'LBL_RAW'                  => 'Email neformatat',
	'LBL_SAVE_AS_DRAFT_BUTTON_KEY'=> 'R',
	'LBL_SAVE_AS_DRAFT_BUTTON_LABEL'=> 'Salvează schiţă',
	'LBL_SAVE_AS_DRAFT_BUTTON_TITLE'=> 'Salvează schiţă [Alt+R]',
	'LBL_SEARCH_FORM_DRAFTS_TITLE'=> 'Caută schiţă',
	'LBL_SEARCH_FORM_SENT_TITLE'=> 'Caută în emailurile trimise',
	'LBL_SEARCH_FORM_TITLE'		=> 'Caută emailuri',
	'LBL_SEND_ANYWAYS'			=> 'Acest email nu are subiect. Trimite/salvează oricum?',
	'LBL_SEND_BUTTON_KEY'		=> 'S',
	'LBL_SEND_BUTTON_LABEL'		=> 'Trimite',
	'LBL_SEND_BUTTON_TITLE'		=> 'Trimite [Alt+S]',
	'LBL_SEND'					=> 'Trimite',
	'LBL_SENT_MODULE_NAME'		=> 'Emailuri trimise',
	'LBL_SHOW_ALT_TEXT'			=> 'Arată text',
	'LBL_SIGNATURE'				=> 'Semnătură',
	'LBL_SUBJECT'				=> 'Subiect:',
	'LBL_TEXT_BODY'				=> 'Conţinut text',
	'LBL_TIME'					=> 'Ora de trimitere:',
	'LBL_TO_ADDRS'				=> 'Către',
	'LBL_TO'					=> 'Către:',
	'LBL_USE_TEMPLATE'			=> 'Şablon:',
	'LBL_USERS_SUBPANEL_TITLE'	=> 'Utilizatori',
	'LBL_USERS'					=> 'Utilizatori',

	'LNK_ALL_EMAIL_LIST'		=> 'Lista de emailuri',
	'LNK_ARCHIVED_EMAIL_LIST'	=> 'Arhiva emailuri',
	'LNK_CALL_LIST'				=> 'Apeluri',
	'LNK_DRAFTS_EMAIL_LIST'		=> 'Lista de schiţe',
	'LNK_EMAIL_LIST'			=> 'Emailuri',
	'LNK_EMAIL_TEMPLATE_LIST'	=> 'Şabloane de email',
	'LNK_MEETING_LIST'			=> 'Întâlniri',
	'LNK_NEW_ARCHIVE_EMAIL'		=> 'Arhivează email',
	'LNK_NEW_CALL'				=> 'Nou apel',
	'LNK_NEW_EMAIL_TEMPLATE'	=> 'Nou şablon de email',
	'LNK_NEW_EMAIL'				=> 'Arhivează email',
	'LNK_NEW_MEETING'			=> 'Nouă întâlnire',
	'LNK_NEW_NOTE'				=> 'Nouă notă',
	'LNK_NEW_SEND_EMAIL'		=> 'Nou email',
	'LNK_NEW_TASK'				=> 'Nouă sarcină',
	'LNK_NOTE_LIST'				=> 'Note',
	'LNK_SENT_EMAIL_LIST'		=> 'Trimise',
	'LNK_TASK_LIST'				=> 'Sarcini',
	'LNK_VIEW_CALENDAR'			=> 'Astăzi',

	'LBL_LIST_ASSIGNED'			=> 'Atribuit',
	'LBL_LIST_CONTACT_NAME'		=> 'Nume de contact',
	'LBL_LIST_CONTACT'			=> 'Contact',
	'LBL_LIST_CREATED'			=> 'Creat',
	'LBL_LIST_DATE_SENT'		=> 'Data de trimitere',
	'LBL_LIST_DATE'				=> 'Data de trimitere',
	'LBL_LIST_FORM_DRAFTS_TITLE'=> 'Schiţă',
	'LBL_LIST_FORM_SENT_TITLE'	=> 'Emailuri trimise',
	'LBL_LIST_FORM_TITLE'		=> 'Lista de emailuri',
	'LBL_LIST_FROM_ADDR'		=> 'De la',
	'LBL_LIST_RELATED_TO'		=> 'Legat de',
	'LBL_LIST_SUBJECT'			=> 'Subiect',
	'LBL_LIST_TIME'				=> 'Ora de trimitere',
	'LBL_LIST_TO_ADDR'			=> 'Către',
	'LBL_LIST_TYPE'				=> 'Tip',

	'NTC_REMOVE_INVITEE'		=> 'Sunteţi sigur(ă) că vreţi să ştergeţi acest destinatar din mesaj?',
	'WARNING_SETTINGS_NOT_CONF'	=> 'Avertisment: Nu aveţi configurarea pentru trimiterea de emailuri.',
	'WARNING_NO_UPLOAD_DIR'		=> 'Ataşarea fişierelor a eşuat: Nu s-a găsit o valoare pentru "upload_tmp_dir". Corectaţi asta în fişierul php.ini.',
	'WARNING_UPLOAD_DIR_NOT_WRITABLE'	=> 'Ataşarea fişierelor a eşuat: o valoare incorectă sau inutilizabilă pentru "upload_tmp_dir" a fost detectată. Corectaţi asta în fişierul php.ini.',

    // for All emails
    'LBL_BUTTON_RAW_TITLE'   => 'Arată mesajul neformatat [Alt+E]',
    'LBL_BUTTON_RAW_KEY'     => 'e',
    'LBL_BUTTON_RAW_LABEL'   => 'Arată neformatat',
    'LBL_BUTTON_RAW_LABEL_HIDE' => 'Arată normal',

	// for InboundEmail
	'LBL_BUTTON_CHECK'			=> 'Verificare cont',
	'LBL_BUTTON_CHECK_TITLE'	=> 'Verifică pentru mesaje noi [Alt+C]',
	'LBL_BUTTON_CHECK_KEY'		=> 'c',
	'LBL_BUTTON_FORWARD'		=> 'Retrimite',
	'LBL_BUTTON_FORWARD_TITLE'	=> 'Retrimite acest email [Alt+F]',
	'LBL_BUTTON_FORWARD_KEY'	=> 'f',
	'LBL_BUTTON_REPLY_KEY'		=> 'r',
	'LBL_BUTTON_REPLY_TITLE'	=> 'Răspunde [Alt+R]',
	'LBL_BUTTON_REPLY'			=> 'Răspunde',
	'LBL_CASES_SUBPANEL_TITLE'	=> 'Cazuri',
	'LBL_INBOUND_TITLE'			=> 'Emailuri primite',
	'LBL_INTENT'				=> 'Intenţie',
	'LBL_MESSAGE_ID'			=> 'ID mesaj',
	'LBL_REPLY_TO_ADDRESS'		=> 'Răspunde la adresa',
	'LBL_REPLY_TO_NAME'			=> 'Răspunde către',

	'LBL_LIST_BUG'				=> 'Defecte',
	'LBL_LIST_CASE'				=> 'Cazuri',
	'LBL_LIST_CONTACT'			=> 'Contacte',
	'LBL_LIST_LEAD'				=> 'Referinţe',
	'LBL_LIST_TASK'				=> 'Sarcini',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilizator',

	// for Inbox
	'LBL_ALL'					=> 'Tot',
	'LBL_ASSIGN_WARN'			=> 'Aveţi grijă ca toate cele trei opţiuni să fie selectate.',
	'LBL_BACK_TO_GROUP'			=> 'Înapoi la contul de email al grupului',
	'LBL_BUTTON_DISTRIBUTE_KEY'	=> 'a',
	'LBL_BUTTON_DISTRIBUTE_TITLE'=> 'Atribuie [Alt+A]',
	'LBL_BUTTON_DISTRIBUTE'		=> 'Atribuie',
	'LBL_BUTTON_GRAB_KEY'		=> 't',
	'LBL_BUTTON_GRAB_TITLE'		=> 'Ia din grup [Alt+T]',
	'LBL_BUTTON_GRAB'			=> 'Ia din grup',
	'LBL_CREATE_BUG'			=> 'Nou defect',
	'LBL_CREATE_CASE'			=> 'Nou caz',
	'LBL_CREATE_CONTACT'		=> 'Nou contact',
	'LBL_CREATE_LEAD'			=> 'Nouă referinţă',
	'LBL_CREATE_TASK'			=> 'Nouă sarcină',
	'LBL_DIST_TITLE'			=> 'Atribuie',
	'LBL_LOCK_FAIL_DESC'		=> 'Elementul ales nu este disponibil momentan.',
	'LBL_LOCK_FAIL_USER'		=> ' a devenit proprietar.',
	'LBL_MASS_DELETE_ERROR'		=> 'Niciun element bifat pentru ştergere.',
	'LBL_NEW'					=> 'noi',
	'LBL_NEXT_EMAIL'			=> 'Următorul element liber',
	'LBL_NO_GRAB_DESC'			=> 'Nu s-au găsit elemente disponibile. Încercaţi din nou.',
	'LBL_QUICK_REPLY'			=> 'Răspunde',
	'LBL_REPLIED'				=> 'Răspuns',
	'LBL_SELECT_TEAM'			=> 'Selectare echipe',
	'LBL_TAKE_ONE_TITLE'		=> 'Răsp',
	'LBL_TITLE_SEARCH_RESULTS'	=> 'Caută în rezultate',
	'LBL_TO'					=> 'Către: ',
	'LBL_TOGGLE_ALL'			=> 'Bifează/debifează tot',
	'LBL_UNKNOWN'				=> 'Necunoscut',
	'LBL_UNREAD_HOME'			=> 'Emailuri necitite',
	'LBL_UNREAD'				=> 'Necitite',
	'LBL_USE_ALL'				=> 'Toate rezultatele căutării',
	'LBL_USE_CHECKED'			=> 'Cele bifate',
	'LBL_USE_MAILBOX_INFO'		=> 'Foloseşte contul de email ca sursă',
	'LBL_USE'					=> 'Atribuie:',
	'LBL_USER_SELECT'			=> 'Selectează utilizatori',
	'LBL_USING_RULES'			=> 'Reguli folosite:',
	'LBL_WARN_NO_DIST'			=> 'Nu s-a selectat o metodă de distribuţie',
	'LBL_WARN_NO_USERS'			=> 'Nu s-a selectat niciun utilizator',

	'LBL_LIST_STATUS'			=> 'Status',
	'LBL_LIST_TITLE_GROUP_INBOX'=> 'Contul grupului',
	'LBL_LIST_TITLE_MY_DRAFTS'	=> 'Schiţe',
	'LBL_LIST_TITLE_MY_INBOX'	=> 'Contul meu',
	'LBL_LIST_TITLE_MY_SENT'	=> 'Trimise',
	'LBL_LIST_TITLE_MY_ARCHIVES'=> 'Arhivate',

	'LNK_CHECK_MY_INBOX'		=> 'Verificare cont',
	'LNK_DATE_SENT'				=> 'Data de trimitere',
	'LNK_GROUP_INBOX'			=> 'Contul grupului',
	'LNK_MY_DRAFTS'				=> 'Schiţe',
	'LNK_MY_INBOX'				=> 'Contul meu',
	'LNK_QUICK_REPLY'			=> 'Răspunde',
	'LNK_MY_ARCHIVED_LIST'		=> 'Arhivate',

	// advanced search
	'LBL_ASSIGNED_TO'			=> 'Atribuit lui:',
	'LBL_MEMBER_OF'				=> 'Părinte',
	'LBL_QUICK_CREATE'			=> 'Alege acţiune',
	'LBL_STATUS'				=> 'Status email:',
	'LBL_TYPE'					=> 'Tip:',

	'LNK_VIEW_MY_INBOX' => 'Vizioneaza imboxul meu',
);
?>
