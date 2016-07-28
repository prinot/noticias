<h1>ENVIAR UN MENSAJE</h1><br>
<div class="panel panel-default">
<div class="panel-heading">MENSAJE</div>
<div class="panel-body">

<form role="form" method="post" action="./?r=index/addmsg">
  <div class="form-group">
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
  </div>
  <div class="form-group">
    <input type="email" name="email" required class="form-control" id="exampleInputEmail1" placeholder="Correo Electrónico">
  </div>
  <div class="form-group">
    <textarea class="form-control" name="comment" required rows="4" placeholder="Escribe tu comentario ..."></textarea>
  </div>
  <input type="hidden" name="post_id" value="<?=$post->id;?>">
  <button type="submit" class="btn btn-primary">Enviar comentario</button>
</form>
		
