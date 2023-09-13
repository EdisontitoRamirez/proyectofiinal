<!-- este archivo resive todas las consultas del modelo para mostrar informacion al administrador -->
<!-- esta funcion es la que se llama en la vista -->


<?php
function cargarUsuarioAdmin(){
    $objConsulta = new Consultas();
    $result = $objConsulta->mostrarUserAdmin();


    if (!isset($result)) {
        echo '<h2>No hay usuarios registrados</h2>';
    }   else{

        foreach($result as $f){
        echo  '
            <tr>
                <td><img src="../'.$f['foto'].'" alt="Foto user" style="width:60px; height:60px; border-radius:50%"></td>
                <td>'.$f['Nombres'].'</td>
                <td>'.$f['Apellidos'].'</td>
                <td>'.$f['rol'].'</td>
                <td>'.$f['estado'].'</td>
                <td>
                <a href="../../views/administrador/modificarAdmin.php?id='.$f['Identificacion'].'" class="btn btn-primary"><i class="ti-marker-alt"></i>Modificar</a>
                </td>
                <td>
                    <a class="btn btn-danger" href="../../controller/eliminarUserAdmin.php?id='.$f['Identificacion'].'"><i class="ti-trash"></i>Eliminar</a>
                </td>
            <tr>';
        }
        
    }
}
function cargarUsuarioAdminReportes(){
    $objConsulta = new Consultas();
    $result = $objConsulta->mostrarUserAdmin();


    if (!isset($result)) {
        echo '<h2>No hay usuarios registrados</h2>';
    }   else{

        foreach($result as $f){
        echo  '
            <tr>
                
                <td>'.$f['Nombres'].'</td>
                <td>'.$f['Apellidos'].'</td>
                <td>'.$f['Email'].'</td>
                <td>'.$f['rol'].'</td>
                <td>'.$f['estado'].'</td>
            <tr>';
        }
        
    }
}


// session_start();    
function perfilAdmin(){

    // VARIABLE DE SESION DE LOGIN



    $id = $_SESSION['id'];

    $objConsulta = new consultas();
    $result = $objConsulta->verPerfilAdmin($id);

    foreach ($result as $f) {
        echo '
        

        <li class="label">'.$f['rol'].'</li>
                    <li>
                        <a class="sidebar-sub-toggle">
                        <img src="../'.$f['foto'].'" alt="Foto user" style="width:60px; height:60px; border-radius:50%"> '.$f['Nombres'].'
                            
                        </a>
                    </li>
        
                    <li>
                        <a href="perfill.php?id='.$f['identificacion'].'">
                            <i class="ti-clse"></i> Tu cuenta</a>
                        
                    </li>
                    <li>
                        <a href="../../controller/cerrarSesion.php">
                            <i class="ti-close"></i> Salir</a>
                        
                    </li>
        
        ';
    }




}


function perfilEditar(){
    $id=$_GET['id'];

    $objConsulta = new consultas();
    $result = $objConsulta->perfilEditar($id);

    foreach ($result as $f){
        
        echo '
        <section id="main-content">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card perfil-user">
                                <img src="../'.$f['foto'].'" alt="">
                                <div>'.$f['nombres'].' '.$f['apellidos'].' </div>
                                <div>Administrador</div>
                            </div>
                        </div>

                        <div class="col-lg-8">
                            <div class="card modificar-user">
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-toggle="tab" data-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Perfil</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-toggle="tab" data-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Cambiar foto</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-toggle="tab" data-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Cambiar clave</button>
                            </li>
                            </ul>

                            <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                <form action="../../controller/registrarUserAdmin.php" method="POST" enctype="multipart/form-data">

                                    
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Identificación</label>
                                            <input type="number" class="form-control" value="'.$f['identificacion'].'" readonly placeholder="Ej: 10245225523" name="identificacion">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Tipo de documento</label>
                                            <select name="tipo_de_dato" id="" class="form-control">
                                                <option value="'.$f['tipo_doc'].'">'.$f['tipo_doc'].'</option>
                                                <option value="C.C">C.C</option>
                                                <option value="T.I">T.I</option>
                                                <option value="">C.E</option>
                                                <option value="Pasaporte">Pasaporte</option>

                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Nombres</label>
                                            <input type="text" class="form-control" value="'.$f['nombres'].'" placeholder="Juan, Pedro" name="nombres">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Apellidos</label>
                                            <input type="text" class="form-control" value="'.$f['apellidos'].'" placeholder="Díaz, Ramírez" name="apellidos">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Telefono</label>
                                            <input type="text" class="form-control" value="'.$f['telefono'].'" placeholder="31254335346" name="telefono">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Email</label>
                                            <input type="email" class="form-control" value="'.$f['email'].'" placeholder="pepito@gnail.com" name="email">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Rol</label>
                                            <select name="rol" id="" class="form-control">
                                                <option value="">Seleccione un rol</option>
                                                <option value="Administrador">Administrador</option>
                                                
                                            

                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Estado</label>
                                            <select name="estado" id="" class="form-control">
                                                <option value="">Seleccione un estado</option>
                                                <option value="Activo">Activo</option>
                                                <option value="Pendiente">Pendiente</option>
                                                <option value="Bloqueado">Bloqueado</option>
                                            

                                            </select>
                                        </div>
                                        
                                        <div class="form-group col-md-12">
                                        <label>Foto</label>
                                        <input type="file" class="form-control"name="foto" accept="jpg. , jpeg., png. , gif.">
                                        </div>
                                        <div class="form-group col-md-12">
                                        <label>Foto2</label>
                                        <input type="file" class="form-control" name="foto2" accept=".jpg, .jpeg, .png, .gif">
                                        </div>
                                        <div class="form-group col-md-12">
                                        <label>Foto2</label>
                                        <input type="file" class="form-control" name="foto3" accept=".jpg, .jpeg, .png, .gif">
                                        </div>

                                    </div>


                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Crear nuevo usuario</button>


                                </form>


                            </div>
                            
                                

                            <div class="tab-pane fade " id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <form action="../../controller/registrarUserAdmin.php" method="POST" enctype="multipart/form-data">

                                    
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Identificación</label>
                                            <input type="number" class="form-control" placeholder="Ej: 10245225523" name="identificacion">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Tipo de documento</label>
                                            <select name="tipo_de_dato" id="" class="form-control">
                                                <option value="">Seleccione una opción</option>
                                                <option value="C.C">C.C</option>
                                                <option value="T.I">T.I</option>
                                                <option value="">C.E</option>
                                                <option value="Pasaporte">Pasaporte</option>

                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Nombres</label>
                                            <input type="text" class="form-control" placeholder="Juan, Pedro" name="nombres">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Apellidos</label>
                                            <input type="text" class="form-control" placeholder="Díaz, Ramírez" name="apellidos">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Telefono</label>
                                            <input type="text" class="form-control" placeholder="31254335346" name="telefono">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Email</label>
                                            <input type="email" class="form-control" placeholder="pepito@gnail.com" name="email">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Rol</label>
                                            <select name="rol" id="" class="form-control">
                                                <option value="">Seleccione un rol</option>
                                                <option value="Administrador">Administrador</option>
                                                
                                            

                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Estado</label>
                                            <select name="estado" id="" class="form-control">
                                                <option value="">Seleccione un estado</option>
                                                <option value="Activo">Activo</option>
                                                <option value="Pendiente">Pendiente</option>
                                                <option value="Bloqueado">Bloqueado</option>
                                            

                                            </select>
                                        </div>
                                        
                                        <div class="form-group col-md-12">
                                        <label>Foto</label>
                                        <input type="file" class="form-control"name="foto" accept="jpg. , jpeg., png. , gif.">
                                        </div>
                                        <div class="form-group col-md-12">
                                        <label>Foto2</label>
                                        <input type="file" class="form-control" name="foto2" accept=".jpg, .jpeg, .png, .gif">
                                        </div>
                                        <div class="form-group col-md-12">
                                        <label>Foto2</label>
                                        <input type="file" class="form-control" name="foto3" accept=".jpg, .jpeg, .png, .gif">
                                    </div>

                                    </div>


                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Crear nuevo usuario</button>


                                </form>
                            </div>
                            
                                

                            <div class="tab-pane fade " id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
                            <form action="../../controller/registrarUserAdmin.php" method="POST" enctype="multipart/form-data">

                                    
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label>Identificación</label>
                                            <input type="number" class="form-control" placeholder="Ej: 10245225523" name="identificacion">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Tipo de documento</label>
                                            <select name="tipo_de_dato" id="" class="form-control">
                                                <option value="">Seleccione una opción</option>
                                                <option value="C.C">C.C</option>
                                                <option value="T.I">T.I</option>
                                                <option value="">C.E</option>
                                                <option value="Pasaporte">Pasaporte</option>

                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Nombres</label>
                                            <input type="text" class="form-control" placeholder="Juan, Pedro" name="nombres">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Apellidos</label>
                                            <input type="text" class="form-control" placeholder="Díaz, Ramírez" name="apellidos">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Telefono</label>
                                            <input type="text" class="form-control" placeholder="31254335346" name="telefono">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Email</label>
                                            <input type="email" class="form-control" placeholder="pepito@gnail.com" name="email">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Rol</label>
                                            <select name="rol" id="" class="form-control">
                                                <option value="">Seleccione un rol</option>
                                                <option value="Administrador">Administrador</option>
                                                
                                            

                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label>Estado</label>
                                            <select name="estado" id="" class="form-control">
                                                <option value="">Seleccione un estado</option>
                                                <option value="Activo">Activo</option>
                                                <option value="Pendiente">Pendiente</option>
                                                <option value="Bloqueado">Bloqueado</option>
                                            

                                            </select>
                                        </div>
                                        
                                        <div class="form-group col-md-12">
                                        <label>Foto</label>
                                        <input type="file" class="form-control"name="foto" accept="jpg. , jpeg., png. , gif.">
                                        </div>
                                        <div class="form-group col-md-12">
                                        <label>Foto2</label>
                                        <input type="file" class="form-control" name="foto2" accept=".jpg, .jpeg, .png, .gif">
                                        </div>
                                        <div class="form-group col-md-12">
                                        <label>Foto2</label>
                                        <input type="file" class="form-control" name="foto3" accept=".jpg, .jpeg, .png, .gif">
                                    </div>

                                    </div>


                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Crear nuevo usuario</button>


                                </form>
                            </div>
                           
                            </div>
                            </div>
                        </div>
                        
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="footer">
                                <p>2018 © Admin Board. - <a href="#">example.com</a></p>
                            </div>
                        </div>
                    </div>
                </section>
        
        ';
    }
}



function buscar($nombre){
    $objConsulta = new Consultas();
    $result = $objConsulta->buscarUsuarioAdmin($nombre);


    if (!isset($result)) {
        echo '<h2>No hay usuarios registrados</h2>';
    }   else{

        foreach($result as $f){
        echo  '
            <tr>
                <td><img src="../'.$f['foto'].'" alt="Foto user" style="width:60px; height:60px; border-radius:50%"></td>
                <td>'.$f['Nombres'].'</td>
                <td>'.$f['Apellidos'].'</td>
                <td>'.$f['rol'].'</td>
                <td>'.$f['estado'].'</td>
                <td>
                    <a href="" class="btn btn-primary"><i class="ti-marker-alt"></i></a>
                </td>
                <td>
                    <a class="btn btn-danger" href="../../controller/eliminarUserAdmin.php?id='.$f['Identificacion'].'"><i class="ti-trash"></i>Eliminar</a>
                </td>
            <tr>';
        }
    }
}


?>