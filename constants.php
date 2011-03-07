<?

if(!isset($blog_settings))
{
  $blog_settings = array(
    'threads' => array(
      'default' => array(
        'show_rss_feed_link' => TRUE 
      ),
      'feedback' => array(
        'show_rss_feed_link' => FALSE 
      )
    ),
    'show_nav'=>true,
  );
}

add_global('blog_settings');