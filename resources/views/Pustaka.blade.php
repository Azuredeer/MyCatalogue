<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyCatalogue</title>

    <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/dashboard/">

    <!-- link boostrap -->
    <link rel="stylesheet" href="{{ URL :: asset('assets/bootstrap/list-Materi-Bootstrap/assets/css/bootstrap.min.css')}}">

    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/styles/dashboard.css') }}">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

    <style>
        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <!-- Navbar content -->
        <div class="container-fluid">
            <a class="navbar-brand bg-light" href="#">MyCatalogue</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active text-nowrap" aria-current="page" href="{{ URL('/dashboard')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-nowrap" style="font-size: 16px;" href="{{URL('/pustaka')}}">Pustaka Pribadi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-nowrap" href="{{ route('logout') }}" style="margin-left: 58rem; font-size: 16px;" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav><br></br>
    <main class="container-xl">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-2 pb-1 mb-2 border-bottom">
            <h2>Pustaka Pribadi</h2>
            <button type="button" class="btn btn-sm btn-outline-secondary"  data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Buku
            </button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">BUKU</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="/Pustaka" method="post">
                            @csrf
                            <div>
                                <label for="nama" class="form-label">Judul Buku</label>
                                <input type="text" class="form-control" id="nama" name="JudulBuku">
                            </div>
                            <div>
                                <label for="nama" class="form-label">Penulis</label>
                                <input type="text" class="form-control" id="nama" name="Penulis">
                            </div>
                            <div>
                                <label for="nama" class="form-label">Kategori</label>
                                <input type="text" class="form-control" style="" id="nama" name="Kategori">
                            </div>
                            <div>
                                <label for="tanggal" class="form-label">Tanggal Beli</label>
                                <input type="date" class="form-control" id="tanggal" name="Tanggal">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Keluar</button>
                                <button typr="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered border-dark border-4">
                <thead class="table-primary border-dark ">
                    <tr>
                        <th>No</th>
                        <th>Judul Buku</th>
                        <th>Penulis</th>
                        <th>Kategori</th>
                        <th>Tanggal</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $p)
                    <tr>
                        <th scope="row">{{$loop -> iteration}}</th>
                        <td>{{$p -> JudulBuku}}</td>
                        <td>{{$p -> Penulis}}</td>
                        <td>{{$p -> Kategori}}</td>
                        <td>{{$p -> Tanggal}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main><br></br>
    <div class="container-xl">
        <div class="row">
            <div class="col-lg-4">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Informasi</div>
                    <div class="card-body">
                        <h5 class="card-title">Novel</h5>
                        <p class="card-text">Novel adalah salah satu jenis karya sastra yang berbentuk prosa. Kisah di dalam novel merupakan hasil karya imajinasi yang membahas tentang permasalahan kehidupan seseorang atau berbagai tokoh. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Informasi</div>
                    <div class="card-body">
                        <h5 class="card-title">Sejarah</h5>
                        <p class="card-text">Sejarah adalah kajian tentang masa lampau, khususnya bagaimana kaitannya dengan manusia. Dalam bahasa Indonesia, sejarah, babad, hikayat, riwayat, tarikh, tawarik, tambo, atau histori.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <div class="card-header">Informasi</div>
                    <div class="card-body">
                        <h5 class="card-title">Komik</h5>
                        <p class="card-text">Komik adalah media yang digunakan untuk mengekspresikan ide dengan gambar, sering dikombinasikan dengan teks atau informasi visual lainnya. Komik sering mengambil bentuk urutan panel yang disandingkan.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card text-dark bg-warning mb-3" style="max-width: 18rem;">
                    <div class="card-header">Informasi</div>
                    <div class="card-body">
                        <h5 class="card-title">Pelajaran</h5>
                        <p class="card-text">Buku ajar adalah buku acuan yang berisi kumpulan materi dalam cabang ilmu tertentu yang disajikan secara komprehensif. Buku ajar diproduksi untuk memenuhi kebutuhan para pendidik dan biasanya digunakan di lembaga pendidikan.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card text-dark bg-info mb-3" style="max-width: 18rem;">
                    <div class="card-header">Informasi</div>
                    <div class="card-body">
                        <h5 class="card-title">Dongeng</h5>
                        <p class="card-text">Dongeng adalah salah satu cerita rakyat yang cukup beragam cakupannya serta berasal dari berbagai kelompok etnis, masyarakat, atau daerah tertentu di berbagai belahan dunia</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

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