<div class="profile clearfix">
  <div class="profile_pic">
    <img src="images/icon/user.svg" class="img-circle profile_img">
  </div>
  <div class="profile_info">
    <span>@lang('welcome,')</span>
    <h2 class="text-capitalize">{{ Auth::user()->name }}</h2>
  </div>
</div>