<?php

/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2015/10/10 0010
 * Time: 17:58
 */
class BaseModel extends Eloquent
{
    protected $table = '';
    protected $guarded = array('id');
    public $timestamps = false;
    public static function getTranslates($translate){
        $rows = DB::table($translate['table'])->select(array($translate['foreign_key'],$translate['show']))->get();
        return $rows;
    }


    static function getTableList( $db ,$connection = null)
    {
        $t = array();
        $dbname = 'Tables_in_'.$db ;
        $tables = $connection ? DB::connection($connection)->select("SHOW TABLES FROM {$db}") : DB::select("SHOW TABLES FROM {$db}");
        foreach($tables as $table)
        {
            $t[$table->$dbname] = $table->$dbname;
        }
        return $t;
    }

    static function getTableColumns( $table,$connection  = false)
    {
//        $columns = array();
        $sql  = "SHOW COLUMNS FROM $table";
        $rawColumns = $connection ? DB::connection($connection)->select($sql)
            : DB::select($sql);
//        foreach($rawColumns as $column)
//            $columns[$column->Field] = $column->Field;
        return $rawColumns;
    }

    function getColoumnInfo( $result )
    {
        $pdo = DB::getPdo();
        $res = $pdo->query($result);
        $i =0;	$coll=array();
        while ($i < $res->columnCount())
        {
            $info = $res->getColumnMeta($i);
            $coll[] = $info;
            $i++;
        }
        return $coll;

    }

    function builColumnInfo( $statement )
    {
        $driver 		= Config::get('database.default');
        $database 		= Config::get('database.connections');
        $db 		= $database[$driver]['database'];
        $dbuser 	= $database[$driver]['username'];
        $dbpass 	= $database[$driver]['password'];
        $dbhost 	= $database[$driver]['host'];

        $data = array();
        $mysqli = new mysqli($dbhost,$dbuser,$dbpass,$db);
        if ($result = $mysqli->query($statement)) {

            /* Get field information for all columns */
            while ($finfo = $result->fetch_field()) {
                $data[] = (object) array(
                    'Field'	=> $finfo->name,
                    'Table'	=> $finfo->table,
                    'Type'	=> $finfo->type
                );
            }
            $result->close();
        }

        $mysqli->close();
        return $data;

    }

    static function findPrimarykey( $table, $db = null)
    {
        $query = "SHOW KEYS FROM `{$table}` WHERE Key_name = 'PRIMARY'";
        $primaryKey = '';
        $keys = $db ? DB::connection($db)->select($query) : DB::select($query);

        foreach($keys as $key)
        {
            $primaryKey = $key->Column_name;
        }

        return $primaryKey;
    }
}