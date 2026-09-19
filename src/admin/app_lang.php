<?php

/**
 * ------------------------------------------------------------------------
 * CiSkeleton Admin Language File
 * ------------------------------------------------------------------------
 * This file contains all language lines used in CSK admin dashboard.
 * Each section is separated by comments for easier navigation and maintenance.
 */

/**
 * ------------------------------------------------------------------------
 * Core Dashboard Section
 * ------------------------------------------------------------------------
 * General terms and messages used across the admin dashboard.
 */
$lang['admin_components'] = 'Komponente';
$lang['admin_content'] = 'Sadržaj';
$lang['admin_database_backup'] = 'Backupi baze podataka';
$lang['admin_extensions'] = 'Proširenja';
$lang['admin_firewall'] = 'Vatrozid';
$lang['admin_help'] = 'Pomoć';
$lang['admin_languages'] = 'Jezici';
$lang['admin_logs'] = 'Zapisi sustava';
$lang['admin_media'] = 'Mediateka';
$lang['admin_modules'] = 'Moduli';
$lang['admin_plugins'] = 'Dodaci';
$lang['admin_reports'] = 'Zapis aktivnosti';
$lang['admin_settings'] = 'Postavke sustava';
$lang['admin_sysinfo'] = 'Informacije sustava';
$lang['admin_system'] = 'Sustav';
$lang['admin_system_firewall'] = 'Sustavni vatrozid';
$lang['admin_themes'] = 'Teme';
$lang['admin_updates'] = 'Ažuriranja sustava';
$lang['admin_users'] = 'Korisnici';
$lang['admin_view_site'] = 'Pogledaj stranicu';
$lang['per_page'] = 'Po stranici';

// Generic Messages
$lang['admin_footer_thankyou'] = 'Hvala vam što ste stvorili s <a href="%s" target="_blank">%s</a>.';
$lang['admin_items_active_count'] = '=0{Nema aktivnih stavki.} other{<b>#</b> od <b>%s</b> stavki je aktivno.}';

/**
 * ---------------------------------------------------------------
 * Extension Install Section
 * ---------------------------------------------------------------
 * Language lines for the extension installation section.
 */
$lang['admin_install'] = 'Instaliraj';
$lang['admin_install_error'] = 'Instalacija paketa nije uspjela.';
$lang['admin_install_error_com'] = 'Instalacija nije uspjela: %s';
$lang['admin_install_location_app'] = 'Samo ova aplikacija';
$lang['admin_install_location_core'] = 'Sve aplikacije';
$lang['admin_install_location_select'] = '&#151; Odaberite lokaciju &#151;';
$lang['admin_install_success'] = 'Paket je uspješno instaliran.';
$lang['admin_install_upload'] = 'Prenesi';
$lang['admin_install_upload_error'] = 'Prijenos paketa nije uspio.';
$lang['admin_install_upload_success'] = 'Paket je uspješno prenesen.';
$lang['admin_install_upload_tip'] = 'Instalirajte paket tako da ovdje prenesete njegovu <b>.zip</b> datoteku.';

/**
 * ---------------------------------------------------------------
 * Database & Backup Section
 * ---------------------------------------------------------------
 * Language lines for database management section.
 */
$lang['admin_database_backup_clean_error'] = 'Nije moguće očistiti stare backup datoteke.';
$lang['admin_database_backup_clean_success'] = '%d backup datoteka izbrisano. %d prostora na disku oslobođeno.';
$lang['admin_database_backup_create'] = 'Stvori backup';
$lang['admin_database_backup_create_confirm'] = 'Jeste li sigurni da želite sada stvoriti backup?';
$lang['admin_database_backup_create_error'] = 'Nije moguće stvoriti backup datoteku. Provjerite je li mapa <b>%s</b> zapisiva.';
$lang['admin_database_backup_create_success'] = 'Backup datoteka baze podataka <b>%s</b> je uspješno stvorena.';
$lang['admin_database_backup_delete_confirm'] = 'Jeste li sigurni da želite izbrisati ove backup datoteke?';
$lang['admin_database_backup_delete_error'] = 'Nije moguće izbrisati odabrane backup datoteke.';
$lang['admin_database_backup_delete_success'] = 'Backup datoteke su uspješno izbrisane.';
$lang['admin_database_backup_download_error'] = 'Nije moguće preuzeti odabranu backup datoteku.';
$lang['admin_database_backup_download_success'] = 'Backup datoteka je uspješno preuzeta.';
$lang['admin_database_backup_lock_confirm'] = 'Jeste li sigurni da želite zaključati ove backup datoteke?';
$lang['admin_database_backup_lock_error'] = 'Nije moguće zaključati odabrane backup datoteke.';
$lang['admin_database_backup_lock_success'] = 'Backup datoteke su uspješno zaključane.';
$lang['admin_database_backup_locked_error'] = 'Nije moguće izbrisati zaključane backup datoteke.';
$lang['admin_database_backup_missing_error'] = 'Backup datoteka nije mogla biti pronađena.';
$lang['admin_database_backup_unlock_confirm'] = 'Jeste li sigurni da želite otključati ove backup datoteke?';
$lang['admin_database_backup_unlock_error'] = 'Nije moguće otključati odabrane backup datoteke.';
$lang['admin_database_backup_unlock_success'] = 'Backup datoteke su uspješno otključane.';
$lang['admin_database_prune'] = 'Obreži';
$lang['admin_database_prune_confirm'] = 'Jeste li sigurni da želite obrezati bazu podataka? Backup će biti stvoren prije izvršenja.';
$lang['admin_database_prune_error'] = 'Nije moguće obrezati bazu podataka.';
$lang['admin_database_prune_next'] = 'Sljedeće obrezivanje: <b>%s</b>';
$lang['admin_database_prune_success'] = 'Baza podataka je uspješno obrezana.';

/**
 * ---------------------------------------------------------------
 * System Logs Section
 * ---------------------------------------------------------------
 * Language lines for system logs section.
 */
$lang['admin_logs_delete'] = 'Izbriši zapise';
$lang['admin_logs_delete_confirm'] = 'Jeste li sigurni da želite izbrisati odabrane datoteke zapisa?';
$lang['admin_logs_delete_error'] = 'Nije moguće izbrisati datoteke zapisa.';
$lang['admin_logs_delete_success'] = 'Datoteke zapisa su uspješno izbrisane.';
$lang['admin_logs_error_disabled'] = 'Zapisivanje trenutno nije omogućeno.';
$lang['admin_logs_error_empty'] = 'Nema pronađenih zapisa.';
$lang['admin_logs_error_missing'] = 'Ili datoteka zapisa nije mogla biti locirana, ili je bila prazna.';
$lang['admin_logs_tip'] = 'Zapisivanje može brzo stvoriti vrlo velike datoteke. Za aktivne stranice, razmislite o brisanju starih.';

/**
 * ---------------------------------------------------------------
 * Emails Section
 * ---------------------------------------------------------------
 * Language lines for mail queue section.
 */
$lang['admin_emails_delete_confirm'] = 'Jeste li sigurni da želite izbrisati odabrane e-mailove?';
$lang['admin_emails_delete_error'] = 'Nije moguće izbrisati odabrane e-mailove.';
$lang['admin_emails_delete_success'] = 'Odabrani e-mailovi su uspješno izbrisani.';
$lang['admin_emails_email_from'] = 'Poslano od';
$lang['admin_emails_mail_queue'] = 'Red e-mailova';
$lang['admin_emails_mailer'] = 'Masovni e-mail';
$lang['admin_emails_search'] = 'Pretraži e-poštu prema predmetu ili sadržaju...';
$lang['admin_emails_send_error'] = 'Neuspjelo stavljanje e-maila u red. Molimo pokušajte ponovno.';
$lang['admin_emails_send_none'] = 'Nema korisnika koji odgovaraju vašem kriteriju odabira.';
$lang['admin_emails_send_success'] = 'E-mail je stavljen u red i bit će poslan uskoro.';
$lang['admin_emails_send_to_banned'] = 'Pošalji zabranjenim korisnicima.';
$lang['admin_emails_send_to_deleted'] = 'Pošalji izbrisanim korisnicima.';
$lang['admin_emails_send_to_disabled'] = 'Pošalji neaktivnim korisnicima.';

/**
 * ---------------------------------------------------------------
 * Users Section
 * ---------------------------------------------------------------
 * Language lines for users management section.
 */
$lang['admin_users_add'] = 'Dodaj korisnika';
$lang['admin_users_all_users'] = 'Svi korisnici';
$lang['admin_users_ban_confirm'] = 'Jeste li sigurni da želite zabraniti pristup odabranim korisnicima?';
$lang['admin_users_ban_error'] = 'Nije moguće zabraniti pristup odabranim korisnicima.';
$lang['admin_users_ban_success'] = 'Odabranim korisnicima uspješno je zabranjen pristup.';
$lang['admin_users_delete_confirm'] = 'Jeste li sigurni da želite izbrisati odabrane korisnike?';
$lang['admin_users_delete_error'] = 'Nije moguće izbrisati odabrane korisnike.';
$lang['admin_users_delete_success'] = 'Odabrani korisnici uspješno su izbrisani.';
$lang['admin_users_disable_confirm'] = 'Jeste li sigurni da želite onemogućiti odabrane korisnike?';
$lang['admin_users_disable_error'] = 'Nije moguće onemogućiti odabrane korisnike.';
$lang['admin_users_disable_success'] = 'Odabrani korisnici uspješno su onemogućeni.';
$lang['admin_users_edit'] = 'Uredi korisnika';
$lang['admin_users_edit_error'] = 'Nije moguće ažurirati korisnika.';
$lang['admin_users_edit_success'] = 'Korisnik je uspješno ažuriran.';
$lang['admin_users_enable_confirm'] = 'Jeste li sigurni da želite omogućiti odabrane korisnike?';
$lang['admin_users_enable_error'] = 'Nije moguće omogućiti odabrane korisnike.';
$lang['admin_users_enable_success'] = 'Odabrani korisnici uspješno su omogućeni.';
$lang['admin_users_groups'] = 'Grupe';
$lang['admin_users_lock_confirm'] = 'Jeste li sigurni da želite zaključati odabrane korisnike?';
$lang['admin_users_lock_error'] = 'Nije moguće zaključati odabrane korisnike.';
$lang['admin_users_lock_success'] = 'Odabrani korisnici su uspješno zaključani.';
$lang['admin_users_logged'] = 'Prijavljeni korisnici';
$lang['admin_users_manage'] = 'Upravljaj korisnicima';
$lang['admin_users_remove_confirm'] = 'Jeste li sigurni da želite trajno izbrisati odabrane korisnike i sve njihove podatke?';
$lang['admin_users_remove_error'] = 'Nije moguće trajno izbrisati odabrane korisnike i sve njihove podatke.';
$lang['admin_users_remove_success'] = 'Odabrani korisnici i svi njihovi podaci uspješno su izbrisani.';
$lang['admin_users_restore_confirm'] = 'Jeste li sigurni da želite vratiti odabrane korisnike?';
$lang['admin_users_restore_error'] = 'Nije moguće vratiti odabrane korisnike.';
$lang['admin_users_restore_success'] = 'Odabrani korisnici uspješno su vraćeni.';
$lang['admin_users_search'] = 'Traži po imenu, korisničkom imenu ili e-mailu...';
$lang['admin_users_unban_confirm'] = 'Jeste li sigurni da želite ukloniti zabranu pristupa odabranim korisnicima?';
$lang['admin_users_unban_error'] = 'Nije moguće ukloniti zabranu pristupa odabranim korisnicima.';
$lang['admin_users_unban_success'] = 'Zabrana pristupa odabranim korisnicima uspješno je uklonjena.';
$lang['admin_users_unlock_confirm'] = 'Jeste li sigurni da želite otključati odabrane korisnike?';
$lang['admin_users_unlock_error'] = 'Nije moguće otključati odabrane korisnike.';
$lang['admin_users_unlock_success'] = 'Odabrani korisnici su uspješno otključani.';

/**
 * ---------------------------------------------------------------
 * Reports Section
 * ---------------------------------------------------------------
 * Language lines for activity log section.
 */
$lang['admin_reports_clear'] = 'Očisti zapise';
$lang['admin_reports_clear_confirm'] = 'Jeste li sigurni da želite očistiti zapis akcija?';
$lang['admin_reports_clear_error'] = 'Nije moguće očistiti zapis akcija.';
$lang['admin_reports_clear_success'] = 'Zapis akcija je uspješno očišćen.';
$lang['admin_reports_latest_actions'] = 'Najnovije akcije';

/**
 * ---------------------------------------------------------------
 * Media Library Section
 * ---------------------------------------------------------------
 * Language lines for media library section.
 */
$lang['admin_media_delete_confirm'] = 'Jeste li sigurni da želite izbrisati odabrane datoteke?';
$lang['admin_media_delete_error'] = 'Nije moguće izbrisati datoteke.';
$lang['admin_media_delete_success'] = 'Datoteke su uspješno izbrisane.';
$lang['admin_media_file_delete_error'] = 'Nije moguće izbrisati datoteku.';
$lang['admin_media_file_delete_success'] = 'Datoteka je uspješno izbrisana.';
$lang['admin_media_file_update_error'] = 'Nije moguće ažurirati datoteku.';
$lang['admin_media_file_update_success'] = 'Datoteka je uspješno ažurirana.';
$lang['admin_media_search'] = 'Pretraži po imenu, opisu ili nazivu datoteke...';

/**
 * ---------------------------------------------------------------
 * Modules Section
 * ---------------------------------------------------------------
 * Language lines for the modules management section.
 */
$lang['admin_modules_active_count'] = '=0{Nema aktivnih modula.} other{<b>#</b> od <b>%s</b> modula je aktivno.}';
$lang['admin_modules_add'] = 'Add Module';
$lang['admin_modules_delete_confirm'] = 'Jeste li sigurni da želite izbrisati modul: <b>%s</b>?';
$lang['admin_modules_delete_error'] = 'Nije moguće izbrisati modul.';
$lang['admin_modules_delete_success'] = 'Modul je uspješno izbrisan.';
$lang['admin_modules_disable_all_confirm'] = 'Jeste li sigurni da želite onemogućiti sve module?';
$lang['admin_modules_disable_all_error'] = 'Nije moguće onemogućiti sve module.';
$lang['admin_modules_disable_all_success'] = 'Svi moduli su uspješno onemogućeni.';
$lang['admin_modules_disable_confirm'] = 'Jeste li sigurni da želite onemogućiti modul: <b>%s</b>?';
$lang['admin_modules_disable_error'] = 'Nije moguće deaktivirati modul.';
$lang['admin_modules_disable_success'] = 'Modul uspješno deaktiviran.';
$lang['admin_modules_enable_all_confirm'] = 'Jeste li sigurni da želite omogućiti sve module?';
$lang['admin_modules_enable_all_error'] = 'Nije moguće omogućiti sve module.';
$lang['admin_modules_enable_all_success'] = 'Svi moduli su uspješno omogućeni.';
$lang['admin_modules_enable_confirm'] = 'Jeste li sigurni da želite omogućiti modul: <b>%s</b>?';
$lang['admin_modules_enable_error'] = 'Nije moguće aktivirati modul.';
$lang['admin_modules_enable_success'] = 'Modul uspješno aktiviran.';
$lang['admin_modules_install_tip'] = 'Moduli dodaju nove značajke i funkcionalnosti vašoj web-lokaciji. Pregledajte dostupne module u <a href="%s" target="_blank" rel="noopener">direktoriju modula</a> ili prenesite jedan kao <b>.zip</b> paket.';

/**
 * ---------------------------------------------------------------
 * Plugins Section
 * ---------------------------------------------------------------
 * Language lines for the plugins management section.
 */
$lang['admin_plugins_active_count'] = '=0{Nema aktivnih dodataka.} other{<b>#</b> od <b>%s</b> dodataka je aktivno.}';
$lang['admin_plugins_add'] = 'Dodaj dodatak';
$lang['admin_plugins_delete_confirm'] = 'Jeste li sigurni da želite izbrisati dodatak: <b>%s</b>?';
$lang['admin_plugins_delete_error'] = 'Nije moguće izbrisati dodatak.';
$lang['admin_plugins_delete_success'] = 'Dodatak je uspješno izbrisan.';
$lang['admin_plugins_disable_all_confirm'] = 'Jeste li sigurni da želite onemogućiti sve dodaci?';
$lang['admin_plugins_disable_all_error'] = 'Nije moguće onemogućiti sve dodaci.';
$lang['admin_plugins_disable_all_success'] = 'Svi dodaci su uspješno onemogućeni.';
$lang['admin_plugins_disable_confirm'] = 'Jeste li sigurni da želite onemogućiti dodatak: <b>%s</b>?';
$lang['admin_plugins_disable_error'] = 'Nije moguće deaktivirati dodatak.';
$lang['admin_plugins_disable_success'] = 'Dodatak je uspješno deaktiviran.';
$lang['admin_plugins_enable_all_confirm'] = 'Jeste li sigurni da želite omogućiti sve dodaci?';
$lang['admin_plugins_enable_all_error'] = 'Nije moguće omogućiti sve dodaci.';
$lang['admin_plugins_enable_all_success'] = 'Svi dodataki su uspješno omogućeni.';
$lang['admin_plugins_enable_confirm'] = 'Jeste li sigurni da želite omogućiti dodatak: <b>%s</b>?';
$lang['admin_plugins_enable_error'] = 'Nije moguće aktivirati dodatak.';
$lang['admin_plugins_enable_success'] = 'Dodatak je uspješno aktiviran.';
$lang['admin_plugins_install_tip'] = 'Dodatak proširuju postojeće značajke s dodatnim opcijama ili integracijama. Instalirajte iz <a href="%s" target="_blank" rel="nofollow noopener">direktorija dodaci</a> ili postavite jedan kao <b>.zip</b> datoteku.';

/**
 * ---------------------------------------------------------------
 * Themes Section
 * ---------------------------------------------------------------
 * Language lines for themes management section.
 */
$lang['admin_themes_add'] = 'Dodaj temu';
$lang['admin_themes_delete_confirm'] = 'Jeste li sigurni da želite izbrisati temu: <b>%s</b>?';
$lang['admin_themes_delete_error'] = 'Nije moguće izbrisati temu.';
$lang['admin_themes_delete_error_active'] = 'Ne možete izbrisati trenutno aktivnu temu.';
$lang['admin_themes_delete_success'] = 'Tema je uspješno izbrisana.';
$lang['admin_themes_disable_confirm'] = 'Jeste li sigurni da želite deaktivirati temu: <b>%s</b>?';
$lang['admin_themes_disable_error'] = 'Nije moguće deaktivirati temu.';
$lang['admin_themes_disable_success'] = 'Tema je uspješno deaktivirana.';
$lang['admin_themes_enable_confirm'] = 'Jeste li sigurni da želite aktivirati temu: <b>%s</b>?';
$lang['admin_themes_enable_error'] = 'Nije moguće aktivirati temu.';
$lang['admin_themes_enable_success'] = 'Tema je uspješno aktivirana.';
$lang['admin_themes_install_tip'] = 'Teme mijenjaju izgled vaše stranice i raspored. Odaberite iz <a href="%s" target="_blank" rel="nofollow noopener">biblioteke tema</a> ili postavite vlastitu kao <b>.zip</b> datoteku.';
$lang['admin_themes_none_tip'] = 'Ova aplikacija radi bez teme. Instalirajte jednu kako biste prilagodili javno sučelje.';

/**
 * ---------------------------------------------------------------
 * Menus Section
 * ---------------------------------------------------------------
 * Language lines for menu locations section.
 */
$lang['admin_menus'] = 'Izbornici';
$lang['admin_menus_assign_error'] = 'Nije moguće ažurirati lokacije izbornika.';
$lang['admin_menus_assign_success'] = 'Lokacije izbornika su uspješno ažurirane.';
$lang['admin_menus_header'] = 'Dostupno je <b>%s</b> lokacija izbornika.';
$lang['admin_menus_location'] = 'Lokacija';
$lang['admin_menus_locations'] = 'Lokacije izbornika';
$lang['admin_menus_manage'] = 'Upravljaj izbornicima';
$lang['admin_menus_menu'] = 'Dodijeljeni izbornik';
$lang['admin_menus_none'] = '&#151; Nijedan &#151;';

/**
 * ---------------------------------------------------------------
 * Languages Section
 * ---------------------------------------------------------------
 * Language lines for languages management section.
 */
$lang['admin_languages_add'] = 'Dodaj jezik';
$lang['admin_languages_default_confirm'] = 'Jeste li sigurni da želite učiniti ovaj jezik zadanim jezikom stranice?';
$lang['admin_languages_default_error'] = 'Nije moguće promijeniti zadani jezik.';
$lang['admin_languages_default_error_nochange'] = 'Ovaj jezik je već zadani.';
$lang['admin_languages_default_success'] = 'Zadani jezik je uspješno promijenjen.';
$lang['admin_languages_disable_all_confirm'] = 'Jeste li sigurni da želite onemogućiti sve jezike?';
$lang['admin_languages_disable_all_error'] = 'Nije moguće onemogućiti sve jezike.';
$lang['admin_languages_disable_all_success'] = 'Svi jezici su uspješno onemogućeni.';
$lang['admin_languages_disable_confirm'] = 'Jeste li sigurni da želite onemogućiti jezik: <b>%s</b>?';
$lang['admin_languages_disable_error'] = 'Nije moguće onemogućiti jezik.';
$lang['admin_languages_disable_error_default'] = 'Zadani jezik ne može biti onemogućen.';
$lang['admin_languages_disable_error_nochange'] = 'Ovaj jezik je već onemogućen.';
$lang['admin_languages_disable_success'] = 'Jezik je uspješno onemogućen.';
$lang['admin_languages_enable_all_confirm'] = 'Jeste li sigurni da želite omogućiti sve jezike?';
$lang['admin_languages_enable_all_error'] = 'Nije moguće omogućiti sve jezike.';
$lang['admin_languages_enable_all_success'] = 'Svi jezici su uspješno omogućeni.';
$lang['admin_languages_enable_confirm'] = 'Jeste li sigurni da želite omogućiti jezik: <b>%s</b>?';
$lang['admin_languages_enable_error'] = 'Nije moguće omogućiti jezik.';
$lang['admin_languages_enable_error_nochange'] = 'Ovaj jezik je već omogućen.';
$lang['admin_languages_enable_success'] = 'Jezik je uspješno omogućen.';
$lang['admin_languages_install_tip'] = 'Jezici dodaju prijevode za sučelje i sadržaj vaše web-stranice. Pregledajte dostupne jezike u <a href="%s" target="_blank" rel="noopener">direktoriju jezika</a> ili prenesite <b>.zip</b> paket kako biste instalirali vlastiti.';
$lang['admin_languages_tip'] = 'Omogućite, onemogućite i postavite zadani jezik stranice. Omogućeni jezici su dostupni posjetiteljima stranice.';

/**
 * ---------------------------------------------------------------
 * Updates & License Section
 * ---------------------------------------------------------------
 * Language lines for updates section.
 */
$lang['update_available'] = 'Nova ažuriranja dostupna!';
$lang['update_backup_error'] = 'Nije moguće stvoriti sigurnosnu kopiju postojećeg paketa. Ažuriranje je prekinuto.';
$lang['update_check_disabled'] = 'Automatske provjere ažuriranja su onemogućene. Omogućite ih za prikaz ažuriranja.';
$lang['update_check_error'] = 'Nije moguće pokrenuti provjeru ažuriranja u ovom trenutku.';
$lang['update_check_success'] = 'Provjera ažuriranja uspješno dovršena.';
$lang['update_install_error'] = 'Paket nije mogao biti instaliran. Prethodna verzija je zadržana.';
$lang['update_install_success'] = 'Paket uspješno ažuriran na najnoviju verziju.';
$lang['update_interval_3days'] = 'Svaka 3 dana';
$lang['update_interval_biweekly'] = 'Svaka 2 tjedna';
$lang['update_interval_daily'] = 'Svaki dan';
$lang['update_interval_monthly'] = 'Jednom mjesečno';
$lang['update_interval_weekly'] = 'Jednom tjedno';
$lang['update_not_available'] = 'Vaša web stranica je ažurna.';
$lang['update_rollback_error'] = 'Nije moguće vratiti prethodnu verziju. Može biti potrebna ručna intervencija.';
$lang['update_rollback_success'] = 'Prethodna verzija uspješno vraćena.';
$lang['updates_available'] = 'Dostupna ažuriranja';
$lang['updates_check_now'] = 'Provjeri sada';
$lang['updates_check_now_confirm'] = 'Jeste li sigurni da želite provjeriti ažuriranja sada?';
$lang['updates_current_version'] = 'Trenutna verzija';
$lang['updates_enable'] = 'Omogući ažuriranja';
$lang['updates_last_check'] = 'Zadnja provjera: %s';
$lang['updates_latest_version'] = 'Najnovija verzija';
$lang['updates_next_check'] = 'Sljedeća zakazana provjera: %s';
$lang['updates_previous_version'] = 'Prethodna verzija';
$lang['updates_recent'] = 'Nedavno ažurirano';

/**
 * ---------------------------------------------------------------
 * Firewall Section
 * ---------------------------------------------------------------
 * Language lines for the system firewall section.
 */
$lang['admin_firewall_ban_error'] = 'Blokiranje navedene IP adrese nije uspjelo.';
$lang['admin_firewall_ban_success'] = 'IP adresa je uspješno blokirana.';
$lang['admin_firewall_block_ip'] = 'Blokiraj IP adresu';
$lang['admin_firewall_delete_confirm'] = 'Jeste li sigurni da želite odblokirati odabrane IP adrese?';
$lang['admin_firewall_delete_error'] = 'Odblokiranje odabranih IP adresa nije uspjelo.';
$lang['admin_firewall_delete_success'] = 'Odabrane IP adrese su uspješno odblokirane.';
$lang['admin_firewall_duration'] = 'Trajanje zabrane';
$lang['admin_firewall_permanent'] = 'Trajno';
$lang['admin_firewall_reason'] = 'Razlog zabrane';
$lang['admin_firewall_tip'] = 'Pregledajte i upravljajte IP adresama blokiranim od strane vatrozida zbog ponovljenih prekršaja ili sumnjive aktivnosti.';

// Settings
$lang['404_ban_duration'] = 'Trajanje zabrane za 404 pogreške';
$lang['404_threshold'] = 'Ograničenje 404 pogrešaka';
$lang['uri_ban_duration'] = 'Trajanje URI zabrane';
$lang['uri_strike_threshold'] = 'Gornja granica URI pogrešaka';
