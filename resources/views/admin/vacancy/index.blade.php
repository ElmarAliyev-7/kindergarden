@extends('admin.layout.master')
@section('content')

        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb bg-white">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Admin/Vacancies</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <div class="d-md-flex">
                            <ol class="breadcrumb ms-auto">
                                <li><a href="{{route('dashboard')}}" class="fw-normal">Dashboard</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-12 -->
            </div>

                <div class="row">
                    <div class="col-sm-12">
                        <div class="white-box">
                            <h3 class="box-title">Vacancies</h3>
                            
                            <div class="table-responsive">
                                <table class="table text-nowrap">
                                    <thead>
                                        <tr>

                                            <th class="border-top-0">Name</th>
                                            <th class="border-top-0">Surname</th>
                                            <th class="border-top-0">Email</th>
                                            <th class="border-top-0">Fin</th>
                                            <th class="border-top-0">Phone</th>
                                            <th class="border-top-0">Action</th>
 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($vacancies as $vacancy)
                                        <tr>
                                            <td>{{$vacancy->name}}</td>
                                            <td>{{$vacancy->surname}}</td>
                                            <td>{{$vacancy->email}}</td>
                                            <td>{{$vacancy->Fin}}</td>
                                            <td>{{$vacancy->phone}}</td>
                                            <form action="{{route('vacancy.edit',$vacancy->id)}}">
                                                <td><button type="submit" class="btn btn-primary">Edit</button></td>
                                            </form>
                                            <form action="{{route('vacancy.delete',$vacancy->id)}}">
                                                <td><button type="submit" class="btn btn-danger">Delete</button></td>
                                            </form>
                                            
                                        </tr>
                                        @endforeach
                                    </tbody>
                                    @if(session()->has('success'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
@endsection