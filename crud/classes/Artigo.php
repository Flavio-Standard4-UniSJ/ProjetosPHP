<?php
require_once 'Conexao.php';
require_once 'Base.php';

class Artigo extends Base {
    private $db; 

    public function __construct() {
        $this->db = new Conexao();
    }

    public function inserir($title, $description, $content) {
        $data_hora = date('Y-m-d H:i:s');
        $sql = "INSERT INTO Artigos (title, description, content, data_hora) VALUES ('$title', '$description', '$content', '$data_hora')";
        return $this->db->execute($sql);
    }

    public function atualizar($id, $title, $description, $content) {
        $data_hora = date('Y-m-d H:i:s');
        $sql = "UPDATE Artigos SET title = '$title', description = '$description', content = '$content', data_hora = '$data_hora' WHERE id = $id";
        return $this->db->execute($sql);
    }

    public function eliminar($id) {
        $sql = "DELETE FROM Artigos WHERE id = $id";
        return $this->db->execute($sql);
    }

    // Método para pesquisar um artigo pelo ID
    public function pesquisar($id) {
        $sql = "SELECT * FROM Artigos WHERE id = $id";
        $result = $this->db->query($sql);
        return $result->fetch_assoc();
    }

    // Método para listar todos os artigos
    public function listar() {
        $sql = "SELECT * FROM Artigos";
        $result = $this->db->query($sql);
        $artigos = [];
        while ($row = $result->fetch_assoc()) {
            $artigos[] = $row;
        }
        return $artigos;
    }
}
?>
