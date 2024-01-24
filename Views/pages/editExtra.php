<?php

if (isset($_GET['extra'])) {
    $extraInfo = \Models\extraModel::getExtra($_GET['extra']);
    ?>
    <form action="" method="post" style="padding: 15px;">
        <input type="hidden" name="id" value="<?php echo $_GET['extra']; ?>">
        <input type="text" name="nome" value="<?php echo $extraInfo[0]['nome']; ?>">
        <br>
        <input type="text" name="preco" value="<?php echo $extraInfo[0]['preco']; ?>">
        <br>
        <input type="submit" value="alterar extra" name="extraUpdate">
    </form>

<?php } else {
    ?>
    <ul style="margin: 15px;">
        <?php
        $extras = \Models\extraModel::getExtras();
        foreach ($extras as $key => $value) {
            ?>
            <li style="display: flex;align-items: center;gap: 15px;">
                <p style="margin: 0;"><?php echo $value['nome']; ?> | <?php echo $value['preco']; ?></p>
                <a href="<?php echo INCLUDE_PATH ?>config?opt=editExtra&extra=<?php echo $value['id']; ?>" class="btn btn-outline-primary">editar</a>
            </li>
            <br>

        <?php }
        ?>
    </ul>

<?php } ?>