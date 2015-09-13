<?php

class DbCreate extends CRMEntity
{

    var $log;
    var $db;
    var $table_name = "ottocrat_packages";
    var $table_index = 'packageid';

    function DbCreate()
    {
        $this->column_fields = getColumnFields('DbCreate');


    }

    function getUsername()
    {

        $username = $this->column_fields["user_name"];
        return $username;

    }

    function DbCreateProcess()
    { global $adb;
        $database = $this->column_fields["user_name"]; //username as database name
        $password = "pass123";

        if ($database != '') {
            $adb->resetSettings('mysqli', 'localhost', $database, $database, $password);
           // $adb->query('SET NAMES utf8');
            Install_InitSchema_Model::initialize();
            $adb->createTables("schema/schema.xml"); echo 'hiiiii';
        }

    }
}
?>