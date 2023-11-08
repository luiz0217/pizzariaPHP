<div>
    <section style="marginTop: 2%">
        <Table border="2px">
            <thead>
                <tr>
                    <th style="padding: 5px;">Retirada</th>
                    <th style="padding: 5px;">Tamanho</th>
                    <th style="padding: 5px;">Sabor</th>
                    <th style="padding: 5px;">hora</th>
                    <th style="padding: 5px;">cliente</th>
                    <th style="padding: 5px;">vendedor</th>
                    <th style="padding: 5px;"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $pedidos = \Models\PedidosModel::checkPedidos();
                    foreach ($pedidos as $key => $value) {
                        echo"<tr>";
                        echo"<th style='padding: 5px;'>";
                        if ($value["retirada"] == "B") {
                            echo "Balcão";
                        }
                        else{
                            echo "Entrega";
                        }
                        echo"</th>";
                        echo"<th style='padding: 5px;'>";
                        if ($value["tamanho"] == "P") {
                            echo "Pequena";
                        }
                        elseif ($value["tamanho"] == "M") {
                            echo "Media";
                        }
                        else{
                            echo "Grande";
                        }
                        echo"</th>";
                        echo"<th style='padding: 5px;'>";
                        echo $value['sabor'];
                        echo"</th>";
                        echo"<th style='padding: 5px;'>";
                        echo $value['horaPedido'];
                        echo"</th>";
                        echo"<th style='padding: 5px;'>";
                        echo \Models\ClientesModel::getClientesByID($value['clientID']);
                        echo"</th>";
                        echo"<th style='padding: 5px;'>";
                        echo(\Models\VendedorModel::getVendedorByID($value['vendedorID']));
                        echo"</th>";
                        echo "<th>";
                        echo "<a class='btn btn-danger' style='margin: 5px' href='?rem=".$value['id']."'>remover</a>";
                        echo "</th>";
                        echo"</tr>";
                    }
                ?>
            </tbody>
        </Table>
    </section>
</div>