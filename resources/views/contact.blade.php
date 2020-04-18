@extends('includes.header')

@section('title', 'Contact')

@section('content')
<div class="container mt-5">
    <h1>Contact</h1>
    @if(Session::get('message'))
        <div class="alert alert-success">
            {{ Session::get('message')  }}
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/contact/send" method="POST">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-sm-3">Name</label>
            <input class="col-sm-9 form-control" type="text" name="name" id="name" placeholder="Your name">
        </div>
        <div class="form-group row">
            <label for="email" class="col-sm-3">Email</label>
            <input class="col-sm-9 form-control" type="email" name="email" id="email" placeholder="Your Email">
        </div>
        <div class="form-group row">
            <label for="message" class="col-sm-3">Message</label>
            <input class="col-sm-9 form-control" type="text" name="message" id="message" placeholder="Your Message">
        </div>
            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
