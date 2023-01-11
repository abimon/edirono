@extends('layouts.index2',['title'=>'Dashboard'])
@section('dashboard')
<!-- ### $App Screen Content ### -->
<main class='main-content bgc-grey-100 p-5'>
    <div id='mainContent'>
        <div class="row ">
            <div class="w-100">
                <div class="row gap-20">
                    <!-- #Toatl Visits ==================== -->
                    <div class='col-md-3 col-6 p-2'>
                        <a href="#members" class="card p-2">
                            <div class="layers bd bgc-white p-20">
                                <div class="layer w-100 mB-10">
                                    <h6 class="lh-1"><i class="bi bi-people"></i> Clients</h6>
                                </div>
                                <div class="layer w-100">
                                    <div class="peers ai-sb fxw-nw">
                                        <div class="peer peer-greed">
                                            <span id="sparklinedash"></span>
                                        </div>
                                        <div class="peer">
                                            <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-green-50 c-green-500">50</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- #Total Page Views ==================== -->
                    <div class='col-md-3 col-6 p-2'>
                        <a href="/resources" class="card p-2">
                            <div class="layers bd bgc-white p-20">
                                <div class="layer w-100 mB-10">
                                    <h6 class="lh-1"><i class="bi bi-files"></i> Projects</h6>
                                </div>
                                <div class="layer w-100">
                                    <div class="peers ai-sb fxw-nw">
                                        <div class="peer peer-greed">
                                            <span id="sparklinedash2"></span>
                                        </div>
                                        <div class="peer">
                                            <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-red-50 c-red-500">15</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                    <!-- #Unique Visitors ==================== -->
                    <div class='col-md-3 col-6 p-2'>
                        <div class="layers bd bgc-white card p-2">
                            <div class="layer w-100 mB-10">
                                <h6 class="lh-1">Unique Visitor</h6>
                            </div>
                            <div class="layer w-100">
                                <div class="peers ai-sb fxw-nw">
                                    <div class="peer peer-greed">
                                        <span id="sparklinedash3"></span>
                                    </div>
                                    <div class="peer">
                                        <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-purple-50 c-purple-500">~12%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- #Bounce Rate ==================== -->
                    <div class='col-md-3 col-6 p-2'>
                        <div class="layers bd bgc-white card p-2">
                            <div class="layer w-100 mB-10">
                                <h6 class="lh-1">Bounce Rate</h6>
                            </div>
                            <div class="layer w-100">
                                <div class="peers ai-sb fxw-nw">
                                    <div class="peer peer-greed">
                                        <span id="sparklinedash4"></span>
                                    </div>
                                    <div class="peer">
                                        <span class="d-ib lh-0 va-m fw-600 bdrs-10em pX-15 pY-15 bgc-blue-50 c-blue-500">33%</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <!-- #Sales Report ==================== -->
                <div class="bd bgc-white">
                    <div id="members">
                        <div class="w-100 p-2">
                            <h2 class="text-center">Projects</h2>
                        </div>
                        <div class="w-100">
                            <div class="bg-info text-white p-2">
                                <div class="peers ai-c jc-sb gap-40">
                                    <div class="text-center">
                                        <h3 class="text-danger">{{date('F Y')}}</h3>
                                        <h5 class="text-danger">Projects Report</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive p-20">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class=" bdwT-0">#</th>
                                            <th class=" bdwT-0">Name</th>
                                            <th class=" bdwT-0">Institution</th>
                                            <th class=" bdwT-0">Joining Date</th>
                                            <th class=" bdwT-0">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th class=" bdwT-0"></th>
                                            <td class="fw-600"></td>
                                            <td></td>
                                            <td></td>
                                            <td><span class="text-success"></span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="ta-c bdT w-100 p-20">
                        <a href="#">Check all members</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection