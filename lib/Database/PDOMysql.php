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

    public function insert($data) {
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

    public function update($data) {
	$sql = "update {{ TABLE }} SET {{ FIELDS_VALUES }} WHERE id={{ ID }}";

        $table = \Parser::getDatabaseTableName(get_class($data));

        foreach (get_class_methods($data) as $method) {
            if (substr($method, 0, 3) != 'get')
                continue;

            if (is_null($data->{$method}()))
                continue;

            $field = \Parser::getFieldNameFromMethod($method);


            $fields_values[] = $field . "='" . $data->{$method}() . "'";
        }

        $fields_values_string = implode(', ', $fields_values);

        $id = $data->getId();

        $sql = str_replace(
                array('{{ TABLE }}', '{{ FIELDS_VALUES }}', '{{ ID }}'), compact('table', 'fields_values_string', 'id'), $sql
        );

        $cn = $this->connect();
        return $cn->exec($sql);   
    }

    public function save($data) {
	$id = $data->getId();
	if (!empty($id))
		return self::update($data);
	else
		return self::insert($data);

	return -1;
	
    }

    public function fetchAll($data) {
        $sql = "SELECT * FROM {{ TABLE }}";

        $table = \Parser::getDatabaseTableName(get_class($data));

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

    public function findById(&$data) {
        self::findBy($data, array('id' => $data->getId()));
    }

    public function findBy(&$data, $criteria) {
        $sql = "SELECT * FROM {{ TABLE }} WHERE {{ WHERE }}";

        $table = \Parser::getDatabaseTableName(get_class($data));

        foreach ($criteria as $field => $value)
            $where[] = $field . '="' . $value . '"';

        $where = implode('AND', $where);
        $sql = str_replace(array('{{ TABLE }}', '{{ WHERE }}'), array($table, $where), $sql);

        $cn = $this->connect();
        $items = array();
        foreach ($cn->query($sql)->fetchAll(\PDO::FETCH_ASSOC) as $item) {
            foreach ($item as $field => $value) {
                $method = \Parser::getMethodFromFieldName($field);
                $data->{$method}($value);
            }
        }
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
}

?>
