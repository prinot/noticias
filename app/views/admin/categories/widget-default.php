                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Categorias 
                        </h1>
                        <ol class="breadcrumb">
                            <li class="">
                                <i class="fa fa-dashboard"></i> Escritorio
                            </li>
                            <li class="active">
                                <i class="fa fa-th-list"></i> Categorias
                            </li>
                        </ol>

<!-- Button trigger modal -->
  <a data-toggle="modal" href="#newcategory" class="btn btn-default">Nueva categoria</a>

  <!-- Modal -->
  <div class="modal fade" id="newcategory" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Nueva categoria</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" action="./?r=admin/addcategory">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
  </div>
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
                    </div>
                </div>
                <!-- /.row -->
<br>
                <div class="row">
                    <div class="col-lg-12">
                                <?php if(count($data["categories"])>0):?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-th-list fa-fw"></i> Categorias</h3>
                            </div>
                                <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table datatable table-bordered table-hover table-striped" width="100%">
                                        <thead>
                                            <tr>
                                                <th width="80%">Titulo</th>
                                                <th width="20%"></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($data["categories"] as $post):?>
                                            <tr>
                                                <td><?=$post->name;?></td>
                                                <td>
<!-- Button trigger modal -->
  <a data-toggle="modal" href="#editcategory<?=$post->id;?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>


                                                <a href="./?r=admin/deletecategory&id=<?=$post->id;?>" class="btn btn-xs btn-danger"><i class="fa fa-remove"></i></a>
                                                </td>
                                            </tr>
                                        <?php endforeach;?>
                                        </tbody>
                                    </table>
                                    </div>
                            </div>
                        </div>


                                        <?php foreach($data["categories"] as $post):?>
  <!-- Modal -->
  <div class="modal fade" id="editcategory<?=$post->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Editar categoria</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" action="./?r=admin/updatecategory">
  <div class="form-group">
    <input type="text" name="name" class="form-control" value="<?php echo $post->name; ?>" id="exampleInputEmail1" placeholder="Nombre">
  </div>
  <input type="hidden" name="id" value="<?php echo $post->id; ?>">
  <button type="submit" class="btn btn-primary">Guardar</button>
</form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<?php endforeach;?>

                                <?php else:?>
                                    <div class="jumbotron"><h2>No hay categorias</h2></div>
                                <?php endif;?>

                    </div>
                </div>
                <!-- /.row -->