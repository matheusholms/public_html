<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit23ed6c234163ee535bffe2ab8f4bc247
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'Ecommerce\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Ecommerce\\' => 
        array (
            0 => __DIR__ . '/..' . '/php-classes/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static $classMap = array (
        'PHPMailer' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
        'PHPMailerOAuth' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauth.php',
        'PHPMailerOAuthGoogle' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmaileroauthgoogle.php',
        'POP3' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.pop3.php',
        'SMTP' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.smtp.php',
        'ntlm_sasl_client_class' => __DIR__ . '/..' . '/phpmailer/phpmailer/extras/ntlm_sasl_client.php',
        'phpmailerException' => __DIR__ . '/..' . '/phpmailer/phpmailer/class.phpmailer.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit23ed6c234163ee535bffe2ab8f4bc247::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit23ed6c234163ee535bffe2ab8f4bc247::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit23ed6c234163ee535bffe2ab8f4bc247::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit23ed6c234163ee535bffe2ab8f4bc247::$classMap;

        }, null, ClassLoader::class);
    }
}
