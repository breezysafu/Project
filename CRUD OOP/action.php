<?php

include "db.php";

class DataOperation extends Database {

    public function insert_record($table,$fields){
        //"INSERT INTO table_name (,,) VALUES ('','')";
        $sql="";
        $sql.="INSERT INTO ".$table;
        $sql.=" (".implode(",",array_keys($fields)).") VALUES ";
        $sql.="('".implode("','",array_values($fields))."')";
        $query =($this->con)->query($sql);
        if($query){
            return true;
        }
    }

}

$obj=new DataOperation;

//if(isset($_POST["submit"])){
if($_SERVER['REQUEST_METHOD']=='POST'){
    $myArray=array(
        "m_name"=>$_POST["name"],
        "qty"=>$_POST["qty"]
    );

    if($obj->insert_record("medicine",$myArray)){
        header("location:index.php?msg=Record Inserted");
    }
}