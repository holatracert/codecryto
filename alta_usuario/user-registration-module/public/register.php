<?php
require_once '../src/config/database.php';
require_once '../src/controllers/UserController.php';

$userController = new UserController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userController->registerUser($_POST);
}

include_once 'templates/header.php';
?>

<div class="container mt-5">
    <h2>User Registration</h2>
    <form action="register.php" method="post">
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Correo Electrónico:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Contraseña:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Registrar</button>
    </form>

    <?php
    if (isset($userController->message)) {
        echo '<div class="alert alert-info mt-3">' . $userController->message . '</div>';
    }
    ?>
</div>

<?php include_once 'templates/footer.php'; ?>