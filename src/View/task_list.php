<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Задачи</title>
</head>

<body>
    <h2>Список задач</h2>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li><?= htmlspecialchars($task->getTitle())?></li>
            <?= $task->isCompleted() ? "✔" : "❌"?>
        </li>
        <?php endforeach; ?>
        <a href="?route=task/add">Добавить</a>
    </ul>
</body>

</html>
