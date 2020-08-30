@extends('layouts.user')

@section('content')
<section class="top-dish-area section-gap" id="dish">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Owner Registration form') }}</div>

                <div class="card-body">
                <form method="post" action="ownerreg">
                    @csrf
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{ old('name') }}">
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>    
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>
                            <div class="col-md-6">
                                <input class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror    
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Phone number') }}</label>
                            <div class="col-md-6">
                                <input class="form-control @error('phone') is-invalid @enderror" type="text" name="phone" value="{{ old('phone') }}">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror    
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input class="form-control @error('password') is-invalid @enderror" type="password" name="password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror    
                            </div>
                        </div>
                        <br>
                        <br>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="typography">
                                <h4>Your Restaurant</h4>    
                                </div>
							</div>
                            
                            
                        </div>
                        
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Restaurant Name') }}</label>
                            <div class="col-md-6">
                                <input class="form-control @error('restoname') is-invalid @enderror" type="text" name="restoname" value="{{ old('restoname') }}">
                                @error('restoname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror    
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>
                            <div class="col-md-6">
                                <input class="form-control @error('restoname') is-invalid @enderror" type="text" name="address" value="{{ old('address') }}">
                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror    
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-4">
                                <div class="typography">
                                <h6>Food Items</h6>    
                                </div>
							</div>
                            
                            
                        </div>
                        <div class="row row-space">
                        <div class="input-group">
<table id="myTable" class="table order-list">
<thead class="text-primary">
    <tr>
      <th>#</th>
      <th>Food Name</th>
      <th>Description</th>
      <th>Price</th>
      <th><a class="btn btn-primary" id="addrow" href="#"><i class="fa fa-plus" aria-hidden="true"></i></a></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>
      <input type="hidden" size="1"  name="fid[]">
      </td>
      <td>
      <input type="text" 
      name="foodname[]" 
      class="form-control @error('foodname[]') is-invalid @enderror" 
      placeholder="Food name">
      @error('foodname[]')
      <p class="invalid-feedback">{{ "Food name is required." }}</p>
      @enderror
      </td>
      <td><input type="text" 
      name="dept[]" 
      class="form-control @error('dept[]') is-invalid @enderror" 
      placeholder="Description">
      @error('dept[]')
      <p class="invalid-feedback">{{ "Food description is required." }}</p>
      @enderror
      </td>   
      <td><input type="text" 
      name="price[]" 
      class="form-control @error('price[]') is-invalid @enderror" 
      placeholder="Price">
      @error('price[]')
      <p class="invalid-feedback">{{ "Food price is required." }}</p>
      @enderror
      </td>
      <td><a class="deleteRow"></a></td>
    </tr>
  </tbody>

</table>

                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection

