@extends('admin.layouts.master')
@section('main')

    <div class="container-fluid px-4">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Add Subject</li>
        </ol>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-7 px-2">
                <div class="card shadow">
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                                <tr>
                                    <th>subject type</th>
                                    <th>subject id</th>
                                    <th>subject name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subjects as $subject)
                                    <tr>
                                        <td>{{$subject->type}}</td>
                                        <td>{{$subject->subject_id}}</td>
                                        <td>{{$subject->name}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-5 mx-auto card shadow p-3">
                <form action="/add-subject" method="POST">
                    @csrf
                    <div class="row">

                        <div class="col-12">
                            <div class="form-group">
                                <label for="">subject name </label>
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">subject id</label>
                                <input type="text" name="id" class="form-control">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">subject type</label>
                                <input type="text" name="type" class="form-control">
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="form-group">
                                <input type="submit" value="Add" class="btn btn-success btn-bloack w-100">
                            </div>
                        </div>
                        
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
