@extends('layouts.app')

@section('content')
<div class="row">
    <div class="medium-6 large-5 columns">
        <form method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <input type="file" name="image_upload"/>
            <input type="submit" value="UPLOAD" class="button success hollow"/>
            <small class="error">{{ $errors->first('image_upload') }}</small>
        </form>
    </div>
</div>
@endsection