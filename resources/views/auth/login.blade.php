<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Survey Kepuasan Masyarakat</title>

    <!-- Favicons -->
    <link href="assets/img/logo.jpg" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container"><br>
        <div class="col-md-4 col-md-offset-4">
            <h3 class="text-center">Survey Kepuasan Masyarakat<b> <br>Layanan Masyarakat</b></h2>
            <hr>
            @if(session('error')) 
            <div class="alert alert-danger">
                <b>Opps!</b> {{session('error')}}
            </div>
            @endif
            <form action="{{ route('actionlogin') }}" method="post">
            @csrf
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" required oninvalid="this.setCustomValidity('data tidak boleh kosong dan harus disertai dengan tanda @')" oninput="setCustomValidity('')">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                    <input type="checkbox" onclick="myFunction()">&nbsp Tampilkan Password 
                    <script>
                        function myFunction() {
                            var x = document.getElementById("inputPassword");
                            if (x.type === "password") {
                                x.type = "text";
                            } else {
                                x.type = "password";
                            }
                        }
                    </script>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Log In</button>
                <hr>
                <p class="text-center">Belum punya akun? <a href="register">Register</a> sekarang!</p>
            </form>
        </div>
    </div>
</body>
</html>