@extends('layouts.express')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 px-0">
            <img src="{{ asset('images/office.jpg') }}" alt="" class="img-fluid w-100"
                style="height: 50vh; object-fit: cover">
        </div>
    </div>
</div>
<div class="container my-4">
    <div class="row py-5">
        <div class="col-md-4">
            <h5>Guided by experience driven by passion</h5>
            <h1>Leadership Team</h1>
        </div>
        <div class="col-md-8">
            MyNexusBPO, we pride ourselves on offering personalized services tailored to meet the unique needs of each of our clients. We believe in becoming a one-stop solution for all of your accounting and tax requirements. With an Accounting Outsourcing Leadership team of 320+ experienced and skilled accountants who have worked with a wide range of clients across various industries, we are well-equipped in providing accurate and effective services as per the industry.
        </div>
    </div>
</div>
<x-expbpo.home.whyChooseUs />
@endsection