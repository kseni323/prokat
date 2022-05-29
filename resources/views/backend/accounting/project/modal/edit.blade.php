<style>
#main_modal .modal-lg {
    max-width: 800px;
}

#main_modal .modal-body {
    overflow: visible !important;
}
</style>
<form method="post" class="ajax-submit" autocomplete="off" action="{{ action('ProjectController@update', $id) }}" enctype="multipart/form-data">
	{{ csrf_field()}}
	<input name="_method" type="hidden" value="PATCH">				
	
	<div class="row">
		<div class="col-md-12">
			<div class="form-group">
			   <label class="control-label">{{ _lang('Project Name') }}</label>						
			   <input type="text" class="form-control" name="name" value="{{ $project->name }}" required>
			</div>
		</div>
		
		
		<div class="col-md-12">
		    <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="maindomain-tab" data-toggle="tab" href="#maindomain" role="tab" aria-controls="maindomain" aria-selected="true">{{ _lang('Maindomain') }}</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="subdomain-tab" data-toggle="tab" href="#subdomain" role="tab" aria-controls="subdomain" aria-selected="false">{{ _lang('Subdomain') }}</a>
              </li>
            </ul>
        
            <div class="tab-content" id="myTabContent">
              <div class="tab-pane fade show active" id="maindomain" role="tabpanel" aria-labelledby="maindomain-tab">
                  
                  	<div class="col-md-12">
            			<div class="form-group">
            				<label class="control-label">{{ _lang('Maindomain') }}</label>
            				<div class="input-group mb-3">
            					<input type="text" class="form-control" name="main_domain" value="{{ $project->main_domain }}" @if(env('DEMO_MODE') == true) disabled @endif>
            				</div>
                    		@if(env('DEMO_MODE') == true)
            					<span class="required">{{ _lang("UNFORTUNATELY IT'S NOT ALLOWED AT DEMO MODE!")}}</span>
            				@endif
            			</div>
    		        </div>
                  
              </div>
              <div class="tab-pane fade" id="subdomain" role="tabpanel" aria-labelledby="subdomain-tab">
              
                <div class="col-md-12">
        			<div class="form-group">
        				<label class="control-label">{{ _lang('Subdomain') }}</label>
        				<div class="input-group mb-3">
        					<input type="text" class="form-control" name="custom_domain" value="{{ $project->custom_domain }}" @if(env('DEMO_MODE') == true) disabled @endif>
        					<div class="input-group-append">
        						<span class="input-group-text" id="basic-addon2">.{{ config('app.short_url') }}</span>
        					</div>
        				</div>
                		@if(env('DEMO_MODE') == true)
        					<span class="required">{{ _lang("UNFORTUNATELY IT'S NOT ALLOWED AT DEMO MODE!")}}</span>
        				@endif
        			</div>
    		    </div>
              
              </div>
              
            </div>
            
        </div>

		<div class="col-md-12">
			<div class="form-group">
			   <label class="control-label">{{ _lang('Description') }}</label>						
			   <textarea class="form-control summernote" name="description">{{ $project->description }}</textarea>
			</div>
		</div>
		
		<div class="form-group">
		    <div class="col-md-12">
			    <button type="submit" class="btn btn-primary">{{ _lang('Update') }}</button>
		    </div>
		</div>
	</div>
</form>