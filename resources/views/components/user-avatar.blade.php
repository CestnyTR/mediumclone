@props(['user','size'=>'w-12 h-12'])
@if ($user->image)
    <img src="{{ $user->imageUrl() }}" alt="{{ $user->username }}" class="rounded-full {{ $size }} ">
@else
    <img src="https://w7.pngwing.com/pngs/910/606/png-transparent-head-the-dummy-avatar-man-tie-jacket-user.png"
        alt="{{ $user->username }}" class="rounded-full {{ $size }} ">
@endif