@includeWhen(!count($contents->comments), 'alerts.empty', ['message' => __('لا يوجد أي تعليقات بعد')])

<div class="commentBody">
    @foreach ($contents->comments as $comment)
        <div class="card mt-5 mb-3">
            <div class="card-body">
                <div class="row">
                    <div class="col-2">
                        <img src="{{ $comment->user->profile_photo_url }}" width="150px" class="rounded-full" />
                    </div>
                    <div class="col-10">

                            <p class="mt-3 mb-2"><strong>{{ $comment->user->name }}</strong></p>

                            <i class="far fa-clock"></i>
                            <span class="comment_date text-secondary">{{ $comment->created_at->diffForHumans() }}
                            </span>

                            <a href="{{ route('post.show', $comment->Post->slug) }}#comments">
                                <p class="mt-3">{{ \Illuminate\Support\Str::limit($comment->body, 250) }}</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>