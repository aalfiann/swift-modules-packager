<?php
namespace modules\packager;
use \Respect\Validation\Validator as v;
/**
 * PackagerValidator class
 *
 * @package    swift-packager
 * @author     M ABD AZIZ ALFIAN <github.com/aalfiann>
 * @copyright  Copyright (c) 2019 M ABD AZIZ ALFIAN
 * @license    https://github.com/aalfiann/swift-modules-packager/blob/master/LICENSE.md  MIT License
 */
class PackagerValidator {
    public static function install(){
        return [
            'source' => v::url()
        ];
    }

    public static function installsafely(){
        return [
            'source' => v::url(),
            'namespace' => v::stringType()->notEmpty()
        ];
    }

    public static function uninstall(){
        return [
            'namespace' => v::stringType()->notEmpty()
        ];
    }
}