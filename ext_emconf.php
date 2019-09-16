<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "persons_example".
 *
 * Auto generated 17-10-2017 09:14
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

/** @noinspection PhpUndefinedVariableInspection */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Persons Example Data',
    'description' => 'Example data for the persons development bundle project',
    'category' => 'plugin',
    'author' => 'Dirk Wenzel',
    'author_email' => 'wenzel@cps-it.de',
    'state' => 'beta',
    'uploadfolder' => '1',
    'createDirs' => '',
    'clearCacheOnLoad' => 0,
    'version' => '0.1.0',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-9.5.99',
            'persons' => '0.6.0-1.99.99'
        ],
    ],
];

