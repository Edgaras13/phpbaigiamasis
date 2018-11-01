<?php

$page['title'] = 'Mano CV';
$page['show_footer'] = false;
$page['show_header'] = true;

$page['content']['title'] = 'This is my CV';
$page['content']['subtitle'] = 'It\'s empty. Ignore it';

$page['content']['rendered'] = render_page($page, 'page-cv');