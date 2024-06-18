@extends('layouts.app')

<h3>Student ID: {{ $id->studid }}</h3>
<h5>First Name: {{ $id->studfullname }}</h5>
<h5>Last Name: {{ $id->studlastname }}</h5>
<h5>College: {{ $id->studcollid }}</h5>
<h5>Department: {{ $id->studdeptid }}</h5>
<h5>Year: {{ $id->studyear }}</h5>

@endsection