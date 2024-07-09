@extends('layouts.admin')
@section('content')
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Basic Layout</h5>
                <small class="text-muted float-end">Default label</small>
            </div>
            <div class="card-body">
                <form action="{{ route('user.update', $user->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Name</label>
                          @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                        <div class="col-sm-10">
                            <input type="text" class="form-control  @error('name') is-invalid @enderror" id="name" name="name"
                                value="{{ $user->name }}" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
                          @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <input type="email" id="email" name="email" value="{{ $user->email }}"
                                    class="form-control  @error('email') is-invalid @enderror" placeholder="Enter Your Email" aria-label=""
                                    aria-describedby="basic-default-email2" />
                                <span class="input-group-text" id="basic-default-email2"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="password">Password</label>
                        <div class="col-sm-10">
                            <input type="password" id="password" name="password" class="form-control"
                                placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                                aria-describedby="password">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="isAdmin" class="col-sm-2 col-form-label">Is Admin?</label>
                        <div class="col-sm-10">
                            <input type="text" name="isAdmin" value="{{ $user->isAdmin }}" class="form-control"
                                id="isAdmin">
                            {{-- <select class="form-select" name="isAdmin" id="input46">
                                <option value="1">Yes</option>
                                <option value="0">No</option>
                            </select> --}}
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
