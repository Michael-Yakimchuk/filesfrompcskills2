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
      <h1 class="title">Balanced Fund</h1>
      <ul>
        <li>Morningstar RatingTM: 3 Stars</li>

        <li>Fund Managers: 
        Greg Peterson, CFA</li>

        <li>Fund Inception Date: March 31, 1988</li>
        <li>Fund Net Asset Value: $3,268.0 million</li>
        <li>Total Net Asset Value (Series A): $2,540.6 million</li>
        <li>Net Asset Value Per Unit: $28.42</li>
        <li>RRSP Eligibility: Yes</li>
        <li>Trading Expense Ratio1: 0.03%</li>
        </ul>
        <h3>What does this Fund Invest In?</h3>
        The Fund invests in Canadian, US, and International equity securities, as well as bonds and other funds managed by Mawer that invest in debentures of government and corporate issues or in those securities directly.<br>

        <h3>Investor Suitability</h3>
        Investors seeking long-term growth at medium risk.

        <h3>Investment Strategy</h3>
        The Manager’s traditional equity approach of systematically buying wealth creating companies at a discount to intrinsic value is used to construct the equity part of the portfolio. The fixed income part of the portfolio follows our traditional fixed income approach of focusing on sector allocation, security selection, and trading strategies. For asset mix, the Manager analyzes which combination of asset classes is most likely to offer the most attractive risk/return characteristics within a medium to long-term time frame, and carries out asset mix changes gradually to reduce risk.
    </div>
    <div class="card">
      <img src="../Images/upGraph.png">
      <h2>This fund is increasing</h2>
    </div>
  </div>
  
 <!-- FOOTER -->
  <?php include "../footer2.php"?>

  <!-- LOAD JAVASCRIPT -->
  <script src="../js/jquery-3.3.1.min.js"></script>
  <script src="../js/header-footer.js"></script>
</body>

</html>