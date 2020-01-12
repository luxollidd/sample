@extends('master')

@section('content')
<div class="modal-dialog">
    <div class="modal-content">

        <!-- Modal Header -->
        <form method="post" action="/product/{{$fp->id}}">
            @csrf
            @method('put')
        <div class="modal-header">
            Product Details
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            Product: <input type="name" value="{{$fp->name}}" name="name"><br>
            Price  : RM <input type="number" value="{{$fp->price}}" name="price">
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
            <input type="hidden" value="{{$fp->id}}">
            <input type="submit" class="btn-success" value="Edit">
        </div>
        </form>
    </div>
</div>

@endsection
