<?php require 'partials/head.php'; ?>

<h1>Submit Your Name</h1>

<!-- <form action="/names" method="GET">
  <input name="name">
  <button type="submit">Submit</button>
</form> -->
<form action="/names" method="POST">
  <input name="name">
  <button type="submit">Submit</button>
</form>

<?php require 'partials/footer.php'; ?>