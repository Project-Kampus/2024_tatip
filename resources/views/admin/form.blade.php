@extends('admin.template.index')

@section('cssadmin')
<style>
   .table {
      --bs-table-bg: transparent;
      --bs-table-border-color: black;
   }

   .btn-add {
      border: 1px solid black;
      width: 100%;
      margin-top: 2px;
      display: none;
      /* Hidden by default */
   }

   .table td {
      padding: 0;
      width: 100%;
   }

   .table tbody tr td textarea {
      width: 100%;
      height: auto;
      border: none;
      resize: none;
      box-sizing: border-box;
      overflow: hidden;
      min-height: 0;
      background-color: white;
   }

   /* textare readonly */
   .table tbody tr td textarea:read-only {
      background-color: transparent;
   }


   .table td textarea:focus {
      outline: none;
      border: none;
   }

   .action-buttons {
      display: none;
      /* Hidden by default */
   }
</style>
@endsection

@section('mainadmin')
<form method="post" action="{{ route('admin.formulir.action') }}" id="rulesForm">
   @csrf
   <input type="hidden" name="tartip" value="{{$tartip}}">
   <table class="table table-bordered bg-gray-2 mb-0" id="rulesTable">
      <thead>
         <tr>
            <th scope="col">No</th>
            <th scope="col">Peraturan dan Tata Tertib</th>
            <th scope="col">Kelola</th>
         </tr>
      </thead>
      <tbody>
         @foreach ($data as $item)
         <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>
               <textarea name="text[{{$item->id}}]" readonly>{{ $item->text }}</textarea>
            </td>
            <td class="text-center">
               <button type="button" class="btn mx-auto btn-danger btn-delete" style="display: none;"><i class="fa-regular fa-trash-can"></i></button>
            </td>
         </tr>
         @endforeach
      </tbody>
   </table>
</form>
<button type="button" class="btn-add" id="addRowButton"><i class="fa-solid fa-circle-plus"></i></button>

<div class="mt-3 text-end">
   <button type="button" class="btn border-o px-3 btn-yellow" id="editButton">Edit Data</button>
   <div class="action-buttons" id="actionButtons">
      <button type="submit" form="rulesForm" class="btn border-o px-3 btn-primary" id="saveButton">Simpan</button>
   </div>
</div>
@endsection

@section('jsadmin')
<script>
   const editButton = document.getElementById('editButton');
   const saveButton = document.getElementById('saveButton');
   const addRowButton = document.getElementById('addRowButton');
   const actionButtons = document.getElementById('actionButtons');

   // Handle Edit Button Click
   editButton.addEventListener('click', function() {
      document.querySelectorAll('textarea').forEach(function(textarea) {
         textarea.removeAttribute('readonly');
         textarea.style.backgroundColor = 'white';
      });
      document.querySelectorAll('.btn-delete').forEach(function(button) {
         button.style.display = 'block';
      });
      addRowButton.style.display = 'block';
      actionButtons.style.display = 'block';
      editButton.style.display = 'none';
   });

   // Handle Add Row Button Click
   addRowButton.addEventListener('click', function() {
      const tableBody = document.querySelector('#rulesTable tbody');
      const newRow = document.createElement('tr');
      const rowCount = tableBody.querySelectorAll('tr').length + 1;
      newRow.innerHTML = `
         <th scope="row">${rowCount}</th>
         <td>
            <textarea name="textadd[${rowCount}]"></textarea>
         </td>
         <td class="text-center">
            <button type="button" class="btn btn-danger btn-delete"><i class="fa-regular fa-trash-can"></i></button>
         </td>
      `;
      tableBody.appendChild(newRow);
      attachDeleteEvent(newRow.querySelector('.btn-delete'));
   });

   // Attach delete event to buttons
   function attachDeleteEvent(button) {
      button.addEventListener('click', function() {
         const row = this.closest('tr');
         const tbody = row.parentNode;
         tbody.removeChild(row);
         updateRowNumbers();
      });
   }

   // Update row numbers after deletion
   function updateRowNumbers() {
      const rows = document.querySelectorAll('#rulesTable tbody tr');
      rows.forEach((row, index) => {
         row.querySelector('th').textContent = index + 1;
      });
   }

   // Attach delete event to initial delete buttons
   document.querySelectorAll('.btn-delete').forEach(attachDeleteEvent);

   // Auto-resize the textarea to fit the content
   document.querySelectorAll('textarea').forEach(function(textarea) {
      textarea.addEventListener('input', function() {
         this.style.height = 'auto';
         this.style.height = (this.scrollHeight) + 'px';
      });
      textarea.dispatchEvent(new Event('input'));
   });
</script>
@endsection