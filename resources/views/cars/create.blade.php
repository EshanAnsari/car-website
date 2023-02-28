@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">{{ __('Add Car') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('save_car') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="car_name" class="col-md-4 col-form-label text-md-right">{{ __('Car Name') }}</label>

                            <div class="col-md-6">
                                <input id="car_name" type="text" class="form-control @error('car_name') is-invalid @enderror" name="car_name" value="{{ old('car_name') }}" required autocomplete="car_name" autofocus>

                                @error('car_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br />
                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price">

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br />
                        <div class="form-group row">
                            <label for="top_speed" class="col-md-4 col-form-label text-md-right">{{ __('Top Speed') }}</label>

                            <div class="col-md-6">
                                <input id="top_speed" type="number" class="form-control @error('top_speed') is-invalid @enderror" name="top_speed" value="{{ old('top_speed') }}" required autocomplete="top_speed">

                                @error('top_speed')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <br />
                        <div class="form-group row">
                            <label for="car_images" class="col-md-4 col-form-label text-md-right">{{ __('Car Images') }}</label>

                            <div class="col-md-6">
                                <input id="car_images" type="file" class="form-control @error('car_images.*') is-invalid @enderror" name="car_images[]" value="{{ old('car_images') }}" required autocomplete="car_images" multiple>

                                                               @error('car_images.*')
                                   <span class="invalid-feedback" role="alert">
                                       <strong>{{ $message }}</strong>
                                   </span>
                               @enderror
                           </div>
                       </div>
                       <br />
                       <div class="form-group row mb-0">
                           <div class="col-md-6 offset-md-4">
                               <button type="submit" class="btn btn-primary">
                                   {{ __('Submit') }}
                               </button>
                           </div>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection

