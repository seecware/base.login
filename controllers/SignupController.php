<?php

class SignupController {
    public function registerUser() {
        $data = [
            'name' => $_POST['name'] ?? '',
            'lastname' => $_POST['lastname'] ?? '',
            'email' => $_POST['email'] ?? '',
            'password' => $_POST['password'] ?? '',
            'confirm_password' => $_POST['confirm_password'] ?? '',
        ];

        $this -> checkPasswordMatch($data['password'], $data['confirm_password']);

    }

    private function checkPasswordMatch($password, $confirm_password) {
        $message = $password === $confirm_password ? "Succesfull!" : "Password don't match!";
        $_SESSION['error'] = $message;
        header('Location: /signup');
        exit;
    }
}