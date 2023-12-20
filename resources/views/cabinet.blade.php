@extends('layouts.index')
@section('content')
    <div class="bonuses">
        Мои бонусы: {{ Auth::user()->bonuses }} ₸
    </div>
    <div class="my-tickets">
        @if (sizeof($tickets) == 0)
            <div class="no-tickets-message">
                <p>У вас нет доступных билетов.</p>
            </div>
        @else
        @foreach($tickets as $ticket)
            <div class="ticket">
                <div class="ticket-item">
                    <div>Название</div>
                    <div>{{ $ticket->name }}</div>
                </div>
                <div class="ticket-item">
                    <div>Дата и время</div>
                    <div>{{ (new DateTime($ticket->date_time))->format('j F в G:i') }}</div>
                </div>
                <div class="ticket-item">
                    <div>Цена</div>
                    <div>{{ $ticket->price }}₸</div>
                </div>
                <div class="ticket-item">
                    <div>Количество</div>
                    <div>{{ $ticket->count }}</div>
                </div>
                <div class="ticket-return">
                    @php
                        $eventDateTime = new DateTime($ticket->date_time);
                        $currentDateTime = new DateTime();
                        $twoHoursBeforeEvent = $eventDateTime->sub(new DateInterval('PT2H')); // Вычитаем 2 часа
                    @endphp

                    @if ($currentDateTime >= $twoHoursBeforeEvent)
                        <button disabled style="background: gray">Вернуть билет</button>
                    @else
                        <form action="{{ route('ticket.delete') }}" method="post">
                            @csrf
                            <input type="hidden" name="id" value="{{ $ticket->id }}">
                            <input type="hidden" name="event_id" value="{{ $ticket->event_id }}">
                            <input type="hidden" name="price" value="{{ $ticket->price }}">
                            <button type="submit">Вернуть билет</button>
                        </form>
                    @endif
                </div>
            </div>
        @endforeach
        @endif
    </div>

@endsection
