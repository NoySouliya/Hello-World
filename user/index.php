<?php
require_once '../config/config.php';
?>
<body>
<h1>Hello World</h1>
<br>
<a href="<?php echo BASE_URL?>/user/add.php">add user</a>
<br>
<a href="<?php echo BASE_URL?>/user/login.php">Login</a>
</body>
<style>
    form{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
    }
    body{
        margin: 50px auto;
        text-align: center;
         width: 800px;
    }
    h1 {
        font-family: 'Passion One';
        font-size: 2rem;
        text-transform: uppercase;
}
    form {
        margin: 25px auto;
        padding: 20px;
        border: 5px solid #ccc;
        width: 500px;
        background: #eee;
    }
</style>