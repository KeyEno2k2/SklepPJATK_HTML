<?php

class Database
{
    protected $server;
    protected $user;
    protected $password;
    protected $db;

    public function __construct()
    {
        $this->server = "localhost";
        $this->user = "root";
        $this->password = "#JebacKurwy1969";
        $this->db = "projektrbd";
    }


    public function get($sql)
    {
        $conn = new mysqli($this->server, $this->user, $this->password, $this->db);
        $result = $conn->query($sql);
        $conn->close();
        return $result;

    }

    public function update($sql)
    {
        $conn = new mysqli($this->server, $this->user, $this->password, $this->db);
        if ($conn->query($sql) === TRUE) {
            $conn->close();
            return true;
        } else {
            $conn->close();
            return false;
        }


    }

    public function delete($sql)
    {
        $conn = new mysqli($this->server, $this->user, $this->password, $this->db);
        if ($conn->query($sql) === TRUE) {
            $conn->close();
            return true;
        } else {
            $conn->close();
            return false;
        }


    }

    public function insert($sql)
    {
        $conn = new mysqli($this->server, $this->user, $this->password, $this->db);
        if ($conn->query($sql) === TRUE) {
            $conn->close();
            return true;
        } else {
            $conn->close();
            return false;
        }
    }
}
?>

