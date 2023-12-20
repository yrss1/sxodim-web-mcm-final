@extends('layouts.index')
@section('content')
    <div class="promotion"></div>
    <div class="best">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                @foreach($random as $i)
                <div class="swiper-slide">
                    <div class="slide-content">
                        <div class="slide-content-image">
                            <a href="#">
                                <img src="{{ $i->main_image }}">
                            </a>
                        </div>
                        <a href="#" class="slide-content-title">
                            {{ $i->name }}
                        </a>
                        <div class="slide-content-info">
                            {{ $i->price }} ₸, {{ (new DateTime($i->date_time))->format('j F в G:i') }}, {{$i->address}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    <div class="page-content">
        <div class="page-content-filters">
            <div class="page-content-filters-top">
                <h1 class="page-title">Билеты
                    <div class="select-city" data-open="select-city">
                        <div class="impression-icon impression-icon-left">
                            <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="#location"></use>
                            </svg>
                        </div>
                        <span>Алматы</span>
                        <div class="impression-icon ">
                            <svg width="16" height="16" xmlns="http://www.w3.org/2000/svg">
                                <use xlink:href="#arrow_drop_down"></use>
                            </svg>
                        </div>
                    </div>
                </h1>

            </div>
            <div class="search">
                <form action="{{ route('events.search') }}" method="post">
                    @csrf
                    <div class="search">
                        <input type="date" name="date">
                        <input type="text" name="name" placeholder="Search by name">
                        <button type="submit">Search</button>
                    </div>
                </form>
            </div>
            <div class="page-content-categories">
                <div class="swiper-wrapper">
                    <button class="impression-filter swiper-slide chips color-change clicked"  type="button" name="all">Все</button>
                    <button class="impression-filter swiper-slide chips color-change"  name="Concerts">Концерты</button>
                    <button class="impression-filter swiper-slide chips color-change"  name="Theater" type="button"  >Театр</button>
                    <button class="impression-filter swiper-slide chips color-change"  type="button"  name="Exhibitions">Выставки
                    </button>
                    <button class="impression-filter swiper-slide chips color-change"  type="button"  name="Festivals">Фестивали
                    </button>
                    <button class="impression-filter swiper-slide chips color-change"  type="button"  name="Free events">Бесплатные события
                    </button>
                    <button class="impression-filter swiper-slide chips color-change"  type="button"  name="Stand Up">Stand Up
                    </button>
                    <button class="impression-filter swiper-slide chips color-change"  type="button"  name="Entertainments">Развлечения
                    </button>
                    <button class="impression-filter swiper-slide chips color-change"  type="button"  name="Sports" >Спорт
                    </button>
                    <button class="impression-filter swiper-slide chips color-change" type="button"   name="Tickets Only">Только билеты
                    </button>
                </div>
            </div>
        </div>
        <div class="page-content-items">
            @if(count($events) > 0)
            @foreach($events as $event)
                <div class="page-item" data-category="{{ $event->category }}">
                    <div class="page-item-image">
                        <img src="{{ $event->main_image }}">
                    </div>
                    <a href="{{ route('event.show', $event->id) }}" class="page-item-title">
                        {{ $event->name }}
                    </a>
                    <div class="page-item-info">
                        {{ $event->price }} ₸, {{ (new DateTime($event->date_time))->format('j F в G:i') }}, {{$event->address}}
                    </div>
                </div>
            @endforeach
            @else
                <div class="no-results-message">
                    <p>No events found for the specified criteria.</p>
                </div>
            @endif
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
        $(document).ready(function () {
            // Обработчик события для кнопок с классом "color-change"
            $('.color-change').on('click', function () {
                // Удаление класса "clicked" у всех кнопок
                $('.color-change').removeClass('clicked');
                // Добавление класса "clicked" к кнопке, которую только что нажали
                $(this).addClass('clicked');

                // Получение значения атрибута "name" выбранной кнопки (категории)
                var category = $(this).attr('name');

                // Отображение/скрытие событий в зависимости от выбранной категории
                if (category === 'all') {
                    // Если выбрана категория "Все", показать все события
                    $('.page-item').show();
                } else {
                    // Иначе скрыть все события и показать только те, которые относятся к выбранной категории
                    $('.page-item').hide();
                    $('.page-item[data-category="' + category + '"]').show();
                }
            });
        });
    </script>
@endsection
