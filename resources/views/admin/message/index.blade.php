@extends('layouts.app')

@section('content')
<table class="table table-hover">
   <thead>
             <th>
                Names
            </th>
            <th>
                Emails
            </th>

            <th>
               Messages
            </th>

            <th>
                Delete
            </th>
   </thead>

   <tbody>
       @foreach ($messages as $message)
       <tr>
            <td>
                {{$message->name}}
            </td>
            <td>
                {{$message->email}}
            </td>
            <td>
                {{$message->message}}
            </td>


            <td>
            <a href="" class="btn btn-xs btn-danger">Trash</a>
            </td>
        </tr>
       @endforeach
   </tbody>
</table>

@endsection
