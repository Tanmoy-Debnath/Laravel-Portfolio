@extends('admin.master')
@section('body')
    <br/>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="text-center text-success" id="msg">{{ Session::get('message')  }}</h3>

                    <table class="table table-bordered">

                        <tr class="bg-primary">
                            <th>Sl. No.</th>
                            <th>Name</th>
                            <th>Mail</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Created</th>
                            <th>Action</th>

                        </tr>
                        @php($i=1)
                        @foreach($messages as $message)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->mail }}</td>
                                <td>{{ $message->subject }}</td>
                                <td>{{ $message->message }}</td>
                                <td>{{ $message->created_at }}</td>


                                <td>







                                    <a href="{{ route('delete-message', ['id'=>$message->id]) }}" class="btn btn-danger btn-sm">
                                  <span class="glyphicon glyphicon-trash">

                                  </span>
                                    </a>
                                </td>


                            </tr>
                        @endforeach

                    </table>

                </div>
            </div>
        </div>
    </div>

@endsection