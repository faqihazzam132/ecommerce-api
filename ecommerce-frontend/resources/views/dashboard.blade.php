<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard Pustaka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
    <style>
        /* Sidebar styles */
        .sidebar {
            min-height: 100vh;
            background: linear-gradient(135deg, #6a11cb, #2575fc);
            color: white;
        }

        .sidebar h4 {
            font-weight: bold;
            text-transform: uppercase;
        }

        .sidebar .nav-link {
            color: white;
            transition: background-color 0.3s, transform 0.3s;
        }

        .sidebar .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateX(5px);
        }

        .sidebar .nav-link.active {
            background-color: rgba(255, 255, 255, 0.3);
            font-weight: bold;
        }

        /* Summary card styles */
        .summary-card {
            transition: transform 0.3s, box-shadow 0.3s;
            border: none;
            border-radius: 15px;
        }

        .summary-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .summary-card h5 {
            font-size: 1.2rem;
        }

        .summary-card h3 {
            font-size: 2.5rem;
            font-weight: bold;
        }

        /* Table styles */
        .table-striped tbody tr:hover {
            background-color: rgba(0, 123, 255, 0.1);
            transition: background-color 0.3s;
        }

        /* Button animations */
        .btn-primary {
            transition: background-color 0.3s, transform 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: scale(1.1);
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-3 col-lg-2 sidebar p-3">
                <h4 class="mb-4">Pustaka App</h4>
                <ul class="nav flex-column" role="navigation" aria-label="Sidebar navigation">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-home me-2"></i>Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-book me-2"></i>Data Pustaka</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-users me-2"></i>Pengguna</a>
                    </li>
                </ul>
            </nav>

            <!-- Main Content -->
            <main class="col-md-9 col-lg-10 ms-sm-auto px-md-4 py-4">
                <h2 class="text-primary">Dashboard</h2>
                <hr />

                <!-- Summary Cards -->
                <section class="row mb-4" aria-label="Summary cards">
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
                </section>

                <!-- Recent Data Table -->
                <section class="card" aria-label="Recent data table">
                    <header class="card-header bg-primary text-white">
                        <h5>Data Pustaka Terbaru</h5>
                    </header>
                    <div class="card-body">
                        <table class="table table-striped">
                            <caption>Daftar pustaka terbaru</caption>
                            <thead>
                                <tr>
                                    <th scope="col">ID</th>
                                    <th scope="col">Judul</th>
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Buku Panduan Laravel</td>
                                    <td>Teknologi</td>
                                    <td><span class="badge bg-success">Tersedia</span></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary">Detail</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Dasar-dasar Pemrograman</td>
                                    <td>Teknologi</td>
                                    <td><span class="badge bg-warning">Dipinjam</span></td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-primary">Detail</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
