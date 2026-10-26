<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Registration</title>
    <link href="/docs/5.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css">
</head>
<body class="d-flex align-items-center py-4 bg-body-tertiary">
    <main class="form-signin w-100 m-auto border rounded-2" style="box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
        <form action="{{ route('adminRegister.submit') }}" method="POST" >
            @csrf
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        toastr.error(@json($error));
                    });
                </script>
                @endforeach
            @endif
            <div class="text-center">
                <img src="{{ asset('front-assets/homesport-logo.png') }}" width="60%" alt="Logo" class="mt-2">
                <p>Register a new admin account</p>
            </div>

            <div class="form-floating">
                <input type="text" name="name" class="form-control" value="{{ old('name') }}" placeholder="Full Name" required>
                <label for="name">Full Name</label>
            </div>
            <div class="form-floating">
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email" required>
                <label for="email">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <div class="form-floating">
                <input type="password" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
                <label for="password_confirmation">Confirm Password</label>
            </div>

            <button class="btn btn-primary w-100 py-2" type="submit">Register</button>
        </form>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
          @if(session('message'))
              toastr.success("{{ session('message') }}");
          @endif
      });
    </script>
</body>
</html>
