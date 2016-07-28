
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Nuevo usuario
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                  <a href="./?r=admin/index"><i class="fa fa-dashboard"></i> Escritorio</a>
                            </li>
                            <li>
                                  <a href="./?r=admin/users"><i class="fa fa-users"></i> Usuarios</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-asterisk"></i> Nuevo usuario
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-8">

                        <form role="form" method="post" action="./?r=user/add" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Imagen (480x480)</label>
                                <input type="file" name="image">
                            </div>
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" placeholder="Nombre completo">
                            </div>
                            <div class="form-group">
                                <input type="text" name="username" class="form-control" placeholder="Nombre de usuario" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" placeholder="Correo electrónico">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Contraseña" required>
                            </div>
                            <div class="form-group">
                                <label>Tipo</label>
                                <?php
                                    $cats = KindData::getAll();
                                ?>
                                <?php if(count($cats)>0):?>
                                    <select name="kind_id" class="form-control" required>
                                        <option value="">-- SELECCIONE TIPO --</option>
                                    <?php foreach($cats as $cat):?>
                                        <option value="<?=$cat->id;?>"><?=$cat->name;?></option>
                                <?php endforeach;?>
                                </select>
                                <?php endif;?>
                            </div>
                            <button type="submit" class="btn btn-primary">Agregar</button>

                        </form>

                    </div>
                    <div class="col-lg-3">


                    </div>
                </div>
                <!-- /.row -->
<br><br><br><br><br>