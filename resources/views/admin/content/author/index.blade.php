@extends('admin.template.layout')

@section('content')
    <a href="{{ route('authors.create') }}" class="btn btn-sm btn-primary mb-3">Add new Author</a>
    <table class="display" id="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Author Name</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @forelse ($authors as $author)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $author->author_name }}</td>
                    <td>
                        <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-info">Edit</a>
                        <form action="{{ route('authors.destroy', $author->id) }}" method="POST"
                            style="display: inline-block">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <p>No Record Found!</p>
            @endforelse
        </tbody>
    </table>
@endsection

@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/css/jquery.dataTables.min.css" integrity="sha512-1k7mWiTNoyx2XtmI96o+hdjP8nn0f3Z2N4oF/9ZZRgijyV4omsKOXEnqL1gKQNPy2MTSP9rIEWGcH/CInulptA==" crossorigin="anonymous" />
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.21/js/jquery.dataTables.min.js" integrity="sha512-BkpSL20WETFylMrcirBahHfSnY++H2O1W+UnEEO4yNIl+jI2+zowyoGJpbtk6bx97fBXf++WJHSSK2MV4ghPcg==" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('#table').DataTable();
    })
</script>
@endsection
