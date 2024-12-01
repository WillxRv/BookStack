<?php
/**
 * Text used for 'Entities' (Document Structure Elements) such as
 * Books, Shelves, Chapters & Pages
 */
return [

    // Shared
    'recently_created' => 'Recent Aangemaakt',
    'recently_created_pages' => 'Recent Aangemaakte Pagina\'s',
    'recently_updated_pages' => 'Recent bijgewerkte pagina\'s',
    'recently_created_chapters' => 'Recent Aangemaakte Hoofdstukken',
    'recently_created_books' => 'Recent Aangemaakte Boeken',
    'recently_created_shelves' => 'Recent Aangemaakte Boekenplanken',
    'recently_update' => 'Recent bijgewerkt',
    'recently_viewed' => 'Recent bekeken',
    'recent_activity' => 'Recente activiteit',
    'create_now' => 'Maak er nu één',
    'revisions' => 'Revisies',
    'meta_revision' => 'Revisie #:revisionCount',
    'meta_created' => 'Gemaakt: :timeLength',
    'meta_created_name' => 'Gemaakt: :timeLength door :user',
    'meta_updated' => 'Bijgewerkt: :timeLength',
    'meta_updated_name' => 'Bijgewerkt: :timeLength door :user',
    'meta_owned_name' => 'Eigendom van :user',
    'meta_reference_count' => 'Gerefereerd door :count item|Gerefereerd door :count items',
    'entity_select' => 'Entiteit selecteren',
    'entity_select_lack_permission' => 'Je hebt niet de vereiste machtiging om dit item te selecteren',
    'images' => 'Afbeeldingen',
    'my_recent_drafts' => 'Mijn recente concepten',
    'my_recently_viewed' => 'Mijn recent bekeken',
    'my_most_viewed_favourites' => 'Mijn meest bekeken favorieten',
    'my_favourites' => 'Mijn favorieten',
    'no_pages_viewed' => 'Je hebt nog geen pagina\'s bekeken',
    'no_pages_recently_created' => 'Er zijn geen recent gemaakte pagina\'s',
    'no_pages_recently_updated' => 'Er zijn geen pagina\'s recent bijgewerkt',
    'export' => 'Exporteer',
    'export_html' => 'Ingesloten webbestand',
    'export_pdf' => 'PDF bestand',
    'export_text' => 'Normaal tekstbestand',
    'export_md' => 'Markdown bestand',
    'export_zip' => 'Portable ZIP',
    'default_template' => 'Standaard Paginasjabloon',
    'default_template_explain' => 'Ken een paginasjabloon toe die zal worden gebruikt als de standaardinhoud voor alle pagina\'s die binnen dit item worden aangemaakt. Houd er rekening mee dat dit alleen zal worden gebruikt als de paginamaker leesrechten heeft voor de gekozen sjabloonpagina.',
    'default_template_select' => 'Selecteer een sjabloonpagina',
    'import' => 'Import',
    'import_validate' => 'Validate Import',
    'import_desc' => 'Import books, chapters & pages using a portable zip export from the same, or a different, instance. Select a ZIP file to proceed. After the file has been uploaded and validated you\'ll be able to configure & confirm the import in the next view.',
    'import_zip_select' => 'Select ZIP file to upload',
    'import_zip_validation_errors' => 'Errors were detected while validating the provided ZIP file:',
    'import_pending' => 'Pending Imports',
    'import_pending_none' => 'No imports have been started.',
    'import_continue' => 'Continue Import',
    'import_continue_desc' => 'Review the content due to be imported from the uploaded ZIP file. When ready, run the import to add its contents to this system. The uploaded ZIP import file will be automatically removed on successful import.',
    'import_details' => 'Import Details',
    'import_run' => 'Run Import',
    'import_size' => ':size Import ZIP Size',
    'import_uploaded_at' => 'Uploaded :relativeTime',
    'import_uploaded_by' => 'Uploaded by',
    'import_location' => 'Import Location',
    'import_location_desc' => 'Select a target location for your imported content. You\'ll need the relevant permissions to create within the location you choose.',
    'import_delete_confirm' => 'Are you sure you want to delete this import?',
    'import_delete_desc' => 'This will delete the uploaded import ZIP file, and cannot be undone.',
    'import_errors' => 'Import Errors',
    'import_errors_desc' => 'The follow errors occurred during the import attempt:',

    // Permissions and restrictions
    'permissions' => 'Machtigingen',
    'permissions_desc' => 'Stel hier machtigingen in om de standaardmachtigingen van gebruikersrollen te overschrijven.',
    'permissions_book_cascade' => 'Machtigingen voor boeken worden automatisch doorgegeven aan hoofdstukken en pagina\'s, tenzij deze hun eigen machtigingen hebben.',
    'permissions_chapter_cascade' => 'Machtigingen ingesteld op hoofdstukken zullen automatisch worden doorgegeven aan onderliggende pagina\'s, tenzij deze hun eigen machtigingen hebben.',
    'permissions_save' => 'Machtigingen opslaan',
    'permissions_owner' => 'Eigenaar',
    'permissions_role_everyone_else' => 'De rest',
    'permissions_role_everyone_else_desc' => 'Stel machtigingen in voor alle rollen die niet specifiek overschreven zijn.',
    'permissions_role_override' => 'Overschrijf machtigingen voor rol',
    'permissions_inherit_defaults' => 'Standaardwaarden overnemen',

    // Search
    'search_results' => 'Zoekresultaten',
    'search_total_results_found' => ':count resultaten gevonden|totaal :count resultaten gevonden',
    'search_clear' => 'Zoekopdracht wissen',
    'search_no_pages' => 'Geen pagina\'s gevonden die overeenkomen met deze zoekopdracht',
    'search_for_term' => 'Zoeken op :term',
    'search_more' => 'Meer resultaten',
    'search_advanced' => 'Uitgebreid zoeken',
    'search_terms' => 'Zoektermen',
    'search_content_type' => 'Inhoudstype',
    'search_exact_matches' => 'Exacte overeenkomsten',
    'search_tags' => 'Label Zoekopdrachten',
    'search_options' => 'Opties',
    'search_viewed_by_me' => 'Bekeken door mij',
    'search_not_viewed_by_me' => 'Niet bekeken door mij',
    'search_permissions_set' => 'Machtigingen ingesteld',
    'search_created_by_me' => 'Door mij gemaakt',
    'search_updated_by_me' => 'Door mij bijgewerkt',
    'search_owned_by_me' => 'Eigendom van mij',
    'search_date_options' => 'Datum opties',
    'search_updated_before' => 'Bijgewerkt voor',
    'search_updated_after' => 'Bijgewerkt na',
    'search_created_before' => 'Gemaakt voor',
    'search_created_after' => 'Gemaakt na',
    'search_set_date' => 'Stel datum in',
    'search_update' => 'Update zoekresultaten',

    // Shelves
    'shelf' => 'Boekenplank',
    'shelves' => 'Boekenplanken',
    'x_shelves' => ':count Boekenplank|:count Boekenplanken',
    'shelves_empty' => 'Er zijn geen boekenplanken gemaakt',
    'shelves_create' => 'Nieuwe boekenplank maken',
    'shelves_popular' => 'Populaire boekenplanken',
    'shelves_new' => 'Nieuwe boekenplanken',
    'shelves_new_action' => 'Nieuwe boekenplank',
    'shelves_popular_empty' => 'Hier worden de meest populaire boekenplanken weergegeven.',
    'shelves_new_empty' => 'Hier worden de meest recent gemaakte boekenplanken weergegeven.',
    'shelves_save' => 'Boekenplank opslaan',
    'shelves_books' => 'Boeken op deze plank',
    'shelves_add_books' => 'Voeg boeken toe aan deze plank',
    'shelves_drag_books' => 'Sleep boeken hieronder om ze toe te voegen aan deze boekenplank',
    'shelves_empty_contents' => 'Aan deze plank zijn geen boeken toegewezen',
    'shelves_edit_and_assign' => 'Bewerk boekenplank om boeken toe te wijzen',
    'shelves_edit_named' => 'Bewerk Boekenplank :name',
    'shelves_edit' => 'Bewerk Boekenplank',
    'shelves_delete' => 'Verwijder Boekenplank',
    'shelves_delete_named' => 'Verwijder Boekenplank :name',
    'shelves_delete_explain' => "Dit zal de boekenplank met de naam ':naam' verwijderen. Boeken die op deze plank staan worden echter niet verwijderd.",
    'shelves_delete_confirmation' => 'Weet je zeker dat je deze boekenplank wilt verwijderen?',
    'shelves_permissions' => 'Boekenplank Machtigingen',
    'shelves_permissions_updated' => 'Boekenplank Machtigingen Bijgewerkt',
    'shelves_permissions_active' => 'Machtigingen op Boekenplank Actief',
    'shelves_permissions_cascade_warning' => 'De ingestelde machtigingen op deze boekenplank worden niet automatisch toegepast op de boeken van deze boekenplank. Dit is omdat een boek toegekend kan worden op meerdere boekenplanken. De machtigingen van deze boekenplank kunnen echter wel gekopieerd worden naar de boeken van deze boekenplank via de optie hieronder.',
    'shelves_permissions_create' => '\'Maak boekenplank\' machtigingen worden enkel gebruikt om machtigingen te kopiëren naar boeken binnenin een boekenplank door gebruik te maken van onderstaande actie. Deze machtigingen laten niet toe om een nieuw boek aan te maken.',
    'shelves_copy_permissions_to_books' => 'Kopieer Machtigingen naar Boeken',
    'shelves_copy_permissions' => 'Kopieer Machtigingen',
    'shelves_copy_permissions_explain' => 'Met deze actie worden de machtigingen van deze boekenplank gekopieerd naar alle boeken van deze boekenplank. Voor je deze actie uitvoert, moet je ervoor zorgen dat alle wijzigingen in de machtigingen van deze boekenplank zijn opgeslagen.',
    'shelves_copy_permission_success' => 'Boekenplank machtigingen gekopieerd naar :count boeken',

    // Books
    'book' => 'Boek',
    'books' => 'Boeken',
    'x_books' => ':count Boek|:count Boeken',
    'books_empty' => 'Er zijn geen boeken aangemaakt',
    'books_popular' => 'Populaire boeken',
    'books_recent' => 'Recente boeken',
    'books_new' => 'Nieuwe boeken',
    'books_new_action' => 'Nieuw boek',
    'books_popular_empty' => 'Hier worden de meest populaire boeken weergegeven.',
    'books_new_empty' => 'Hier worden de meest recent gemaakte boeken weergegeven.',
    'books_create' => 'Nieuw boek maken',
    'books_delete' => 'Boek verwijderen',
    'books_delete_named' => 'Verwijder boek :bookName',
    'books_delete_explain' => 'Deze actie verwijdert het boek \':bookName\', Alle pagina\'s en hoofdstukken worden verwijderd.',
    'books_delete_confirmation' => 'Weet je zeker dat je dit boek wilt verwijderen?',
    'books_edit' => 'Boek bewerken',
    'books_edit_named' => 'Bewerk boek :bookName',
    'books_form_book_name' => 'Boek naam',
    'books_save' => 'Boek opslaan',
    'books_permissions' => 'Boek machtigingen',
    'books_permissions_updated' => 'Boek Machtigingen Bijgewerkt',
    'books_empty_contents' => 'Er zijn nog geen hoofdstukken en pagina\'s voor dit boek gemaakt.',
    'books_empty_create_page' => 'Nieuwe pagina maken',
    'books_empty_sort_current_book' => 'Boek sorteren',
    'books_empty_add_chapter' => 'Hoofdstuk toevoegen',
    'books_permissions_active' => 'Machtigingen op Boek Actief',
    'books_search_this' => 'Zoeken in dit boek',
    'books_navigation' => 'Boek navigatie',
    'books_sort' => 'Inhoud van het boek sorteren',
    'books_sort_desc' => 'Verplaats hoofdstukken en pagina\'s binnen een boek om de inhoud te reorganiseren. Andere boeken kunnen worden toegevoegd, waardoor het eenvoudig wordt om hoofdstukken en pagina\'s tussen boeken te verplaatsen.',
    'books_sort_named' => 'Sorteer boek :bookName',
    'books_sort_name' => 'Sorteren op naam',
    'books_sort_created' => 'Sorteren op datum van aanmaken',
    'books_sort_updated' => 'Sorteren op datum van bijgewerkt',
    'books_sort_chapters_first' => 'Hoofdstukken eerst',
    'books_sort_chapters_last' => 'Hoofdstukken laatst',
    'books_sort_show_other' => 'Bekijk andere boeken',
    'books_sort_save' => 'Nieuwe volgorde opslaan',
    'books_sort_show_other_desc' => 'Voeg hier andere boeken toe om ze op te nemen in de sortering, en om een gemakkelijke reorganisatie van boeken mogelijk te maken.',
    'books_sort_move_up' => 'Verplaats naar boven',
    'books_sort_move_down' => 'Verplaats naar beneden',
    'books_sort_move_prev_book' => 'Verplaats naar het vorige boek',
    'books_sort_move_next_book' => 'Verplaats naar het volgende boek',
    'books_sort_move_prev_chapter' => 'Verplaats naar het vorige hoofdstuk',
    'books_sort_move_next_chapter' => 'Verplaats naar het volgende hoofdstuk',
    'books_sort_move_book_start' => 'Verplaats naar het begin van het boek',
    'books_sort_move_book_end' => 'Verplaats naar het einde van het boek',
    'books_sort_move_before_chapter' => 'Verplaats naar vóór het hoofdstuk',
    'books_sort_move_after_chapter' => 'Verplaats naar áchter het hoofdstuk',
    'books_copy' => 'Kopieer Boek',
    'books_copy_success' => 'Boek succesvol gekopieerd',

    // Chapters
    'chapter' => 'Hoofdstuk',
    'chapters' => 'Hoofdstukken',
    'x_chapters' => ':count Hoofdstuk|:count Hoofdstukken',
    'chapters_popular' => 'Populaire hoofdstukken',
    'chapters_new' => 'Nieuw hoofdstuk',
    'chapters_create' => 'Nieuw hoofdstuk maken',
    'chapters_delete' => 'Hoofdstuk verwijderen',
    'chapters_delete_named' => 'Verwijder hoofdstuk :chapterName',
    'chapters_delete_explain' => 'Dit verwijdert het hoofdstuk met de naam \':chapterName\'. Alle pagina\'s in dit hoofdstuk zullen ook worden verwijderd.',
    'chapters_delete_confirm' => 'Weet je zeker dat je dit hoofdstuk wilt verwijderen?',
    'chapters_edit' => 'Hoofdstuk aanpassen',
    'chapters_edit_named' => 'Hoofdstuk :chapterName aanpassen',
    'chapters_save' => 'Hoofdstuk opslaan',
    'chapters_move' => 'Hoofdstuk verplaatsen',
    'chapters_move_named' => 'Verplaatst hoofdstuk :chapterName',
    'chapters_copy' => 'Kopieer Hoofdstuk',
    'chapters_copy_success' => 'Hoofdstuk succesvol gekopieerd',
    'chapters_permissions' => 'Hoofdstuk Machtigingen',
    'chapters_empty' => 'Er zijn geen pagina\'s in dit hoofdstuk aangemaakt.',
    'chapters_permissions_active' => 'Hoofdstuk Machtigingen Actief',
    'chapters_permissions_success' => 'Hoofdstuk Machtigingen Bijgewerkt',
    'chapters_search_this' => 'Zoek in dit hoofdstuk',
    'chapter_sort_book' => 'Sorteer Boek',

    // Pages
    'page' => 'Pagina',
    'pages' => 'Pagina\'s',
    'x_pages' => ':count Pagina|:count Pagina\'s',
    'pages_popular' => 'Populaire pagina\'s',
    'pages_new' => 'Nieuwe pagina',
    'pages_attachments' => 'Bijlages',
    'pages_navigation' => 'Pagina navigatie',
    'pages_delete' => 'Pagina verwijderen',
    'pages_delete_named' => 'Verwijder pagina :pageName',
    'pages_delete_draft_named' => 'Verwijder concept pagina :pageName',
    'pages_delete_draft' => 'Verwijder concept pagina',
    'pages_delete_success' => 'Pagina verwijderd',
    'pages_delete_draft_success' => 'Concept verwijderd',
    'pages_delete_warning_template' => 'Deze pagina wordt actief gebruikt als standaardsjabloon voor een boek of hoofdstuk. Nadat deze pagina is verwijderd, zullen deze boeken of hoofdstukken geen standaardsjabloon meer toegewezen hebben.',
    'pages_delete_confirm' => 'Weet je zeker dat je deze pagina wilt verwijderen?',
    'pages_delete_draft_confirm' => 'Weet je zeker dat je dit concept wilt verwijderen?',
    'pages_editing_named' => 'Pagina :pageName aan het bewerken',
    'pages_edit_draft_options' => 'Concept opties',
    'pages_edit_save_draft' => 'Concept opslaan',
    'pages_edit_draft' => 'Paginaconcept bewerken',
    'pages_editing_draft' => 'Concept bewerken',
    'pages_editing_page' => 'Concept bewerken',
    'pages_edit_draft_save_at' => 'Concept opgeslagen op ',
    'pages_edit_delete_draft' => 'Concept verwijderen',
    'pages_edit_delete_draft_confirm' => 'Weet je zeker dat je de wijzigingen in je concept wilt verwijderen? Al je wijzigingen sinds de laatste succesvolle bewaring gaan verloren en de editor wordt bijgewerkt met de meest recente niet-concept versie van de pagina.',
    'pages_edit_discard_draft' => 'Concept verwijderen',
    'pages_edit_switch_to_markdown' => 'Schakel naar de Markdown Bewerker',
    'pages_edit_switch_to_markdown_clean' => '(Opgeschoonde Inhoud)',
    'pages_edit_switch_to_markdown_stable' => '(Stabiele Inhoud)',
    'pages_edit_switch_to_wysiwyg' => 'Schakel naar de WYSIWYG Bewerker',
    'pages_edit_switch_to_new_wysiwyg' => 'Schakel naar de nieuwe WYSIWYG',
    'pages_edit_switch_to_new_wysiwyg_desc' => '(In Alfa-testfase)',
    'pages_edit_set_changelog' => 'Logboek instellen',
    'pages_edit_enter_changelog_desc' => 'Geef een korte omschrijving van de wijzigingen die je gemaakt hebt',
    'pages_edit_enter_changelog' => 'Voeg toe aan logboek',
    'pages_editor_switch_title' => 'Schakel Bewerker',
    'pages_editor_switch_are_you_sure' => 'Weet je zeker dat je de bewerker voor deze pagina wilt wijzigen?',
    'pages_editor_switch_consider_following' => 'Houd rekening met het volgende als u van bewerker verandert:',
    'pages_editor_switch_consideration_a' => 'Eenmaal opgeslagen, zal de nieuwe bewerker keuze gebruikt worden door alle toekomstige gebruikers, ook diegene die zelf niet van bewerker type kunnen veranderen.',
    'pages_editor_switch_consideration_b' => 'Dit kan mogelijks tot een verlies van detail en syntax leiden in bepaalde omstandigheden.',
    'pages_editor_switch_consideration_c' => 'De veranderingen aan Labels of aan het wijzigingslogboek, sinds de laatste keer opslaan, zullen niet behouden blijven met deze wijziging.',
    'pages_save' => 'Pagina opslaan',
    'pages_title' => 'Pagina titel',
    'pages_name' => 'Pagina naam',
    'pages_md_editor' => 'Bewerker',
    'pages_md_preview' => 'Voorbeeld',
    'pages_md_insert_image' => 'Afbeelding invoegen',
    'pages_md_insert_link' => 'Entiteit link invoegen',
    'pages_md_insert_drawing' => 'Tekening invoegen',
    'pages_md_show_preview' => 'Toon voorbeeld',
    'pages_md_sync_scroll' => 'Synchroniseer scrollen van voorbeeld',
    'pages_drawing_unsaved' => 'Niet-opgeslagen Tekening Gevonden',
    'pages_drawing_unsaved_confirm' => 'Er zijn niet-opgeslagen tekeninggegevens gevonden van een eerdere mislukte poging om de tekening op te slaan. Wil je deze niet-opgeslagen tekening herstellen en verder bewerken?',
    'pages_not_in_chapter' => 'Pagina is niet in een hoofdstuk',
    'pages_move' => 'Pagina verplaatsten',
    'pages_copy' => 'Pagina kopiëren',
    'pages_copy_desination' => 'Kopieër bestemming',
    'pages_copy_success' => 'Pagina succesvol gekopieerd',
    'pages_permissions' => 'Pagina Machtigingen',
    'pages_permissions_success' => 'Pagina machtigingen bijgewerkt',
    'pages_revision' => 'Revisie',
    'pages_revisions' => 'Pagina revisies',
    'pages_revisions_desc' => 'Hieronder staan alle vorige versies van deze pagina. Je kunt oude paginaversies terugkijken, vergelijken en herstellen indien de rechten dit toelaten. De volledige geschiedenis van de pagina wordt hier mogelijk niet volledig weergegeven omdat, afhankelijk van de systeemconfiguratie, oude versies al automatisch verwijderd kunnen zijn.',
    'pages_revisions_named' => 'Pagina revisies voor :pageName',
    'pages_revision_named' => 'Pagina revisie voor :pageName',
    'pages_revision_restored_from' => 'Hersteld van #:id; :samenvatting',
    'pages_revisions_created_by' => 'Gemaakt door',
    'pages_revisions_date' => 'Revisiedatum',
    'pages_revisions_number' => '#',
    'pages_revisions_sort_number' => 'Versie Nummer',
    'pages_revisions_numbered' => 'Revisie #:id',
    'pages_revisions_numbered_changes' => 'Revisie #:id wijzigingen',
    'pages_revisions_editor' => 'Bewerker Type',
    'pages_revisions_changelog' => 'Logboek',
    'pages_revisions_changes' => 'Wijzigingen',
    'pages_revisions_current' => 'Huidige versie',
    'pages_revisions_preview' => 'Voorbeeld',
    'pages_revisions_restore' => 'Herstellen',
    'pages_revisions_none' => 'Deze pagina heeft geen revisies',
    'pages_copy_link' => 'Link kopiëren',
    'pages_edit_content_link' => 'Ga naar sectie in bewerker',
    'pages_pointer_enter_mode' => 'Open selectiemodus per onderdeel',
    'pages_pointer_label' => 'Pagina Onderdeel Opties',
    'pages_pointer_permalink' => 'Pagina Onderdeel Permalink',
    'pages_pointer_include_tag' => 'Pagina Onderdeel Tag Toevoeging',
    'pages_pointer_toggle_link' => 'Permalink modus, Druk om Tag Toevoeging te tonen',
    'pages_pointer_toggle_include' => 'Tag Toevoeging modus, Druk om Permalink te tonen',
    'pages_permissions_active' => 'Pagina Machtigingen Actief',
    'pages_initial_revision' => 'Eerste publicatie',
    'pages_references_update_revision' => 'Automatische systeemupdate van interne links',
    'pages_initial_name' => 'Nieuwe pagina',
    'pages_editing_draft_notification' => 'U bewerkt momenteel een concept dat voor het laatst is opgeslagen op :timeDiff.',
    'pages_draft_edited_notification' => 'Deze pagina is sindsdien bijgewerkt. Het wordt aanbevolen dat je dit concept verwijderd.',
    'pages_draft_page_changed_since_creation' => 'Deze pagina is bijgewerkt sinds het aanmaken van dit concept. Het wordt aanbevolen dat u dit concept verwijdert of ervoor zorgt dat u wijzigingen op de pagina niet overschrijft.',
    'pages_draft_edit_active' => [
        'start_a' => ':count gebruikers zijn begonnen deze pagina te bewerken',
        'start_b' => ':userName is begonnen met het bewerken van deze pagina',
        'time_a' => 'sinds de laatste pagina-update',
        'time_b' => 'in de laatste :minCount minuten',
        'message' => ':start :time. Let op om elkaars updates niet te overschrijven!',
    ],
    'pages_draft_discarded' => 'Concept verworpen! De bewerker is bijgewerkt met de huidige inhoud van de pagina',
    'pages_draft_deleted' => 'Concept verwijderd! De bewerker is bijgewerkt met de huidige inhoud van de pagina',
    'pages_specific' => 'Specifieke pagina',
    'pages_is_template' => 'Paginasjabloon',

    // Editor Sidebar
    'toggle_sidebar' => 'Zijbalk Tonen/Verbergen',
    'page_tags' => 'Pagina Labels',
    'chapter_tags' => 'Hoofdstuk Labels',
    'book_tags' => 'Boek Labels',
    'shelf_tags' => 'Boekenplank Labels',
    'tag' => 'Label',
    'tags' =>  'Labels',
    'tags_index_desc' => 'Labels kunnen worden toegepast op inhoud binnen het systeem om een flexibele vorm van categorisering toe te passen. Labels kunnen zowel een sleutel als een waarde hebben, waarbij de waarde optioneel is. Eenmaal toegepast, kan de inhoud worden opgevraagd aan de hand van de naam en de waarde van het label.',
    'tag_name' =>  'Labelnaam',
    'tag_value' => 'Labelwaarde (Optioneel)',
    'tags_explain' => "Voeg enkele labels toe om je inhoud beter te categoriseren.\nJe kunt een waarde aan een label toekennen voor een meer gedetailleerde organisatie.",
    'tags_add' => 'Voeg nog een label toe',
    'tags_remove' => 'Verwijder deze label',
    'tags_usages' => 'Totaal aantal label-toepassingen',
    'tags_assigned_pages' => 'Toegewezen aan pagina\'s',
    'tags_assigned_chapters' => 'Toegewezen aan hoofdstukken',
    'tags_assigned_books' => 'Toegewezen aan boeken',
    'tags_assigned_shelves' => 'Toegewezen aan boekenplanken',
    'tags_x_unique_values' => ':count unieke waarden',
    'tags_all_values' => 'Alle waarden',
    'tags_view_tags' => 'Bekijk Labels',
    'tags_view_existing_tags' => 'Bekijk bestaande labels',
    'tags_list_empty_hint' => 'Labels kunnen worden toegekend via de zijbalk van de pagina-bewerker of tijdens het bewerken van de details van een boek, hoofdstuk of boekenplank.',
    'attachments' => 'Bijlages',
    'attachments_explain' => 'Upload bijlages of voeg een link toe. Deze worden zichtbaar in het navigatiepaneel.',
    'attachments_explain_instant_save' => 'Wijzigingen worden meteen opgeslagen.',
    'attachments_upload' => 'Bestand uploaden',
    'attachments_link' => 'Link toevoegen',
    'attachments_upload_drop' => 'Je kan ook een bestand hiernaartoe slepen om het als bijlage te uploaden.',
    'attachments_set_link' => 'Zet link',
    'attachments_delete' => 'Weet je zeker dat je deze bijlage wilt verwijderen?',
    'attachments_dropzone' => 'Sleep hier de bestanden naar toe',
    'attachments_no_files' => 'Er zijn geen bestanden geüpload',
    'attachments_explain_link' => 'Je kunt een hyperlink toevoegen als je geen bestanden wilt uploaden. Dit kan een link naar een andere pagina op deze website zijn, maar ook een link naar een andere website.',
    'attachments_link_name' => 'Link naam',
    'attachment_link' => 'Bijlage link',
    'attachments_link_url' => 'Hyperlink naar bestand',
    'attachments_link_url_hint' => 'URL van site of bestand',
    'attach' => 'Toevoegen',
    'attachments_insert_link' => 'Bijlage hyperlink toevoegen aan pagina',
    'attachments_edit_file' => 'Bestand bewerken',
    'attachments_edit_file_name' => 'Bestandsnaam',
    'attachments_edit_drop_upload' => 'Sleep een bestand of klik hier om te uploaden en te overschrijven',
    'attachments_order_updated' => 'De volgorde van de bijlages is bijgewerkt',
    'attachments_updated_success' => 'Bijlage details bijgewerkt',
    'attachments_deleted' => 'Bijlage verwijderd',
    'attachments_file_uploaded' => 'Bestand succesvol geüpload',
    'attachments_file_updated' => 'Bestand succesvol bijgewerkt',
    'attachments_link_attached' => 'Hyperlink succesvol gekoppeld aan de pagina',
    'templates' => 'Sjablonen',
    'templates_set_as_template' => 'Pagina is een sjabloon',
    'templates_explain_set_as_template' => 'Je kan deze pagina als sjabloon instellen zodat de inhoud gebruikt kan worden bij het maken van andere pagina\'s. Andere gebruikers kunnen dit sjabloon gebruiken als ze de machtiging hebben voor deze pagina.',
    'templates_replace_content' => 'Pagina-inhoud vervangen',
    'templates_append_content' => 'Toevoegen aan pagina-inhoud',
    'templates_prepend_content' => 'Voeg vooraan toe aan pagina-inhoud',

    // Profile View
    'profile_user_for_x' => 'Lid sinds :time',
    'profile_created_content' => 'Gemaakte Inhoud',
    'profile_not_created_pages' => ':userName heeft geen pagina\'s gemaakt',
    'profile_not_created_chapters' => ':userName heeft geen hoofdstukken gemaakt',
    'profile_not_created_books' => ':userName heeft geen boeken gemaakt',
    'profile_not_created_shelves' => ':userName heeft geen boekenplanken gemaakt',

    // Comments
    'comment' => 'Reactie',
    'comments' => 'Reacties',
    'comment_add' => 'Reactie toevoegen',
    'comment_placeholder' => 'Laat hier een reactie achter',
    'comment_count' => '{0} Geen reacties|{1} 1 Reactie|[2,*] :count Reacties',
    'comment_save' => 'Sla reactie op',
    'comment_new' => 'Nieuwe reactie',
    'comment_created' => 'reactie gegeven :createDiff',
    'comment_updated' => 'Updatet :updateDiff door :username',
    'comment_updated_indicator' => 'Bijgewerkt',
    'comment_deleted_success' => 'Reactie verwijderd',
    'comment_created_success' => 'Reactie toegevoegd',
    'comment_updated_success' => 'Reactie bijgewerkt',
    'comment_delete_confirm' => 'Weet je zeker dat je deze reactie wilt verwijderen?',
    'comment_in_reply_to' => 'Als antwoord op :commentId',
    'comment_editor_explain' => 'Hier zijn de opmerkingen die zijn achtergelaten op deze pagina. Opmerkingen kunnen worden toegevoegd en beheerd wanneer u de opgeslagen pagina bekijkt.',

    // Revision
    'revision_delete_confirm' => 'Weet je zeker dat je deze revisie wilt verwijderen?',
    'revision_restore_confirm' => 'Weet je zeker dat je deze revisie wilt herstellen? De huidige pagina-inhoud wordt vervangen.',
    'revision_cannot_delete_latest' => 'Kan de laatste revisie niet verwijderen.',

    // Copy view
    'copy_consider' => 'Houd rekening met het onderstaande wanneer u inhoud kopieert.',
    'copy_consider_permissions' => 'Aangepaste machtigingsinstellingen worden niet gekopieerd.',
    'copy_consider_owner' => 'Je wordt de eigenaar van alle gekopieerde inhoud.',
    'copy_consider_images' => 'Afbeeldingsbestanden worden niet gedupliceerd & de originele afbeeldingen behouden hun koppeling met de pagina waarop ze oorspronkelijk werden geüpload.',
    'copy_consider_attachments' => 'Pagina bijlagen worden niet gekopieerd.',
    'copy_consider_access' => 'Een verandering van locatie, eigenaar of machtigingen kan ertoe leiden dat deze inhoud toegankelijk wordt voor personen die eerder geen toegang hadden.',

    // Conversions
    'convert_to_shelf' => 'Converteer naar Boekenplank',
    'convert_to_shelf_contents_desc' => 'Je kunt dit boek converteren naar een nieuwe boekenplank met dezelfde inhoud. Hoofdstukken in dit boek zullen worden geconverteerd naar nieuwe boeken. Als dit boek pagina\'s bevat, die niet in een hoofdstuk staan, zal dit boek een nieuwe naam krijgen en deze pagina\'s bevatten, en zal dit boek deel gaan uitmaken van de nieuwe boekenplank.',
    'convert_to_shelf_permissions_desc' => 'Elke machtiging ingesteld op dit boek zal gekopieerd worden naar de nieuwe boekenplank en naar alle nieuwe onderliggende boeken die geen eigen machtiging hebben afgedwongen. Merk op dat boekenplank-machtigingen niet automatisch overdragen naar inhoud binnenin de boekenplank, zoals dat wel gebeurd bij boeken.',
    'convert_book' => 'Converteer Boek',
    'convert_book_confirm' => 'Weet je zeker dat je dit boek wil converteren?',
    'convert_undo_warning' => 'Dit kan niet eenvoudig ongedaan gemaakt worden.',
    'convert_to_book' => 'Converteer naar Boek',
    'convert_to_book_desc' => 'Je kan dit hoofdstuk converteren naar een nieuw boek met dezelfde inhoud. Alle machtigingen ingesteld op dit hoofdstuk zullen worden gekopieerd naar het nieuwe boek, maar alle geërfde machtigingen, van het bovenliggende boek, zullen niet worden gekopieerd, wat kan leiden tot een wijziging van de toegangscontrole.',
    'convert_chapter' => 'Converteer Hoofdstuk',
    'convert_chapter_confirm' => 'Weet je zeker dat je dit hoofdstuk wil converteren?',

    // References
    'references' => 'Verwijzingen',
    'references_none' => 'Er zijn geen verwijzingen naar dit item bijgehouden.',
    'references_to_desc' => 'Hieronder staat alle bekende inhoud in het systeem die gekoppeld is aan dit item.',

    // Watch Options
    'watch' => 'Volg',
    'watch_title_default' => 'Standaard Voorkeuren',
    'watch_desc_default' => 'Terugkeren naar alleen je standaardvoorkeuren voor meldingen.',
    'watch_title_ignore' => 'Negeer',
    'watch_desc_ignore' => 'Negeer alle meldingen, inclusief die van voorkeuren op gebruikersniveau.',
    'watch_title_new' => 'Nieuwe pagina\'s',
    'watch_desc_new' => 'Geef een melding wanneer er een nieuwe pagina wordt gemaakt binnen dit item.',
    'watch_title_updates' => 'Alle pagina updates',
    'watch_desc_updates' => 'Geef een melding van alle nieuwe pagina\'s en pagina wijzigingen.',
    'watch_desc_updates_page' => 'Geef een melding van pagina wijzigingen.',
    'watch_title_comments' => 'Alle Pagina Updates & Opmerkingen',
    'watch_desc_comments' => 'Geef een melding van alle nieuwe pagina\'s, pagina wijzigingen en nieuwe opmerkingen.',
    'watch_desc_comments_page' => 'Geef een melding van pagina wijzigingen en nieuwe opmerkingen.',
    'watch_change_default' => 'Standaardvoorkeuren voor meldingen wijzigen',
    'watch_detail_ignore' => 'Meldingen negeren',
    'watch_detail_new' => 'Op de uitkijk voor nieuwe pagina\'s',
    'watch_detail_updates' => 'Op de uitkijk voor nieuwe pagina\'s en aanpassingen',
    'watch_detail_comments' => 'Op de uitkijk voor nieuwe pagina\'s, aanpassingen en opmerkingen',
    'watch_detail_parent_book' => 'Op de uitkijk via hogerliggend boek',
    'watch_detail_parent_book_ignore' => 'Aan het negeren via hogerliggend boek',
    'watch_detail_parent_chapter' => 'Op de uitkijk via hogerliggend hoofdstuk',
    'watch_detail_parent_chapter_ignore' => 'Aan het negeren via hogerliggend hoofdstuk',
];
