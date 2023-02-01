@extends('layouts.basico')

@section('content')
    <h3>Hola prueba de blade</h3>

{{ phpinfo() }}
    <form>
        <input type='text' name="'nombre"/>

        <button name="Enviar" value="valor">{{__('Submit')}}</button>
    </form>

@endsection
