<div style="display: flex;justify-content: space-around;padding: 20px;">
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
    <form action="" method="post">
        <label for="login">login</label>
        <input type="text" name="login" required>
        <label for="pas">senha</label>
        <input type="password" name="sen" required>
        <br>
        <input type="submit" name="addUser">
    </form>
</div>
