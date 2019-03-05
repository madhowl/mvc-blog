<?php
@define('ABSPATH', str_replace('\\', '/', dirname(__FILE__)));
require_once ('./config/db.php');
// загрузка автозагрузчика
require_once __DIR__.'/vendor/autoload.php';

use NoahBuscher\Macaw\Macaw;







Macaw::get('/', 'Core\ArticleController@ShowAllPost');

Macaw::get('admin', 'Core\PanelController@dashboard');
Macaw::get('admin/article-list', 'Core\PanelController@showArticleList');
Macaw::get('admin/article-add', 'Core\PanelController@articleAdd');
Macaw::get('hell', 'Core\PanelController@hell');

Macaw::get('page', 'Core\ArticleController@lol');// auto slug
Macaw::get('article/(:num)', 'Core\ArticleController@showSinglePost');
Macaw::post('panel/articleadd', 'Core\PanelController@articleAdd');

Macaw::get('cat', 'Core\CategoryController@lol');//autoslug

Macaw::get('cat/(:any)', 'Core\ArticleController@showCategoryPost');
Macaw::get('cat/(:any)', 'Core\ArticleController@showCategoryPost');

Macaw::dispatch();
?>
