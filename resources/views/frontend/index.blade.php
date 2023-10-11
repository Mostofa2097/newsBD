@extends('layouts.front')
@section('content')
@php
	$firstsectionbig = DB::table('posts')->where('first_section_thumbnail',1)->orderBy('id','DESC')->first();
	$firstsectionsmall = DB::table('posts')->where('first_section',1)->orderBy('id','DESC')->limit(8)->get();
@endphp

<!-- 1st-news-section-start -->	
	<section class="news-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-9 col-sm-8">

					<div class="row">
						<div class="col-md-1 col-sm-1 col-lg-1"></div>
						@php
						$slug = preg_replace('/\s+/u', '-', trim($firstsectionbig->title_bn));
						@endphp

						<div class="col-md-10 col-sm-10">
							<div class="lead-news">
								<div class="service-img"><a href="{{URL::to('view-post/'.$firstsectionbig->id.'/'.$slug)}}"><img src="{{$firstsectionbig->image  }}" alt="Notebook"></a></div>
								<div class="content">
								<h4 class="lead-heading-01"><a href="{{URL::to('view-post/'.$firstsectionbig->id.'/'.$slug)}}">
									@if (session()->get('lang') == 'english')
                                     {{$firstsectionbig->title_en }}
                                     @else
                                     {{$firstsectionbig->title_bn}}
                                     @endif
								</a> </h4>
								</div>
							</div>
						</div>
					</div>


				    <div class="row">
					    @foreach ($firstsectionsmall as $row)

						@php
						$slug = preg_replace('/\s+/u', '-', trim($row->title_bn));
						@endphp


								<div class="col-md-3 col-sm-3">
									<div class="top-news">
										<a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}"><img src="{{ $row->image}}" alt="Notebook"></a>
										<h4 class="heading-02" style="height: 80px"><a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}">
											@if (session()->get('lang') == 'english')
                                            {{$row->title_en }}
                                            @else
                                            {{$row->title_bn}}
                                             @endif
										</a> </h4>
									</div>
								</div>
						@endforeach
				    </div>
					
					<!-- add-start -->	
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="add"><img src="{{ asset('frontend/assets') }}/img/top-ad.jpg" alt="" /></div>
						</div>
					</div><!-- /.add-close -->	
					
					<!-- news-start -->
					<div class="row">

						@php
							$scencecat = DB::table('categories')->first();
							$scencecatpost = DB::table('posts')->where('cat_id',$scencecat->id)->where('bigthumbnail',1)->orderBy('id','DESC')->first();
							$scencecatpostsmall = DB::table('posts')->where('cat_id',$scencecat->id)->where('bigthumbnail',null)->orderBy('id','DESC')->limit(3)->get();

						@endphp
						<div class="col-md-6 col-sm-6">
							<div class="bg-one">
								<div class="cetagory-title" >
									        @if (session()->get('lang') == 'english')
                                            {{$scencecat->category_en }}
                                            @else
                                            {{$scencecat->category_bn}}
                                             @endif
											 <a href="#">
									    <span>
										@if (session()->get('lang') == 'english')
                                            More
                                            @else
                                            আরও 
                                             @endif
										
										<i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a></div>
								<div class="row">
									<div class="col-md-6 col-sm-6">
										<div class="top-news">
											<a href="{{URL::to('view-post/'.$scencecatpost->id.'/'.$slug)}}"><img src="{{ $scencecatpost->image }}" alt="Notebook"></a>
											<h4 class="heading-02" style="height: 80px"><a href="{{URL::to('view-post/'.$scencecatpost->id.'/'.$slug)}}">
												@if (session()->get('lang') == 'english')
                                            {{$scencecatpost->title_en  }}
                                            @else
                                            {{$scencecatpost->title_bn }}
                                             @endif
											</a> </h4>
										</div>
									</div>

									<div class="col-md-6 col-sm-6">
                                        @foreach ($scencecatpostsmall as $row)

										<div class="image-title">
											<a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}"><img src="{{ $row->image }}" alt="Notebook"></a>
											<h4 class="heading-03" style="height: 80px"><a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}">
												@if (session()->get('lang') == 'english')
                                            {{$row->title_en  }}
                                            @else
                                            {{$row->title_bn }}
                                             @endif
											</a> </h4>
										</div>

										@endforeach			
									</div>
								</div>
							</div>
						</div>
						@php
						$scencecat = DB::table('categories')->skip(1)->first();
						$scencecatpost = DB::table('posts')->where('cat_id',$scencecat->id)->where('bigthumbnail',1)->first();
						$scencecatpostsmall = DB::table('posts')->where('cat_id',$scencecat->id)->where('bigthumbnail',null)->limit(3)->get();

					 @endphp
						
						<div class="col-md-6 col-sm-6">
							<div class="bg-one">
								<div class="cetagory-title" >
									        @if (session()->get('lang') == 'english')
                                            {{$scencecat->category_en }}
                                            @else
                                            {{$scencecat->category_bn}}
                                             @endif
											 <a href="#">
									    <span>
										@if (session()->get('lang') == 'english')
                                            More
                                            @else
                                            আরও 
                                             @endif
										
										<i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a></div>
								<div class="row">
									<div class="col-md-6 col-sm-6">
										<div class="top-news">
											<a href="{{URL::to('view-post/'.$scencecatpost->id.'/'.$slug)}}"><img src="{{ $scencecatpost->image }}" alt="Notebook"></a>
											<h4 class="heading-02" style="height: 80px"><a href="{{URL::to('view-post/'.$scencecatpost->id.'/'.$slug)}}">
												@if (session()->get('lang') == 'english')
                                            {{$scencecatpost->title_en  }}
                                            @else
                                            {{$scencecatpost->title_bn }}
                                             @endif
											</a> </h4>
										</div>
									</div>

									<div class="col-md-6 col-sm-6">
                                        @foreach ($scencecatpostsmall as $row)

										<div class="image-title">
											<a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}"><img src="{{ $row->image }}" alt="Notebook"></a>
											<h4 class="heading-03" style="height: 80px"><a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}">
												@if (session()->get('lang') == 'english')
                                            {{$row->title_en  }}
                                            @else
                                            {{$row->title_bn }}
                                             @endif
											</a> </h4>
										</div>

										@endforeach			
									</div>
								</div>
							</div>
						</div>


						
					</div>					
				</div>
				<div class="col-md-3 col-sm-3">
					<!-- add-start -->	
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="sidebar-add"><img src="{{ asset('frontend/assets') }}/img/add_01.jpg" alt="" /></div>
						</div>
					</div><!-- /.add-close -->	
					@php
						$tv = DB::table('livetv')->first();
					@endphp
					@if($tv->status==1)
					<!-- youtube-live-start -->
	
					<div class="cetagory-title-03">
						@if (session()->get('lang')== 'english')
							Live TV
						@else
						  লাইভ টিভি
						@endif
					 
					</div>
					<div class="photo">
						<div class="embed-responsive embed-responsive-16by9 embed-responsive-item" style="margin-bottom:5px;">
                          {!! $tv->embed_code !!}
						</div>
					</div><!-- /.youtube-live-close -->	
					@endif
					<!-- facebook-page-start -->
					<div class="cetagory-title-03">ফেসবুকে আমরা</div>
					<div class="fb-root">
						facebook page here
					</div><!-- /.facebook-page-close -->	
					
					<!-- add-start -->	
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="sidebar-add">
								<img src="{{ asset('frontend/assets') }}/img/add_01.jpg" alt="" />
							</div>
						</div>
					</div><!-- /.add-close -->	
				</div>
			</div>
		</div>
	</section><!-- /.1st-news-section-close -->
	
	<!-- 2nd-news-section-start -->	
	<section class="news-section">
		<div class="container-fluid">
			<div class="row">

				       @php
						$thirdcat = DB::table('categories')->skip(2)->first();
						$thirdcatpost = DB::table('posts')->where('cat_id',$thirdcat->id)->where('bigthumbnail',1)->first();
						$thirdcatpostsmall = DB::table('posts')->where('cat_id',$thirdcat->id)->where('bigthumbnail',null)->limit(3)->get();

					    @endphp

				<div class="col-md-6 col-sm-6">
					<div class="bg-one">
						<div class="cetagory-title-02"><a href="#">
							       @if (session()->get('lang') == 'english')
                                            {{$thirdcat->category_en }}
                                            @else
                                            {{$thirdcat->category_bn}}
                                             @endif
							
							<i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i>
								@if (session()->get('lang') == 'english')
                                            All News
                                            @else
                                            সব খবর 
                                             @endif 
								
								</span></a></div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="top-news">
									<a href="{{URL::to('view-post/'.$thirdcatpost->id.'/'.$slug)}}"><img src=" {{ $thirdcatpost->image}} " alt="Notebook"></a>
									<h4 class="heading-02"><a href="{{URL::to('view-post/'.$thirdcatpost->id.'/'.$slug)}}">
										@if (session()->get('lang') == 'english')
                                            {{$thirdcatpost->title_en  }}
                                            @else
                                            {{$thirdcatpost->title_bn }}
                                             @endif
									</a> </h4>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								@foreach ($thirdcatpostsmall as $row)
								<div class="image-title">
									<a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}"><img src=" {{$row->image}}" alt="Notebook"></a>
									<h4 class="heading-03"><a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}"></a> 
										@if (session()->get('lang') == 'english')
										{{$row->title_en  }}
										@else
										{{$row->title_bn }}
										 @endif
									</h4>
								</div>
								@endforeach
								
								
							</div>
						</div>
					</div>
				</div>


				@php
						$fourthcat = DB::table('categories')->skip(3)->first();
						$fourthcatpost = DB::table('posts')->where('cat_id',$fourthcat->id)->where('bigthumbnail',1)->first();
						$fourthcatpostsmall = DB::table('posts')->where('cat_id',$fourthcat->id)->where('bigthumbnail',null)->limit(3)->get();

					    @endphp

				<div class="col-md-6 col-sm-6">
					<div class="bg-one">
						<div class="cetagory-title-02"><a href="#">
							       @if (session()->get('lang') == 'english')
                                            {{$fourthcat->category_en }}
                                            @else
                                            {{$fourthcat->category_bn}}
                                             @endif
							
							<i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i>
								@if (session()->get('lang') == 'english')
                                            All News
                                            @else
                                            সব খবর 
                                             @endif 
								
								</span></a></div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="top-news">
									<a href="{{URL::to('view-post/'.$fourthcatpost->id.'/'.$slug)}}"><img src=" {{ $fourthcatpost->image}} " alt="Notebook"></a>
									<h4 class="heading-02"><a href="{{URL::to('view-post/'.$fourthcatpost->id.'/'.$slug)}}">
										@if (session()->get('lang') == 'english')
                                            {{$fourthcatpost->title_en  }}
                                            @else
                                            {{$fourthcatpost->title_bn }}
                                             @endif
									</a> </h4>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								@foreach ($fourthcatpostsmall as $row)
								<div class="image-title">
									<a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}"><img src=" {{$row->image}}" alt="Notebook"></a>
									<h4 class="heading-03"><a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}"></a> 
										@if (session()->get('lang') == 'english')
										{{$row->title_en  }}
										@else
										{{$row->title_bn }}
										 @endif
									</h4>
								</div>
								@endforeach
								
								
							</div>
						</div>
					</div>
				</div>
			</div>


			




			<!-- ******* -->


			<div class="row">

				@php
				 $fifthcat = DB::table('categories')->skip(4)->first();
				 $fifthcatpost = DB::table('posts')->where('cat_id',$fifthcat->id)->where('bigthumbnail',1)->first();
				 $fifthcatpostsmall = DB::table('posts')->where('cat_id',$fifthcat->id)->where('bigthumbnail',null)->limit(3)->get();

				 @endphp

		 <div class="col-md-6 col-sm-6">
			 <div class="bg-one">
				 <div class="cetagory-title-02"><a href="#">
							@if (session()->get('lang') == 'english')
									 {{$fifthcat->category_en }}
									 @else
									 {{$fifthcat->category_bn}}
									  @endif
					 
					 <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i>
						 @if (session()->get('lang') == 'english')
									 All News
									 @else
									 সব খবর 
									  @endif 
						 
						 </span></a></div>
				 <div class="row">
					 <div class="col-md-6 col-sm-6">
						 <div class="top-news">
							 <a href="{{URL::to('view-post/'.$fifthcatpost->id.'/'.$slug)}}"><img src=" {{ $fifthcatpost->image}} " alt="Notebook"></a>
							 <h4 class="heading-02"><a href="{{URL::to('view-post/'.$fifthcatpost->id.'/'.$slug)}}">
								 @if (session()->get('lang') == 'english')
									 {{$fifthcatpost->title_en  }}
									 @else
									 {{$fifthcatpost->title_bn }}
									  @endif
							 </a> </h4>
						 </div>
					 </div>
					 <div class="col-md-6 col-sm-6">
						 @foreach ($fifthcatpostsmall as $row)
						 <div class="image-title">
							 <a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}"><img src=" {{$row->image}}" alt="Notebook"></a>
							 <h4 class="heading-03"><a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}"></a> 
								 @if (session()->get('lang') == 'english')
								 {{$row->title_en  }}
								 @else
								 {{$row->title_bn }}
								  @endif
							 </h4>
						 </div>
						 @endforeach
						 
						 
					 </div>
				 </div>
			 </div>
		 </div>


		 @php
				 $sixthcat = DB::table('categories')->skip(5)->first();
				 $sixthcatpost = DB::table('posts')->where('cat_id',$sixthcat->id)->where('bigthumbnail',1)->first();
				 $sixthcatpostsmall = DB::table('posts')->where('cat_id',$sixthcat->id)->where('bigthumbnail',null)->limit(3)->get();

				 @endphp

		 <div class="col-md-6 col-sm-6">
			 <div class="bg-one">
				 <div class="cetagory-title-02"><a href="#">
							@if (session()->get('lang') == 'english')
									 {{$sixthcat->category_en }}
									 @else
									 {{$sixthcat->category_bn}}
									  @endif
					 
					 <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i>
						 @if (session()->get('lang') == 'english')
									 All News
									 @else
									 সব খবর 
									  @endif 
						 
						 </span></a></div>
				 <div class="row">
					 <div class="col-md-6 col-sm-6">
						 <div class="top-news">
							 <a href="{{URL::to('view-post/'.$sixthcatpost->id.'/'.$slug)}}"><img src=" {{ $sixthcatpost->image}} " alt="Notebook"></a>
							 <h4 class="heading-02"><a href="{{URL::to('view-post/'.$sixthcatpost->id.'/'.$slug)}}">
								 @if (session()->get('lang') == 'english')
									 {{$sixthcatpost->title_en  }}
									 @else
									 {{$sixthcatpost->title_bn }}
									  @endif
							 </a> </h4>
						 </div>
					 </div>
					 <div class="col-md-6 col-sm-6">
						 @foreach ($sixthcatpostsmall as $row)
						 <div class="image-title">
							 <a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}"><img src=" {{$row->image}}" alt="Notebook"></a>
							 <h4 class="heading-03"><a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}"></a> 
								 @if (session()->get('lang') == 'english')
								 {{$row->title_en  }}
								 @else
								 {{$row->title_bn }}
								  @endif
							 </h4>
						 </div>
						 @endforeach
						 
						 
					 </div>
				 </div>
			 </div>
		 </div>
	 </div>

			
			<!-- add-start -->	
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="add"><img src="{{ asset('frontend/assets') }}/img/top-ad.jpg" alt="" /></div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="add"><img src="{{ asset('frontend/assets') }}/img/top-ad.jpg" alt="" /></div>
				</div>
			</div><!-- /.add-close -->	
			
		</div>
	</section><!-- /.2nd-news-section-close -->

	<!-- 3rd-news-section-start -->	
	<section class="news-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-9 col-sm-9">
					
					
					<div class="row">
						@php
							$seventhcat = DB::table('categories')->skip(6)->first();
							$seventhcatpost = DB::table('posts')->where('cat_id',$seventhcat->id)->where('bigthumbnail',1)->orderBy('id','DESC')->first();
							$seventhcatpostsmall = DB::table('posts')->where('cat_id',$seventhcat->id)->where('bigthumbnail',null)->orderBy('id','DESC')->limit(3)->get();

						@endphp

                         


						<div class="col-md-6 col-sm-6">
							<div class="bg-one">
								<div class="cetagory-title" >
									        @if (session()->get('lang') == 'english')
                                            {{$seventhcat->category_en }}
                                            @else
                                            {{$seventhcat->category_bn}}
                                             @endif
											 <a href="#">
									    <span>
										@if (session()->get('lang') == 'english')
                                            More
                                            @else
                                            আরও 
                                             @endif
										
										<i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a></div>
								<div class="row">
									<div class="col-md-6 col-sm-6">
										<div class="top-news">
											<a href="{{URL::to('view-post/'.$seventhcatpost->id.'/'.$slug)}}"><img src="{{ $seventhcatpost->image }}" alt="Notebook"></a>
											<h4 class="heading-02" style="height: 80px"><a href="{{URL::to('view-post/'.$seventhcatpost->id.'/'.$slug)}}">
												@if (session()->get('lang') == 'english')
                                            {{$seventhcatpost->title_en  }}
                                            @else
                                            {{$seventhcatpost->title_bn }}
                                             @endif
											</a> </h4>
										</div>
									</div>

									<div class="col-md-6 col-sm-6">
                                        @foreach ($seventhcatpostsmall as $row)

										<div class="image-title">
											<a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}"><img src="{{ $row->image }}" alt="Notebook"></a>
											<h4 class="heading-03" style="height: 80px"><a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}">
												@if (session()->get('lang') == 'english')
                                            {{$row->title_en  }}
                                            @else
                                            {{$row->title_bn }}
                                             @endif
											</a> </h4>
										</div>

										@endforeach			
									</div>
								</div>
							</div>
						</div>
						@php
						$eightthcat = DB::table('categories')->skip(7)->first();
						$eightthcatpost = DB::table('posts')->where('cat_id',$eightthcat->id)->where('bigthumbnail',1)->first();
						$eightthcatpostsmall = DB::table('posts')->where('cat_id',$eightthcat->id)->where('bigthumbnail',null)->limit(3)->get();

					 @endphp
						
						<div class="col-md-6 col-sm-6">
							<div class="bg-one">
								<div class="cetagory-title" >
									        @if (session()->get('lang') == 'english')
                                            {{$eightthcat->category_en }}
                                            @else
                                            {{$eightthcat->category_bn}}
                                             @endif
											 <a href="#">
									    <span>
										@if (session()->get('lang') == 'english')
                                            More
                                            @else
                                            আরও 
                                             @endif
										
										<i class="fa fa-angle-double-right" aria-hidden="true"></i></span></a></div>
								<div class="row">
									<div class="col-md-6 col-sm-6">
										<div class="top-news">
											<a href="{{URL::to('view-post/'.$eightthcatpost->id.'/'.$slug)}}"><img src="{{ $eightthcatpost->image }}" alt="Notebook"></a>
											<h4 class="heading-02" style="height: 80px"><a href="{{URL::to('view-post/'.$eightthcatpost->id.'/'.$slug)}}">
											@if (session()->get('lang') == 'english')
                                            {{$eightthcatpost->title_en  }}
                                            @else
                                            {{$eightthcatpost->title_bn }}
                                             @endif
											</a> </h4>
										</div>
									</div>

									<div class="col-md-6 col-sm-6">
                                        @foreach ($eightthcatpostsmall as $row)

										<div class="image-title">
											<a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}"><img src="{{ $row->image }}" alt="Notebook"></a>
											<h4 class="heading-03" style="height: 80px"><a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}">
												@if (session()->get('lang') == 'english')
                                            {{$row->title_en  }}
                                            @else
                                            {{$row->title_bn }}
                                             @endif
											</a> </h4>
										</div>

										@endforeach			
									</div>
								</div>
							</div>
						</div>


						
					</div>
					<!-- ******* -->
					<br />

					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="add"><img src="{{ asset('frontend/assets') }}/img/top-ad.jpg" alt="" /></div>
						</div>
						<div class="col-md-6 col-sm-6">
							<div class="add"><img src="{{ asset('frontend/assets') }}/img/top-ad.jpg" alt="" /></div>
						</div>
					</div>

                     @php
						 $cointrybigpost = DB::table('posts')->whereNotNull('dist_id')->orderBy('id','DESC')->first();
						 $countryfirst3 = DB::table('posts')->whereNotNull('dist_id')->skip(1)->orderBy('id','DESC')->limit(3)->get();
						 $countrysecond3 = DB::table('posts')->whereNotNull('dist_id')->skip(3)->orderBy('id','DESC')->limit(3)->get();
					 @endphp
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="cetagory-title-02"><a href="#">
								
								@if (session()->get('lang') == 'english')
                                            All Over The Country
                                            @else
                                            সারাদেশে
                                             @endif
								 
								 <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i> সব খবর  </span></a></div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="bg-gray">
								<div class="top-news">
									<a href="{{URL::to('view-post/'.$cointrybigpost->id.'/'.$slug)}}"><img src="{{ $cointrybigpost->image }}" alt="Notebook"></a>
									<h4 class="heading-02"><a href="{{URL::to('view-post/'.$cointrybigpost->id.'/'.$slug)}}">
										@if (session()->get('lang') == 'english')
                                            {{$cointrybigpost->title_en}}
                                            @else
                                            {{$cointrybigpost->title_bn}}
                                             @endif
									</a> </h4>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">

							           @foreach ($countryfirst3 as $row)

										<div class="image-title">
											<a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}"><img src="{{ $row->image }}" alt="Notebook"></a>
											<h4 class="heading-03" style="height: 80px"><a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}">
												@if (session()->get('lang') == 'english')
                                            {{$row->title_en  }}
                                            @else
                                            {{$row->title_bn }}
                                             @endif
											</a> </h4>
										</div>

										@endforeach	

						</div>
						<div class="col-md-4 col-sm-4">
							@foreach ($countrysecond3 as $row)

							<div class="image-title">
								<a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}"><img src="{{ $row->image }}" alt="Notebook"></a>
								<h4 class="heading-03" style="height: 80px"><a href="{{URL::to('view-post/'.$row->id.'/'.$slug)}}">
								@if (session()->get('lang') == 'english')
								{{$row->title_en  }}
								@else
								{{$row->title_bn }}
								 @endif
								</a> </h4>
							</div>

							@endforeach	
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="sidebar-add">
								<img src="{{ asset('frontend/assets') }}/img/top-ad.jpg" alt="" />
							</div>
						</div>
					</div><!-- /.add-close -->	


				</div>

				@php
					$latest = DB::table('posts')->orderBy('id','DESC')->limit(8)->get();
					$fevarites = DB::table('posts')->orderBy('id','DESC')->inRandomOrder()->limit(8)->get();
					$hightsee = DB::table('posts')->orderBy('id','ASC')->inRandomOrder()->limit(8)->get();
				@endphp
				<div class="col-md-3 col-sm-3">
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

					@php
					$prayer = DB::table('namaz')->first();	
					@endphp
					<!-- Namaj Times -->
					<div class="cetagory-title-03">
						@if (session()->get('lang')== 'english')
							Prayer Time
						@else
							নামাজের সময়সূচি 
						@endif
						
					</div>
					<table class="table">
						<tr>
							<th>
						@if (session()->get('lang')== 'english')
							Fazar
						@else
						    ফজর	
						@endif
							</th>
							<th>{{$prayer->fajar}}</th>
						</tr>
						<tr>
							<th>
								@if (session()->get('lang')== 'english')
							Johor
						@else
						যোহর				
						@endif
							</th>
							<th>{{$prayer->johor}}</th>
						</tr>
						<tr>
							<th>
								@if (session()->get('lang')== 'english')
								ashor
						@else
						আছর	
						@endif
							</th>
							<th>{{$prayer->ashor}}</th>
						</tr>
						<tr>
							<th>
								@if (session()->get('lang')== 'english')
								magrib
						@else
						মাগরিব	
						@endif
							</th>
							<th>{{$prayer->magrib}}</th>
						</tr>
						<tr>
							<th>
								@if (session()->get('lang')== 'english')
								esha
						@else
						ইশা	
						@endif
							</th>
							<th>{{$prayer->esha}}</th>
						</tr>
						<tr>
							<th>
								@if (session()->get('lang')== 'english')
								jummah
						@else
						জুম্মা
						@endif
							</th>
							<th>{{$prayer->jummah}}</th>
						</tr>
					</table>
					<!-- Namaj Times -->
					<div class="cetagory-title-03">পুরানো সংবাদ  </div>
					<form action="" method="post">
						<div class="old-news-date">
						   <input type="text" name="from" placeholder="From Date" required="">
						   <input type="text" name="" placeholder="To Date">			
						</div>
						<div class="old-date-button">
							<input type="submit" value="খুজুন ">
						</div>
				   </form>
				   <!-- news -->
				   <br><br><br><br><br>
				   <div class="cetagory-title-04">
					@if (session()->get('lang') == 'english')
					Importent Website 
					@else
					গুরুত্বপূর্ণ ওয়েবসাইট
					@endif
					  @php
						  $website = DB::table('websites')->get();
					  @endphp
					</div>
				   <div class="">

				   	@foreach ($website as $row)
					   <div class="news-title-02">
						<h4 class="heading-03"><a href="{{$row->website_link}}" target="_blank"><i class="fa fa-check" aria-hidden="true"></i>
						 @if (session()->get('lang') == 'english')
						 {{$row->website_name}}
						 @else
						 {{$row->website_name_en}}
						 @endif
						 </a>
					 </h4>
					</div>
					@endforeach
				   	
				   </div>

				</div>
			</div>
		</div>
	</section><!-- /.3rd-news-section-close -->
	


	


	


	<!-- gallery-section-start -->	
	<section class="news-section">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8 col-sm-7">
					<div class="gallery_cetagory-title">

						@if (session()->get('lang') == 'english')
						Photo Gallery
						@else
						ফটো গ্যালারি
						@endif
						 
						 
						 </div>
						 @php
							 $photobig = DB::table('photos')->where('type',1)->orderBy('id','DESC')->first();
							 $photosmall = DB::table('photos')->where('type',0)->orderBy('id','DESC')->limit(5)->get();
						 @endphp

					<div class="row">
	                    <div class="col-md-8 col-sm-8">
	                        <div class="photo_screen">
	                            <div class="myPhotos" style="width:100%">
                                      <img src="{{$photobig->photo }}"  alt="Avatar">
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-4 col-sm-4">
	                        <div class="photo_list_bg">
	                            
	                            <div class="photo_img photo_border active">
	                         @foreach ($photosmall as $row)

							 <div class="image-title">
								<a href="#"><img src="{{ $row->photo }}" alt="Notebook"></a>
								<h4 class="heading-03" style="height: 80px"><a href="#">
									{{$row->title}}
								</a> </h4>
							  </div>

							 @endforeach	
	                            </div>

	                            

	                        </div>
	                    </div>
	                </div>

	                <!--=======================================
                    Video Gallery clickable jquary  start
                ========================================-->

                            <script>
                                    var slideIndex = 1;
                                    showDivs(slideIndex);

                                    function plusDivs(n) {
                                      showDivs(slideIndex += n);
                                    }

                                    function currentDiv(n) {
                                      showDivs(slideIndex = n);
                                    }

                                    function showDivs(n) {
                                      var i;
                                      var x = document.getElementsByClassName("myPhotos");
                                      var dots = document.getElementsByClassName("demo");
                                      if (n > x.length) {slideIndex = 1}
                                      if (n < 1) {slideIndex = x.length}
                                      for (i = 0; i < x.length; i++) {
                                         x[i].style.display = "none";
                                      }
                                      for (i = 0; i < dots.length; i++) {
                                         dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
                                      }
                                      x[slideIndex-1].style.display = "block";
                                      dots[slideIndex-1].className += " w3-opacity-off";
                                    }
                                </script>

                <!--=======================================
                    Video Gallery clickable  jquary  close
                =========================================-->

				</div>
				<div class="col-md-4 col-sm-5">
					<div class="gallery_cetagory-title"> 
						@if (session()->get('lang') == 'english')
						Video Gallery
						@else
						ভিডিও গ্যালারি
						@endif
					</div>
					@php
					$videobig = DB::table('videos')->where('type',1)->orderBy('id','DESC')->first();
					$videosmall = DB::table('videos')->where('type',0)->orderBy('id','DESC')->limit(5)->get();
				@endphp

					<div class="row">
                        <div class="col-md-12 col-sm-12">
							
                            <div class="video_screen">
                                <div class="myVideos" style="width:100%">
                                    <div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
                                    <iframe width="853" height="480" src="https://www.youtube.com/embed/{{$videobig->embed_code}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                        
                            <div class="gallery_sec owl-carousel">
								@foreach($videosmall as $row)
								<div class="video_image" style="width:100%" onclick="currentDivs(1)">
								<div class="embed-responsive embed-responsive-16by9 embed-responsive-item"> <iframe width="200" height="140" src="https://www.youtube.com/embed/{{ $row-> embed_code}}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								</div>
								</div>
								@endforeach

                                
                            </div>
                        </div>
                    </div>


                    <script>
                        var slideIndex = 1;
                        showDivss(slideIndex);

                        function plusDivs(n) {
                          showDivss(slideIndex += n);
                        }

                        function currentDivs(n) {
                          showDivss(slideIndex = n);
                        }

                        function showDivss(n) {
                          var i;
                          var x = document.getElementsByClassName("myVideos");
                          var dots = document.getElementsByClassName("demo");
                          if (n > x.length) {slideIndex = 1}
                          if (n < 1) {slideIndex = x.length}
                          for (i = 0; i < x.length; i++) {
                             x[i].style.display = "none";
                          }
                          for (i = 0; i < dots.length; i++) {
                             dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
                          }
                          x[slideIndex-1].style.display = "block";
                          dots[slideIndex-1].className += " w3-opacity-off";
                        }
                    </script>

				</div>
			</div>
		</div>
	</section><!-- /.gallery-section-close -->


@endsection