@extends('layouts.app', ['title' => __('Rent a Property')])

@section('content')
    @include('users.partials.header', ['title' => __('Rent a Property')])   

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Rent a Property') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <a href="" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                    <form method="post" autocomplete="off" action="{{ route('rentProperty.store') }}">
                            @csrf      
							<input type="hidden" name="request_type" value="Post Request">
							<input type="hidden" name="request_line_id" value="1">
							<input type="hidden" name="request_line" value="Rent a Property">
							<input type="hidden" name="provider_category" value="1">
							<input type="hidden" name="line_category" value="1">
                            <h6 class="heading-small text-muted mb-4">{{ __('Request Line ') }}</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group{{ $errors->has('purpose') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-purpose">{{ __('Rental Purpose') }}</label>
                                            <select type="text" name="purpose" id="input-purpose" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" value="{{ old('name') }}" required >
												<option value="">Select a purpose</option>
												<option value="Cruise">Cruise</option>
												<option value="Learning">Learning</option>
												<option value="Traveling">Traveling</option>
												<option value="Haulage">Haulage</option>

											</select>
                                            @if ($errors->has('purpose'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('purpose') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-6">
                                        <div class="form-group{{ $errors->has('property_type') ? ' has-danger' : '' }}">
                                            <label class="form-control-label" for="input-property_type">{{ __('Property Type') }}</label>
                                            <select name="property_type" id="input-property_type" class="form-control form-control-alternative{{ $errors->has('property_type') ? ' is-invalid' : '' }}" placeholder="{{ __('Line Category') }}" value="{{ old('property_type') }}" required>
												<option value="">Select Property Type</option>
												<option value="Duplex">Duplex</option>
												<option value="Bungalow">Bungalow</option>
                                            </select>
                                            @if ($errors->has('property_type'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('property_type') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
									<div class="col-xl-6">
											<div class="form-group{{ $errors->has('budget') ? ' has-danger' : '' }}">
												<label class="form-control-label" for="input-budget">{{ __('Rental Budget Range') }}</label>
												<select name="budget" id="input-budget" class="form-control form-control-alternative{{ $errors->has('budget') ? ' is-invalid' : '' }}" placeholder="{{ __('Budget') }}" value="{{ old('budget') }}" required>
													<option value="">Select Budget</option>
													<option value="">1,000 - 100,000</option>
													<option value="100,000 - 1,000,000">100,000 - 1,000,000</option>
												</select>
												@if ($errors->has('budget'))
													<span class="invalid-feedback" role="alert">
														<strong>{{ $errors->first('budget') }}</strong>
													</span>
												@endif
											</div>
										</div>
									<div class="col-xl-6">
										<div class="form-group{{ $errors->has('room') ? ' has-danger' : '' }}">
										<label class="form-control-label" for="input-room">{{ __('No of Rooms') }}</label>
										<select  name="room" id="input-room" class="form-control form-control-alternative{{ $errors->has('room') ? ' is-invalid' : '' }}" value="{{ old('room') }}" required>
											<option value="">Select Rooms</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
										</select>
										@if ($errors->has('room'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('room') }}</strong>
											</span>
										@endif
										</div>
									</div>
								</div>
                                <div class="row">
									<div class="col-xl-6">
										<div class="form-group{{ $errors->has('bath') ? ' has-danger' : '' }}">
											<label class="form-control-label" for="input-bath">{{ __('No of Bathrooms') }}</label>
											<select name="bath" id="input-bath" class="form-control form-control-alternative{{ $errors->has('bath') ? ' is-invalid' : '' }}" value="{{ old('bath') }}" required>
												<option value="">Number of Bathrooms </option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
											</select>
											@if ($errors->has('bath'))
												<span class="invalid-feedback" role="alert">
													<strong>{{ $errors->first('bath') }}</strong>
												</span>
											@endif
										</div>
									</div>

									<div class="col-xl-6">
										<div class="form-group{{ $errors->has('toilet') ? ' has-danger' : '' }}">
											<label class="form-control-label" for="input-toilet">{{ __('No of Toilets') }}</label>
											<select name="toilet" id="input-toilet" class="form-control form-control-alternative{{ $errors->has('toilet') ? ' is-invalid' : '' }}" value="{{ old('toilet') }}" required>
												<option value="">Number of Toilets </option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
											</select>
											@if ($errors->has('toilet'))
												<span class="invalid-feedback" role="alert">
													<strong>{{ $errors->first('toilet') }}</strong>
												</span>
											@endif
										</div>
									</div>
									<div class="col-xl-6">
											<div class="form-group{{ $errors->has('time_needed') ? ' has-danger' : '' }}">
												<label class="form-control-label" for="input-time_needed">{{ __('Time Needed') }}</label>
												<input type="date" name="time_needed" id="input-time_needed" class="form-control form-control-alternative{{ $errors->has('time_needed') ? ' is-invalid' : '' }}" value="{{ old('time_needed') }}" required>
												@if ($errors->has('time_needed'))
													<span class="invalid-feedback" role="alert">
														<strong>{{ $errors->first('time_needed') }}</strong>
													</span>
												@endif
											</div>
										</div>
									<div class="col-xl-6">
										<div class="form-group{{ $errors->has('state') ? ' has-danger' : '' }}">
											<label class="form-control-label" for="input-state">{{ __('State') }}</label>
											<select name="state" id="input_state" class="form-control form-control-alternative{{ $errors->has('state') ? ' is-invalid' : '' }}" value="{{ old('state') }}" required>
												<option value="">Select State </option>
												@foreach($states as $state)
													<option value="{{$state->id}}">{{ $state->name }}</option>
												@endforeach
											</select>
											@if ($errors->has('state'))
												<span class="invalid-feedback" role="alert">
													<strong>{{ $errors->first('state') }}</strong>
												</span>
											@endif
										</div>
									</div>

									<div class="col-xl-6">
										<div class="form-group{{ $errors->has('town') ? ' has-danger' : '' }}">
											<label class="form-control-label" for="input-town">{{ __('Town') }}</label>
											<select name="town" id="input_town" class="form-control form-control-alternative{{ $errors->has('town') ? ' is-invalid' : '' }}" value="{{ old('town') }}" required>
												<option value="">Select Town </option>
												
											</select>
											@if ($errors->has('town'))
												<span class="invalid-feedback" role="alert">
													<strong>{{ $errors->first('town') }}</strong>
												</span>
											@endif
										</div>
									</div>

									<div class="col-xl-6">
										<div class="form-group{{ $errors->has('area') ? ' has-danger' : '' }}">
											<label class="form-control-label" for="input-area">{{ __('Area') }}</label>
											<select name="area" id="input-area" class="form-control form-control-alternative{{ $errors->has('area') ? ' is-invalid' : '' }}" value="{{ old('area') }}" required>
												<option value="">Select Area </option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
												<option value="6">6</option>
												<option value="7">7</option>
												<option value="8">8</option>
											</select>
											@if ($errors->has('area'))
												<span class="invalid-feedback" role="alert">
													<strong>{{ $errors->first('area') }}</strong>
												</span>
											@endif
										</div>
									</div>
									<!-- <div class="col-xl-6">
										<div class="form-group{{ $errors->has('uploads') ? ' has-danger' : '' }}">
											<label class="form-control-label" for="uploads">{{ __('Uploads') }}</label>
												<input type="file" name="uploads[]" id="uploads" class="form-control form-control-alternative{{ $errors->has('uploads') ? ' is-invalid' : '' }}" multiple>

												@if ($errors->has('uploads'))
													<span class="invalid-feedback" role="alert">
														<strong>{{ $errors->first('uploads') }}</strong>
													</span>
												@endif
										</div> -->
									</div>
									<!-- <div class="col-xl-6">
										<div class="form-group{{ $errors->has('duration') ? ' has-danger' : '' }}">
												<label class="form-control-label" for="input-phone">{{ __('Phone') }}</label>
												<textarea name="duration" id="input-duration" class="form-control form-control-alternative{{ $errors->has('duration') ? ' is-invalid' : '' }}" placeholder="{{ __('Request Duration(days)') }}" value="{{ old('duration') }}" required ></textarea>

												@if ($errors->has('duration'))
													<span class="invalid-feedback" role="alert">
														<strong>{{ $errors->first('duration') }}</strong>
													</span>
												@endif
										</div>
									</div> -->
								</div>
								<div class="row">
										
								</div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                            
                        </form>

                
						</div>
            </div>
        
        
	<script>
		function selectState(value) {
			$.get('/getcities/' + value, function (data) {
				console.log(data.cities);
                $('#input_town').html("");
                // $('#input-unit').append("");
                jQuery.each(data.cities, function (i, val) {
					$('#input_town').append("<option value='" + val.id + "'>" + val.name + "</option>");
                });
            });
        }
		
        $('#input_state').change(function () {
			selectState($(this).val());
            // $('#input-unit').prop('disabled', false)
        });
		
		</script>
		@include('layouts.footers.auth')
	</div>
@endsection