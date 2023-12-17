@extends('Pages.welcome')

@section('content')
@if (session('message'))
    <div class="alert alert-success">{{session('message')}}</div>
@endif


<div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3" >
    <a href="{{url('/event/create ')}}" class="btn btn-primary me-md-2" type="button">
        Add Event
    </a>
</div>

    <table class="table table-bordered table-striped table-sm transparent-table">
            <thead>
                <tr>
                    <th>Style ID</th>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Venue</th>
                    <th>Description</th>
                    <th>edit</th>




                </tr>
            </thead>
            <tbody>
                <?php foreach($events as $event):?>
                    <tr>
                        <td>{{$event->style_id}}</td>
                        <td>{{$event->event_name}}</td>
                        <td>{{$event->date}}</td>
                        <td>{{$event->venue}}</td>
                        <td>{{$event->description}}</td>
                        {{-- <td>{{$event->style_id}}</td> --}}
                        <td class="text-center">
                            <a href="{{url('/event/'.$event->id)}}" class = "btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                    <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                    <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                        </td>
                    </tr>
                    <?php endforeach;?>
            </tbody>
        </table>
        <style>
            .transparent-table {
    background-color: transparent;
    border-collapse: collapse; /* This is to ensure borders collapse properly */
}

.transparent-table th,
.transparent-table td {
    background-color: rgba(255, 255, 255, 0.8); /* Adjust the alpha value for transparency */
    /* Add any other styles you need for table headers and cells */
}

        </style>

@endsection
