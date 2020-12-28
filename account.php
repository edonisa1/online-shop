<?php
include 'header.php';
session_start();
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
    .content {
         width: 30%;
        margin: 0px auto;
        padding: 20px;
        border: 1px solid #B0C4DE;
        background: white;
        border-radius: 0px 0px 10px 10px;  
    }
    h4 {
        text-align: center;  
    }
    .btn-2 {
        padding: 10px;
        font-size: 15px;
        background: #3a8bcd;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }
    .btn-2 a {
        color:white;
    }
    </style>
<body>
    <div class="header">
        <h3>Llogaria</h3>
    </div>
    <div class="content">
        <h4>Mirë se erdhe <strong><?php echo $_SESSION['email']?? 'any default value, but probably null'; ?></strong></h4>
        <button class="btn-2"><a href="logout.php">Çkyqu</a></button>
        
    </div>
</body>
<?php 
include ('footer.php');
?>