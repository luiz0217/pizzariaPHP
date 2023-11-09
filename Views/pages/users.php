<div style="display: flex;justify-content: center;padding: 20px;">
    <table border="2px">
        <tr>
            <th style='padding: 5px;font-weight: 800;'>login</th>
        </tr>
        <tr>
        <?php
            $users = \Models\usersModel::getUsers();
            foreach ($users as $key => $value) {
                echo"<th style='padding: 5px;font-weight: 400;'>". $value['login'] ."</th>";
            }
    
        ?>
        </tr>
    </table>
</div>
