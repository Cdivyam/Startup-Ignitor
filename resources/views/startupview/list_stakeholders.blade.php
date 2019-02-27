
@extends('admin.layouts.dashboard')

@section('page_heading','Tables')

@section('section')


        <div class="row">
            <div class="col-sm-12">
                @component('admin.widgets.panel')
                    @slot('panelTitle', 'Coloured Table')
                    @slot('panelBody')
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Organisation</th>
                                    <th>Location</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="success">
                                    <td>John</td>
                                    <td>john@gmail.com</td>
                                    <td>London, UK</td>
                                </tr>
                                <tr>
                                    <td>Wayne</td>
                                    <td>wayne@gmail.com</td>
                                    <td>Manchester, UK</td>
                                </tr>
                                <tr class="info">
                                    <td>Andy</td>
                                    <td>andy@gmail.com</td>
                                    <td>Merseyside, UK</td>
                                </tr>
                                <tr>
                                    <td>Danny</td>
                                    <td>danny@gmail.com</td>
                                    <td>Middlesborough, UK</td>
                                </tr>
                                <tr class="warning">
                                    <td>Frank</td>
                                    <td>frank@gmail.com</td>
                                    <td>Southampton, UK</td>
                                </tr>
                                <tr>
                                    <td>Scott</td>
                                    <td>scott@gmail.com</td>
                                    <td>Newcastle, UK</td>
                                </tr>
                                <tr class="danger">
                                    <td>Rickie</td>
                                    <td>rickie@gmail.com</td>
                                    <td>Burnley, UK</td>
                                </tr>
                            </tbody>
                        </table>
                    @endslot
                @endcomponent
            </div>
            <!-- /.col-sm-6 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.col-sm-12 -->
    <footer class="sticky-footer">
        <div class="container">
          <div class="text-center">
            <small>Copyright © Your Website 2018</small>
          </div>
        </div>
      </footer>

@endsection