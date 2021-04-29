@extends('pages.master')
@section('content')



<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h3>{{ __('Create Food') }}<h3></div>

                <div class="card-body">
                    
                <form action="{{ route('create') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="restaurant" class="col-md-4 col-form-label text-md-right">{{ __('Restaurant') }}</label>

                            <div class="col-md-6">
                                <input id="restaurant" type="text" class=" form-control @error('restaurant') is-invalid @enderror" name="restaurant" value="{{ old('restaurant') }}" required autocomplete="restaurant" autofocus>

                                @error('restaurant')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="number" step="0.01" min="0" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price">

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                        <label for="img" class="col-md-4 col-form-label text-md-right">{{ __('Image file') }}</label>

                        <div class="col-md-6">
                        <input type="file" class="form-control-file" name="photo">
                        </div>
                        </div>


                        <div class="form-group row mb-0 text-right">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn create">
                                    {{ __('Create') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
.create{
    background-color: #00FF00;
    color: black;
}

.create:hover{
    background-color: #98FB98;
  color: black;
}

</style>



@endsection