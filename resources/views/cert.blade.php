@extends('layouts.index')
@section('content')
    <div class="cert-containet">
        <h1>Подарочный сертификат</h1>
        <div class="cert-form">
            <form action="{{ route('cert') }}" method="post">
                @csrf
                <div>
                <label>Email вашего друга или знакомого</label>
                    <input type="email" name="email" required>
                </div>
                <div>
                    <label>Введите количество суммы</label>
                    <input type="number" name="amount" required>
                </div>
                <div>
                <h1>Payment form</h1>
                    <section>
                        <label>Card number</label>
                        <input type="number" required>
                    </section>
                    <section>
                        <label>Name on card</label>
                        <input type="text" required>
                    </section>
                    <section id="cc-exp-csc">
                        <div>
                            <label>Expiry date</label>
                            <input type="text" required>
                        </div>
                        <div>
                            <label>Security code</label>
                            <input type="number" required>
                            <div class="explanation">Last 3 digits on back of card</div>
                        </div>
                    </section>
                </div>
                <div>
                <button type="submit">Отправить</button>
                </div>

            </form>
        </div>
    </div>
@endsection
