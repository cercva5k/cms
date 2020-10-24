@extends('welcome')

@section('content')
    <div class="col-12">
        <form action="/index" method="POST" autocomplete="off">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="სათაური">
            </div>
            <div class="form-group">
                <textarea name="description" id="" cols="30" rows="10" class="form-control"></textarea>
            </div>
            <div class="d-flex align-items-center">
                <input type="checkbox" name="toppings[]" value="news" class="mx-2"> News </br>
                <input type="checkbox" name="toppings[]" value="top" class="mx-2"> top </br>
                <input type="checkbox" name="toppings[]" value="int" class="mx-2"> int </br>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-info">შენახვა</button>
            </div>
        </form>
    </div>
@stop