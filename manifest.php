<?php
$manifest = array(
    'name' => 'org2_forms',
    'acceptable_sugar_versions' => array(),
    'acceptable_sugar_flavors' => array('CE'),
    'author' => 'Leon.V.Nikitin@pravmail.ru',
    'description' => 'Формы для org2.',
    'is_uninstallable' => true,
    'published_date' => '2018-03-28',
    'type' => 'module',
    'version' => '1.0.2',
    'dependencies' => array(
      array(
       'id_name' => 'org2_contacts',
       'version' => '1.0',
      ),
    ),
);
$installdefs = array(
    'id' => 'org2_forms',
    'copy' => array(
        array(
            'from' => '<basepath>/source/copy',
            'to' => '.'
        ),
    ),

);
