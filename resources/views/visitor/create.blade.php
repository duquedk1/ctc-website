@extends('layouts.app')

@section('content')
<div class="container"> 
<form action="{{ url('/visitor') }}" method="post" enctype="multiparth/form-data">
    @csrf
    @include('visitor.form', ['modo' =>'Create'])
</form>
</div>
@endsection