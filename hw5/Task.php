<?php

class Task
{
  private $description;
  private DateTime $dateCreate;
  private DateTime $dateUpdated;
  private $dateDone;
  private int $priority;
  private bool $isDone = false;
  private static User $user;
  private $comments = [];

  public function __construct(
    $description,
    DateTime $dateCreate,
    DateTime $dateUpdated,
    $dateDone,
    int $priority,
    bool $isDone,
    User $user,
    $comments
  ) {
    $this->description = $description;
    $this->dateCreate = new DateTime();
    $this->dateUpdated = $this->dateCreate;
    $this->dateDone = null;
    $this->priority = $priority;
    $this->isDone = false;
    $this->user = $user;
    $this->$comments = $comments;
  }

  /**
   * Get the value of description
   */
  public function getDescription()
  {
    return $this->description;
  }

  /**
   * Set the value of description
   *
   * @return  self
   */
  public function setDescription($description)
  {
    $this->description = $description;
    $this->dateUpdated = new DateTime();

    return $this;
  }

  /**
   * Get the value of dateCreate
   */
  public function getDateCreate()
  {
    return $this->dateCreate;
  }

  /**
   * Set the value of dateCreate
   *
   * @return  self
   */
  public function setDateCreate($dateCreate)
  {
    $this->dateCreate = $dateCreate;

    return $this;
  }

  /**
   * Get the value of dateUpdated
   */
  public function getdateUpdated()
  {
    return $this->dateUpdated;
  }

  /**
   * Set the value of dateUpdated
   *
   * @return  self
   */
  public function setdateUpdated($dateUpdated)
  {
    $this->dateUpdated = $dateUpdated;

    return $this;
  }

  /**
   * Get the value of dateDone
   */
  public function getDateDone()
  {
    return $this->dateDone;
  }

  /**
   * Set the value of dateDone
   *
   * @return  self
   */
  public function setDateDone($dateDone)
  {
    $this->dateDone = $dateDone;

    return $this;
  }

  /**
   * Get the value of priority
   */
  public function getPriority()
  {
    return $this->priority;
  }

  /**
   * Set the value of priority
   *
   * @return  self
   */
  public function setPriority($priority)
  {
    $this->priority = $priority;

    return $this;
  }

  /**
   * Get the value of isDone
   */
  public function getIsDone()
  {
    return $this->isDone;
  }

  /**
   * Set the value of isDone
   *
   * @return  self
   */
  public function setIsDone($isDone)
  {
    $this->isDone = $isDone;

    return $this;
  }

  /**
   * Get the value of user
   */
  public function getUser()
  {
    return $this->user;
  }

  /**
   * Set the value of user
   *
   * @return  self
   */
  public function setUser($user)
  {
    $this->user = $user;

    return $this;
  }


  /**
   * Get the value of comments
   */
  public function getComments()
  {
    return $this->comments;
  }

  /**
   * Set the value of comments
   *
   * @return  self
   */
  public function setComments($comments)
  {
    $this->comments = $comments;

    return $this;
  }

  public function markAsDone()
  {
    $this->isDone = true;
    $this->dateUpdated = new DateTime();
    $this->dateDone = new DateTime();
  }

  public function addComment(Comment $comment)
  {
    $this->comments[] = $comment;
  }
}
