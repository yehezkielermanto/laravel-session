@php
    if(Session::has('name')){
        {{ Session::get('name'); }}

    }
@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
   <body>
    <p>{{$name}}</p>
   </body>
</html>
