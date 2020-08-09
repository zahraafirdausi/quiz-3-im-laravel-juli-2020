   @extends('layouts.master')

   @section('content')
        <div class="row">
            <div class="col-xl-8 col-lg-7">
              <div class="card shadow mb-4">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary">ERD</h6>
                </div>
                <div class="card-body">
                  <div class="chart-area">
                    <img src="{{asset('images/ERD.PNG')}}" alt="ERD" width="550" height="350">
                  </div>
                  <hr>
                  ERD Diagram
                </div>
              </div>
          </div>
        </div>
    @endsection
