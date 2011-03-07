<?

$article = Article::find_by_title($params['title']);
if (!$article) $article = Article::find_by_id($params['id']);
if (!$article) $article = Article::new_model_instance();

$bt = BlogThread::find_by_id($article->blog_thread_id);
global $blog_settings;
$show_rss_feed_link = TRUE;
if (array_key_exists($bt->name, $blog_settings['threads'])) {
  if (array_key_exists('show_rss_feed_link', $blog_settings['threads'][$bt->name])) {
    $show_rss_feed_link = $blog_settings['threads'][$bt->name]['show_rss_feed_link'];
  }
}
