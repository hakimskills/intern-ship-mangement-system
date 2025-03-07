<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            line-height: 1.5;
            margin: 0;
            padding: 0;
        }

        h1, h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        p {
            margin-bottom: 10px;
        }

        /* Customize the rest of the CSS styling according to your requirements */
    </style>
</head>
<body>
<h1>Democratic and Popular Republic of Algeria</h1>
<h2>INTERNSHIP CERTIFICATE</h2>
<p>I, undersigned {{ $managerName }} {{ $managerLast }}, internship supervisor at {{  $employee->nameComp }}, hereby certify that the student {{  $employee->name }}  {{ $employee->last_name }}</p>
<p>enrolled at the company {{  $employee->nameComp }}, has successfully completed an internship in the field/specialty: {{ $employee->post }}/{{ $employee->Speciality }}, at {{ $companyAddress }}</p>
<p>During the period from {{  $employee->dateS }} to {{  $employee->dateE }}, issued at {{ $companyAddress }} on {{ now()->format('d/m/Y') }}</p>
<p>Head of the hosting institution or administration</p>
<p>This certificate is issued for reference and authentication purposes.</p>
</body>
</html>
