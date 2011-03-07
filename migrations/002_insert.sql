
INSERT INTO `articles` (`id`, `blog_thread_id`, `type`, `author_id`, `title`, `body`, `created_at`, `published_at`, `excerpt`) VALUES
(1, 1, 'markdown', 1, 'Website launches to great reception', 'This web site has launched to a great reception.', '2009-09-12 13:33:55', '2009-09-12 13:33:55', 'This is a sample excerpt.');

insert into blog_threads(`name`) values('default');

insert into roles(`name`) values ('blogger');

insert into user_roles(user_id, role_id) values (1, LAST_INSERT_ID());