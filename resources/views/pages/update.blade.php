@extends('master')


@section('content')



<form action="/update" method="POST" >
    @csrf

    <input type="text" name="id" style="display: none;" value="{{ $user->id }}" >
    
    <div class="form-group mb-4">
        <label class="label">Nom/Prénom</label>
        <input type="text" name="responsable_nom" value="{{ $user->responsable_nom }}" class="form-control text-dark" placeholder="Nom/Prénom">
    </div>
    <div class="form-group mb-4">
        <label class="label">Email</label>
        <input type="text" name="email_contact" value="{{ $user->email_contact }}"  class="form-control text-dark" placeholder="Email">
    </div>
    <div class="form-group mb-4">
        <label class="label">Password</label>
        <input type="Password" name="password" value="{{ $user->password }}"  class="form-control text-dark">
   
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

@endsection