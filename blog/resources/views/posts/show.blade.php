@extends ('layouts.master')

@section ('content')
	<div class="col-sm-8 blog-main">
		<ul class="list-group"
		<h1>{{ $post->title }}</h1>

		{{ $post->body }}

		<hr>

		
		<div class="comments">
			@foreach ($post->comments as $comment)
				<li class="list-group-item">
					<strong>
						{{ $comment->created_at->diffForHumans() }}: &nbsp;
					</strong>
					{{ $comment->body }}
				</article>
			@endforeach		
		</ul>
		</div> 
	</div>
@endsection