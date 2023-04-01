<?php

class TaskService
{
  private User $author;
  private Task $task;
  private string $text;

  public function __construct(User $author, Task $task, string $text)
  {
    $this->author = $author;
    $this->task = $task;
    $this->text = $text;
  }

  /**
   * Get the value of author
   */
  public function getAuthor()
  {
    return $this->author;
  }

  /**
   * Set the value of author
   *
   * @return  self
   */
  public function setAuthor($author)
  {
    $this->author = $author;

    return $this;
  }

  /**
   * Get the value of task
   */
  public function getTask()
  {
    return $this->task;
  }

  /**
   * Set the value of task
   *
   * @return  self
   */
  public function setTask($task)
  {
    $this->task = $task;

    return $this;
  }

  /**
   * Get the value of text
   */
  public function getText()
  {
    return $this->text;
  }

  /**
   * Set the value of text
   *
   * @return  self
   */
  public function setText($text)
  {
    $this->text = $text;

    return $this;
  }

  public static function addComment(User $author, Task $task, string $text)
  {
    $comment = new Comment($author, $task, $text);

    $task->addComment($comment);

    return $comment;
  }
}
