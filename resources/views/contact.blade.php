@extends('master_layout.master_template')

@section('content')
    <main class="flex-shrink-0">
        <!-- Navigation-->
        @include('partials.navbar')
        <!-- Page content-->
        <section class="py-5">
            <div class="container px-5">
                <!-- Contact form-->
                <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                    <div class="text-center mb-5">
                        <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i
                                class="bi bi-envelope"></i></div>
                        <h1 class="fw-bolder">Register Here </h1>
                        <p class="lead fw-normal text-muted mb-0">Let's work together!</p>
                    </div>
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <form method="POST" action="{{ route('contact_information_store') }}" class="w-50"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" name="name" id="name" value="" class="form-control" required
                                        autofocus />
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Otp</label>
                                    <input type="text" name="otp" id="name" value="" class="form-control" />
                                </div>
                                <div class="mb-3">
                                    <label for="name" class="form-label">Mobile</label>
                                    <input type="text" name="mobile" value="" class="form-control" />
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="text" name="email" id="email" value="" class="form-control" required />
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="text" name="password" id="password" class="form-control" required />
                                </div>

                                {{-- file upload --}}
                                <div class="mb-3">
                                    <label  class="form-label">Upload Image</label>
                                    <input type="file" name="profile_image">
                                </div>

                                <button type="submit" class="btn btn-primary">Register</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection