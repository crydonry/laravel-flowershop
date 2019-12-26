@extends('layouts.app')

@section('content')
<section class="bg0 p-t-50 p-b-120">
    <div class="container">
        <div class="row">
            <div class="col">
            </div>
            <div class="col-7">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Edit post
                        </h5>
                        @include('common.errors')
                        <!-- New Flower Form -->
                        <form action="{{ route('flower.update', $flower->id) }}" method="POST" class="form-horizontal"
                            enctype="multipart/form-data">
                            {!! csrf_field() !!}
                            {{ method_field('PATCH') }}
                            <!-- Flower product_id -->
                            <div class="form-group">
                                <div style="display: none;"><input type="text" class="form-control" name="id"
                                        value="{{$flower->id}}"></div>
                                <label class=" control-label">Product ID</label>

                                <div class="">
                                    <input type="text" name="product_id" class="form-control"
                                        value="{{$flower->product_id}}">
                                </div>
                            </div>
                            <!-- Flower name -->
                            <div class="form-group">
                                <label class=" control-label">Name</label>

                                <div class="">
                                    <input type="text" name="name" class="form-control" value="{{$flower->name}}">
                                </div>
                            </div>
                            <!-- Flower detail -->
                            <div class="form-group">
                                <label class=" control-label">Detail</label>

                                <div class="">
                                    <textarea class="form-control" name="detail" rows="3">{{$flower->detail}}</textarea>
                                </div>
                            </div>
                            <!-- Flower deliver_status -->
                            <div class="form-group">
                                <label class=" control-label">Deliver status</label>
                                <select name="deliver_status" class="form-control">
                                    <option selected>{{$flower->deliver_status}}</option>
                                    <option>Ready to ship</option>
                                    <option>Out of stock</option>
                                </select>
                            </div>
                            <!-- Flower price -->
                            <div class="form-group">
                                <label class=" control-label">Price</label>

                                <div class="">
                                    <input type="number" name="price" class="form-control" value="{{$flower->price}}">
                                </div>
                            </div>
                            <!-- Flower product_type -->
                            <div class="form-group">
                                <label class=" control-label">Product type</label>

                                <select name="product_type" class="form-control">
                                    <option selected >{{$flower->product_type}}</option>
                                    <option>Single flower</option>
                                    <option>Flower bouquet</option>
                                </select>
                            </div>
                            <!-- Flower occasion -->
                            <div class="form-group">
                                <label class=" control-label">Occasion</label>

                                <select name="occasion" class="form-control">
                                    <option selected >{{$flower->occasion}}</option>
                                    <option>Ordination ceremony</option>
                                    <option>Auspicious event</option>
                                    <option>Cremation</option>
                                    <option>Festival</option>
                                    <option>Party</option>
                                    <option>Birthday</option>
                                </select>
                            </div>
                            <!-- Flower color -->
                            <div class="form-group">
                                <label class=" control-label">Color</label>

                                <select name="color" class="form-control">
                                    <option selected >{{$flower->color}}</option>
                                    <option>Purple</option>
                                    <option>Blue</option>
                                    <option>Green</option>
                                    <option>Yellow</option>
                                    <option>Orange</option>
                                    <option>Red</option>
                                    <option>White</option>
                                </select>
                            </div>
                            <!-- Flower image -->
                            <div class="form-group">
                                <label class=" control-label">Images</label>
                                <div class="control-group ">
                                    <input type="file" name="images[]" class="form-control" multiple>
                                </div>
                            </div>
                            <!-- Add Button -->
                            <div class="form-group">
                                <div class="col-sm-offset-3 ">
                                    <button type="submit" class="btn btn-success">
                                        <i class="fa fa-btn fa-plus"></i> Edit Flower
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col">
            </div>
        </div>

    </div>
</section>
@endsection