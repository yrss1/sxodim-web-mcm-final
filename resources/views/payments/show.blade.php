@extends('layouts.index')
@section('content')
    <div class="payments-container">
        <div class="payments-wrapper">
{{--            <div class="payments-top">--}}
{{--                <div class="payments-top-item">--}}
{{--                    <div class="impression-icon ">--}}
{{--                        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <use xlink:href="#ticket"></use>--}}
{{--                        </svg>--}}
{{--                    </div>--}}
{{--                    <button>Выбор билетов</button>--}}
{{--                </div>--}}
{{--                <div class="payments-top-item">--}}
{{--                    <div class="impression-icon ">--}}
{{--                        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg">--}}
{{--                            <use xlink:href="#arrow_right"></use>--}}
{{--                        </svg>--}}
{{--                    </div>--}}
{{--                    <button>Оплата</button>--}}
{{--                </div>--}}
{{--            </div>--}}
            <div class="payments-data">
                <h1>{{ $event->name }}</h1>
                <p>{{ $event->address }}</p>
            </div>
            <div class="select-ticket">
                <div class="select-text">Выберите билеты</div>
                <button type="button">Входной билет</button>
            </div>
            <div class="select-date">
                <div class="select-text">Выберите дату</div>
                <div class="select-date-date">
                    <div>{{ (new DateTime($event->date_time))->format('j F') }}</div>
                </div>
            </div>
            <div class="select-time">
                <div class="select-text">Выберите время</div>
                <div class="select-date-time">
                    <div>{{ (new DateTime($event->date_time))->format('G:i') }}</div>
                </div>
            </div>
            <div class="tariff">
                <div class="select-text">Выберите тарифы</div>
                <div class="select-tariff">
                    <div class="tariff-left">
                        <div>Взрослый {{ $event->price }} ₸</div>
                    </div>
                    <div class="tariff-right">
                        <div class="ticket-rates-item-controls">
                            <button class="minus" data-action="decrease" onclick="changeAmount('decrease')">−</button>
                            <div class="ticket-rates-amount" id="ticket-amount">0</div>
                            <button class="plus" data-action="increase" onclick="changeAmount('increase')">+</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="next">
                <form onsubmit="event.preventDefault(); showOrderWrapper();">
                    <button id="nextButton" disabled>Далее</button>
                </form>
            </div>
        </div>
        <div class="order-wrapper" style="display: none">
            <div class="select-text">Ваш заказ</div>
            <div class="order-item">
                <div class="order-ticket">
                    <div>Билет</div>
                    <div>Входной билет</div>
                </div>
                <div class="order-date">
                    <div>Дата</div>
                    <div>{{ $event->date_time }}</div>
                </div>
                <div class="order-time">
                    <div>Сессия</div>
                    <div>{{ $event->date_time }}</div>
                </div>
            </div>
            <div class="order-item">
                <div>
                    <div>Взрослый</div>
                    <div><span class="cnt">(2)</span>{{ $event->price }}₸</div>
                </div>
                <div class="line"></div>
                <div style="color: black">
                    <div style="font-weight: 600">Итого</div>
                    <div style="font-weight: 600; font-size: 18px" class="final-price">5000тнг</div>
                </div>
            </div>
            <div class="pay-btn">
                <form action="{{ route('ticket.store') }}" method="post" id="paymentForm">
                    @csrf
                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"> <!-- Assuming you are using Laravel's Auth for user authentication -->
                    <input type="hidden" name="event_id" value="{{ $event->id }}">
                    <input type="hidden" name="count" id="ticketCount" value="0">
                    <input type="hidden" name="price" id="ticketPrice" value="{{ $event->price }}">
                    <input type="hidden" name="date_time" id="date_time" value="{{ $event->date_time }}">
                    <input type="hidden" name="name" id="name" value="{{ $event->name }}">
                    <input type="hidden" name="bonuses" id="bonuses" value="{{ $event->bonuses }}">
                    <button onclick="preparePayment()">Оплатить</button>
                </form>
            </div>
            <div class="order-text">
                <p>После оформления заказа, у вас будет 15 минут чтобы оплатить заказ.</p>
                <p>По всем вопросам обращайтесь в службу поддержки: +7(747) 132 23 28 или help@sxodim.com</p>
                <p>После нажатия на кнопку "Оплатить", появится виджет оплаты. Для оплаты потребуется банковская карта любого банка. Нажимая на кнопку "Оплатить", вы соглашаетесь с Публичным договором (офертой)</p>
            </div>
        </div>
    </div>

    <script>
        var ticketAmount = 0; // начальное значение счетчика

        function changeAmount(action) {
            var amountElement = document.getElementById('ticket-amount');
            var nextButton = document.getElementById('nextButton');

            if (action === 'increase') {
                ticketAmount++;
            } else if (action === 'decrease' && ticketAmount > 0) {
                ticketAmount--;
            }

            amountElement.textContent = ticketAmount; // обновляем значение счетчика на странице

            // Обновляем состояние кнопки "Далее" в зависимости от количества выбранных тарифов
            if (ticketAmount > 0) {
                nextButton.removeAttribute('disabled');
                nextButton.style.backgroundColor = '#e53d2e'; // Делаем кнопку красной
            } else {
                nextButton.setAttribute('disabled', 'disabled');
                nextButton.style.backgroundColor = ''; // Возвращаем стандартный цвет кнопки
            }
        }

        function showOrderWrapper() {
            var paymentsWrapper = document.querySelector('.payments-wrapper');
            var orderWrapper = document.querySelector('.order-wrapper');

            paymentsWrapper.style.display = 'none';
            orderWrapper.style.display = 'block';

            // Добавьте код для вывода информации о заказе в блоке order-wrapper
            // Например:
            var orderTicket = document.querySelector('.order-ticket div:last-child');
            orderTicket.textContent = 'Входной билет'; // Здесь нужно заменить текст на актуальный

            // Добавьте код для расчета и вывода общей суммы заказа
            // Например:
            var orderTotal = document.querySelector('.final-price');
            var count = document.querySelector('.cnt')
            var ticketPrice = {{ $event->price }}; // Замените на актуальную цену билета
            var totalAmount = ticketAmount * ticketPrice;
            orderTotal.textContent = totalAmount + '₸';
            count.textContent = '(' + ticketAmount + ')';
        }
        function preparePayment() {
            var ticketCountInput = document.getElementById('ticketCount');
            var ticketPriceInput = document.getElementById('ticketPrice');

            ticketCountInput.value = ticketAmount;

            var ticketPrice = {{ $event->price }};
            ticketPriceInput.value = ticketPrice * ticketAmount;

            // Submit the form
            document.getElementById('paymentForm').submit();
        }
    </script>
@endsection
