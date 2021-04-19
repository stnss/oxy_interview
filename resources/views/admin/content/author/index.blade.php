@extends('admin.template.layout')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Author Name</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>
                    <a href="{{route('author.edit', 1)}}" class="btn btn-info">Edit</a>
                    <a href="{{route('author.destroy', 1)}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>
                    <a href="{{route('author.edit', 1)}}" class="btn btn-info">Edit</a>
                    <a href="{{route('author.destroy', 1)}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection

@section('css')
@endsection

@section('js')
@endsection
