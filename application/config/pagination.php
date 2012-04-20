<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Pagination config
|--------------------------------------------------------------------------
|
|
| Controller içinden çağrılacak setup.
| Twitter Bootstrap e uygun olarak düzenlendi.
|
*/
$config['base_url'] = '?';

$config['per_page'] = '10';
$config['last_link'] = 'Son sayfa';
$config['first_link'] = 'İlk sayfa';
$config['page_query_string'] = TRUE;
$config['query_string_segment'] = 'page';
			
$config['full_tag_open'] = '<div class="pagination"><ul>';
$config['full_tag_close'] = '</ul></div>';

$config['first_tag_open'] = '<li>';
$config['first_tag_close'] = '</li>';

$config['last_tag_open'] = '<li>';
$config['last_tag_close'] = '</li>';

$config['next_link'] = 'Sonraki sayfa';
$config['next_tag_open'] = '<li>';
$config['next_tag_close'] = '</li>';

$config['prev_link'] = 'Önceki sayfa';
$config['prev_tag_open'] = '<li>';
$config['prev_tag_close'] = '</li>';

$config['cur_tag_open'] = '<li class="active"><a href="#">';
$config['cur_tag_close'] = '</a></li>';

$config['num_tag_open'] = '<li>';
$config['num_tag_close'] = '</li>';