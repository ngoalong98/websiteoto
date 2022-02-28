<div class="box-search">
    <p  class="title-sidebar">Tìm kiếm</p>
    <div class="content-search">
        <form action="<?php bloginfo( 'url' );?>/" method="GET" role="form">
            <input type="text" name="s" class="form-control" id="" placeholder="Từ khoá...">
            <button type="submit" class="btn btn-primary">Tìm kiếm</button>
        </form>
    </div>
</div>
<div class="box-cate">
    <p class="title-sidebar"><i class="fas fa-bars"></i>Dịch vụ thuê xe</p>
    <div class="box-border">
        <ul class="lh2-ul">
            <?php
                $args = array(
                    'child_of'  => 0,
                    '<strong>orderby</strong>'    => 'id',
                );
                $categories = get_categories( $args );
                foreach ( $categories as $category ) { ?>
                <li>
                    <a href="<?php echo get_term_link($category->slug, 'category');?>">
                        <i class="fas fa-caret-right"></i>  <?php echo $category->name ; ?>
                    </a>
                </li>
            <?php } ?>
            <li><a href=""><i class="fas fa-caret-right"></i>Thuê xe du lịch</a></li>
            <li><a href=""><i class="fas fa-caret-right"></i>Thuê xe dự án</a></li>
            <li><a href=""><i class="fas fa-caret-right"></i>Thuê xe cưới hỏi</a></li>
        </ul>
    </div>
</div>
<div class="box-contact">
    <p class="title-sidebar"><i class="fas fa-bars"></i>Hỗ trợ trực tuyến</p>
    <div class="box-border">
        <ul class="lh2-ul">
            <li>Hotline: 0915 17 12 19</li>
            <li>Email: inb.mycar@gmail.com</li>
        </ul>
    </div>
</div>
<div class="box-hightlight-news">
    <p class="title-sidebar"><i class="fas fa-bars"></i>Tin nỗi bật</p>
    <div class="box-border">
        <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=5&post_type=san-pham'); ?>
        <?php global $wp_query; $wp_query->in_the_loop = true; ?>
        <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
        <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');?>
            <div class="list-news">
                <a class="img" href="<?php the_permalink();?>"><img class="img-fluid lh2-img" src="<?php echo $featured_img_url;?>" alt="<?php the_title();?>"></a>
                <div class="right-list">
                    <a href="<?php the_permalink();?>"><?php the_title();?></a>
                    <div class="lh2-date"><i class="fas fa-calendar-alt"></i> <?php echo get_the_date();?></div>
                </div>
            </div>
        <?php endwhile; wp_reset_postdata(); ?>
    </div>
</div>