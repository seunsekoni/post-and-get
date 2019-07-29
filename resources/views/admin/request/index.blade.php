@extends('admin.layout')
@section('content')

    
    <div class="content">
        <div class="container-fluid">   
            <div class="row">
                <div class="col-xl-12">
                    <div class="card card-plain">
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
                        <div class="card-header card-header-primary">
                            <h4 class="card-title mt-0"> Table on Plain Background</h4>
                            <p class="card-category"> Here is a subtitle for this table</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="">
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Line Category</th>
                                        <th>Provider Category</th>
                                        <th>Salary</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </thead>
                                    <tbody>
                                    @foreach($requestNames as $requestName)
                                        <tr>
                                            <td>1</td>
                                            <td>{{ $requestName->name }}</td>
                                            <td>{{ $requestName->line_category_id }}</td>
                                            <td>{{ $requestName->provider_category_id }}</td>
                                            <td></td>
                                            <td>{{ $requestName->status }}</td>
                                            <td>
                                                <span class="col-4 text-right">
                                                    <button href="" class="btn btn-sm btn-success">{{ __('Edit') }}</button>
                                                    <button href="" class="btn btn-sm btn-primary">{{ __('Pricing') }}</button>
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
</div>
</div>
            </div>
        <!-- </div> -->
@endsection