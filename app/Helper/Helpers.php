<?php
use Illuminate\Support\Facades\Request;
use Carbon\Carbon;

function setActive($path)
{
    return Request::is($path) ? ' class=active' :  '';
}

function imageUpload($file, $className)
{
    $className = str_replace("\\", "/", $className);
    $fileName = time() . "-" . $file->getClientOriginalName();
    $path = public_path("/img/$className/");
    $file->move($path, $fileName);
    return "/img/$className/" . $fileName;
}

function TimeForHuman($time){
    return Carbon::parse($time)->diffForHumans();
}

function unreadComments(){
    return \App\Comment::all();
}