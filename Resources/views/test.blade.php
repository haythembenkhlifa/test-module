@extends('test::layouts.master')
@section('content')
<div>
    <h1 class="font-bold text-4xl text-center">Test how to install and unistall modules.</h1>
</div>
<div class="grid grid-flow-row grid-cols-2 mt-10">
    <div>
        <b>unistalled modules : </b>
        <ul>
            @foreach (Module::allDisabled() as $module)
            <div class="flex">
                <li class="mr-4">{{ $module }}</li>
                <form method="POST" action="/install">
                    @csrf
                    <input type="text" name="module_name" value="{{$module}}" hidden>
                    <button class="px-4 bg-green-500 text-black rounded-md" type="submit">install</button>
                </form>
            </div>
            @endforeach
        </ul>
    </div>
    <div>
        <b>istalled modules: </b>
        <ul>
            @foreach (Module::allEnabled() as $module)
            <div class="flex">
                <li class="mr-4">{{ $module }}</li>
                <form method="POST" action="/uninstall">
                    @csrf
                    <input type="text" name="module_name" value="{{$module}}" hidden>
                    <button class="px-4 bg-red-500 text-white rounded-md" type="submit">Uninstall</button>
                </form>
            </div>
            @endforeach
        </ul>
    </div>


</div>
@endsection