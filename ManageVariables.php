<?
class ManageVariables
{
    private static $mem = array();

    public static function set($namevariables, $value)
    {
        self::$mem[$namevariables] = $value;
    }
    public static function get($namevariables)
    {
        return self::$mem[$namevariables];
    }
    public static function exist($namevariables)
    {
        return isset(self::$mem[$namevariables]);
    }
    public static function getALL()
    {
        return self::$mem;
    }
}

/**
 * Set Variable
 */
function _set($name, $value){
    Config::set(strtolower($name), $value);
}

/**
 * Get Variable
 */
function _get($name){
    return Config::get(strtolower($name));
}
