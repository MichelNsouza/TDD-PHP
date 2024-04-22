<?php

use PHPUnit\Framework\TestCase;
use michelsouza\classes\Post as Post;

class PostTest extends TestCase
{

  public function teste_set_title()
  {
    $post = new Post();
    $post->setTitle("Testando set titulo");

    $this->assertEquals("Testando set titulo", $post->getTitle());
  }
  
}  