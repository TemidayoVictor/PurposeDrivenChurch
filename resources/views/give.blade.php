@extends('layouts.baseLayout')

@section('title')
Give Online
@endsection

@section('header')

    <section class="heading container flex">
        <section class="heading container flex">
            <div class="welcome-text">
                <h1>Give Online</h1>
                <p>"...good measure, pressed down, shaken together "</p>
            </div>
        </section>
    </section>

@endsection

@section('content')

    <div class="giving-online">
        <h1>Church Account Details</h1>
        <div class="account-container">
            <div class="account-content">
                <div class="acct-details flex">
                    <h3>Account Name</h3>
                    <p>Purpose Driven Christian Center</p>
                </div>
                <div class="acct-details flex">
                    <h3>Account Number</h3>
                    <p>0130401749</p>
                </div>
                <div class="acct-details flex">
                    <h3>Bank</h3>
                    <p>Haggai Mortgage Bank Limited</p>
                </div>
                <div class="acct-details flex">
                    <p class="info">If you give to this acount, please fill the "Giving Details" form below. We Celebrate You.</p>
                    <button>Copy Account Number</button>
                </div>
            </div>

        </div>

        <div class="account-container account-container-2">
            <div class="account-content">
                <div class="acct-details flex">
                    <h3>Account Name</h3>
                    <p>Television Ministry (Purpose Driven Church)</p>
                </div>
                <div class="acct-details flex">
                    <h3>Account Number</h3>
                    <p>3066994962</p>
                </div>
                <div class="acct-details flex">
                    <h3>Bank</h3>
                    <p>First Bank of Nigeria Plc</p>
                </div>
                <div class="acct-details flex">
                    <p class="info">If you give to this acount, please fill the "Giving Details" form below. We Celebrate You.</p>
                    <button class="inverse">Copy Account Number</button>
                </div>
            </div>

        </div>
        
        
    </div>

@endsection
