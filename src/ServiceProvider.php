<?php
namespace Luke\Cc;
use Pimple\Container;
use Pimple\ServiceProviderInterface;

class ServiceProvider implements ServiceProviderInterface
{
    public function register(Container $pimple)
    {
        $pimple['oauth'] = function ($pimple) {
            $oauth  = new Oauth($pimple);
            return $oauth;
        };
        $pimple['oauth.access_token'] = function ($pimple) {
            $accessToken  = new AccessToken($pimple);
            return $accessToken;
        };
        $pimple['user'] = function ($pimple) {
            $oauth  = new User($pimple);
            return $oauth;
        };
        $pimple['sms'] = function ($pimple) {
            $oauth  = new Sms($pimple);
            return $oauth;
        };
        
    }
}