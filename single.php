<?php get_header();?>

<!--Content-->
<section id="content">
    <div class="wrap-content zerogrid">
        <div class="row block03">
            <div class="col-2-3">
                <div class="wrap-col">
                    <?php while(have_posts()):the_post();?>
                    <article>
                        <h1>
                            <a href="<?php the_permalink() ?>">
                                <?php the_title() ?>
                            </a>
                        </h1>
                        <?php the_time('m F, Y'); ?>
                        <?php the_author(); ?>
                        <a href="#">
                            <?php comments_number('No comment', 'One comment', '% comments'); ?>
                        </a>
                        <?php
                        the_post_thumbnail();
                        ?>
                            <p>
                                <?php the_content(); ?>
                            </p>
                            <p>
                                <?php read_more(30); ?><a href="<?php the_permalink() ?>"> ... Read more</a></p>
                            <div class="comment">
                                <form>
                                    <?php comments_template(); ?>
                                </form>
                            </div>
                    </article>
                    <?php endwhile;?>
                </div>
            </div>
            <div class="col-1-3">
                <div class="wrap-col">
                    <div class="box">
                        <div class="heading">
                            <h2>Latest Albums</h2>
                        </div>
                        <div class="content">
                            <img src="images/albums.png" />
                        </div>
                    </div>
                    <div class="box">
                        <div class="heading">
                            <h2>Upcoming Events</h2>
                        </div>
                        <div class="content">
                            <div class="list">
                                <ul>
                                    <li><a href="#">Magic Island Ibiza</a></li>
                                    <li><a href="#">Bamboo Is Just For You</a></li>
                                    <li><a href="#">Every Hot Summer</a></li>
                                    <li><a href="#">Magic Island Ibiza</a></li>
                                    <li><a href="#">Bamboo Is Just For You</a></li>
                                    <li><a href="#">Every Hot Summer</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer()?>