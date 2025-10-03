<?php
    include '../includes/db_connect.php';
    class User{
        private $conn;

    public function_construct($db){
    $this -> conn = $db;
}

    public function register($username, $email, $password){
        $hash = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO usuarios (nome, email, senha) VALUES (:username, :email, :password)";

        $stmt = $this -> conn->prepare($sql);

        $stmt = $this ->bindParam(':username', $username);
        $stmt = $this ->bindParam(':email', $email);
        $stmt = $this ->bindParam(':password', $hash);
        return $stmt -> execute();
    }

    public function login($email, $password){
        $sql = "SELECT * FROM usuarios WHERE email = :email";
          $stmt = $this -> conn->prepare($sql);
            $stmt -> bindParam(':senha', $senha);
            $stmt -> bindParam(':email', $hash);
            $stmt -> execute();
            $user = $stmt -> fetch(PDO::FETCH_ASSOC);
            if ($user && password_verify($senha, $user['senha'])) {
                return $user;
            }
            return false;
        }

       public function getUserById($userId) {
            $sql = "SELECT * FROM usuario WHERE id = :id";
            $stmt = $this -> conn->prepare($sql);
            $stmt -> bindParam(':id', $userId);
            $stmt -> execute();
            return $stmt -> fetch(PDO::FETCH_ASSOC);
        }
    };
?>