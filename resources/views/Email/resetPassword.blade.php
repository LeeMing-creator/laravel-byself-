@component('mail::message')
# Reset password

Do you want to reset password? 
If so click button.

@component('mail::button', ['url' => 'http://localhost:3000/resetpassword/'.$token])
Reset password
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
