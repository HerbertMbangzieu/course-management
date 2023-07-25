@extends('lecturerLayout')

@section('title')
    Dashboard
@endsection

@section('page')
    Lecturer Dashboard
@endsection

@section('content')
<div class="px-3 py-2">
    <div class="w-full">
        <?php 
        $i = 0;
        ?>
        <div class="">
            <div class="flex w-full py-3 bg-red-900 text-white">
                <div class="w-1/12">#</div>
                <div class="w-3/12">Title</div>
                <div class="w-1/12">Specialty</div>
                <div class="w-1/12">Status</div>
                <div class="w-1/12">Time due</div>
                <div class="w-1/12">Remaining time</div>
                <div class="w-4/12">Actions</div>
            </div><hr>
            <tbody>
                <?php foreach($lecturer->courses as $course):?>
                <div class="w-full flex py-3">
                <?php 
                    $i++;
                    $remaining = $course->time - count($course->logbooks)*4;
                    if($remaining>0){
                        $status = 'Progress';
                        $color = 'green-600';
                    }
                    else{
                        $status = 'Completed';
                        $color = 'red-600';
                    }
                ?>
                    <div class="w-1/12 border-r-2 text-center"> {{$i}} </div>
                    <div class="w-3/12 border-r-2 text-center"><a href="/courses/show/{{$course->id}}"> {{$course->title}} </a> </div>
                    <div class="w-1/12 border-r-2 text-center"> {{$course->specialty->code}} </div>
                    <div class="w-1/12 border-r-2 text-center text-{{$color}}"> {{$status}} </div>
                    <div class="w-1/12 border-r-2 text-center "> {{$course->time}} </div>
                    <div class="w-1/12 border-r-2 text-center "> {{$remaining}} </div>
                    <div class="w-4/12 border-r-2 text-center grid grid-cols-2 px-2 gap-2"> 
                        <a href="" class="px-2-py-1 bg-red-900 text-[14px] text-white hover:bg-red-950 active:scale-95">view Logbook</a>
                        <a href="" class="px-2-py-1 bg-red-900 text-[14px] text-white hover:bg-red-950 active:scale-95">Attendance Statistics</a>
                    </div>
                </div> <hr>
                <?php endforeach;?>
            </tbody>
        </div>

        
    </div>
@endsection

