@extends('layouts.app')

@section('content')
        <div class="container">
            <div class="alert alert-primary text-center h3" role="alert">
                MCOM Services
            </div>
            <div class="row">
                <div class="col-md-4">
                    <h3 class="font-italic text-primary">TELECOMMUNICATION</h3>
                    <ul class="list-group">                    
                        <li class="list-group-item list-group-item-primary list-group-item-action">Structured Cabling Solutions</li>
                        <li class="list-group-item list-group-item-secondary list-group-item-action">Infrastructure Networks</li>
                        <li class="list-group-item list-group-item-success list-group-item-action">Wireless Solutions</li>
                        <li class="list-group-item list-group-item-danger list-group-item-action">Fiber Optics Communication</li>
                        <li class="list-group-item list-group-item-warning list-group-item-action">Additional Services</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3 class="font-italic text-primary">ICT</h3>
                    <ul class="list-group">                    
                        <li class="list-group-item list-group-item-info list-group-item-action">ICT Consultancy Services </li>
                        <li class="list-group-item list-group-item-light list-group-item-action">ICT General Supplies & Support services</li>
                        <li class="list-group-item list-group-item-dark list-group-item-action">Computer Preventive Maintenance </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3 class="font-italic text-primary">SYSTEM SECURITY</h3>
                    <ul class="list-group">                    
                        <li class="list-group-item list-group-item-success list-group-item-action">Closed-circuit television (CCTV) System</li>
                        <li class="list-group-item list-group-item-danger list-group-item-action">Access Control System </li>
                    </ul>	
                </div>
            </div>
        </div>  
@endsection