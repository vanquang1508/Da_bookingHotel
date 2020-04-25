@extends('client.layouts.main')
@section('title','Home Page')
@section('content')
<!--Header menu-->
@include("client.shared.menu")
<!-- END Header Menu -->

<!--Slider-->
@include("client.shared.slider")
<!--End Slider-->

<!--searchroom-->
@include("client.shared.searchroom")
<!--End searchroom-->

<!--Introduce-->

<!--End Introduce-->

<!--Category-->

<!--End Category-->

<!--Room-->
@include("client.shared.room")
<!--EndRoom-->

<!--News-->

<!--EndNews-->

<!--facebook-->

<!--End facebook-->

<!--footer-->
@include("client.shared.footer")
<!--End Footer-->
@endsection
@section('script1')
	@include('client.shared.scriptclient')
@endsection
