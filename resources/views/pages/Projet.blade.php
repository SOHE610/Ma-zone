@extends('master')
@section('content')
<div class="main-content-container overflow-hidden">
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
        <h3 class="mb-0">Liste des Dossiers</h3>

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
                    <span class="fw-medium">Dossier</span>
                </li>
            </ol>
        </nav>
    </div>

    <div class="card bg-white border-0 rounded-3 mb-4">
        <div class="card-body p-0">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 p-4">
                <form class="position-relative table-src-form me-0">
                    <input type="text" class="form-control" placeholder="Search here">
                    <i class="material-symbols-outlined position-absolute top-50 start-0 translate-middle-y">search</i>
                </form>
                <button class="btn btn-outline-primary py-1 px-2 px-sm-4 fs-14 fw-medium rounded-3 hover-bg" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                    <span class="py-sm-1 d-block">
                        <i class="ri-add-line d-none d-sm-inline-block"></i>
                        <span>Ajouter un dossier</span>
                    </span>
                </button>
            </div>

            <div class="default-table-area style-two default-table-width">
                <div class="table-responsive">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                
                                <th scope="col">Titre</th>
                                <th scope="col">Catégorie</th>
                                <th scope="col">Quartier</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ( $sgns as $sgn)
                                <tr>
                                    <td class="text-body">
                                        {{ $sgn->titre }}
                                    </td>
                                    <td>
                                        {{ $sgn->categorie }}
                                    </td>
                                    <td> {{ $sgn->quartier }} </td>
                                    <td>
                                        <span class="badge bg-danger bg-opacity-10 text-danger p-2 fs-12 fw-normal"> {{ $sgn->statut }} </span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center gap-1">
                                            <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                <i class="material-symbols-outlined fs-16 text-primary">visibility</i>
                                            </button>
                                            <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                <i class="material-symbols-outlined fs-16 text-body">edit</i>
                                            </button>
                                            <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                <i class="material-symbols-outlined fs-16 text-danger">delete</i>
                                            </button>
                                        </div>
                                    </td> 
                                </tr>
                            @empty
                                
                            @endforelse
                                

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