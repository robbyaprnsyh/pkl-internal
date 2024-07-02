@extends('layouts.backend')
@section('content')
    <form action="{{ route('user.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="col-12 col-xl-12">
            <div class="card">
                <div class="card-body p-4">
                    <h5 class="mb-4">Add User</h5>
                    <form class="row g-3">
                        <div class="col-md-12">
                            <label for="input13" class="form-label">Username</label>
                            <div class="position-relative input-icon">
                                <input type="text" name="name"
                                    class="form-control @error('name') is-invalid @enderror" id="name"
                                    placeholder="Username" required>
                                <span class="position-absolute top-50 translate-middle-y"><i
                                        class="material-icons-outlined fs-5">person_outline</i></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="input16" class="form-label">Email</label>
                            <div class="position-relative input-icon">
                                <input type="text" name="email"
                                    class="form-control @error('email') is-invalid @enderror" id="email"
                                    placeholder="Email" required>
                                <span class="position-absolute top-50 translate-middle-y"><i
                                        class="material-icons-outlined fs-5">email</i></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="input17" class="form-label">Password</label>
                            <div class="position-relative input-icon">
                                <input type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror" id="password"
                                    placeholder="Password">
                                <span class="position-absolute top-50 translate-middle-y"><i
                                        class="material-icons-outlined fs-5">lock_open</i></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="input17" class="form-label">Confirm Password</label>
                            <div class="position-relative input-icon">
                                <input type="password" name="password_confirmation"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    id="password_confirmation" placeholder="Confirm Password">
                                <span class="position-absolute top-50 translate-middle-y"><i
                                        class="material-icons-outlined fs-5">lock_open</i></span>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="input19" class="form-label">Role</label>
                            <select id="input19" name="role" class="form-select">
                                <option selected="">Choose...</option>
                                <option value="0">User</option>
                                <option value="1">Admin</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label class="col-sm-3 col-form-label"></label>
                            <div class="d-md-flex d-grid align-items-center gap-2">
                                <button type="submit" class="btn btn-outline-primary px-4">Save</button>
                                <a href="{{ route('user.index') }}" type="button"
                                    class="btn btn-outline-danger px-4">Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>
@endsection
