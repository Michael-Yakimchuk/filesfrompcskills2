<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Rundle-Investments</title>

  <link rel="stylesheet" href="css/header-footer.css">
  <link rel="stylesheet" href="css/funds.css">
</head>

<body>
  <!-- HEADER -->
  <?php $page='funds'; include 'header.php';?>
  <div class="showcase">
  </div>
  <div class="wrapper">
    <h1 class="title">Our Funds</h1>
  </div>

  <div class="wrapper card-grid">
    <div class="card">
      <h2>Balanced Fund</h2>
      <p>Fund Manager(s):Greg Peterson, CFA <br> Morningstar RatingTM: 3 Stars<br> Risk: Medium<br> Growth Rate: Long-term</p>
      <a href="funds/bal.php">More Info</a>
    </div>

    <div class="card">
      <h2>Canadian Bond Fund</h2>
      <p>Fund Manager(s):James Redpath, CFA Michael Crofts, CFA, B.Math (Honours)<br> Morningstar RatingTM: 2 Stars<br> Risk: Medium<br> Growth Rate: Long-term</p>
      <a href="funds/canBond.php">More Info</a>
    </div>

    <div class="card">
      <h2>Canada Equity Fund</h2>
      <p>Fund Manager(s):Vijay Viswanathan, CFA, MBA Jim Hall, CFA, MBA<br> Morningstar RatingTM: 4 Stars<br> Risk: High<br> Growth Rate: Average</p>
      <a href="funds/canEqu.php">More Info</a>
    </div>

    <div class="card">
      <h2>Canadian Money Market Fund</h2>
      <p>Fund Manager(s):Michael Crofts, CFA, B.Math (Honours) James Redpath, CFA<br> Morningstar RatingTM: 3 Stars<br> Risk: Low<br> Growth Rate: Short-term</p>
      <a href="funds/canMonMar.php">More Info</a>
    </div>

    <div class="card">
      <h2>Emerging Markets Equity Fund</h2>
      <p>Fund Manager(s):Peter Lampert, CFA<br> Morningstar RatingTM: 4 Stars<br> Risk: High<br> Growth Rate: Long-term</p>
      <a href="funds/emergMarEqu.php">More Info</a>
    </div>

    <div class="card">
      <h2>Global Balanced Fund</h2>
      <p>Fund Manager(s):Greg Peterson, CFA<br> Morningstar RatingTM: 3 Stars<br> Risk: Medium<br> Growth Rate: Long-term</p>
      <a href="funds/globBal.php">More Info</a>
    </div>

    <div class="card">
      <h2>Global Bond Fund</h2>
      <p>Fund Manager(s):James Redpath, CFA Michael Crofts, CFA, B.Math (Honours)<br> Morningstar RatingTM: 2 Stars<br> Risk: Medium<br> Growth Rate: Long-term</p>
      <a href="funds/globBon.php">More Info</a>
    </div>

    <div class="card">
      <h2>Global Equity Fund</h2>
      <p>Fund Manager(s):Paul Moroz, CFA Jim Hall, CFA, MBA Christian Deckart, CFA, Ph.D<br> Morningstar RatingTM: 5 Stars<br> Risk: Medium<br> Growth Rate: Long-term</p>
      <a href="funds/globEqu.php">More Info</a>
    </div>

    <div class="card">
      <h2>Global Small Cap Fund</h2>
      <p>Fund Manager(s):Christian Deckart, CFA, Ph.D Paul Moroz, CFA <br> Morningstar RatingTM: 5 Stars<br> Risk: High<br> Growth Rate: Long-term</p>
      <a href="funds/globSmCap.php">More Info</a>
    </div>

    <div class="card">
      <h2>International Equity Fund</h2>
      <p>Fund Manager(s):Raymond Ta, CIM Donna Hindenberg, BA, MBA, CIM <br> Morningstar RatingTM: 5 Stars<br> Risk: High<br> Growth Rate: Long-term</p>
      <a href="funds/intEqu.php">More Info</a>
    </div>

    <div class="card">
      <h2>New Canada Fund</h2>
      <p>Fund Manager(s):Jeff Mo, CFA<br> Morningstar RatingTM: 5 Stars<br> Risk: High<br> Growth Rate: Long-term</p>
      <a href="funds/newCan.php">More Info</a>
    </div>

    <div class="card">
      <h2>Tax Effective Balanced Fund</h2>
      <p>Fund Manager(s):Craig Senyk, CFA Travis Goldfeldt, CFA <br> Morningstar RatingTM: 3 Stars<br> Risk: Medium<br> Growth Rate: Long-term</p>
      <a href="funds/taxEffBal.php">More Info</a>
    </div>

    <div class="card">
      <h2>U.S. Equity Fund</h2>
      <p>Fund Manager(s):Grayson Witcher, CFA, A.B. Colin Wong, CFA <br> Morningstar RatingTM: 4 Stars<br> Risk: Medium<br> Growth Rate: Long-term</p>
      <a href="funds/usEqu.php">More Info</a>
    </div>
  </div>

  <!-- FOOTER -->
  <?php include "footer.php"?>



  <!-- LOAD JAVASCRIPT -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/header-footer.js"></script>
</body>

</html>
