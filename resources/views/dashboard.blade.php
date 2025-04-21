<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.bootstrap5.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  <style>
    body {
      background: linear-gradient(135deg, #1e3c72, #2a5298);
      color: #fff;
      font-family: 'Arial', sans-serif;
    }
    h1 {
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
    }
    .form-control, .form-select {
      background-color: rgba(255, 255, 255, 0.1);
      color: #fff;
      border: 1px solid rgba(255, 255, 255, 0.3);
    }
    .form-control::placeholder, .form-select option {
      color: rgba(255, 255, 255, 0.7);
    }
    .btn-primary {
      background: linear-gradient(135deg, #6a11cb, #2575fc);
      border: none;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }
    .btn-primary:hover {
      transform: scale(1.1);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    }
    table {
      background-color: rgba(255, 255, 255, 0.1);
    }
    table thead {
      background-color: rgba(0, 0, 0, 0.3);
    }
    table tbody tr:hover {
      background-color: rgba(255, 255, 255, 0.2);
      transition: background-color 0.3s ease;
    }
  </style>
</head>
<body>
  <div class="container mt-5 animate__animated animate__fadeIn">
    <h1 class="mb-4 text-center">Dashboard</h1>
    <div class="d-flex justify-content-between mb-3">
      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addProductModal">
        Tambah Produk Buku
      </button>
      <input type="text" id="searchBar" class="form-control w-25" placeholder="Cari produk...">
      <select id="stockFilter" class="form-select w-25">
        <option value="">Semua Stok</option>
        <option value="in-stock">Stok Tersedia</option>
        <option value="out-of-stock">Stok Habis</option>
      </select>
      <button id="exportCsv" class="btn btn-primary">Export CSV</button>
    </div>
    <table id="productTable" class="table table-bordered text-white">
      <thead>
        <tr>
          <th>ID Produk</th>
          <th>Nama Produk</th>
          <th>Harga Produk</th>
          <th>Stok Produk</th>
          <th>Deskripsi Produk</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($produk as $prod)
        <tr>
          <td>{{ $prod->id_produk }}</td>
          <td>{{ $prod->nama_produk }}</td>
          <td>{{ number_format($prod->harga_produk, 2) }}</td>
          <td>{{ $prod->stok_produk }}</td>
          <td>{{ $prod->deskripsi_produk }}</td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap5.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
  <script>
    $(document).ready(function() {
      const table = $('#productTable').DataTable({
        dom: 'Bfrtip',
        buttons: [
          {
            extend: 'csvHtml5',
            text: 'Export CSV',
            className: 'btn btn-primary',
            exportOptions: {
              columns: ':visible'
            }
          }
        ],
        language: {
          search: "Cari:",
          lengthMenu: "Tampilkan _MENU_ entri",
          info: "Menampilkan _START_ sampai _END_ dari _TOTAL_ entri",
          paginate: {
            first: "Pertama",
            last: "Terakhir",
            next: "Berikutnya",
            previous: "Sebelumnya"
          }
        }
      });

      $('#searchBar').on('keyup', function() {
        table.search(this.value).draw();
      });

      $('#stockFilter').on('change', function() {
        const filterValue = this.value;
        if (filterValue === 'in-stock') {
          table.column(3).search('^[1-9][0-9]*$', true, false).draw();
        } else if (filterValue === 'out-of-stock') {
          table.column(3).search('^0$', true, false).draw();
        } else {
          table.column(3).search('').draw();
        }
      });

      $('#exportCsv').on('click', function() {
        table.button(0).trigger();
      });
    });
  </script>
  <div class="modal fade" id="addProductModal" tabindex="-1" aria-labelledby="addProductModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content" style="background-color: #2a5298; color: #fff;"> {{-- Sesuaikan style jika perlu --}}
        <div class="modal-header">
          <h5 class="modal-title" id="addProductModalLabel">Tambah Produk Buku Baru</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        {{-- Ganti '/add-book-api' dengan rute yang akan kita buat nanti --}}
        <form id="addBookForm" method="POST" action="{{ url('/add-book-via-api') }}">
          @csrf {{-- Penting untuk keamanan Laravel --}}
          <div class="modal-body">
            {{-- Ganti field di bawah ini sesuai dengan data yang dibutuhkan API --}}
            <div class="mb-3">
              <label for="bookTitle" class="form-label">Judul Buku</label>
              <input type="text" class="form-control" id="bookTitle" name="title" required>
            </div>
            <div class="mb-3">
              <label for="bookAuthor" class="form-label">Penulis</label>
              <input type="text" class="form-control" id="bookAuthor" name="author" required>
            </div>
            <div class="mb-3">
              <label for="bookIsbn" class="form-label">ISBN</label>
              <input type="text" class="form-control" id="bookIsbn" name="isbn"> {{-- Buat required jika wajib --}}
            </div>
            <div class="mb-3">
              <label for="bookPrice" class="form-label">Harga</label>
              <input type="number" step="0.01" class="form-control" id="bookPrice" name="price" required>
            </div>
            <div class="mb-3">
              <label for="bookStock" class="form-label">Stok</label>
              <input type="number" class="form-control" id="bookStock" name="stock" required>
            </div>
            <div class="mb-3">
              <label for="bookDescription" class="form-label">Deskripsi</label>
              <textarea class="form-control" id="bookDescription" name="description" rows="3"></textarea>
            </div>
            {{-- Tambahkan field lain jika diperlukan oleh API --}}
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Tambah Buku via API</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
