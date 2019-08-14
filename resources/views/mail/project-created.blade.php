@component('mail::message')
# New Project : {{ $project->title }}

{{ $project->description }}

@component('mail::button', ['url' => ''])
View project
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
