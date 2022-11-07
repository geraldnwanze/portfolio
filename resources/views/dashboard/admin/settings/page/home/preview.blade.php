@extends('layouts.dashboard')

@section('content')
<div class="row mbn-30">
    <div class="col-12 mb-30">
        <iframe src="{{ route('main.index') }}" frameborder="1" width="100%" height="600"></iframe>
    </div>
</div>
@endsection