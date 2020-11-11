<?php

namespace RobotStores;
// FYI need '\PDO' in order to refer to global  namespace of PHP where PDO lives

class DbConnector
{
    static private $db;

    static public function getConnection(): \PDO
    {
        if ( self::$db == null ) {
            $db = new \PDO('mysql:host=db;dbname=robot-stores-dav', 'root', 'password');
        }
        $db->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        return $db;
    }

}

