<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  <title></title>
</head>
<body>
  <?php include 'main-header.php' ?>
  <section>
  	<article id="post-send">
  		<form id="post-send-form">
			<img src="" alt="Foto de perfil" />
			<textarea placeholder="Diga algo para seus seguidores:"></textarea>
			<div>
				<span id="post-send-mediabutton">
					<button><i class="fas fa-camera"></i></button>
					<button><i class="fas fa-video"></i></button>
				</span>
				<span id="post-send">
					<input type="button" name="submit" id="post-submit-button" value="Publicar">
				</span>
			</div>
  		</form>
    </article>
    <section id="post-display">
    	<!-- Post example -->
    	<article class="post" id="post-number:1">
    		<header>
    			<a href="#">
    				<h1>
    					<img src="" alt="Foto de perfil:">
    					<span>User</span>
    				</h1>
    			</a>
    		</header>
    		<section>
    			Content here
    		</section>
    		<footer>
    			<label for="like-post-number:1"><i class="far fa-heart fa-lg"></i></label>
				<input type="checkbox" id="like-post-number:1" name="like" class="btn-like">
				<button><i class="fas fa-comment fa-lg"></i></button>
    		</footer>
    	</article>
    </section>
  </section>
</body>
</html>
