<?php require "components/head.php" ?>

<?php require "components/navbar.php" ?>

<form>
  <input name='id' />
  <button>Filter by ID</button>
</form>

<form>
  <input name='category' value='<?= ($_GET["category"] ?? '') ?>' />
  <button>Filter by Category</button>
</form>


<h1>Posts</h1>

<ol>
  <?php foreach ($posts as $post) { ?>
    <li> <?= $post["title"] ?> </li>
  <?php } ?>
</ol>
<?php require "components/footer.php" ?>