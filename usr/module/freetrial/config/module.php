<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 14-8-19
 * Time: 下午5:11
 */
return array(
    // Module meta
    // 'acl'       =>'acl.php',
    'meta'  => [
        // Module title, required
        'title'         => _a('Freetrial'),
        // Description, for admin, optional
        'description'   => _a('Freetrial'),
        // Version number, required
        'version'       => '0.1',
        // Distribution license, required
        'license'       => 'New BSD',
        // Logo image, for admin, optional
        'logo'          => 'asset/image/logo.jpg',
        // Readme file, for admin, optional
        'readme'        => 'docs/readme.txt',
        // Demo site link, optional
        'demo'          => 'http://demo.pialog.org/demo',
        // Logo icon
        'icon'          => 'fa-code',

        // Module is ready for clone? Default as false
        'clonable'      => true,
    ],
    // Author information
    'author'    => array(
        // Author full name, required
        'Name'      => 'Shixin Song',
        // Email address, optional
        'Email'     => 'songshixin@social-touch.com',
        // Website link, optional
        'Website'   => 'http://pialog.org',
        // Credits and aknowledgement, optional
        'Credits'   => 'Pi Engine Team'
    ),
    // Module dependency: list of module directory names, optional
    'dependency'    => array(
    ),

    'resource' => array(
        'block'         => 'block.php',
        // Database meta
        'database'  => array(
            // SQL schema/data file
            'sqlfile'   => 'sql/mysql.sql',
            'schema'       => array(
                'freetrial'      => 'table',

            ),
        ),

        'maintenance' => array(
            'resource'      => array(

                'block'         => 'block.php',


            ),
        ),



    ),

);