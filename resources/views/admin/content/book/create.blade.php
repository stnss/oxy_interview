@extends('admin.template.layout')

@section('content')
    <div class="row">
        <div class="col-12 col-md-8 col-lg-8">
            {{-- <form method="POST" action="{{ route('books.store') }}"> --}}
            {{-- @csrf --}}
            <div class="form-group">
                <label for="bookName">Book Name</label>
                <input type="text" name="book_name" class="form-control" id="bookName" aria-describedby="bookHelp"
                    placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="bookDescription">Book Description</label>
                <textarea class="form-control" name="book_description" id="bookDescription" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="bookAuthors">Book Authors</label>
                <select id="bookAuthors" name="authors" class="form-control" multiple="multiple">
                    @foreach ($authors as $item)
                        <option value="{{ $item->id }}">{{ $item->author_name }}</option>
                    @endforeach
                </select>
            </div>
            <button id="btnbtn" type="submit" class="btn btn-primary">Submit</button>
            {{-- </form> --}}
        </div>
    </div>
@endsection

@section('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#bookAuthors').select2({
                tags: true
            })

            $('#btnbtn').on('click', function() {
                let selectedAuthor = $('#bookAuthors').find(':selected')
                let authors = []
                $.each(selectedAuthor, function(index, value) {
                    authors.push(value.value)
                })

                console.log(authors)

                $.ajax({
                    type: 'POST',
                    url: '{{ route("books.store") }}',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    data: {
                        book_name: $('#bookName').val(),
                        book_description: $('#bookDescription').val(),
                        authors: authors
                    },
                    success: function(data) {
                        window.location.href = '{{route('books.index')}}'
                    }
                })
            })
        })

    </script>
@endsection
