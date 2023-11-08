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
                <option value="G">Grande</option>
                <option value="M">Média</option>
                <option value="P">Pequena</option>
            </select>
            <br><br>
            <label for="sabor" style="margin: 0;">Sabor</label>
            <input type="text" name="sabor" placeholder="sabor">
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
                        echo '<option value='. $value['id'] . '>';
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