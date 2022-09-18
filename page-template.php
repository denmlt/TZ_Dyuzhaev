<?php
/**
 * Template Name: page templ
 * 
 * Full width template ......
 *
 * @package Page WordPress theme
 */

?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<!-- <title>TW</title>
		<link rel="stylesheet" href="style.css" />
		<meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
        	<script src="https://cdn.tailwindcss.com"></script> -->
        <?php wp_head(); 
	</head>

	<body>
        <!-- <div class="wrapper"> -->
            <div class="container">
                <div class="header">
                    <?php get_header(); ?>
                </div>
                <div class="content">
                    <div class="hero">                    
                        <button class="callto top_button" >
                            Call To Action
                        </button>
                    </div>
                <div class="about">
                    <h1 class="about_title"><?php get_post_meta( $post_id, '_generate_title', true)?> </h1>
                    <div class="about_content">
                        <div class="about_text"><?php get_post_meta( $post_id, '_generate_text', true)?></div>
                        <div class="video-container">
                            <iframe src="https://youtu.be/TJDLViKz3lo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </div>
                          
                    </div>
                </div>
                <div class="promo">
                    <div class="promo_text"><?php get_post_meta( $post_id, '_generate_promo', true)?></div>
                    <button class="callto middle_button">Call to action</button>
                    <div class="services">
                        <div class="service_item">
                          
                                <i><svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z"></path></svg>
                              </i>
                                <h3 class="blog_title">Title</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem amet hic assumenda at cupiditate temporibus nostrum omnis tempore, suscipit voluptatem.</p>
                        </div>                      
                        <div class="service_item">
                      
                                <i><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                                </svg>
                                </i>                           
                            <h3 class="blog_title">Title</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem amet hic assumenda at cupiditate temporibus nostrum omnis tempore, suscipit voluptatem.</p>
                        </div>
                        <div class="service_item">                           
                            <i><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z" />
                              </svg>
                              </i>                          
                            <h3 class="blog_title">Title</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem amet hic assumenda at cupiditate temporibus nostrum omnis tempore, suscipit voluptatem.</p>
                        </div>
                    </div>
                </div>
                <div class="blog">
                    <h2 class="about_title">Blog posts</h2>
                    <div class="blog_posts">
                    <!-- #post-## -->
                    <?php while (have_posts()) : the_post();  ?>
                        <div class="blog_item">
                            <h3 class="blog_title"><?php the_title(); ?></h3>
                            <p> <?php the_excerpt(); ?></p>
                        </div>                    
                    <?php endwhile; ?>
                    </div>
                </div>

            </div>
            <div class="footer">
                <h2>Footer</h2>
            </div>
            </div>
        <!-- </div> -->
        <?php get_footer(); ?>
	</body>
</html>
