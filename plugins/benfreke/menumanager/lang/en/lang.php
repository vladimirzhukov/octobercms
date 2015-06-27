<?php

return [
    'plugin' => [
        'name' => 'Menu Manager',
        'description' => 'Plugin to enable management of menus within October CMS.'
    ],
    'menu' => [
        'name' => 'Menus',
        'description' => 'Displays a menu on the page.',
        'editmenu' => 'Edit Menus',
        'reordermenu' => 'Reorder Menus'
    ],
    'misc' => [
        'menu' => 'Menu',
        'newmenu' => 'New Menu',
        'manageorder' => 'Manage Menu Order',
        'returntomenus' => 'Return to Menus'
    ],
    'form' => [
        'create' => 'Create a Menu item',
        'update' => 'Edit a Menu item',
        'preview' => 'Preview Menus',
        'flashcreate' => 'Menu has been created',
        'flashupdate' => 'Menu updated',
        'flashdelete' => 'Menu deleted',
        'manage' => 'Manage Menus'
    ],
    'create' => [
        'menus' => 'Menus',
        'creating' => 'Creating Menu...',
        'create' => 'Create',
        'createclose' => 'Create and Close',
        'cancel' => 'Cancel',
        'or' => 'or',
        'return' => 'Return to menus list',
        'nolink' => 'No page link'
    ],
    'update' => [
        'saving' => 'Saving Menu...',
        'save' => 'Save',
        'saveclose' => 'Save and Close',
        'deleting' => 'Deleting Menu...',
        'reallydelete' => 'Do you really want to delete this menu?'
    ],
    'modeldata' => [
        'title' => 'Title',
        'enabled' => 'Enabled',
        'url' => 'Page linked to',
        'parameters' => 'Parameters',
        'query' => 'Query String',
        'description' => 'Description'
    ],
    'modeldataform' => [
        'title' => 'Title',
        'description' => 'Purpose/Description (optional)',
        'enabled' => 'Enable/disable this link',
        'optdisabled' => 'Disabled',
        'optenabled' => 'Enabled',
        'external' => 'Menu type',
        'selectmenutype' => '-- Select Menu Type --',
        'optinternal' => 'Internal',
        'optexternal' => 'External',
        'internalurl' => 'File to link To',
        'internalurlplaceholder' => '-- Select File to link to --',
        'externalurl' => 'Type external url',
        'externalurlcomment' => 'e.g. http://example.com',
        'linktarget' => 'Open link in',
        'self' => 'In the same tab',
        'blank' => 'In new tab',
        'parameters' => 'Extra URL parameters (JSON) e.g if URL uses "/:slug"',
        'parameterscomment' => '{ "slug" : "my-page-slug" }',
        'querystr' => 'Extra non-OctoberCMS query string parameters (they will be automatically escaped)',
        'querystrcomment' => 'e.g "param1=foo&amp;param2=http://www.google.com"',
        'url' => 'URL'
    ],
    'component' => [
        'start' => [
            'title' => 'Parent Node',
            'description' => 'The parent node to get the children of'
        ],
        'activenode' => [
            'description' => 'The active page. Set to "default" for the current page to be set as active',
            'title' => 'Active Node',
        ],
        'listitemclasses' => [
            'description' => 'Classes to add to the li tag',
            'title' => 'List Item Classes',
        ],
        'primaryclasses' => [
            'description' => 'Classes to add to the primary ul tag',
            'title' => 'Primary Classes',
        ],
        'secondaryclasses' => [
            'title' => 'Secondary Classes',
            'description' => 'The parent node to get the children of'
        ],
        'tertiaryclasses' => [
            'description' => 'Classes to add to the secondary ul tags',
            'title' => 'Tertiary Classes',
        ],
        'numberoflevels' => [
            'description' => 'How many levels of menu to output',
            'title' => 'Depth',
        ]
    ]
];
