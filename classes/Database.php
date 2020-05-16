<?php

    class Database {

        private static $conn = null;
        private $pdo, 
              $query, 
              $results, 
              $error = false, 
              $count = 0;    
              
        private function __construct() {
            try {
                $this->pdo = new PDO(Config::DB_SOURCE, Config::DB_USER, Config::DB_PASSWORD);
            } catch (PDOException $e) {
                die($e->getMessage());
            }
        }
        
        public function connect() {
            if (!isset(self::$conn)) {
                self::$conn = new Database();
            }

            return self::$conn;
        }

        public function query($sql, $params = []) {
            $this->error = false;
            $this->count = 0;
            $this->query = $this->pdo->prepare($sql);

            if ($this->query) {
                if (count($params)) {
                    $i = 1;
                    foreach($params as $param) {
                        $this->query->bindValue($i, $param);
                        $i++;
                    }
                }
            }
            if ($this->query->execute()) {
                $this->results = $this->query->fetchAll(PDO::FETCH_OBJ);
                $this->count = $this->query->rowCount();
            } else {
                print_r($this->query->errorInfo());
                $this->error = true;
            }

            return $this;
        }

        public function results() {
            return $this->results;
        }

        public function count() {
            return $this->count;
        }

        public function first() {
            if (!empty($this->results)) {
                return $this->results()[0];
            }
            return null;
        }

        // CRUD

        public function insert($table, $fields = []) {
            $values = '';
            $i = 1;

            foreach($fields as $field) {
                $values .= '?';
                if ($i < count($fields)) {
                    $values .= ', ';
                }
                $i++;
            }

            $sql = "INSERT INTO {$table} VALUES ({$values})";
            $this->query($sql, $fields);
            if (!$this->error) {
                return true;
            }
            return false;

        }

        public function find($table, $where = []) {
            if (count($where) === 2) {
                $field = $where[0];
                $value = $where[1];

                $sql = "SELECT * FROM {$table} WHERE {$field} = ?";
                $this->query($sql, [$value]);
                if (!$this->error) {
                    return $this;
                }
            }
            return null;
        }

        public function update($table, $id, $fields = []) {
            $set = '';
            $i = 1;

            foreach($fields as $field => $value) {
                $set .= "{$field} = ?";
                if ($i < count($fields)) {
                    $set .= ', ';
                }
                $i++;
            }
            $sql = "UPDATE {$table} SET {$set} WHERE id = {$id}";
            $this->query($sql, $fields);
            if(!$this->error) {
                return true;
            } 
            return false;

        }

        public function delete($table, $id) {
            $sql = "DELETE FROM {$table} WHERE id = ?";
            $this->query($sql, [$id]);
            echo "Count: " . $this->count() . "<br>";
            if ($this->count()) {
                return true;
            }
            return false;
        }

    }

?>