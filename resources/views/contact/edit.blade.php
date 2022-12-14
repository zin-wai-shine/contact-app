@extends('layouts.app')
@section('content')

    <div class="w-50 px-5">
        <form action="{{route('contact.update', $contact->id)}}" class="mtContact" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="w-100">
                {{--Upload Photo--}}
                <div class=" d-flex justify-content-between align-items-end">
                    <div class="upload__photo__container" id="featuredImgContainer">
                        <img src="{{ $contact->featured_img == null ? asset('profile/profile.png') : asset(Storage::url($contact->featured_img)) }}" id="editImage" class="upload__photo" alt="">
                        <input type="file" name="featured_img" id="featuredImg" hidden>
                        @error('featuredImg') <small class="text-danger">{{$message}}</small> @enderror
                    </div>
                    <div>
                        <button class="btn btn-secondary opacity-50 px-3">update</button>
                    </div>
                </div>
            </div>
            <hr>
            <div class="d-flex gap-2 w-100">
                <i class="fa fa-user mt-3 text-secondary"></i>
                <div class="w-100">
                    <div class="mb-1">
                        <div class="form-floating mb-3">
                            <input type="text" name="firstName" value={{old('firstName', $contact->first_name)}} class="form-control @error('firstName') is-invalid @enderror" id="floatingInput" placeholder="First Name">
                            <label for="floatingInput">First Name</label>

                            @error('firstName') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                    </div>

                    <div class="mb-1">
                        <div class="form-floating mb-3">
                            <input type="text" name="lastName" value={{old('lastName', $contact->last_name)}} class="form-control @error('lastName') is-invalid @enderror" id="floatingInput" placeholder="Last Name">
                            <label for="floatingInput">Last Name</label>
                            @error('lastName') <small class="text-danger">{{$message}}</small> @enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="d-flex gap-2 w-100">
                <i class="fa fa-building mt-3 text-secondary"></i>
                <div class="w-100">
                    <div class="form-floating mb-3">
                        <input type="text" name="company" value="{{old('company', $contact->company)}}"  class="form-control @error('company') is-invalid @enderror" id="floatingInput" placeholder="Company">
                        <label for="floatingInput">Company</label>
                        @error('company') <small class="text-danger">{{$message}}</small> @enderror
                    </div>

                    <div class="form-floating mb-3">
                        <input type="text" name="jobTitle" value="{{old('jobTitle', $contact->job_title)}}" class="form-control  @error('jobTitle') is-invalid @enderror" id="floatingInput" placeholder="Job Title">
                        <label for="floatingInput">Job Title</label>
                        @error('jobTitle') <small class="text-danger">{{$message}}</small> @enderror
                    </div>
                </div>
            </div>

            <div class="d-flex gap-1 w-100">
                <i class="fa fa-envelope mt-3 text-secondary"></i>
                <div class="w-100">
                    <div class="form-floating mb-3">
                        <input type="email" name="email" value="{{old('email', $contact->email)}}"  class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                        @error('email') <small class="text-danger">{{$message}}</small> @enderror
                    </div>
                </div>
            </div>

            <div class="d-flex gap-1 w-100">
                <i class="fa fa-phone mt-3 text-secondary"></i>
                <div class="w-100">
                    <div class="form-floating mb-3">
                        <input type="text" name="phone"  value="{{old('phone', $contact->phone)}}" class="form-control @error('phone') is-invalid @enderror" id="floatingInput" placeholder="Phone">
                        <label for="floatingInput">Phone</label>
                        @error('phone') <small class="text-danger">{{$message}}</small> @enderror
                    </div>
                </div>
            </div>

            <div class="d-flex gap-1 w-100">
                <i class="fa fa-calendar mt-3 text-secondary"></i>
                <div class="w-100">
                    <div class="form-floating mb-3">
                        <input type="date" name="birthday" value="{{old('birthday', $contact->birthday)}}"  class="form-control @error('birthday') is-invalid @enderror" id="floatingInput" placeholder="Birthday">
                        <label for="floatingInput">Birthday</label>
                        @error('birthday') <small class="text-danger">{{$message}}</small> @enderror
                    </div>
                </div>
            </div>

            <div class="d-flex gap-1 w-100">
                <i class="fa fa-note-sticky mt-3 text-secondary"></i>
                <div class="w-100">
                    <div class="form-floating mb-3">
                        <input type="text" name="note" value="{{old('note', $contact->note)}} "   class="form-control @error('note') is-invalid @enderror" id="floatingInput" placeholder="Note">
                        <label for="floatingInput">Note</label>
                        @error('note') <small class="text-danger">{{$message}}</small> @enderror
                    </div>
                </div>
            </div>

        </form>
    </div>

@endsection
