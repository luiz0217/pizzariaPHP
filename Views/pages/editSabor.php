<?php

if (isset($_GET['sabor'])) {
    $saborInfo = \Models\saborModel::getSabor($_GET['sabor']);
    ?>
    <form action="" method="post" style="padding: 15px;">
        <input type="hidden" name="id" value="<?php echo $_GET['sabor']; ?>">
        <input type="text" name="nome" value="<?php echo $saborInfo[0]['nome']; ?>">
        <br>
        <input type="text" name="preco" value="<?php echo $saborInfo[0]['preco']; ?>">
        <br>
        <input type="submit" value="alterar sabor" name="saborUpdate">
    </form>

<?php } else {
    ?>
    <ul style="margin: 15px;">
        <?php
        $sabores = \Models\saborModel::getSabores();
        foreach ($sabores as $key => $value) {
            ?>
            <li style="display: flex;align-items: center;gap: 15px;">
                <p style="margin: 0;"><?php echo $value['nome']; ?> | <?php echo $value['preco']; ?></p>
                <a href="<?php echo INCLUDE_PATH ?>config?opt=editSabor&sabor=<?php echo $value['id']; ?>" class="btn btn-outline-primary">editar</a>
            </li>
            <br>

        <?php }
        ?>
    </ul>

<?php } ?>