<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0c660d0873c926f73b017e49e14d7514
{
    public static $prefixLengthsPsr4 = array (
        'L' => 
        array (
            'League\\OAuth1\\Client\\' => 21,
            'Laravel\\Socialite\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'League\\OAuth1\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/oauth1-client/src',
        ),
        'Laravel\\Socialite\\' => 
        array (
            0 => __DIR__ . '/..' . '/laravel/socialite/src',
        ),
    );

    public static $classMap = array (
        'Laravel\\Socialite\\AbstractUser' => __DIR__ . '/..' . '/laravel/socialite/src/AbstractUser.php',
        'Laravel\\Socialite\\Contracts\\Factory' => __DIR__ . '/..' . '/laravel/socialite/src/Contracts/Factory.php',
        'Laravel\\Socialite\\Contracts\\Provider' => __DIR__ . '/..' . '/laravel/socialite/src/Contracts/Provider.php',
        'Laravel\\Socialite\\Contracts\\User' => __DIR__ . '/..' . '/laravel/socialite/src/Contracts/User.php',
        'Laravel\\Socialite\\Facades\\Socialite' => __DIR__ . '/..' . '/laravel/socialite/src/Facades/Socialite.php',
        'Laravel\\Socialite\\One\\AbstractProvider' => __DIR__ . '/..' . '/laravel/socialite/src/One/AbstractProvider.php',
        'Laravel\\Socialite\\One\\TwitterProvider' => __DIR__ . '/..' . '/laravel/socialite/src/One/TwitterProvider.php',
        'Laravel\\Socialite\\One\\User' => __DIR__ . '/..' . '/laravel/socialite/src/One/User.php',
        'Laravel\\Socialite\\SocialiteManager' => __DIR__ . '/..' . '/laravel/socialite/src/SocialiteManager.php',
        'Laravel\\Socialite\\SocialiteServiceProvider' => __DIR__ . '/..' . '/laravel/socialite/src/SocialiteServiceProvider.php',
        'Laravel\\Socialite\\Two\\AbstractProvider' => __DIR__ . '/..' . '/laravel/socialite/src/Two/AbstractProvider.php',
        'Laravel\\Socialite\\Two\\BitbucketProvider' => __DIR__ . '/..' . '/laravel/socialite/src/Two/BitbucketProvider.php',
        'Laravel\\Socialite\\Two\\FacebookProvider' => __DIR__ . '/..' . '/laravel/socialite/src/Two/FacebookProvider.php',
        'Laravel\\Socialite\\Two\\GithubProvider' => __DIR__ . '/..' . '/laravel/socialite/src/Two/GithubProvider.php',
        'Laravel\\Socialite\\Two\\GitlabProvider' => __DIR__ . '/..' . '/laravel/socialite/src/Two/GitlabProvider.php',
        'Laravel\\Socialite\\Two\\GoogleProvider' => __DIR__ . '/..' . '/laravel/socialite/src/Two/GoogleProvider.php',
        'Laravel\\Socialite\\Two\\InvalidStateException' => __DIR__ . '/..' . '/laravel/socialite/src/Two/InvalidStateException.php',
        'Laravel\\Socialite\\Two\\LinkedInProvider' => __DIR__ . '/..' . '/laravel/socialite/src/Two/LinkedInProvider.php',
        'Laravel\\Socialite\\Two\\ProviderInterface' => __DIR__ . '/..' . '/laravel/socialite/src/Two/ProviderInterface.php',
        'Laravel\\Socialite\\Two\\User' => __DIR__ . '/..' . '/laravel/socialite/src/Two/User.php',
        'League\\OAuth1\\Client\\Credentials\\ClientCredentials' => __DIR__ . '/..' . '/league/oauth1-client/src/Credentials/ClientCredentials.php',
        'League\\OAuth1\\Client\\Credentials\\ClientCredentialsInterface' => __DIR__ . '/..' . '/league/oauth1-client/src/Credentials/ClientCredentialsInterface.php',
        'League\\OAuth1\\Client\\Credentials\\Credentials' => __DIR__ . '/..' . '/league/oauth1-client/src/Credentials/Credentials.php',
        'League\\OAuth1\\Client\\Credentials\\CredentialsException' => __DIR__ . '/..' . '/league/oauth1-client/src/Credentials/CredentialsException.php',
        'League\\OAuth1\\Client\\Credentials\\CredentialsInterface' => __DIR__ . '/..' . '/league/oauth1-client/src/Credentials/CredentialsInterface.php',
        'League\\OAuth1\\Client\\Credentials\\RsaClientCredentials' => __DIR__ . '/..' . '/league/oauth1-client/src/Credentials/RsaClientCredentials.php',
        'League\\OAuth1\\Client\\Credentials\\TemporaryCredentials' => __DIR__ . '/..' . '/league/oauth1-client/src/Credentials/TemporaryCredentials.php',
        'League\\OAuth1\\Client\\Credentials\\TokenCredentials' => __DIR__ . '/..' . '/league/oauth1-client/src/Credentials/TokenCredentials.php',
        'League\\OAuth1\\Client\\Server\\Bitbucket' => __DIR__ . '/..' . '/league/oauth1-client/src/Server/Bitbucket.php',
        'League\\OAuth1\\Client\\Server\\Magento' => __DIR__ . '/..' . '/league/oauth1-client/src/Server/Magento.php',
        'League\\OAuth1\\Client\\Server\\Server' => __DIR__ . '/..' . '/league/oauth1-client/src/Server/Server.php',
        'League\\OAuth1\\Client\\Server\\Trello' => __DIR__ . '/..' . '/league/oauth1-client/src/Server/Trello.php',
        'League\\OAuth1\\Client\\Server\\Tumblr' => __DIR__ . '/..' . '/league/oauth1-client/src/Server/Tumblr.php',
        'League\\OAuth1\\Client\\Server\\Twitter' => __DIR__ . '/..' . '/league/oauth1-client/src/Server/Twitter.php',
        'League\\OAuth1\\Client\\Server\\User' => __DIR__ . '/..' . '/league/oauth1-client/src/Server/User.php',
        'League\\OAuth1\\Client\\Server\\Uservoice' => __DIR__ . '/..' . '/league/oauth1-client/src/Server/Uservoice.php',
        'League\\OAuth1\\Client\\Server\\Xing' => __DIR__ . '/..' . '/league/oauth1-client/src/Server/Xing.php',
        'League\\OAuth1\\Client\\Signature\\EncodesUrl' => __DIR__ . '/..' . '/league/oauth1-client/src/Signature/EncodesUrl.php',
        'League\\OAuth1\\Client\\Signature\\HmacSha1Signature' => __DIR__ . '/..' . '/league/oauth1-client/src/Signature/HmacSha1Signature.php',
        'League\\OAuth1\\Client\\Signature\\PlainTextSignature' => __DIR__ . '/..' . '/league/oauth1-client/src/Signature/PlainTextSignature.php',
        'League\\OAuth1\\Client\\Signature\\RsaSha1Signature' => __DIR__ . '/..' . '/league/oauth1-client/src/Signature/RsaSha1Signature.php',
        'League\\OAuth1\\Client\\Signature\\Signature' => __DIR__ . '/..' . '/league/oauth1-client/src/Signature/Signature.php',
        'League\\OAuth1\\Client\\Signature\\SignatureInterface' => __DIR__ . '/..' . '/league/oauth1-client/src/Signature/SignatureInterface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0c660d0873c926f73b017e49e14d7514::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0c660d0873c926f73b017e49e14d7514::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0c660d0873c926f73b017e49e14d7514::$classMap;

        }, null, ClassLoader::class);
    }
}
