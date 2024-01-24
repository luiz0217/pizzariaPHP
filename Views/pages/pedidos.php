<div class="row">
    <div class="col-md-5"></div>
    <div class="col-md-2">
        <br>
        <br>
        <h1 style="fontSize: 120%;text-align: center;"> Fazer Pedido </h1>
        <br>
        <br>
    </div>
    <div class="col-md-5"></div>
</div>

<div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
        <form method="post">
            <label for="retirada" style="margin: 0;">Retirada</label>
            <select name="retirada">
                <option value="B">Balcão</option>
                <option value="E">Entrega</option>
            </select>
            <br><br>
            <label for="tamanho" style="margin: 0;">Tamanho</label>
            <select name="tamanho">
                <?php
                $resp = \Models\PedidosModel::getTamanhos();
                foreach ($resp as $key => $value) {
                    echo '<option value=' . $value['id'] . '>';
                    echo $value['nome'];
                    echo '</option>';
                }
                ?>
            </select>
            <br><br>
            <label for="sabor" style="margin: 0;">Sabor</label>
            <?php
            $resp = \Models\saborModel::getSabores();
            foreach ($resp as $key => $value) {
                echo '<div style="display: flex;align-items: center;">';
                echo '<input type="checkbox" name="sabor[' . $value['id'] . '] value="'.$value['id'].'" id="sab'.$value['id'].'" style="width:15px;height:15px;">';
                echo '<label for="sab'.$value['id'].'">'. $value['nome'].'</label>';
                echo '</div>';
            }
            ?>
            <br>
            <label for="sabor" style="margin: 0;">Extras</label>
            <?php
            $resp = \Models\extraModel::getExtras();
            foreach ($resp as $key => $value) {
                echo '<div style="display: flex;align-items: center;">';
                echo '<input type="checkbox" name="extra[' . $value['id'] . '] value="'.$value['id'].'" id="ex'.$value['id'].'" style="width:15px;height:15px;">';
                echo '<label for="ex'.$value['id'].'">'. $value['nome'].'</label>';
                echo '</div>';
            }
            ?>
            <br>
            <label style="margin: 0;">vendedor</label>
            <select name="vendedor">
                <?php
                $resp = \Models\VendedorModel::getVendedor();
                foreach ($resp as $key => $value) {
                    echo '<option value=' . $value["id"] . '>';
                    echo $value['nome'];
                    echo '</option>';
                }
                ?>
            </select>
            <br><br>
            <label style="margin: 0;">cliente</label>
            <select name="cliente">
                <?php
                $resp = \Models\ClientesModel::getClientes();
                foreach ($resp as $key => $value) {
                    echo '<option value=' . $value['id'] . '>';
                    echo $value['nome'];
                    echo '</option>';
                }
                ?>
            </select>
            <br><br>
            <div style="textAlign: center;">
                <input type="submit" class="btn btn-outline-primary btn-lg" name="cadastrar" value="Fazer Pedido"
                    style="width: 150px;"></input>
            </div>
        </form>
    </div>
    <div class="col-md-2"></div>
</div>
