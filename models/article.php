<?

Article::$eager_load[] = 'author';
Article::$eager_load[] = 'blog_thread';

function article_has_author($a, $u)
{
  return $a->author_id == $u->id;
}

function article_get_body_html($p)
{
  return blog_markup($p->type, $p->body);
}


function blog_markup($type, $s)
{
  switch($type)
  {
    case 'html':
      return $s;
      break;
    case 'php':
      return eval_php($s);
      break;
    case 'markdown':
      return Markdown($s);
      break;
    case 'text':
      return simple_format($s);
      break;
    default:
      return 'Unsupported type '.$type;
  }
}

function article_get_excerpt_html($p)
{
  return blog_markup($p->type, $p->excerpt);
}