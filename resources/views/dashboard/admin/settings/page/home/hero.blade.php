@extends('layouts.dashboard')

@section('content')
<div class="row mbn-30">
    
    <!-- Recent Transaction Start -->
    <div class="col-12 mb-30">
        <div class="box">
            <div class="box-head">
                <h4 class="title">Hero Section</h4>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table table-vertical-middle table-selectable">

                        <!-- Table Head Start -->
                        <thead>
                            <tr>
                                <th><span>welcome</span></th>
                                <th><span>intro</span></th>
                                <th><span>job 1</span></th>
                                <th><span>job 2</span></th>
                                <th><span>job 3</span></th>
                                <th><span>bio</span></th>
                                <th><span>social text</span></th>
                                <th><span>Action</span></th>
                            </tr>
                        </thead><!-- Table Head End -->

                        <!-- Table Body Start -->
                        <tbody>
                            <tr>
                                <td><input type="text" form="hero-section-update" class="form-control" name="welcome" value="{{ $page->data['hero']['welcome'] }}"></td>
                                <td><input type="text" form="hero-section-update" class="form-control" name="intro" value="{{ $page->data['hero']['intro'] }}"></td>
                            </tr>
                            
                        </tbody><!-- Table Body End -->

                    </table>
                </div>
            </div>
        </div>
    </div><!-- Recent Transaction End -->
    <form action="{{ route('admin.settings.page.home.update-hero', $page->id) }}" method="post" id="hero-section-update">
        @csrf
        @method('PATCH')
    </form>
</div>
@endsection