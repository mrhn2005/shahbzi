<div class="active-section" id="links">
	<h2 class="title heading">
        <i class="fa fa-link"></i>
        {{__('Links')}}
    </h2>
	<section class="section-block">
		<div class="row">
			<div class="col-md-12">
				<div id="rex-blog-slider" class="row">
					
					@foreach ($links->chunk(3) as $chunk)
					    <div class="row">
					        
					            <div class="col-md-4">
					            	<ul>
					            		@foreach ($chunk as $link)
					            		<li>
					            			
					            			<a href="{{$link->url}}" target="_blank">
					            				<i class="fa fa-external-link"></i>
					            				{{ $link->getTranslatedAttribute('title')}}
					            			</a>
					            		</li>
					            		@endforeach
					            	</ul>
					            	
					            </div>
					        
					    </div>
					@endforeach
					
				</div>
			</div>
			
		</div>
	</section>
</div>