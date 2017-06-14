<?
class ManageVariables
{
    private static $MEMORY = array();

    public static function set($namevariables, $value)
    {
        self::$MEMORY[$namevariables] = $value;
    }
    public static function get($namevariables)
    {
        return self::$MEMORY[$namevariables];
    }
    public static function exist($namevariables)
    {
        return isset(self::$MEMORY[$namevariables]);
    }
    public static function getALL()
    {
        return self::$MEMORY;
    }
}

/**
 * Set Variable
 */
function memSet($name, $value)
{
    ManageVariables::set(strtolower($name), $value);
}

/**
 * Get Variable
 */
function memGet($name)
{
    return ManageVariables::get(strtolower($name));
}
