<?php
/**
 * Settings text strings
 * Contains all text strings used in the general settings sections of BookStack
 * including users and roles.
 */
return [

    // Common Messages
    'settings' => 'Asetukset',
    'settings_save' => 'Tallenna asetukset',
    'system_version' => 'Järjestelmän versio',
    'categories' => 'Kategoriat',

    // App Settings
    'app_customization' => 'Mukauttaminen',
    'app_features_security' => 'Ominaisuudet ja turvallisuus',
    'app_name' => 'Sivuston nimi',
    'app_name_desc' => 'Tämä nimi näkyy ylätunnisteessa ja kaikissa järjestelmän lähettämissä sähköpostiviesteissä.',
    'app_name_header' => 'Näytä nimi ylätunnisteessa',
    'app_public_access' => 'Julkinen pääsy',
    'app_public_access_desc' => 'Ottamalla tämä asetus käyttöön vierailijat voivat lukea sisältöjä kirjautumatta sisään.',
    'app_public_access_desc_guest' => 'Vierailijoiden pääsyoikeuksia voidaan hallinnoida "Vierailija"-käyttäjän asetuksista.',
    'app_public_access_toggle' => 'Salli julkinen pääsy',
    'app_public_viewing' => 'Salli julkinen katselu?',
    'app_secure_images' => 'Turvallisemmat kuvien lataukset',
    'app_secure_images_toggle' => 'Ota käyttöön turvallisemmat kuvien lataukset',
    'app_secure_images_desc' => 'Paremman suorituskyvyn takia kaikki kuvat ovat julkisia. Tämä asetus lisää satunnaisen, vaikeasti arvattavan merkkijonon kuvien url-osoitteisiin. Varmista, että hakemistojen indeksit eivät ole palvelimen asetuksissa päällä, jotta niitä ei pääse selaamaan.',
    'app_default_editor' => 'Sivujen oletuseditori',
    'app_default_editor_desc' => 'Valitse editori, jota käytetään oletuksena uusia sivuja muokattaessa. Valinnan voi ohittaa sivutasolla, jos käyttäjän oikeudet sallivat sen.',
    'app_custom_html' => 'HTML-otsakkeen mukautettu sisältö',
    'app_custom_html_desc' => 'Tähän annettu sisältö lisätään jokaisen sivun <head>-osan loppuun. Tällä tavalla voit lisätä kätevästi esimerkiksi omia CSS-tyylejä tai analytiikkapalveluiden vaatimia koodeja.',
    'app_custom_html_disabled_notice' => 'Mukautettu HTML-otsakkeen sisältö ei ole käytössä tällä asetussivulla, jotta kaikki virheitä aiheuttavat muutokset voidaan poistaa.',
    'app_logo' => 'Sivuston logo',
    'app_logo_desc' => 'Kuvaa käytetään esimerkiksi sivuston otsikkopalkissa. Kuvan korkeuden tulisi olla 86 pikseliä. Suuremmat kuvat skaalataan pienemmiksi.',
    'app_icon' => 'Sivuston kuvake',
    'app_icon_desc' => 'Kuvaketta käytetään selaimen välilehdissä ja pikakuvakkeissa. Kuvakkeen tulisi olla 256 pikselin neliönmuotoinen PNG-kuva.',
    'app_homepage' => 'Sivuston kotisivu',
    'app_homepage_desc' => 'Valitse näkymä, joka näytetään etusivuna oletusnäkymän sijaan. Sivun käyttöoikeuksia ei oteta huomioon valituilla sivuilla.',
    'app_homepage_select' => 'Valitse sivu',
    'app_footer_links' => 'Alatunnisteen linkit',
    'app_footer_links_desc' => 'Lisää linkkejä sivuston alatunnisteeseen. Nämä näkyvät useimpien sivujen alareunassa, myös niiden, jotka eivät vaadi kirjautumista. Voit käyttää merkintää "trans::<key>" käyttääksesi järjestelmän määrittelemiä käännöksiä. Esimerkiksi käyttämällä "trans::common.privacy_policy" saadaan käännetty teksti "Tietosuojaseloste" ja "trans::common.terms_of_service" saadaan käännetty teksti "Palvelun käyttöehdot".',
    'app_footer_links_label' => 'Linkin nimi',
    'app_footer_links_url' => 'Linkin URL-osoite',
    'app_footer_links_add' => 'Lisää alatunnisteen linkki',
    'app_disable_comments' => 'Poista kommentit käytöstä',
    'app_disable_comments_toggle' => 'Poista kommentit käytöstä',
    'app_disable_comments_desc' => 'Poistaa kommentit käytöstä kaikilla sivuilla. <br> Lisättyjä kommentteja ei näytetä.',

    // Color settings
    'color_scheme' => 'Sivuston värimalli',
    'color_scheme_desc' => 'Määritä sivuston käyttöliittymässä käytettävät värit. Värit voidaan määrittää erikseen tummalle ja vaalealle tilalle, jotta ne sopivat parhaiten teemaan ja varmistavat luettavuuden.',
    'ui_colors_desc' => 'Aseta sivuston pääväri ja linkin oletusväri. Ensisijaista väriä käytetään pääasiassa yläpalkissa, painikkeissa ja käyttöliittymän koristeissa. Linkin oletusväriä käytetään tekstipohjaisissa linkeissä ja toiminnoissa sekä kirjoitetussa sisällössä että sivuston käyttöliittymässä.',
    'app_color' => 'Pääväri',
    'link_color' => 'Linkin oletusväri',
    'content_colors_desc' => 'Määritä eri sisältötyyppien värit. Luettavuuden ja saavutettavuuden kannalta on suositeltavaa valita värit, joiden kirkkaus on samankaltainen kuin oletusvärien.',
    'bookshelf_color' => 'Hyllyn väri',
    'book_color' => 'Kirjan väri',
    'chapter_color' => 'Luvun väri',
    'page_color' => 'Sivun väri',
    'page_draft_color' => 'Luonnoksen väri',

    // Registration Settings
    'reg_settings' => 'Rekisteröityminen',
    'reg_enable' => 'Salli rekisteröityminen',
    'reg_enable_toggle' => 'Salli rekisteröityminen',
    'reg_enable_desc' => 'Kun rekisteröityminen on käytössä, vierailijat voivat rekisteröityä sivuston käyttäjiksi. Rekisteröitymisen yhteydessä heille annetaan oletuskäyttäjärooli.',
    'reg_default_role' => 'Oletuskäyttäjärooli rekisteröitymisen jälkeen',
    'reg_enable_external_warning' => 'Yllä olevaa vaihtoehtoa ei oteta huomioon, kun ulkoinen LDAP- tai SAML-todennus on käytössä. Käyttäjätilit luodaan automaattisesti, jos tunnistautuminen käytössä olevaan ulkoiseen järjestelmään onnistuu.',
    'reg_email_confirmation' => 'Sähköpostivahvistus',
    'reg_email_confirmation_toggle' => 'Vaadi sähköpostivahvistus',
    'reg_confirm_email_desc' => 'Jos domain-rajoitus on käytössä, sähköpostivahvistus on oletuksena päällä, eikä tätä valintaa oteta huomioon.',
    'reg_confirm_restrict_domain' => 'Domain-rajoitus',
    'reg_confirm_restrict_domain_desc' => 'Kirjoita pilkulla erotettu luettelo sähköpostien domain-nimistä, joihin haluat rajoittaa rekisteröitymisen. Käyttäjille lähetetään sähköpostiviesti osoitteen vahvistamiseksi, ennen kuin he pääsevät käyttämään sivustoa. <br> Huomaa, että käyttäjät voivat muuttaa sähköpostiosoitteensa onnistuneen rekisteröinnin jälkeen.',
    'reg_confirm_restrict_domain_placeholder' => 'Ei rajoituksia',

    // Maintenance settings
    'maint' => 'Huolto',
    'maint_image_cleanup' => 'Siivoa kuvat',
    'maint_image_cleanup_desc' => 'Tarkistaa kuvista ja luonnoksista mitkä kuvat ja piirustukset ovat tällä hetkellä käytössä ja mitkä ovat tarpeettomia. Varmista, että olet varmuuskopioinut tietokannan ja kuvat ennen tämän toiminnon suorittamista.',
    'maint_delete_images_only_in_revisions' => 'Poista myös kuvat, jotka ovat olemassa vain vanhoissa sivujen versioissa',
    'maint_image_cleanup_run' => 'Suorita siivous',
    'maint_image_cleanup_warning' => ':count mahdollisesti käyttämätöntä kuvaa löytyi. Haluatko varmasti poistaa nämä kuvat?',
    'maint_image_cleanup_success' => ':count mahdollisesti käyttämätöntä kuvaa löydetty ja poistettu!',
    'maint_image_cleanup_nothing_found' => 'Käyttämättömiä kuvia ei löytynyt, mitään ei poistettu!',
    'maint_send_test_email' => 'Lähetä testisähköposti',
    'maint_send_test_email_desc' => 'Toiminto lähettää testisähköpostin profiilissasi määritettyyn sähköpostiosoitteeseen.',
    'maint_send_test_email_run' => 'Lähetä testisähköposti',
    'maint_send_test_email_success' => 'Sähköposti lähetetty osoitteeseen :address',
    'maint_send_test_email_mail_subject' => 'Testisähköpostiviesti',
    'maint_send_test_email_mail_greeting' => 'Sähköpostin lähetys näyttää toimivan!',
    'maint_send_test_email_mail_text' => 'Onnittelut! Koska sait tämän sähköposti-ilmoituksen, sähköpostiasetuksesi näyttävät olevan oikein määritetty.',
    'maint_recycle_bin_desc' => 'Poistetut hyllyt, kirjat, luvut ja sivut siirretään roskakoriin, josta ne voidaan palauttaa tai poistaa pysyvästi. Vanhemmat kohteet roskakorissa saatetaan poistaa automaattisesti jonkin ajan kuluttua järjestelmän asetuksista riippuen.',
    'maint_recycle_bin_open' => 'Avaa roskakori',
    'maint_regen_references' => 'Luo viitteet uudelleen',
    'maint_regen_references_desc' => 'Tämä toiminto rakentaa sisältöjen väliset viittaukset uudelleen. Tämä tapahtuu yleensä automaattisesti, mutta tämä toiminto voi olla hyödyllinen indeksoitaessa vanhaa sisältöä tai vaihtoehtoisin menetelmin lisättyä sisältöä.',
    'maint_regen_references_success' => 'Viiteindeksi on luotu uudelleen!',
    'maint_timeout_command_note' => 'Huomautus: tämän toiminnon suorittaminen voi kestää jonkin aikaa, mikä voi johtaa aikakatkaisusta johtuviin ongelmiin joissakin verkkoympäristöissä. Vaihtoehtoisesti tämä toiminto voidaan suorittaa komentoriviltä.',

    // Recycle Bin
    'recycle_bin' => 'Roskakori',
    'recycle_bin_desc' => 'Tässä voit palauttaa poistetut kohteet tai poistaa ne pysyvästi järjestelmästä. Tämä luettelo on suodattamaton, toisin kuin järjestelmän vastaavat toimintoluettelot, joihin sovelletaan käyttöoikeussuodattimia.',
    'recycle_bin_deleted_item' => 'Poistettu kohde',
    'recycle_bin_deleted_parent' => 'Vanhempi',
    'recycle_bin_deleted_by' => 'Poistanut',
    'recycle_bin_deleted_at' => 'Poistoaika',
    'recycle_bin_permanently_delete' => 'Poista pysyvästi',
    'recycle_bin_restore' => 'Palauta',
    'recycle_bin_contents_empty' => 'Roskakori on tällä hetkellä tyhjä',
    'recycle_bin_empty' => 'Tyhjennä roskakori',
    'recycle_bin_empty_confirm' => 'Tämä tuhoaa pysyvästi kaikki kohteet roskakorissa, mukaan lukien kunkin kohteen sisältämän sisällön. Haluatko varmasti tyhjentää roskakorin?',
    'recycle_bin_destroy_confirm' => 'Tämä toiminto poistaa tämän kohteen ja kaikki alla luetellut sisältyvät kohteet pysyvästi järjestelmästä, etkä voi enää palauttaa tätä sisältöä. Haluatko varmasti poistaa tämän kohteen pysyvästi?',
    'recycle_bin_destroy_list' => 'Poistettavat kohteet',
    'recycle_bin_restore_list' => 'Palautettavat kohteet',
    'recycle_bin_restore_confirm' => 'Tämä toiminto palauttaa poistetun kohteen, mukaan lukien kaikki siihen sisältyvät kohteet, alkuperäiseen sijaintiinsa. Jos alkuperäinen sijainti on sittemmin poistettu ja on nyt roskakorissa, myös sitä koskeva kohde on palautettava.',
    'recycle_bin_restore_deleted_parent' => 'Kohde, johon tämä kohde sisältyy on myös poistettu. Kohteet pysyvät poistettuina, kunnes kyseinen vanhempi on palautettu.',
    'recycle_bin_restore_parent' => 'Palauta vanhempi',
    'recycle_bin_destroy_notification' => 'Poistettu yhteensä :count kohdetta roskakorista.',
    'recycle_bin_restore_notification' => 'Palautettu yhteensä :count kohdetta roskakorista.',

    // Audit Log
    'audit' => 'Tarkastusloki',
    'audit_desc' => 'Tämä tarkastusloki näyttää listauksen järjestelmässä suoritetuista toiminnoista. Lista on suodattamaton toisin kuin vastaavat järjestelmässä olevat listat, joihin sovelletaan käyttöoikeussuodattimia.',
    'audit_event_filter' => 'Tapahtumasuodatin',
    'audit_event_filter_no_filter' => 'Ei suodatinta',
    'audit_deleted_item' => 'Poistettu kohde',
    'audit_deleted_item_name' => 'Nimi: :name',
    'audit_table_user' => 'Käyttäjä',
    'audit_table_event' => 'Tapahtuma',
    'audit_table_related' => 'Liittyvä kohde tai tieto',
    'audit_table_ip' => 'IP-osoite',
    'audit_table_date' => 'Toiminnan päiväys',
    'audit_date_from' => 'Päiväys alkaen',
    'audit_date_to' => 'Päiväys saakka',

    // Role Settings
    'roles' => 'Roolit',
    'role_user_roles' => 'Käyttäjäroolit',
    'roles_index_desc' => 'Rooleja käytetään käyttäjien ryhmittelyyn ja järjestelmän käyttöoikeuksien antamiseen. Kun käyttäjä on useamman roolin jäsen, hän saa kaikkien omien rooliensa kyvyt.',
    'roles_x_users_assigned' => ':count käyttäjä osoitettu|:count käyttäjää osoitettu',
    'roles_x_permissions_provided' => ':count käyttöoikeus|:count käyttöoikeutta',
    'roles_assigned_users' => 'Osoitetut käyttäjät',
    'roles_permissions_provided' => 'Annetut käyttöoikeudet',
    'role_create' => 'Luo uusi rooli',
    'role_delete' => 'Poista rooli',
    'role_delete_confirm' => 'Tämä poistaa roolin \':roleName\'.',
    'role_delete_users_assigned' => 'Tähän rooliin on osoitettu :userCount käyttäjää. Jos haluat siirtää käyttäjät tästä roolista, valitse uusi rooli alta.',
    'role_delete_no_migration' => "Älä siirrä käyttäjiä",
    'role_delete_sure' => 'Oletko varma, että haluat poistaa tämän roolin?',
    'role_edit' => 'Muokkaa roolia',
    'role_details' => 'Roolin tiedot',
    'role_name' => 'Roolin nimi',
    'role_desc' => 'Lyhyt kuvaus roolista',
    'role_mfa_enforced' => 'Vaatii monivaiheisen tunnistautumisen',
    'role_external_auth_id' => 'Ulkoisen tunnistautumisen ID:t',
    'role_system' => 'Järjestelmän käyttöoikeudet',
    'role_manage_users' => 'Hallinnoi käyttäjiä',
    'role_manage_roles' => 'Hallinnoi rooleja ja roolien käyttöoikeuksia',
    'role_manage_entity_permissions' => 'Hallinnoi kaikkien kirjojen, lukujen ja sivujen käyttöoikeuksia',
    'role_manage_own_entity_permissions' => 'Hallinnoi omien kirjojen, lukujen ja sivujen käyttöoikeuksia',
    'role_manage_page_templates' => 'Hallinnoi mallipohjia',
    'role_access_api' => 'Pääsy järjestelmän ohjelmointirajapintaan',
    'role_manage_settings' => 'Hallinnoi sivuston asetuksia',
    'role_export_content' => 'Vie sisältöjä',
    'role_editor_change' => 'Vaihda sivun editoria',
    'role_notifications' => 'Vastaanota ja hallinnoi ilmoituksia',
    'role_asset' => 'Sisältöjen oikeudet',
    'roles_system_warning' => 'Huomaa, että minkä tahansa edellä mainituista kolmesta käyttöoikeudesta voi antaa käyttäjälle mahdollisuuden muuttaa omia tai muiden järjestelmän käyttäjien oikeuksia. Anna näitä oikeuksia sisältävät roolit vain luotetuille käyttäjille.',
    'role_asset_desc' => 'Näillä asetuksilla hallitaan oletuksena annettavia käyttöoikeuksia järjestelmässä oleviin sisältöihin. Yksittäisten kirjojen, lukujen ja sivujen käyttöoikeudet kumoavat nämä käyttöoikeudet.',
    'role_asset_admins' => 'Ylläpitäjät saavat automaattisesti pääsyn kaikkeen sisältöön, mutta nämä vaihtoehdot voivat näyttää tai piilottaa käyttöliittymävalintoja.',
    'role_asset_image_view_note' => 'Tämä tarkoittaa näkyvyyttä kuvien hallinnassa. Pääsy ladattuihin kuvatiedostoihin riippuu asetetusta kuvien tallennusvaihtoehdosta.',
    'role_all' => 'Kaikki',
    'role_own' => 'Omat',
    'role_controlled_by_asset' => 'Määräytyy sen sisällön mukaan, johon ne on ladattu',
    'role_save' => 'Tallenna rooli',
    'role_users' => 'Käyttäjät tässä roolissa',
    'role_users_none' => 'Yhtään käyttäjää ei ole osoitettuna tähän rooliin',

    // Users
    'users' => 'Users',
    'users_index_desc' => 'Create & manage individual user accounts within the system. User accounts are used for login and attribution of content & activity. Access permissions are primarily role-based but user content ownership, among other factors, may also affect permissions & access.',
    'user_profile' => 'User Profile',
    'users_add_new' => 'Add New User',
    'users_search' => 'Search Users',
    'users_latest_activity' => 'Latest Activity',
    'users_details' => 'User Details',
    'users_details_desc' => 'Set a display name and an email address for this user. The email address will be used for logging into the application.',
    'users_details_desc_no_email' => 'Set a display name for this user so others can recognise them.',
    'users_role' => 'User Roles',
    'users_role_desc' => 'Select which roles this user will be assigned to. If a user is assigned to multiple roles the permissions from those roles will stack and they will receive all abilities of the assigned roles.',
    'users_password' => 'User Password',
    'users_password_desc' => 'Set a password used to log-in to the application. This must be at least 8 characters long.',
    'users_send_invite_text' => 'You can choose to send this user an invitation email which allows them to set their own password otherwise you can set their password yourself.',
    'users_send_invite_option' => 'Send user invite email',
    'users_external_auth_id' => 'External Authentication ID',
    'users_external_auth_id_desc' => 'When an external authentication system is in use (such as SAML2, OIDC or LDAP) this is the ID which links this BookStack user to the authentication system account. You can ignore this field if using the default email-based authentication.',
    'users_password_warning' => 'Only fill the below if you would like to change the password for this user.',
    'users_system_public' => 'This user represents any guest users that visit your instance. It cannot be used to log in but is assigned automatically.',
    'users_delete' => 'Delete User',
    'users_delete_named' => 'Delete user :userName',
    'users_delete_warning' => 'This will fully delete this user with the name \':userName\' from the system.',
    'users_delete_confirm' => 'Are you sure you want to delete this user?',
    'users_migrate_ownership' => 'Migrate Ownership',
    'users_migrate_ownership_desc' => 'Select a user here if you want another user to become the owner of all items currently owned by this user.',
    'users_none_selected' => 'No user selected',
    'users_edit' => 'Edit User',
    'users_edit_profile' => 'Edit Profile',
    'users_avatar' => 'User Avatar',
    'users_avatar_desc' => 'Select an image to represent this user. This should be approx 256px square.',
    'users_preferred_language' => 'Preferred Language',
    'users_preferred_language_desc' => 'This option will change the language used for the user-interface of the application. This will not affect any user-created content.',
    'users_social_accounts' => 'Social Accounts',
    'users_social_accounts_desc' => 'View the status of the connected social accounts for this user. Social accounts can be used in addition to the primary authentication system for system access.',
    'users_social_accounts_info' => 'Here you can connect your other accounts for quicker and easier login. Disconnecting an account here does not revoke previously authorized access. Revoke access from your profile settings on the connected social account.',
    'users_social_connect' => 'Connect Account',
    'users_social_disconnect' => 'Disconnect Account',
    'users_social_status_connected' => 'Connected',
    'users_social_status_disconnected' => 'Disconnected',
    'users_social_connected' => ':socialAccount account was successfully attached to your profile.',
    'users_social_disconnected' => ':socialAccount account was successfully disconnected from your profile.',
    'users_api_tokens' => 'API Tokens',
    'users_api_tokens_desc' => 'Create and manage the access tokens used to authenticate with the BookStack REST API. Permissions for the API are managed via the user that the token belongs to.',
    'users_api_tokens_none' => 'No API tokens have been created for this user',
    'users_api_tokens_create' => 'Create Token',
    'users_api_tokens_expires' => 'Expires',
    'users_api_tokens_docs' => 'API Documentation',
    'users_mfa' => 'Multi-Factor Authentication',
    'users_mfa_desc' => 'Setup multi-factor authentication as an extra layer of security for your user account.',
    'users_mfa_x_methods' => ':count method configured|:count methods configured',
    'users_mfa_configure' => 'Configure Methods',

    // API Tokens
    'user_api_token_create' => 'Create API Token',
    'user_api_token_name' => 'Name',
    'user_api_token_name_desc' => 'Give your token a readable name as a future reminder of its intended purpose.',
    'user_api_token_expiry' => 'Expiry Date',
    'user_api_token_expiry_desc' => 'Set a date at which this token expires. After this date, requests made using this token will no longer work. Leaving this field blank will set an expiry 100 years into the future.',
    'user_api_token_create_secret_message' => 'Immediately after creating this token a "Token ID" & "Token Secret" will be generated and displayed. The secret will only be shown a single time so be sure to copy the value to somewhere safe and secure before proceeding.',
    'user_api_token' => 'API Token',
    'user_api_token_id' => 'Token ID',
    'user_api_token_id_desc' => 'This is a non-editable system generated identifier for this token which will need to be provided in API requests.',
    'user_api_token_secret' => 'Token Secret',
    'user_api_token_secret_desc' => 'This is a system generated secret for this token which will need to be provided in API requests. This will only be displayed this one time so copy this value to somewhere safe and secure.',
    'user_api_token_created' => 'Token created :timeAgo',
    'user_api_token_updated' => 'Token updated :timeAgo',
    'user_api_token_delete' => 'Delete Token',
    'user_api_token_delete_warning' => 'This will fully delete this API token with the name \':tokenName\' from the system.',
    'user_api_token_delete_confirm' => 'Are you sure you want to delete this API token?',

    // Webhooks
    'webhooks' => 'Webhooks',
    'webhooks_index_desc' => 'Webhooks are a way to send data to external URLs when certain actions and events occur within the system which allows event-based integration with external platforms such as messaging or notification systems.',
    'webhooks_x_trigger_events' => ':count trigger event|:count trigger events',
    'webhooks_create' => 'Create New Webhook',
    'webhooks_none_created' => 'No webhooks have yet been created.',
    'webhooks_edit' => 'Edit Webhook',
    'webhooks_save' => 'Save Webhook',
    'webhooks_details' => 'Webhook Details',
    'webhooks_details_desc' => 'Provide a user friendly name and a POST endpoint as a location for the webhook data to be sent to.',
    'webhooks_events' => 'Webhook Events',
    'webhooks_events_desc' => 'Select all the events that should trigger this webhook to be called.',
    'webhooks_events_warning' => 'Keep in mind that these events will be triggered for all selected events, even if custom permissions are applied. Ensure that use of this webhook won\'t expose confidential content.',
    'webhooks_events_all' => 'All system events',
    'webhooks_name' => 'Webhook Name',
    'webhooks_timeout' => 'Webhook Request Timeout (Seconds)',
    'webhooks_endpoint' => 'Webhook Endpoint',
    'webhooks_active' => 'Webhook Active',
    'webhook_events_table_header' => 'Events',
    'webhooks_delete' => 'Delete Webhook',
    'webhooks_delete_warning' => 'This will fully delete this webhook, with the name \':webhookName\', from the system.',
    'webhooks_delete_confirm' => 'Are you sure you want to delete this webhook?',
    'webhooks_format_example' => 'Webhook Format Example',
    'webhooks_format_example_desc' => 'Webhook data is sent as a POST request to the configured endpoint as JSON following the format below. The "related_item" and "url" properties are optional and will depend on the type of event triggered.',
    'webhooks_status' => 'Webhook Status',
    'webhooks_last_called' => 'Last Called:',
    'webhooks_last_errored' => 'Last Errored:',
    'webhooks_last_error_message' => 'Last Error Message:',


    //! If editing translations files directly please ignore this in all
    //! languages apart from en. Content will be auto-copied from en.
    //!////////////////////////////////
    'language_select' => [
        'en' => 'English',
        'ar' => 'العربية',
        'bg' => 'Bǎlgarski',
        'bs' => 'Bosanski',
        'ca' => 'Català',
        'cs' => 'Česky',
        'da' => 'Dansk',
        'de' => 'Deutsch (Sie)',
        'de_informal' => 'Deutsch (Du)',
        'el' => 'ελληνικά',
        'es' => 'Español',
        'es_AR' => 'Español Argentina',
        'et' => 'Eesti keel',
        'eu' => 'Euskara',
        'fa' => 'فارسی',
        'fr' => 'Français',
        'he' => 'עברית',
        'hr' => 'Hrvatski',
        'hu' => 'Magyar',
        'id' => 'Bahasa Indonesia',
        'it' => 'Italian',
        'ja' => '日本語',
        'ko' => '한국어',
        'lt' => 'Lietuvių Kalba',
        'lv' => 'Latviešu Valoda',
        'nb' => 'Norsk (Bokmål)',
        'nn' => 'Nynorsk',
        'nl' => 'Nederlands',
        'pl' => 'Polski',
        'pt' => 'Português',
        'pt_BR' => 'Português do Brasil',
        'ro' => 'Română',
        'ru' => 'Русский',
        'sk' => 'Slovensky',
        'sl' => 'Slovenščina',
        'sv' => 'Svenska',
        'tr' => 'Türkçe',
        'uk' => 'Українська',
        'uz' => 'O‘zbekcha',
        'vi' => 'Tiếng Việt',
        'zh_CN' => '简体中文',
        'zh_TW' => '繁體中文',
    ],
    //!////////////////////////////////
];
