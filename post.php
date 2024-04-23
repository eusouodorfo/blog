<?php
    include_once("templates/header.php");

    if(isset($_GET['id'])) {

        $postId = $_GET['id'];
        $currentPost;

        foreach($posts as $post) {

            if($post['id'] == $postId){
                $currentPost = $post;
            }
        }
    }
?>

<main id="post-container">
    <div class="content-container">
        <h1 id="main-title"><?= $currentPost['title']?></h1>
        <p id="post-description"><?= $currentPost['description']?></p>
        <div class="img-container">
            <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?= $currentPost['title']?>">
        </div>
        
        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero nemo, facere voluptatum debitis nesciunt voluptatem
        itaque aperiam. Nam id expedita reiciendis, veritatis quo dolore. Consectetur ducimus ad nulla quibusdam delectus! Quibusdam voluptate
        dolores fugiat similique labore, nobis sunt dignissimos esse explicabo ullam omnis ratione veritatis voluptatem tempora eos, porro optio
        a soluta magnam ex necessitatibus amet? Sapiente repudiandae laborum est?
        Esse assumenda sapiente optio minus amet, vel provident maxime. Dolorum vitae, voluptas sapiente vero quisquam, quam dicta placeat 
        esse magni voluptatum excepturi in! Beatae, omnis iste dolore enim hic error.
        Eum magnam asperiores repellat? Dolores, dolore minima. Voluptatibus quas quos est obcaecati, aliquam aliquid at ex autem enim tenetur
        repellendus perspiciatis cum exercitationem? Culpa eum voluptatem, harum quae fugit beatae?
        Nesciunt atque neque consequuntur necessitatibus quaerat praesentium eveniet odio ut suscipit est excepturi, voluptas sint. Ut impedit 
        odit amet officiis, tenetur, eos numquam ducimus ipsum accusamus expedita soluta obcaecati nemo!</p>

        <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero nemo, facere voluptatum debitis nesciunt voluptatem
        itaque aperiam. Nam id expedita reiciendis, veritatis quo dolore. Consectetur ducimus ad nulla quibusdam delectus! Quibusdam voluptate
        dolores fugiat similique labore, nobis sunt dignissimos esse explicabo ullam omnis ratione veritatis voluptatem tempora eos, porro optio
        a soluta magnam ex necessitatibus amet? Sapiente repudiandae laborum est?
        Esse assumenda sapiente optio minus amet, vel provident maxime. Dolorum vitae, voluptas sapiente vero quisquam, quam dicta placeat 
        esse magni voluptatum excepturi in! Beatae, omnis iste dolore enim hic error.
        Eum magnam asperiores repellat? Dolores, dolore minima. Voluptatibus quas quos est obcaecati, aliquam aliquid at ex autem enim tenetur
        repellendus perspiciatis cum exercitationem? Culpa eum voluptatem, harum quae fugit beatae?
        Nesciunt atque neque consequuntur necessitatibus quaerat praesentium eveniet odio ut suscipit est excepturi, voluptas sint. Ut impedit 
        odit amet officiis, tenetur, eos numquam ducimus ipsum accusamus expedita soluta obcaecati nemo!</p>
    </div>

    <aside id="nav-container">
        <h3 id="tags-title">Tags</h3>
            <ul id="tag-list">
                <?php foreach($currentPost['tags'] as $tag): ?>
                    <li><a href="#"><?= $tag ?></a></li>
                <?php endforeach?>
            </ul>
        <h3 id="categories-title">Categorias</h3>
            <ul id="categories-list">
                <?php foreach($categories as $category): ?>
                    <li><a href="#"><?= $category ?></a></li>
                <?php endforeach?>
            </ul>
    </aside>

</main>



<?php
    include_once("templates/footer.php")
?>