
@extends('layouts.site')
@section('title')
    Aloqa Sahifasi
@endsection
 
@section('content')

<section class="contact-details">
    <div class="container">
      @if (session('success'))
    <div class="alert alert-success alert-dismissible show fade">
        <div class="alert-body">

          {{ session('success') }}
        </div>
      </div>
    @endif
      <div class="contact-details__wrapper basic-flex">
        <div class="form__wrapper">
          <h3 class="form__wrapper-title">@lang('words.Напишите нам')
          </h3>
          <form method="POST" action="{{ route('mesages_users') }}" enctype="multipart/form-data">
            @csrf
            <div class="form__top"> 
              <label><input type="text" placeholder="Имя" name="name" value="{{ old('name') }}"></label>
              @error('name')
                  <span style="color: red" ></span> {{ $message }}
              @enderror
              <label><input type="email" placeholder="Электронная почта" name="email" value="{{ old('email') }}">@error('email') <span style="color: red"></span> {{ $message }} @enderror</label>
              <label><input type="text" placeholder="Номер телефона" name="phone" value="{{ old('phone') }}">@error('phone') <span style="color: red"></span> {{ $message }} @enderror</label> 
             {{-- <label><input type="text" placeholder="Тема" name=""></label> --}}
              <textarea class="contact-tetxarea" placeholder="Текст" name="text" value="{{ old('text') }}"></textarea>@error('text') <span style="color: red"></span> {{ $message }} @enderror
              
             </div>
            <div class="form__bottom">
              {{-- <input type="file" name="file" id="file" class="inputfile">
              <label for="file" class="basic-flex">Прикрепить файл</label>
              <label class="basic-flex verification-code-wrapper">
                <input type="text" placeholder="Код" required>
                <span class="verification-code">4 k 7 Z a</span>
              </label> --}}
              <button type="submit" class="btn send-btn">@lang('words.Отправить')</button>
            </div>
          </form>
        </div>
        <div class="business__card">
          <h3 class="card__title">SIRDARYOLIKLAR24</h3>
          <div class="card__item basic-flex">
            <span card__item-title>@lang('words.Электронная почта')</span>
            <a class="email__link" href="mailto:info@namanganliklar24.uz">info@sirdaryoliklar24.uz</a>
          </div>
          <div class="card__item basic-flex">
            <span card__item-title>@lang('words.Социальные сети')</span>
            <div class="card__social-items basic-flex">
              <a href="#" class="social__item"></a>
              <a href="#" class="social__item"></a>
              <a href="#" class="social__item"></a>
            </div>
          </div>
          <div class="card__item basic-flex">
            <span card__item-title>@lang('words.Телеграм канал')</span>
            <a class="card-join-telegram basic-flex" href="#">@lang('words.Подписатся')</a>
          </div>
          <div class="card__item basic-flex">
            <span card__item-title>@lang('words.Мобильная приложение')</span>
            <div class="card__apps-wrapper basic-flex">
              <a href="#"><img src="/img/googleplay-wh.png" alt="GooglePlay"></a>
              <a href="#"><img src="/img/appstore-white.png" alt="AppStore"></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
