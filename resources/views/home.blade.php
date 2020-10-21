@extends('layouts.admin')
@section('content')
<div class="content">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                {{-- <div class="card-header">
                    Dashboard
                </div> --}}

                {{-- <div class="card-body"> --}}
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row p-3">
                        {{-- <div class="col-md-4">
                            <div class="card text-white bg-primary">
                                <div class="card-body pb-3">
                                    <div class="text-value">{{ number_format($totalTickets) }}</div>
                                    <div>Total Tickets</div>
                                    <br />
                                </div>
                            </div>
                        </div> --}}

                        <div class="col-md-3">
                            <div class="card text-white bg-danger">
                                <div class="card-body pb-3">
                                    <div class="text-value">{{ number_format($openTickets) }}</div>
                                    <div>Entrance Tickets</div>
                                    <br />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card text-white bg-info">
                                <div class="card-body pb-3">
                                    <div class="text-value">{{ number_format($closedTickets) }}</div>
                                    <div>Tickets Completed This Week</div>
                                    <br />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card text-white bg-primary">
                                <div class="card-body pb-3">
                                    <div class="text-value">{{ number_format($closedTickets) }}</div>
                                    <div>Tickets Completed This Month</div>
                                    <br />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card text-white bg-success">
                                <div class="card-body pb-3">
                                    <div class="text-value">{{ number_format($closedTickets) }}</div>
                                    <div>Tickets Completed This year</div>
                                    <br />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="card text-white bg-success">
                                <div class="card-body pb-3 text-center">
                                    <div class="text-value">{{ number_format($closedTickets) }}</div>
                                    <div>Latest Tickets</div>
                                    <br />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="card text-white bg-info">
                                <div class="card-body pb-3 text-center">
                                    <div class="text-value">{{ number_format($closedTickets) }}</div>
                                    <div>Available Alert Tickets</div>
                                    <br />
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="card text-white bg-primary">
                                <div class="card-body pb-3 text-center">
                                    <div class="text-value">{{ number_format($totalTickets) }}</div>
                                    <div>Total Tickets</div>
                                    <br />
                                </div>
                            </div>
                        </div>
                    </div>
                {{-- </div> --}}
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
@parent

@endsection