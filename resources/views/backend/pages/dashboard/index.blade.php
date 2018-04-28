@extends('backend.master')

@section('content')

            <div class="row">
			
				<div class="col-md-3">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
								<h2 class="margin-b-5">Cipta Inovasi</h2>
								<p class="text-muted">Total</p>
								<span class="pull-right text-primary widget-r-m">{{ $ck }}</span>
							</div>
							<div class="progress margin-b-10  progress-mini">
								<div style="width:{{ $ck }}%;" class="progress-bar bg-primary"></div>
							</div>
                        </div>
                    </div>
                </div>
				
                <div class="col-md-3">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
								<h2 class="margin-b-5">Bisnis TIK</h2>
								<p class="text-muted">Total</p>
								<span class="pull-right text-indigo widget-r-m">{{ $tik }}</span>
							</div>
							<div class="progress margin-b-10 progress-mini">
								<div style="width:{{ $tik }}%;" class="progress-bar bg-indigo"></div>
							</div>
                        </div>
                    </div>
                </div>
				
				<div class="col-md-3">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
								<h2 class="margin-b-5">Game Development</h2>
								<p class="text-muted">Total</p>
								<span class="pull-right text-success widget-r-m">{{ $game }}</span>
							</div>
							<div class="progress margin-b-10 progress-mini">
								<div style="width:{{ $game }}%;" class="progress-bar bg-success"></div>
							</div>
                        </div>
                    </div>
                </div>
				
				<div class="col-md-3">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
								<h2 class="margin-b-5">E-Goverment</h2>
								<p class="text-muted">Total</p>
								<span class="pull-right text-warning widget-r-m">{{ $gov }}</span>
							</div>
							<div class="progress margin-b-10 progress-mini">
								<div style="width:{{ $gov }}%;" class="progress-bar bg-warning"></div>
							</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
								<h2 class="margin-b-5">IoT</h2>
								<p class="text-muted">Total</p>
								<span class="pull-right text-primary widget-r-m">{{ $iot }}</span>
							</div>
							<div class="progress margin-b-10  progress-mini">
								<div style="width:{{ $iot }}%;" class="progress-bar bg-primary"></div>
							</div>
                        </div>
                    </div>
                </div>
				
                <div class="col-md-3">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
								<h2 class="margin-b-5">Desain Animasi</h2>
								<p class="text-muted">Total</p>
								<span class="pull-right text-indigo widget-r-m">{{ $animasi }}</span>
							</div>
							<div class="progress margin-b-10 progress-mini">
								<div style="width:{{ $animasi }}%;" class="progress-bar bg-indigo"></div>
							</div>
                        </div>
                    </div>
                </div>
				
				<div class="col-md-3">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
								<h2 class="margin-b-5">Keamanan Jaringan</h2>
								<p class="text-muted">Total</p>
								<span class="pull-right text-success widget-r-m">{{ $jaringan }}</span>
							</div>
							<div class="progress margin-b-10 progress-mini">
								<div style="width:{{ $jaringan }}%;" class="progress-bar bg-success"></div>
							</div>
                        </div>
                    </div>
                </div>
				
				<div class="col-md-3">
                    <div class="widget  bg-light">
                        <div class="row row-table ">
                            <div class="margin-b-30">
								<h2 class="margin-b-5">Hackathon</h2>
								<p class="text-muted">Total</p>
								<span class="pull-right text-warning widget-r-m">{{ $hack }}</span>
							</div>
							<div class="progress margin-b-10 progress-mini">
								<div style="width:{{ $hack }}%;" class="progress-bar bg-warning"></div>
							</div>
                        </div>
                    </div>
                </div>
            </div>
			
            <div class="row">
                <div class="col-md-12">
                  <div class="card">
                        <div class="card-heading card-default">
                            Page Visitors
							<p class="text-muted">Lorem ipsum dolor sit amet</p>
                        </div>
                        <div class="card-block">
                            <div>
                                <canvas id="linechart"  height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
