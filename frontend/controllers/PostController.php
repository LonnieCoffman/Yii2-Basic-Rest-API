<?php

namespace frontend\controllers;

use frontend\resource\Post;

/**
 * Post controller
 */
class PostController extends ActiveController
{
  public $modelClass = Post::class;
}
