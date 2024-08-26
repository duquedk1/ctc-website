<h1>{{ $modo }} Visitor</h1>

@if (count($errors) > 0)
    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
                <li><strong>{{ $error }}</strong></li>
            @endforeach
        </ul>
    </div>

@endif
<div class="from-group">

    <label for="name"> Name </label>
    <input class="form-control" type="text" name="name" value="{{ isset($visitor->name) ? $visitor->name : old('name') }}"
        id="name">
    <label for="last_name">Last name</label>
    <input class="form-control" type="text" name="lastName"
        value="{{ isset($visitor->lastName) ? $visitor->lastName : old('lastName') }}" id="lastName">
    <label for="age"> Age </label>
    <input class="form-control" type="text" name="age" id="age"
        value="{{ isset($visitor->age) ? $visitor->age : old('age') }}">
    <label for="email"> Email </label>
    <input class="form-control" type="text" name="email" id="emal"
        value="{{ isset($visitor->email) ? $visitor->email : old('email') }}">
    <label for="phone"> Phone </label>
    <input class="form-control" type="text" name="phone" id="phone"
        value="{{ isset($visitor->phone) ? $visitor->phone : old('phone') }}">
    <label for="address"> Address </label>
    <input class="form-control" type="text" name="address" id="address"
        value="{{ isset($visitor->address) ? $visitor->address : old('address') }}">
    <label for="summary"> Summary </label>
    <input class="form-control" type="text" name="summary" id="summary"
        value="{{ isset($visitor->summary) ? $visitor->summary : old('summary') }}">
    <br>
    <input class="btn btn-primary" type="submit" id="submit" value="{{ $modo }} Visitor">

    <a class="btn btn-primary" href="{{ url('admin') }}">Return</a>

</div>
