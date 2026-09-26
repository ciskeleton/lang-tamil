<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in the CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'கூறுகள்';
$lang['admin_content'] = 'உள்ளடக்கம்';
$lang['admin_database_backup'] = 'தரவுத்தள காப்புப்பிரதிகள்';
$lang['admin_extensions'] = 'நீட்டிப்புகள்';
$lang['admin_firewall'] = 'ஃபயர்வால்';
$lang['admin_help'] = 'உதவி';
$lang['admin_languages'] = 'மொழிகள்';
$lang['admin_logs'] = 'கணினி பதிவுகள்';
$lang['admin_media'] = 'ஊடக நூலகம்';
$lang['admin_modules'] = 'தொகுதிகள்';
$lang['admin_plugins'] = 'செருகுநிரல்கள்';
$lang['admin_reports'] = 'செயல்பாட்டு பதிவு';
$lang['admin_settings'] = 'கணினி அமைப்புகள்';
$lang['admin_sysinfo'] = 'கணினி தகவல்';
$lang['admin_system'] = 'அமைப்பு';
$lang['admin_system_firewall'] = 'கணினி ஃபயர்வால்';
$lang['admin_themes'] = 'தீம்கள்';
$lang['admin_updates'] = 'கணினி மேம்படுத்தல்கள்';
$lang['admin_users'] = 'பயனர்கள்';
$lang['admin_view_site'] = 'தளத்தைப் பார்க்கவும்';
$lang['per_page'] = 'ஒரு பக்கத்திற்கு';

// Generic Messages
$lang['admin_footer_thankyou'] = '<a href="%s">%s</a> உடன் உருவாக்கியதற்கு நன்றி.';
$lang['admin_items_active_count'] = '=0{செயலில் உள்ள உருப்படிகள் இல்லை.} other{மொத்தம் <b>%s</b> இல் <b>#</b> உருப்படிகள் செயலில் உள்ளன.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install_error_com'] = 'நிறுவல் தோல்வியடைந்தது: %s';
$lang['admin_install_location_app'] = 'இந்த பயன்பாடு மட்டுமே';
$lang['admin_install_location_core'] = 'அனைத்து பயன்பாடுகள்';
$lang['admin_install_location_select'] = '&#151; இருப்பிடத்தைத் தேர்ந்தெடு &#151;';
$lang['admin_install_update_confirm'] = 'இந்த தொகுப்பைப் புதுப்பிக்க விரும்புகிறீர்களா?';
$lang['admin_install_update_error'] = 'தொகுப்பைப் புதுப்பிப்பதில் தோல்வி.';
$lang['admin_install_update_skip_confirm'] = 'இந்த புதுப்பிப்பைத் தவிர்க்க விரும்புகிறீர்களா?';
$lang['admin_install_update_skip_error'] = 'இந்த புதுப்பிப்பைத் தவிர்ப்பதில் தோல்வி.';
$lang['admin_install_update_skip_success'] = 'புதுப்பிப்பு வெற்றிகரமாகத் தவிர்க்கப்பட்டது.';
$lang['admin_install_update_success'] = 'தொகுப்பு வெற்றிகரமாகப் புதுப்பிக்கப்பட்டது.';
$lang['admin_install_upload_tip'] = 'இதன் <b>.zip</b> கோப்பை இங்கே பதிவேற்றி ஒரு தொகுப்பை நிறுவவும்.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for the database management section.
 */
$lang['admin_database_backup_clean_error'] = 'பழைய காப்பு கோப்புகளை சுத்தம் செய்ய முடியவில்லை.';
$lang['admin_database_backup_clean_success'] = '%d காப்பு கோப்புகள் நீக்கப்பட்டன. %d வட்டு இடம் விடுவிக்கப்பட்டது.';
$lang['admin_database_backup_create'] = 'காப்புப்பிரதியை உருவாக்கவும்';
$lang['admin_database_backup_create_confirm'] = 'இப்போது காப்புப்பிரதியை நிச்சயமாக உருவாக்க விரும்புகிறீர்களா?';
$lang['admin_database_backup_create_error'] = 'காப்பு கோப்பை உருவாக்க முடியவில்லை. <b>%s</b> கோப்புறை எழுதக்கூடியது என்பதை உறுதிப்படுத்தவும்.';
$lang['admin_database_backup_create_success'] = 'தரவுத்தள காப்பு கோப்பு <b>%s</b> வெற்றிகரமாக உருவாக்கப்பட்டது.';
$lang['admin_database_backup_delete_confirm'] = 'இந்தக் காப்புப் பிரதி கோப்புகளை நிச்சயமாக நீக்க விரும்புகிறீர்களா?';
$lang['admin_database_backup_delete_error'] = 'தேர்ந்தெடுக்கப்பட்ட காப்புப் பிரதி கோப்புகளை நீக்க முடியவில்லை.';
$lang['admin_database_backup_delete_success'] = 'காப்புப் பிரதி கோப்புகள் வெற்றிகரமாக நீக்கப்பட்டன.';
$lang['admin_database_backup_download_error'] = 'தேர்ந்தெடுக்கப்பட்ட காப்புப் பிரதி கோப்பைப் பதிவிறக்க முடியவில்லை.';
$lang['admin_database_backup_download_success'] = 'காப்பு கோப்பு வெற்றிகரமாக பதிவிறக்கப்பட்டது.';
$lang['admin_database_backup_lock_confirm'] = 'இந்தக் காப்புப் பிரதி கோப்புகளை நிச்சயமாகப் பூட்ட விரும்புகிறீர்களா?';
$lang['admin_database_backup_lock_error'] = 'தேர்ந்தெடுக்கப்பட்ட காப்புப் பிரதி கோப்புகளைப் பூட்டுவதில் தோல்வி.';
$lang['admin_database_backup_lock_success'] = 'காப்புப் பிரதி கோப்புகள் வெற்றிகரமாக பூட்டப்பட்டன.';
$lang['admin_database_backup_locked_error'] = 'பூட்டப்பட்ட காப்பு கோப்புகளை நீக்க முடியவில்லை.';
$lang['admin_database_backup_missing_error'] = 'காப்பு கோப்பு கண்டுபிடிக்க முடியவில்லை.';
$lang['admin_database_backup_unlock_confirm'] = 'இந்தக் காப்புப் பிரதி கோப்புகளை நிச்சயமாகத் திறக்க விரும்புகிறீர்களா?';
$lang['admin_database_backup_unlock_error'] = 'தேர்ந்தெடுக்கப்பட்ட காப்புப் பிரதி கோப்புகளைத் திறக்க முடியவில்லை.';
$lang['admin_database_backup_unlock_success'] = 'காப்புப் பிரதி கோப்புகள் வெற்றிகரமாக திறக்கப்பட்டன.';
$lang['admin_database_prune'] = 'ப்ரூன்';
$lang['admin_database_prune_confirm'] = 'தரவுத்தளத்தை கண்டிப்பாக சீரமைக்க விரும்புகிறீர்களா? ஒரு காப்புப்பிரதி உருவாக்கப்படும்.';
$lang['admin_database_prune_error'] = 'தரவுத்தளத்தை சீரமைக்க முடியவில்லை.';
$lang['admin_database_prune_next'] = 'அடுத்த ப்ரூன்: <b>%s</b>';
$lang['admin_database_prune_success'] = 'தரவுத்தளம் வெற்றிகரமாக சீரமைக்கப்பட்டது.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for the system logs section.
 */
$lang['admin_logs_delete'] = 'பதிவுகளை நீக்கு';
$lang['admin_logs_delete_confirm'] = 'தேர்ந்தெடுக்கப்பட்ட பதிவுக் கோப்புகளை நிச்சயமாக நீக்க விரும்புகிறீர்களா?';
$lang['admin_logs_delete_error'] = 'பதிவு கோப்புகளை நீக்க முடியவில்லை.';
$lang['admin_logs_delete_success'] = 'பதிவு கோப்புகள் வெற்றிகரமாக நீக்கப்பட்டன.';
$lang['admin_logs_error_disabled'] = 'உள்நுழைவு தற்போது இயக்கப்படவில்லை.';
$lang['admin_logs_error_empty'] = 'பதிவுகள் எதுவும் கிடைக்கவில்லை.';
$lang['admin_logs_error_missing'] = 'பதிவுக் கோப்பைக் கண்டுபிடிக்க முடியவில்லை அல்லது அது காலியாக இருந்தது.';
$lang['admin_logs_tip'] = 'பதிவு செய்வதன் மூலம் மிகப்பெரிய கோப்புகளை விரைவாக உருவாக்க முடியும். நேரடி தளங்களுக்கு, பழையவற்றை நீக்குவது பற்றி யோசியுங்கள்.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for the mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'தேர்ந்தெடுக்கப்பட்ட மின்னஞ்சல்களை நிச்சயமாக நீக்க விரும்புகிறீர்களா?';
$lang['admin_emails_delete_error'] = 'தேர்ந்தெடுக்கப்பட்ட மின்னஞ்சல்களை நீக்க முடியவில்லை.';
$lang['admin_emails_delete_success'] = 'தேர்ந்தெடுக்கப்பட்ட மின்னஞ்சல்கள் வெற்றிகரமாக நீக்கப்பட்டன.';
$lang['admin_emails_email_from'] = 'அனுப்பப்பட்டது';
$lang['admin_emails_mail_queue'] = 'அஞ்சல் வரிசை';
$lang['admin_emails_mailer'] = 'வெகுஜன அஞ்சல்';
$lang['admin_emails_search'] = 'பொருள் அல்லது உள்ளடக்கம் மூலம் மின்னஞ்சல்களைத் தேடுங்கள்...';
$lang['admin_emails_send_error'] = 'மின்னஞ்சலை வரிசைப்படுத்த முடியவில்லை. மீண்டும் முயற்சிக்கவும்.';
$lang['admin_emails_send_none'] = 'நீங்கள் தேர்ந்தெடுத்த அளவுகோல்களுடன் எந்தப் பயனரும் பொருந்தவில்லை.';
$lang['admin_emails_send_success'] = 'மின்னஞ்சல் வரிசைப்படுத்தப்பட்டுள்ளது, விரைவில் அனுப்பப்படும்.';
$lang['admin_emails_send_to_banned'] = 'தடைசெய்யப்பட்ட பயனர்களுக்கு அனுப்பவும்.';
$lang['admin_emails_send_to_deleted'] = 'நீக்கப்பட்ட பயனர்களுக்கு அனுப்பவும்.';
$lang['admin_emails_send_to_disabled'] = 'செயலற்ற பயனர்களுக்கு அனுப்பவும்.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for the users management section.
 */
$lang['admin_users_add'] = 'பயனரைச் சேர்க்கவும்';
$lang['admin_users_all_users'] = 'அனைத்து பயனர்கள்';
$lang['admin_users_ban_confirm'] = 'தேர்ந்தெடுக்கப்பட்ட பயனர்களைத் தடை செய்ய விரும்புகிறீர்களா?';
$lang['admin_users_ban_error'] = 'தேர்ந்தெடுக்கப்பட்ட பயனர்களைத் தடை செய்ய முடியவில்லை.';
$lang['admin_users_ban_success'] = 'தேர்ந்தெடுக்கப்பட்ட பயனர்கள் வெற்றிகரமாக தடைசெய்யப்பட்டனர்.';
$lang['admin_users_delete_confirm'] = 'தேர்ந்தெடுக்கப்பட்ட பயனர்களை நிச்சயமாக நீக்க விரும்புகிறீர்களா?';
$lang['admin_users_delete_error'] = 'தேர்ந்தெடுக்கப்பட்ட பயனர்களை நீக்க முடியவில்லை.';
$lang['admin_users_delete_success'] = 'தேர்ந்தெடுக்கப்பட்ட பயனர்கள் வெற்றிகரமாக நீக்கப்பட்டனர்.';
$lang['admin_users_disable_confirm'] = 'தேர்ந்தெடுக்கப்பட்ட பயனர்களை நிச்சயமாக முடக்க விரும்புகிறீர்களா?';
$lang['admin_users_disable_error'] = 'தேர்ந்தெடுக்கப்பட்ட பயனர்களை முடக்க முடியவில்லை.';
$lang['admin_users_disable_success'] = 'தேர்ந்தெடுக்கப்பட்ட பயனர்கள் வெற்றிகரமாக முடக்கப்பட்டனர்.';
$lang['admin_users_edit'] = 'பயனரைத் திருத்து';
$lang['admin_users_edit_error'] = 'பயனரைப் புதுப்பிக்க முடியவில்லை.';
$lang['admin_users_edit_success'] = 'பயனர் வெற்றிகரமாக புதுப்பிக்கப்பட்டார்.';
$lang['admin_users_enable_confirm'] = 'தேர்ந்தெடுக்கப்பட்ட பயனர்களை நிச்சயமாக இயக்க விரும்புகிறீர்களா?';
$lang['admin_users_enable_error'] = 'தேர்ந்தெடுக்கப்பட்ட பயனர்களை இயக்க முடியவில்லை.';
$lang['admin_users_enable_success'] = 'தேர்ந்தெடுக்கப்பட்ட பயனர்கள் வெற்றிகரமாக இயக்கப்பட்டுள்ளனர்.';
$lang['admin_users_groups'] = 'குழுக்கள்';
$lang['admin_users_lock_confirm'] = 'தேர்ந்தெடுக்கப்பட்ட பயனர்களை நிச்சயமாகப் பூட்ட விரும்புகிறீர்களா?';
$lang['admin_users_lock_error'] = 'தேர்ந்தெடுக்கப்பட்ட பயனர்களைப் பூட்டுவதில் தோல்வி.';
$lang['admin_users_lock_success'] = 'தேர்ந்தெடுக்கப்பட்ட பயனர்கள் வெற்றிகரமாகப் பூட்டப்பட்டனர்.';
$lang['admin_users_logged'] = 'உள்நுழைந்த பயனர்கள்';
$lang['admin_users_manage'] = 'பயனர்களை நிர்வகிக்கவும்';
$lang['admin_users_remove_confirm'] = 'தேர்ந்தெடுக்கப்பட்ட பயனர்களையும் அவர்களின் எல்லா தரவையும் நிரந்தரமாக நீக்க விரும்புகிறீர்களா?';
$lang['admin_users_remove_error'] = 'தேர்ந்தெடுக்கப்பட்ட பயனர்களையும் அவர்களின் எல்லா தரவையும் நிரந்தரமாக நீக்க முடியவில்லை.';
$lang['admin_users_remove_success'] = 'தேர்ந்தெடுக்கப்பட்ட பயனர்களின் அனைத்து தரவுகளும் வெற்றிகரமாக நீக்கப்பட்டன.';
$lang['admin_users_restore_confirm'] = 'தேர்ந்தெடுக்கப்பட்ட பயனர்களை நிச்சயமாக மீட்டெடுக்க விரும்புகிறீர்களா?';
$lang['admin_users_restore_error'] = 'தேர்ந்தெடுக்கப்பட்ட பயனர்களை மீட்டெடுக்க முடியவில்லை.';
$lang['admin_users_restore_success'] = 'தேர்ந்தெடுக்கப்பட்ட பயனர்கள் வெற்றிகரமாக மீட்டெடுக்கப்பட்டனர்.';
$lang['admin_users_search'] = 'பெயர், பயனர் பெயர் அல்லது மின்னஞ்சல் மூலம் தேடவும்...';
$lang['admin_users_unban_confirm'] = 'தேர்ந்தெடுக்கப்பட்ட பயனர்களின் தடையை நிச்சயமாக நீக்க விரும்புகிறீர்களா?';
$lang['admin_users_unban_error'] = 'தேர்ந்தெடுக்கப்பட்ட பயனர்களின் தடையை நீக்குவதில் தோல்வி.';
$lang['admin_users_unban_success'] = 'தேர்ந்தெடுக்கப்பட்ட பயனர்களின் தடை நீக்கப்பட்டது.';
$lang['admin_users_unlock_confirm'] = 'தேர்ந்தெடுக்கப்பட்ட பயனர்களை நிச்சயமாகத் திறக்க விரும்புகிறீர்களா?';
$lang['admin_users_unlock_error'] = 'தேர்ந்தெடுக்கப்பட்ட பயனர்களைத் திறக்க முடியவில்லை.';
$lang['admin_users_unlock_success'] = 'தேர்ந்தெடுக்கப்பட்ட பயனர்கள் வெற்றிகரமாகத் திறக்கப்பட்டனர்.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for the activity log section.
 */
$lang['admin_reports_clear'] = 'பதிவுகளை அழிக்கவும்';
$lang['admin_reports_clear_confirm'] = 'செயல்கள் பதிவை நிச்சயமாக அழிக்க விரும்புகிறீர்களா?';
$lang['admin_reports_clear_error'] = 'செயல்கள் பதிவை அழிக்க முடியவில்லை.';
$lang['admin_reports_clear_success'] = 'செயல்கள் பதிவு வெற்றிகரமாக அழிக்கப்பட்டது.';
$lang['admin_reports_latest_actions'] = 'சமீபத்திய செயல்கள்';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for the media library section.
 */
$lang['admin_media_delete_confirm'] = 'தேர்ந்தெடுக்கப்பட்ட கோப்புகளை நிச்சயமாக நீக்க விரும்புகிறீர்களா?';
$lang['admin_media_delete_error'] = 'கோப்புகளை நீக்க முடியவில்லை.';
$lang['admin_media_delete_success'] = 'கோப்புகள் வெற்றிகரமாக நீக்கப்பட்டன.';
$lang['admin_media_file_delete_error'] = 'கோப்பை நீக்க முடியவில்லை.';
$lang['admin_media_file_delete_success'] = 'கோப்பு வெற்றிகரமாக நீக்கப்பட்டது.';
$lang['admin_media_file_update_error'] = 'கோப்பைப் புதுப்பிக்க முடியவில்லை.';
$lang['admin_media_file_update_success'] = 'கோப்பு வெற்றிகரமாக புதுப்பிக்கப்பட்டது.';
$lang['admin_media_search'] = 'பெயர், விளக்கம் அல்லது கோப்பு பெயர் மூலம் தேடவும்...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{செயலில் உள்ள தொகுதிகள் இல்லை.} other{மொத்தம் <b>%s</b> இல் <b>#</b> தொகுதிகள் செயலில் உள்ளன.}';
$lang['admin_modules_add'] = 'தொகுதியைச் சேர்க்கவும்';
$lang['admin_modules_delete_confirm'] = 'தொகுதியை நிச்சயமாக நீக்க விரும்புகிறீர்களா: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'தொகுதியை நீக்க முடியவில்லை.';
$lang['admin_modules_delete_error_active'] = 'செயலில் உள்ள மாட்யூல்களை நீக்க முடியாது.';
$lang['admin_modules_delete_success'] = 'தொகுதி வெற்றிகரமாக நீக்கப்பட்டது.';
$lang['admin_modules_disable_all_confirm'] = 'அனைத்து தொகுதிக்கூறுகளையும் நிச்சயமாக முடக்க விரும்புகிறீர்களா?';
$lang['admin_modules_disable_all_error'] = 'அனைத்து தொகுதிக்கூறுகளையும் முடக்குவதில் தோல்வி.';
$lang['admin_modules_disable_all_success'] = 'அனைத்து தொகுதிகளும் வெற்றிகரமாக முடக்கப்பட்டன.';
$lang['admin_modules_disable_confirm'] = 'தொகுதியை முடக்க விரும்புகிறீர்களா: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'தொகுதியை செயலிழக்கச் செய்ய முடியவில்லை.';
$lang['admin_modules_disable_success'] = 'தொகுதி வெற்றிகரமாக செயலிழக்கப்பட்டது.';
$lang['admin_modules_enable_all_confirm'] = 'அனைத்து தொகுதிக்கூறுகளையும் நிச்சயமாக இயக்க விரும்புகிறீர்களா?';
$lang['admin_modules_enable_all_error'] = 'அனைத்து தொகுதிக்கூறுகளையும் இயக்க முடியவில்லை.';
$lang['admin_modules_enable_all_success'] = 'அனைத்து தொகுதிகளும் வெற்றிகரமாக இயக்கப்பட்டன.';
$lang['admin_modules_enable_confirm'] = 'தொகுதியை நிச்சயமாக இயக்க விரும்புகிறீர்களா: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'தொகுதியைச் செயல்படுத்துவதில் தோல்வி.';
$lang['admin_modules_enable_success'] = 'தொகுதி வெற்றிகரமாக செயல்படுத்தப்பட்டது.';
$lang['admin_modules_global'] = 'உலகளாவிய மாட்யூல் (பகிரப்பட்டது)';
$lang['admin_modules_install_confirm'] = 'மாட்யூலை நிறுவ விரும்புகிறீர்களா: <b>%s</b>?';
$lang['admin_modules_install_error'] = 'மாட்யூலை நிறுவுவதில் தோல்வி.';
$lang['admin_modules_install_success'] = 'மாட்யூல் வெற்றிகரமாக நிறுவப்பட்டது.';
$lang['admin_modules_install_tip'] = 'தொகுதிகள் உங்கள் தளத்தில் புதிய அம்சங்களையும் செயல்பாட்டையும் சேர்க்கின்றன. <a href="%s" target="_blank" rel="noopener">module directory</a> இல் கிடைக்கும் தொகுதிகளை உலாவவும் அல்லது ஒன்றை <b>.zip</b> தொகுப்பாக பதிவேற்றவும்.';
$lang['admin_modules_update_confirm'] = 'இந்த மாட்யூலைப் புதுப்பிக்க விரும்புகிறீர்களா?';
$lang['admin_modules_update_error'] = 'மாட்யூலைப் புதுப்பிப்பதில் தோல்வி.';
$lang['admin_modules_update_success'] = 'மாட்யூல் வெற்றிகரமாகப் புதுப்பிக்கப்பட்டது.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{செயலில் உள்ள செருகுநிரல்கள் இல்லை.} other{மொத்தம் <b>%s</b> இல் <b>#</b> செருகுநிரல்கள் செயலில் உள்ளன.}';
$lang['admin_plugins_add'] = 'செருகுநிரலைச் சேர்க்கவும்';
$lang['admin_plugins_delete_confirm'] = 'செருகுநிரலை நிச்சயமாக நீக்க விரும்புகிறீர்களா: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'செருகுநிரலை நீக்க முடியவில்லை.';
$lang['admin_plugins_delete_error_active'] = 'செயலில் உள்ள செருகுநிரல்களை நீக்க முடியாது.';
$lang['admin_plugins_delete_success'] = 'செருகுநிரல் வெற்றிகரமாக நீக்கப்பட்டது.';
$lang['admin_plugins_disable_all_confirm'] = 'எல்லா செருகுநிரல்களையும் நிச்சயமாக முடக்க விரும்புகிறீர்களா?';
$lang['admin_plugins_disable_all_error'] = 'அனைத்து செருகுநிரல்களையும் முடக்குவதில் தோல்வி.';
$lang['admin_plugins_disable_all_success'] = 'அனைத்து செருகுநிரல்களும் வெற்றிகரமாக முடக்கப்பட்டன.';
$lang['admin_plugins_disable_confirm'] = 'நீங்கள் நிச்சயமாக செருகுநிரலை முடக்க விரும்புகிறீர்களா: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'செருகுநிரலை செயலிழக்கச் செய்ய முடியவில்லை.';
$lang['admin_plugins_disable_success'] = 'செருகுநிரல் வெற்றிகரமாக செயலிழக்கப்பட்டது.';
$lang['admin_plugins_enable_all_confirm'] = 'எல்லா செருகுநிரல்களையும் நிச்சயமாக இயக்க விரும்புகிறீர்களா?';
$lang['admin_plugins_enable_all_error'] = 'அனைத்து செருகுநிரல்களையும் இயக்க முடியவில்லை.';
$lang['admin_plugins_enable_all_success'] = 'அனைத்து செருகுநிரல்களும் வெற்றிகரமாக இயக்கப்பட்டன.';
$lang['admin_plugins_enable_confirm'] = 'நீங்கள் நிச்சயமாக செருகுநிரலை இயக்க விரும்புகிறீர்களா: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'செருகுநிரலைச் செயல்படுத்துவதில் தோல்வி.';
$lang['admin_plugins_enable_success'] = 'செருகுநிரல் வெற்றிகரமாக செயல்படுத்தப்பட்டது.';
$lang['admin_plugins_global'] = 'உலகளாவிய செருகுநிரல் (பகிரப்பட்டது)';
$lang['admin_plugins_install_confirm'] = 'செருகுநிரலை நிறுவ விரும்புகிறீர்களா: <b>%s</b>?';
$lang['admin_plugins_install_error'] = 'செருகுநிரலை நிறுவுவதில் தோல்வி.';
$lang['admin_plugins_install_success'] = 'செருகுநிரல் வெற்றிகரமாக நிறுவப்பட்டது.';
$lang['admin_plugins_install_tip'] = 'கூடுதல் விருப்பங்கள் அல்லது ஒருங்கிணைப்புகளுடன் ஏற்கனவே உள்ள அம்சங்களை செருகுநிரல்கள் விரிவுபடுத்துகின்றன. <a href="%s" target="_blank" rel="noopener">plugin directory</a> இலிருந்து நிறுவவும் அல்லது <b>.zip</b> கோப்பைப் பதிவேற்றவும்.';
$lang['admin_plugins_update_confirm'] = 'இந்த செருகுநிரலைப் புதுப்பிக்க விரும்புகிறீர்களா?';
$lang['admin_plugins_update_error'] = 'செருகுநிரலைப் புதுப்பிப்பதில் தோல்வி.';
$lang['admin_plugins_update_success'] = 'செருகுநிரல் வெற்றிகரமாகப் புதுப்பிக்கப்பட்டது.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for the themes management section.
 */
$lang['admin_themes_add'] = 'தீம் சேர்க்கவும்';
$lang['admin_themes_delete_confirm'] = 'தீம்: <b>%s</b> ஐ நிச்சயமாக நீக்க விரும்புகிறீர்களா?';
$lang['admin_themes_delete_error'] = 'தீம் நீக்க முடியவில்லை.';
$lang['admin_themes_delete_error_active'] = 'நீங்கள் தற்போது செயலில் உள்ள தீம் நீக்க முடியாது.';
$lang['admin_themes_delete_success'] = 'தீம் வெற்றிகரமாக நீக்கப்பட்டது.';
$lang['admin_themes_disable_confirm'] = '<b>%s</b> என்ற தீமினை நிச்சயமாக செயலிழக்கச் செய்ய விரும்புகிறீர்களா?';
$lang['admin_themes_disable_error'] = 'தீம் செயலிழக்க முடியவில்லை.';
$lang['admin_themes_disable_error_active'] = 'செயலில் உள்ள தீமை முடக்க முடியாது.';
$lang['admin_themes_disable_success'] = 'தீம் வெற்றிகரமாக செயலிழக்கப்பட்டது.';
$lang['admin_themes_enable_confirm'] = 'தீம்: <b>%s</b> ஐச் செயல்படுத்த விரும்புகிறீர்களா?';
$lang['admin_themes_enable_error'] = 'தீம் செயல்படுத்த முடியவில்லை.';
$lang['admin_themes_enable_success'] = 'தீம் வெற்றிகரமாக செயல்படுத்தப்பட்டது.';
$lang['admin_themes_install_confirm'] = 'தீமை நிறுவ விரும்புகிறீர்களா: <b>%s</b>?';
$lang['admin_themes_install_error'] = 'தீமை நிறுவுவதில் தோல்வி.';
$lang['admin_themes_install_success'] = 'தீம் வெற்றிகரமாக நிறுவப்பட்டது.';
$lang['admin_themes_install_tip'] = 'தீம்கள் உங்கள் தளத்தின் தோற்றத்தையும் தளவமைப்பையும் மாற்றும். <a href="%s" target="_blank" rel="noopener">theme library</a> இலிருந்து தேர்வு செய்யவும் அல்லது உங்கள் சொந்தத்தை நிறுவ <b>.zip</b> கோப்பைப் பதிவேற்றவும்.';
$lang['admin_themes_none_tip'] = 'இந்த பயன்பாடு தீம் இன்றி இயங்குகிறது. பொதுமுக இடைமுகத்தைத் தனிப்பயனாக்க ஒரு தீமைக் நிறுவவும்.';
$lang['admin_themes_update_confirm'] = 'இந்த தீமைப் புதுப்பிக்க விரும்புகிறீர்களா?';
$lang['admin_themes_update_error'] = 'தீமைப் புதுப்பிப்பதில் தோல்வி.';
$lang['admin_themes_update_success'] = 'தீம் வெற்றிகரமாகப் புதுப்பிக்கப்பட்டது.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for the menu locations section.
 */
$lang['admin_menus'] = 'மெனுக்கள்';
$lang['admin_menus_assign_error'] = 'மெனு இருப்பிடங்களைப் புதுப்பிக்க முடியவில்லை.';
$lang['admin_menus_assign_success'] = 'மெனு இருப்பிடங்கள் வெற்றிகரமாக புதுப்பிக்கப்பட்டன.';
$lang['admin_menus_header'] = '<b>%s</b> மெனு இருப்பிடங்கள் உள்ளன.';
$lang['admin_menus_location'] = 'இடம்';
$lang['admin_menus_locations'] = 'மெனு இடங்கள்';
$lang['admin_menus_manage'] = 'மெனுக்களை நிர்வகிக்கவும்';
$lang['admin_menus_menu'] = 'ஒதுக்கப்பட்ட மெனு';
$lang['admin_menus_none'] = '&#151; எதுவுமில்லை &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for the languages management section.
 */
$lang['admin_languages_add'] = 'மொழியைச் சேர்க்கவும்';
$lang['admin_languages_default_confirm'] = 'இந்த மொழியை நிச்சயமாக தளத்தின் இயல்பு மொழியாக மாற்ற விரும்புகிறீர்களா?';
$lang['admin_languages_default_error'] = 'இயல்பு மொழியை மாற்ற முடியவில்லை.';
$lang['admin_languages_default_error_nochange'] = 'இந்த மொழி ஏற்கனவே இயல்புநிலை மொழியாகும்.';
$lang['admin_languages_default_success'] = 'இயல்பு மொழி வெற்றிகரமாக மாற்றப்பட்டது.';
$lang['admin_languages_delete_confirm'] = 'மொழியை நீக்க விரும்புகிறீர்களா: <b>%s</b>?';
$lang['admin_languages_delete_error'] = 'மொழியை நீக்குவதில் தோல்வி.';
$lang['admin_languages_delete_error_active'] = 'செயலில் உள்ள மொழிகளை நீக்க முடியாது.';
$lang['admin_languages_delete_error_default'] = 'இயல்புநிலை மொழியை நீக்க முடியாது.';
$lang['admin_languages_delete_success'] = 'மொழி வெற்றிகரமாக நீக்கப்பட்டது.';
$lang['admin_languages_disable_all_confirm'] = 'எல்லா மொழிகளையும் நிச்சயமாக முடக்க விரும்புகிறீர்களா?';
$lang['admin_languages_disable_all_error'] = 'அனைத்து மொழிகளையும் முடக்க முடியவில்லை.';
$lang['admin_languages_disable_all_success'] = 'அனைத்து மொழிகளும் வெற்றிகரமாக முடக்கப்பட்டன.';
$lang['admin_languages_disable_confirm'] = 'நீங்கள் நிச்சயமாக மொழியை முடக்க விரும்புகிறீர்களா: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'மொழியை முடக்க முடியவில்லை.';
$lang['admin_languages_disable_error_default'] = 'இயல்பு மொழியை முடக்க முடியாது.';
$lang['admin_languages_disable_error_nochange'] = 'இந்த மொழி ஏற்கனவே முடக்கப்பட்டுள்ளது.';
$lang['admin_languages_disable_success'] = 'மொழி வெற்றிகரமாக முடக்கப்பட்டது.';
$lang['admin_languages_enable_all_confirm'] = 'நிச்சயமாக எல்லா மொழிகளையும் இயக்க விரும்புகிறீர்களா?';
$lang['admin_languages_enable_all_error'] = 'அனைத்து மொழிகளையும் இயக்க முடியவில்லை.';
$lang['admin_languages_enable_all_success'] = 'அனைத்து மொழிகளும் வெற்றிகரமாக இயக்கப்பட்டன.';
$lang['admin_languages_enable_confirm'] = 'நீங்கள் நிச்சயமாக மொழியை இயக்க விரும்புகிறீர்களா: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'மொழியை இயக்க முடியவில்லை.';
$lang['admin_languages_enable_error_nochange'] = 'இந்த மொழி ஏற்கனவே இயக்கப்பட்டது.';
$lang['admin_languages_enable_success'] = 'மொழி வெற்றிகரமாக இயக்கப்பட்டது.';
$lang['admin_languages_install_confirm'] = 'மொழியை நிறுவ விரும்புகிறீர்களா: <b>%s</b>?';
$lang['admin_languages_install_error'] = 'மொழியை நிறுவுவதில் தோல்வி.';
$lang['admin_languages_install_success'] = 'மொழி வெற்றிகரமாக நிறுவப்பட்டது.';
$lang['admin_languages_install_tip'] = 'மொழிகள் உங்கள் தளத்தின் இடைமுகம் மற்றும் உள்ளடக்கத்திற்கு மொழிபெயர்ப்புகளைச் சேர்க்கின்றன. கிடைக்கும் மொழிகளை <a href="%s" target="_blank" rel="noopener">மொழி அடைவில்</a> பார்க்கவும் அல்லது உங்கள் சொந்த மொழியை நிறுவ <b>.zip</b> தொகுப்பைப் பதிவேற்றவும்.';
$lang['admin_languages_tip'] = 'தளத்தின் இயல்பு மொழியை இயக்கவும், முடக்கவும் மற்றும் அமைக்கவும். தள பார்வையாளர்களுக்கு இயக்கப்பட்ட மொழிகள் கிடைக்கின்றன.';
$lang['admin_languages_update_confirm'] = 'இந்த மொழியைப் புதுப்பிக்க விரும்புகிறீர்களா?';
$lang['admin_languages_update_error'] = 'மொழியைப் புதுப்பிப்பதில் தோல்வி.';
$lang['admin_languages_update_success'] = 'மொழி வெற்றிகரமாகப் புதுப்பிக்கப்பட்டது.';

/**
 * ---------------------------------------------------------------
 * Package Driver & Installation Messages
 * ---------------------------------------------------------------
 * Language lines for package installation, download, backup, and validation.
 */
$lang['package_already_exists'] = 'தொகுப்பு ஏற்கனவே உள்ளது.';
$lang['package_archive_download_failed'] = 'தொகுப்பு காப்பகத்தைப் பதிவிறக்குவதில் தோல்வி.';
$lang['package_backup_create_error'] = 'தொகுப்பு காப்புப்பிரதியை உருவாக்குவதில் தோல்வி.';
$lang['package_backup_dir_failed'] = 'காப்புப்பிரதி அடைவை (%s) உருவாக்குவதில் தோல்வி';
$lang['package_backup_missing'] = 'காப்புப்பிரதி கோப்பு (backup file) இல்லை.';
$lang['package_backup_path_error'] = 'காப்புப்பிரதி கோப்பு பாதையை கண்டறிய முடியவில்லை.';
$lang['package_backup_request_invalid'] = 'தவறான காப்புப்பிரதி கோரிக்கை.';
$lang['package_backup_restore_error'] = 'தொகுப்பு காப்புப்பிரதியை மீட்டமைப்பதில் தோல்வி.';
$lang['package_catalog_type_unknown'] = 'அறியப்படாத பட்டியல் (catalog) வகை.';
$lang['package_checksum_error'] = 'தொகுப்பு சோதனைத்தொகை (checksum) சரிபார்ப்பு தோல்வியடைந்தது.';
$lang['package_copy_files_error'] = 'தொகுப்பு கோப்புகளை இலக்குக்கு நகலெடுப்பதில் தோல்வி.';
$lang['package_copy_updates_error'] = 'புதுப்பிப்பு கோப்புகளை இலக்குக்கு நகலெடுப்பதில் தோல்வி.';
$lang['package_dest_dir_failed'] = 'இலக்கு அடைவை (%s) உருவாக்குவதில் தோல்வி';
$lang['package_destination_error'] = 'தொகுப்பு இலக்கை தீர்மானிக்க முடியவில்லை.';
$lang['package_download_dir_failed'] = 'பதிவிறக்க அடைவை (%s) உருவாக்குவதில் தோல்வி';
$lang['package_download_empty'] = 'தொகுப்பு பதிவிறக்கம் வெற்று பதிலை வழங்கியது.';
$lang['package_download_request_invalid'] = 'தவறான தொகுப்பு பதிவிறக்க கோரிக்கை.';
$lang['package_extract_failed'] = 'ZIP (%s) கோப்பைப் பிரித்தெடுப்பதில் தோல்வி';
$lang['package_invalid_lang_files'] = 'தவறான மொழி — தேவையான பயன்பாட்டு மொழி கோப்புகள் இல்லை.';
$lang['package_invalid_lang_structure'] = 'தவறான மொழி — admin மற்றும்/அல்லது ci3 கோப்பகங்கள் இல்லை.';
$lang['package_invalid_missing_info'] = 'செல்லாதது %s: "info.php" காணவில்லை.';
$lang['package_invalid_module_structure'] = 'தவறான தொகுதி (module) — தேவையான config மற்றும்/அல்லது controllers கோப்பகங்கள் இல்லை.';
$lang['package_invalid_plugin_boot'] = 'தவறான செருகுநிரல் (plugin) — "boot.php" இல்லை.';
$lang['package_invalid_plugin_contents'] = 'தவறான செருகுநிரல் (plugin) — செருகுநிரல்களில் கட்டுப்பாட்டாளர்கள் (controllers) அல்லது காட்சிகள் (views) இருக்கக்கூடாது.';
$lang['package_invalid_theme_boot'] = 'தவறான தீம் — "boot.php" இல்லை.';
$lang['package_invalid_theme_views'] = 'தவறான தீம் — views கோப்பகம் இல்லை.';
$lang['package_no_root_dir'] = 'தொகுப்பில் ரூட் கோப்பகம் (root directory) இல்லை.';
$lang['package_not_downloadable'] = 'இந்தத் தொகுப்பு பொதுவில் பதிவிறக்கம் செய்யத்தக்கதல்ல.';
$lang['package_not_in_registry'] = 'பொதுப் பதிவேட்டில் (public registry) இந்தத் தொகுப்பு கிடைக்கவில்லை.';
$lang['package_request_invalid'] = 'தவறான தொகுப்பு கோரிக்கை.';
$lang['package_rollback_request_invalid'] = 'தவறான மீளமைப்புக் (rollback) கோரிக்கை.';
$lang['package_root_mismatch'] = 'தொகுப்பு காப்பகத்தின் மூலமானது %s உடன் பொருந்தவில்லை';
$lang['package_single_root_required'] = 'தொகுப்பில் சரியாக ஒரு ரூட் கோப்பகம் இருக்க வேண்டும்.';
$lang['package_source_error'] = 'தொகுப்பு மூலத்தை தீர்மானிக்க முடியவில்லை.';
$lang['package_system_core_restricted'] = 'கட்டமைப்பு கூறுகளை தொகுப்புகளாக நிறுவ முடியாது.';
$lang['package_temp_dir_failed'] = 'தற்காலிக அடைவை (%s) உருவாக்குவதில் தோல்வி';
$lang['package_type_unknown'] = 'அறியப்படாத தொகுப்பு வகை.';
$lang['package_update_request_invalid'] = 'தவறான தொகுப்பு புதுப்பிப்பு கோரிக்கை.';
$lang['package_update_root_mismatch'] = 'புதுப்பிப்பு காப்பகத்தின் மூலமானது %s உடன் பொருந்தவில்லை.';
$lang['package_upload_dir_failed'] = 'பதிவேற்ற அடைவை (%s) உருவாக்குவதில் தோல்வி';
$lang['package_url_invalid'] = 'தவறான தொகுப்பு விநியோக URL.';
$lang['package_write_failed'] = '%s இல் தொகுப்பை எழுதுவதில் தோல்வி';
$lang['package_zip_not_found'] = 'தொகுப்பு ZIP இல்லை: %s';

/**
 * ---------------------------------------------------------------
 * Updates Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'புதிய புதுப்பிப்புகள் உள்ளன!';
$lang['update_backup_error'] = 'ஏற்கனவே உள்ள தொகுப்பின் காப்புப்பிரதியை உருவாக்க முடியவில்லை. புதுப்பிப்பு நிறுத்தப்பட்டது.';
$lang['update_check_disabled'] = 'தானியங்கி புதுப்பித்தல் சோதனைகள் முடக்கப்பட்டுள்ளன. புதுப்பிப்புகளைப் பார்க்க அவற்றை இயக்கவும்.';
$lang['update_check_error'] = 'இந்த நேரத்தில் புதுப்பிப்பு சரிபார்ப்பை இயக்க முடியவில்லை.';
$lang['update_check_success'] = 'புதுப்பிப்பு சரிபார்ப்பு வெற்றிகரமாக முடிந்தது.';
$lang['update_install_error'] = 'தொகுப்பை நிறுவ முடியவில்லை. தற்போதைய பதிப்பு வைக்கப்பட்டுள்ளது.';
$lang['update_install_success'] = 'தொகுப்பு வெற்றிகரமாக சமீபத்திய பதிப்பிற்கு புதுப்பிக்கப்பட்டது.';
$lang['update_interval_3days'] = 'ஒவ்வொரு 3 நாட்களுக்கும்';
$lang['update_interval_biweekly'] = 'ஒவ்வொரு 2 வாரங்களுக்கும்';
$lang['update_interval_daily'] = 'ஒவ்வொரு நாளும்';
$lang['update_interval_monthly'] = 'மாதம் ஒருமுறை';
$lang['update_interval_weekly'] = 'வாரம் ஒருமுறை';
$lang['update_not_available'] = 'உங்கள் இணையதளம் புதுப்பித்த நிலையில் உள்ளது.';
$lang['update_rollback_confirm'] = 'முந்தைய பதிப்பை மீட்டெடுக்க விரும்புகிறீர்களா?';
$lang['update_rollback_error'] = 'முந்தைய பதிப்பை மீட்டெடுக்க முடியவில்லை. கைமுறையான தலையீடு தேவைப்படலாம்.';
$lang['update_rollback_success'] = 'முந்தைய பதிப்பு வெற்றிகரமாக மீட்டெடுக்கப்பட்டது.';
$lang['updates_available'] = 'கிடைக்கும் புதுப்பிப்புகள்';
$lang['updates_check_now'] = 'இப்போது சரிபார்க்கவும்';
$lang['updates_check_now_confirm'] = 'இப்போது புதுப்பிப்புகளைச் சரிபார்க்க விரும்புகிறீர்களா?';
$lang['updates_current_version'] = 'தற்போதைய பதிப்பு';
$lang['updates_enable'] = 'புதுப்பிப்புகளை இயக்கு';
$lang['updates_last_check'] = 'கடைசி சரிபார்ப்பு: %s';
$lang['updates_latest_version'] = 'சமீபத்திய பதிப்பு';
$lang['updates_next_check'] = 'அடுத்த திட்டமிடப்பட்ட காசோலை: %s';
$lang['updates_previous_version'] = 'முந்தைய பதிப்பு';
$lang['updates_recent'] = 'சமீபத்தில் புதுப்பிக்கப்பட்டது';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'குறிப்பிட்ட IP முகவரியைத் தடுப்பதில் தோல்வி.';
$lang['admin_firewall_ban_success'] = 'ஐபி முகவரி வெற்றிகரமாக தடுக்கப்பட்டது.';
$lang['admin_firewall_block_ip'] = 'ஐபி முகவரியைத் தடு';
$lang['admin_firewall_delete_confirm'] = 'தேர்ந்தெடுக்கப்பட்ட IP முகவரிகளை கண்டிப்பாக தடைநீக்க விரும்புகிறீர்களா?';
$lang['admin_firewall_delete_error'] = 'தேர்ந்தெடுக்கப்பட்ட IP முகவரிகளைத் தடுப்பதில் தோல்வி.';
$lang['admin_firewall_delete_success'] = 'தேர்ந்தெடுக்கப்பட்ட IP முகவரிகள் வெற்றிகரமாக தடைநீக்கப்பட்டன.';
$lang['admin_firewall_duration'] = 'தடை காலம்';
$lang['admin_firewall_permanent'] = 'நிரந்தரமானது';
$lang['admin_firewall_reason'] = 'தடை காரணம்';
$lang['admin_firewall_tip'] = 'தொடர்ச்சியான மீறல்கள் அல்லது சந்தேகத்திற்கிடமான செயல்பாடு காரணமாக ஃபயர்வால் தடுக்கப்பட்ட ஐபி முகவரிகளைப் பார்க்கலாம் மற்றும் நிர்வகிக்கலாம்.';

// Settings
$lang['404_ban_duration'] = '404 தடை காலம்';
$lang['404_threshold'] = '404 வேலைநிறுத்த வரம்பு';
$lang['uri_ban_duration'] = 'URI தடை காலம்';
$lang['uri_strike_threshold'] = 'URI வேலைநிறுத்த வரம்பு';
