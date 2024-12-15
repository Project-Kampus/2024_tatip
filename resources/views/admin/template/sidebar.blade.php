<div class="pe-4 list-menu">
   <a href="{{ route('admin.umum') }}"
      class="btn btn-yellow {{ Route::currentRouteName() === 'admin.umum' ? 'activ' : '' }}">UMUM</a>
   <a href="{{ route('admin.keamanan') }}"
      class="btn btn-yellow {{ Route::currentRouteName() === 'admin.keamanan' ? 'activ' : '' }}">KEAMANAN & KETERTIBAN</a>
   <a href="{{ route('admin.kebersihan') }}"
      class="btn btn-yellow {{ Route::currentRouteName() === 'admin.kebersihan' ? 'activ' : '' }}">KEBERSIHAN LINGKUNGAN</a>
   <a href="{{ route('admin.iuran') }}"
      class="btn btn-yellow {{ Route::currentRouteName() === 'admin.iuran' ? 'activ' : '' }}">IURAN WARGA</a>
   <a href="{{ route('admin.kegiatan') }}"
      class="btn btn-yellow {{ Route::currentRouteName() === 'admin.kegiatan' ? 'activ' : '' }}">KEGIATAN SOSIAL</a>
</div>