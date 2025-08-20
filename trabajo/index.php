<?php
require_once '../config.php';
require_once '../functions.php';
require_once '../header.php';
require_once '../nav.php';      
require_once '../aside.php';
require_once '../models/Trabajo.php';
$trabajo = new Trabajo();
$trabajos = $trabajo->getAllTrabajos();
?>
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Trabajos</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo URL_BASE; ?>">Inicio</a></li>
                            <li class="breadcrumb-item active">Trabajos</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Listado de trabajos</h3>
                                <a href="create.php" class="btn btn-primary btn-sm float-right">Agregar trabajo</a>
                            </div>
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Descripción</th>
                                            <th>Fecha de Inicio</th>
                                            <th>Fecha de Fin</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($trabajos as $trabajo): ?>
                                        <tr>
                                            <td><?php echo htmlspecialchars($trabajo['id']); ?></td>
                                            <td><?php echo htmlspecialchars($trabajo['nombre']); ?></td>
                                            <td><?php echo htmlspecialchars($trabajo['descripcion']); ?></td>
                                            <td><?php echo htmlspecialchars($trabajo['fecha_inicio']); ?></td>
                                            <td><?php echo htmlspecialchars($trabajo['fecha_fin']); ?></td>
                                            <td>
                                                <a href="edit.php?id=<?php echo $trabajo['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                                                <a href="delete.php?id=<?php echo $trabajo['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de que deseas eliminar este trabajo?');">Eliminar</a>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Descripción</th>
                                            <th>Fecha de Inicio</th>
                                            <th>Fecha de Fin</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php
require_once '../footer.php';
?>             