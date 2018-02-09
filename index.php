<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
   <title></title>
</head>
<body>
   <!-- Default Header -->
   <?php include 'main-header.php' ?>
   <aside id="float-buttons">
      <nav>
         <ul>
            <li><a href="#"><i class="fas fa-comment-alt fa-2x"></i></a></li>
            <li><a href="#"><i class="fas fa-graduation-cap fa-2x"></i></a></li>
         </ul>
      </nav>
   </aside>
   <!-- Side Bar -->
   <aside id="sidebar">
      <article id="account-details">
         <img src="" alt="Foto de perfil" />
         <div id="account-info">
            <h1>Username</h1>
            <nav>
               <ul id="account-info-links">
                  <li><a href="#">Link 1</a></li>
                  <li><a href="#">Link 2</a></li>
               </ul>
            </nav>
         </div>
      </article>
      <article id="topdrawns-display">
         <h1>Top 3</h1>
         <ol>
            <li><img src="" alt="image-1"></li>
            <li><img src="" alt="image-2"></li>
            <li><img src="" alt="image-3"></li>
         </ol>
      </article>
   </aside>
   <!-- Main Section -->
   <section>
      <article id="post-send">
         <form id="post-send-form">
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
      <!-- Post Display Section -->
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
               Conteudo aqui
            </section>
            <footer>
               <label for="like-post-number:1"><i class="far fa-heart fa-lg"></i></label>
               <input type="checkbox" id="like-post-number:1" name="like" class="btn-like">
               <button><i class="fas fa-comments fa-lg"></i></button>
            </footer>
         </article>
      </section>
   </section>
</body>
</html>
