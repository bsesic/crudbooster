<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit88513caef754bb626c23a7bdce3b20ec
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'crocodicstudio\\crudbooster\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'crocodicstudio\\crudbooster\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'crocodicstudio\\crudbooster\\CRUDBoosterServiceProvider' => __DIR__ . '/../..' . '/src/CRUDBoosterServiceProvider.php',
        'crocodicstudio\\crudbooster\\commands\\CrudboosterInstallationCommand' => __DIR__ . '/../..' . '/src/commands/CrudboosterInstallationCommand.php',
        'crocodicstudio\\crudbooster\\commands\\CrudboosterUpdateCommand' => __DIR__ . '/../..' . '/src/commands/CrudboosterUpdateCommand.php',
        'crocodicstudio\\crudbooster\\commands\\Mailqueues' => __DIR__ . '/../..' . '/src/commands/Mailqueues.php',
        'crocodicstudio\\crudbooster\\controllers\\AdminController' => __DIR__ . '/../..' . '/src/controllers/AdminController.php',
        'crocodicstudio\\crudbooster\\controllers\\ApiController' => __DIR__ . '/../..' . '/src/controllers/ApiController.php',
        'crocodicstudio\\crudbooster\\controllers\\ApiCustomController' => __DIR__ . '/../..' . '/src/controllers/ApiCustomController.php',
        'crocodicstudio\\crudbooster\\controllers\\CBController' => __DIR__ . '/../..' . '/src/controllers/CBController.php',
        'crocodicstudio\\crudbooster\\controllers\\Controller' => __DIR__ . '/../..' . '/src/controllers/Controller.php',
        'crocodicstudio\\crudbooster\\controllers\\EmailTemplatesController' => __DIR__ . '/../..' . '/src/controllers/EmailTemplatesController.php',
        'crocodicstudio\\crudbooster\\controllers\\LogsController' => __DIR__ . '/../..' . '/src/controllers/LogsController.php',
        'crocodicstudio\\crudbooster\\controllers\\MenusController' => __DIR__ . '/../..' . '/src/controllers/MenusController.php',
        'crocodicstudio\\crudbooster\\controllers\\ModulsController' => __DIR__ . '/../..' . '/src/controllers/ModulsController.php',
        'crocodicstudio\\crudbooster\\controllers\\NotificationsController' => __DIR__ . '/../..' . '/src/controllers/NotificationsController.php',
        'crocodicstudio\\crudbooster\\controllers\\PrivilegesController' => __DIR__ . '/../..' . '/src/controllers/PrivilegesController.php',
        'crocodicstudio\\crudbooster\\controllers\\SettingsController' => __DIR__ . '/../..' . '/src/controllers/SettingsController.php',
        'crocodicstudio\\crudbooster\\controllers\\StatisticBuilderController' => __DIR__ . '/../..' . '/src/controllers/StatisticBuilderController.php',
        'crocodicstudio\\crudbooster\\controllers\\ThumbnailController' => __DIR__ . '/../..' . '/src/controllers/ThumbnailController.php',
        'crocodicstudio\\crudbooster\\helpers\\CB' => __DIR__ . '/../..' . '/src/helpers/CB.php',
        'crocodicstudio\\crudbooster\\helpers\\CRUDBooster' => __DIR__ . '/../..' . '/src/helpers/CRUDBooster.php',
        'crocodicstudio\\crudbooster\\middlewares\\CBAuthAPI' => __DIR__ . '/../..' . '/src/middlewares/CBAuthAPI.php',
        'crocodicstudio\\crudbooster\\middlewares\\CBBackend' => __DIR__ . '/../..' . '/src/middlewares/CBBackend.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit88513caef754bb626c23a7bdce3b20ec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit88513caef754bb626c23a7bdce3b20ec::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit88513caef754bb626c23a7bdce3b20ec::$classMap;

        }, null, ClassLoader::class);
    }
}