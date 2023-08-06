@extends('layouts.main')

@section('container')
  <div class="pagetitle">
    <h1>Profile</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Users</li>
        <li class="breadcrumb-item active">Profile</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

                              <!-- Success Alert -->
                              @if(session('success'))
                              <div class="alert alert-success mt-3">
                              {{ session('success') }}
                              </div>
                          @endif
          
                          <!-- Error Alert -->
                          @if(session('error'))
                              <div class="alert alert-danger mt-3">
                              {{ session('error') }}
                              </div>
                          @endif
  <section class="section profile">
    <div class="row">
      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Edit Profile</h5>
            <!-- Profile Edit Form -->
            <form action="{{ route('profile.update', $user->id) }}" method="POST">
              @csrf
              @method('PUT')

              <div class="mb-3">
                <label for="fullName" class="form-label">Name</label>
                <input name="name" type="text" class="form-control" id="fullName" value="{{ $user->name }}">
              </div>

              <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input name="phone" type="text" class="form-control" id="phone" value="{{ $user->phone }}">
              </div>

              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input name="email" type="email" class="form-control" id="email" value="{{ $user->email }}">
              </div>


              <div class="text-center">
                <button type="submit" class="btn btn-primary">Save Changes</button>
              </div>
            </form>
            <!-- End Profile Edit Form -->


          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Change Password</h5>
            <!-- Change Password Form -->
            <form action="{{ route('profile.changePassword', $user->id) }}" method="POST">
              @csrf
              @method('PUT')

              <div class="mb-3">
                <label for="currentPassword" class="form-label">Current Password</label>
                <input name="current_password" type="password" class="form-control" id="currentPassword">
              </div>
              
              <div class="mb-3">
                <label for="newPassword" class="form-label">New Password</label>
                <input name="new_password" type="password" class="form-control" id="newPassword">
              </div>
              
              <div class="mb-3">
                <label for="renewPassword" class="form-label">Re-enter New Password</label>
                <input name="renew_password" type="password" class="form-control" id="renewPassword">
              </div>
              

              <div class="text-center">
                <button type="submit" class="btn btn-primary">Change Password</button>
              </div>
            </form>
            <!-- End Change Password Form -->


          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
