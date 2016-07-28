<section class="main container">
    <div class="row">
      <section class="posts col-md-9">

        <?php
        $post=PostData::getById($_GET["id"]);
        Viewer::addView($post->id,"post_id","post_view");

        ?>
        <h1 class="post-title"><a style="text-decoration: none; font-size: 24px; color: #000;"><?php echo $post->title;?></h1>
          <hr>

        <div class="row">
          <div class="post-contenido text-justify">

        <?php if($post->show_image&&$post->image_id!=null):
        $image = ImageData::getById($post->image_id);
        ?>

        <div align=""><img src="storage/images/<?php echo $image->src;?>" class="img-thumbnail"></div>
          <div style="padding-top: 10px; font-size: 16px;">
            <?php endif;?>
            <?php echo nl2br($post->content);?>
            <br>
            <br>
          </div>
            <h4>Deja un comentario</h4>

        <form role="form" method="post" action="./?r=index/addcomment">
          <div class="form-group">
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nombre">
          </div>
          <div class="form-group">
            <input type="email" name="email" required class="form-control" id="exampleInputEmail1" placeholder="Correo Electrónico">
          </div>
          <div class="form-group">
            <textarea class="form-control" name="comment" required rows="4" placeholder="Escribe tu comentario..."></textarea>
          </div>
          <input type="hidden" name="post_id" value="<?=$post->id;?>">
          <button type="submit" class="btn btn-primary">Enviar comentario</button>
        </form>

          </div>
        </div>

      </section>

      <aside class="col-md-3 hidden-xs hidden-sm">

        <div class="destacadas">Destacada</div>
          <div href="#" class="list-group-item" style="text-decoration: none; padding-bottom: 25px;">       
                <?php 
                $posts = PostData::getLast1(); 
                ?>
                <?php foreach($posts as $post):?>
                <p class="post-title" style="margin-top: 10px;"><a style="font-size: 16px; color: #000;" href="./?r=index/post&id=<?php echo $post->id; ?>"><?php echo $post->title;?></a></p>
                <?php if($post->show_image&&$post->image_id!=null):
                $image = ImageData::getById($post->image_id);
                ?>
                <img src="storage/images/<?php echo $image->src;?>" class="img-thumbnail">
                <?php endif;?>
                <?php endforeach; ?>
          </div>
          <br>

        <div class="ultimas">Últimas Noticias</div>
          <div href="#" class="list-group-item" style="text-decoration: none; padding-bottom: 25px;">       
                <?php 
                $posts = PostData::getLast10(); 
                ?>
                <?php foreach($posts as $post):?>
                <p class="post-title" style="margin-top: 10px;"><a style="font-size: 16px; color: #000;" href="./?r=index/post&id=<?php echo $post->id; ?>"><?php echo $post->title;?></a></p>
                <?php if($post->show_image&&$post->image_id!=null):
                $image = ImageData::getById($post->image_id);
                ?>
                <img src="storage/images/<?php echo $image->src;?>" class="img-thumbnail">
                <?php endif;?>
                <?php endforeach; ?>
          </div>
      </aside>
    </div>
  </section>
