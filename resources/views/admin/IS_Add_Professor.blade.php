@extends('admin.layouts.master')
@section('main')

    <div class="container-fluid px-4">
        <h1 class="mt-4"></h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">IS_Add_Professor</li>
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
                                    <th>Professor's picture</th>
                                    <th>Gender</th>
                                    <th>Certificate</th>
                                    <th>Professor's degree</th>
                                    <th>Professor Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($professors as $professor)
                                    <tr>
                                        <td>{{$professor->Professor_picture}}</td>
                                        <td>{{$professor->Gender}}</td>
                                        <td>{{$professor->Certificate}}</td>
                                        <td>{{$professor->Professor_degree}}</td>
                                        <td>{{$professor->Professor_Name}}</td>
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
                <form action="/IS_Add_Professor" method="POST">
                    @csrf
                    <div class="row">

                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Professor Name :</label>
                                <input type="text" name="name" class="form-control">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Professor's degree :</label>
                                <select class="form-control" name="degree">

                                    <option value="professor">استاذ</option>
                                    <option value="assistant professor">استاذ مساعد</option>
                                    <option value="teacher">مدرس</option>
                                    <option value="assistant teacher">مدرس مساعد</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Certificate</label>
                                <input type="text" name="certificate" class="form-control">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Gender :</label>
                                <select class="form-control" name="gender">

                                    <option value="male">ذكر</option>
                                    <option value="female">انثى</option>

                                </select>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Professor's picture :</label>
                                <input type="file" name="picture" class="file-upload-input" accept="Image/*" value="Upload image">
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
