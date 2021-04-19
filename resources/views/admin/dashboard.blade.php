@extends('admin.template.layout')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Authors
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ Count($authors) }}</h5>
                    @if (Auth::user()->role == 1)
                        <a href="{{ route('authors.index') }}" class="btn btn-primary">More >></a>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Books
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ Count($books) }}</h5>
                    @if (Auth::user()->role == 1)
                        <a href="{{ route('authors.index') }}" class="btn btn-primary">More >></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@section('css')
@endsection

@section('js')
@endsection
