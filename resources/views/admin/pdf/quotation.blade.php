@extends('admin.pdf.layout')


@section('content')


<div class="card">
    <div class="card-body invoice-head"> 
        <div class="row">
            <div class="col-md-4 align-self-center">                                                
                <img src="{{setting('app_icon')}}" alt="logo-small" class="logo-sm mr-1" height="24">                                            
                <p class="mt-2 mb-0 text-muted">If account is not paid within 7 days the credits details supplied as confirmation.</p>                                             
            </div><!--end col-->    
            <div class="col-md-8">
                    
                
            </div><!--end col-->    
        </div><!--end row-->     
    </div><!--end card-body-->
    <div class="card-body">
        <div class="row">
            <div class="col-md-4">
                <div class="">
                    <h6 class="mb-0"><b>Order Date :</b> 11/05/2020</h6>
                    <h6><b>Order ID :</b> # 23654789</h6>
                </div>
            </div><!--end col--> 
            <div class="col-md-4">                                            
                <div class="float-left">
                    <address class="font-13">
                        <strong class="font-14">Billed To :</strong><br>
                        Joe Smith<br>
                        795 Folsom Ave<br>
                        San Francisco, CA 94107<br>
                        <abbr title="Phone">P:</abbr> (123) 456-7890
                    </address>
                </div>
            </div><!--end col--> 
            <div class="col-md-4">
                <div class="">
                    <address class="font-13">
                        <strong class="font-14">Shipped To:</strong><br>
                        Joe Smith<br>
                        795 Folsom Ave<br>
                        San Francisco, CA 94107<br>
                        <abbr title="Phone">P:</abbr> (123) 456-7890
                    </address>
                </div>
            </div> <!--end col-->                       
        </div><!--end row-->

        <div class="row">
            <div class="col-lg-12">
                <div class="table-responsive project-invoice">
                    <table class="table table-bordered mb-0">
                        <thead class="thead-light">
                            <tr>
                                <th>Project Breakdown</th>
                                <th>Hours</th>
                                <th>Rate</th> 
                                <th>Subtotal</th>
                            </tr><!--end tr-->
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <h5 class="mt-0 mb-1 font-14">Project Design</h5>
                                    <p class="mb-0 text-muted">It is a long established fact that a reader will be distracted.</p>
                                </td>
                                <td>60</td>
                                <td>$50</td>
                                <td>$3000.00</td>
                            </tr><!--end tr-->
                            <tr>
                                <td>
                                    <h5 class="mt-0 mb-1 font-14">Development</h5>
                                    <p class="mb-0 text-muted">It is a long established fact that a reader will be distracted.</p>
                                </td>
                                <td>100</td>
                                <td>$50</td>
                                <td>$5000.00</td>
                            </tr><!--end tr-->
                            <tr>
                                <td>
                                    <h5 class="mt-0 mb-1 font-14">Testing &amp; Bug Fixing</h5>
                                    <p class="mb-0 text-muted">It is a long established fact that a reader will be distracted.</p>
                                </td>
                                <td>10</td>
                                <td>$20</td>
                                <td>$200.00</td>
                            </tr><!--end tr-->
                            
                            <tr>                                                        
                                <td colspan="2" class="border-0"></td>
                                <td class="border-0 font-14 text-dark"><b>Sub Total</b></td>
                                <td class="border-0 font-14 text-dark"><b>$82,000.00</b></td>
                            </tr><!--end tr-->
                            <tr>
                                <th colspan="2" class="border-0"></th>                                                        
                                <td class="border-0 font-14 text-dark"><b>Tax Rate</b></td>
                                <td class="border-0 font-14 text-dark"><b>$0.00%</b></td>
                            </tr><!--end tr-->
                            <tr class="bg-black text-white">
                                <th colspan="2" class="border-0"></th>                                                        
                                <td class="border-0 font-14"><b>Total</b></td>
                                <td class="border-0 font-14"><b>$82,000.00</b></td>
                            </tr><!--end tr-->
                        </tbody>
                    </table><!--end table-->
                </div>  <!--end /div-->                                          
            </div>  <!--end col-->                                      
        </div><!--end row-->

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <h5 class="mt-4">Terms And Condition :</h5>
                <ul class="pl-3">
                    <li><small class="font-12">All accounts are to be paid within 7 days from receipt of invoice. </small></li>
                    <li><small class="font-12">To be paid by cheque or credit card or direct payment online.</small></li>
                    <li><small class="font-12"> If account is not paid within 7 days the credits details supplied as confirmation of work undertaken will be charged the agreed quoted fee noted above.</small></li>                                            
                </ul>
            </div> <!--end col-->                                       
            
        </div><!--end row-->
        
    </div><!--end card-body-->
</div>

<div class="row">

</div><!--end row-->

@endsection