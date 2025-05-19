@extends('master')

@section('content')
<div class="main-content-container overflow-hidden">
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
        <h3 class="mb-0">MEMBRES</h3>

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
                    <span class="fw-medium">Membre</span>
                </li>
            </ol>
        </nav>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif



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
                        <span>Ajouter un Membre</span>
                    </span>
                </button>
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
                                <th scope="col">Nom </th>
                                <th scope="col">type</th>
                                <th scope="col">Email</th>
                                <th scope="col">telephone</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>
                       <tbody>
                            @foreach($organisations as $organisation)
                                <tr>
                                    <td class="text-body">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="{{ $organisation->id }}" id="check{{ $organisation->id }}">
                                            <label class="position-relative top-2 ms-1" for="check{{ $organisation->id }}">{{ $organisation->id }}</label>
                                        </div>
                                    </td>
                                    <td><a href="#" class="text-body">{{ $organisation->nom }}</a></td>
                                    <td>{{ $organisation->type }}</td>
                                    <td>{{ $organisation->email }}</td>
                                    <td>{{ $organisation->telephone }}</td>
                                    <td>
                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                            <i class="material-symbols-outlined fs-16 text-body">edit</i>
                                        </button>
                                        <form action="{{ route('organisations.destroy', $organisation->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                                <i class="material-symbols-outlined fs-16 text-danger">delete</i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>


                    </table>
                </div>
                <div class="p-4 pt-lg-4">
                    <div class="d-flex justify-content-center justify-content-sm-between align-items-center text-center flex-wrap gap-2 showing-wrap">
                        <span class="fs-12 fw-medium">
                            Affichage de {{ $organisations->firstItem() }} à {{ $organisations->lastItem() }} sur {{ $organisations->total() }} résultats
                        </span>

                        {{-- Pagination links --}}
                        {{ $organisations->links() }}
                    </div>
                </div>

            </div>
        </div>
    </div>





</div>




<!-- Start Create Option Area -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
    <div class="offcanvas-header border-bottom p-4">
        <h5 class="offcanvas-title fs-18 mb-0" id="offcanvasRightLabel">Create Task</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-4">


        <form action="/Organisatione" method="POST" >
            @csrf

            <div class="form-group mb-4">
                <label class="label">Nom de L'organisation</label>
                <input type="text" name="nom" class="form-control text-dark" placeholder="Nom de L'organisation">
            </div>
            <div class="form-group mb-4">

                <label class="label">Type d'Organisation</label>
                <input type="text" name="type" class="form-control text-dark" placeholder="Organisation">
            </div>
            <div class="form-group mb-4">
                <label class="label">Email</label>
                <input type="text" name="email" class="form-control text-dark" placeholder="Email">
            </div>
            <div class="form-group mb-4">
                <label class="label">Telephone</label>
                <input type="text" name="telephone" class="form-control text-dark" placeholder="telephone">
            </div>
            <div class="form-group mb-4">
                <label class="label">Password</label>
                <input type="Password" name="password"  class="form-control text-dark">

            </div>
            <div class="form-group mb-4">

            <div class="form-group d-flex gap-3">
                <button class="btn btn-primary text-white fw-semibold py-2 px-2 px-sm-3">
                    <span class="py-sm-1 d-block">
                        <i class="ri-add-line text-white"></i>
                        <span>Create Task</span>
                    </span>
                </button>
            </div>
        </form>
    </div>
</div>






<!-- End Create Option Area -->

<script>
    function showUser(id) {
        fetch('/update/'+id)
            .then(response => response.json())
            .then(data => {
                document.getElementById('responsable_nom').value = data.responsable_nom;
                document.getElementById('email_contact').value = data.email_contact;
                document.getElementById('user_id').value = data.id;
            })
            .catch(error => console.error('Error:', error));
    }
</script>

@endsection
