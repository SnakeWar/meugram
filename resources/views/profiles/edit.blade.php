@extends('layouts.app')

@section('content')
<div class="container">

    <form action="/p" enctype="multipart/form-data" method="post">

        @csrf
        @method('')
        <div class="row">
            <div class="col-8 offset-2">

                <div class="row">
                    <h2>Edit Profile</h2>
                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label ">{{ __('Title') }}</label>


                    <input id="title"
                           type="text"
                           class="form-control @error('title') is-invalid @enderror"
                           name="caption"
                           value="{{ old('title') ?? $user->profile->title }}"
                           required autocomplete="title"
                           autofocus>

                    @error('title')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label ">{{ __('Description') }}</label>


                    <input id="description"
                           type="text"
                           class="form-control @error('description') is-invalid @enderror"
                           name="description"
                           value="{{ old('description')  ?? $user->profile->description }}"
                           required autocomplete="description"
                           autofocus>

                    @error('description')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label ">{{ __('URL') }}</label>


                    <input id="URL"
                           type="text"
                           class="form-control @error('URL') is-invalid @enderror"
                           name="URL"
                           value="{{ old('URL')  ?? $user->profile->url }}"
                           required autocomplete="URL"
                           autofocus>

                    @error('URL')
                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                    @enderror

                </div>

                <div class="row">

                    <label for="image" class="col-md-4 col-form-label">{{ __('Profile Image') }}</label>

                    <input type="file" class="form-control-file" id="image" name="image">

                    @error('image')
                    <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                    @enderror

                </div>

                <div class="row pt-4">

                    <button class=" btn btn-primary p-2">Save Profile</button>

                </div>

            </div>

        </div>

    </form>

</div>
@endsection
