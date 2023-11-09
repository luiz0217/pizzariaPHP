<div>
    <section style="margin: 10px;display: flex;justify-content: center;">
        <Table border="2px">
            <thead>
                <tr>
                    <th style="padding: 5px;font-weight: 800;">Retirada</th>
                    <th style="padding: 5px;font-weight: 800;">Tamanho</th>
                    <th style="padding: 5px;font-weight: 800;">Sabor</th>
                    <th style="padding: 5px;font-weight: 800;">hora</th>
                    <th style="padding: 5px;font-weight: 800;">cliente</th>
                    <th style="padding: 5px;font-weight: 800;">vendedor</th>
                    <th style="padding: 5px;"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $pedidos = \Models\PedidosModel::checkPedidos();
                    foreach ($pedidos as $key => $value) {
                        echo"<tr>";
                        echo"<th style='padding: 5px;font-weight: 400;'>";
                        if ($value["retirada"] == "B") {
                            echo "Balcão";
                        }
                        else{
                            echo "Entrega";
                        }
                        echo"</th>";
                        echo"<th style='padding: 5px;font-weight: 400;'>";
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
                        echo"<th style='padding: 5px;font-weight: 400;'>";
                        echo $value['sabor'];
                        echo"</th>";
                        echo"<th style='padding: 5px;font-weight: 400;'>";
                        echo $value['horaPedido'];
                        echo"</th>";
                        echo"<th style='padding: 5px;font-weight: 400;'>";
                        echo \Models\ClientesModel::getClientesByID($value['clientID']);
                        echo"</th>";
                        echo"<th style='padding: 5px;font-weight: 400;'>";
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