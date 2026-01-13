<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Лист Задач</title>
</head>

<body>
    <h1> Список задач</h1>
    <ul>
        <?php foreach ($tasks as $task): ?>
            <li><?= htmlspecialchars($task->getTitle())?></li>
            <?= $task->isCompleted() ? "✔" : "❌"?>
        </li>
        <?php endforeach; ?>
        <a href="?route=task/add"></a>
    </ul>
</body>

</html>
