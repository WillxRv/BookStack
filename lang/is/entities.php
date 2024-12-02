<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'Nýlega búið til',
    'recently_created_pages' => 'Nýlega stofnaðar síður',
    'recently_updated_pages' => 'Nýlega uppfærðar síður',
    'recently_created_chapters' => 'Nýlega stofnaðir kaflar',
    'recently_created_books' => 'Nýlega stofnaðar bækur',
    'recently_created_shelves' => 'Nýlega stofnaðar hillur',
    'recently_update' => 'Nýlega uppfært',
    'recently_viewed' => 'Nýlega skoðað',
    'recent_activity' => 'Nýleg virkni',
    'create_now' => 'Búðu til eina núna',
    'revisions' => 'Útgáfur',
    'meta_revision' => 'Úgáfa #:revisionCount',
    'meta_created' => 'Búið til :timeLength',
    'meta_created_name' => 'Búið til :timeLength af :user',
    'meta_updated' => 'Uppfært :timeLength',
    'meta_updated_name' => 'Uppfært :timeLength af :user',
    'meta_owned_name' => 'Eigandi :user',
    'meta_reference_count' => 'Vitnað í af :count item|Vitnað í af :count items',
    'entity_select' => 'Entity Select',
    'entity_select_lack_permission' => 'Þú hefur ekki nauðsynlegar aðgangsheimildir til að velja þetta',
    'images' => 'Myndir',
    'my_recent_drafts' => 'Nýlegur drögin mín',
    'my_recently_viewed' => 'Síðast skoða af mér',
    'my_most_viewed_favourites' => 'Mest skoðuðu eftirlætin',
    'my_favourites' => 'Eftirlætin mín',
    'no_pages_viewed' => 'Þú hefur ekki skoðað neinar síður',
    'no_pages_recently_created' => 'Engar síður hafa verið búnar til nýlega',
    'no_pages_recently_updated' => 'Engar síður hafa verið uppfærðar nýlega',
    'export' => 'Flytja út',
    'export_html' => 'Innifalin vefskrá',
    'export_pdf' => 'PDF skrá',
    'export_text' => 'Venjuleg textaskrá',
    'export_md' => 'Markdown skrá',
    'export_zip' => 'ZIP skrá',
    'default_template' => 'Sjálfgefið síðusnið',
    'default_template_explain' => 'Veldu síðusnið sem verður sjálgefið snið fyrir allar stofnaðar síður innan þessa hluta. Hafðu í huga að þetta verður aðeins notað ef sá sem stofnar síður er með heimild á þetta snið.',
    'default_template_select' => 'Veldu sniðsíðu',
    'import' => 'Flytja inn',
    'import_validate' => 'Staðfesta innflutning',
    'import_desc' => 'Import books, chapters & pages using a portable zip export from the same, or a different, instance. Select a ZIP file to proceed. After the file has been uploaded and validated you\'ll be able to configure & confirm the import in the next view.',
    'import_zip_select' => 'Veldu ZIP skrá til að hlaða upp',
    'import_zip_validation_errors' => 'Greindar voru villur við að staðreyna uppgefina ZIP skrá:',
    'import_pending' => 'Innflutningur í bið',
    'import_pending_none' => 'Ekkert hefur verið flutt inn.',
    'import_continue' => 'Halda áfram að flytja inn',
    'import_continue_desc' => 'Review the content due to be imported from the uploaded ZIP file. When ready, run the import to add its contents to this system. The uploaded ZIP import file will be automatically removed on successful import.',
    'import_details' => 'Nánari lýsing á innflutningi',
    'import_run' => 'Keyra innflutning',
    'import_size' => ':size Stærð ZIP skrár',
    'import_uploaded_at' => 'Uploaded :relativeTime',
    'import_uploaded_by' => 'Upphlaðið af',
    'import_location' => 'Staðsetning innflutnings',
    'import_location_desc' => 'Select a target location for your imported content. You\'ll need the relevant permissions to create within the location you choose.',
    'import_delete_confirm' => 'Ertu viss um að þú viljir eyða þessum innflutningi?',
    'import_delete_desc' => 'Þetta mun eyða innsendri ZIP skrá, þessa aðgerð er ekki hægt að afturkalla.',
    'import_errors' => 'Villur í innflutningi',
    'import_errors_desc' => 'Eftirfarandi villur komu upp við innflutning:',

    // Permissions and restrictions
    'permissions' => 'Réttindi',
    'permissions_desc' => 'Set permissions here to override the default permissions provided by user roles.',
    'permissions_book_cascade' => 'Permissions set on books will automatically cascade to child chapters and pages, unless they have their own permissions defined.',
    'permissions_chapter_cascade' => 'Permissions set on chapters will automatically cascade to child pages, unless they have their own permissions defined.',
    'permissions_save' => 'Vista réttindi',
    'permissions_owner' => 'Eigandi',
    'permissions_role_everyone_else' => 'Allir aðrir',
    'permissions_role_everyone_else_desc' => 'Set permissions for all roles not specifically overridden.',
    'permissions_role_override' => 'Yfirskrifa réttindi fyrir hlutverk',
    'permissions_inherit_defaults' => 'Erfa sjálfgefið',

    // Search
    'search_results' => 'Leitarniðurstöður',
    'search_total_results_found' => ':count result found|:count total results found',
    'search_clear' => 'Hreinsa leit',
    'search_no_pages' => 'Engar síður passa við þessa leit',
    'search_for_term' => 'Leita að :term',
    'search_more' => 'Fleiri niðurstöður',
    'search_advanced' => 'Ítarleg leit',
    'search_terms' => 'Leitarorð',
    'search_content_type' => 'Efnistegund',
    'search_exact_matches' => 'Nákvæm samsvörun',
    'search_tags' => 'Leita í örmerkjum',
    'search_options' => 'Valkostir',
    'search_viewed_by_me' => 'Skoðað af mér',
    'search_not_viewed_by_me' => 'Ekki skoðað af mér',
    'search_permissions_set' => 'Réttindi stillt',
    'search_created_by_me' => 'Búið til af mér',
    'search_updated_by_me' => 'Uppfært af mér',
    'search_owned_by_me' => 'Í minni eigu',
    'search_date_options' => 'Dagsetningarval',
    'search_updated_before' => 'Uppfært fyrir',
    'search_updated_after' => 'Uppfært eftir',
    'search_created_before' => 'Búið til fyrir',
    'search_created_after' => 'Búið til eftir',
    'search_set_date' => 'Dagsetning',
    'search_update' => 'Uppfæra leit',

    // Shelves
    'shelf' => 'Hilla',
    'shelves' => 'Hillur',
    'x_shelves' => ':count Hilla|:count Hillur',
    'shelves_empty' => 'Engar hillur hafa verið búnar til',
    'shelves_create' => 'Búa til hillu',
    'shelves_popular' => 'Vinsælar hillur',
    'shelves_new' => 'Nýjar hillur',
    'shelves_new_action' => 'Ný hilla',
    'shelves_popular_empty' => 'Vinsælustu hillurnar munu birtast hér.',
    'shelves_new_empty' => 'Nýjustu hillurnar munu birtast hér.',
    'shelves_save' => 'Vista hillu',
    'shelves_books' => 'Bækur í þessari hillu',
    'shelves_add_books' => 'Bæta við bókum í þessa hillu',
    'shelves_drag_books' => 'Dragðu bækur hér undir til að bæta þeim í þessa hillu',
    'shelves_empty_contents' => 'Þessi hilla hefur engar bækur',
    'shelves_edit_and_assign' => 'Breyttu hillu til að setja inn bækur',
    'shelves_edit_named' => 'Breyta hillu :name',
    'shelves_edit' => 'Breyta hillu',
    'shelves_delete' => 'Eyða hillu',
    'shelves_delete_named' => 'Eyða hillu :name',
    'shelves_delete_explain' => "Þetta mun eyða hillunni ':name'. Bókum í þessari hillu verður ekki eytt.",
    'shelves_delete_confirmation' => 'Ertu viss um að þú viljir eyða hillunni?',
    'shelves_permissions' => 'Stillingar á réttindum á hillu',
    'shelves_permissions_updated' => 'Réttindi á hillu uppfærð',
    'shelves_permissions_active' => 'Réttindi á hillu virk',
    'shelves_permissions_cascade_warning' => 'Réttindi á hillum yfirfærast ekki á bækurnar sem í hillunni eru. Þetta er vegna þess að ein bók getur verið í mörgum hillum. Réttindi geta hinsvegar verið afrituð niður á bækur með því að nota valmöguleikann hér fyrir neðan.',
    'shelves_permissions_create' => 'Réttindi til að búa til hillu eru aðeins notuð til að afrita réttindi á undirliggjandi bækur með því að nota aðgerðina hér fyrir neðan. Þau stjórna ekki hvort hægt sé að búa til bækur.',
    'shelves_copy_permissions_to_books' => 'Afrita réttindi á bækur',
    'shelves_copy_permissions' => 'Afrita réttindi',
    'shelves_copy_permissions_explain' => 'This will apply the current permission settings of this shelf to all books contained within. Before activating, ensure any changes to the permissions of this shelf have been saved.',
    'shelves_copy_permission_success' => 'Shelf permissions copied to :count books',

    // Books
    'book' => 'Bók',
    'books' => 'Bækur',
    'x_books' => ':count Bók:count Bækur',
    'books_empty' => 'Engar bækur hafa verið búnar til',
    'books_popular' => 'Vinsælar bækur',
    'books_recent' => 'Nýlegar bækur',
    'books_new' => 'Nýjar bækur',
    'books_new_action' => 'Ný bók',
    'books_popular_empty' => 'Vinsælustu bækurnar munu birtast hér.',
    'books_new_empty' => 'The most recently created books will appear here.',
    'books_create' => 'Create New Book',
    'books_delete' => 'Delete Book',
    'books_delete_named' => 'Delete Book :bookName',
    'books_delete_explain' => 'This will delete the book with the name \':bookName\'. All pages and chapters will be removed.',
    'books_delete_confirmation' => 'Are you sure you want to delete this book?',
    'books_edit' => 'Edit Book',
    'books_edit_named' => 'Edit Book :bookName',
    'books_form_book_name' => 'Book Name',
    'books_save' => 'Save Book',
    'books_permissions' => 'Book Permissions',
    'books_permissions_updated' => 'Book Permissions Updated',
    'books_empty_contents' => 'No pages or chapters have been created for this book.',
    'books_empty_create_page' => 'Create a new page',
    'books_empty_sort_current_book' => 'Sort the current book',
    'books_empty_add_chapter' => 'Add a chapter',
    'books_permissions_active' => 'Book Permissions Active',
    'books_search_this' => 'Search this book',
    'books_navigation' => 'Book Navigation',
    'books_sort' => 'Sort Book Contents',
    'books_sort_desc' => 'Move chapters and pages within a book to reorganise its contents. Other books can be added which allows easy moving of chapters and pages between books.',
    'books_sort_named' => 'Sort Book :bookName',
    'books_sort_name' => 'Sort by Name',
    'books_sort_created' => 'Sort by Created Date',
    'books_sort_updated' => 'Sort by Updated Date',
    'books_sort_chapters_first' => 'Chapters First',
    'books_sort_chapters_last' => 'Chapters Last',
    'books_sort_show_other' => 'Show Other Books',
    'books_sort_save' => 'Save New Order',
    'books_sort_show_other_desc' => 'Add other books here to include them in the sort operation, and allow easy cross-book reorganisation.',
    'books_sort_move_up' => 'Move Up',
    'books_sort_move_down' => 'Move Down',
    'books_sort_move_prev_book' => 'Move to Previous Book',
    'books_sort_move_next_book' => 'Move to Next Book',
    'books_sort_move_prev_chapter' => 'Move Into Previous Chapter',
    'books_sort_move_next_chapter' => 'Move Into Next Chapter',
    'books_sort_move_book_start' => 'Move to Start of Book',
    'books_sort_move_book_end' => 'Move to End of Book',
    'books_sort_move_before_chapter' => 'Move to Before Chapter',
    'books_sort_move_after_chapter' => 'Move to After Chapter',
    'books_copy' => 'Afrita bók',
    'books_copy_success' => 'Tókst að afrita bók',

    // Chapters
    'chapter' => 'Kafli',
    'chapters' => 'Kaflar',
    'x_chapters' => ':count Kafli|:count Kaflar',
    'chapters_popular' => 'Vinsælir kaflar',
    'chapters_new' => 'Nýr kafli',
    'chapters_create' => 'Búa til nýjan kafla',
    'chapters_delete' => 'Eyða kafla',
    'chapters_delete_named' => 'Eyða kafla :chapterName',
    'chapters_delete_explain' => 'Þetta mun eyða kafla með nafninu \':chapterName\'. Öllum blaðsíðum í þessum kafla verður einnig eytt.',
    'chapters_delete_confirm' => 'Ertu viss um að þú viljir eyða þessum kafla?',
    'chapters_edit' => 'Breyta kafla',
    'chapters_edit_named' => 'Breyta kafla chapterName',
    'chapters_save' => 'Vista kafla',
    'chapters_move' => 'Færa kafla',
    'chapters_move_named' => 'Færa kalfa :chapterName',
    'chapters_copy' => 'Afrita kafla',
    'chapters_copy_success' => 'Tókst að afrita kafla',
    'chapters_permissions' => 'Réttindi á kafla',
    'chapters_empty' => 'Engar síður eru eins og er í þessum kafla.',
    'chapters_permissions_active' => 'Réttindi á kafla eru virk',
    'chapters_permissions_success' => 'Réttindi á kafla hafa verið uppfærð',
    'chapters_search_this' => 'Leita í þessum kafla',
    'chapter_sort_book' => 'Raða bók',

    // Pages
    'page' => 'Síða',
    'pages' => 'Síður',
    'x_pages' => ':count Síða|:count Síður',
    'pages_popular' => 'Vinsælar síður',
    'pages_new' => 'Ný síða',
    'pages_attachments' => 'Viðhengi',
    'pages_navigation' => 'Síðuráp',
    'pages_delete' => 'Eyða síðu',
    'pages_delete_named' => 'Eyða síðu :pageName',
    'pages_delete_draft_named' => 'Eyða drögum :pageName',
    'pages_delete_draft' => 'Eyða uppkasti',
    'pages_delete_success' => 'Síðu eytt',
    'pages_delete_draft_success' => 'Uppkasti að síðu eytt',
    'pages_delete_warning_template' => 'This page is in active use as a book or chapter default page template. These books or chapters will no longer have a default page template assigned after this page is deleted.',
    'pages_delete_confirm' => 'Ertu viss um að þú viljir eyða þessari síðu?',
    'pages_delete_draft_confirm' => 'Ertu viss um að þú viljir eyða þessu uppkasti að síðu?',
    'pages_editing_named' => 'Editing Page :pageName',
    'pages_edit_draft_options' => 'Draft Options',
    'pages_edit_save_draft' => 'Save Draft',
    'pages_edit_draft' => 'Edit Page Draft',
    'pages_editing_draft' => 'Editing Draft',
    'pages_editing_page' => 'Editing Page',
    'pages_edit_draft_save_at' => 'Draft saved at ',
    'pages_edit_delete_draft' => 'Delete Draft',
    'pages_edit_delete_draft_confirm' => 'Are you sure you want to delete your draft page changes? All of your changes, since the last full save, will be lost and the editor will be updated with the latest page non-draft save state.',
    'pages_edit_discard_draft' => 'Discard Draft',
    'pages_edit_switch_to_markdown' => 'Switch to Markdown Editor',
    'pages_edit_switch_to_markdown_clean' => '(Clean Content)',
    'pages_edit_switch_to_markdown_stable' => '(Stable Content)',
    'pages_edit_switch_to_wysiwyg' => 'Switch to WYSIWYG Editor',
    'pages_edit_switch_to_new_wysiwyg' => 'Switch to new WYSIWYG',
    'pages_edit_switch_to_new_wysiwyg_desc' => '(In Alpha Testing)',
    'pages_edit_set_changelog' => 'Set Changelog',
    'pages_edit_enter_changelog_desc' => 'Enter a brief description of the changes you\'ve made',
    'pages_edit_enter_changelog' => 'Enter Changelog',
    'pages_editor_switch_title' => 'Switch Editor',
    'pages_editor_switch_are_you_sure' => 'Are you sure you want to change the editor for this page?',
    'pages_editor_switch_consider_following' => 'Consider the following when changing editors:',
    'pages_editor_switch_consideration_a' => 'Once saved, the new editor option will be used by any future editors, including those that may not be able to change editor type themselves.',
    'pages_editor_switch_consideration_b' => 'This can potentially lead to a loss of detail and syntax in certain circumstances.',
    'pages_editor_switch_consideration_c' => 'Tag or changelog changes, made since last save, won\'t persist across this change.',
    'pages_save' => 'Save Page',
    'pages_title' => 'Page Title',
    'pages_name' => 'Page Name',
    'pages_md_editor' => 'Editor',
    'pages_md_preview' => 'Preview',
    'pages_md_insert_image' => 'Insert Image',
    'pages_md_insert_link' => 'Insert Entity Link',
    'pages_md_insert_drawing' => 'Insert Drawing',
    'pages_md_show_preview' => 'Show preview',
    'pages_md_sync_scroll' => 'Sync preview scroll',
    'pages_drawing_unsaved' => 'Unsaved Drawing Found',
    'pages_drawing_unsaved_confirm' => 'Unsaved drawing data was found from a previous failed drawing save attempt. Would you like to restore and continue editing this unsaved drawing?',
    'pages_not_in_chapter' => 'Page is not in a chapter',
    'pages_move' => 'Move Page',
    'pages_copy' => 'Copy Page',
    'pages_copy_desination' => 'Copy Destination',
    'pages_copy_success' => 'Page successfully copied',
    'pages_permissions' => 'Page Permissions',
    'pages_permissions_success' => 'Page permissions updated',
    'pages_revision' => 'Revision',
    'pages_revisions' => 'Page Revisions',
    'pages_revisions_desc' => 'Listed below are all the past revisions of this page. You can look back upon, compare, and restore old page versions if permissions allow. The full history of the page may not be fully reflected here since, depending on system configuration, old revisions could be auto-deleted.',
    'pages_revisions_named' => 'Page Revisions for :pageName',
    'pages_revision_named' => 'Page Revision for :pageName',
    'pages_revision_restored_from' => 'Restored from #:id; :summary',
    'pages_revisions_created_by' => 'Created By',
    'pages_revisions_date' => 'Revision Date',
    'pages_revisions_number' => '#',
    'pages_revisions_sort_number' => 'Revision Number',
    'pages_revisions_numbered' => 'Revision #:id',
    'pages_revisions_numbered_changes' => 'Revision #:id Changes',
    'pages_revisions_editor' => 'Editor Type',
    'pages_revisions_changelog' => 'Changelog',
    'pages_revisions_changes' => 'Changes',
    'pages_revisions_current' => 'Current Version',
    'pages_revisions_preview' => 'Preview',
    'pages_revisions_restore' => 'Restore',
    'pages_revisions_none' => 'This page has no revisions',
    'pages_copy_link' => 'Copy Link',
    'pages_edit_content_link' => 'Jump to section in editor',
    'pages_pointer_enter_mode' => 'Enter section select mode',
    'pages_pointer_label' => 'Page Section Options',
    'pages_pointer_permalink' => 'Page Section Permalink',
    'pages_pointer_include_tag' => 'Page Section Include Tag',
    'pages_pointer_toggle_link' => 'Permalink mode, Press to show include tag',
    'pages_pointer_toggle_include' => 'Include tag mode, Press to show permalink',
    'pages_permissions_active' => 'Page Permissions Active',
    'pages_initial_revision' => 'Initial publish',
    'pages_references_update_revision' => 'System auto-update of internal links',
    'pages_initial_name' => 'New Page',
    'pages_editing_draft_notification' => 'You are currently editing a draft that was last saved :timeDiff.',
    'pages_draft_edited_notification' => 'This page has been updated by since that time. It is recommended that you discard this draft.',
    'pages_draft_page_changed_since_creation' => 'This page has been updated since this draft was created. It is recommended that you discard this draft or take care not to overwrite any page changes.',
    'pages_draft_edit_active' => [
        'start_a' => ':count users have started editing this page',
        'start_b' => ':userName has started editing this page',
        'time_a' => 'since the page was last updated',
        'time_b' => 'in the last :minCount minutes',
        'message' => ':start :time. Take care not to overwrite each other\'s updates!',
    ],
    'pages_draft_discarded' => 'Draft discarded! The editor has been updated with the current page content',
    'pages_draft_deleted' => 'Draft deleted! The editor has been updated with the current page content',
    'pages_specific' => 'Specific Page',
    'pages_is_template' => 'Page Template',

    // Editor Sidebar
    'toggle_sidebar' => 'Toggle Sidebar',
    'page_tags' => 'Page Tags',
    'chapter_tags' => 'Chapter Tags',
    'book_tags' => 'Book Tags',
    'shelf_tags' => 'Shelf Tags',
    'tag' => 'Tag',
    'tags' =>  'Tags',
    'tags_index_desc' => 'Tags can be applied to content within the system to apply a flexible form of categorization. Tags can have both a key and value, with the value being optional. Once applied, content can then be queried using the tag name and value.',
    'tag_name' =>  'Tag Name',
    'tag_value' => 'Tag Value (Optional)',
    'tags_explain' => "Add some tags to better categorise your content. \n You can assign a value to a tag for more in-depth organisation.",
    'tags_add' => 'Add another tag',
    'tags_remove' => 'Remove this tag',
    'tags_usages' => 'Total tag usages',
    'tags_assigned_pages' => 'Assigned to Pages',
    'tags_assigned_chapters' => 'Assigned to Chapters',
    'tags_assigned_books' => 'Assigned to Books',
    'tags_assigned_shelves' => 'Assigned to Shelves',
    'tags_x_unique_values' => ':count unique values',
    'tags_all_values' => 'All values',
    'tags_view_tags' => 'View Tags',
    'tags_view_existing_tags' => 'View existing tags',
    'tags_list_empty_hint' => 'Tags can be assigned via the page editor sidebar or while editing the details of a book, chapter or shelf.',
    'attachments' => 'Attachments',
    'attachments_explain' => 'Upload some files or attach some links to display on your page. These are visible in the page sidebar.',
    'attachments_explain_instant_save' => 'Changes here are saved instantly.',
    'attachments_upload' => 'Upload File',
    'attachments_link' => 'Attach Link',
    'attachments_upload_drop' => 'Alternatively you can drag and drop a file here to upload it as an attachment.',
    'attachments_set_link' => 'Set Link',
    'attachments_delete' => 'Are you sure you want to delete this attachment?',
    'attachments_dropzone' => 'Drop files here to upload',
    'attachments_no_files' => 'No files have been uploaded',
    'attachments_explain_link' => 'You can attach a link if you\'d prefer not to upload a file. This can be a link to another page or a link to a file in the cloud.',
    'attachments_link_name' => 'Link Name',
    'attachment_link' => 'Attachment link',
    'attachments_link_url' => 'Link to file',
    'attachments_link_url_hint' => 'Url of site or file',
    'attach' => 'Attach',
    'attachments_insert_link' => 'Add Attachment Link to Page',
    'attachments_edit_file' => 'Edit File',
    'attachments_edit_file_name' => 'File Name',
    'attachments_edit_drop_upload' => 'Drop files or click here to upload and overwrite',
    'attachments_order_updated' => 'Attachment order updated',
    'attachments_updated_success' => 'Attachment details updated',
    'attachments_deleted' => 'Attachment deleted',
    'attachments_file_uploaded' => 'File successfully uploaded',
    'attachments_file_updated' => 'File successfully updated',
    'attachments_link_attached' => 'Link successfully attached to page',
    'templates' => 'Templates',
    'templates_set_as_template' => 'Page is a template',
    'templates_explain_set_as_template' => 'You can set this page as a template so its contents be utilized when creating other pages. Other users will be able to use this template if they have view permissions for this page.',
    'templates_replace_content' => 'Replace page content',
    'templates_append_content' => 'Append to page content',
    'templates_prepend_content' => 'Prepend to page content',

    // Profile View
    'profile_user_for_x' => 'User for :time',
    'profile_created_content' => 'Created Content',
    'profile_not_created_pages' => ':userName has not created any pages',
    'profile_not_created_chapters' => ':userName has not created any chapters',
    'profile_not_created_books' => ':userName has not created any books',
    'profile_not_created_shelves' => ':userName has not created any shelves',

    // Comments
    'comment' => 'Comment',
    'comments' => 'Comments',
    'comment_add' => 'Add Comment',
    'comment_placeholder' => 'Leave a comment here',
    'comment_count' => '{0} No Comments|{1} 1 Comment|[2,*] :count Comments',
    'comment_save' => 'Save Comment',
    'comment_new' => 'New Comment',
    'comment_created' => 'commented :createDiff',
    'comment_updated' => 'Updated :updateDiff by :username',
    'comment_updated_indicator' => 'Updated',
    'comment_deleted_success' => 'Comment deleted',
    'comment_created_success' => 'Comment added',
    'comment_updated_success' => 'Comment updated',
    'comment_delete_confirm' => 'Are you sure you want to delete this comment?',
    'comment_in_reply_to' => 'In reply to :commentId',
    'comment_editor_explain' => 'Here are the comments that have been left on this page. Comments can be added & managed when viewing the saved page.',

    // Revision
    'revision_delete_confirm' => 'Are you sure you want to delete this revision?',
    'revision_restore_confirm' => 'Are you sure you want to restore this revision? The current page contents will be replaced.',
    'revision_cannot_delete_latest' => 'Cannot delete the latest revision.',

    // Copy view
    'copy_consider' => 'Please consider the below when copying content.',
    'copy_consider_permissions' => 'Custom permission settings will not be copied.',
    'copy_consider_owner' => 'You will become the owner of all copied content.',
    'copy_consider_images' => 'Page image files will not be duplicated & the original images will retain their relation to the page they were originally uploaded to.',
    'copy_consider_attachments' => 'Page attachments will not be copied.',
    'copy_consider_access' => 'A change of location, owner or permissions may result in this content being accessible to those previously without access.',

    // Conversions
    'convert_to_shelf' => 'Convert to Shelf',
    'convert_to_shelf_contents_desc' => 'You can convert this book to a new shelf with the same contents. Chapters contained within this book will be converted to new books. If this book contains any pages, that are not in a chapter, this book will be renamed and contain such pages, and this book will become part of the new shelf.',
    'convert_to_shelf_permissions_desc' => 'Any permissions set on this book will be copied to the new shelf and to all new child books that don\'t have their own permissions enforced. Note that permissions on shelves do not auto-cascade to content within, as they do for books.',
    'convert_book' => 'Convert Book',
    'convert_book_confirm' => 'Are you sure you want to convert this book?',
    'convert_undo_warning' => 'This cannot be as easily undone.',
    'convert_to_book' => 'Convert to Book',
    'convert_to_book_desc' => 'You can convert this chapter to a new book with the same contents. Any permissions set on this chapter will be copied to the new book but any inherited permissions, from the parent book, will not be copied which could lead to a change of access control.',
    'convert_chapter' => 'Convert Chapter',
    'convert_chapter_confirm' => 'Are you sure you want to convert this chapter?',

    // References
    'references' => 'References',
    'references_none' => 'There are no tracked references to this item.',
    'references_to_desc' => 'Listed below is all the known content in the system that links to this item.',

    // Watch Options
    'watch' => 'Watch',
    'watch_title_default' => 'Default Preferences',
    'watch_desc_default' => 'Revert watching to just your default notification preferences.',
    'watch_title_ignore' => 'Ignore',
    'watch_desc_ignore' => 'Ignore all notifications, including those from user-level preferences.',
    'watch_title_new' => 'New Pages',
    'watch_desc_new' => 'Notify when any new page is created within this item.',
    'watch_title_updates' => 'All Page Updates',
    'watch_desc_updates' => 'Notify upon all new pages and page changes.',
    'watch_desc_updates_page' => 'Notify upon all page changes.',
    'watch_title_comments' => 'All Page Updates & Comments',
    'watch_desc_comments' => 'Notify upon all new pages, page changes and new comments.',
    'watch_desc_comments_page' => 'Notify upon page changes and new comments.',
    'watch_change_default' => 'Change default notification preferences',
    'watch_detail_ignore' => 'Ignoring notifications',
    'watch_detail_new' => 'Watching for new pages',
    'watch_detail_updates' => 'Watching new pages and updates',
    'watch_detail_comments' => 'Watching new pages, updates & comments',
    'watch_detail_parent_book' => 'Watching via parent book',
    'watch_detail_parent_book_ignore' => 'Ignoring via parent book',
    'watch_detail_parent_chapter' => 'Watching via parent chapter',
    'watch_detail_parent_chapter_ignore' => 'Ignoring via parent chapter',
];
