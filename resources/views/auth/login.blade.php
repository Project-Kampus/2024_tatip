<!DOCTYPE html>
<html lang="en">

<head>
   <title>{{ config('app.name', 'Laravel') }}</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <link rel="icon" type="image/x-icon" href="{{asset('assets/img/logo.png')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap-5.3.3-dist/css/bootstrap.css')}}">
   <link rel="stylesheet" type="text/css" href="{{asset('assets/css/css.css')}}">
   <style>
      .main-body {
         height: calc(100vh - 6rem);
         /* Tinggi penuh sesuai viewport */
         display: flex;
         justify-content: center;
         /* Tengah horizontal */
         align-items: center;
         /* Tengah vertikal */
      }
   </style>
</head>

<body class="bg-yellow">

   <div class="my-5 bg-white main-body">
      <div class="card" style="max-width: 625px;">
         <div class="card-body bg-gray-1">
            <div class="container">
               <div class="text-center">
                  <p class="fs-3 fw-bold mb-0">RT. 34</p>
                  <span>Lrg. Tegal Sari IV</span>
               </div>
               <div class="bg-yellow py-2 border-z my-3">
                  <p class="text-center fs-4 fw-bold m-0">Halo Admin</p>
               </div>
               <p>Silahkan Masukan Nama Pengguna dan Kata Sandi Kamu</p>
               <br>
               <form action="{{route('actionLogin')}}" method="post">
                  @csrf
                  <div class="mb-3">
                     <label for="email" class="form-label">Nama Pengguna</label>
                     <input type="email" class="form-control" id="email" name="email" required>
                  </div>
                  <div class="mb-3">
                     <label for="password" class="form-label">Kata Sandi</label>
                     <input type="password" class="form-control" id="password" name="password" required>
                  </div>
                  <button type="submit" class="btn btn-gray w-100 mt-3 fw-bold">Login</button>
                  <a href="{{route('home')}}" class="btn btn-yellow w-100 fw-bold  mt-3 ">Batal</a>
               </form>
            </div>
         </div>
      </div>
   </div>

   <script src="{{asset('lib/bootstrap-5.3.3-dist/js/bootstrap.bundle.js')}}"></script>
   <script src="{{asset('assets/js/js.js')}}"></script>
</body>

</html>