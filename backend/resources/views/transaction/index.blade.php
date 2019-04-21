<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Dashboard | Transactions</title>
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
  </head>
  <body>
    <section>
      <div class="row col-xl-12">
        <div class="col-xl-3 side-menu">
          <div class="col-xl-12 flex center">
            <img src="assets/images/user.jpg" alt="user-image" />
          </div>
          <p class="col-xl-12 side-menu-name">{{Auth::user()->name}}</p>
          <div class="col-xl-12 side-menu-links">
            <a href="../front_end/profile.html"><button class="btn btn-side-menu col-xl-12">Home</button></a>
            <button class="btn btn-side-menu col-xl-12">Dashboard</button>
            <a href="../front_end/dashboard.html"><button class="btn btn-side-menu col-xl-12">Transactions</button></a>
          </div>
        </div>
        <div class="offset-xl-3 col-xl-9 content">
          <div class="content-info">
            <h2>Transactions</h2>
            <p>You've got {{$transactions->count()}} transactions</p>
          </div>
          @foreach($transactions as $transaction)
          <a href="../front_end/transaction.html">
            <button class="row btn btn-row">
                <div class="col-xl-1 flex-wrap center-3">
                  <img src="assets/images/user.png" />
                </div>
                <div class="col-xl-3 flex-wrap center-3">
                  <h2 class="col-xl-12">Adelina Thorsen</h2>
                  <p class="col-xl-12">Dec 16, 2017</p>
                </div>
                <div class="col-xl-8 flex-wrap center-3">
                  <h2 class="col-xl-12">Reminder - this month's payment</h2>
                  <p class="col-xl-12">
                    Hi Lucas, This is Adelina from customer support I just wanted
                    to send you a reminder about...
                  </p>
                </div>
              </button>
          </a>
          @endforeach
        </div>
      </div>
    </section>
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
