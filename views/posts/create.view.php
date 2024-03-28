<?php require "views/components/navbar.php" ?>

<h1>Create new post</h1>
<form method="POST">
    <label>
        <span>Title:</span>
        <input name="title" value="<?= $_POST["title"] ?? "" ?>" />
        <?php if (isset($errors)) { ?>
            <p><?= $errors["title"] ?></p>
        <?php } ?>
    </label>
    <label>
        <span>Category ID:</span>
        <select name="category_id">
            <option value="1">sport</option>
            <option value="2">music</option>
            <option value="3">food</option>
        </select>
    </label>
    <button>Save</button>
</form>

<?php require "views/components/footer.php" ?>