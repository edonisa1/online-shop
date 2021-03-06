<?php
include 'server.php';
include 'header.php';
    ?>
<style>
    .header {
        width: 30%;
        margin: 100px auto 0px;
        color: white;
        background: #3a8bcd;
        text-align: center;
        border: 1px solid #B0C4DE;
        border-bottom: none;
        border-radius: 10px 10px 0px 0px;
        padding: 20px; 
    }
    form {
        width: 30%;
        margin: 0px auto;
        padding: 20px;
        border: 1px solid #B0C4DE;
        background: white;
        border-radius: 0px 0px 10px 10px; 
    }
    .input-group {
        margin: 10px 0px 10px 0px;
    }
    .input-group label {
        display: block;
        text-align: left;
        margin: 3px;
    }
    .input-group input {
        height: 30px;
        width: 93%;
        padding: 5px 10px;
        font-size: 16px;
        border-radius: 5px;
        border: 1px solid gray;
    }
    .btn-2 {
        padding: 10px;
        font-size: 15px;
        color: white;
        background: #3a8bcd;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .error {
        width: 92%;
        margin: 0px auto;
        padding: 10px;
        border: 1px solid #a94442;
        color: #3a8bcd;
        background: #f2dede;
        border-radius: 5px;
        text-align: left;
        
    }
    </style>
<body>
    <div class="header">
        <h3>Regjistrohu</h3>
        </div>
    <form method="post" action="register.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Emri</label>
            <input type="text" name="emri" required>
        </div>
        <div class="input-group">
            <label>Mbiemri</label>
            <input type="text" name="mbiemri" required>
        </div>
        <div class="input-group">
            <label>Email</label>
            <input type="email" name="email"required>
        </div><div class="input-group">
            <label>Fjalëkalimi</label>
            <input type="password" name="fjalekalimi_1">
        </div>
        <div class="input-group">
            <label>Konfirmo fjalëkalimin</label>
            <input type="password" name="fjalekalimi_2">
        </div> 
        <div class="input-group">
            <button type="submit" name="reg_user" class="btn-2">Regjistrohu</button>
        </div>
        <p>Jeni regjistruar më herët? <a href="login.php"><b>Kyquni</b></p>
    </form>
</body>

<?php 
include ('footer.php');
?>