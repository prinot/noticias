                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            <i class="fa fa-picture-o"></i> Galeria 
                        </h1>
                        <ol class="breadcrumb">
                            <li class="">
                                <i class="fa fa-dashboard"></i> Escritorio
                            </li>
                            <li class="active">
                                <i class="fa fa-picture-o"></i> Galeria
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                    <a href="./?r=image/new" class="btn btn-default">Agregar</a><br><br>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-th-list fa-fw"></i> Imagenes</h3>
                            </div>
                                <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table datatable table-bordered table-hover table-striped" width="100%">
                                        <thead>
                                            <tr>
                                                <th width="18%">Vista previa</th>
                                                <th width="70%">Titulo</th>
                                                <th width="14%"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($data["images"] as $post):
                                        ?>
                                            <tr>
                                                <td>
                                                	<img src="storage/images/<?php echo $post->src;?>" style="width:120px;">
                                                </td>
                                                <td><?=$post->title;?></td>
                                                <td>
                                                <a href="./?r=admin/editimage&id=<?=$post->id;?>" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i></a>
                                                <a href="./?r=image/del&id=<?=$post->id;?>" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach;?>
                                        </tbody>
                                    </table>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->