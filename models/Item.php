<?php
class Item {
    private $db;

    public function __construct() {
        $this->db = connect();
    }

    public function create($name, $description) {
        $stmt = $this->db->prepare("INSERT INTO items (name, description) VALUES (?, ?)");
        $stmt->bind_param("ss", $name, $description);
        $stmt->execute();
        $stmt->close();
    }

    // Other CRUD methods (read, update, delete) go here
}
?>