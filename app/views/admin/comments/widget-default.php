<?php
$comments = CommentData::getAll();
?>
                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Comentarios 
                        </h1>
                        <ol class="breadcrumb">
                            <li class="">
                                <i class="fa fa-dashboard"></i> Escritorio
                            </li>
                            <li class="active">
                                <i class="fa fa-comments"></i> Comentarios
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                    <!-- - - - - -->
                    <?php if(count($comments)>0):?>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-th-list fa-fw"></i> Comentarios</h3>
                            </div>
                                <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table datatable table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Contenido</th>
                                                <th>Nombre</th>
                                                <th>Correo electrónico</th>
                                                <th>Públicación</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach($comments as $post):
                                        if($post->comment_id==null)
                                            $thepost= $post->getPost();
                                        ?>
                                            <tr>
                                                <td><?=$post->content;?></td>
                                                <td><?=$post->name;?></td>
                                                <td><?=$post->email;?></td>
                                                <td><?php if($post->comment_id==null){ echo "<a href='./?r=index/post&id=".$thepost->id."'>".$thepost->title."</a>";}?></td>
                                                <td>
                                                <?php if(!$post->is_public):?>
                                                <a href="./?r=admin/aprovecomment&id=<?=$post->id;?>" class="btn btn-xs btn-primary"><i class="fa fa-thumbs-up"></i></a>
                                            <?php else:?>
                                                <a href="./?r=admin/unaprovecomment&id=<?=$post->id;?>" class="btn btn-xs btn-info"><i class="fa fa-thumbs-up fa-rotate-180"></i></a>
                                            <?php endif;?>
<!-- Button trigger modal -->
<?php if($post->comment_id==null):?>
  <a data-toggle="modal" href="#answermsg<?=$post->id;?>" class="btn btn-success btn-xs"><i class="fa fa-send"></i></a>
<?php endif;?>
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

                                        <?php foreach($comments as $post):?>
  <!-- Modal -->
  <div class="modal fade" id="answermsg<?=$post->id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Responder mensaje</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" action="./?r=admin/answercomment">
<h4>MENSAJE</h4>
<p><b>Nombre:</b> <?php echo $post->name;?></p>
<p><b>Correo electrónico:</b> <?php echo $post->email;?></p>
<p><b>Contenido:</b> <?php echo $post->content;?></p>
<p><b>Fecha:</b> <?php echo $post->created_at;?></p>
<h4>RESPUESTA</h4>
  <div class="form-group">
    <textarea rows="4" class="form-control" name="content" placeholder="Escribe tu mensaje..."></textarea>
  </div><br>
  <input type="hidden" name="comment_id" value="<?php echo $post->id; ?>">
  <button type="submit" class="btn btn-primary">Responder</button>
</form>
        </div>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<?php endforeach;?>

                    <?php else:?>
                        <div class="jumbotron">
                        <h2>No hay comentarios</h2>
                        </div>
                    <?php endif;?>
                    </div>
                </div>
                <!-- /.row -->