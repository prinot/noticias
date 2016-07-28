                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Configuración general 
                        </h1>
                        <ol class="breadcrumb">
                            <li class="">
                                <i class="fa fa-dashboard"></i> Escritorio
                            </li>
                            <li class="active">
                                <i class="fa fa-th-list"></i> Configuración general
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-th-list fa-fw"></i> Públicaciones</h3>
                            </div>
                            <div class="panel-body">
                                <div class="">
                                <form method="post" action="./?r=admin/updgeneralcfg">
                                    <table class="table table-bordered table-hover table-striped">
                                        <tbody>
                                        <?php foreach($data["posts"] as $post):?>
                                            <tr>
                                                <td><?=$post->name;?></td>
                                                <td><input type="text" class="form-control" name="<?=$post->slug;?>" value="<?=$post->description;?>"></td>
                                            </tr>
                                        <?php endforeach;?>
                                            <tr>
                                                <td></td>
                                                <td><input type="submit" class="btn btn-primary"  value="Guardar"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    </form>
                                    </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->