@component('mail::message')
Your post was liked

{{ $liker->name }} liked your post

@component('mail::button', ['url' => 'posts.index', $post])
    View post
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
