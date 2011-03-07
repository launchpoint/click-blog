<?
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
  'limit'=>20,
  'order'=>'published_at desc'
);
$params['conditions'] = array('blog_thread_id = ? and published_at is not null', $bt->id);

$articles = Article::find_all($params);
