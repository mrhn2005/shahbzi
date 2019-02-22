
					<div class="single-blog-list">
						<div class="blog-title">
							<h3>{{$post->getTranslatedAttribute('title')}} </h3>
							<span>{{$post->created_at->diffForHumans()}}</span>
						</div>
						{!!$post->getTranslatedAttribute('body')!!}
						@if($post->link)
						<div class="news-source">
							<a href="{{$post->link}}" target="_blank">
								<i class="fa fa-external-link"></i>
								
								{{__('News Source')}}
							</a>
						</div>
						@endif
					</div>

