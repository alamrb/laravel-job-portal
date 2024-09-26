@props(['size' =>'base'])



@php
$baseClass = "bg-white/10  rounded-xl  font-bold transition-colors duration-300";
    if($size ==='base'){
        $baseClass .=" px-5 py-1 text-sm";
    }

    if($size ==='small'){
        $baseClass .=" px-3 py-1 text-2xs";
    }
@endphp

 <a class="{{ $baseClass }}" href="#">{{ $slot }}</a>
