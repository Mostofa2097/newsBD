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

						<div class="col-md-10 col-sm-10">
							<div class="lead-news">
								<div class="service-img"><a href="#"><img src="{{$firstsectionbig->image  }}" alt="Notebook"></a></div>
								<div class="content">
								<h4 class="lead-heading-01"><a href="#">
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
								<div class="col-md-3 col-sm-3">
									<div class="top-news">
										<a href="#"><img src="{{ $row->image}}" alt="Notebook"></a>
										<h4 class="heading-02" style="height: 80px"><a href="#">
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
							$firstcat = DB::table('categories')->first();
							$firstcatpost = DB::table('posts')->where('cat_id',$firstcat->id)->where('bigthumbnail',1)->first();
							$firstcatpostsmall = DB::table('posts')->where('cat_id',$firstcat->id)->where('bigthumbnail',null)->limit(3)->get();

						@endphp
						<div class="col-md-6 col-sm-6">
							<div class="bg-one">
								<div class="cetagory-title" >
									        @if (session()->get('lang') == 'english')
                                            {{$firstcat->category_en }}
                                            @else
                                            {{$firstcat->category_bn}}
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
											<a href="#"><img src="{{ $firstcatpost->image }}" alt="Notebook"></a>
											<h4 class="heading-02" style="height: 80px"><a href="#">
												@if (session()->get('lang') == 'english')
                                            {{$firstcatpost->title_en  }}
                                            @else
                                            {{$firstcatpost->title_bn }}
                                             @endif
											</a> </h4>
										</div>
									</div>

									<div class="col-md-6 col-sm-6">
                                        @foreach ($firstcatpostsmall as $row)

										<div class="image-title">
											<a href="#"><img src="{{ $row->image }}" alt="Notebook"></a>
											<h4 class="heading-03" style="height: 80px"><a href="#">
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
								<div class="cetagory-title"><a href="#">
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

									<div class="row">
									<div class="col-md-6 col-sm-6">
										<div class="top-news">
											<a href="#"><img src="{{ $scencecatpost->image }}" alt="Notebook"></a>
											<h4 class="heading-02" style="height: 80px"><a href="#">
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
											<a href="#"><img src="{{ $row->image }}" alt="Notebook"></a>
											<h4 class="heading-03" style="height: 80px"><a href="#">
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
				<div class="col-md-6 col-sm-6">
					<div class="bg-one">
						<div class="cetagory-title-02"><a href="#">খেলাধুলা <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i> সব খবর  </span></a></div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="top-news">
									<a href="#"><img src="{{ asset('frontend/assets') }}/img/news.jpg" alt="Notebook"></a>
									<h4 class="heading-02"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="image-title">
									<a href="#"><img src="{{ asset('frontend/assets') }}/img/news.jpg" alt="Notebook"></a>
									<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
								</div>
								<div class="image-title">
									<a href="#"><img src="{{ asset('frontend/assets') }}/img/news.jpg" alt="Notebook"></a>
									<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
								</div>
								<div class="image-title">
									<a href="#"><img src="{{ asset('frontend/assets') }}/img/news.jpg" alt="Notebook"></a>
									<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="bg-one">
						<div class="cetagory-title-02"><a href="#">খেলাধুলা <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i> সব খবর  </span></a></div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="top-news">
									<a href="#"><img src="{{ asset('frontend/assets') }}/img/news.jpg" alt="Notebook"></a>
									<h4 class="heading-02"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="image-title">
									<a href="#"><img src="{{ asset('frontend/assets') }}/img/news.jpg" alt="Notebook"></a>
									<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
								</div>
								<div class="image-title">
									<a href="#"><img src="{{ asset('frontend/assets') }}/img/news.jpg" alt="Notebook"></a>
									<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
								</div>
								<div class="image-title">
									<a href="#"><img src="{{ asset('frontend/assets') }}/img/news.jpg" alt="Notebook"></a>
									<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- ******* -->
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="bg-one">
						<div class="cetagory-title-02"><a href="#">খেলাধুলা <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i> সব খবর  </span></a></div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="top-news">
									<a href="#"><img src="{{ asset('frontend/assets') }}/img/news.jpg" alt="Notebook"></a>
									<h4 class="heading-02"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="image-title">
									<a href="#"><img src="{{ asset('frontend/assets') }}/img/news.jpg" alt="Notebook"></a>
									<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
								</div>
								<div class="image-title">
									<a href="#"><img src="{{ asset('frontend/assets') }}/img/news.jpg" alt="Notebook"></a>
									<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
								</div>
								<div class="image-title">
									<a href="#"><img src="{{ asset('frontend/assets') }}/img/news.jpg" alt="Notebook"></a>
									<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="bg-one">
						<div class="cetagory-title-02"><a href="#">খেলাধুলা <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i> সব খবর  </span></a></div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
								<div class="top-news">
									<a href="#"><img src="{{ asset('frontend/assets') }}/img/news.jpg" alt="Notebook"></a>
									<h4 class="heading-02"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
								</div>
							</div>
							<div class="col-md-6 col-sm-6">
								<div class="image-title">
									<a href="#"><img src="{{ asset('frontend/assets') }}/img/news.jpg" alt="Notebook"></a>
									<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
								</div>
								<div class="image-title">
									<a href="#"><img src="{{ asset('frontend/assets') }}/img/news.jpg" alt="Notebook"></a>
									<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
								</div>
								<div class="image-title">
									<a href="#"><img src="{{ asset('frontend/assets') }}/img/news.jpg" alt="Notebook"></a>
									<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
								</div>
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
					<div class="cetagory-title-02"><a href="#">সারাদেশে  <i class="fa fa-angle-right" aria-hidden="true"></i> all district news tab here <span><i class="fa fa-plus" aria-hidden="true"></i> সব খবর  </span></a></div>
					
					<div class="row">
						<div class="col-md-4 col-sm-4">
							<div class="top-news">
								<a href="#"><img src="{{ asset('frontend/assets') }}/img/news.jpg" alt="Notebook"></a>
								<h4 class="heading-02"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="image-title">
								<a href="#"><img src="{{ asset('frontend/assets') }}/img/news.jpg" alt="Notebook"></a>
								<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
							</div>
							<div class="image-title">
								<a href="#"><img src="{{ asset('frontend/assets') }}/img/news.jpg" alt="Notebook"></a>
								<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
							</div>
							<div class="image-title">
								<a href="#"><img src="{{ asset('frontend/assets') }}/img/news.jpg" alt="Notebook"></a>
								<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="image-title">
								<a href="#"><img src="{{ asset('frontend/assets') }}/img/news.jpg" alt="Notebook"></a>
								<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
							</div>
							<div class="image-title">
								<a href="#"><img src="{{ asset('frontend/assets') }}/img/news.jpg" alt="Notebook"></a>
								<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
							</div>
							<div class="image-title">
								<a href="#"><img src="{{ asset('frontend/assets') }}/img/news.jpg" alt="Notebook"></a>
								<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
							</div>
						</div>
					</div>
					<!-- ******* -->
					<br />
					<div class="row">
						<div class="col-md-12 col-sm-12">
							<div class="cetagory-title-02"><a href="#">সারাদেশে  <i class="fa fa-angle-right" aria-hidden="true"></i> <span><i class="fa fa-plus" aria-hidden="true"></i> সব খবর  </span></a></div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="bg-gray">
								<div class="top-news">
									<a href="#"><img src="{{ asset('frontend/assets') }}/img/news.jpg" alt="Notebook"></a>
									<h4 class="heading-02"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="news-title">
								<a href="#">রোহিঙ্গা সংকট নিয়ে দ্বিচারিতা সহ্য করা হবে না : কাদের</a>
							</div>
							<div class="news-title">
								<a href="#">রোহিঙ্গা সংকট নিয়ে দ্বিচারিতা সহ্য করা হবে না : কাদের</a>
							</div>
							<div class="news-title">
								<a href="#">রোহিঙ্গা সংকট নিয়ে দ্বিচারিতা সহ্য করা হবে না : কাদের</a>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="news-title">
								<a href="#">রোহিঙ্গা সংকট নিয়ে দ্বিচারিতা সহ্য করা হবে না : কাদের</a>
							</div>
							<div class="news-title">
								<a href="#">রোহিঙ্গা সংকট নিয়ে দ্বিচারিতা সহ্য করা হবে না : কাদের</a>
							</div>
							<div class="news-title">
								<a href="#">রোহিঙ্গা সংকট নিয়ে দ্বিচারিতা সহ্য করা হবে না : কাদের</a>
							</div>
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
				<div class="col-md-3 col-sm-3">
					<div class="tab-header">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs nav-justified" role="tablist">
							<li role="presentation" class="active"><a href="#tab21" aria-controls="tab21" role="tab" data-toggle="tab" aria-expanded="false">সর্বশেষ</a></li>
							<li role="presentation" ><a href="#tab22" aria-controls="tab22" role="tab" data-toggle="tab" aria-expanded="true">জনপ্রিয়</a></li>
							<li role="presentation" ><a href="#tab23" aria-controls="tab23" role="tab" data-toggle="tab" aria-expanded="true">জনপ্রিয়1</a></li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content ">
							<div role="tabpanel" class="tab-pane in active" id="tab21">
								<div class="news-titletab">
									<div class="news-title-02">
										<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
									</div>
									<div class="news-title-02">
										<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
									</div>
									<div class="news-title-02">
										<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
									</div>
									<div class="news-title-02">
										<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
									</div>
									<div class="news-title-02">
										<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
									</div>
									<div class="news-title-02">
										<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
									</div>
									<div class="news-title-02">
										<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
									</div>
								</div>
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tab22">
								<div class="news-titletab">
									<div class="news-title-02">
										<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
									</div>
									<div class="news-title-02">
										<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
									</div>
									<div class="news-title-02">
										<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
									</div>
									<div class="news-title-02">
										<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
									</div>
									<div class="news-title-02">
										<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
									</div>
									<div class="news-title-02">
										<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
									</div>
									<div class="news-title-02">
										<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
									</div>
								</div>                                          
							</div>
							<div role="tabpanel" class="tab-pane fade" id="tab23">	
								<div class="news-titletab">
									<div class="news-title-02">
										<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
									</div>
									<div class="news-title-02">
										<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
									</div>
									<div class="news-title-02">
										<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
									</div>
									<div class="news-title-02">
										<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
									</div>
									<div class="news-title-02">
										<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
									</div>
									<div class="news-title-02">
										<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
									</div>
									<div class="news-title-02">
										<h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
									</div>
								</div>						                                          
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
					<div class="gallery_cetagory-title"> Photo Gallery </div>

					<div class="row">
	                    <div class="col-md-8 col-sm-8">
	                        <div class="photo_screen">
	                            <div class="myPhotos" style="width:100%">
                                      <img src="{{ asset('frontend/assets') }}/img/news.jpg"  alt="Avatar">
	                            </div>
	                        </div>
	                    </div>
	                    <div class="col-md-4 col-sm-4">
	                        <div class="photo_list_bg">
	                            
	                            <div class="photo_img photo_border active">
	                                <img src="{{ asset('frontend/assets') }}/img/news.jpg" alt="image" onclick="currentDiv(1)">
	                                <div class="heading-03">
	                                    ভারতে সিনেমা হলে জাতীয় সঙ্গীত বাজানো আর বাধ্যতামূলক নয়।
	                                </div>
	                            </div>

	                            <div class="photo_img photo_border">
	                                <img src="{{ asset('frontend/assets') }}/img/news.jpg" alt="image" onclick="currentDiv(1)">
	                                <div class="heading-03">
	                                    ভারতে সিনেমা হলে জাতীয় সঙ্গীত বাজানো আর বাধ্যতামূলক নয়।
	                                </div>
	                            </div>

	                            <div class="photo_img photo_border">
	                                <img src="{{ asset('frontend/assets') }}/img/news.jpg" alt="image" onclick="currentDiv(1)">
	                                <div class="heading-03">
	                                    ভারতে সিনেমা হলে জাতীয় সঙ্গীত বাজানো আর বাধ্যতামূলক নয়।
	                                </div>
	                            </div>

	                            <div class="photo_img photo_border">
	                                <img src="{{ asset('frontend/assets') }}/img/news.jpg" alt="image" onclick="currentDiv(1)">
	                                <div class="heading-03">
	                                    ভারতে সিনেমা হলে জাতীয় সঙ্গীত বাজানো আর বাধ্যতামূলক নয়।
	                                </div>
	                            </div>

	                            <div class="photo_img photo_border">
	                                <img src="{{ asset('frontend/assets') }}/img/news.jpg" alt="image" onclick="currentDiv(1)">
	                                <div class="heading-03">
	                                    ভারতে সিনেমা হলে জাতীয় সঙ্গীত বাজানো আর বাধ্যতামূলক নয়।
	                                </div>
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
					<div class="gallery_cetagory-title"> photo Gallery </div>

					<div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div class="video_screen">
                                <div class="myVideos" style="width:100%">
                                    <div class="embed-responsive embed-responsive-16by9 embed-responsive-item">
                                    <iframe width="853" height="480" src="https://www.youtube.com/embed/AWM8164ksVY?list=RDAWM8164ksVY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                        
                            <div class="gallery_sec owl-carousel">

                                <div class="video_image" style="width:100%" onclick="currentDivs(1)">
                                    <img src="{{ asset('frontend/assets') }}/img/news.jpg"  alt="Avatar">
                                    <div class="heading-03">
                                        <div class="content_padding">
                                            রোহিঙ্গা সংকট আবাদে লাভবান কৃষকেরা   
                                        </div>
                                    </div>
                                </div>

                                <div class="video_image" style="width:100%" onclick="currentDivs(1)">
                                    <img src="{{ asset('frontend/assets') }}/img/news.jpg"  alt="Avatar">
                                    <div class="heading-03">
                                        <div class="content_padding">
                                            রোহিঙ্গা সংকট আবাদে লাভবান কৃষকেরা   
                                        </div>
                                    </div>
                                </div>

                                <div class="video_image" style="width:100%" onclick="currentDivs(1)">
                                    <img src="{{ asset('frontend/assets') }}/img/news.jpg"  alt="Avatar">
                                    <div class="heading-03">
                                        <div class="content_padding">
                                            রোহিঙ্গা সংকট আবাদে লাভবান কৃষকেরা   
                                        </div>
                                    </div>
                                </div>

                                <div class="video_image" style="width:100%" onclick="currentDivs(1)">
                                    <img src="{{ asset('frontend/assets') }}/img/news.jpg"  alt="Avatar">
                                    <div class="heading-03">
                                        <div class="content_padding">
                                            রোহিঙ্গা সংকট আবাদে লাভবান কৃষকেরা   
                                        </div>
                                    </div>
                                </div>

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