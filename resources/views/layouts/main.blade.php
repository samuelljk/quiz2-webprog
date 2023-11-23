<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>ETS Web Programming</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/Homepage.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <script
      src="https://kit.fontawesome.com/94fb345d91.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="all">
      @auth
        <div class="nav-container">
          <div class="nav-content-container">
            <img class="logo-class" src="assets/img-logo.png" alt="" />
            <div class="searchbar-container">
              <input class="searchbar-text" type="text" placeholder="Search" />
              <button class="searchbar-button">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="42"
                  height="42"
                  viewBox="0 0 42 42"
                  fill="none"
                >
                  <path
                    d="M38.3111 41.5L23.9611 27.15C22.8222 28.0611 21.5125 28.7824 20.0319 29.3139C18.5514 29.8454 16.9759 30.1111 15.3056 30.1111C11.1676 30.1111 7.66589 28.6776 4.80044 25.8107C1.935 22.9437 0.501519 19.442 0.5 15.3056C0.5 11.1676 1.93348 7.66589 4.80044 4.80044C7.66741 1.935 11.1691 0.501519 15.3056 0.5C19.4435 0.5 22.9452 1.93348 25.8107 4.80044C28.6761 7.66741 30.1096 11.1691 30.1111 15.3056C30.1111 16.9759 29.8454 18.5514 29.3139 20.0319C28.7824 21.5125 28.0611 22.8222 27.15 23.9611L41.5 38.3111L38.3111 41.5ZM15.3056 25.5556C18.1528 25.5556 20.5733 24.5586 22.5671 22.5648C24.5609 20.571 25.5571 18.1513 25.5556 15.3056C25.5556 12.4583 24.5586 10.0378 22.5648 8.044C20.571 6.05018 18.1513 5.05404 15.3056 5.05556C12.4583 5.05556 10.0378 6.05246 8.044 8.04628C6.05018 10.0401 5.05404 12.4599 5.05556 15.3056C5.05556 18.1528 6.05246 20.5733 8.04628 22.5671C10.0401 24.5609 12.4599 25.5571 15.3056 25.5556Z"
                    fill="#F9F9F9"
                  />
                </svg>
              </button>
            </div>
            <div class="dropdown-container">
              <a
              href="#"
              role="button"
              id="dropdownMenuLink"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
              >
              <svg
                class="icon-class"
                xmlns="http://www.w3.org/2000/svg"
                width="42"
                height="42"
                viewBox="0 0 42 42"
                fill="none"
              >
                <path
                  d="M5.25 10.5H36.75M5.25 21H36.75M5.25 31.5H36.75"
                  stroke="#333333"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                />
              </svg>
              </a>

              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="/dashboard">Profile</a>
                <a class="dropdown-item" href="/dashboard/create">Create</a>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right">Logout</i></button>
                </form>
              </div>
              <div class="account-circle">
                {{-- @foreach($user as $singleUser)
                  <h1>{{ substr($singleUser->name , 0, 1) }}</h1>
                @endforeach --}}
                {{-- <i class='fas fa-user-alt' style='font-size:36px'></i> --}}
                <i class="fa-solid fa-user fa-2xl" style="color: #ffffff;"></i>
              </div>
            </div>
          </div>
        </div>
      @else
        <div class="nav-container">
          <div class="nav-content-container">
            <img class="logo-class" src="assets/img-logo.png" alt="" />
            <div class="searchbar-container">
              <input class="searchbar-text" type="text" placeholder="Search" />
              <button class="searchbar-button">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="42"
                  height="42"
                  viewBox="0 0 42 42"
                  fill="none"
                >
                  <path
                    d="M38.3111 41.5L23.9611 27.15C22.8222 28.0611 21.5125 28.7824 20.0319 29.3139C18.5514 29.8454 16.9759 30.1111 15.3056 30.1111C11.1676 30.1111 7.66589 28.6776 4.80044 25.8107C1.935 22.9437 0.501519 19.442 0.5 15.3056C0.5 11.1676 1.93348 7.66589 4.80044 4.80044C7.66741 1.935 11.1691 0.501519 15.3056 0.5C19.4435 0.5 22.9452 1.93348 25.8107 4.80044C28.6761 7.66741 30.1096 11.1691 30.1111 15.3056C30.1111 16.9759 29.8454 18.5514 29.3139 20.0319C28.7824 21.5125 28.0611 22.8222 27.15 23.9611L41.5 38.3111L38.3111 41.5ZM15.3056 25.5556C18.1528 25.5556 20.5733 24.5586 22.5671 22.5648C24.5609 20.571 25.5571 18.1513 25.5556 15.3056C25.5556 12.4583 24.5586 10.0378 22.5648 8.044C20.571 6.05018 18.1513 5.05404 15.3056 5.05556C12.4583 5.05556 10.0378 6.05246 8.044 8.04628C6.05018 10.0401 5.05404 12.4599 5.05556 15.3056C5.05556 18.1528 6.05246 20.5733 8.04628 22.5671C10.0401 24.5609 12.4599 25.5571 15.3056 25.5556Z"
                    fill="#F9F9F9"
                  />
                </svg>
              </button>
            </div>
            <div class="button-container">
              <a class="login-button" href="/login">Login</a>
              <a class="signup-button" href="/register">Sign Up</a>
            </div>
          </div>
        </div>
      @endauth

      
      <div class="banner-container">
        <div class="banner-card">
            <div class="banner-header">
                <h3>Ayo belanja di</h3>
                <h1>Tokopedia</h1>
                <h3>dan menangkan banyak <br> promo besar</h3>
                <div class="banner-button">
                    <a class="button-class" href="https://www.tokopedia.com/" target="_blank">Belanja di Tokopedia</a>
                </div>
            </div>
            <div>
                <img class="banner-logo" src="assets/img-tokopedia.png" alt="">
            </div>
        </div>
      </div>

      <div class="review-header">
        <h1>Some Review(s) by Customers</h1>
        @foreach ($reviews as $review)
          @if ($loop->iteration == 6)
            @break
          @endif
          <div class="review-container">
            <h2>{{ $review->hotel->name }}</h2>
            <h5>Author: {{ $review->user->name }}</h5>
            <h5>Rating: {{ $review->rating }}.0/5.0</h5>
            <p>
              {{ $review->content }}
            </p>
          </div>
        @endforeach
      </div>

      <div class="footer">
        <div class="footer-content">
          <p class="footer-text">© 2023. Made by
          <a href="https://github.com/nayottama11" target="_blank">@Giandra</a> ,
          <a href="https://github.com/samuelljk" target="_blank">@Samuel</a> ,
            and
            <a href="https://github.com/" target="_blank">@Luthfi</a>.
            All rights reserved</p>
        </div>
      </div>

      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"
      ></script>
      <script
        src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
        crossorigin="anonymous"
      ></script>

      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.6/dist/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.2.1/dist/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </div>
  </body>
</html>
