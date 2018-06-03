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
      <h1 class="title">Global Balanced Fund</h1>
      <ul>
        <li>Morningstar RatingTM: 3 Stars</li>

        <li>Fund Managers: 
        Greg Peterson, CFA</li>

        <li>Fund Inception Date: July 2, 2013</li>
        <li>Fund Net Asset Value: $826.2 million</li>
        <li>Total Net Asset Value (Series A): $255.3 million</li>
        <li>Net Asset Value Per Unit: $15.12</li>
        <li>RRSP Eligibility: Yes</li>
        <li>Trading Expense Ratio1: 0.03%</li>
        </ul>
        <h3>What does this Fund Invest In?</h3>
        The Fund invests primarily in equity and equity-related securities and fixed-income securities from around the world. The Fund may invest in any part of the capital structure in both public and private entities.<br>

        <h3>Investor Suitability</h3>
        Investors seeking long-term growth at medium risk.

        <h3>Investment Strategy</h3>
       A bottom up approach is taken to construct this Fund. The equities are chosen on a global basis and are coupled with the stability of investment grade Canadian and Global bonds. Risk is further managed through extensive diversification across many industries, countries, and currencies.
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