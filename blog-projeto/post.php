<?php
include_once("templates/header.php");

if(isset($_GET['id'])){
    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post){
        if($post['id'] === $postId){
            $currentPost = $post;
        }
    }
}



?>

   <main id="post-container">
    <div class="content-container">
       <h1 id="main-title"><?= $currentPost['title'] ?></h1>
       <p id="post-description"><?= $currentPost['description'] ?></p>
       <div>
          <img src="<?= $BASE_URL?>/img/<?= $currentPost['img']?>" alt="<?= $currentPost['title'] ?>">
       </div>
       <p class="post-content">
          Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eos, at? Voluptatum saepe iusto eum fuga eos sint, provident est iure pariatur excepturi adipisci voluptatibus error amet, minus, dolorem nulla itaque.
          Nesciunt voluptatem temporibus minima facere quia modi quae id tempore ipsum natus soluta quos aliquid, nihil nostrum illum autem ab rerum blanditiis suscipit eaque ducimus possimus. Assumenda, optio. Necessitatibus, magni.
          Quos ipsam culpa consectetur ipsa accusantium libero, eos autem minima itaque reprehenderit recusandae laudantium id assumenda ratione, repudiandae qui quo quibusdam enim blanditiis nihil. Iure distinctio aliquam quam incidunt veritatis?
          Harum eligendi eos iure ducimus veniam est excepturi error distinctio porro rem molestiae soluta consequatur, iste aliquid consequuntur dolore incidunt velit modi? Facilis suscipit quibusdam asperiores aspernatur exercitationem nesciunt nihil.
          Exercitationem praesentium excepturi fugiat repellendus eveniet mollitia. Perferendis et reprehenderit doloribus vitae cum exercitationem nulla architecto eligendi corrupti repellat dolor autem eum iusto mollitia perspiciatis maiores blanditiis, voluptate dicta at?
       </p>
    </div>

   </main>

   <aside id="nav-container">
       <h3 id="tags-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag):?>
                <li><a href="#"><?= $tag ?></a></li>
            <?php endforeach; ?>
        </ul>


        <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category):?>
                <li><a href="#"><?= $category ?></a></li>
            <?php endforeach; ?>
        </ul>
   </aside>


<?php

include_once("templates/footer.php");

?>