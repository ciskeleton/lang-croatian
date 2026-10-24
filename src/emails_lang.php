<?php

/**
 * System emails language lines.
 *
 * @package     CiSkeleton\Core
 * @subpackage  Language
 * @category    Core
 *
 * @author      Kader Bouyakoub <bkader[at]mail[dot]com>
 * @copyright   2018-present, Kader Bouyakoub
 * @license     MIT
 * @link        https://opensource.org/license/mit
 *
 * SPDX-License-Identifier: MIT
 */

// ====================================================================
// SYSTEM NOTIFICATIONS
// ====================================================================

// ----------------------------------------------------------------
// Update Available
// ----------------------------------------------------------------

$lang['emails_updates_available_subject'] = 'Dostupna ažuriranja sustava';
$lang['emails_updates_available_message'] = <<<EOT
Pozdrav,

Detektirana su nova ažuriranja sustava za {site_anchor}.

Ova ažuriranja mogu uključivati sigurnosne zakrpe, poboljšanja performansi ili nove značajke.
Preporučujemo da ih pregledate što je prije moguće.

Dostupna ažuriranja možete pregledati i upravljati njima na administratorskoj nadzornoj ploči:
{link}

Ako ste ažuriranja već pregledali ili primijenili, nisu potrebne daljnje radnje.

Ovo je automatizirana sustavna poruka koju je poslao {site_name}.
Molimo vas da ne odgovarate na ovu e-poruku.

-- {site_name}
EOT;

// ====================================================================
// USER ACCOUNTS
// ====================================================================

// ----------------------------------------------------------------
// Account Activation Request
// ----------------------------------------------------------------

$lang['emails_account_activation_request_subject'] = 'Aktivacija računa';
$lang['emails_account_activation_request_message'] = <<<EOT
Pozdrav {name},

Hvala vam na registraciji na {site_anchor}. Vaš račun je kreiran i mora biti aktiviran prije nego što ga možete koristiti.

Da biste aktivirali svoj račun, kliknite na sljedeću poveznicu ili je kopirajte i zalijepite u svoj preglednik:
{link}

Lijep pozdrav,
-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Resend Account Activation Link
// ----------------------------------------------------------------

$lang['emails_account_activation_resend_subject'] = 'Nova poveznica za aktivaciju';
$lang['emails_account_activation_resend_message'] = <<<EOT
Pozdrav {name},

Nedavno ste zatražili novu poveznicu za aktivaciju na {site_anchor} jer vaš račun nije bio aktivan.
Da biste aktivirali svoj račun, kliknite na sljedeću poveznicu ili je kopirajte i zalijepite u svoj preglednik:
{link}

Ako niste zatražili ovo, nema potrebe za daljnjim postupanjem.

Ova akcija je zatražena s ove IP adrese: {ip_link}.

Lijep pozdrav,
-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Account Activation Successful
// ----------------------------------------------------------------

$lang['emails_account_activation_success_subject'] = 'Račun aktiviran';
$lang['emails_account_activation_success_message'] = <<<EOT
Pozdrav {name},

Vaš račun na {site_anchor} je uspješno aktiviran. Sada se možete <a href="{login_url}" target="_blank" rel="noopener">prijaviti</a> bilo kada želite.

Nadamo se da ćete uživati u svom boravku, molimo prihvatite naše ljubazne pozdrave.

-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Pending Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_pending_subject'] = 'Račun čeka odobrenje';
$lang['emails_account_approval_pending_message'] = <<<EOT
Pozdrav {name},

Hvala vam što ste nam se pridružili na {site_anchor}. Vaš račun je kreiran ali treba odobrenje administratora prije nego postane aktivan.
Iskreno se ispričavamo za ovaj ključni korak, ali to je samo iz sigurnosnih razloga.

Primijetit ćete potvrdni e-mail čim vaš račun bude odobren.

Nadamo se da ćete uživati u svom boravku, molimo prihvatite naše ljubazne pozdrave.

-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Successful Account Approval
// ----------------------------------------------------------------

$lang['emails_account_approval_success_subject'] = 'Račun odobren';
$lang['emails_account_approval_success_message'] = <<<EOT
Pozdrav {name},

Odlične vijesti! Vaš račun na {site_anchor} je upravo odobren.

Sada se možete prijaviti i odmah početi koristiti svoj račun:
{link}

Smo sretni što ste s nama.

-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Account Restoration
// ----------------------------------------------------------------

$lang['emails_account_restored_subject'] = 'Račun vraćen';
$lang['emails_account_restored_message'] = <<<EOT
Pozdrav {name},

Ovaj e-mail potvrđuje da je vaš račun na {site_anchor} uspješno obnovljen.

Dobrodošli natrag i nadamo se da ćete ovaj put uživati u svom boravku.

Lijep pozdrav,
-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Welcome Message
// ----------------------------------------------------------------

$lang['emails_account_welcome_subject'] = 'Dobrodošli na {site_name}';
$lang['emails_account_welcome_message'] = <<<EOT
Pozdrav {name},

Većina ljudi ima prilično dugačke dobrodošlice e-mail sekvence nakon što se registrujete na njihovom mjestu.

Dobre vijesti: mi nismo kao većina ljudi.
Ali, svejedno želimo vas dobrodošlicu i hvala vam što ste nam se pridružili na {site_anchor}.

Nadamo se da ćete uživati u svom boravku, molimo prihvatite naše ljubazne pozdrave.

-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Email Change Request
// ----------------------------------------------------------------

$lang['emails_email_change_request_subject'] = 'Zahtjev za promjenu e-pošte';
$lang['emails_email_change_request_message'] = <<<EOT
Pozdrav {name},

Primili ste ovu e-poštu jer smo primili zahtjev za promjenu e-pošte za vaš račun na {site_anchor}.

Kliknite na sljedeću poveznicu ili je kopirajte i zalijepite u svoj preglednik ako želite nastaviti:
{link}

Ako niste zatražili promjenu e-pošte, nema potrebe za daljnjim postupanjem.

Ova akcija je zatražena s ove IP adrese: {ip_link}.

Lijep pozdrav,
-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Successful Email Change
// ----------------------------------------------------------------

$lang['emails_email_change_success_subject'] = 'Adresa e-pošte promijenjena';
$lang['emails_email_change_success_message'] = <<<EOT
Pozdrav {name},

Ovaj e-mail potvrđuje da je vaša e-mail adresa korištena na {site_anchor} uspješno promijenjena.

Ako niste izveli ovu akciju, molimo kontaktirajte nas što je prije moguće da riješimo ovaj problem.

Ova akcija je izvršena s ove IP adrese: {ip_link}.

Lijep pozdrav,
-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Login Alert: Failure
// ----------------------------------------------------------------

$lang['emails_login_alert_failure_subject'] = 'Upozorenje o neuspješnoj prijavi';
$lang['emails_login_alert_failure_message'] = <<<EOT
Pozdrav {name},

Netko je nedavno koristio pogrešne lozinke za pokušaj prijave u vaš {site_name} račun.

Datum poslužitelja: {date}
Uređaj: {browser}, {platform}
IP adresa: {ip_link}

Ako to niste bili vi, ne brinite se, njihov pokušaj prijave nije bio uspješan.

Ako ste to bili vi i ne sjećate se lozinke, kliknite na vezu ispod da biste je resetirali:
{reset_link}

Ako imate poteškoća s prijavom na svoj račun, kontaktirajte naš tim ili zatražite vezu za prijavu jednim klikom.

-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Login Alert: Success
// ----------------------------------------------------------------

$lang['emails_login_alert_success_subject'] = 'Obavijest o uspješnoj prijavi';
$lang['emails_login_alert_success_message'] = <<<EOT
Pozdrav {name},

Šaljemo vam ovu e-poštu nakon uspješne prijave u vaš {site_name} račun.

Datum poslužitelja: {date}
Uređaj: {browser}, {platform}
IP adresa: {ip_link}

Ako ste vi obavili prijavu, možete sigurno zanemariti ovu e-poštu.

Ako se niste prijavili, odmah promijenite lozinku kako biste zaštitili svoj račun.

Za bilo kakvu pomoć, kontaktirajte naš tim podrške.

-- Tim {site_name}
EOT;

// ----------------------------------------------------------------
// One-Click Login Link
// ----------------------------------------------------------------

$lang['emails_login_magic_link_subject'] = 'Poveznica za brzu prijavu';
$lang['emails_login_magic_link_message'] = <<<EOT
Pozdrav {name},

Zatražili ste prijavu jednim klikom na svoj račun na {site_anchor}.

Kliknite na vezu ispod ili je kopirajte i zalijepite u svoj preglednik, i bit ćete odmah prijavljeni:
{link}

Ova veza će isteći za 15 minuta. Ako niste zatražili ovo, molimo zanemarite ovu e-poštu.

Ova akcija je zatražena s ove IP adrese: {ip_link}.

Lijep pozdrav,
-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Login: Two-Factor Authentication Code
// ----------------------------------------------------------------

$lang['emails_login_two_factor_code_subject'] = 'Dvofaktorska autentifikacija';
$lang['emails_login_two_factor_code_message'] = <<<EOT
Pozdrav {name},

Vaš dvofaktorski autentifikacijski kod je: <strong>{code}</strong>

Uvijek možete onemogućiti dvofaktorsku autentifikaciju u postavkama svog računa.

Ova akcija je izvršena s ove IP adrese: {ip_link}.

Lijep pozdrav,
-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Password Change Request
// ----------------------------------------------------------------

$lang['emails_password_change_request_subject'] = 'Zahtjev za poništavanje lozinke';
$lang['emails_password_change_request_message'] = <<<EOT
Pozdrav {name},

Primili ste ovu e-poštu jer smo primili zahtjev za resetiranje lozinke za vaš račun na {site_anchor}.

Kliknite na sljedeću poveznicu ili je kopirajte i zalijepite u svoj preglednik ako želite nastaviti:
{link}

Ako niste zatražili resetiranje lozinke, nema potrebe za daljnjim postupanjem.

Ovaj zahtjev je poslan s ove IP adrese: {ip_link}.

Lijep pozdrav,
-- Tim {site_name}.
EOT;

// ----------------------------------------------------------------
// Password Change Successful
// ----------------------------------------------------------------

$lang['emails_password_change_success_subject'] = 'Lozinka uspješno promijenjena';
$lang['emails_password_change_success_message'] = <<<EOT
Pozdrav {name},

Ovaj e-mail potvrđuje da je vaša lozinka na {site_anchor} uspješno promijenjena. Sada se možete <a href="{login_url}" target="_blank" rel="noopener">prijaviti</a> koristeći novu lozinku.

Ako niste izveli ovu akciju, molimo kontaktirajte nas što je prije moguće da riješimo ovaj problem.

Ova akcija je izvršena s ove IP adrese: {ip_link}.

Lijep pozdrav,
-- Tim {site_name}.
EOT;
