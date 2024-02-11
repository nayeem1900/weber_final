@extends('frontend.layouts.master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 ">
               <strong>Brochure</strong>
                <p class="etender" style="text-align: justify">
                    We are and US Based company located at Boyton Beach, Florida, We Established in the year 2021, and we have cumulative engineering experience over 30 years and we had pretty good experince in developing Test systems, DEsign and development of New Products for test and measurement, and we have handson expertise with hadling the instruments and interfacing for test automation, We also provide the Service Support for the existing systems and support to get the things upgraded, We provide the Hybrid and on-call support to isit the premises and provide the support.
                </p>
            </div>


        </div>
        {{--Tender table--}}
        <table class="table">
            <thead>
            <tr>
                <th>Sl</th>
                {{--<th>Date</th>
                <th>Deadline</th>--}}
                <th>Product Name</th>
                <th>Download</th>
            </tr>
            </thead>
            <tbody>
@foreach($allData as $key=>$etender)
            <tr>
                <td>{{$key+1}}</td>
               {{-- <td>{{($etender->t_date)}}</td>
                <td>{{($etender->deadline)}}</td>--}}
                <td>{{($etender->title)}}</td>
                <td>
                    <a href="public/upload/etender_images/{{($etender->t_download)}}" download="{{($etender->t_download)}}">
                        <button type="button" class="btn btn-primary">
                            <i class="glyphicon glyphicon-download">
                            </i>Download</button>
                    </a>
                </td>
                {{--<td>{{($etender->t_download)}}</td>--}}
            </tr>
@endforeach

            </tbody>
        </table>

    </div>

@endsection