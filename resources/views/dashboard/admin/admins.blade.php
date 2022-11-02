@extends('layouts.dashboard')

@section('content')
<div class="row mbn-30">
    
    <!-- Recent Transaction Start -->
    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h4 class="title">List Of Admins</h4>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-vertical-middle table-selectable">

                        <!-- Table Head Start -->
                        <thead>
                            <tr>
                                <th><span>Name</span></th>
                                <th><span>Email</span></th>
                                <th><span>Status</span></th>
                                <th><span>Action</span></th>
                            </tr>
                        </thead><!-- Table Head End -->

                        <!-- Table Body Start -->
                        <tbody>
                            @forelse($admins as $admin)
                            <tr>
                                <td>{{ $admin->name }}</td>
                                <td>{{ $admin->email }}</td>
                                <td><span class="badge badge-{{ $admin->status ? 'primary' : 'danger' }}">{{ $admin->status ? 'active' : 'restricted' }}</span></td>
                                <td>
                                    <a href="" class="btn btn-warning btn-sm mr-5"><i class="fa fa-edit"></i></a>
                                    <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            @empty
                                <tr>
                                    <td colspan="100%">No admins</td>
                                </tr>
                            @endforelse
                            
                        </tbody><!-- Table Body End -->

                    </table>
                </div>
                <hr>
                {{ $admins->links() }}
            </div>
        </div>
    </div><!-- Recent Transaction End -->

</div>
@endsection