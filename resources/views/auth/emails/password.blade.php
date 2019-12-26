<section class="bg0 p-t-270 p-b-120">
Click here to reset your password: <a
    href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}">
    {{ $link }} </a>
</section>