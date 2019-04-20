<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Dashboard | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      href="https://fonts.googleapis.com/css?family=Montserrat"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
      integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="assets/css/framework.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="assets/css/main.css"
    />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="assets/css/transaction.css"
    />
  </head>
  <body>
    <section>
      <div class="row col-xl-12">
        <div class="col-xl-3 side-menu">
          <div class="col-xl-12 flex center">
            <img src="assets/images/user.png" alt="user-image" />
          </div>
          <p class="col-xl-12 side-menu-name">Philip Yirenkyi</p>
          <div class="col-xl-12 side-menu-links">
            <a href="../front_end/profile.html"><button class="btn btn-side-menu col-xl-12">Home</button></a>
            <button class="btn btn-side-menu col-xl-12">Dashboard</button>
            <a href="../front_end/dashboard.html"><button class="btn btn-side-menu col-xl-12">Transactions</button></a>          </div>
        </div>
        <div class="offset-xl-3 col-xl-9 content">
          <div class="content-info">
            <h2>Transactions</h2>
            <p>You've got 2 new transactions</p>
          </div>
          <h2 class="form-heading">Title:</h2>
          <p class="data-box col-xl-7"></p>
          <div class="row col-xl-12">
            <div class="col-xl-6">
              <h2>Seller Address:</h2>
              <p class="data-box col-xl-7"></p>
              <h2>Seller Name:</h2>
              <p class="data-box col-xl-7"></p>
            </div>
            <div class="col-xl-6">
              <h2>Buyer Address:</h2>
              <p class="data-box col-xl-7"></p>
              <h2>Buyer Name:</h2>
              <p class="data-box col-xl-7"></p>
            </div>
          </div>
          <h2>Contract creation date:</h2>
          <p class="data-box col-xl-7"></p>
          <h2>Amount due:</h2>
          <p class="data-box col-xl-7"></p>
          <div class="row col-xl-12 right">
            <button class="col-xl-2 btn btn-green2">Make Payment</button>
          </div>
        </div>
      </div>
    </section>
  </body>
  <script
    src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"
  ></script>
</html>
