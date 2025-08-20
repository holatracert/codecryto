<?php
namespace App\Controllers;

use App\Models\User;

class UserController
{
    public function registerUser($data)
    {
        $user = new User();
        $user->setName($data['nombre']);
        $user->setEmail($data['email']);

        if ($this->validateUserInput($data)) {
            if ($user->save()) {
                return ['success' => true, 'message' => 'User registered successfully.'];
            } else {
                return ['success' => false, 'message' => 'Failed to register user.'];
            }
        } else {
            return ['success' => false, 'message' => 'Invalid input data.'];
        }
    }

    private function validateUserInput($data)
    {
        // Basic validation for user input
        if (empty($data['nombre']) || empty($data['email'])) {
            return false;
        }

        if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        return true;
    }
}