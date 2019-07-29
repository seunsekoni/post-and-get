@extends('admin.layout')
@section('content')

<div class="content">
    <div class="container-fluid">   
        <div class="row">
            <div class="col-xl-12">
                <div class=" card-body">
                    <form method="post" action="{{route('admin.request.store')}}" autocomplete="off" enctype="multipart/form-data">
                            @csrf      
                            <h6 class="heading-small text-muted mb-4">{{ __('Request Line ') }}</h6>
                            <div class="pl-lg-4">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="form-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            <!-- <label class="form-control-label" for="input-company">{{ __(' Name') }}</label> -->
                                            <input type="text" name="name" id="input-name" class="form-control form-control-alternative{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Request Line Name') }}" value="{{ old('name') }}" required autofocus>

                                            @if ($errors->has('name'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-6">
                                        <div class="form-group{{ $errors->has('line_category') ? ' has-danger' : '' }}">
                                            <!-- <label class="form-control-label" for="input-industry">{{ __('Industry') }}</label> -->
                                            <select name="line_category" id="input-category" class="form-control form-control-alternative{{ $errors->has('line_category') ? ' is-invalid' : '' }}" placeholder="{{ __('Line Category') }}" value="{{ old('line_category') }}" required>
                                              <option value="">Select Line Category</option>
                                              <option value="1">Rent a Property</option>
                                              <option value="2">Get a Tutor</option>
                                            </select>
                                            @if ($errors->has('line_category'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('line_category') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
									<div class="col-xl-6">
											<div class="form-group{{ $errors->has('provider_category') ? ' has-danger' : '' }}">
												<!-- <label class="form-control-label" for="input-industry">{{ __('Industry') }}</label> -->
												<select name="provider_category" id="input-category" class="form-control form-control-alternative{{ $errors->has('provider_category') ? ' is-invalid' : '' }}" placeholder="{{ __('Provider Category') }}" value="{{ old('provider_category') }}" required>
													<option value="">Select Provider Category</option>
													<option value="1">Rent a Property</option>
													<option value="2">Get a Tutor</option>
												</select>
												@if ($errors->has('provider_category'))
													<span class="invalid-feedback" role="alert">
														<strong>{{ $errors->first('provider_category') }}</strong>
													</span>
												@endif
											</div>
										</div>
									<div class="col-xl-6">
										<div class="form-group{{ $errors->has('status') ? ' has-danger' : '' }}">
										<!-- <label class="form-control-label" for="input-email">{{ __('Status') }}</label> -->
										<select  name="status" id="input-status" class="form-control form-control-alternative{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Status') }}" value="{{ old('status') }}" required>
											<option value="">Select Status</option>
											<option value="Active">Active</option>
											<option value="Inactive">Inactive</option>
										</select>
										@if ($errors->has('status'))
											<span class="invalid-feedback" role="alert">
												<strong>{{ $errors->first('status') }}</strong>
											</span>
										@endif
										</div>
									</div>
								</div>
                                <div class="row">
									<div class="col-xl-6">
										<div class="form-group{{ $errors->has('duration') ? ' has-danger' : '' }}">
											<!-- <label class="form-control-label" for="input-phone">{{ __('Phone') }}</label> -->
											<input type="number" name="duration" id="input-duration" class="form-control form-control-alternative{{ $errors->has('duration') ? ' is-invalid' : '' }}" placeholder="{{ __('Request Duration(days)') }}" value="{{ old('duration') }}" required >

											@if ($errors->has('duration'))
												<span class="invalid-feedback" role="alert">
													<strong>{{ $errors->first('duration') }}</strong>
												</span>
											@endif
										</div>
									</div>

									<div class="col-xl-6">
										<div class="form-group{{ $errors->has('description') ? ' has-danger' : '' }}">
												<!-- <label class="form-control-label" for="input-phone">{{ __('Phone') }}</label> -->
												<textarea name="description" id="input-description" class="form-control form-control-alternative{{ $errors->has('description') ? ' is-invalid' : '' }}" placeholder="{{ __('Description') }}" value="{{ old('description') }}" required ></textarea>

												@if ($errors->has('description'))
													<span class="invalid-feedback" role="alert">
														<strong>{{ $errors->first('description') }}</strong>
													</span>
												@endif
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-xl-6">
										<div class="form-{{ $errors->has('uploads') ? ' has-danger' : '' }}">
											<label class="form-control-label" for="uploads">{{ __('Uploads') }}</label>
												<input type="file" name="uploads[]" id="uploads" class="form-control form-control-alternative{{ $errors->has('uploads') ? ' is-invalid' : '' }}" multiple>

												@if ($errors->has('uploads'))
													<span class="invalid-feedback" role="alert">
														<strong>{{ $errors->first('uploads') }}</strong>
													</span>
												@endif
										</div>
									</div>	
								</div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mt-4">{{ __('Save') }}</button>
                                </div>
                            
                        </form>

                </div>
            
            </div>
        </div>
    </div>
</div>

<!-- <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">Edit Profile</h4>
                  <p class="card-category">Complete your profile</p>
                </div>
                <div class="card-body">
                  <form>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="form-group">
                          <label class="bmd-label-floating">Company (disabled)</label>
                          <input type="text" class="form-control" disabled>
                        </div>
                      </div>
                      <div class="col-md-3">
                        <div class="form-group">
                          <label class="bmd-label-floating">Username</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Email address</label>
                          <input type="email" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Fist Name</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Last Name</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label class="bmd-label-floating">Adress</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">City</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Country</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Postal Code</label>
                          <input type="text" class="form-control">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>About Me</label>
                          <div class="form-group">
                            <label class="bmd-label-floating"> Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</label>
                            <textarea class="form-control" rows="5"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">Update Profile</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div> -->
@endsection