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
                <div class="row">

                    <!--Form Field-->
                        
                    <div class="col-lg-12 mb-20">
                        <form action="{{ route('admin.settings.page.home.update-hero', $page->id) }}" method="post" >
                            @method('PATCH')
                            @csrf
                            <div class="row mbn-15">
                                <div class="col-lg-6 mb-15">
                                    <div class="col-lg-12 mb-30">
                                        <label for="">Welcome Note</label>
                                        <input type="text" class="form-control" placeholder="Welcome Note" name="welcome" value="{{ $page->data['hero']['welcome'] }}" required>
                                    </div>
                                    <div class="col-lg-12 mb-30">
                                        <label for="">Job 1</label>
                                        <input type="text" name="job_1" class="form-control" placeholder="Job 1" value="{{ $page->data['hero']['job_1'] }}" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="col-lg-12 mb-30">
                                        <label for="">Intro</label>
                                        <input type="text" class="form-control" placeholder="Intro" name="intro" value="{{ $page->data['hero']['intro'] }}" required>
                                    </div>
                                    <div class="col-lg-12 mb-30">
                                        <label for="">Job 2</label>
                                        <input type="text" name="job_2" class="form-control" placeholder="Job 2" value="{{ $page->data['hero']['job_2'] }}" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="col-lg-12 mb-30">
                                        <label for="">Job 3</label>
                                        <input type="text" class="form-control" placeholder="job_3" name="intro" value="{{ $page->data['hero']['job_3'] }}" required>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="col-lg-12 mb-30">
                                        <label for="">Social Text</label>
                                        <input type="text" class="form-control" placeholder="Social Text" name="social_text" value="{{ $page->data['hero']['social_text'] }}" required>
                                    </div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="col-lg-12 mb-30">
                                        <label for="">Bio</label>
                                        <textarea class="form-control" name="bio" cols="30" rows="10">{{ $page->data['hero']['bio'] }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mb-15">
                                <button type="submit" class="btn btn-primary">update</button>
                            </div>

                        </form>
                    </div>
                    
                    <!--Form Field-->

                </div>
            </div>
        </div>
    </div><!-- Recent Transaction End -->
</div>
@endsection