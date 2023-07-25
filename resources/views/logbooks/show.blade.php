@extends('lecturerLayout')

@section('title')
    {{$course->title}}
@endsection

@section('page')
{{$course->title}} - {{$course->specialty->code}}
@endsection

@section('content')

<div class="px-3 py-2">

    <div class="flex w-full">
        <div class="font-semibold text-center w-3/12">Date</div>
        <div class="font-semibold text-center w-6/12">Content</div>
        <div class="font-semibold text-center w-3/12">Lecturer</div>
    </div><hr>
    <?php foreach($course->logbooks as $logbook):?>
        <div class="flex w-full">
            <div class="font-semibold text-center w-3/12 flex h-auto items-center justify-center">{{$logbook->created_at->format('d/m/Y')}}</div>
            <div class="w-6/12 pl-10"><?php echo $logbook->description;?></div>
            <div class="font-semibold text-center w-3/12 flex h-auto items-center justify-center">{{$course->lecturer->name}}</div>
        </div><hr>
    <?php endforeach;?>
        

</div>

@endsection