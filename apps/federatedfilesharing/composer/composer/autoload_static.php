<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitFederatedFileSharing
{
    public static $prefixLengthsPsr4 = array (
        'O' => 
        array (
            'OCA\\FederatedFileSharing\\' => 25,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'OCA\\FederatedFileSharing\\' => 
        array (
            0 => __DIR__ . '/..' . '/../lib',
        ),
    );

    public static $classMap = array (
        'OCA\\FederatedFileSharing\\AddressHandler' => __DIR__ . '/..' . '/../lib/AddressHandler.php',
        'OCA\\FederatedFileSharing\\AppInfo\\Application' => __DIR__ . '/..' . '/../lib/AppInfo/Application.php',
        'OCA\\FederatedFileSharing\\BackgroundJob\\RetryJob' => __DIR__ . '/..' . '/../lib/BackgroundJob/RetryJob.php',
        'OCA\\FederatedFileSharing\\Controller\\MountPublicLinkController' => __DIR__ . '/..' . '/../lib/Controller/MountPublicLinkController.php',
        'OCA\\FederatedFileSharing\\Controller\\RequestHandlerController' => __DIR__ . '/..' . '/../lib/Controller/RequestHandlerController.php',
        'OCA\\FederatedFileSharing\\FederatedShareProvider' => __DIR__ . '/..' . '/../lib/FederatedShareProvider.php',
        'OCA\\FederatedFileSharing\\Notifications' => __DIR__ . '/..' . '/../lib/Notifications.php',
        'OCA\\FederatedFileSharing\\Notifier' => __DIR__ . '/..' . '/../lib/Notifier.php',
        'OCA\\FederatedFileSharing\\OCM\\CloudFederationProvider' => __DIR__ . '/..' . '/../lib/ocm/CloudFederationProvider.php',
        'OCA\\FederatedFileSharing\\Settings\\Admin' => __DIR__ . '/..' . '/../lib/Settings/Admin.php',
        'OCA\\FederatedFileSharing\\Settings\\Personal' => __DIR__ . '/..' . '/../lib/Settings/Personal.php',
        'OCA\\FederatedFileSharing\\Settings\\PersonalSection' => __DIR__ . '/..' . '/../lib/Settings/PersonalSection.php',
        'OCA\\FederatedFileSharing\\TokenHandler' => __DIR__ . '/..' . '/../lib/TokenHandler.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitFederatedFileSharing::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitFederatedFileSharing::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitFederatedFileSharing::$classMap;

        }, null, ClassLoader::class);
    }
}
