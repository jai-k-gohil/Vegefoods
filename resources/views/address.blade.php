@extends('layouts.light.master')

@section('content')
    <div class="container ">
        <div style="width: 6em; height: 4em;"></div>
    </div>
    <div class="ftco-section">
        <div class="container">
        <div class="row justify-content-center">
            <div class="offset-md-4 col-md-8 ftco-animate">
                    <form action="{{ route('address.store') }}" method="post" class="billing-form">
                    <h3 class="mb-4 billing-heading">Address Details</h3>
                    @csrf
                    <div class="w-100"></div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="country">State / Country</label>
                            <div class="select-wrap">
                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                <select name="country" id="country" class="form-control">
                                    <option value="0">France</option>
                                    <option value="1">Italy</option>
                                    <option value="2">Philippines</option>
                                    <option value="3">South Korea</option>
                                    <option value="4">Hongkong</option>
                                    <option value="5">Japan</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="w-100"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="streetaddress">Apartment/Street Address</label>
                            <input type="text" class="form-control" name="street" placeholder="House number and street name">
                        </div>
                    </div>
                    <div class="w-100"></div>
                        <div class="row align-items-end">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="towncity">Town / City</label>
                                    <input type="text" class="form-control" name="city" placeholder="Your home town">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="towncity">State</label>
                                    <input type="text" class="form-control" name="state" placeholder="State">
                                </div>
                            </div>
                        </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="postcodezip">Postcode / ZIP *</label>
                            <input type="text" class="form-control" name="postal_code" placeholder="Postal Code">
                        </div>
                    </div>

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary pl-4 pr-4">
                                {{ __('Proceed') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
