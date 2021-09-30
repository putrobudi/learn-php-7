<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    header {
      text-align: center;
      background-color: #e3e3e3;
      padding: 2rem;
    }
  </style>
</head>

<body>
  <header>

    <h1>
      <!-- <?= $greeting; ?> -->
    </h1>


  </header>
  <nav>
    <ul>
      <li><a href="./about.php">About Page</a></li>
      <li><a href="./contact.php">Contact Page</a></li>
    </ul>
  </nav>
  <ul>
    <!-- <?php foreach ($names as $name) : ?>
      <li><?= $name;  ?></li>
    <?php endforeach; ?> -->

    <!-- <?php
          foreach ($names as $name) {
            echo "<li>$name</li>";
          }
          ?> -->

    <!-- <?php foreach ($animals as $animal) : ?>
      <li><?= $animal; ?></li>
    <?php endforeach; ?> -->

    <!-- <?php foreach ($person as $key => $feature) : ?>
      <li><strong><?= $key; ?></strong> <?= $feature; ?></li>
    <?php endforeach; ?> -->

    <!-- <?php foreach ($task as $heading => $val) : ?>
      <li><strong><?= ucwords($heading); ?></strong>: <?= $val; ?></li>
    <?php endforeach; ?> -->

    <!-- <li>
      <strong>Name: </strong> <?= $task['title']; ?>
    </li>

    <li>
      <strong>Due Date: </strong> <?= $task['due']; ?>
    </li>

    <li>
      <strong>Personal Responsible: </strong> <?= $task['assigned_to']; ?>
    </li> -->

    <!-- <li>
      <strong>Status: </strong> <?= $task['completed'] ? 'Complete' : 'Incomplete'; ?>

      <strong>Status: </strong>
      <?php
      if ($task['completed']) {
        echo '&#9989';
      } else {
        echo 'Incomplete';
      }
      ?>
      <?php if ($task['completed']) : ?>
        <span class="icon">&#9989;</span>
      <?php else : ?>
        <span class="icon">Incomplete</span>
      <?php endif; ?>
    </li> -->

    <?php foreach ($tasks as $task) : ?>
      <!-- <li><?= $task->completed ? '<s>' . $task->description . '</s>' : $task->description; ?></li> -->
      <!-- <li>
        <?php if ($task->completed) : ?>
          <s>
        <?php endif; ?>
        <?= $task->description; ?>
        <?php if ($task->completed) : ?>
          </s>
        <?php endif; ?>
      </li> -->
      <li>
        <?php if ($task->completed) : ?>
          <s><?= $task->description; ?></s>
        <?php else : ?>
          <?= $task->description; ?>
        <?php endif; ?>
      </li>
    <?php endforeach; ?>
  </ul>
</body>

</html>