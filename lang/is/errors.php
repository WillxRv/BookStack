<?php
/**
 * Text shown in error messaging.
 */
return [

    // Permissions
    'permission' => 'Þú hefur ekki heimild til að skoða þessa síðu.',
    'permissionJson' => 'Þú hefur ekki heimild til að framkvæma þessa aðgerð.',

    // Auth
    'error_user_exists_different_creds' => 'Notandi með netfangið :email er nú þegar til.',
    'auth_pre_register_theme_prevention' => 'Ekki var hægt að búa til aðgang með þessum upplýsingum',
    'email_already_confirmed' => 'Netfang hefur þegar verið staðfest. Prófaðu að skrá þig inn.',
    'email_confirmation_invalid' => 'Þessi staðfestingar tóki er ekki gildur eða hefur þegar verið notaður. Reyndu að skrá þig aftur.',
    'email_confirmation_expired' => 'Staðfestingar tóki hefur runnið út. Nýr staðfestinga tölvupóstur hefur verið sendur.',
    'email_confirmation_awaiting' => 'Eftir á að staðfest þetta netfang',
    'ldap_fail_anonymous' => 'LDAP auðkenning virkaði ekki',
    'ldap_fail_authed' => 'LDAP auðkenning virkaði ekki með að nota uppgefið dn & password',
    'ldap_extension_not_installed' => 'LDAP PHP viðbót ekki uppsett',
    'ldap_cannot_connect' => 'Næ ekki að tengjast Ldap þjóni. Fyrsta tenging mistókst',
    'saml_already_logged_in' => 'Þegar innskráður',
    'saml_no_email_address' => 'Fann ekki netfang fyrir þennan notanda í auðkenningar þjónustu',
    'saml_invalid_response_id' => 'The request from the external authentication system is not recognised by a process started by this application. Navigating back after a login could cause this issue.',
    'saml_fail_authed' => 'Login using :system failed, system did not provide successful authorization',
    'oidc_already_logged_in' => 'Þegar skráður inn',
    'oidc_no_email_address' => 'Fann ekki netfang fyrir þennan notanda í ytri auðkenningar þjónustu',
    'oidc_fail_authed' => 'Login using :system failed, system did not provide successful authorization',
    'social_no_action_defined' => 'Engin aðgerð skilgreind',
    'social_login_bad_response' => "Error received during :socialAccount login: \n:error",
    'social_account_in_use' => 'This :socialAccount account is already in use, Try logging in via the :socialAccount option.',
    'social_account_email_in_use' => 'The email :email is already in use. If you already have an account you can connect your :socialAccount account from your profile settings.',
    'social_account_existing' => 'This :socialAccount is already attached to your profile.',
    'social_account_already_used_existing' => 'This :socialAccount account is already used by another user.',
    'social_account_not_used' => 'This :socialAccount account is not linked to any users. Please attach it in your profile settings. ',
    'social_account_register_instructions' => 'If you do not yet have an account, You can register an account using the :socialAccount option.',
    'social_driver_not_found' => 'Social driver not found',
    'social_driver_not_configured' => 'Your :socialAccount social settings are not configured correctly.',
    'invite_token_expired' => 'This invitation link has expired. You can instead try to reset your account password.',
    'login_user_not_found' => 'A user for this action could not be found.',

    // System
    'path_not_writable' => 'File path :filePath could not be uploaded to. Ensure it is writable to the server.',
    'cannot_get_image_from_url' => 'Get ekki sótt mynd frá :url',
    'cannot_create_thumbs' => 'The server cannot create thumbnails. Please check you have the GD PHP extension installed.',
    'server_upload_limit' => 'The server does not allow uploads of this size. Please try a smaller file size.',
    'server_post_limit' => 'The server cannot receive the provided amount of data. Try again with less data or a smaller file.',
    'uploaded'  => 'The server does not allow uploads of this size. Please try a smaller file size.',

    // Drawing & Images
    'image_upload_error' => 'Villa kom upp við að hlaða upp mynd',
    'image_upload_type_error' => 'Gerð myndar er ógild',
    'image_upload_replace_type' => 'Myndin sem á að nota við útskipti þarf að vera sömu gerðar',
    'image_upload_memory_limit' => 'Failed to handle image upload and/or create thumbnails due to system resource limits.',
    'image_thumbnail_memory_limit' => 'Failed to create image size variations due to system resource limits.',
    'image_gallery_thumbnail_memory_limit' => 'Failed to create gallery thumbnails due to system resource limits.',
    'drawing_data_not_found' => 'Drawing data could not be loaded. The drawing file might no longer exist or you may not have permission to access it.',

    // Attachments
    'attachment_not_found' => 'Viðhengi fannst ekki',
    'attachment_upload_error' => 'An error occurred uploading the attachment file',

    // Pages
    'page_draft_autosave_fail' => 'Failed to save draft. Ensure you have internet connection before saving this page',
    'page_draft_delete_fail' => 'Failed to delete page draft and fetch current page saved content',
    'page_custom_home_deletion' => 'Cannot delete a page while it is set as a homepage',

    // Entities
    'entity_not_found' => 'Entity not found',
    'bookshelf_not_found' => 'Shelf not found',
    'book_not_found' => 'Book not found',
    'page_not_found' => 'Page not found',
    'chapter_not_found' => 'Chapter not found',
    'selected_book_not_found' => 'The selected book was not found',
    'selected_book_chapter_not_found' => 'The selected Book or Chapter was not found',
    'guests_cannot_save_drafts' => 'Guests cannot save drafts',

    // Users
    'users_cannot_delete_only_admin' => 'You cannot delete the only admin',
    'users_cannot_delete_guest' => 'You cannot delete the guest user',
    'users_could_not_send_invite' => 'Could not create user since invite email failed to send',

    // Roles
    'role_cannot_be_edited' => 'This role cannot be edited',
    'role_system_cannot_be_deleted' => 'This role is a system role and cannot be deleted',
    'role_registration_default_cannot_delete' => 'This role cannot be deleted while set as the default registration role',
    'role_cannot_remove_only_admin' => 'This user is the only user assigned to the administrator role. Assign the administrator role to another user before attempting to remove it here.',

    // Comments
    'comment_list' => 'An error occurred while fetching the comments.',
    'cannot_add_comment_to_draft' => 'You cannot add comments to a draft.',
    'comment_add' => 'An error occurred while adding / updating the comment.',
    'comment_delete' => 'An error occurred while deleting the comment.',
    'empty_comment' => 'Cannot add an empty comment.',

    // Error pages
    '404_page_not_found' => 'Page Not Found',
    'sorry_page_not_found' => 'Sorry, The page you were looking for could not be found.',
    'sorry_page_not_found_permission_warning' => 'If you expected this page to exist, you might not have permission to view it.',
    'image_not_found' => 'Fann ekki mynd',
    'image_not_found_subtitle' => 'Myndin sem þú varst að leita að fannst því miður ekki.',
    'image_not_found_details' => 'Ef þú heldur að þessi mynda hafi verið til, þá gæti henni hafa verið eytt.',
    'return_home' => 'Fara á forsíðu',
    'error_occurred' => 'Það kom upp villa',
    'app_down' => ':appName er niðri í augnablikinu',
    'back_soon' => 'Verð komin upp aftur fljótlega.',

    // Import
    'import_zip_cant_read' => 'Gat ekki lesið ZIP skrá.',
    'import_zip_cant_decode_data' => 'Fann ekki ZIP data.json innihald.',
    'import_zip_no_data' => 'ZIP skráin inniheldur ekkert efni.',
    'import_validation_failed' => 'ZIP skráin stóðst ekki staðfestingu og skilaði villu:',
    'import_zip_failed_notification' => 'Gat ekki lesið inn ZIP skrá.',
    'import_perms_books' => 'Þú hefur ekki heimild til að búa til bækur.',
    'import_perms_chapters' => 'Þú hefur ekki heimild til að búa til kafla.',
    'import_perms_pages' => 'Þú hefur ekki heimild til að búa til síður.',
    'import_perms_images' => 'Þú hefur ekki heimild til að búa til myndir.',
    'import_perms_attachments' => 'Þú hefur ekki heimild til að búa til viðhengi.',

    // API errors
    'api_no_authorization_found' => 'Engin auðkenningar tóki fannst í aðgerðinni',
    'api_bad_authorization_format' => 'Auðkenningar tóki fannst með aðgerðinni en snið hans er rangt',
    'api_user_token_not_found' => 'Engin API tóki fannst á móti þessum auðkenningar tóka',
    'api_incorrect_token_secret' => 'Leyndarmálið sem gefið var upp fyrir API tókann er rangt',
    'api_user_no_api_permission' => 'Eigandi API tókans hefur ekki heimild til að gera API köll',
    'api_user_token_expired' => 'Auðkenningar tókin er útrunninn',

    // Settings & Maintenance
    'maintenance_test_email_failure' => 'Villa kom upp viðað reyna senda prufu tölvupóst:',

    // HTTP errors
    'http_ssr_url_no_match' => 'Þetta vistfang stemmir ekki við leyfða SSR biðlara',
];
