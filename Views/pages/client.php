<div style="display: flex;justify-content: center;padding: 20px;">
    <table border="2px">
        <tr>
            <th style='padding: 5px;font-weight: 800;'>nome</th>
            <th style='padding: 5px;font-weight: 800;'>endereço</th>
            <th style='padding: 5px;font-weight: 800;'>numero</th>
        </tr>
        
        <?php
            $vendedor = \Models\ClientesModel::getClientes();
            foreach ($vendedor as $key => $value) {
                echo"<tr>";
                echo"<th style='padding: 5px;font-weight: 400;'>". $value['nome'] ."</th>";
                echo"<th style='padding: 5px;font-weight: 400;'>". $value['endereco'] ."</th>";
                echo"<th style='padding: 5px;font-weight: 400;'>". $value['telefone'] ."</th>";
                echo"</tr>";
            }
    
        ?>
    </table>
</div>
