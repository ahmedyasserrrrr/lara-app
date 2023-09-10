@extends('layouts.app')


@section('content')
<div class="container">
    <div class="post mb-0">
        <div class="post-header">
          <img src="profile-picture.jpg" alt="Profile Picture" class="profile-picture">
          <div class="user-info">
            <h3 class="username">اسم المستخدم</h3>
            <p class="handle">@اسم المستخدم</p>
          </div>
        </div>
        <p class="post-content">محتوى البوست هنا...</p>
        <div class="post-footer">
          <span class="like-icon"><i class="fa fa-heart"></i></span>
          <span class="retweet-icon"><i class="fa fa-retweet"></i></span>
          <span class="comment-icon"><i class="fa fa-comment"></i></span>
        </div>
      </div>
      </div>
</div>
@endsection