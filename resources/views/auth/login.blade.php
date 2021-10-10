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
    <title>Login - Collegetivity</title>
    @include('includes.backend.style')
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-7">
                <img class="bg-img-cover bg-center" src="{{url('cuba/assets/images/login-bg.jpg')}}" alt="looginpage">
            </div>
            <div class="col-xl-5 p-0">
                <div class="login-card">
                    <div>
                        <div class="login-main">
                            <form class="theme-form" method="POST" action="{{route('login')}}">
                                @csrf
                                <h4>Masuk ke akun kamu</h4>
                                <p>Masukkan email & password kamu buat login</p>
                                <div class="form-group">
                                    <label class="col-form-label">Alamat Email</label>
                                    <input class="form-control" type="email" name="email" required>
                                </div>
                                <div class="form-group">
                                    <label class="col-form-label">Password</label>
                                    <input class="form-control" type="password" name="password" required
                                        placeholder="*********">
                                </div>
                                <div class="form-group mb-0">
                                    <div class="checkbox p-0">
                                        <input id="checkbox1" type="checkbox" name="remember">
                                        <label class="text-muted" for="checkbox1">Ingat Password</label>
                                    </div>
                                    <button class="btn btn-primary btn-block" type="submit">Masuk Sekarang</button>
                                </div>
                                <p class="mt-4 mb-0">Ga punya akun?<a class="ml-2" href="{{url('/register')}}">Buat akun
                                        dulu yuk!</a></p>
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