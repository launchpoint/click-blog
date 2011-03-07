<?

map('content', 'blog', 'list', 'view_blog');
map('content', 'blog_all', 'list_all', 'view_blog_all');
map('content', 'blog/:thread', 'list', 'view_blog_thread');
map('content', 'blog_all/:thread', 'list_all', 'view_blog_all_thread');
map('content', 'blog/article/:id/view/:title', 'view', 'view_blog_article');
map('content', 'blog/article/:id/edit', 'edit', 'edit_blog_article');
map('content', 'blog/article/:id/publish/:state', 'state', 'set_blog_article_publish_state');
map('content', 'blog/:thread/article/new', 'edit', 'new_blog_article');
map('api', 'api/blog/:thread/rss', 'rss', 'blog_rss');