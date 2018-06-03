<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Template</title>

  <link rel="stylesheet" href="../css/header-footer.css">
  <link rel="stylesheet" href="../css/indiv-funds.css">
</head>

<body>
  <!-- HEADER -->
  <?php $page='funds'; include '../header2.php';?>
  
  <div class="card-container wrapper">
    <div class="card">
      <h1 class="title">Canada Bond Fund</h1>
      <ul>
        <li>Morningstar RatingTM: 2 Stars</li>

        <li>Fund Managers: 
        James Redpath, CFA 
        Michael Crofts, CFA, B.Math (Honours) </li>

        <li>Fund Inception Date: May 28, 2015</li>
        <li>Fund Net Asset Value: $263.6 million</li>
        <li>Total Net Asset Value (Series A): $11.9 million</li>
        <li>Net Asset Value Per Unit: $10.45</li>
        <li>RRSP Eligibility: Yes</li>
        <li>Trading Expense Ratio1: N/A</li>
        </ul>
        <h3>What does this Fund Invest In?</h3>
        The Fund invests primarily in investment grade government and government related fixed income securities denominated in local and foreign currencies around the world.<br>

        <h3>Investor Suitability</h3>
        The Fund is suitable for investors seeking income and global currency, country and yield diversification at a medium risk.

        <h3>Investment Strategy</h3>
        The Fund is broadly diversified across many currencies, countries and yield curves. The research process is focused on identifying and managing risk. Similar to a Central Bank, an emphasis is placed on reserve currencies and countries because they tend to hold their store of value in periods of uncertainty. Within the desired currency and country, securities are selected and actively traded with a focus on positive real returns. The Fund’s currency positions are unhedged which can increase the resilience of a balanced portfolio through additional diversification.
    </div>
    <div class="card">
      <img src="../Images/downGraph.png">
      <h2>This fund is decreasing</h2>
    </div>
  </div>
  
 <!-- FOOTER -->
  <?php include "../footer2.php"?>

  <!-- LOAD JAVASCRIPT -->
  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/header-footer.js"></script>
</body>

</html>