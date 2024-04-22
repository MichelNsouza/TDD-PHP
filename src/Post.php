<?php

declare(strict_types=1);
namespace michelsouza\classes;

class Post
{
  private $title;
 /**
*Undocmented function
*
*@param string $title
*@return Post
*/
  public function setTitle(string $title): Post
  {
    if(empty($title)){
      throw new \InvalidArgumentException('Conteudo não pode ser vazio ou null');
    }
    $this->title = $title;
    return $this;
  }
  public function getTitle(): string
  {
    return $this->title;
  }
}
