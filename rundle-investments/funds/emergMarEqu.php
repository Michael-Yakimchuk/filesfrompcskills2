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
      <h1 class="title">Emerging Markets Equity Fund</h1>
      <ul>
        <li>Morningstar RatingTM: 4 Stars</li>

        <li>Fund Managers: 
        Peter Lampert, CFA</li>

        <li>Fund Inception Date: January 31, 2017</li>
        <li>Fund Net Asset Value:  $66.7 million</li>
        <li>Total Net Asset Value (Series A): $34.1 million</li>
        <li>Net Asset Value Per Unit: $12.18</li>
        <li>RRSP Eligibility: Yes</li>
        <li>Trading Expense Ratio1: 0.31%</li>
        </ul>
        <h3>What does this Fund Invest In?</h3>
        The Fund invests primarily in equity and equity related securities of companies located or active in emerging market countries. The Fund will diversify through currencies, industries and countries to increase safety, and to increase the growth and liquidity of the investments. Treasury bills or short term investments, not exceeding three years to maturity, may also be used from time to time.<br>

        <h3>Investor Suitability</h3>
        Investors seeking long-term, above average growth who can tolerate significant volatility. High risk.

        <h3>Investment Strategy</h3>
        In order to achieve its investment strategy objectives, the Manager systematically creates a broadly diversified portfolio of wealth-creating companies with excellent management teams bought at discounts to their intrinsic values. The Manager employs a highly disciplined, research-driven, bottom-up process and long-term holding period to allow for investor recognition or corporate growth, and to minimize transaction costs.
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