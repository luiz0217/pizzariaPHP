<div style="display: flex;justify-content: center;">
    <div>
        <h1>alterando senha para <?php echo $_SESSION['login'] ?></h1>
        <form method="post">
            <input type="password" name="senha" required placeholder="senha">
            <br>
            <input type="submit" value="mudar senha" name="change" class="btn btn-outline-success">
        </form>
    </div>
</div>