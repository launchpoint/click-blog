<?

$manifest = array(
  'load_before'=>array(),
  'load_after'=>array('user_security'),
  'priority_load'=>false,
  'requires'=>array('phpthumb', 'static_editor', 'user_security', 'paginator'),
  'jquery'=>array(
    'loader',
    'ui.effects'
  )
);

