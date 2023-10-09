@extends('layouts.front')
@section('content')



<section class="single-page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">   
                   <li><a href="{{URL::to('/')}}"><i class="fa fa-home"></i></a></li>					   
                    <li><a href="#">{{$post->category_bn}}</a></li>
                    <li><a href="#">{{$post->subcategory_bn}}</a></li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12"> 											
                <header class="headline-header margin-bottom-10">
                    <h1 class="headline">‘পরিস্থিতি খুব খারাপ হলে দিনে সর্বোচ্চ ৬৫০০০ মানুষ সংক্রমিত হতে পারে’</h1>
                </header>
     
     
             <div class="article-info margin-bottom-20">
              <div class="row">
                    <div class="col-md-6 col-sm-6"> 
                     <ul class="list-inline">
                     
                     
                     <li>অন্যদৃষ্টি  অনলাইন </li>     <li><i class="fa fa-clock-o"></i> ০৯ মে ২০২০, ১০:৪৯</li>
                     </ul>
                    
                    </div>
                    <div class="col-md-6 col-sm-6 pull-right"> 						
                        <ul class="social-nav">
                            <li><a href="" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent('#'),'facebook-share-dialog','width=626,height=436'); return false;" target="_blank" title="Facebook" rel="nofollow" class="facebook"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="" onclick="javascript:window.open('https://twitter.com/share?text=‘#'); return false;" title="Twitter" rel="nofollow" class="twitter"><i class="fa fa-twitter"></i></a></li>
                            <li><a target="_blank" href="" onclick="window.open('https://plus.google.com/share?url=#'); return false;" title="Google plus" rel="nofollow" class="google"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" target="_blank" title="Print" rel="nofollow" class="print"><i class="fa fa-print"></i></a></li>
                    
                        </ul>						   
                    </div>						
                </div>				 
             </div>				
        </div>
      </div>
      <!-- ******** -->
      <div class="row">
        <div class="col-md-8 col-sm-8">
            <div class="single-news">
                <img src="assets/img/news.jpg" alt="" />
                <h4 class="caption"> বাংলাদেশে করোনাভাইরাসের পরীক্ষা ব্যাপকহারে করা এবং চিকিৎসা ব্যবস্থা নিয়ে প্রশ্ন থাকছেই। - ছবি : বিবিসি </h4>
                <p>বিশেষজ্ঞরা বলেছেন, লকডাউন ভেঙে পড়ায় হাজার হাজার মানুষের সংক্রমণের ঝুঁকি তৈরি হয়েছে। সেই পরিস্থিতি সামাল দেয়ার জন্য চিকিৎসার পর্যাপ্ত ব্যবস্থা করাও সম্ভব হয়নি বলে তারা মনে করেন।
                তাহলে বাংলাদেশের জন্য এখন উপায় কী আছে বা কোন পথ খোলা আছে-এসব প্রশ্ন এখন আলোচনায় আসছে।
                সীমিত পরিসরের বিষয়টি কথাতেই রয়ে গেছে। বাস্তবতা হলো, গার্মেন্টস মালিকরা প্রায় সবাই তাদের কারখানা চালু করেছেন।
                কারখানাগুলো খোলার সময় দেশের নানা প্রান্ত থেকে হাজার হাজার শ্রমিকের ঢাকায় ছুটে আসার সেই অভাবনীয় দৃশ্য নিয়ে অনেক আলোচনা হয়েছে।
                এখন অনেক কারখানায় শ্রমিকের করোনাভাইরাস সংক্রমণের ঝুঁকির প্রশ্ন উঠেছে।
                কিন্তু গার্মেন্টস খোলার মধ্যেই সরকারের চিন্তা সীমাবদ্ধ থাকেনি।
                একের পর এক শিল্পকারখানা এবং দোকান বা ব্যবসায়িক প্রতিষ্ঠান খুলে দিয়ে দ্রুততার সাথে নানামুখী অর্থনৈতিক কর্মকান্ড শুরু করার একটা চেষ্টা দেখা যাচ্ছে।
                সরকারি গবেষণা সংস্থা বিআইডিএস এর সিনিয়র গবেষক নাজনীন আহমেদ বলেছেন, এখন অর্থনৈতিক কর্মকাণ্ড শুরু করা ছাড়া বিকল্প নেই। তবে তাড়াহুড়ো না করে পরিকল্পনার প্রয়োজন ছিল বলে তিনি মনে করেন।</p>
            </div>
            <!-- ********* -->
            <div class="row">
                <div class="col-md-12"><h2 class="heading">আরো সংবাদ</h2></div>
                <div class="col-md-4 col-sm-4">
                    <div class="top-news sng-border-btm">
                        <a href="#"><img src="assets/img/news.jpg" alt="Notebook"></a>
                        <h4 class="heading-02"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="top-news sng-border-btm">
                        <a href="#"><img src="assets/img/news.jpg" alt="Notebook"></a>
                        <h4 class="heading-02"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="top-news sng-border-btm">
                        <a href="#"><img src="assets/img/news.jpg" alt="Notebook"></a>
                        <h4 class="heading-02"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <div class="top-news">
                        <a href="#"><img src="assets/img/news.jpg" alt="Notebook"></a>
                        <h4 class="heading-02"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="top-news">
                        <a href="#"><img src="assets/img/news.jpg" alt="Notebook"></a>
                        <h4 class="heading-02"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4">
                    <div class="top-news">
                        <a href="#"><img src="assets/img/news.jpg" alt="Notebook"></a>
                        <h4 class="heading-02"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4">
            <!-- add-start -->	
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="sidebar-add"><img src="assets/img/add_01.jpg" alt="" /></div>
                    </div>
                </div><!-- /.add-close -->
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
                            </div><div class="news-title-02">
                                <h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
                            </div><div class="news-title-02">
                                <h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
                            </div><div class="news-title-02">
                                <h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
                            </div><div class="news-title-02">
                                <h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
                            </div><div class="news-title-02">
                                <h4 class="heading-03"><a href="#">লালমনিরহাটে আওয়ামী লীগ কার্যালয়ে ভাঙচুর</a> </h4>
                            </div><div class="news-title-02">
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