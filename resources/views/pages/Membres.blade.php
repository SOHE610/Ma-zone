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
                                <th scope="col">Nom/Prénom</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @forelse ($users as $index=>$user )

                            <tr>
                                <td class="text-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault12">
                                        <label class="position-relative top-2 ms-1" for="flexCheckDefault12"> {{ $index + 1 }} </label>
                                    </div>
                                </td>
                                <td>
                                    <a href="project-overview.html" class="text-body"> {{ $user->responsable_nom }} </a>
                                </td>
                                <td>{{ $user->email_contact }}</td>
                                <td>

                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2" onclick="showUser({{ $user->id }})" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >
                                            <i class="material-symbols-outlined fs-16 text-body">
                                                <a >edit</a>
                                            </i>
                                        </button>
                                        <button class="ps-0 border-0 bg-transparent lh-1 position-relative top-2">
                                            <i class="material-symbols-outlined fs-16 text-danger"> <a href="/delete/{{ $user->id }}"> delete</a></i>
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



    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog ">

            @if (isset($user))

                <form action="{{ route('users.update', ['id' => $user->id ]) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Modifier un Utilisateur</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <input type="hidden" name="id" id="user_id">

                            <div class="form-group  mb-3">
                                <label for="responsable_nom" class="form-label">Nom du responsable</label>
                                <input type="text" class="form-control" id="responsable_nom" name="responsable_nom" required>
                            </div>

                            <div class="mb-3">
                                <label for="email_contact" class="form-label">Email de contact</label>
                                <input type="email" class="form-control" id="email_contact" name="email_contact" required>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fermer</button>
                            <button type="submit"class="btn btn-primary">Modifier</button>
                        </div>
                    </div>
                </form>

            @endif


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

        @if(session('success'))
        <div style="background-color: #d4edda; padding: 10px; border-radius: 5px; margin-bottom: 10px;">
            {{ session('success') }}

        </div>
      @endif

        <form action="/userstore" method="POST" >
            @csrf

            <div class="form-group mb-4">
                <label class="label">Nom/Prénom</label>
                <input type="text" name="responsable_nom" class="form-control text-dark" placeholder="Nom/Prénom">
            </div>
            <div class="form-group mb-4">
                <label class="label">Email</label>
                <input type="text" name="email_contact" class="form-control text-dark" placeholder="Email">
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
