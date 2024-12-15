@extends('template.index')

@section('css')

<style>
   .main li {
      text-align: justify;
   }

   .ttd {
      p {
         margin-bottom: 0px;
      }
   }
</style>

@endsection

@section('main')


<div class="mt-3 border-o bg-gray-1 ">
   @include('template.header', ['h_title' => '.'])

   <div class="container main">
      <p class="fs-5 fw-bold text-center">PERATURAN DAN TATA TERTIB RT.34 <br> LRG. TEGAL SARI IV <br> KEL. SIMPANG III SIPIN, KEC. KOTA BARU </p>
      <p class="mb-0">1. Umum</p>
      <ul>
         @foreach ($umum as $item)
         <li>{{$item->text}}</li>
         @endforeach
      </ul>
      <p class="mb-0">2. Keamanan dan Ketertipan</p>
      <ul>
         @foreach ($keamanan as $item)
         <li>{{$item->text}}</li>
         @endforeach
      </ul>
      <p class="mb-0">3. Kebersihan Lingkungan</p>
      <ul>
         @foreach ($kebersihan as $item)
         <li>{{$item->text}}</li>
         @endforeach
      </ul>
      <p class="mb-0">4. Iuran Warga</p>
      <ul>
         @foreach ($iuran as $item)
         <li>{{$item->text}}</li>
         @endforeach
      </ul>
      <p class="mb-0">5. Kegiatan Sosial</p>
      <ul>
         @foreach ($umum as $item)
         <li>{{$item->text}}</li>
         @endforeach
      </ul>

      <p style="text-align: justify;">Demikian Peraturan dan Tata Tertib Rukun Tetangga (RT) ini disusun sebagai pedoman bersama untuk menciptakan lingkungan yang aman, nyaman, harmonis, dan penuh kebersamaan. Kami berharap seluruh warga dapat mematuhi dan melaksanakan aturan ini dengan penuh tanggung jawab dan kesadaran demi kepentingan bersama.
         Mari kita jaga dan tingkatkan semangat gotong royong serta rasa kekeluargaan di lingkungan RT ini, karena kebersamaan adalah kunci utama untuk mencapai kehidupan bertetangga yang damai dan sejahtera.</p>

      <div class="row">
         <div class="col"></div>
         <div class="col-4 ttd text-center fw-bold">
            <p>Ditandatangani oleh,</p>
            <p>Ketua RT.34</p>
            <div style="margin-bottom: 80px;"></div>
            <p>Reza</p>
         </div>
      </div>
   </div>
</div>

@endsection