<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Rundle-Investments</title>

  <link rel="stylesheet" href="css/header-footer.css">
  <link rel="stylesheet" href="css/contact.css">
</head>

<body>
  <!-- HEADER -->
  <?php $page='contact'; include 'header.php';?>

  <!-- SHOWCASE -->
  <div class="showcase">
  </div>
  
  <!-- BELOW FOLD 1 -->
  <div class="below-fold-1 wrapper">
    <h1 class="title">Contact Us</h1>
      <div class="card-container">
        <div class="card">
          <h2>Individual Investors</h2>
          <p>General mutual fund inquiries<br>
            Toll-Free: +1 (344) 395-0141<br> 
            Email: investing@rundle.com</p>
        </div>
         <div class="card">
          <h2>Investment Counselling</h2>
          <p>Olivia Woo<br>
            Director, Investment Counsellor<br>
            Phone: +1 (403) 114-4336<br>
            Email: oliviawoo@rundle.com</p>
        </div>
         <div class="card">
          <h2>Family Offices</h2>
          <p>Phone: +1 (403) 261-1951<br>
            Toll-Free: +1 (333) 549-6243<br>
            Email: info@rundledirect.com</p>
        </div>
         <div class="card">
          <h2>All other inquiries</h2>
          <p>Phone: +1 (403) 262-4613<br>
            Toll-Free: +1 (300) 339-6243<br>
            Fax: +1 (403) 262-4099<br>
            Email: info@rundle.com</p>
        </div>
        <div class="card">
          <h2>Advisors</h2>
          <p>If you are an advisor looking for information on client accounts, status   of transfers, or back-office related inquiries, please contact:<br>
            Phone: +1 (333) 146-2931<br>
            Fax: +1 (344) 401-3133</p>
        </div>
      </div>
      <form action="phpHelpers/newQ.php" method="post">
      <h1 class="title">Submit a Question</h1>
      Name: <input type="text" name="name"><br>
      E-mail: <input type="text" name="email"><br>
      <p>Question/Concern: <textarea name="question"></textarea></p><br>
      <input type="submit" name="submit">
      </form>
    <h1 class="title">Offices</h1>
    <div class="card-container2">
      <div class="card">
        <h2>Calgary</h2>
        <p>Centre 10
          511 – 10th Avenue SW, Suite 600
          Calgary, Alberta T2R 0A3 </p>
      </div>
      <div class="card">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2508.522016743372!2d-114.07449528390283!3d51.04344827956169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53716fe28cfb2d47%3A0x13c76dcd73bee55f!2s511+10+Ave+SW+%23600%2C+Calgary%2C+AB+T2R+0A7!5e0!3m2!1sen!2sca!4v1527861897010" width="450" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="card">
        <h2>Toronto</h2>
        <p>Bay Adelaide Centre, West Tower
          Suite 330, Box 43, 333 Bay Street
          Toronto, Ontario M5H 2R2</p>
      </div>
      <div class="card">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2886.892730792515!2d-79.38261433410628!3d43.65040007912149!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x882b34cd36278197%3A0x2fccec4a2a4db98d!2sToronto%2C+ON+M5H+2R2!5e0!3m2!1sen!2sca!4v1527861803694" width="450" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="card">
        <h2>Singapore</h2>
        <p>30 Anson Road
          #32-04A Fuji Xerox Towers</p>
      </div>
      <div class="card">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8333436365697!2d103.84151831530122!3d1.2731599990714004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da196b3c740499%3A0xf017e112690dd6b3!2sFuji+Xerox+Towers!5e0!3m2!1sen!2sca!4v1527861861457" width="450" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
    </div>
  </div>
  
   <!-- FOOTER -->
  <?php include "footer.php"?>

  <!-- LOAD JAVASCRIPT -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/header-footer.js"></script>
</body>

</html>
