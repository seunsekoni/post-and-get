@extends('layouts.app', ['title' => __('Request Cart')])

@section('content')
@include('users.partials.header', ['title' => __('Request Cart')])


    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Request Cart') }}</h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        @if (session('status'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('status') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                    </div>

                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">{{ __('S/N') }}</th>
                                    <th scope="col">{{ __('Request Type') }}</th>
                                    <th scope="col">{{ __('Request Line') }}</th>
                                    <th scope="col">{{ __('Request Time') }}</th>
                                    <th scope="col">{{ __('Amount') }}</th>
                                    <th scope="col">{{ __('Action') }}</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($requestLines as $requestLine)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$requestLine->request_type}}</td>
                                        <td>{{ $requestLine->request_line }}</td>
                                        <td>{{ date("jS F, Y", strtotime($requestLine->created_at))  }}</td>
                                        <td>{{ $requestLine->formatValue($requestLine->amount) }}</td>

                                        <td>
                                            <div class="btn-group-justified text-center" role="group">
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('cart.show', [auth()->user()->id, $requestLine->id]) }}" style="margin-right: 10px;" class="btn btn-sm btn-success">{{ __('View') }}</a>
                                                </div>

                                                <!-- <div class="btn-group" role="group">
                                                    <form action="" method="delete" onsubmit="return confirm('Do you really want to delete this item?');" >
                                                        @csrf
                                                        <button type="submit" style="margin-right: 10px;" class="btn btn-sm btn-danger">{{ __('Delete') }}</button>
                                                    </form>
                                                </div> -->

                                            </div>

                                        </td>

                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        @if($TotalReq == null)
                                            <td></td>
                                            <td></td>
                                        @else
                                        <td><b> 
                                                
                                                ₦ {{ $TotalReq->formatValue($TotalReq->sum('amount')) }}
                                        
                                        </b></td>
                                        <td>
                                            <div class="btn-group-justified text-center" role="group">
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('cart.validate', [auth()->user()->id]) }}" style="margin-right: 10px;" class="btn btn-sm btn-primary">{{ __('Proceed') }}</a>
                                                </div>
                                            </div>
                                        </td>
                                        @endif
                                    </tr>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>



    @include('layouts.footers.auth')
  </div>
@endsection
