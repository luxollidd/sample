@extends('master')

@section('content')

    <div class="container">
        <h2>Product List</h2><a href="{{ action("ProductController@create") }}" class="button">
            <button type="button" class="btn btn-primary">
                New Product
            </button>
        </a>

        <hr>
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price (RM)</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($product as $a)
            <tr>
                <td>{{$a->id}}</td>
                <td>{{$a->name}}</td>
                <td>{{$a->price}}</td>
                <td><div class="row"><a href="/product/{{$a->id}}">
                        <button type="button" class="btn btn-primary" style="margin-left:10px">
                        Details
                        </button>
                    </a>
                    <form method="post" action="/product/{{$a->id}}">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger" style="margin-left:10px">
                            Delete
                        </button>
                    </form></div>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
