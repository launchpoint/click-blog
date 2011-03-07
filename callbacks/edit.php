<?

$article = Article::find_by_id(p('id'));

if(array_key_exists('thread', $params))
{
  $bt=BlogThread::find_or_create_by_name($params['thread']);
}
else
{
  $bt=BlogThread::find_or_create_by_name('default');
}

if ($article==null)
{
  $article = Article::new_model_instance( array(
    'attributes'=>array(
      'type'=>'text',
      'blog_thread_id'=>$bt->id
      )
  ));
}

$types = array(
  'markdown'=>'Markdown',
  'html'=>'HTML',
  'text'=>'Text',
  'php'=>'PHP'
);

if (is_postback())
{
  $params['article']['author_id'] = $current_user->id;
  $article->update_attributes($params['article']);
  if ($article->is_valid)
  {
    flash_next('Text saved.');
    redirect_to(view_blog_thread_url($article->blog_thread->name));
  }
}