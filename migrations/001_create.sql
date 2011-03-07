CREATE TABLE IF NOT EXISTS `blog_threads` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1;


CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL auto_increment,
  `blog_thread_id` int(11) NOT NULL,  
  `type` varchar(200) NOT NULL,
  `author_id` int(11) NOT NULL COMMENT 'users',
  `title` varchar(200) NOT NULL,
  `body` longtext NOT NULL,
  `created_at` datetime NOT NULL,
  `published_at` datetime default NULL,
  `excerpt` longtext NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `author_id` (`author_id`,`created_at`,`published_at`),
  KEY `title` (`title`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;
