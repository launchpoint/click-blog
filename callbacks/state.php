<?

$article = Article::find_by_id($params['id']);

switch($params['state'])
{
  case 'draft':
    $article->published_at = null;
    break;
  case 'published':
    $article->published_at = time();
    break;
}
$article->save();

flash_next("Article set to ".$params['state']);
redirect_to(view_blog_thread_url($article->blog_thread->name));