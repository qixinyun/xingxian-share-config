<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/xingxian-share-config/src/SmartyConfig/Xx',
            S_ROOT.'vendor/qixinyun/xingxian-share-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/xingxian-share-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
