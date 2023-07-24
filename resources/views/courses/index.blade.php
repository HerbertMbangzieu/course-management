@extends('lecturerLayout')

@section('title')
    Courses list
@endsection

@section('page')
    Your courses
@endsection

@section('content')
<div class="px-3 py-2">
    <div class="w-full">
        <?php $i = 0;?>
        <div class="">
            <div class="flex w-full py-3 bg-red-900 text-white text-center">
                <div class="w-1/12">#</div>
                <div class="w-2/12">code</div>
                <div class="w-5/12">Title</div>
                <div class="w-2/12">Specialty</div>
                <div class="w-2/12">Status</div>
            </div><hr>
            <tbody>
                <?php foreach($lecturer->courses as $course):?>
                <div class="w-full flex py-3">
                    <?php $i++;?>
                    <div class="w-1/12"> {{$i}} </div>
                    <div class="w-2/12"> {{$course->code}} </div>
                    <div class="w-5/12"> {{$course->title}} </div>
                    <div class="w-2/12"> {{$course->specialty->code}} </div>
                    <div class="w-2/12"> In Progress </div>
                </div> <hr>
                <?php endforeach;?>
            </tbody>
        </div>

        
    </div>
</div>
@endsection