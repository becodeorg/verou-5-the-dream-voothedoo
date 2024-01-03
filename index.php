<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>The Dream</title>
</head>
<body>
  <main>
    <section>
    <h1>The Dream</h1>
    <h2>Currency calculator</h2>
    </section>
    <form action="">
      <button type="submit">Switch</button>
    </form>
    <form action="" method="POST">
      <label for="amount">Calculate Euros</label>
      <input type="number" step="0.01" name="amount" id="amount">
      <label for="currency">To</label>
      <select name="currency" id="currency">
        <option value="usd">USD</option>
        <option value="ron">RON</option>
        <option value="cad">CAD</option>
      </select>
      <button type="submit">Calculate</button>
      <?php
      if (!empty($_POST["amount"])) {
          $selectOption = $_POST["currency"];
          $amount = $_POST["amount"];
          if ($selectOption === "ron") {
              $result = $amount * 4.5;
              $result = round($result,2);
              ?>
              <p><?php echo "$amount EUR = $result RON"; ?></p>
              <?php
          } else if ($selectOption === "usd"){
              $result = $amount * 1.09;
              $result = round($result,2);
              ?>
              <p><?php echo "$amount EUR = $result USD"; ?></p>
              <?php
          } else {
            $result = $amount * 1.46;
            $result = round($result,2);
            ?>
            <p><?php echo "$amount EUR = $result CAD" ?> </p>
            <?php
          }
      }
      ?>
    </form>
  </main>
</body>
</html>