<div class="panel panel-default">
    <div class="panel-heading">
        <strong>{{ link_to_route('posts.show', $comment->post->title, $comment->post) }}</strong>,
        <span>{{ user_name($comment->post->author) }}</span>
        <time class="pull-right">{{ humanize_date($comment->posted_at) }}</time>
    </div>
    <div class="panel-body">
        {{ $comment->content }}
    </div>
</div>