@extends('layouts.app')

@section('content')

    <div class="bs-docs-section">


        <div class="row">
            @include('photographer.profile')
        </div>

    </div>

    <div class="bs-docs-section">
        @include('photographer.album')

    </div>
@endsection
