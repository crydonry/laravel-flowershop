@extends('layouts.app')

@section('content')
<section class="bg0 p-t-50 p-b-120">
    <div class="container">
        <!--Add post-->
        <div class="row">
            <div class="col">
            </div>
            <div class="col-7">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            Add post
                        </h5>
                        <!-- Display Validation Errors -->
                        @include('common.errors')
                        @if (\Session::has('add'))
                        <div class="alert alert-success">
                            <ul>
                                <li>{!! \Session::get('add') !!}</li>
                            </ul>
                        </div>
                        @endif
                        <!-- New Flower Form -->
                        <form action="{{ url('flower') }}" method="POST" class="form-horizontal"
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <!-- Flower product_id -->
                            <div class="form-group">
                                <label class=" control-label">Product ID</label>

                                <div class="">
                                    <input type="text" name="product_id" class="form-control">
                                </div>
                            </div>
                            <!-- Flower name -->
                            <div class="form-group">
                                <label class=" control-label">Name</label>

                                <div class="">
                                    <input type="text" name="name" class="form-control">
                                </div>
                            </div>
                            <!-- Flower detail -->
                            <div class="form-group">
                                <label class=" control-label">Detail</label>

                                <div class="">
                                    <textarea class="form-control" name="detail" rows="3"></textarea>
                                </div>
                            </div>
                            <!-- Flower deliver_status -->
                            <div class="form-group">
                                <label class=" control-label">Deliver status</label>
                                <select name="deliver_status" class="form-control">
                                    <option selected disabled>Choose here</option>
                                    <option>Ready to ship</option>
                                    <option>Out of stock</option>
                                </select>
                            </div>
                            <!-- Flower price -->
                            <div class="form-group">
                                <label class=" control-label">Price</label>

                                <div class="">
                                    <input type="number" name="price" class="form-control">
                                </div>
                            </div>
                            <!-- Flower product_type -->
                            <div class="form-group">
                                <label class=" control-label">Product type</label>
                                <select name="product_type" class="form-control">
                                    <option selected disabled>Choose here</option>
                                    <option>Single flower</option>
                                    <option>Flower bouquet</option>
                                </select>
                            </div>
                            <!-- Flower occasion -->
                            <div class="form-group">
                                <label class=" control-label">Occasion</label>
                                <select name="occasion" class="form-control">
                                    <option selected disabled>Choose here</option>
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
                                    <option selected disabled>Choose here</option>
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
                                        <i class="fa fa-btn fa-plus"></i> Add Flower
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
        <!--view post-->
        <div class="row">
            <div class="col">
                <!-- Current Tasks -->
                @if (\Session::has('delete'))
                <div class="alert alert-danger">
                    <ul>
                        <li>{!! \Session::get('delete') !!}</li>
                    </ul>
                </div>
                @endif
                <!-- alert -->
                @if (\Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{!! \Session::get('success') !!}</li>
                    </ul>
                </div>
                @endif
                @if (count($flowers) > 0)
                <div class="card">
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>id</th>
                                <th>product_id</th>
                                <th>name</th>
                                <th>detail</th>
                                <th>deliver_status</th>
                                <th>price</th>
                                <th>product_type</th>
                                <th>occasion</th>
                                <th>color</th>
                                <th>images</th>
                                <th>created_at</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
                                @foreach ($flowers as $flower)
                                <tr>
                                    <!--Show DB-->
                                    <td class="table-text">
                                        <div>{{ $flower->id }}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{ $flower->product_id }}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{ $flower->name }}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{ $flower->detail }}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{ $flower->deliver_status }}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{ $flower->price }}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{ $flower->product_type }}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{ $flower->occasion }}</div>
                                    </td>
                                    <td class="table-text">
                                        <div>{{ $flower->color }}</div>
                                    </td>

                                    <td class="table-text">
                                        @for ($i = 0; $i < strlen($flower->images); $i = $i + 13)
                                            <div>
                                                Name:{{ substr($flower->images, $i,13) }}
                                                <img src="http://localhost/flower/public/images/product/{{ substr($flower->images, $i,13) }}"
                                                    width="200px;" height="150px;" />
                                            </div>
                                            @endfor
                                    </td>
                                    <td class="table-text">
                                        <div>{{ $flower->created_at }}</div>
                                    </td>

                                    <!-- flower edit Button -->
                                    <td>
                                        <a class="btn btn-info" role="button"
                                            href="{{ route('flower.edit',[$flower->id]) }}"><i class="fa fa-pencil">
                                                Edit</i></a>
                                    </td>
                                    <!-- flower Delete Button -->
                                    <td>
                                        <form action="{{url('flower/' . $flower->id)}}" method="POST">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger">
                                                <i class="fa fa-btn fa-trash"></i> Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                @endif
            </div>
        </div>
</section>
@endsection