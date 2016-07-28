<?php
$categories = CategoryData::getAll();
?>
<div class="container">
	<div class="row">
		<div class="col-md-9">
			<article class="post clearfix">
		
				<?php 
				$posts = PostData::getLast10(); 
				?>
				<?php foreach($posts as $post):?>
						<h1 class="post-title"><a style="font-size: 24px; color: #000; padding-top: 5px;" href="./?r=index/post&id=<?php echo $post->id; ?>"><?php echo $post->title;?></a></h1>
				<div class="post-contenido text-justify">
							<?php if($post->show_image&&$post->image_id!=null):
							$image = ImageData::getById($post->image_id);
							?>
							<br>
							<a href="#" class="thumb pull-left">
							<img src="storage/images/<?php echo $image->src;?>" class="img-thumbnail">
							</a>
							<div style="padding-top: 10px; padding-bottom: 15px;">
							<?php endif;?>
							<?php echo nl2br(substr($post->content, 0, 700)."...");?>
							</div>
							<div class="contenedor-botones">
			          		<a href="./?r=index/post&id=<?php echo $post->id; ?>" class="btn btn-primary">Leer mas</a>
			          		</div>
				</div>
				<?php endforeach; ?>
			</article>
		</div>

		<div class="col-md-3">

			<?php if(count($categories)>0):?>
	          <div class="list-group">
	          <div class="categorias" style="background:#00bfa5; color:#ffffff; font-size: 26px;">Categorias</div>
	          
	          <?php foreach($categories as $cat):?>
	            <a href="#" class="list-group-item"><?=$cat->name;?></a>
	          <?php endforeach;?>
	          </div>
	        <?php endif;?>

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
		</div>

	</div>
</div>