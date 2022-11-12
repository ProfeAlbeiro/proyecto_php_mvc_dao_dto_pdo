        <!-- Migas de Pan -->
        <div class="migas row d-flex align-items-center bg-white border-bottom">
            <div class="col p-0">
                <div aria-label="breadcrumb">
                    <ol class="breadcrumb rounded-0 m-0 p-2 bg-white">
                        <li class="breadcrumb-item"><a href="?c=Dashboard">Inicio</a></li>
                        <li class="breadcrumb-item">Módulo Usuarios</li>
                        <li class="breadcrumb-item active" aria-current="page">Consultar Roles</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- Título -->
        <div class="titulo-contenido row">
            <div class="col p-2 border-bottom d-flex justify-content-center align-items-center">
                <div class="col-6 p-0 d-flex justify-content-start align-items-center">
                    <h5 class="m-0">Consultar Roles</h5>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-center p-0">
                    <a href="?c=Users&a=createRol" class="btn btn-light">Crear Rol</a>
                </div>
            </div>
        </div>

        <!-- Contenido -->
        <div class="contenido row bg-light p-2">
            <div class="cont-tabla col p-0 bg-light">
                <table id="data-tables" class="display nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Rol</th>                            
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>admin</td>                            
                            <td class="tabla-acciones">
                                <a class="tabla-edit" href="?c=Users&a=updateRol"><i class="fas fa-edit"></i></a>
                                <a class="tabla-delete" href="#" onclick="deleteRol()"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>persona</td>                            
                            <td class="tabla-acciones">
                                <a class="tabla-edit" href="?c=Users&a=updateRol"><i class="fas fa-edit"></i></a>
                                <a class="tabla-delete" href="#" onclick="deleteRol()"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>cliente</td>                            
                            <td class="tabla-acciones">
                                <a class="tabla-edit" href="?c=Users&a=updateRol"><i class="fas fa-edit"></i></a>
                                <a class="tabla-delete" href="#" onclick="deleteRol()"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>empleado</td>                            
                            <td class="tabla-acciones">
                                <a class="tabla-edit" href="?c=Users&a=updateRol"><i class="fas fa-edit"></i></a>
                                <a class="tabla-delete" href="#" onclick="deleteRol()"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Rol</th>                            
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>