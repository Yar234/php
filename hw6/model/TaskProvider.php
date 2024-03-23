<?php

include_once "ITaskProvider.php";
include_once "exceptions/TaskAlreadyIsDoneException.php";

class TaskProvider implements ITaskProvider
{
  private PDO $pdo;

  public function __construct(PDO $pdo)
  {
    $this->pdo = $pdo;
  }

  /**
   * Метод возвращающий массив не выполненых задач из объекта
   * @return array
   */
  public function getUndoneList(int $userId): array
  {
    $statement = $this->pdo->prepare(
      'SELECT * FROM taks WHERE user_id = :id'
    );
    $statement->execute([
      'id' => $userId,
    ]);

    return $statement->fetch(
      PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE,
      Task::class
    );
  }

  public function addTask(Task $task, int $userId): bool
  {
    $statement = $this->pdo->prepare(
      'INSERT INTO tasks (user_id, description) VALUES (:user_id, :description)'
    );
    return $statement->execute([
      'user_id' => $userId,
      'description' => $task->getDescription()
    ]);
  }

  public function deleteTask(int $key, int $user_id): bool
  {
    $statement = $this->pdo->prepare(
      'DELETE FROM tasks WHERE id = :id AND user_id = :user_id'
    );
    $res = $statement->execute([
      'user_id' => $user_id,
      'id' => $key
    ]);
    if ($statement->rowCount() == 0) {
      throw new TaskAlreadyIsDoneException("Такой задачи не существует");
    }
    return $res;
  }
}
