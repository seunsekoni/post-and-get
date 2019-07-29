@extends('layouts.app', ['title' => __('All Requests')])

@section('content')
@include('users.partials.header', ['title' => __('All Requests')]) 

      
    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Get Requests') }}</h3>
                            </div>
                            <!-- <div class="col-4 text-right">
                                <a href="" class="btn btn-sm btn-primary">{{ __('Add Project') }}</a>
                            </div> -->
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
                                    <th scope="col">{{ __('Budget') }}</th>
                                    <th scope="col">{{ __('Action') }}</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($requestLines as $requestLine)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$requestLine->request_type}}</td>
                                        <td>{{ $requestLine->request_line }}</td>
                                        <td>{{ date("jS F, Y", strtotime($requestLine->rentProperty->created_at)) }}</td>
                                        <td>{{ $requestLine->rentProperty->budget }}</td>
                                        
                                        <td>
                                            <div class="btn-group-justified text-center" role="group">
                                                <div class="btn-group" role="group">
                                                    <a href="{{ route('get.show', [auth()->user()->id, $requestLine->id]) }}" style="margin-right: 10px;" class="btn btn-sm btn-success">{{ __('View') }}</a>
                                                </div>  

                                                <!-- <div class="btn-group" role="group">
                                                    <form action="{{ route('cart.store', $requestLine->id) }}" method="post" onsubmit="return confirm('Do you really want to add this to your cart?');" >
                                                        @csrf
                                                        <button type="submit" style="margin-right: 10px;" class="btn btn-sm btn-danger">{{ __('Delete') }}</button>
                                                    </form>
                                                </div> -->
                                            </div>
                                            
                                        </td>
                                        
                                    </tr>
                                    @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
            


    @include('layouts.footers.auth')
  </div>
@endsection