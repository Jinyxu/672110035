@extends('layouts.main')

@section('title', 'Schedule')

@section('content')
<style>
table {
border-collapse: collapse;
width: 80%;
}
table, th, td {
border: 1px solid black;
text-align: center;
}
tr {
height: 4em;
}
</style>

<main>
    <table>
        <caption>Teaching Schedule</caption>
        <thead>
            <tr>
        <th></th>
        <th colspan="2">08:00 - 09:00</th>
        <th colspan="2">09:00 - 10:00</th>
        <th colspan="2">10:00 - 11:00</th>
        <th colspan="2">11:00 - 12:00</th>
        <th colspan="2">12:00 - 13:00</th>
        <th colspan="2">13:00 - 14:00</th>
        <th colspan="2">14:00 - 15:00</th>
        <th colspan="2">15:00 - 16:00</th>
        <th colspan="2">16:00 - 17:00</th>
        <th colspan="2">17:00 - 18:00</th>
    </tr>

        </thead>

    <!-- Monday -->
    <tr>
        <th>Mo</th>
        <td colspan="2"></td>
        <td colspan="2"></td>
        <td colspan="2"></td>
        <td colspan="2"></td>
        <td colspan="2" ></td>
        <td colspan="3">
            954310<br>
            Information System For ERP<br>
            Lecture
        </td>
        
        <td colspan="3">
            954365<br>
           Knowlede Management<br>
            Lecture
        </td>
        <td colspan="2"></td>
        <td colspan="2"></td>
      
    </tr>

    <!-- Tuesday -->
    <tr>
        <th>Tu</th>
        <td colspan="2">
        </td>
        <td colspan="7">
            954425<br>
           Marketing Analytic<br>
            Lecture
        </td>
        <td ></td>
        <td colspan="3">954443 <br>
                        Mutimedia <br>
                    Lecture</td>
        <td colspan="3">954443 <br>
                        Mutimedia <br>
                    Lab</td>
        <td colspan="2"></td>
        <td colspan="2"></td>
    </tr>

    <!-- Wednesday -->
    <tr>
        <th >We</th>
        <td colspan="4">954381 <br>
            Prepartion for work<br>
             Lecture
    </td>
        <td colspan="2"></td>
        <td colspan="2"></td>
        <td colspan="2"></td>
        <td colspan="2"></td>
        <td colspan="2"></td>
        <td colspan="2"></td>
        <td colspan="2"></td>
        <td colspan="2"></td>
        
    </tr>

    <!-- Thursday -->
    <tr>
         <th>Mo</th>
        <td colspan="2"></td>
        <td colspan="2"></td>
        <td colspan="2"></td>
        <td colspan="2"></td>
        <td colspan="2" ></td>
        <td colspan="3">
            954310<br>
            Information System For ERP<br>
            Lecture
        </td>
        
        <td colspan="3">
            954365<br>
           Knowlede Management<br>
            Lecture
        </td>
        <td colspan="2"></td>
        <td colspan="2"></td>
    </tr>

    <!-- Friday -->
    <tr>
        <th>Fr</th>
        <td colspan="2">
        </td>
        <td colspan="7">
            954425<br>
           Marketing Analytic<br>
            Lecture
        </td>
        <td ></td>
        <td colspan="4">954348 <br>
                        Web Programming <br>
                    Lecture</td>
        <td colspan="4">954348 <br>
                        Web Programming <br>
                    Lab</td>
        <td colspan="2"></td>
       
    </tr>

</table>


</body>
</html>



@endsection