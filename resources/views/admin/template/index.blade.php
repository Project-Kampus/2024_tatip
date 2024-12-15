@extends('template.index')

@section('css')
<style>
   .list-menu a {
      width: 100%;
      display: block;
      border-radius: 20px;
      margin-bottom: 15px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
   }

   .list-menu a.activ {
      font-weight: bold;
   }
</style>

@yield('cssadmin')

@endsection


@section('main')
@include('template.header', ['h_title' => 'Kelola Informasi Tata Tertib'])
<div class="row g-0 mt-3 rounded">
   <div class="col-4">
      @include('admin.template.sidebar')
   </div>
   <div class="col">
      <div class="border-o bg-gray-2 p-4">
         @yield('mainadmin')
      </div>
   </div>
</div>

@endsection

@section('js')



@yield('jsadmin')
@endsection