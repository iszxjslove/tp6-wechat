<?php
/**
 * @author 耐小心<i@naixiaoxin.com>
 * @copyright 2017-2018 耐小心
 */

namespace iszxjslove\ThinkWechat;

use think\Facade as ThinkFacade;

/**
 * Class Facade.
 *
 * @author overtrue <i@overtrue.me>
 */
class Facade extends ThinkFacade
{
    /**
     * 默认为 Server.
     *
     * @return string
     */
    public static function getFacadeAccessor()
    {
        return 'wechat.official_account';
    }

    /**
     * @param string $name
     * @param array $config
     * @return object|\think\App
     */
    public static function officialAccount($name = '',$config = [])
    {
        return $name ? app('wechat.official_account.' . $name, ["config"=>$config]) : app('wechat.official_account',  ["config"=>$config]);
    }

    /**
     * @param string $name
     * @param array $config
     * @return object|\think\App
     */
    public static function work($name = '',$config = [])
    {
        return $name ? app('wechat.work.' . $name,  ["config"=>$config]) : app('wechat.work',  ["config"=>$config]);
    }

    /**
     * @param string $name
     * @param array $config
     * @return object|\think\App
     */
    public static function payment($name = '',$config = [])
    {
        return $name ? app('wechat.payment.' . $name,  ["config"=>$config]) : app('wechat.payment',  ["config"=>$config]);
    }

    /**
     * @param string $name
     * @param array $config
     * @return object|\think\App
     */
    public static function miniProgram($name = '',$config = [])
    {
        return $name ? app('wechat.mini_program.' . $name,  ["config"=>$config]) : app('wechat.mini_program',  ["config"=>$config]);
    }

    /**
     * @param string $name
     * @param array $config
     * @return object|\think\App
     */
    public static function openPlatform($name = '',$config = [])
    {
        return $name ? app('wechat.open_platform.' . $name,  ["config"=>$config]) : app('wechat.open_platform',  ["config"=>$config]);
    }


    /**
     * @param string $name
     * @param array $config
     * @return object|\think\App
     */
    public static function openWork($name = '',$config = [])
    {
        return $name ? app('wechat.open_work.' . $name,  ["config"=>$config]) : app('wechat.open_work',  ["config"=>$config]);
    }

    /**
     * @param string $name
     * @param array $config
     * @return object|\think\App
     */
    public static function microMerchant($name = '',$config = [])
    {
        return $name ? app('wechat.micro_merchant.' . $name,  ["config"=>$config]) : app('wechat.micro_merchant',  ["config"=>$config]);
    }

}