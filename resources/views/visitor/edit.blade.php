@extends('layouts.app')

@section('content')
<div class="container"> 

<form action="{{ url('/visitor/' . $visitor->id) }}" method="post" enctype="multiparth/form-data">
    @csrf
    {{ method_field('PATCH') }}
    @include('visitor.form', ['modo' =>'Edit'])
</form>
</div>
@endsection