<?php

namespace frontend\resource;

class Comment extends \common\models\Comment
{
  public function fields()
  {
    return [
      'id', 'post_id', 'title', 'body'
    ];
  }

  public function extraFields()
  {
    return [
      'created_at', 'updated_at', 'updated_by', 'post'
    ];
  }

  public function getPost()
  {
    return $this->hasOne(Post::class, ['id' => 'post_id']);
  }
}
