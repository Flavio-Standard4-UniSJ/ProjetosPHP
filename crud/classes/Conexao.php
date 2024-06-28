<?php 
class Conexao {
    
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "crud_mysql";

    private $conn;

    public function __construct() {
        // Cria uma nova conexão
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);

        // Verifica se houve erro na conexão
        if ($this->conn->connect_error) {
            die("Conexão falhou: " . $this->conn->connect_error);
        }
    }
// Método para obter a conexão
    public function getConnection() {
        return $this->conn;
    }

    // Método para fechar a conexão
    public function close() {
        if ($this->conn) {
            $this->conn->close();
        }
    }

    // Método para executar consultas
    public function query($sql) {
        $result = $this->conn->query($sql);
        if ($this->conn->error) {
            die("Erro na consulta: " . $this->conn->error);
        }
        return $result;
    }

    // Método para realizar inserções, atualizações ou deleções
    public function execute($sql) {
        if ($this->conn->query($sql) === TRUE) {
            $this->conn->close();
            return true;
        } else {
            die("Erro ao executar: " . $this->conn->error);
        }
    }}
?>
