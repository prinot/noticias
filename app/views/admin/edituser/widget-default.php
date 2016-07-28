<?php
$user = UserData::getById($_GET["id"]);
?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Editar usuario
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                  <a href="./?r=admin/index"><i class="fa fa-dashboard"></i> Escritorio</a>
                            </li>
                            <li>
                                  <a href="./?r=admin/users"><i class="fa fa-users"></i> Usuarios</a>
                            </li>
                            <li class="active">
                                <i class="fa fa-asterisk"></i> Editar usuario
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-8">

                        <form role="form" method="post" action="./?r=user/update" enctype="multipart/form-data">
                            <div class="form-group">
                                <label>Imagen (480x480)</label>
                                <input type="file" name="image">
                                <?php if($user->image!=null):
?>
<br>
<img src="storage/images/<?php echo $user->image;?>" class="img-responsive img-thumbnail" style="width:180px;">
<?php endif;?>
                            </div>
                            <div class="form-group">
                                <input type="text" name="name" value="<?=$user->name;?>" class="form-control" placeholder="Nombre completo">
                            </div>
                            <div class="form-group">
                                <input type="text" name="username" value="<?=$user->username;?>" class="form-control" placeholder="Nombre de usuario" required>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" value="<?=$user->email;?>" class="form-control" placeholder="Correo electrónico">
                            </div>
                            <div class="form-group">
                                <input type="password" name="password" class="form-control" placeholder="Contraseña" >
                                <p class="text-muted">Solo se modifica la contraseña si el campo no esta vacio.</p>
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
                                        <option value="<?=$cat->id;?>" <?php if($cat->id==$user->kind_id){echo "selected";}?>><?=$cat->name;?></option>
                                <?php endforeach;?>
                                </select>
                                <?php endif;?>
                            </div>
                            <input type="hidden" name="id" value="<?=$user->id;?>">
                            <button type="submit" class="btn btn-primary">Actualizar</button>

                        </form>

                    </div>
                    <div class="col-lg-3">


                    </div>
                </div>
                <!-- /.row -->
<br><br><br><br><br>