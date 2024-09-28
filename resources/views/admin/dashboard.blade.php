<x-app-layout>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

   <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            height: 100vh;
            background: #343a40;
        }
        .sidebar a {
            color: white;
        }
        .sidebar a:hover {
            background: #495057;
        }
    </style>
    <div class="d-flex">
        <!-- Sidebar -->
        <nav class="sidebar p-3">
            <h6 class="text-white">Admin Dashboard</h6>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#overview">Managing cars</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#users">Rentals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#settings">Customers</a>
                </li>
            </ul>
        </nav>
    
        <!-- Main Content -->
        <div class="container-fluid p-4">
            <h1 class="mb-4">Dashboard Overview</h1>
            
            <!-- Key Metrics -->
            <div class="row mb-4">
                <div class="col-md-4">
                    <div class="card text-white bg-primary">
                        <div class="card-body">
                            <h5 class="card-title">Total number of cars</h5>
                            <p class="card-text">20</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-success">
                        <div class="card-body">
                            <h5 class="card-title">Number of available cars</h5>
                            <p class="card-text">8</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card text-white bg-warning">
                        <div class="card-body">
                            <h5 class="card-title">Total number of rentals</h5>
                            <p class="card-text">10</p>
                        </div>
                    </div>
                </div>
                <br>
                
            </div>
            <div class="col-md-4">
                <div class="card text-white bg-warning">
                    <div class="card-body">
                        <h5 class="card-title">Total earnings from rentals</h5>
                        <p class="card-text">50,000</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
