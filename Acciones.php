<?php

include 'conecta.php';

class Acciones {
    private $Conecta;

    public function __construct($Conecta) {
        $this->Conecta = $Conecta;
    }

    public function login($username, $password) {
        $user = $this->obtenerUsuario($username);

        if ($user && $user['password'] === $password) {
            session_start();
            $_SESSION['user'] = $user;
            header("Location: home.php");
            exit;
        } else {
            return "Usuario o contraseña incorrectos";
        }
    }

    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        header("Location: login.php");
        exit;
    }

    public function mostrarMotos() {
        return $this->obtenerMotos();
    }

    private function obtenerUsuario($username) {
        try {
            $query = "SELECT * FROM usuarios WHERE username = ?";
            $stmt = $this->Conecta->prepare($query);
            $stmt->bind_param("s", $username);
            $stmt->execute();
            $result = $stmt->get_result();
            return $result->fetch_assoc();
        } catch (Exception $e) {
            die("Error al obtener usuario: " . $e->getMessage());
        }
    }

    private function obtenerMotos() {
        try {
            $query = "SELECT * FROM motos";
            $result = $this->Conecta->query($query);
            return $result->fetch_all(MYSQLI_ASSOC);
        } catch (Exception $e) {
            die("Error al obtener motos: " . $e->getMessage());
        }
    }
}

?>
