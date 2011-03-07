<?
function blog_thread_get_latest_article($bt) {
  $a = Article::find_all(
    array(
      'conditions' => array("blog_thread_id = ?", $bt->id),
      'order' => "published_at DESC",
      'limit' => 1
    )
  );
  return $a[0]->id;
}