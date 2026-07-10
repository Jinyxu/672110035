@extends('layouts.main')

@section('title', 'Friends')

@section('content')

<style>
    table {
        border-collapse: collapse;
        margin: 20px auto;
    }

    table,
    th,
    td {
        border: 1px solid black;
        text-align: center;
        padding: 8px;
    }

    caption {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 10px;
    }
</style>

<main>
    <table>
        <caption>My Best Friends</caption>

        <colgroup>
            <col style="width: 15ch;">
            <col style="width: 20ch;">
            <col style="width: 10ch;">
        </colgroup>

        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Student ID</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>Lelarat</td>
                <td>Leea</td>
                <td>672110062</td>
            </tr>
            <tr>
                <td>Jasmine</td>
                <td>Tingting</td>
                <td>672110063</td>
            </tr>
            <tr>
                <td>NongFahsai</td>
                <td>SPD</td>
                <td>672110064</td>
            </tr>
        </tbody>
    </table>
</main>

@endsection