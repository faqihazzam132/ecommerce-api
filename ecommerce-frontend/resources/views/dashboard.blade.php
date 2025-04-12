<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Pustaka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            min-height: 100vh;
            background-color: #f8f9fa;
        }
        .summary-card {
            transition: transform 0.3s;
        }
        .summary-card:hover {
            transform: translateY(-5px);
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 sidebar p-3">
                <h4 class="mb-4">Pustaka App</h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Data Pustaka</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pengguna</a>
                    </li>
                </ul>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 ms-sm-auto px-md-4 py-4">
                <h2>Dashboard</h2>
                <hr>

                <!-- Summary Cards -->
                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="card summary-card bg-primary text-white p-3">
                            <h5>Total Pustaka</h5>
                            <h3>120</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card summary-card bg-success text-white p-3">
                            <h5>Pustaka Aktif</h5>
                            <h3>98</h3>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card summary-card bg-warning text-dark p-3">
                            <h5>Pustaka Baru</h5>
                            <h3>12</h3>
                        </div>
                    </div>
                </div>

                <!-- Recent Data Table -->
                <div class="card">
                    <div class="card-header">
                        <h5>Data Pustaka Terbaru</h5>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Buku Panduan Laravel</td>
                                    <td>Teknologi</td>
                                    <td><span class="badge bg-success">Tersedia</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-primary">Detail</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Dasar-dasar Pemrograman</td>
                                    <td>Teknologi</td>
                                    <td><span class="badge bg-warning">Dipinjam</span></td>
                                    <td>
                                        <button class="btn btn-sm btn-primary">Detail</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
