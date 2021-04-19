@extends('admin.template.layout')

@section('content')
    <div class="row">
        <form method="POST" action="{{ route('author.store') }}">
            @csrf
            <div class="form-group">
                <label for="authorName">Author Name</label>
                <input type="text" name="author_name" class="form-control" id="authorName" aria-describedby="authorHelp"
                    placeholder="Enter Name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

@section('css')
@endsection

@section('js')
@endsection
