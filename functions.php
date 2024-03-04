<?php

// * Template Resources
function theme_resources() {
  wp_enqueue_style( 'main', get_template_directory_uri() . '/dist/css/style.css' );
  wp_enqueue_style( 'hubspot', get_template_directory_uri() . '/dist/css/hubspot-forms.css' );
  wp_enqueue_style( 'owl-main', get_template_directory_uri() . '/dist/css/owl.carousel.min.css' );
  wp_enqueue_style( 'owl-theme', get_template_directory_uri() . '/dist/css/owl.theme.default.min.css' );
  wp_enqueue_style( 'style', get_stylesheet_uri() );
}
// * Load Styles  
add_action('wp_enqueue_scripts','theme_resources');

function load_scripts() {
  wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'bootstrapscript', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js' );
  wp_enqueue_script( 'forms', get_template_directory_uri() . '/dist/js/forms.js' );

}    
add_action('wp_enqueue_scripts', 'load_scripts');

// Disable updates nag
function remove_core_updates(){
	global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
	}
	add_filter('pre_site_transient_update_core','remove_core_updates');
	add_filter('pre_site_transient_update_plugins','remove_core_updates');
	add_filter('pre_site_transient_update_themes','remove_core_updates');

// Remove WordPress Version from admin footer
function remove_wp_footer_version() {
  if ( !current_user_can('manage_options') ) { 
      remove_filter( 'update_footer', 'core_update_footer' ); 
  }
}
add_action( 'admin_menu', 'remove_wp_footer_version' );

// Add BehindPixels website link to the admin footer
function bp_footer() {
  echo '<span id="footer-thankyou"><a href="https://www.behindpixels.com/" target="_blank">BehindPixels</a></span>';
}

add_filter('admin_footer_text', 'bp_footer');

// Navigation Menus
register_nav_menus(array(
    'main' => __('Main Menu')
    ));

// Add Featured Image Support
add_theme_support( 'post-thumbnails' );

// Show Featured Image on Custom Post Types
add_filter('manage_posts_columns', 'add_thumbnail_column', 5);
 
function add_thumbnail_column($columns){
  $columns['new_post_thumb'] = __('Image');
  return $columns;
}

function disable_new_posts_for_nav_menu() {
  $post_type = 'nav-menu'; 
  $count_posts = wp_count_posts($post_type);

  $published_posts = $count_posts->publish;

  if ($published_posts > 1) {
      // Add custom CSS to hide the 'Add New' button
      add_action('admin_head', function() use ($post_type) {
          global $typenow;
          if ($typenow == $post_type) {
            echo '<style type="text/css">
            .post-type-nav-menu .page-title-action { display: none; }
        </style>';
          }
      });

      // Remove 'Add New' from the Admin Menu
      remove_submenu_page("edit.php?post_type={$post_type}", "post-new.php?post_type={$post_type}");

      // Disable direct access to the 'Add New' page
      add_action('admin_init', function() use ($post_type) {
          global $pagenow;
          if ($pagenow == 'post-new.php' && isset($_GET['post_type']) && $_GET['post_type'] == $post_type) {
              wp_redirect(admin_url('edit.php?post_type=' . $post_type));
              exit;
          }
      });
  }
}
add_action('admin_menu', 'disable_new_posts_for_nav_menu');

function remove_navigation_menu_sub_menu_from_admin_bar() {
  global $wp_admin_bar;
  $post_type = 'nav-menu';
  $count_posts = wp_count_posts($post_type);

  $published_posts = $count_posts->publish;
  if ($published_posts > 1) {
      // Remove 'Add New' from the Admin Bar
      $wp_admin_bar->remove_menu('new-' . $post_type);
  }
}
add_action('admin_bar_menu', 'remove_navigation_menu_sub_menu_from_admin_bar', 999);

function hide_nav_menu_for_non_admin() {
  if (!current_user_can('administrator')) {
    $post_type = 'nav-menu';
      $menu_slug = "edit.php?post_type={$post_type}";
      global $menu;
      foreach ($menu as $index => $item) {
          if ($menu_slug === $item[2]) {
              unset($menu[$index]);
              break;
          }
      }
  }
}

add_action('admin_menu', 'hide_nav_menu_for_non_admin', 999);


// Footer Menu

function disable_new_posts_for_footer_menu() {
  $post_type = 'footer-menu'; 
  $count_posts = wp_count_posts($post_type);

  $published_posts = $count_posts->publish;

  if ($published_posts > 0) {
      // Add custom CSS to hide the 'Add New' button
      add_action('admin_head', function() use ($post_type) {
          global $typenow;
          if ($typenow == $post_type) {
            echo '<style type="text/css">
            .post-type-footer-menu .page-title-action { display: none; }
        </style>';
          }
      });

      // Remove 'Add New' from the Admin Menu
      remove_submenu_page("edit.php?post_type={$post_type}", "post-new.php?post_type={$post_type}");

      // Disable direct access to the 'Add New' page
      add_action('admin_init', function() use ($post_type) {
          global $pagenow;
          if ($pagenow == 'post-new.php' && isset($_GET['post_type']) && $_GET['post_type'] == $post_type) {
              wp_redirect(admin_url('edit.php?post_type=' . $post_type));
              exit;
          }
      });
  }
}
add_action('admin_menu', 'disable_new_posts_for_footer_menu');

function remove_footer_menu_sub_menu_from_admin_bar() {
  global $wp_admin_bar;
  $post_type = 'footer-menu';
  $count_posts = wp_count_posts($post_type);

  $published_posts = $count_posts->publish;
  if ($published_posts > 0) {
      // Remove 'Add New' from the Admin Bar
      $wp_admin_bar->remove_menu('new-' . $post_type);
  }
}
add_action('admin_bar_menu', 'remove_footer_menu_sub_menu_from_admin_bar', 999);

function hide_footer_menu_for_non_admin() {
  if (!current_user_can('administrator')) {
    $post_type = 'footer-menu';
      $menu_slug = "edit.php?post_type={$post_type}";
      global $menu;
      foreach ($menu as $index => $item) {
          if ($menu_slug === $item[2]) {
              unset($menu[$index]);
              break;
          }
      }
  }
}

add_action('admin_menu', 'hide_footer_menu_for_non_admin', 999);

function load_faqs() {

  $selectedCategory = $_POST['selectedCategory'];
  $postPerPage = $_POST['postPerPage'];

  $args = array(
    'post_type' => 'faq',
    'post_status' => 'publish',
    'taxonomy' => 'faq-category',
    'term' => $selectedCategory,
    'posts_per_page' => $postPerPage
  );
  $posts_loop = new WP_Query( $args );
    $i = 0;
    $current_language = wpml_get_current_language();
    $accordion_button_arabic_class = '';
  if ( $posts_loop->have_posts() ) :
        ?>
<div class="accordion" id="faqs-accordion">
  <?php
      while ( $posts_loop->have_posts() ) : $posts_loop->the_post();
    ?>
  <div class="accordion-item">
    <h2 class="accordion-header p-0">
      <?php 
          if ($current_language == 'ar') { 
              $accordion_button_arabic_class = 'accordion-button-ar';
          } else {
              $accordion_button_arabic_class = '';
          }
        ?>
      <button class="accordion-button collapsed <?php echo $accordion_button_arabic_class; ?>" type="button"
        data-bs-toggle="collapse" data-bs-target="#collapse-<?php echo $i; ?>"
        aria-controls="collapse-<?php echo $i; ?>">
        <?php the_field('question') ?>
      </button>
    </h2>
    <div id="collapse-<?php echo $i; ?>" class="accordion-collapse collapse" data-bs-parent="#faqs-accordion">
      <div class="accordion-body"><?php the_field('answer') ?></div>
    </div>
  </div>

  <?php
          $i++;
      endwhile;
      wp_reset_postdata();
      endif;
      ?>
</div>
<?php
      exit;
}

add_action('wp_ajax_nopriv_load_faqs', 'load_faqs');
add_action('wp_ajax_load_faqs', 'load_faqs');

// * Load Articles
function get_initial_articles() {
  $selectedCategory = $_POST['selectedCategory'];
  $args = array(
    'post_type'       => 'articles',
    'post_status'     => 'publish',
    'term'            => $selectedCategory,
		'taxonomy'        => 'article-category',
    'orderby'         => 'date',
    'posts_per_page'  => 6,
  );

  $posts_loop = new WP_Query( $args );
  if ( $posts_loop->have_posts() ) :
  while ( $posts_loop->have_posts() ) : $posts_loop->the_post();
    $post_id = get_the_ID();
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
  ?>

<div class="col-xl-4 col-md-6 col-sm-12 mb-30">
  <a href="<?php echo the_permalink(); ?>" class="w-100">

    <div class="card bp-card actionable bp-card-rounded bg-white box-shadow h-100 p-0">
      <div class="card-image" style="background-image: url('<?php echo $image[0]; ?>')">
        <div class="h-100 p-30">
          <div class="d-flex justify-content-start">
            <?php 
              $terms = get_the_terms( $post_id , 'article-category' );
              foreach ( $terms as $term ) {
                  $category_name = $term->name;
            ?>
            <div class="bp-chip bg-white mr-10"><?php echo $category_name; ?></div>
            <?php
              }
            ?>
          </div>
        </div>
      </div>
      <div class="pt-30 pl-30 pr-30 pb-20">
        <div class="text-small text-strong text-secondary"><?php echo get_the_date( 'd F Y' ); ?></div>
        <div class="text-strong text-medium mt-10 mb-20" style="min-height: 58px">
          <?php echo mb_strimwidth(get_the_title(), 0, 70, '...'); ?>
        </div>
        <p>
          <?php echo mb_strimwidth(get_the_excerpt(), 0, 120, '...'); ?>
        </p>
        <div class="d-flex flex-column col align-items-end w-100">
          <button class="btn bp-btn bp-btn-arrow">Read article</button>
        </div>
      </div>
    </div>
  </a>
</div>

<?php
  endwhile;
    wp_reset_postdata();
    endif;
     // * Send the Count of the fetched Posts
		echo json_encode(count($posts_loop->posts));
    exit;
}

add_action('wp_ajax_nopriv_get_initial_articles', 'get_initial_articles');
add_action('wp_ajax_get_initial_articles', 'get_initial_articles');

function get_more_articles() {
  $offset = $_POST['offset'];
  $selectedCategory = $_POST['selectedCategory'];
  
  $args = array(
    'post_type'      => 'articles',
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'term'           => $selectedCategory,
    'taxonomy'       => 'article-category',
    'posts_per_page' => 6,
    'offset'         => $offset
  );

  $posts_loop = new WP_Query( $args );
  if ( $posts_loop->have_posts() ) :
  while ( $posts_loop->have_posts() ) : $posts_loop->the_post();
    $post_id = get_the_ID();
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
  ?>

<div class="col-xl-4 col-md-6 col-sm-12 mb-30">
  <a href="<?php echo the_permalink(); ?>" class="w-100">

    <div class="card bp-card actionable bp-card-rounded bg-white box-shadow h-100 p-0">
      <div class="card-image" style="background-image: url('<?php echo $image[0]; ?>')">
        <div class="h-100 p-30">
          <div class="d-flex justify-content-start">
            <?php 
                  $terms = get_the_terms( $post_id , 'article-category' );
                  foreach ( $terms as $term ) {
                      $category_name = $term->name;
                      ?>
            <div class="bp-chip bg-white mr-10"><?php echo $category_name; ?></div>
            <?php
                  }
                ?>
          </div>
        </div>
      </div>
      <div class="pt-30 pl-30 pr-30 pb-20">
        <div class="text-small text-strong text-secondary"><?php echo get_the_date( 'd F Y' ); ?></div>
        <div class="text-strong text-medium mt-10 mb-20" style="min-height: 58px">
          <?php echo mb_strimwidth(get_the_title(), 0, 70, '...'); ?>
        </div>
        <p>
          <?php echo mb_strimwidth(get_the_excerpt(), 0, 120, '...'); ?>
        </p>
        <div class="d-flex flex-column col align-items-end w-100">
          <button class="btn bp-btn bp-btn-arrow">Read article</button>
        </div>
      </div>
    </div>
  </a>
</div>

<?php
  endwhile;
    wp_reset_postdata();
    endif;
    // * Send the Count of the fetched Posts
		echo json_encode(count($posts_loop->posts));
    exit;
}

add_action('wp_ajax_nopriv_get_more_articles', 'get_more_articles');
add_action('wp_ajax_get_more_articles', 'get_more_articles');

// * Load Featured articles
function get_featured_articles() {
  $selectedCategory = $_POST['selectedCategory'];
  $args = array(
    'post_type'       => 'articles',
    'post_status'     => 'publish',
    'term'            => $selectedCategory,
		'taxonomy'        => 'article-category',
    'orderby'         => 'date',
    'posts_per_page'  => 1,
  );

  $posts_loop = new WP_Query( $args );
  if ( $posts_loop->have_posts() ) :
  while ( $posts_loop->have_posts() ) : $posts_loop->the_post();
    $post_id = get_the_ID();
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
  ?>

  <div class="bp-card">
    <div class="article-card-image" style="background-image: url('<?php echo $image[0]; ?>')">
    <div class="row h-100 p-30 align-items-end">
          <div class="d-flex justify-content-start">
            <?php 
                  $terms = get_the_terms( $post_id , 'article-category' );
                  foreach ( $terms as $term ) {
                      $category_name = $term->name;
                      ?>
            <div class="bp-chip bg-white mr-10"><?php echo $category_name; ?></div>
            <?php
                  }
                ?>
          </div>
        </div>
    </div>
    <div class="bg-white p-30">
      
      <div class="text-secondary text-small text-strong"><?php echo get_the_date( 'd F Y' ); ?></div>
      <div class="text-medium text-strong mt-10 mb-10" style="min-height: 54px;">
      <?php echo mb_strimwidth(get_the_title(), 0, 60, '...'); ?>
      </div>
      <p >
        <?php echo mb_strimwidth(get_the_excerpt(), 0, 120, '...'); ?>
      </p>
      <div class="d-flex">
        <a class="btn bp-btn btn-primary mt-20" href="<?php the_permalink(); ?>">
          Read article
        </a>
      </div>
    </div>
  </div>

<?php
  endwhile;
    wp_reset_postdata();
    endif;
     // * Send the Count of the fetched Posts
		echo json_encode(count($posts_loop->posts));
    exit;
}

add_action('wp_ajax_nopriv_get_featured_articles', 'get_featured_articles');
add_action('wp_ajax_get_featured_articles', 'get_featured_articles');

// * Load Videos
function get_initial_videos() {
  $selectedCategory = $_POST['selectedCategory'];
  $args = array(
    'post_type'       => 'videos',
    'post_status'     => 'publish',
    'term'            => $selectedCategory,
		'taxonomy'        => 'videos-category',
    'orderby'         => 'date',
    'posts_per_page'  => 6,
  );

  $posts_loop = new WP_Query( $args );
  if ( $posts_loop->have_posts() ) :
  while ( $posts_loop->have_posts() ) : $posts_loop->the_post();
    $post_id = get_the_ID();
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
  ?>


<div class="col-xl-4 col-md-6 col-sm-12 mb-30">
  <a href="<?php echo the_permalink(); ?>" class="w-100">

    <div class="card bp-card actionable bp-card-rounded bg-white box-shadow h-100 p-0">
      <div class="card-image video" style="background-image: url('<?php echo $image[0]; ?>')">
        <div class="row p-30 h-100 align-items-end">
          <div class="d-flex justify-content-start">
            <?php 
                  $terms = get_the_terms( $post_id , 'videos-category' );
                  foreach ( $terms as $term ) {
                      $category_name = $term->name;
                ?>
            <div class="bp-chip bg-white mr-10"><?php echo $category_name; ?></div>
            <?php
                }
              ?>
          </div>
        </div>
      </div>
      <div class="pt-30 pl-30 pr-30 pb-20">
        <div class="text-small text-strong"><?php echo get_the_date( 'd F Y' ); ?></div>
        <div class="text-strong text-medium mt-10 mb-20" style="min-height: 58px">
          <?php echo mb_strimwidth(get_the_title(), 0, 70, '...'); ?>
        </div>
        <p>
          <?php echo mb_strimwidth(get_the_excerpt(), 0, 120, '...'); ?>
        </p>
        <div class="d-flex flex-column col align-items-end w-100">
          <button class="btn bp-btn bp-btn-arrow">Watch video</button>
        </div>
      </div>
    </div>

  </a>
</div>

<?php
  endwhile;
    wp_reset_postdata();
    endif;
     // * Send the Count of the fetched Posts
		echo json_encode(count($posts_loop->posts));
    exit;
}

add_action('wp_ajax_nopriv_get_initial_videos', 'get_initial_videos');
add_action('wp_ajax_get_initial_videos', 'get_initial_videos');

function get_more_videos() {
  $offset = $_POST['offset'];
  $selectedCategory = $_POST['selectedCategory'];
  
  $args = array(
    'post_type'      => 'videos',
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'term'           => $selectedCategory,
    'taxonomy'       => 'videos-category',
    'posts_per_page' => 6,
    'offset'         => $offset
  );

  $posts_loop = new WP_Query( $args );
  if ( $posts_loop->have_posts() ) :
  while ( $posts_loop->have_posts() ) : $posts_loop->the_post();
    $post_id = get_the_ID();
    $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id ), 'single-post-thumbnail' );
  ?>

<div class="col-xl-4 col-md-6 col-sm-12 mb-30">
  <a href="<?php echo the_permalink(); ?>" class="w-100">

    <div class="card bp-card actionable bp-card-rounded bg-white box-shadow h-100 p-0">
      <div class="card-image video" style="background-image: url('<?php echo $image[0]; ?>')">
        <div class="row p-30 h-100 align-items-end">
          <div class="d-flex justify-content-start">
            <?php 
                    $terms = get_the_terms( $post_id , 'videos-category' );
                    foreach ( $terms as $term ) {
                        $category_name = $term->name;
                  ?>
            <div class="bp-chip bg-white mr-10"><?php echo $category_name; ?></div>
            <?php
                  }
                ?>
          </div>
        </div>
      </div>
      <div class="pt-30 pl-30 pr-30 pb-20">
        <div class="text-small text-strong"><?php echo get_the_date( 'd F Y' ); ?></div>
        <div class="text-strong text-medium mt-10 mb-20" style="min-height: 58px">
          <?php echo mb_strimwidth(get_the_title(), 0, 70, '...'); ?>
        </div>
        <p>
          <?php echo mb_strimwidth(get_the_excerpt(), 0, 120, '...'); ?>
        </p>
        <div class="d-flex flex-column col align-items-end w-100">
          <button class="btn bp-btn bp-btn-arrow">Watch video</button>
        </div>
      </div>
    </div>

  </a>
</div>
<?php
  endwhile;
    wp_reset_postdata();
    endif;
    // * Send the Count of the fetched Posts
		echo json_encode(count($posts_loop->posts));
    exit;
}

add_action('wp_ajax_nopriv_get_more_videos', 'get_more_videos');
add_action('wp_ajax_get_more_videos', 'get_more_videos');


// * Templates Dedicated to Custom Post Types
add_filter( 'template_include', 'template_single_posts', 1 );

function template_single_posts( $template_path ) {
  if ( get_post_type() == 'articles') {
    if ( is_single() ) {
			$template_path = plugin_dir_path( __FILE__ ) . '/template-single-article.php';
		} 
	} elseif ( get_post_type() == 'videos' ){
		if ( is_single() ) {
			$template_path = plugin_dir_path( __FILE__ ) . '/template-single-video.php';
		} 
	} elseif ( get_post_type() == 'reports' ){
		if ( is_single() ) {
			$template_path = plugin_dir_path( __FILE__ ) . '/template-single-report.php';
		} 
	}
    return $template_path;
}

function search_articles($template)   
{    
  global $wp_query;   
  $post_type = get_query_var('post_type');   
  if( $wp_query->is_search && $post_type == 'articles')   
  {
    return locate_template('search-articles.php');
  }   
  return $template;   
}
add_filter('template_include', 'search_articles'); 

function search_videos($template)   
{    
  global $wp_query;   
  $post_type = get_query_var('post_type');   
  if( $wp_query->is_search && $post_type == 'videos')   
  {
    return locate_template('search-videos.php');
  }   
  return $template;   
}
add_filter('template_include', 'search_videos'); 