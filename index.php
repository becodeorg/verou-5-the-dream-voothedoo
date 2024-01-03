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
    <form action="" method="POST">
      <label for="amount">Calculate</label>
      <input type="number" step="0.01" name="amount" id="amount">
      <label for="currency">Currency</label>
      <select name="currency" id="currency">
        <option value="eur">EUR</option>
        <option value="ron">RON</option>
      </select>
      <button type="submit">Calculate</button>
      <?php
      if (!empty($_POST["amount"])) {
          $selectOption = $_POST["currency"];
          $amount = $_POST["amount"];
          if ($selectOption === "ron") {
              $result = $amount / 4.5;
              $result = round($result,2);
              ?>
              <p><?php echo "$amount RON = $result EUR"; ?></p>
              <?php
          } else {
              $result = $amount * 4.5;
              $result = round($result,2);
              ?>
              <p><?php echo "$amount EUR = $result RON"; ?></p>
              <?php
          }
      }
      ?>
    </form>
  </main>
</body>
</html>