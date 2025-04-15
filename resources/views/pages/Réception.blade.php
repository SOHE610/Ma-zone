{{-- filepath: d:\laravel\resources\views\pages\Réception.blade.php --}}
<tbody>
    @forelse($informations as $information)
        <tr>
            <td>{{ $information->id }}</td>
            <td>{{ $information->type }}</td>
            <td>{{ $information->description }}</td>
            <td>{{ $information->latitude }}</td>
            <td>{{ $information->longitude }}</td>
            <td>
                @if($information->image_path)
                    <img src="{{ asset('storage/' . $information->image_path) }}" alt="Image" width="50">
                @else
                    Aucun
                @endif
            </td>
            <td>{{ $information->created_at->format('d/m/Y H:i') }}</td>
        </tr>
    @empty
        <tr>
            <td colspan="7" class="text-center">Aucune information trouvée.</td>
        </tr>
    @endforelse
</tbody>
@extends('master')

@section('content')
<div class="main-content-container overflow-hidden">
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
        <h3 class="mb-0">Affectation</h3>

        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb align-items-center mb-0 lh-1">
                <li class="breadcrumb-item">
                    <a href="#" class="d-flex align-items-center text-decoration-none">
                        <i class="ri-home-4-line fs-18 text-primary me-1"></i>
                        <span class="text-secondary fw-medium hover">Dashboard</span>
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <span class="fw-medium">Apps</span>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <span class="fw-medium">Réception</span>
                </li>
            </ol>
        </nav>
    </div>

    <div class="card bg-white border-0 rounded-3 mb-4">
        <div class="card-body p-0">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 p-4">
                <h5 class="mb-0">Formulaire de Signalement</h5>
            </div>

            <div class="p-4">
                <form action="{{ route('test.information.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf <!-- Protection CSRF -->

                    <div class="mb-3">
                        <label for="type" class="form-label">Type de Signalement:</label>
                        <input type="text" id="type" name="type" class="form-control" placeholder="Ex: Incendie" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description:</label>
                        <textarea id="description" name="description" class="form-control" placeholder="Décrivez le problème..." required></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="latitude" class="form-label">Latitude:</label>
                        <input type="number" step="any" id="latitude" name="latitude" class="form-control" placeholder="Ex: 48.8566" required>
                    </div>

                    <div class="mb-3">
                        <label for="longitude" class="form-label">Longitude:</label>
                        <input type="number" step="any" id="longitude" name="longitude" class="form-control" placeholder="Ex: 2.3522" required>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image (facultatif):</label>
                        <input type="file" id="image" name="image" class="form-control" accept="image/*">
                    </div>

                    <button type="submit" class="btn btn-primary">Envoyer</button>
                </form>
            </div>
        </div>
    </div>

    <div class="card bg-white border-0 rounded-3 mb-4">
        <div class="card-body p-0">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 p-4">
                <form class="position-relative table-src-form me-0">
                    <input type="text" class="form-control" placeholder="Search here">
                    <i class="material-symbols-outlined position-absolute top-50 start-0 translate-middle-y">search</i>
                </form>
            </div>

            <div class="default-table-area style-two default-table-width">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault7">
                                        <label class="position-relative top-2 ms-1" for="flexCheckDefault7">ID</label>
                                    </div>
                                </th>
                                <th scope="col">Task Title</th>
                                <th scope="col">Assigned To</th>
                                <th scope="col">Due Date</th>
                                <th scope="col">Priority</th>
                                <th scope="col">Attribuer à</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12">
                                        <label class="position-relative top-2 ms-1" for="flexCheckDefault12">#854</label>
                                    </div>
                                </td>
                                <td>
                                    <a href="project-overview.html" class="text-body">Network Infrastructure</a>
                                </td>
                                <td>Oliver Clark</td>
                                <td class="text-body">30 Apr 2024</td>
                                <td class="text-body">High</td>
                                <td>
                                    <span class="badge bg-success bg-opacity-10 text-success p-2 fs-12 fw-normal">Finished</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault8">
                                        <label class="position-relative top-2 ms-1" for="flexCheckDefault8">#853</label>
                                    </div>
                                </td>
                                <td>
                                    <a href="project-overview.html" class="text-body">Cloud Migration</a>
                                </td>
                                <td>Ethan Baker</td>
                                <td class="text-body">25 Apr 2024</td>
                                <td class="text-body">Low</td>
                                <td>
                                    <span class="badge bg-danger bg-opacity-10 text-danger p-2 fs-12 fw-normal">Pending</span>
                                </td>
                            </tr>
                            <tr>
                                <td class="text-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault9">
                                        <label class="position-relative top-2 ms-1" for="flexCheckDefault9">#852</label>
                                    </div>
                                </td>
                                <td>
                                    <a href="project-overview.html" class="text-body">Website Revamp</a>
                                </td>
                                <td>Sophia Carter</td>
                                <td class="text-body">20 Apr 2024</td>
                                <td class="text-body">Medium</td>
                                <td>
                                    <span class="badge bg-primary-div bg-opacity-10 text-primary-div p-2 fs-12 fw-normal">In Progress</span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="p-4 pt-lg-4">
                    <div class="d-flex justify-content-center justify-content-sm-between align-items-center text-center flex-wrap gap-2 showing-wrap">
                        <span class="fs-12 fw-medium">Showing 10 of 30 Results</span>

                        <nav aria-label="Page navigation example">
                            <ul class="pagination mb-0 justify-content-center">
                                <li class="page-item">
                                    <a class="page-link icon" href="to-do-list.html" aria-label="Previous">
                                        <i class="material-symbols-outlined">keyboard_arrow_left</i>
                                    </a>
                                </li>
                                <li class="page-item"><a class="page-link active" href="to-do-list.html">1</a></li>
                                <li class="page-item"><a class="page-link" href="to-do-list.html">2</a></li>
                                <li class="page-item"><a class="page-link" href="to-do-list.html">3</a></li>
                                <li class="page-item"><a class="page-link" href="to-do-list.html">4</a></li>
                                <li class="page-item">
                                    <a class="page-link icon" href="to-do-list.html" aria-label="Next">
                                        <i class="material-symbols-outlined">keyboard_arrow_right</i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection