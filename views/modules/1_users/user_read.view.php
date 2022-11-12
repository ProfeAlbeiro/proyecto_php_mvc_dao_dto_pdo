        <!-- Migas de Pan -->
        <div class="migas row d-flex align-items-center bg-white border-bottom">
            <div class="col p-0">
                <div aria-label="breadcrumb">
                    <ol class="breadcrumb rounded-0 m-0 p-2 bg-white">
                        <li class="breadcrumb-item"><a href="?c=Dashboard">Inicio</a></li>
                        <li class="breadcrumb-item">Módulo Usuarios</li>
                        <li class="breadcrumb-item active" aria-current="page">Consultar Usuarios</li>
                    </ol>
                </div>
            </div>
        </div>

        <!-- Título -->
        <div class="titulo-contenido row">
            <div class="col p-2 border-bottom d-flex justify-content-center align-items-center">
                <div class="col-6 p-0 d-flex justify-content-start align-items-center">
                    <h5 class="m-0">Consultar Usuarios</h5>
                </div>
                <div class="col-6 d-flex justify-content-end align-items-center p-0">
                    <a href="?c=Users&a=create" class="btn btn-light">Crear Usuario</a>
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
                            <th>Apellidos</th>
                            <th>Nombres</th>
                            <th>Identificación</th>
                            <th>Correo</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>ADM-123</td>
                            <td>Admin</td>
                            <td>Ramos V.</td>
                            <td>E. Albeiro</td>
                            <td>1000987654</td>
                            <td>profealbeiro2020@gmail.com</td>
                            <td>Activado</td>
                            <td class="tabla-acciones">
                                <a class="tabla-edit" href="?c=Users&a=update"><i class="fas fa-edit"></i></a>
                                <a class="tabla-delete" href="#" onclick="deleteUser()"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>CLT-456</td>
                            <td>Cliente</td>
                            <td>Godines Salazar</td>
                            <td>Rosa María</td>
                            <td>1001565465</td>
                            <td>rosa@cliente.com</td>
                            <td>Activado</td>
                            <td class="tabla-acciones">
                                <a class="tabla-edit" href="?c=Users&a=update"><i class="fas fa-edit"></i></a>
                                <a class="tabla-delete" href="#" onclick="deleteUser()"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>EMP-789</td>
                            <td>Empleado</td>
                            <td>Carranza Rincón</td>
                            <td>Victor Rogelio</td>
                            <td>1005987896</td>
                            <td>victor@empleado.com</td>
                            <td>Retirado</td>
                            <td class="tabla-acciones">
                                <a class="tabla-edit" href="?c=Users&a=update"><i class="fas fa-edit"></i></a>
                                <a class="tabla-delete" href="#" onclick="deleteUser()"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>EST-1234</td>
                            <td>Estudiante</td>
                            <td>Perez</td>
                            <td>Pepito</td>
                            <td>1101325355</td>
                            <td>pepito@estudiante.com</td>
                            <td>Activado</td>
                            <td class="tabla-acciones">
                                <a class="tabla-edit" href="?c=Users&a=update"><i class="fas fa-edit"></i></a>
                                <a class="tabla-delete" href="#" onclick="deleteUser()"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>PRF-568</td>
                            <td>Profesor</td>
                            <td>Paternina Soto</td>
                            <td>José</td>
                            <td>7354256</td>
                            <td>jose@profesor.com</td>
                            <td>Activado</td>
                            <td class="tabla-acciones">
                                <a class="tabla-edit" href="?c=Users&a=update"><i class="fas fa-edit"></i></a>
                                <a class="tabla-delete" href="#" onclick="deleteUser()"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>PRV-896</td>
                            <td>Proveedor</td>
                            <td>Auxiliadora</td>
                            <td>María</td>
                            <td>4035923</td>
                            <td>maria@proveedor.com</td>
                            <td>Retirado</td>
                            <td class="tabla-acciones">
                                <a class="tabla-edit" href="?c=Users&a=update"><i class="fas fa-edit"></i></a>
                                <a class="tabla-delete" href="#" onclick="deleteUser()"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>CNT-689</td>
                            <td>Contable</td>
                            <td>González Espinosa</td>
                            <td>Heidy Sofía</td>
                            <td>10078968921</td>
                            <td>sofia@contable.com</td>
                            <td>Retirado</td>
                            <td class="tabla-acciones">
                                <a class="tabla-edit" href="?c=Users&a=update"><i class="fas fa-edit"></i></a>
                                <a class="tabla-delete" href="#" onclick="deleteUser()"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>RCT-852</td>
                            <td>Rector</td>
                            <td>Perea Sigún</td>
                            <td>Amaranta</td>
                            <td>98546213</td>
                            <td>amaranta@rector.com</td>
                            <td>Retirado</td>
                            <td class="tabla-acciones">
                                <a class="tabla-edit" href="?c=Users&a=update"><i class="fas fa-edit"></i></a>
                                <a class="tabla-delete" href="#" onclick="deleteUser()"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>RHM-133</td>
                            <td>Recursos Humanos</td>
                            <td>Arriaga Beltrán</td>
                            <td>Camila </td>
                            <td>1000564683</td>
                            <td>camila@rrhh.com</td>
                            <td>Activado</td>
                            <td class="tabla-acciones">
                                <a class="tabla-edit" href="?c=Users&a=update"><i class="fas fa-edit"></i></a>
                                <a class="tabla-delete" href="#" onclick="deleteUser()"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>ADM-123</td>
                            <td>Admin</td>
                            <td>Ramos V.</td>
                            <td>E. Albeiro</td>
                            <td>1000987654</td>
                            <td>profealbeiro2020@gmail.com</td>
                            <td>Activado</td>
                            <td class="tabla-acciones">
                                <a class="tabla-edit" href="?c=Users&a=update"><i class="fas fa-edit"></i></a>
                                <a class="tabla-delete" href="#" onclick="deleteUser()"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>CLT-456</td>
                            <td>Cliente</td>
                            <td>Godines Salazar</td>
                            <td>Rosa María</td>
                            <td>1001565465</td>
                            <td>rosa@cliente.com</td>
                            <td>Activado</td>
                            <td class="tabla-acciones">
                                <a class="tabla-edit" href="?c=Users&a=update"><i class="fas fa-edit"></i></a>
                                <a class="tabla-delete" href="#" onclick="deleteUser()"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>EMP-789</td>
                            <td>Empleado</td>
                            <td>Carranza Rincón</td>
                            <td>Victor Rogelio</td>
                            <td>1005987896</td>
                            <td>victor@empleado.com</td>
                            <td>Retirado</td>
                            <td class="tabla-acciones">
                                <a class="tabla-edit" href="?c=Users&a=update"><i class="fas fa-edit"></i></a>
                                <a class="tabla-delete" href="#" onclick="deleteUser()"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>EST-1234</td>
                            <td>Estudiante</td>
                            <td>Perez</td>
                            <td>Pepito</td>
                            <td>1101325355</td>
                            <td>pepito@estudiante.com</td>
                            <td>Activado</td>
                            <td class="tabla-acciones">
                                <a class="tabla-edit" href="?c=Users&a=update"><i class="fas fa-edit"></i></a>
                                <a class="tabla-delete" href="#" onclick="deleteUser()"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>PRF-568</td>
                            <td>Profesor</td>
                            <td>Paternina Soto</td>
                            <td>José</td>
                            <td>7354256</td>
                            <td>jose@profesor.com</td>
                            <td>Activado</td>
                            <td class="tabla-acciones">
                                <a class="tabla-edit" href="?c=Users&a=update"><i class="fas fa-edit"></i></a>
                                <a class="tabla-delete" href="#" onclick="deleteUser()"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>PRV-896</td>
                            <td>Proveedor</td>
                            <td>Auxiliadora</td>
                            <td>María</td>
                            <td>4035923</td>
                            <td>maria@proveedor.com</td>
                            <td>Retirado</td>
                            <td class="tabla-acciones">
                                <a class="tabla-edit" href="?c=Users&a=update"><i class="fas fa-edit"></i></a>
                                <a class="tabla-delete" href="#" onclick="deleteUser()"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>CNT-689</td>
                            <td>Contable</td>
                            <td>González Espinosa</td>
                            <td>Heidy Sofía</td>
                            <td>10078968921</td>
                            <td>sofia@contable.com</td>
                            <td>Retirado</td>
                            <td class="tabla-acciones">
                                <a class="tabla-edit" href="?c=Users&a=update"><i class="fas fa-edit"></i></a>
                                <a class="tabla-delete" href="#" onclick="deleteUser()"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>RCT-852</td>
                            <td>Rector</td>
                            <td>Perea Sigún</td>
                            <td>Amaranta</td>
                            <td>98546213</td>
                            <td>amaranta@rector.com</td>
                            <td>Retirado</td>
                            <td class="tabla-acciones">
                                <a class="tabla-edit" href="?c=Users&a=update"><i class="fas fa-edit"></i></a>
                                <a class="tabla-delete" href="#" onclick="deleteUser()"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>RHM-133</td>
                            <td>Recursos Humanos</td>
                            <td>Arriaga Beltrán</td>
                            <td>Camila </td>
                            <td>1000564683</td>
                            <td>camila@rrhh.com</td>
                            <td>Activado</td>
                            <td class="tabla-acciones">
                                <a class="tabla-edit" href="?c=Users&a=update"><i class="fas fa-edit"></i></a>
                                <a class="tabla-delete" href="#" onclick="deleteUser()"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>ADM-123</td>
                            <td>Admin</td>
                            <td>Ramos V.</td>
                            <td>E. Albeiro</td>
                            <td>1000987654</td>
                            <td>profealbeiro2020@gmail.com</td>
                            <td>Activado</td>
                            <td class="tabla-acciones">
                                <a class="tabla-edit" href="?c=Users&a=update"><i class="fas fa-edit"></i></a>
                                <a class="tabla-delete" href="#" onclick="deleteUser()"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>CLT-456</td>
                            <td>Cliente</td>
                            <td>Godines Salazar</td>
                            <td>Rosa María</td>
                            <td>1001565465</td>
                            <td>rosa@cliente.com</td>
                            <td>Activado</td>
                            <td class="tabla-acciones">
                                <a class="tabla-edit" href="?c=Users&a=update"><i class="fas fa-edit"></i></a>
                                <a class="tabla-delete" href="#" onclick="deleteUser()"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>EMP-789</td>
                            <td>Empleado</td>
                            <td>Carranza Rincón</td>
                            <td>Victor Rogelio</td>
                            <td>1005987896</td>
                            <td>victor@empleado.com</td>
                            <td>Retirado</td>
                            <td class="tabla-acciones">
                                <a class="tabla-edit" href="?c=Users&a=update"><i class="fas fa-edit"></i></a>
                                <a class="tabla-delete" href="#" onclick="deleteUser()"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>EST-1234</td>
                            <td>Estudiante</td>
                            <td>Perez</td>
                            <td>Pepito</td>
                            <td>1101325355</td>
                            <td>pepito@estudiante.com</td>
                            <td>Activado</td>
                            <td class="tabla-acciones">
                                <a class="tabla-edit" href="?c=Users&a=update"><i class="fas fa-edit"></i></a>
                                <a class="tabla-delete" href="#" onclick="deleteUser()"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>PRF-568</td>
                            <td>Profesor</td>
                            <td>Paternina Soto</td>
                            <td>José</td>
                            <td>7354256</td>
                            <td>jose@profesor.com</td>
                            <td>Activado</td>
                            <td class="tabla-acciones">
                                <a class="tabla-edit" href="?c=Users&a=update"><i class="fas fa-edit"></i></a>
                                <a class="tabla-delete" href="#" onclick="deleteUser()"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>PRV-896</td>
                            <td>Proveedor</td>
                            <td>Auxiliadora</td>
                            <td>María</td>
                            <td>4035923</td>
                            <td>maria@proveedor.com</td>
                            <td>Retirado</td>
                            <td class="tabla-acciones">
                                <a class="tabla-edit" href="?c=Users&a=update"><i class="fas fa-edit"></i></a>
                                <a class="tabla-delete" href="#" onclick="deleteUser()"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>CNT-689</td>
                            <td>Contable</td>
                            <td>González Espinosa</td>
                            <td>Heidy Sofía</td>
                            <td>10078968921</td>
                            <td>sofia@contable.com</td>
                            <td>Retirado</td>
                            <td class="tabla-acciones">
                                <a class="tabla-edit" href="?c=Users&a=update"><i class="fas fa-edit"></i></a>
                                <a class="tabla-delete" href="#" onclick="deleteUser()"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>RCT-852</td>
                            <td>Rector</td>
                            <td>Perea Sigún</td>
                            <td>Amaranta</td>
                            <td>98546213</td>
                            <td>amaranta@rector.com</td>
                            <td>Retirado</td>
                            <td class="tabla-acciones">
                                <a class="tabla-edit" href="?c=Users&a=update"><i class="fas fa-edit"></i></a>
                                <a class="tabla-delete" href="#" onclick="deleteUser()"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>RHM-133</td>
                            <td>Recursos Humanos</td>
                            <td>Arriaga Beltrán</td>
                            <td>Camila </td>
                            <td>1000564683</td>
                            <td>camila@rrhh.com</td>
                            <td>Activado</td>
                            <td class="tabla-acciones">
                                <a class="tabla-edit" href="?c=Users&a=update"><i class="fas fa-edit"></i></a>
                                <a class="tabla-delete" href="#" onclick="deleteUser()"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Id</th>
                            <th>Rol</th>
                            <th>Nombres</th>
                            <th>Apellidos</th>
                            <th>Nº Documento</th>
                            <th>Correo</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>