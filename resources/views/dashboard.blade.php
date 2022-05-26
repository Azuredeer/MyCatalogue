<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.72.0">
  <title>MyCatalogue</title>

  <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/dashboard/">

  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Amatic+SC:wght@700&family=Kalam:wght@300&family=Pacifico&display=swap" rel="stylesheet">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    /* GLOBAL STYLES
    --------------------------------------------- */
    /* Padding below the footer and lighter body text */

    body {
      padding-bottom: 1rem;
      color: #5a5a5a;
    }

    /* CUSTOMIZE THE CAROUSEL
    -------------------------------------------- */
    /* Carousel base class */

    .carousel {
      margin-bottom: 1rem;
    }

    /* Since positioning the image, we need to help out the caption */

    .carousel-caption {
      bottom: 3rem;
      z-index: 10;
    }

    /* Declare heights because of positioning of img element */

    .carousel-item {
      height: 32rem;
    }

    .carousel-item>img {
      position: absolute;
      top: 0;
      left: 0;
      min-width: 100%;
      height: 32rem;
    }

    body {
      font-size: .875rem;
    }

    .feather {
      width: 16px;
      height: 16px;
      vertical-align: text-bottom;
    }

    /*Navbar*/
    .navbar-brand {
      padding-top: .75rem;
      padding-bottom: .75rem;
      font-size: 1rem;
      background-color: rgba(0, 0, 0, .25);
      box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
    }

    .navbar .navbar-toggler {
      top: .25rem;
      right: 1rem;
    }

    .navbar .form-control {
      padding: .75rem 1rem;
      border-width: 0;
      border-radius: 0;
    }

    .form-control-dark {
      color: #fff;
      background-color: rgba(255, 255, 255, .1);
      border-color: rgba(255, 255, 255, .1);
    }

    .form-control-dark:focus {
      border-color: transparent;
      box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
    }
  </style>
</head>

<body>
  <section class="dashboard">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <!-- Navbar content -->
      <div class="container-fluid">
        <a class="navbar-brand bg-light" href="#">MyCatalogue</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{ URL::asset('/dashboard')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{URL('/Pustaka')}}">Pustaka Pribadi</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Account
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li class="nav-item">
                  @guest
                  <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                  </form>
                  @else
                  <a class="nav-link" href="{{ route('login') }}">
                    @endguest
                    @guest
                    @if (Route::has('login'))
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @endif

                @if (Route::has('register'))
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
                @else
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    {{ Auth::user()->name }}
                  </a>
                  <div class="nav-item">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                      {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                      @csrf
                    </form>
                  </div>
                </li>
                @endguest
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="{{ URL::asset('assets/image/book-library.jpg' )}}" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
          <rect width="100%" height="100%" fill="#777" />
          </img>

          <div class="container">
            <div class="carousel-caption text-left">
              <h1 style="font-family: 'Pacifico', cursive; font-size: 40px;">"Barangsiapa yang belum pernah merasakan pahitnya mencari ilmu walau sesaat, ia akan menelan hinanya kebodohan selama hidupnya"</h1>
              <p>- Imam Syafi'i</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ URL::asset('assets/image/next.jpg' )}}" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
          <rect width="100%" height="100%" fill="#777" />
          </img>

          <div class="container">
            <div class="carousel-caption">
              <h1 style="font-family: 'Pacifico', cursive; color:black;">"Bantinglah otak untuk mencari ilmu sebanyak-banyak guna mencari rahasia besar yang terkandung di dalam benda besar yang bernama dunia ini, tetapi pasanglah pelita dalam hati sanubari, yaitu pelita kehidupan jiwa"</h1>
              <p style="color: #5a5a5a; font-size: 20px;">- Al-Ghazali</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ URL::asset('assets/image/buku.jpg' )}}" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
          <rect width="100%" height="100%" fill="#777" />
          </img>

          <div class="container">
            <div class="carousel-caption text-left">
              <h1 style="font-family: 'Pacifico', cursive;">"Tahapan pertama dalam mencari ilmu adalah mendengarkan, kemudian dalam diam dan menyimak dengan penuh perhatian, lalu menjaganya, lalu mengamalkannya dan kemudian menyebarkannya"</h1>
              <p>- Sufyan bin Uyainah</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img src="{{ URL::asset('assets/image/photo-books.jpeg' )}}" class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
          <rect width="100%" height="100%" fill="#777" />
          </img>

          <div class="container">
            <div class="carousel-caption text-right">
              <h1 style="font-family: 'Pacifico', cursive;">"Ilmu pengetahuan tanpa agama lumpuh, agama tanpai ilmu pengetahuan buta"</h1>
              <p>- Albert Einstein</p>
            </div>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div><br></br>

    <!-- <div class="container-fluid">
      <div class="row">
        <div class="navbar-wrapper">
          <div class="navbar logo">
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
              <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">
                      <span data-feather="home"></span>
                      Dashboard
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">
                      <span data-feather="file"></span>
                      Pustaka Pribadi
                    </a>
                  </li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div> -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img src="{{ URL::asset('assets/image/hipwee-IMG_9645.jpg' )}}" class="bd-placeholder-img rounded-circle" width="140" height="140" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
          </svg>

          <h2 style="color: black;">Pidi Baiq</h2>
          <p style="text-align: justify; font-family: 'Kalam', cursive; font-size:large;">Pidi Baiq adalah seniman multitalenta asal Indonesia. Dia adalah penulis novel dan buku, dosen, ilustrator, komikus, musisi dan pencipta lagu. Namanya mulai dikenal melalui grup band The Panas Dalam yang didirikan tahun 1995.
          </p>
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="{{ URL::asset('assets/image/tere liye.jpeg')}}" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns=" " aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
          </img>

          <h2 style="color: black;">Tere Liye</h2>
          <p style="text-align: justify; font-family: 'Kalam', cursive; font-size: large;">Darwis atau lebih dikenal dengan nama pena Tere Liye, adalah salah satu penulis Indonesia. Beberapa karyanya yang pernah diadaptasi ke layar lebar yaitu Hafalan Shalat Delisa, Bidadari-Bidadari Surga, Moga Bunda Disayang Allah, dan Rembulan Tenggelam di Wajahmu. Sehari-hari, ia bekerja sebagai akuntan.</p>
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="{{ URL::asset('assets/image/Andrea-Hirata.jpg')}}" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
          </img>

          <h2 style="color: black;">Andrea Hirata</h2>
          <p style="text-align: justify; font-family: 'Kalam', cursive; font-size:large;">Andrea Hirata Seman Said Harun atau lebih dikenal sebagai Andrea Hirata adalah novelis Indonesia yang berasal dari Pulau Belitung, provinsi Bangka Belitung. Novel pertamanya adalah Laskar Pelangi yang menghasilkan tiga sekuel.</p>
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="{{ URL::asset('assets/image/Ananta-Toer.jpg')}}" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
          </img>

          <h2 style="color: black;">Pramoedya Ananta Toer</h2>
          <p style="text-align: justify; font-family: 'Kalam', cursive;  font-size:large">Pramoedya Ananta Toer, secara luas dianggap sebagai salah satu pengarang yang produktif dalam sejarah sastra Indonesia. Pramoedya telah menghasilkan lebih dari 50 karya dan diterjemahkan ke dalam lebih dari 42 bahasa asing.</p>
        </div>

        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="{{ URL::asset('assets/image/Buya hamka.jpg')}}" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
          </img>

          <h2 style="color: black;">Buya Hamka</h2>
          <p style="text-align: justify; font-family: 'Kalam', cursive; font-size:large">Prof. Dr. H. Abdul Malik Karim Amrullah Datuk Indomo, populer dengan nama penanya Hamka adalah seorang ulama dan sastrawan Indonesia. Ia berkarier sebagai wartawan, penulis, dan pengajar.</p>
        </div>

        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <img src="{{ URL::asset('assets/image/raditya dika.jpg')}}" class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" role="img" focusable="false">
          <title>Placeholder</title>
          <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%" fill="#777" dy=".3em"></text>
          </img>

          <h2 style="color: black;">Raditya Dika</h2>
          <p style="text-align: justify; font-family: 'Kalam', cursive; font-size:large;">Dika Angkasaputra Moerwani Nasution, yang mengubah namanya menjadi Raditya Dika Angkasaputra Moerwani Nasution adalah seorang komedian, penulis, sutradara, produser, penulis skenario, pebisnis, YouTuber, dan aktor Indonesia. Buku pertamanya berjudul Kambing Jantan masuk kategori best seller.</p>
        </div>

      </div>
      <!-- /.row -->
    </div>
    </div>
  </section>


  <script src="/docs/5.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-DBjhmceckmzwrnMMrjI7BvG2FmRuxQVaTfFYHgfnrdfqMhxKt445b7j3KBQLolRl" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.24.1/feather.min.js" integrity="sha384-EbSscX4STvYAC/DxHse8z5gEDaNiKAIGW+EpfzYTfQrgIlHywXXrM9SUIZ0BlyfF" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" integrity="sha384-i+dHPTzZw7YVZOx9lbH5l6lP74sLRtMtwN2XjVqjf3uAGAREAF4LMIUDTWEVs4LI" crossorigin="anonymous"></script>
  <script src="dashboard.js"></script>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="js/scripts.js"></script>
</body>

</html>