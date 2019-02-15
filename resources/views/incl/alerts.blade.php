@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div style="color: red;">
            {{$error}}
        </div>
    @endforeach
@endif

@if (session('success'))
    <div style="color: green;">
        {{session('success')}}
    </div>
@endif