@extends('layouts.light.master')

@section('content')
    <div class="container ">
        <div style="width: 6em; height: 4em;"></div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="offset-md-4 col-md-8">
                <form action="{{ route('address.update') }}" method="post" class="billing-form">
                        <h3 class="mb-4 billing-heading">Address Details</h3>
                    @csrf
                    <input type="hidden" name="id" value="{{ $id }}">
                        <div class="w-100"></div>
                        <div class="col-md-12">
                            <div class="w-100"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="country">Country</label>
                                    <input type="text" class="form-control" name="country" value="{{ $address->country }}">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="streetaddress">Apartment/Street Address</label>
                                    <input type="text" class="form-control" name="street" value="{{ $address->street }}">
                                </div>
                            </div>
                            <div class="w-100"></div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="towncity">Town / City</label>
                                    <input type="text" class="form-control" name="city" value="{{ $address->city }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="towncity">State</label>
                                    <input type="text" class="form-control" name="state" value="{{ $address->state }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="postcodezip">Postcode / ZIP *</label>
                                    <input type="text" class="form-control" name="postal_code" value="{{ $address->postal_code }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-2">
                                    <a href="{{ route('home') }}" class="btn btn-secondary pl-4 pr-4 mb-2">
                                        {{ __('Back') }}
                                    </a>
                                </div>
                            </div>
                                <div class="form-group">
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-primary pl-4 pr-4">
                                            {{ __('Edit') }}
                                        </button>
                                    </div>
                                </div>
                </form>
            </div>
        </div>
    </div>
@endsection
