<?php

namespace Database;

class PDOMysql {

    static private $instance = null;

    public function connect() {
        try {
            self::$instance = new \PDO('mysql:host=' . HOST . ';dbname=' . BASE . '', '' . USER . '', '' . PASS . '');
        } catch (PDOException $e) {
            die("erreur de connexion");
        }

        return self::$instance;
    }

    public function disconnect() {
    
    }

    public function save($data) {
        $sql = "INSERT INTO {{ TABLE }} ({{ FIELDS }}) VALUES ({{ VALUES }})";

        $table = \Parser::getDatabaseTableName(get_class($data));

        foreach (get_class_methods($data) as $method) {
            if (substr($method, 0, 3) != 'get')
                continue;

            if (is_null($data->{$method}()))
                continue;

            $field = \Parser::getFieldNameFromMethod($method);

            $fields[] = $field;
            $values[] = "'" . $data->{$method}() . "'";
        }

        $fields_string = implode(',', $fields);
        $values_string = implode(',', $values);

        $sql = str_replace(
                array('{{ TABLE }}', '{{ FIELDS }}', '{{ VALUES }}'), compact('table', 'fields_string', 'values_string'), $sql
        );

        $cn = $this->connect();
        return $cn->exec($sql);
    }

    public function fetchAll($data) {
        $sql = "SELECT * FROM {{ TABLE }}";

        $table = \Parser::getDatabaseTableName(get_class($data));

         if($table=="user" or $table=="User" or $table=="Moderator" or $table=="moderator" or $table=="Administrator" or $table=="administrator"){
             switch($table){

                 case "user":
                 case "User":$sql.=" WHERE nature like 'user'";break;

                 case "moderator":
                 case "Moderator": $sql.=" WHERE nature like 'moderator'";break;

                 case "administrator":
                 case "Administrator": $sql.=" WHERE nature like 'admin'";break;
             }
             $table="member";

         }
    

        $sql = str_replace('{{ TABLE }}', $table, $sql);

        $cn = $this->connect();
        $items = array();
        foreach ($cn->query($sql)->fetchAll(\PDO::FETCH_ASSOC) as $item) {
            $current_class = get_class($data);
            $object = new $current_class;
            foreach ($item as $field => $value) {
                $method = \Parser::getMethodFromFieldName($field);
                $object->{$method}($value);
            }
            $items[] = $object;
        }

        return $items;
    }
	
	

    public function delete($data) {
        $sql = "DELETE FROM {{ TABLE }} WHERE id={{ ID }}";
        
        if (!is_numeric($data->getId())) {
            throw new \RuntimeException('ID must be a number');
        }
        
        $table = \Parser::getDatabaseTableName(get_class($data));
        $id = $data->getId();
        
        $sql = str_replace(array('{{ TABLE }}', '{{ ID }}'), array($table, $id), $sql);

        $cn = $this->connect();
        return $cn->exec($sql);
    }

    public function edit($data){
        
    }
}

?>
