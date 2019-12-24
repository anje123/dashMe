@component('mail::message')
# DASHME PLATFORM

Thanks For Donating Through DashMe Platfrom
You will be contacted if we find a person

@component('mail::button', ['url' => 'http://localhost/home'])
GO BACK HOME
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
