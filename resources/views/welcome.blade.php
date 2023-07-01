<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
    <title>Register</title>
</head>

<body>


<div class="card" >
    <div class="card-body" style="padding: 100px">
        <div class="row">
    <div class="col-md-6 bg-success" style="height: 100vh"></div>
    <div class="col-md-6">
        <div class="row justify-content-center" style="margin-top: 150px">
            <div class="col-lg-6">
                <main class="form-registration">
                    <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>
                    
                    <!-- tampilin session (alert message) -->
                    @if(session('message'))
                    <div class="alert alert-{{session('alert_class')}}">
                    {{session('message')}}
                    </div>
                    @endif
                    <form action="/actionRegister" method="POST">
                        @csrf
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-top" name="nama_nasabah" id="name" required
                                value="{{ old('nama_nasabah') }}" placeholder="Name">
                            <label for="name">Nama Lengkap</label>
                        </div>
                        <div class="form-floating">
                            <input type="email" class="form-control " name="email_nasabah" id="email" required
                                value="{{ old('email_nasabah') }}" placeholder="name@example.com">
                            <label for="email">Email</label>
                        </div>
                        <div class="form-floating">
                            <input type="number" class="form-control rounded-top" name="no_tlp" id="no_tlp" required
                                value="{{ old('no_tlp') }}" placeholder="Name">
                            <label for="name">No Tlp</label>
                        </div>
                        <div class="form-floating">
                            <input type="text" class="form-control rounded-top" name="tempat_lahir" id="tempat_lahir" required
                                value="{{ old('tempat_lahir') }}" placeholder="Name">
                            <label for="name">Tempat Lahir</label>
                        </div>
                        <div class="form-floating">
                            <input type="date" class="form-control rounded-top" name="tgl_lahir" id="tgl_lahir" required
                                value="{{ old('tgl_lahir') ? old('tgl_lahir') : date('Y-m-d',strtotime('1990-01-01'))}}" placeholder="tgl_lahir">
                            <label for="name">Tanggal Lahir</label>
                        </div>
                        <div class="form-floating">
                            <input type="password" class="form-control rounded-bottom" name="password" id="password" required
                                placeholder="Password">
                            <label for="password">Password</label>
                        </div>
    
                        <button class="w-100 btn btn-lg btn-success mt-3" type="submit">Register</button>
                    </form>
                    <small class="d-block mt-3">Sudah punya akun? <a class="text-success" href="/login"> Login Disini</a></small>
                </main>
            </div>
        </div>
    </div>
</div>
    </div>
</div>



 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>
 
</html>