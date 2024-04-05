<?php require "views/components/head.php" ?>
<?php require "views/components/navbar.php" ?>

<h1>Edit a post</h1>

<form method="POST">
    <input type="hidden" name="id" value="<?= $post["id"] ?>" />
    <label>
        <span>Title:</span>
        <input name="title" value="<?= $post["title"] ?? $post["title"] ?>" />
        <?php if (isset($errors["title"])) { ?>
            <p><?= $errors["title"] ?></p>
        <?php } ?>
    </label>
    <label>
        <span>Category ID:</span>
        <select name="category_id">
            <option value="1" <?= ($_POST["category_id"] ?? $post["category_id"]) == 1 ? "Selected" : "" ?>>sport</option>
            <option value="2" <?= ($_POST["category_id"] ?? $post["category_id"]) == 2 ? "Selected" : "" ?>>music</option>
            <option value="3" <?= ($_POST["category_id"] ?? $post["category_id"]) == 3 ? "Selected" : "" ?>>food</option>
        </select>
    </label>
    <button>Save</button>
</form>

<?php require "views/components/footer.php" ?>