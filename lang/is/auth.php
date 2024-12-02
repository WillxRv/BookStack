<?php
/**
 * Authentication Language Lines
 * The following language lines are used during authentication for various
 * messages that we need to display to the user.
 */
return [

    'failed' => 'Þeesi auðkenning er ekki á skrá.',
    'throttle' => 'Of margar tilraunir til innskráningar. Reyndu aftur eftir :seconds sekúndur.',

    // Login & Register
    'sign_up' => 'Nýskrá',
    'log_in' => 'Innskrá',
    'log_in_with' => 'Innskrá með :socialDriver',
    'sign_up_with' => 'Búa til aðgang með :socialDriver',
    'logout' => 'Skrá út',

    'name' => 'Nafn',
    'username' => 'Notandanafn',
    'email' => 'Netfang',
    'password' => 'Lykilorð',
    'password_confirm' => 'Staðfestu lykilorð',
    'password_hint' => 'Verður að vera minnst 8 stafir',
    'forgot_password' => 'Gleymt lykilorð?',
    'remember_me' => 'Geyma innskráningarupplýsingar',
    'ldap_email_hint' => 'Settu inn netfang til að nota þennan aðgang.',
    'create_account' => 'Stofna aðgang',
    'already_have_account' => 'Þegar með notandaaðgang?',
    'dont_have_account' => 'Ekki með aðgang?',
    'social_login' => 'Innskráning með samfélagsmiðli',
    'social_registration' => 'Skráning samfélagsmiðils',
    'social_registration_text' => 'Skráðu þig og innskrá með annari þjónustu.',

    'register_thanks' => 'Takk fyrir að skrá þig!',
    'register_confirm' => 'Skoðaðu tölvupóstinn þinn og smelltu á staðfestingarhlekkinn :appName.',
    'registrations_disabled' => 'Skráningar eru óvirkar í augnablikinu',
    'registration_email_domain_invalid' => 'Þetta lén hefur ekki aðgang að þessu forriti',
    'register_success' => 'Takk fyrir að skrá þig, nú ertu innskráðursem notandi.',

    // Login auto-initiation
    'auto_init_starting' => 'Reyni innskráningu',
    'auto_init_starting_desc' => 'Reyni að tengjast auðkenningarþjónustu, ef ekkert gerist innan 5 sekúndna getur þú smellt á hlekkinn hér að neðan.',
    'auto_init_start_link' => 'Halda áfram með auðkenningu',

    // Password Reset
    'reset_password' => 'Endurstilla lykilorð',
    'reset_password_send_instructions' => 'Settu netfangið þitt hér að neðan og þú færð tölvupóst með endurstillingar hlekk.',
    'reset_password_send_button' => 'Senda hlekk',
    'reset_password_sent' => 'Endurstillingar hlekkur hefur verið sendur í tölvupósti :email ef netfangið er á skrá.',
    'reset_password_success' => 'Lykilorðið þitt hefur verið endurstillt.',
    'email_reset_subject' => 'Endurstilla :appName lykilorðið þitt',
    'email_reset_text' => 'Þú fékkst þennan tölvupóst því að beðið var um endurstillingu lykilorðs á þínum aðgangi.',
    'email_reset_not_requested' => 'Ef þú baðst ekki um endurstillingu lykilorðs þarftu ekki að gera neitt.',

    // Email Confirmation
    'email_confirm_subject' => 'Staðfestu netfangið þitt á :appName',
    'email_confirm_greeting' => 'Takk fyrir að skrá þig á :appName!',
    'email_confirm_text' => 'Vinsamlegast staðfestu netfangið þitt með því að smella á hnappin hér fyrir neðan:',
    'email_confirm_action' => 'Staðfesta netfang',
    'email_confirm_send_error' => 'Staðfesting netfangs er nauðsynleg en kerfið gat ekki sent póst, vinsamlegast hafið samband við kerfisstjóra.',
    'email_confirm_success' => 'Netfang þitt hefur verið staðfest, þú ættir nú að geta skráð þig inn með þessu netfangi.',
    'email_confirm_resent' => 'Staðfestingar tölvupóstur hefur verið sendur, kíktu í póshólfið þitt.',
    'email_confirm_thanks' => 'Takk fyrir að staðfesta!',
    'email_confirm_thanks_desc' => 'Hinkraðu smá á meðan staðfestingin þín er í vinnslu, ef ekkert gerist eftir 3 sekúndur, smelltu á "Halda áfram" hlekkinn hér fyrir neðan.',

    'email_not_confirmed' => 'Netfang hefur ekki verið staðfest',
    'email_not_confirmed_text' => 'Netfangið þitt hefur ekki enn verið staðfest.',
    'email_not_confirmed_click_link' => 'Vinsamlegast smelltu á hlekkinn sem barst þér í tölvupósti eftir skráningu.',
    'email_not_confirmed_resend' => 'If you cannot find the email you can re-send the confirmation email by submitting the form below.',
    'email_not_confirmed_resend_button' => 'Resend Confirmation Email',

    // User Invite
    'user_invite_email_subject' => 'You have been invited to join :appName!',
    'user_invite_email_greeting' => 'An account has been created for you on :appName.',
    'user_invite_email_text' => 'Click the button below to set an account password and gain access:',
    'user_invite_email_action' => 'Set Account Password',
    'user_invite_page_welcome' => 'Welcome to :appName!',
    'user_invite_page_text' => 'To finalise your account and gain access you need to set a password which will be used to log-in to :appName on future visits.',
    'user_invite_page_confirm_button' => 'Confirm Password',
    'user_invite_success_login' => 'Password set, you should now be able to login using your set password to access :appName!',

    // Multi-factor Authentication
    'mfa_setup' => 'Setup Multi-Factor Authentication',
    'mfa_setup_desc' => 'Setup multi-factor authentication as an extra layer of security for your user account.',
    'mfa_setup_configured' => 'Already configured',
    'mfa_setup_reconfigure' => 'Reconfigure',
    'mfa_setup_remove_confirmation' => 'Are you sure you want to remove this multi-factor authentication method?',
    'mfa_setup_action' => 'Setup',
    'mfa_backup_codes_usage_limit_warning' => 'You have less than 5 backup codes remaining, Please generate and store a new set before you run out of codes to prevent being locked out of your account.',
    'mfa_option_totp_title' => 'Mobile App',
    'mfa_option_totp_desc' => 'To use multi-factor authentication you\'ll need a mobile application that supports TOTP such as Google Authenticator, Authy or Microsoft Authenticator.',
    'mfa_option_backup_codes_title' => 'Backup Codes',
    'mfa_option_backup_codes_desc' => 'Generates a set of one-time-use backup codes which you\'ll enter on login to verify your identity. Make sure to store these in a safe & secure place.',
    'mfa_gen_confirm_and_enable' => 'Confirm and Enable',
    'mfa_gen_backup_codes_title' => 'Backup Codes Setup',
    'mfa_gen_backup_codes_desc' => 'Store the below list of codes in a safe place. When accessing the system you\'ll be able to use one of the codes as a second authentication mechanism.',
    'mfa_gen_backup_codes_download' => 'Download Codes',
    'mfa_gen_backup_codes_usage_warning' => 'Each code can only be used once',
    'mfa_gen_totp_title' => 'Mobile App Setup',
    'mfa_gen_totp_desc' => 'To use multi-factor authentication you\'ll need a mobile application that supports TOTP such as Google Authenticator, Authy or Microsoft Authenticator.',
    'mfa_gen_totp_scan' => 'Scan the QR code below using your preferred authentication app to get started.',
    'mfa_gen_totp_verify_setup' => 'Verify Setup',
    'mfa_gen_totp_verify_setup_desc' => 'Verify that all is working by entering a code, generated within your authentication app, in the input box below:',
    'mfa_gen_totp_provide_code_here' => 'Provide your app generated code here',
    'mfa_verify_access' => 'Verify Access',
    'mfa_verify_access_desc' => 'Your user account requires you to confirm your identity via an additional level of verification before you\'re granted access. Verify using one of your configured methods to continue.',
    'mfa_verify_no_methods' => 'No Methods Configured',
    'mfa_verify_no_methods_desc' => 'No multi-factor authentication methods could be found for your account. You\'ll need to set up at least one method before you gain access.',
    'mfa_verify_use_totp' => 'Verify using a mobile app',
    'mfa_verify_use_backup_codes' => 'Verify using a backup code',
    'mfa_verify_backup_code' => 'Backup Code',
    'mfa_verify_backup_code_desc' => 'Enter one of your remaining backup codes below:',
    'mfa_verify_backup_code_enter_here' => 'Enter backup code here',
    'mfa_verify_totp_desc' => 'Enter the code, generated using your mobile app, below:',
    'mfa_setup_login_notification' => 'Multi-factor method configured, Please now login again using the configured method.',
];
