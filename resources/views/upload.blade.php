@extends('layouts.app')

@section('content')
<div class = "container">

    <div class= "form-group">
        <label><h2>Business and State<h2></label>
            <form action="{{url('/upload')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
                <div class="form-group">
                    <input type="text" class="form-control" name="busval" value="{{ $data['bus'] }}" readonly/>
                    <input type="text" class="form-control" name="areaval" value="{{ $data['area'] }}" readonly/>
                </div>
                <div class="form-group">
                    <label for="upload-file">Please choose upload file</label>
                    <input type="file" name="upload-file" class="form-control"/>
                </div>
                <input class="btn btn-success" type="submit" value="Upload Image" name="submit">
            </form>
    <div>

</div>


@endsection
