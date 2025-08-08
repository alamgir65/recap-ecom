@extends('admin.master')

@section('body')
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Category Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$category->category_name}}</td>
                <td>
                    <span class="mx-2"><i class="fa-regular fa-pen-to-square"></i></span>
                    <i class="fa-solid fa-trash"></i>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
