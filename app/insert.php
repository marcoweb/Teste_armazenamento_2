<?php
if (isset($_FILES['musica'])) {
    $music = $_FILES['musica'];
    var_dump($music);
}


include('./includes/header.php') ?>

<form action="./insert.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="musica">
    <input type="submit" value="Enviar">
</form>

<?php include('./includes/footer.php') ?>