<?php

class QueryBuilder
{
    public $dsn ="mysql:host=localhost;dbname=elib";
    public $username = "root";
    public $pass = "";
    private $pdo ;
    private $query;

   
    public function __construct()
    {
        $this->pdo = new PDO($this->dsn,$this->username,$this->pass);
        echo "Connected successfully to DB";
    }

    public function select($failds = "*",$table,$cond = null){
        if($cond != null)$this->query="SELECT ".$failds." FROM ".$table." WHERE $cond";
        else $this->query="SELECT ".$failds." FROM ".$table;
        return $this;
    }



    /*public function update($table, $id, $fields) {
        $set = '';
        $x = 1;
    
        foreach($fields as $name => $value) {
            $set .= "{$name} = ?";
            if($x < count($fields)) {
                $set .= ',';
            }
            $x++;
        }
    
        $this->   $sql = "UPDATE {$table} SET {$set} = 'newpassword' WHERE id = {$id}";
    return $this;}*/

    public function update($table,$failds,$data,$cond){
        if(count($failds) == count($data)){
            $this->query = "UPDATE ".$table." SET ";
            for ($i=0 ; $i<count($data) ; $i++) {
                $column = $failds[$i];
                $value = $data[$i];
                if ($i == count($data) - 1) $pair = "$column = \"$value\"";
                else $pair = "$column = $value , ";
                $this->query .= $pair;
            }
            $this->query.=" WHERE ".$cond;
            echo $this->query;
        }
        return $this;
    }

    public function delete($table,$cond){
        $this->query = "DELETE FROM $table WHERE $cond";
        return $this;
    }


    
    public function orderBy ($failds){
        $this->query .= " ORDER BY $failds";
        return $this;
    }

    public function  count($failds,$table){

        $this->query="SELECT COUNT($failds) FROM $table";
        return $this;
    }
  public function insert($table,$columns,$values){
        if(count($columns) == count($values)){
            $this->finalQuery = "INSERT INTO $table (";
            for ($i=0 ; $i<count($columns) ; $i++) {
                $column = $columns[$i];
                if ($i == count($columns) - 1) $this->finalQuery.="$column)";
                else $this->finalQuery.="$column, ";
            }
            $this->finalQuery.=" VALUES (";
            for ($i=0 ; $i<count($values) ; $i++) {
                $value = $values[$i];
                if ($i == count($values) - 1) $this->finalQuery.=" $value)";
                else $this->finalQuery.="$value, ";
            }
                echo $this->finalQuery;
        }
        return $this;
    }


    /*public function Insert($data_values = array())
    {
        $db = $this->openDB();
        if ($db) {
    
            $fields = '';
            $fields_value = '';
            foreach ($data_values as $columnName => $columnValue) {
                if ($fields != '') {
                    $fields .= ',';
                    $fields_value .= ',';
                }
                $fields .= $columnName;
                $fields_value .= $columnValue;
            }
            $this-> $sqlInsert = 'INSERT INTO ' . $this->tabelle . ' (' . $fields . ') VALUES (' . $fields_value . ')';
            $result = $db->query($sqlInsert);
            echo $sqlInsert;
            if ($result) {
    
                echo "success";
            } else {
    
                echo "failed";
            }
    
        }
        return $this;
    }*/
    public function limit($rowCount,$offset = null){
        if($offset!= null){
            $this->query.=" LIMIT $offset , $rowCount";
        }else{
            $this->query.=" LIMIT $rowCount";
        }
        echo $this->query;
        return $this;
    }

    public function innerJoin($failds, $tab1, $tb2,$cond){
        $this->query = "SELECT $failds FROM $tab1 INNER JOIN $tb2 ON $cond";
        return $this;
    }

    public function leftJoin($failds, $tab1, $tb2,$cond){
        $this->query = "SELECT $failds FROM $tab1 LEFT JOIN $tb2 ON $cond";
        return $this;
    }

    public function rightJoin($failds, $tab1, $tb2,$cond){
        $this->query = "SELECT $failds FROM $tab1 RIGHT JOIN $tb2 ON $cond";
        return $this;
    }


}