<!DOCTYPE html>
<html>
<head>
    <title>Add Transaction</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Add Transaction</h2>
 
 
<form method="post" action="create.php">
    Item: <input type="text" name="item" required><br>
    Price: <input type="number" name="price" required><br>
    Quantity: <input type="number" name="qty" required><br>
    <button type="submit">Save</button>
</form>

<a href="read.php">View Transactions</a>
