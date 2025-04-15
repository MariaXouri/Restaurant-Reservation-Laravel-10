<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">


</head>

<body data-rsssl=1>
    <table width="100%">
        <tr>
            <td>From : {{ $headers }}</td>
            <td>To : {{ $to }}</td>
            <td>Subject : {{ $subject }}</td>
            <td>Body : {{ $body }}</td>
        </tr>
    </table>