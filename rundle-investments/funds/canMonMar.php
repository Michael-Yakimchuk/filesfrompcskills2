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
      <h1 class="title">Canada Money Market Fund</h1>
      <ul>
        <li>Morningstar RatingTM: 3 Stars</li>

        <li>Fund Managers: 
        Michael Crofts, CFA, B.Math (Honours) 
        James Redpath, CFA </li>

        <li>Fund Inception Date: February 19, 1988</li>
        <li>Fund Net Asset Value: $249.6 million</li>
        <li>Total Net Asset Value (Series A): $34.4 million</li>
        <li>Net Asset Value Per Unit: $10.00</li>
        <li>RRSP Eligibility: Yes</li>
        <li>Trading Expense Ratio: N/A</li>
        </ul>
        <h3>What does this Fund Invest In?</h3>
        This Fund invests in government treasury bills and bonds and corporate obligations maturing in 365 days or less. The Fund will have a dollar weighted average term to maturity of no more than 180 days, subject to certain conditions.<br>

        <h3>Investor Suitability</h3>
        Investors seeking income from short term investments. Low risk.

        <h3>Investment Strategy</h3>
       Strategies used to achieve this Fund’s objective include interest rate anticipation, yield analysis, credit and spread analysis, and taking advantage of supply and demand anomalies.
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