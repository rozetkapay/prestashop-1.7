<?php

trait HelperTrait {

    /**
     * @return bool
     */
    public static function isPrestaShop16Static() {
        return (version_compare(_PS_VERSION_, '1.7.0', '<') || Tools::substr(_PS_VERSION_, 0, 3) == '1.6');
    }

    /**
     * @return bool
     */
    public static function isPrestaShop176Static() {
        return version_compare(_PS_VERSION_, '1.7.6', '>=');
    }

    /**
     * @return bool
     */
    public static function isPrestaShop177OrHigherStatic() {
        return version_compare(_PS_VERSION_, '1.7.7', '>=');
    }

    /**
     * @return bool
     */
    public function isPrestaShop16() {
        return self::isPrestaShop16Static();
    }

    /**
     * @return bool
     */
    public function isPrestaShop176() {
        return self::isPrestaShop176Static();
    }

    /**
     * @return bool
     */
    public function isPrestaShop177OrHigher() {
        return self::isPrestaShop177OrHigherStatic();
    }
    
    public function log($var) {
        if ($this->extlog !== false) {
            $this->extlog->write($var);
        }
    }
    

}
