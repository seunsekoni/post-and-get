@extends('layouts.app', ['title' => __('Validate Contact')])

@section('content')
    @include('users.partials.header', ['title' => __('Validate Contact')])

    <div class="container-fluid mt--7">
        <div class="row">
            <div class="col-xl-12 order-xl-1">
                <div class="card bg-secondary shadow">
                    <div class="card-header bg-white border-0">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">{{ __('Validate Contact') }}</h3>
                            </div>
                            <div class="col-4 text-right">
                                <!-- <a href="" class="btn btn-sm btn-primary">{{ __('Back to list') }}</a> -->
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
						<form method="" action="" autocomplete="off" id="form1">
								@csrf
								<h6 class="heading-small text-muted mb-4">{{ __(' Validate Details ') }}</h6>
								<div class="pl-lg-4">
									<div class="row">
										<div class="col-xl-6">
											<div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
												<label class="form-control-label" for="input-name">{{ __('Full Name') }}</label>
												<input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Enter Full Name" value="{{ old('name') }}" required >

												@if ($errors->has('name'))
													<span class="invalid-feedback" role="alert">
														<strong>{{ $errors->first('name') }}</strong>
													</span>
												@endif
											</div>
										</div>

										<div class="col-xl-6">
											<div class="form-group{{ $errors->has('email') ? ' has-danger' : '' }}">
												<label class="form-control-label" for="input-email">{{ __('Email Address') }}</label>
												<input type="email" name="email" id="input-email" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="Enter Email Address" value="{{ old('name') }}" required >

												@if ($errors->has('email'))
													<span class="invalid-feedback" role="alert">
														<strong>{{ $errors->first('email') }}</strong>
													</span>
												@endif
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-xl-6">
                                            <div class="form-group{{ $errors->has('country') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-country">{{ __('Country') }}</label>
                                                <select name="country" id="input-country" class="form-control form-control-alternative{{ $errors->has('country') ? ' is-invalid' : '' }}" placeholder="{{ __('Country') }}" value="{{ old('country') }}" required>
                                                    <option value="">Select Country</option>
                                                    @foreach($countries as $country)
                                                        <option value="{{ $country->id }}">{{ $country->name }}</option>
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('country'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $errors->first('country') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
										<div class="col-xl-6">
											<div class="form-group{{ $errors->has('phone') ? ' has-danger' : '' }}">
												<label class="form-control-label" for="input-phone">{{ __('Mobile Number') }}</label>
												<input type="tel" name="phone" id="input-phone" class="form-control form-control-alternative{{ $errors->has('phone') ? ' is-invalid' : '' }}" placeholder="Enter Email Address" value="{{ old('phone') }}" required >

												@if ($errors->has('phone'))
													<span class="invalid-feedback" role="alert">
														<strong>{{ $errors->first('phone') }}</strong>
													</span>
												@endif
											</div>
										</div>
									</div>
									<!-- <div class="row">
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
											<div class="form-group{{ $errors->has('state') ? ' has-danger' : '' }}">
												<label class="form-control-label" for="input-state">{{ __('State') }}</label>
												<select name="state" id="input-state" class="form-control form-control-alternative{{ $errors->has('state') ? ' is-invalid' : '' }}" value="{{ old('state') }}" required>
													<option value="">Select State </option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
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
												<select name="town" id="input-town" class="form-control form-control-alternative{{ $errors->has('town') ? ' is-invalid' : '' }}" value="{{ old('town') }}" required>
													<option value="">Select Town </option>
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
													<option value="6">6</option>
													<option value="7">7</option>
													<option value="8">8</option>
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
												<label class="form-control-label" for="input-town">{{ __('Area') }}</label>
												<select name="area" id="input-town" class="form-control form-control-alternative{{ $errors->has('area') ? ' is-invalid' : '' }}" value="{{ old('area') }}" required>
													<option value="">Select Town </option>
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
										<div class="col-xl-6">
											<div class="form-group{{ $errors->has('uploads') ? ' has-danger' : '' }}">
												<label class="form-control-label" for="uploads">{{ __('Uploads') }}</label>
													<input type="file" name="uploads[]" id="uploads" class="form-control form-control-alternative{{ $errors->has('uploads') ? ' is-invalid' : '' }}" multiple>

													@if ($errors->has('uploads'))
														<span class="invalid-feedback" role="alert">
															<strong>{{ $errors->first('uploads') }}</strong>
														</span>
													@endif
											</div>
										</div> -->
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
									<!-- </div> -->
									<!-- <div class="row">

									</div> -->

									<div class="text-right">
										<button type="submit" class="btn btn-success mt-4">{{ __('Next') }}</button>
                                    </div>


							</form>
							<form action="" method="" id="form2">
                                @csrf
                                <hr>
                                <div class="pl-lg-4">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="form-group{{ $errors->has('phone_otp') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-phone_otp">{{ __('Phone OTP') }}</label>
                                                <input type="text" name="phone_otp" id="input-phone_otp" class="form-control form-control-alternative{{ $errors->has('phone_otp') ? ' is-invalid' : '' }}" placeholder="Enter OTP" required >

                                                @if ($errors->has('phone_otp'))
                                                    <span class="invalid-feedback" role="alert">
														<strong>{{ $errors->first('phone_otp') }}</strong>
													</span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="form-group{{ $errors->has('email_otp') ? ' has-danger' : '' }}">
                                                <label class="form-control-label" for="input-email_otp">{{ __('Email Address OTP') }}</label>
                                                <input type="text" name="email_otp" id="input-email_otp" class="form-control form-control-alternative{{ $errors->has('email_otp') ? ' is-invalid' : '' }}" placeholder="Enter OTP" required >

                                                @if ($errors->has('email_otp'))
                                                    <span class="invalid-feedback" role="alert">
														<strong>{{ $errors->first('email_otp') }}</strong>
													</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button type="submit" class="btn btn-success mt-4">{{ __('Validate') }}</button>
                                    </div>
                                </div>
							</form>


                    </div>
            </div>
        </div>

        @include('layouts.footers.auth')
    </div>
    <script>
    $(document).ready(function (){
        $('#form2').hide();

        $('#form1').click(function(){
            $('#form1 input').prop('required', true);
            // $('#form1').prop('required', true);
            // $('#form1').prop('required', true);
            $('#form2').show();
        })
    })

    </script>
@endsection
