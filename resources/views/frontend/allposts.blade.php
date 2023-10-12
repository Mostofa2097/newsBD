@extends('layouts.front')
@section('content')



<section class="single-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">   
                   <li><a href="{{URL::to('/')}}"><i class="fa fa-home"></i></a></li>					   
                    <li><a href="#">
                        @if (session()->get('lang') == 'english')
                        All News
                        @else
                        সব খবর
                        @endif
                        </a></li>
                    <li></li>
                </ol>
            </div>
        </div>
        
      </div>
      <!-- ******** -->
      <div class="row">
        <div class="col-md-8 col-sm-8">
            
            <!-- ********* -->
            <div class="row">
                    @foreach ($posts as $row)
                    @php
						$slug = preg_replace('/\s+/u', '-', trim($row->title_bn));
						@endphp
                    
                    <div class="col-md-4 col-sm-4">
                        <div class="top-news sng-border-btm">
                            <a href="#"><img src="{{asset($row->image)}}" alt="{{$row->title_bn}}"></a>
                            <h4 class="heading-02"><a href="#">
                                @if (session()->get('lang') == 'english')
                                {{$row->title_en}}
                                @else
                                {{$row->title_bn}}
                                @endif
                            </a> </h4>
                        </div>
                    </div>
                    @endforeach
                
            </div>
            {{ $posts->links() }}
        </div>
        
        <div class="col-md-4 col-sm-4">
            <!-- add-start -->	
                <div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="sidebar-add"><img src="{{ asset('frontend/assets') }}/img/add_01.jpg" alt="" /></div>
						</div>
                </div><!-- /.add-close -->

                <!-- add-start -->	
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="add"><img src="{{ asset('frontend/assets') }}/img/top-ad.jpg" alt="" /></div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="add"><img src="{{ asset('frontend/assets') }}/img/top-ad.jpg" alt="" /></div>
				</div>
			</div><!-- /.add-close -->	
            
            
                @php
					$latest = DB::table('posts')->orderBy('id','DESC')->limit(8)->get();
					$fevarites = DB::table('posts')->orderBy('id','DESC')->inRandomOrder()->limit(8)->get();
					$hightsee = DB::table('posts')->orderBy('id','ASC')->inRandomOrder()->limit(8)->get();
				@endphp
                <div class="tab-header">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        <li role="presentation" class="active"><a href="#tab21" aria-controls="tab21" 
                            role="tab" data-toggle="tab" aria-expanded="false">
                            @if (session()->get('lang') == 'english')
                            latest
                            @else
                            সর্বশেষ
                             @endif
                            
                        </a></li>
                        <li role="presentation" ><a href="#tab22" aria-controls="tab22" role="tab"      
                            data-toggle="tab" aria-expanded="true">
                            @if (session()->get('lang') == 'english')
                            Favorites
                            @else
                            জনপ্রিয়
                             @endif
                            
                        </a></li>
                        <li role="presentation" ><a href="#tab23" aria-controls="tab23" role="tab"  
                            data-toggle="tab" aria-expanded="true">
                            @if (session()->get('lang') == 'english')
                            Most Views
                            @else
                            সর্বাধিক
                             @endif
                        </a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content ">


                        <div role="tabpanel" class="tab-pane in active" id="tab21">
                            <div class="news-titletab">
                             @foreach ($latest as $row)
                                <div class="news-title-02">
                                    <h4 class="heading-03"><a href="#">
                                     @if (session()->get('lang') == 'english')
                                        {{$row->title_en}}
                                     @else
                                         {{$row->title_bn}}
                                     @endif
                                    </a> </h4>
                                </div>	
                            @endforeach
                            </div>
                        </div>
                        
                        <div role="tabpanel" class="tab-pane fade" id="tab22">
                            <div class="news-titletab">
                                    @foreach ($fevarites as $row)
                                       <div class="news-title-02">
                                           <h4 class="heading-03"><a href="#">
                                            @if (session()->get('lang') == 'english')
                                               {{$row->title_en}}
                                            @else
                                                {{$row->title_bn}}
                                            @endif
                                           </a> </h4>
                                       </div>	
                                   @endforeach    
                            </div>                                     
                        </div>

                        <div role="tabpanel" class="tab-pane fade" id="tab23">	
                            <div class="news-titletab">
                                    @foreach ($hightsee as $row)
                                       <div class="news-title-02">
                                           <h4 class="heading-03"><a href="#">
                                            @if (session()->get('lang') == 'english')
                                               {{$row->title_en}}
                                            @else
                                                {{$row->title_bn}}
                                            @endif
                                           </a> </h4>
                                       </div>	
                                   @endforeach						                                          
                            </div>
                        </div>
                </div>
            </div>
            <!-- add-start -->	
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="sidebar-add"><img src="assets/img/add_01.jpg" alt="" /></div>
                    </div>
                </div><!-- /.add-close -->
        </div>
      </div>
    </div>
</section>




@endsection