<?php

include 'Conect.php'; 

function obtenerTiposUsuario($Conecta) {
    try {
        $query = "SELECT * FROM tipousuario";
        $result = $Conecta->query($query);
        
        if (!$result) {
            die("Error al obtener tipos de usuario: " . $Conecta->error);
        }
        
        return $result->fetch_all(MYSQLI_ASSOC);
    } catch (Exception $e) {
        die("Error al obtener tipos de usuario: " . $e->getMessage());
    }
}

function obtenerGeneros($Conecta) {
    try {
        $query = "SELECT * FROM genero";
        $result = $Conecta->query($query);
        
        if (!$result) {
            die("Error al obtener géneros: " . $Conecta->error);
        }
        
        return $result->fetch_all(MYSQLI_ASSOC);
    } catch (Exception $e) {
        die("Error al obtener géneros: " . $e->getMessage());
    }
}

function obtenerUsuarios($Conecta) {
    try {
        $query = "SELECT * FROM usuarios ORDER BY NombreUser ASC";
        $result = $Conecta->query($query);
        
        if (!$result) {
            die("Error al obtener usuarios: " . $Conecta->error);
        }
        
        return $result->fetch_all(MYSQLI_ASSOC);
    } catch (Exception $e) {
        die("Error al obtener usuarios: " . $e->getMessage());
    }
}

function obtenerMotos($Conecta) {
    try {
        $query = "SELECT * FROM motos";
        $result = $Conecta->query($query);
        
        if (!$result) {
            die("Error al obtener motos: " . $Conecta->error);
        }
        
        return $result->fetch_all(MYSQLI_ASSOC);
    } catch (Exception $e) {
        die("Error al obtener motos: " . $e->getMessage());
    }
}

?>


