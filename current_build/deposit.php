<?php include('transaction.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Deposit</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

    <header>
        <a href='index.php'><button type='button'>Home</button></a></li>
        <a href='home.php'><button type='button'>Account Home</button></a></li>
    </header>

    <div class="header">
        Deposit
    </div>

    <form method="post" action="transfer.php">
        <?php include('errors.php'); ?>
        <div class="input-group">
            <label>Deposit Amount</label>
            <input type="number" name="amount">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="deposit">Deposit</button>
        </div>
    </form>

    <!--
    <form action="up_bal.php" method="post" autocomplete="off">
        <label for="deposit">
            Deposit Amount:
            <input type="text" name="deposit" id="deposit">
        </label>
        <input type="submit" value="Deposit">
    </form>
-->

</body>

</html>