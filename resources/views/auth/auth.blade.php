@extends('layouts.index')
@section('content')
    <style>
        form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            width: 50%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        label {
            display: block;
            margin-bottom: 10px;
            font-size: 16px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease-in-out;
        }

        input[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>
<div>
    <form action="{{ route('auth') }}" method="post">
        @csrf
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="password">Пароль:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Отправить">
    </form>
    <a href="{{ route('register') }}">Регистрация</a>
</div>
@endsection
