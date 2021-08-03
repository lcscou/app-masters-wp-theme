<?php

$context = Timber::context();
$context['message'] = "Hello";


$context['posts'] = Timber::get_posts();


Timber::render('./view/index.twig', $context);
