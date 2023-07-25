@extends('lecturerLayout')

@section('title')
    {{$course->title}}
@endsection

@section('page')
{{$course->title}} - {{$course->specialty->code}}
@endsection

@section('content')

<?php 
    $remaining = $course->time - count($course->logbooks)*4;
    if($remaining>0){
        $status = 'Progress';
        $color = 'green-600';
    }
    else{
        $status = 'Completed';
        $color = 'red-600';
    }
    $percentage = ceil(100*count($course->logbooks)*4/$course->time);
?>

<div class="px-3 py-2">
    <div class="flex justify-center p-2">
        <?php
            if($remaining > 0){
                echo '<a href="/logbooks/create/'.$course->id.'"  class="px-4 py-3 bg-red-900 hover:bg-red-950 text-white text-center w-1/4 m-2"> Fill the logbook </a>';
            }
            else{
                echo '<p class="px-4 py-3 bg-gray-600 cursor-pointer hover:bg-gray-900 text-white text-center w-1/4 m-2"> Fill the logbook </p>';
            }
        ?>
        <a href="/logbooks/show/{{$course->id}}" class="px-4 py-3 bg-red-900 hover:bg-red-950 text-white text-center w-1/4 m-2"> View the logbook </a>
    </div>
    <div class="flex">
    <div class="p-2 rounded-md w-1/3 border-[1px] text-lg font-semibold mx-2">
        <div class="flex w-full">
            <div class="w-2/3 p-1 text-red-900 font-bold">Sessions due</div>
            <div class="w-1/3 p-1">:{{ceil($course->time/4)}}</div>
        </div>
        <div class="flex w-full">
            <div class="w-2/3 p-1 text-red-900 font-bold">Number of remaining sessions:</div>
            <div class="w-1/3 p-1">: {{ceil($remaining/4)}}</div>
        </div>
        <div class="flex w-full">
            <div class="w-2/3 p-1 text-red-900 font-bold">Status:</div>
            <div class="w-1/3 p-1 text-{{$color}}">: {{$status}}</div>
        </div>
    </div>
    <div class="p-2 rounded-md w-2/3 border-[1px] text-lg font-semibold mx-2 h-auto flex items-center">
            <div class="h-4 rounded w-5/6 bg-gray-200">
                <div class="bg-red-800 h-4 rounded" style="width: <?php echo $percentage.'%';?>"></div>
            </div>
            <div class="px-4 text-red-900 w-1/6">
                {{$percentage}} %
            </div>
    </div>
    </div>

</div>

@endsection