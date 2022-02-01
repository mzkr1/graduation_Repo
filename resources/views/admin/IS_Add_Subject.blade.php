@extends('admin.layouts.master')
@section('main')

    <div class="container-fluid px-4">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">IS_Add_Subject (Scholarships for primary studies)</li>
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
                                    <th>Professor's Number</th>
                                    <th>Subject Type</th>
                                    <th>Number Of Units</th>
                                    <th>Subject Synopsis</th>
                                    <th>Subject Name</th>
                                    <th>Subject Code</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subjects as $subject)
                                    <tr>
                                        <td>{{$subject->Professor_Number}}</td>
                                        <td>{{$subject->Subject_Type}}</td>
                                        <td>{{$subject->Number_Of_Units}}</td>
                                        <td>{{$subject->Subject_Synopsis}}</td>
                                        <td>{{$subject->Subject_Name}}</td>
                                        <td>{{$subject->Subject_Code}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <button type="button" class="btn btn-primary">Edit Field</button>
                        <button type="button" class="btn btn-danger">Delete Field</button>
                    </div>
                </div>
            </div>

            <div class="col-5 mx-auto card shadow p-3">
                <form action="/IS_Add_Subject" method="POST">
                    @csrf
                    <div class="row">

                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Subject Code :</label>
                                <input type="text" name="code" class="form-control">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Subject Name :</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Subject Synopsis</label>
                                <input type="text" name="synopsis" class="form-control">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Number Of Units :</label>
                                <select class="form-control" name="units">

                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Subject Type :</label>
                                <select class="form-control" name="type">

                                    <option value="Theoretical">نظري</option>
                                    <option value="Theoretical and practical">نظري + عملي</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Professor's Number :</label>
                                <input type="number" name="Professor_number" class="form-control">
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
