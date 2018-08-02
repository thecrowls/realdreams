<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body class="page1" id="top">
<!--==============================header=================================-->
@include('layouts.header')
@yield('slider')
<!--==============================Content=================================-->
@yield('content')
<!--==============================footer=================================-->
@include('layouts.footer')
{{--<script>--}}
    {{--$(function () {--}}
        {{--$('#bookingForm').bookingForm({--}}
            {{--ownerEmail: '#'--}}
        {{--});--}}
    {{--})--}}
    {{--$(function () {--}}
        {{--$('#bookingForm input, #bookingForm textarea').placeholder();--}}
    {{--});--}}
{{--</script>--}}
</body>
</html>

