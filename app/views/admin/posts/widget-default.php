                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Públicaciones 
                        </h1>
                        <ol class="breadcrumb">
                            <li class="">
                                <i class="fa fa-dashboard"></i> Escritorio
                            </li>
                            <li class="active">
                                <i class="fa fa-th-list"></i> Públicaciones
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
                                    <table class="table datatable table-bordered table-hover table-striped" width="100%">
                                        <thead>
                                            <tr>
                                                <th width="82%">Titulo</th>
                                                <th width="15%"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($data["posts"] as $post):?>
                                            <tr>
                                                <td><?=$post->title;?></td>
                                                <td>
                                                <a href="./?r=index/post&id=<?=$post->id;?>" class="btn btn-xs btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="./?r=admin/editpost&id=<?=$post->id;?>" class="btn btn-xs btn-warning"><i class="fa fa-pencil"></i></a>
                                                <a href="./?r=admin/delpost&id=<?=$post->id;?>" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></a>
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