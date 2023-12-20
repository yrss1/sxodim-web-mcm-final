@extends('layouts.index')
@section('content')
    <div class="promotion"></div>
    <div class="full_news_top">
        <div class="slider_images post-article-images">
            <picture class="post-article-images-single">
                <source  srcset="{{ $event->main_image }}">
                <img src="{{ $event->main_image }}" alt="Стендап-концерт English StandUp by Goodnight Comedy">
            </picture>
        </div>
        <div class="info_wrapper">
            <div class="info">
                <div class="category_wrapper">
                    <a href="https://sxodim.com/almaty/events/standup" class="category">
                        {{ $event->category }}
                    </a>
                </div>
                <div class="title">
                    {{ $event->name }}
                </div>
            </div>
        </div>
    </div>
    <div class="full-news-top"></div>
    <div class="full-news-wrapper">
        <div class="news-left">
            <div class="news-content">
                <div class="news-image">
                    <img src="{{ $event->second_image }}">
                </div>
                <div class="news-text">
                    <div>{{ $event->description }}</div><br><br>
                    <div>Стоимость билетов: {{ $event->price }} ₸</div>
                </div>
                <div class="share">
                    <div class="share-top">
                        <div style="color: black; font-size: 20px; font-weight: 700">Я пойду!</div>
                        <div style="font-weight: 700">
                            Отметьтесь и расскажите об этом событии друзьям,<br>
                            чтобы они смогли к вам присоединиться!
                        </div>
                    </div>
                    <div class="share-networks">
                        <button  class="vk">Вконтакте</button>
                        <button  class="fc">Facebook</button>
                        <button  class="tw">Twitter</button>
                    </div>
                </div>
                <div class="comments">
                    <h1 class="comment-title">
                        Комментарии (0)
                    </h1>
                    <form class="form" method="post" action="/comments">
                        <input type="hidden" name="_token" value="dIeE0o8vcLprYbTuxKlambLCpFU1L6Tgl33lBhA1">            <input name="post_id" type="hidden" value="59329">

                        <textarea name="text" placeholder="Написать комментарий"></textarea>
                        <button class="btn big orange submit_comment" type="submit">Опубликовать</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="news-right">
            <div class="post-info">
                <div class="date_picker_header ">
                        <div class="date">
                            <i class="fi fi-rr-calendar"></i>
                            <div class="single_date" style="margin-left: 10px">
                                {{ (new DateTime($event->date_time))->format('j F') }}
                            </div>
                        </div>
                </div>
                <div class="groups">
                    <div class="group">
                        <i class="fi fi-rr-marker"></i>
                        <div>{{ $event->address }}</div>
                    </div>
                    <div class="group">
                        <i class="fi fi-rr-calendar-clock"></i>
                        <div> {{ (new DateTime($event->date_time))->format('G:i') }}</div>
                    </div>
                    <div class="group">
                        <i class="fi fi-rr-coins"></i>
                        <div> {{ $event->price }}</div>
                    </div>
                    <div class="group">
                        <i class="fi fi-rr-phone-call"></i>
                        <div>+ 7 707 104 5252</div>
                    </div>
                    <div class="group">
                        <i class="fi fi-rr-globe"></i>
                        <div>https://www.instagram.com/</div>
                    </div>
                    @if ($event->bonuses == true)
                    <div class="group">
                        <i class="fi fi-rr-globe"></i>
                        <div>Бонусы 1%</div>
                    </div>
                    @endif
                </div>
                <div class="but-ticket-wrapper">
                <a class="buy-ticket" href="{{ route('payments.show', $event->id) }}">Купить Билет</a>
                </div>
            </div>
        </div>
    </div>
@endsection
