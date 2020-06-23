<?php get_header(); ?>

<div class="blog">
    <div class="wrap">
        <h2>Blog</h2>
        <div class="box-liste-posts">
            
            <?php
                $args= array ('post_type' => 'post', 'showposts' => 2);
                $my_posts= get_posts ($args);
            ?>
            <?php if( $my_posts) : foreach ($my_posts as $post) : setup_postdata ($post); ?>
                <div class="liste-posts ">
                    
                    <?php the_post_thumbnail(); ?>
                
                    <div class="box-content-post">
                        <h2><?php the_title(); ?></h2>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="custom-botao">Leia Mais</a>
                    </div>
                </div>
            <?php endforeach; endif; ?>
           
            
       
        </div>
    </div>
</div>

<?php get_footer(); ?>