<?
$page = p('page',1);

if(array_key_exists('thread', $params))
{
  $bt=BlogThread::find_by_name($params['thread']);
  if(!$bt)
  {
    $bt=BlogThread::new_model_instance();
    $bt->name = $params['thread'];
    $bt->save();
  }
}
else
{
  $bt=BlogThread::find_by_name('default');
}

$params= array(
  'order'=>'published_at desc',
  'current_page'=>$page,
  'page_size'=>10
);

if (!$current_user->is('blogger'))
{
  $params['conditions'] = array('blog_thread_id = ? and published_at is not null', $bt->id);

}
else
{
  $params['conditions'] = array('blog_thread_id = ?', $bt->id);
}
$articles = Article::find_all($params);


global $blog_settings;
$show_rss_feed_link = TRUE;
if (array_key_exists($bt->name, $blog_settings['threads'])) {
  if (array_key_exists('show_rss_feed_link', $blog_settings['threads'][$bt->name])) {
    $show_rss_feed_link = $blog_settings['threads'][$bt->name]['show_rss_feed_link'];
  }
}
