@extends('layouts.main')

@section('title', 'AboutMe')

@section('content')

    <style>
        body {
            font-family: "Times New Roman", serif;
            margin: 20px;
        }

        h1,
        h2 {
            margin-bottom: 10px;
        }

        ul,
        ol {
            margin-left: 35px;
        }

        p {
            text-align: justify;
        }

        footer {
            margin-top: 30px;
        }
    </style>

    <main>
        <h1>Basic Information</h1>

        <ul>
            <li><strong>Name:</strong> Panrawee</li>
            <li><strong>Gender:</strong> Female</li>
            <li><strong>Age:</strong> 20</li>
        </ul>

        <h1>Autobiography</h1>

        <p>
            I was born on a warm, sunny day in June 15 in Chiang Mai, Thailand.
            I still live in Chiang Mai, Thailand, and I go to school at XXX School.
            I live with my mom, Kate; my brother, Jake; and my Aunt Molly.
            When I was born, my brother was fifteen-months-old and hid under the table from me.
            Jake is a sweet kid and he would do anything for me, but like all brothers and sisters
            we fight like cats and dogs. Sometimes when no one was around, Jake would come up to me
            and bite my toes for no reason. I still love him but only because he is my brother.
        </p>

        <h1>My Best Friends</h1>

        <ol>
            <li><a href="https://github.com/Lelaratleea">Leea</a></li>
            <li><a href="https://github.com/Nangfah04">NangFah</a></li>
            <li><a href="https://github.com/">Jazmine</a></li>
        </ol>

    </main>
@endsection
