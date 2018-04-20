<ul class="media-list">
@foreach ($tasklists as $tasklist)
    <?php $user = $tasklist->user; ?>
    <li class="media">
        <div class="media-left">
            <img class="media-object img-rounded" src="{{ Gravatar::src($user->email, 50) }}" alt="">
        </div>
        <div class="media-body">
            <div>
                {!! link_to_route('tasks.show', $tasklist->id, ['id' => $tasklist->id]) !!} <span class="text-muted">posted at {{ $tasklist->created_at }}</span>
            </div>
            <div>
                <p>{!! nl2br(e($tasklist->content)) !!}</p>
            </div>
        </div>
    </li>
@endforeach
</ul>
{!! $tasklists->render() !!}