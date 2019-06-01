@extends('layouts.app')

@section('title')
    <h1>Super sección</h1>
@endsection

@section('content')

        <!-- Main content -->
        <section class="content">  
    <!-- row -->
    <div class="row content">
        <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
        <!-- /.box-header -->
        <div class="box-body">
            <table id="balance-table" class="table table-bordered table-striped table-responsive">
                <thead>
                    <tr>
                        <th>User</th>
                        <th>Type</th>
                        <th>Message</th>
                        <th>Balance</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>User</th>
                        <th>Type</th>
                        <th>Message</th>
                        <th>Balance</th>
                        <th>Date</th>
                        <th>Status</th>
                    </tr>
                </tfoot>
                <tbody>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                    <tr>
                        <td>Tiger Nixon</td>
                        <td>System Architect</td>
                        <td>Edinburgh</td>
                        <td>61</td>
                        <td>2011/04/25</td>
                        <td>$320,800</td>
                    </tr>
                </tbody>
            </table>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
    </div>  
    </section>

    <div class="card-body">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
    </div>
    
@endsection