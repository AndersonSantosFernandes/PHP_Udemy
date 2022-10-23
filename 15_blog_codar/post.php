<?php
    include_once("templates/header.php");
    if(isset($_GET['id'])){
        $postId = $_GET['id'];
        $currentPost;
        foreach($posts as $post){
            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }
?>
   <main id="post-container">
    <div class="content-container">
       <h1 id= "main-title"> <?= $currentPost['title'] ?> </h1>
       <p id="post-description"> <?= $currentPost['description'] ?> </p> 
       <div class="img-container">
        <img src="<?=$BASE_URL?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title'] ?>">
       </div>
       <p class="post-container">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam repellat perferendis id commodi eligendi corrupti esse? Reiciendis alias odio praesentium debitis. Numquam minima perferendis asperiores incidunt mollitia ipsa? Consectetur, earum?
       Officiis, molestias minus! Facere ipsam libero veniam architecto enim dignissimos soluta quasi accusamus, id quibusdam perspiciatis in eligendi, nobis distinctio hic dicta sequi laborum dolores tempora possimus quod. Laboriosam, illum.
       Consequatur expedita perspiciatis ab dolore! Vitae nostrum eius eaque praesentium rerum. Impedit illo labore ea aliquid velit explicabo molestias ipsam delectus odit, quo ipsa soluta iste quos, molestiae doloremque commodi?
       Labore sit expedita dolorum dolorem molestias accusantium. Repellat placeat optio enim, ex recusandae inventore magni veritatis minus ullam quo nulla corrupti iure corporis doloremque vero, aliquid porro. Reiciendis, odit iste.
       Dolores placeat quam magnam perferendis, debitis tenetur saepe ipsa, beatae temporibus voluptate harum accusamus amet! Modi id expedita corporis? Iure rem deleniti illum suscipit accusamus repellendus, tenetur nemo accusantium consectetur?</p>
    
       <p class="post-container">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam repellat perferendis id commodi eligendi corrupti esse? Reiciendis alias odio praesentium debitis. Numquam minima perferendis asperiores incidunt mollitia ipsa? Consectetur, earum?
       Officiis, molestias minus! Facere ipsam libero veniam architecto enim dignissimos soluta quasi accusamus, id quibusdam perspiciatis in eligendi, nobis distinctio hic dicta sequi laborum dolores tempora possimus quod. Laboriosam, illum.
       Consequatur expedita perspiciatis ab dolore! Vitae nostrum eius eaque praesentium rerum. Impedit illo labore ea aliquid velit explicabo molestias ipsam delectus odit, quo ipsa soluta iste quos, molestiae doloremque commodi?
       Labore sit expedita dolorum dolorem molestias accusantium. Repellat placeat optio enim, ex recusandae inventore magni veritatis minus ullam quo nulla corrupti iure corporis doloremque vero, aliquid porro. Reiciendis, odit iste.
       Dolores placeat quam magnam perferendis, debitis tenetur saepe ipsa, beatae temporibus voluptate harum accusamus amet! Modi id expedita corporis? Iure rem deleniti illum suscipit accusamus repellendus, tenetur nemo accusantium consectetur?</p>

       <p class="post-container">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam repellat perferendis id commodi eligendi corrupti esse? Reiciendis alias odio praesentium debitis. Numquam minima perferendis asperiores incidunt mollitia ipsa? Consectetur, earum?
       Officiis, molestias minus! Facere ipsam libero veniam architecto enim dignissimos soluta quasi accusamus, id quibusdam perspiciatis in eligendi, nobis distinctio hic dicta sequi laborum dolores tempora possimus quod. Laboriosam, illum.
       Consequatur expedita perspiciatis ab dolore! Vitae nostrum eius eaque praesentium rerum. Impedit illo labore ea aliquid velit explicabo molestias ipsam delectus odit, quo ipsa soluta iste quos, molestiae doloremque commodi?
       Labore sit expedita dolorum dolorem molestias accusantium. Repellat placeat optio enim, ex recusandae inventore magni veritatis minus ullam quo nulla corrupti iure corporis doloremque vero, aliquid porro. Reiciendis, odit iste.
       Dolores placeat quam magnam perferendis, debitis tenetur saepe ipsa, beatae temporibus voluptate harum accusamus amet! Modi id expedita corporis? Iure rem deleniti illum suscipit accusamus repellendus, tenetur nemo accusantium consectetur?</p>
    </div>
    <aside id=nav-container>
        <h3 id="tag-title">Tags</h3>
        <ul id="tag-list">
            <?php foreach($currentPost['tags'] as $tag):?>
               <li> <a href="#"><?= $tag ?></a> </li>
            <?php endforeach;?>
        </ul>
            <h3 id="categories-title">Categorias</h3>
        <ul id="categories-list">
            <?php foreach($categories as $category):?>
               <li> <a href="#"><?= $category ?></a> </li>
            <?php endforeach;?> 
        </ul>
   </aside>
   </main>   
<?php
    include_once("templates/footer.php");
?> 