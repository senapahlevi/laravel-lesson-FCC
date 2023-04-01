@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ asset('/svg/ig.png') }}" alt="" />
        </div>
        <div class="col-9 pt-5">
            <div>
                <h1 class="text-danger">Freecodecamp</h1>
            </div>
            <div class="d-flex col-12">
                <div class="pr-5"><strong>15k </strong> follower</div>
                <div class="pr-5"><strong>15k </strong> follower</div>
                <div class="pr-5"><strong>15k </strong> follower</div>
            </div>
            <div class="pt-5 font-weight-bold">
                freecodecompees
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <img src="https://images.unsplash.com/photo-1661956600684-97d3a4320e45?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="" class="w-100">
            </div>
            <div class="col-4">
                <img src="https://images.unsplash.com/photo-1661956600684-97d3a4320e45?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="" class="w-100">
            </div>
            <div class="col-4">
                <img src="https://images.unsplash.com/photo-1661956600684-97d3a4320e45?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="" class="w-100">
            </div>
            <div class="col-4">
                <img src="https://images.unsplash.com/photo-1661956600684-97d3a4320e45?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="" class="w-100">
            </div>
        </div>
    </div>
</div>
@endsection
