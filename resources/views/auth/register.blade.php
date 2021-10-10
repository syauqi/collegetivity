<!DOCTYPE html>
<html lang="id">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Collegetivity adalah aplikasi yang membantu dunia perkuliahan mahasiswa mulai dari mengorganisasi pelajaran, tugas dan jadwal.">
    <meta name="keywords" content="Collegetivity, Universitas Siliwangi, Aplikasi Perkuliahan">
    <meta name="author" content="Syauqizaidan">
    <link rel="icon" href="{{url('cuba/assets/images/favicon.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{url('cuba/assets/images/favicon.png')}}" type="image/x-icon">
    <title>Daftar Akun Baru - Collegetivity</title>
    @include('includes.backend.style')
</head>

<body>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-xl-7">
                <img class="bg-img-cover bg-center" src="{{url('cuba/assets/images/login-bg-2.jpg')}}" alt="looginpage">
            </div>
            <div class="col-xl-5 p-0">
                <div class="login-card">
                    <div>
                        <div class="login-main">
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <form method="POST" action={{route('register')}} class="theme-form">
                                @csrf
                                <h4>Daftarkan akun kamu</h4>
                                <p>Masukan data yang diminta untuk membuat akun</p>
                                <div class="form-group">
                                    <label class="col-form-label pt-0">Nama kamu</label>
                                    <div class="form-row">
                                        <div class="col-12">
                                            <input class="form-control" type="text" name="name" required autofocus>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Alamat email</label>
                                    <input class="form-control" type="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <input class="form-control" type="password" name="password" required
                                        placeholder="*********">
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Konfirmasi Password</label>
                                    <input class="form-control" type="password" name="password_confirmation" required
                                        placeholder="*********">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary btn-block mt-4" type="submit">Buat Akun</button>
                                </div>
                                <p class="mt-4 mb-0">Udah punya akun?<a class="ml-2" href="{{('/login')}}">Yuk Masuk
                                        sekarang</a></p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('includes.backend.script')
    </div>
</body>

</html>