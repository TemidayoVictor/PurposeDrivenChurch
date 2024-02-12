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
                
            </div>
        </div>

        <h1>Partner With Us Today</h1>
        <div class="account-container">
            <div class="account-content">
                <div class="acct-details flex">
                    <h3>To partner with us, click the link below. We celebrate you ❤</h3>
                </div>
                <a href="https://bit.ly/PDCGLOBAL_PARTNERSHIP" class="msg-btn block mt-1">Partner With @unless ()
                    
                @endunless</a>
            </div>
        </div>
        
        
    </div>

@endsection
