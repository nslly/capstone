@if($reject == 1) 
    Hello {{ $email }} your reservation is already accepted. Please pay in gcash term in our website thank you.
@else
    Hello {{ $email }} your reservation is rejected. Please fix your reservation to approved it.
@endif
