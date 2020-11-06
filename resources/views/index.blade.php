				@extends('master')
				@section('content')
				<script type="text/javascript">
				try {
					if("undefined" != typeof localStorage) {
						var header, mnIsDark = !1,
							tnIsDark = !1;
						(header = document.getElementById("theme-header")) && ((header = header.classList).contains("main-nav-default-dark") && (mnIsDark = !0), header.contains("top-nav-default-dark") && (tnIsDark = !0), "dark" == tieSkin ? (header.add("main-nav-dark", "top-nav-dark"), header.remove("main-nav-light", "top-nav-light")) : "light" == tieSkin && (mnIsDark || (header.remove("main-nav-dark"), header.add("main-nav-light")), tnIsDark || (header.remove("top-nav-dark"), header.add("top-nav-light"))))
					}
				} catch(a) {
					console.log(a)
				}
				</script>
				<link rel='stylesheet' id='tie-css-styles-css' href="wp-content/themes/jannah/assets/css/style.min.css" type='text/css' media='all' />
				<script>
				console.log('Style tie-css-styles')
				</script>
				<div id="tiepost-131-section-3286" class="section-wrapper container-full without-background">
					<div class="section-item is-first-section full-width">
						<div class="container">
							<div class="tie-row main-content-row">
								<div class="main-content tie-col-md-12">
									<section id="tie-block_1354" class="slider-area mag-box">

										<div class="slider-area-inner">
											<div id="tie-main-slider-16-block_1354" class="tie-main-slider main-slider grid-4-big-first-half-second boxed-slider grid-slider-wrapper tie-slick-slider-wrapper" data-slider-id="16" data-speed="3000">
												<div class="main-slider-inner">
													<div class="containerblock_1354">
														<div class="tie-slick-slider">
															<ul class="tie-slider-nav"></ul>
															<div class="slide">

																@foreach ($post as $po)
																	<div style="background-image: url(https://www.prashasanplusnews.com/public1/img/post/<?php echo ($po->image); ?>)" class="grid-item slide-id-1806 tie-slide-1 tie-standard">
																		<a href="2018/10/27/after-all-is-said-and-done-more-is-done/index.html" class="all-over-thumb-link" aria-label="After all is said and done, more is done"></a>
																		<div class="thumb-overlay"><span class="post-cat-wrap"><a class="post-cat tie-cat-6" href="category/life-style/index.html">News</a></span>
																			<div class="thumb-content">
																				<div class="thumb-meta">
																					<div class="post-meta clearfix">
																						<span class="author-meta single-author no-avatars"><span class="meta-item meta-author-wrapper"><span class="meta-author"><a href="members/admin/index.html" class="author-name tie-icon" title="Kartikey">{{$po->post_by}}</a></span></span>
																						</span><span class="date meta-item tie-icon">{{date('M d, Y', strtotime($po->date))}}</span>
																						<!-- <div class="tie-alignright">
																							<span class="meta-comment tie-icon meta-item fa-before">0</span><span class="meta-views meta-item very-hot"><span class="tie-icon-fire" aria-hidden="true"></span> 36,359 </span>
																						</div> -->
																					</div>
																				</div>
																				<h2 class="thumb-title">
																					<a href="{{url()->current()}}{{($mm ?? '')}}/{{$po->subcat}}/{{$po->url}}">
																						{{$po->title}}
																					</a>
																				</h2>
																			</div>
																		</div>
																	</div>
																@endforeach

																@foreach ($sport as $sp)
																	<div style="background-image: url(https://www.prashasanplusnews.com/public1/img/post/<?php echo ($sp->image); ?>)" class="grid-item slide-id-1959 tie-slide-2 is-trending tie-video">
																		<a href="2016/10/28/success-is-not-a-good-teacher-failure-makes-you-humble/index.html" class="all-over-thumb-link" aria-label="Success is not a good teacher failure makes you humble"></a>
																		<div class="thumb-overlay"><span class="post-cat-wrap"><a class="post-cat tie-cat-84" href="category/world/travel/index.html">Sport</a></span>
																			<div class="thumb-content">
																				<h2 class="thumb-title"><a href="{{url()->current()}}{{$spt ?? ''}}/{{$sp->subcat}}/{{$sp->url}}">
																					{{$sp->title}}
																				</a></h2>
																			</div>
																		</div>
																	</div>
																@endforeach

																@foreach ($vis as $vi)
																	<div style="background-image: url(https://www.prashasanplusnews.com/public1/img/post/<?php echo ($vi->image); ?>)" class="grid-item slide-id-1787 tie-slide-3 is-trending tie-standard">
																		<a href="2016/10/25/budget-issues-force-2017-tour-to-be-cancelled/index.html" class="all-over-thumb-link" aria-label="Budget issues force the Tour to be cancelled"></a>
																		<div class="thumb-overlay"><span class="post-cat-wrap"><a class="post-cat tie-cat-84" href="category/world/travel/index.html">Analysis</a></span>
																			<div class="thumb-content">
																				<h2 class="thumb-title"><a href="{{url()->current()}}{{$vtt ?? ''}}/{{$vi->subcat}}/{{$vi->url}}">
																					{{$vi->title}}
																				</a></h2>
																			</div>
																		</div>
																	</div>
																@endforeach

																@foreach ($state as $st)
																	<div style="background-image: url(https://www.prashasanplusnews.com/public1/img/post/<?php echo ($st->image); ?>" class="grid-item slide-id-2269 tie-slide-4 tie-video">
																		<a href="2016/10/21/instagrams-big-redesign-goes-live-with-black-and-white-app/index.html" class="all-over-thumb-link" aria-label="Instagram’s big redesign goes live with black-and-white app"></a>
																		<div class="thumb-overlay"><span class="post-cat-wrap"><a class="post-cat tie-cat-64" href="category/technology/index.html">State</a></span>
																			<div class="thumb-content">
																				<h2 class="thumb-title"><a href="https://www.prashasanplusnews.com/<?php echo ($stt ?? ''); ?>/<?php echo ($st->subcat); ?>/<?php echo ($st->url); ?>">{{$st->title}}</a>
																				</h2>
																			</div>
																		</div>
																	</div>
																@endforeach

															</div>
														</div>
													</div>
												</div>
											</div>
										</div>


									</section>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="tiepost-131-section-749" class="section-wrapper container normal-width without-background">
					<div class="section-item sidebar-right has-sidebar">
						<div class="container-normal">
							<div class="tie-row main-content-row">
								<div class="main-content tie-col-md-8 tie-col-xs-12" role="main">
									<div id="tie-block_3151" class="mag-box big-post-left-box big-thumb-left-box first-post-gradient has-custom-color" data-current="1">
										<div class="container-wrapper">
											<div class="mag-box-title the-global-title">
												<h3> Trending News </h3>
												<div class="tie-alignright">
													<div class="mag-box-options">
														<ul class="mag-box-filter-links is-flex-tabs">
															
															<!-- <li><a href="#" class="block-ajax-term block-all-term active">All</a></li> -->
															@foreach ($pol as $pl)
																@foreach ($master as $ct)
																	
																@endforeach
															@endforeach
															<li><a href="#" data-id="48" class="block-ajax-term">{{$pl->post_type}}</a></li>
															
															<li><a href="#" data-id="6" class="block-ajax-term">{{$po->post_type}}</a></li>

															<li><a href="#" data-id="139" class="block-ajax-term">{{$sp->post_type}}</a></li>

															<li><a href="#" data-id="8" class="block-ajax-term">{{$st->post_type}}</a></li>
															
															<!-- <li><a href="#" data-id="140" class="block-ajax-term">Swimming</a></li>
															<li><a href="#" data-id="64" class="block-ajax-term">Technology</a></li>
															<li><a href="#" data-id="84" class="block-ajax-term">Travel</a></li>
															<li><a href="#" data-id="1" class="block-ajax-term">World</a></li> -->
														</ul>
													</div>
												</div>
											</div>
											<div class="mag-box-container clearfix">
												<ul class="posts-items posts-list-container">
													@foreach ($pol as $pl)
													<li class="post-item is-trending tie-standard">
														<div class="big-thumb-left-box-inner" data-lazy-bg="https://www.prashasanplusnews.com/public1/img/post/<?php echo ($pl->image); ?>"> <a aria-label="Not who has much is rich, but who gives much" href="2016/10/20/not-who-has-much-is-rich-but-who-gives-much/index.html" class="post-thumb"><span class="trending-post tie-icon-bolt trending-lg" aria-hidden="true"></span></a>
															<div class="post-overlay">
																<div class="post-content"> <a class="post-cat tie-cat-75" href="category/world/creative/index.html">Politics</a>
																	<h2 class="post-title"><a href="2016/10/20/not-who-has-much-is-rich-but-who-gives-much/index.html">{{$pl->title}}</a></h2>
																	<div class="thumb-meta">
																		<div class="post-meta clearfix"><span class="author-meta single-author no-avatars"><span class="meta-item meta-author-wrapper"><span class="meta-author"><a href="members/admin/index.html" class="author-name tie-icon" title="Kartikey">{{$pl->post_by}}</a></span></span>
																			</span><span class="date meta-item tie-icon">{{date('M d, Y', strtotime($pl->date))}}</span>
																			<div class="tie-alignright"><span class="meta-comment tie-icon meta-item fa-before">0</span><span class="meta-views meta-item very-hot"><span class="tie-icon-fire" aria-hidden="true"></span> 36,359 </span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</li>
													@endforeach
													@foreach ($politics as $pts)
													<li class="post-item tie-standard">
														<a aria-label="The Top 10 Best Computer Speakers in the Market" href="2016/10/19/the-top-10-best-computer-speakers-in-the-market/index.html" class="post-thumb"><img width="220" height="150" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAG4AAABLAQMAAACr9CA9AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABZJREFUOI1jYMADmEe5o9xR7iiXQi4A4BsA388WUyMAAAAASUVORK5CYII=" class="attachment-jannah-image-small size-jannah-image-small lazy-img tie-small-image wp-post-image" alt="Photo of The Top 10 Best Computer Speakers in the Market" loading="lazy" data-src="https://www.prashasanplusnews.com/public1/img/post/<?php echo ($pts->image); ?>" /></a>
														<div class="post-details">
															<div class="post-meta clearfix"><span class="date meta-item tie-icon">{{date('M d, Y', strtotime($pts->date))}}</span></div>
															<h2 class="post-title"><a href="2016/10/19/the-top-10-best-computer-speakers-in-the-market/index.html">{{$pts->title}}</a></h2> </div>
													</li>
													@endforeach
												</ul>
												<div class="clearfix"></div>
											</div>
											<div class="mag-box-container clearfix">
												<ul class="posts-items posts-list-container">
													@foreach ($post as $ns)
													<li class="post-item is-trending tie-standard">
														<div class="big-thumb-left-box-inner" data-lazy-bg="https://www.prashasanplusnews.com/public1/img/post/<?php echo ($ns->image); ?>"> <a aria-label="Not who has much is rich, but who gives much" href="2016/10/20/not-who-has-much-is-rich-but-who-gives-much/index.html" class="post-thumb"><span class="trending-post tie-icon-bolt trending-lg" aria-hidden="true"></span></a>
															<div class="post-overlay">
																<div class="post-content"> <a class="post-cat tie-cat-75" href="category/world/creative/index.html">Politics</a>
																	<h2 class="post-title"><a href="2016/10/20/not-who-has-much-is-rich-but-who-gives-much/index.html">{{$ns->title}}</a></h2>
																	<div class="thumb-meta">
																		<div class="post-meta clearfix"><span class="author-meta single-author no-avatars"><span class="meta-item meta-author-wrapper"><span class="meta-author"><a href="members/admin/index.html" class="author-name tie-icon" title="Kartikey">{{$ns->post_by}}</a></span></span>
																			</span><span class="date meta-item tie-icon">{{date('M d, Y', strtotime($ns->date))}}</span>
																			<div class="tie-alignright"><span class="meta-comment tie-icon meta-item fa-before">0</span><span class="meta-views meta-item very-hot"><span class="tie-icon-fire" aria-hidden="true"></span> 36,359 </span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</li>
													@endforeach
													@foreach ($news as $ne)
													<li class="post-item tie-standard">
														<a aria-label="The Top 10 Best Computer Speakers in the Market" href="2016/10/19/the-top-10-best-computer-speakers-in-the-market/index.html" class="post-thumb"><img width="220" height="150" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAG4AAABLAQMAAACr9CA9AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABZJREFUOI1jYMADmEe5o9xR7iiXQi4A4BsA388WUyMAAAAASUVORK5CYII=" class="attachment-jannah-image-small size-jannah-image-small lazy-img tie-small-image wp-post-image" alt="Photo of The Top 10 Best Computer Speakers in the Market" loading="lazy" data-src="https://www.prashasanplusnews.com/public1/img/post/<?php echo ($ne->image); ?>" /></a>
														<div class="post-details">
															<div class="post-meta clearfix"><span class="date meta-item tie-icon">{{date('M d, Y', strtotime($ne->date))}}</span></div>
															<h2 class="post-title"><a href="2016/10/19/the-top-10-best-computer-speakers-in-the-market/index.html">{{$ne->title}}</a></h2> </div>
													</li>
													@endforeach
												</ul>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<script>
									var js_tie_block_3151 = {
										"order": "latest",
										"source": "id",
										"id": ["48", "6", "139", "8", "140", "64", "84", "1"],
										"number": "6",
										"offset": "5",
										"pagi": "next-prev",
										"excerpt": "true",
										"post_meta": "true",
										"read_more": "true",
										"filters": "true",
										"breaking_effect": "reveal",
										"sub_style": "big-thumb",
										"style": "big-thumb",
										"title_length": "",
										"excerpt_length": "",
										"media_overlay": "",
										"read_more_text": ""
									};
									</script>
									<div id="tie-block_1810" class="mag-box tie-col-sm-6 half-box has-first-big-post has-custom-color first-half-box" data-current="1">
										<div class="container-wrapper">
											<div class="mag-box-title the-global-title">
												<h3> Racing </h3>
												<div class="tie-alignright">
													<div class="mag-box-options">
														<ul class="slider-arrow-nav">
															<li>
																<a class="block-pagination prev-posts pagination-disabled" href="#"> <span class="tie-icon-angle-left" aria-hidden="true"></span> <span class="screen-reader-text">Previous page</span> </a>
															</li>
															<li>
																<a class="block-pagination next-posts" href="#"> <span class="tie-icon-angle-right" aria-hidden="true"></span> <span class="screen-reader-text">Next page</span> </a>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="mag-box-container clearfix">
												<ul class="posts-items posts-list-container">
													<li class="post-item is-trending tie-video"> <a aria-label="Play This Game for Free on Steam This Weekend" href="2016/10/17/play-this-game-for-free-on-steam-this-weekend/index.html" class="post-thumb"><span class="trending-post tie-icon-bolt trending-lg" aria-hidden="true"></span><span class="post-cat-wrap"><span class="post-cat tie-cat-75">Creative</span></span><img width="390" height="220" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAYYAAADcAQMAAABOLJSDAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAACJJREFUaIHtwTEBAAAAwqD1T20ND6AAAAAAAAAAAAAA4N8AKvgAAUFIrrEAAAAASUVORK5CYII=" class="attachment-jannah-image-large size-jannah-image-large lazy-img wp-post-image" alt="Photo of Play This Game for Free on Steam This Weekend" loading="lazy" data-src="wp-content/uploads/sites/8/2016/10/11-1-390x220.jpg" /></a>
														<div class="post-details">
															<div class="post-meta clearfix"><span class="author-meta single-author no-avatars"><span class="meta-item meta-author-wrapper"><span class="meta-author"><a href="members/admin/index.html" class="author-name tie-icon" title="Fouad Badawy">Fouad Badawy</a></span></span>
																</span><span class="date meta-item tie-icon">Oct 17, 2016</span>
																<div class="tie-alignright"><span class="meta-comment tie-icon meta-item fa-before">0</span><span class="meta-views meta-item very-hot"><span class="tie-icon-fire" aria-hidden="true"></span> 17,704 </span>
																</div>
															</div>
															<h2 class="post-title"><a href="2016/10/17/play-this-game-for-free-on-steam-this-weekend/index.html">Play This Game for Free on Steam This Weekend</a></h2>
															<p class="post-excerpt">Stay focused and remember we design the best WordPress News and Magazine Themes. It’s the ones closest to you that&hellip;</p> <a class="more-link button" href="2016/10/17/play-this-game-for-free-on-steam-this-weekend/index.html">Read More &raquo;</a> </div>
													</li>
													<li class="post-item is-trending tie-video">
														<a aria-label="At Value-Focused Hotels, the Free Breakfast Gets Bigger" href="2016/10/16/at-value-focused-hotels-the-free-breakfast-gets-bigger/index.html" class="post-thumb"><img width="220" height="150" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAG4AAABLAQMAAACr9CA9AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABZJREFUOI1jYMADmEe5o9xR7iiXQi4A4BsA388WUyMAAAAASUVORK5CYII=" class="attachment-jannah-image-small size-jannah-image-small lazy-img tie-small-image wp-post-image" alt="Photo of At Value-Focused Hotels, the Free Breakfast Gets Bigger" loading="lazy" data-src="wp-content/uploads/sites/8/2016/10/garrett-parker-1-220x150.jpg" /></a>
														<div class="post-details">
															<div class="post-meta clearfix"><span class="trending-post tie-icon-bolt trending-sm meta-item" aria-hidden="true"></span><span class="date meta-item tie-icon">Oct 16, 2016</span></div>
															<h2 class="post-title"><a href="2016/10/16/at-value-focused-hotels-the-free-breakfast-gets-bigger/index.html">At Value-Focused Hotels, the Free Breakfast Gets Bigger</a></h2> </div>
													</li>
													<li class="post-item tie-video">
														<a aria-label="There May Be No Consoles in the Future, EA Exec Says" href="2016/10/15/there-may-be-no-consoles-in-the-future-ea-exec-says/index.html" class="post-thumb"><img width="220" height="150" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAG4AAABLAQMAAACr9CA9AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABZJREFUOI1jYMADmEe5o9xR7iiXQi4A4BsA388WUyMAAAAASUVORK5CYII=" class="attachment-jannah-image-small size-jannah-image-small lazy-img tie-small-image wp-post-image" alt="Photo of There May Be No Consoles in the Future, EA Exec Says" loading="lazy" data-src="wp-content/uploads/sites/8/2016/10/imag6-min-220x150.jpg" /></a>
														<div class="post-details">
															<div class="post-meta clearfix"><span class="date meta-item tie-icon">Oct 15, 2016</span></div>
															<h2 class="post-title"><a href="2016/10/15/there-may-be-no-consoles-in-the-future-ea-exec-says/index.html">There May Be No Consoles in the Future, EA Exec Says</a></h2> </div>
													</li>
												</ul>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<script>
									var js_tie_block_1810 = {
										"order": "latest",
										"source": "id",
										"id": ["48", "139", "140", "1"],
										"number": "3",
										"offset": "4",
										"pagi": "next-prev",
										"excerpt": "true",
										"excerpt_length": 20,
										"post_meta": "true",
										"read_more": "true",
										"breaking_effect": "reveal",
										"sub_style": "2c",
										"style": "large-first",
										"title_length": "",
										"media_overlay": "",
										"read_more_text": ""
									};
									</script>
									<div id="tie-block_304" class="mag-box tie-col-sm-6 half-box has-first-big-post has-custom-color second-half-box" data-current="1">
										<div class="container-wrapper">
											<div class="mag-box-title the-global-title">
												<h3> LifeStyle </h3>
												<div class="tie-alignright">
													<div class="mag-box-options">
														<ul class="slider-arrow-nav">
															<li>
																<a class="block-pagination prev-posts pagination-disabled" href="#"> <span class="tie-icon-angle-left" aria-hidden="true"></span> <span class="screen-reader-text">Previous page</span> </a>
															</li>
															<li>
																<a class="block-pagination next-posts" href="#"> <span class="tie-icon-angle-right" aria-hidden="true"></span> <span class="screen-reader-text">Next page</span> </a>
															</li>
														</ul>
													</div>
												</div>
											</div>
											<div class="mag-box-container clearfix">
												<ul class="posts-items posts-list-container">
													<li class="post-item is-trending tie-standard"> <a aria-label="Budget issues force the Tour to be cancelled" href="2016/10/25/budget-issues-force-2017-tour-to-be-cancelled/index.html" class="post-thumb"><span class="trending-post tie-icon-bolt trending-lg" aria-hidden="true"></span><span class="post-cat-wrap"><span class="post-cat tie-cat-84">Travel</span></span><img width="390" height="220" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAYYAAADcAQMAAABOLJSDAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAACJJREFUaIHtwTEBAAAAwqD1T20ND6AAAAAAAAAAAAAA4N8AKvgAAUFIrrEAAAAASUVORK5CYII=" class="attachment-jannah-image-large size-jannah-image-large lazy-img wp-post-image" alt="Photo of Budget issues force the Tour to be cancelled" loading="lazy" data-src="wp-content/uploads/sites/8/2016/10/demo-image-2-390x220.jpg" /></a>
														<div class="post-details">
															<div class="post-meta clearfix"><span class="author-meta single-author no-avatars"><span class="meta-item meta-author-wrapper"><span class="meta-author"><a href="members/yahia/index.html" class="author-name tie-icon" title="Yahia Ragae">Yahia Ragae</a></span></span>
																</span><span class="date meta-item tie-icon">Oct 25, 2016</span>
																<div class="tie-alignright"><span class="meta-comment tie-icon meta-item fa-before">0</span><span class="meta-views meta-item very-hot"><span class="tie-icon-fire" aria-hidden="true"></span> 19,082 </span>
																</div>
															</div>
															<h2 class="post-title"><a href="2016/10/25/budget-issues-force-2017-tour-to-be-cancelled/index.html">Budget issues force the Tour to be cancelled</a></h2>
															<p class="post-excerpt">Stay focused and remember we design the best WordPress News and Magazine Themes. It’s the ones closest to you that&hellip;</p> <a class="more-link button" href="2016/10/25/budget-issues-force-2017-tour-to-be-cancelled/index.html">Read More &raquo;</a> </div>
													</li>
													<li class="post-item is-trending tie-standard">
														<a aria-label="Not who has much is rich, but who gives much" href="2016/10/20/not-who-has-much-is-rich-but-who-gives-much/index.html" class="post-thumb"><img width="220" height="150" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAG4AAABLAQMAAACr9CA9AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABZJREFUOI1jYMADmEe5o9xR7iiXQi4A4BsA388WUyMAAAAASUVORK5CYII=" class="attachment-jannah-image-small size-jannah-image-small lazy-img tie-small-image wp-post-image" alt="Photo of Not who has much is rich, but who gives much" loading="lazy" data-src="wp-content/uploads/sites/8/2016/10/post-1-220x150.jpg" /></a>
														<div class="post-details">
															<div class="post-meta clearfix"><span class="trending-post tie-icon-bolt trending-sm meta-item" aria-hidden="true"></span><span class="date meta-item tie-icon">Oct 20, 2016</span></div>
															<h2 class="post-title"><a href="2016/10/20/not-who-has-much-is-rich-but-who-gives-much/index.html">Not who has much is rich, but who gives much</a></h2> </div>
													</li>
													<li class="post-item tie-standard">
														<a aria-label="The Top 10 Best Computer Speakers in the Market" href="2016/10/19/the-top-10-best-computer-speakers-in-the-market/index.html" class="post-thumb"><img width="220" height="150" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAG4AAABLAQMAAACr9CA9AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABZJREFUOI1jYMADmEe5o9xR7iiXQi4A4BsA388WUyMAAAAASUVORK5CYII=" class="attachment-jannah-image-small size-jannah-image-small lazy-img tie-small-image wp-post-image" alt="Photo of The Top 10 Best Computer Speakers in the Market" loading="lazy" data-src="wp-content/uploads/sites/8/2016/10/slide-27-220x150.jpg" /></a>
														<div class="post-details">
															<div class="post-meta clearfix"><span class="date meta-item tie-icon">Oct 19, 2016</span></div>
															<h2 class="post-title"><a href="2016/10/19/the-top-10-best-computer-speakers-in-the-market/index.html">The Top 10 Best Computer Speakers in the Market</a></h2> </div>
													</li>
												</ul>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<script>
									var js_tie_block_304 = {
										"order": "latest",
										"source": "id",
										"id": ["6"],
										"number": "3",
										"offset": "1",
										"pagi": "next-prev",
										"excerpt": "true",
										"excerpt_length": 20,
										"post_meta": "true",
										"read_more": "true",
										"breaking_effect": "reveal",
										"sub_style": "2c",
										"style": "large-first",
										"title_length": "",
										"media_overlay": "",
										"read_more_text": ""
									};
									</script>
									<div class="clearfix half-box-clearfix"></div>
									<div id="tie-block_1837" class="mag-box miscellaneous-box first-post-gradient has-first-big-post media-overlay has-custom-color" data-current="1">
										<div class="container-wrapper">
											<div class="mag-box-title the-global-title">
												<h3> Videos </h3>
												
											</div>
											<div class="mag-box-container clearfix">
												<ul class="posts-items posts-list-container">
													<li class="post-item is-trending tie-video"> <a aria-label="Play This Game for Free on Steam This Weekend" href="2016/10/17/play-this-game-for-free-on-steam-this-weekend/index.html" class="post-thumb"><span class="trending-post tie-icon-bolt trending-lg" aria-hidden="true"></span> <div class="post-thumb-overlay-wrap"> <div class="post-thumb-overlay"> <span class="tie-icon tie-media-icon"></span> </div> </div> <img width="780" height="470" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAYYAAADcAQMAAABOLJSDAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAACJJREFUaIHtwTEBAAAAwqD1T20ND6AAAAAAAAAAAAAA4N8AKvgAAUFIrrEAAAAASUVORK5CYII=" class="attachment-jannah-image-post size-jannah-image-post lazy-img wp-post-image" alt="Photo of Play This Game for Free on Steam This Weekend" loading="lazy" data-src="wp-content/uploads/sites/8/2016/10/11-1-780x470.jpg" /></a>
														<div class="clearfix"></div>
														<div class="post-overlay">
															<div class="post-content"> <a class="post-cat tie-cat-75" href="category/world/creative/index.html">Creative</a>
																<h2 class="post-title"><a href="2016/10/17/play-this-game-for-free-on-steam-this-weekend/index.html">Play This Game for Free on Steam This Weekend</a></h2>
																<div class="thumb-meta">
																	<div class="post-meta clearfix"><span class="author-meta single-author no-avatars"><span class="meta-item meta-author-wrapper"><span class="meta-author"><a href="members/admin/index.html" class="author-name tie-icon" title="Fouad Badawy">Fouad Badawy</a></span></span>
																		</span><span class="date meta-item tie-icon">Oct 17, 2016</span>
																		<div class="tie-alignright"><span class="meta-comment tie-icon meta-item fa-before">0</span><span class="meta-views meta-item very-hot"><span class="tie-icon-fire" aria-hidden="true"></span> 17,704 </span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</li>
													<li class="post-item is-trending tie-video">
														<a aria-label="At Value-Focused Hotels, the Free Breakfast Gets Bigger" href="2016/10/16/at-value-focused-hotels-the-free-breakfast-gets-bigger/index.html" class="post-thumb">
															<div class="post-thumb-overlay-wrap">
																<div class="post-thumb-overlay"> <span class="tie-icon tie-media-icon"></span> </div>
															</div> <img width="390" height="220" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAYYAAADcAQMAAABOLJSDAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAACJJREFUaIHtwTEBAAAAwqD1T20ND6AAAAAAAAAAAAAA4N8AKvgAAUFIrrEAAAAASUVORK5CYII=" class="attachment-jannah-image-large size-jannah-image-large lazy-img wp-post-image" alt="Photo of At Value-Focused Hotels, the Free Breakfast Gets Bigger" loading="lazy" data-src="wp-content/uploads/sites/8/2016/10/garrett-parker-1-390x220.jpg" /></a>
														<div class="clearfix"></div>
														<div class="post-overlay">
															<div class="post-content">
																<div class="post-meta clearfix"><span class="trending-post tie-icon-bolt trending-sm meta-item" aria-hidden="true"></span><span class="date meta-item tie-icon">Oct 16, 2016</span>
																	<div class="tie-alignright"><span class="meta-comment tie-icon meta-item fa-before">0</span></div>
																</div>
																<h2 class="post-title"><a href="2016/10/16/at-value-focused-hotels-the-free-breakfast-gets-bigger/index.html">At Value-Focused Hotels, the Free Breakfast Gets Bigger</a></h2>
																<div class="post-meta"></div>
															</div>
														</div>
													</li>
													<li class="post-item tie-video">
														<a aria-label="Failure is the condiment that gives success its flavor" href="2016/10/15/failure-is-the-condiment-that-gives-success-its-flavor/index.html" class="post-thumb">
															<div class="post-thumb-overlay-wrap">
																<div class="post-thumb-overlay"> <span class="tie-icon tie-media-icon"></span> </div>
															</div> <img width="390" height="220" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAYYAAADcAQMAAABOLJSDAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAACJJREFUaIHtwTEBAAAAwqD1T20ND6AAAAAAAAAAAAAA4N8AKvgAAUFIrrEAAAAASUVORK5CYII=" class="attachment-jannah-image-large size-jannah-image-large lazy-img wp-post-image" alt="Photo of Failure is the condiment that gives success its flavor" loading="lazy" data-src="wp-content/uploads/sites/8/2016/10/demo-image-3-390x220.jpg" /></a>
														<div class="clearfix"></div>
														<div class="post-overlay">
															<div class="post-content">
																<div class="post-meta clearfix"><span class="date meta-item tie-icon">Oct 15, 2016</span>
																	<div class="tie-alignright"><span class="meta-comment tie-icon meta-item fa-before">0</span></div>
																</div>
																<h2 class="post-title"><a href="2016/10/15/failure-is-the-condiment-that-gives-success-its-flavor/index.html">Failure is the condiment that gives success its flavor</a></h2>
																<div class="post-meta"></div>
															</div>
														</div>
													</li>
													<li class="post-item tie-video">
														<a aria-label="Les nouveaux maillots du Real Madrid pour la saison" href="2016/10/06/drug-testing-scarce-in-scottish-football/index.html" class="post-thumb">
															<div class="post-thumb-overlay-wrap">
																<div class="post-thumb-overlay"> <span class="tie-icon tie-media-icon"></span> </div>
															</div> <img width="390" height="220" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAYYAAADcAQMAAABOLJSDAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAACJJREFUaIHtwTEBAAAAwqD1T20ND6AAAAAAAAAAAAAA4N8AKvgAAUFIrrEAAAAASUVORK5CYII=" class="attachment-jannah-image-large size-jannah-image-large lazy-img wp-post-image" alt="Photo of Les nouveaux maillots du Real Madrid pour la saison" loading="lazy" data-src="wp-content/uploads/sites/8/2016/10/slide15-390x220.jpg" /></a>
														<div class="clearfix"></div>
														<div class="post-overlay">
															<div class="post-content">
																<div class="post-meta clearfix"><span class="date meta-item tie-icon">Oct 6, 2016</span>
																	<div class="tie-alignright"><span class="meta-comment tie-icon meta-item fa-before">0</span></div>
																</div>
																<h2 class="post-title"><a href="2016/10/06/drug-testing-scarce-in-scottish-football/index.html">Les nouveaux maillots du Real Madrid pour la saison</a></h2>
																<div class="post-meta"></div>
															</div>
														</div>
													</li>
												</ul>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>
									<script>
									var js_tie_block_1837 = {
										"order": "latest",
										"source": "tags",
										"id": ["64"],
										"tags": "video",
										"number": "4",
										"offset": "2",
										"pagi": "next-prev",
										"excerpt": "true",
										"post_meta": "true",
										"media_overlay": "true",
										"read_more": "true",
										"breaking_effect": "reveal",
										"sub_style": "first-big",
										"style": "large-above",
										"title_length": "",
										"excerpt_length": "",
										"read_more_text": ""
									};
									</script>
									<div id="tie-s_1441" class="mag-box big-posts-box has-custom-color" data-current="1">
										<div class="container-wrapper">
											<div class="mag-box-title the-global-title">
												<h3> What's new </h3> </div>
											<div class="mag-box-container clearfix">
												<ul class="posts-items posts-list-container">
													<li class="post-item post-1887 post type-post status-publish format-standard has-post-thumbnail category-life-style category-technology tag-apple tag-dell tag-tech is-trending tie-standard">
														<a aria-label="25 Tricks That Will Increase Your Productivity" href="2016/10/12/25-office-design-tricks-that-will-increase-your-productivity-at-work/index.html" class="post-thumb">
															<div class="digital-rating">
																<div data-score="8.8" data-pct="87.5" data-lazy-pie="1" class="pie-wrap">
																	<svg width="40" height="40" class="pie-svg">
																		<circle r="19" cx="20" cy="20" fill="transparent" stroke-dasharray="119.38" stroke-dashoffset="0" class="circle_base"></circle>
																		<circle r="19" cx="20" cy="20" fill="transparent" stroke-dasharray="119.38" stroke-dashoffset="0" class="circle_bar"></circle>
																	</svg>
																</div>
															</div> <span class="trending-post tie-icon-bolt trending-lg" aria-hidden="true"></span><span class="post-cat-wrap"><span class="post-cat tie-cat-64">Technology</span></span><img width="390" height="220" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAYYAAADcAQMAAABOLJSDAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAACJJREFUaIHtwTEBAAAAwqD1T20ND6AAAAAAAAAAAAAA4N8AKvgAAUFIrrEAAAAASUVORK5CYII=" class="attachment-jannah-image-large size-jannah-image-large lazy-img wp-post-image" alt="Photo of 25 Tricks That Will Increase Your Productivity" loading="lazy" data-src="wp-content/uploads/sites/8/2016/10/ben-white-148435-390x220.jpg" /></a>
														<div class="post-details">
															<div class="post-meta clearfix"><span class="author-meta single-author no-avatars"><span class="meta-item meta-author-wrapper"><span class="meta-author"><a href="members/admin/index.html" class="author-name tie-icon" title="Fouad Badawy">Fouad Badawy</a></span></span>
																</span><span class="date meta-item tie-icon">Oct 12, 2016</span>
																<div class="tie-alignright"><span class="meta-comment tie-icon meta-item fa-before">0</span><span class="meta-views meta-item very-hot"><span class="tie-icon-fire" aria-hidden="true"></span> 11,068 </span>
																</div>
															</div>
															<h2 class="post-title"><a href="2016/10/12/25-office-design-tricks-that-will-increase-your-productivity-at-work/index.html">25 Tricks That Will Increase Your Productivity</a></h2>
															<p class="post-excerpt">Stay focused and remember we design the best WordPress News and Magazine Themes. It’s the ones closest to you that&hellip;</p>
														</div>
													</li>
													<li class="post-item post-1896 post type-post status-publish format-standard has-post-thumbnail category-life-style category-technology tag-tech tie-standard">
														<a aria-label="The Renault Trezor Concept is a Formula E car for the road" href="2016/10/10/the-renault-trezor-concept-is-a-formula-e-car-for-the-road/index.html" class="post-thumb">
															<div class="post-rating image-stars">
																<div class="stars-rating-bg"></div>
																<div class="stars-rating-active" data-rate-val="88.166666666667%" data-lazy-percent="1">
																	<div class="stars-rating-active-inner"> </div>
																</div>
															</div> <span class="post-cat-wrap"><span class="post-cat tie-cat-6">Life Style</span></span><img width="390" height="220" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAYYAAADcAQMAAABOLJSDAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAACJJREFUaIHtwTEBAAAAwqD1T20ND6AAAAAAAAAAAAAA4N8AKvgAAUFIrrEAAAAASUVORK5CYII=" class="attachment-jannah-image-large size-jannah-image-large lazy-img wp-post-image" alt="Photo of The Renault Trezor Concept is a Formula E car for the road" loading="lazy" data-src="wp-content/uploads/sites/8/2016/10/pexels-photo-1-390x220.jpg" /></a>
														<div class="post-details">
															<div class="post-meta clearfix"><span class="author-meta single-author no-avatars"><span class="meta-item meta-author-wrapper"><span class="meta-author"><a href="members/ashraf/index.html" class="author-name tie-icon" title="Ashraf Reda">Ashraf Reda</a></span></span>
																</span><span class="date meta-item tie-icon">Oct 10, 2016</span>
																<div class="tie-alignright"><span class="meta-comment tie-icon meta-item fa-before">0</span><span class="meta-views meta-item very-hot"><span class="tie-icon-fire" aria-hidden="true"></span> 20,659 </span>
																</div>
															</div>
															<h2 class="post-title"><a href="2016/10/10/the-renault-trezor-concept-is-a-formula-e-car-for-the-road/index.html">The Renault Trezor Concept is a Formula E car for the road</a></h2>
															<p class="post-excerpt">Stay focused and remember we design the best WordPress News and Magazine Themes. It’s the ones closest to you that&hellip;</p>
														</div>
													</li>
													<li class="post-item post-1980 post type-post status-publish format-standard has-post-thumbnail category-football tag-video tie-video"> <a aria-label="Les nouveaux maillots du Real Madrid pour la saison" href="2016/10/06/drug-testing-scarce-in-scottish-football/index.html" class="post-thumb"><span class="post-cat-wrap"><span class="post-cat tie-cat-138">Football</span></span><img width="390" height="220" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAYYAAADcAQMAAABOLJSDAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAACJJREFUaIHtwTEBAAAAwqD1T20ND6AAAAAAAAAAAAAA4N8AKvgAAUFIrrEAAAAASUVORK5CYII=" class="attachment-jannah-image-large size-jannah-image-large lazy-img wp-post-image" alt="Photo of Les nouveaux maillots du Real Madrid pour la saison" loading="lazy" data-src="wp-content/uploads/sites/8/2016/10/slide15-390x220.jpg" /></a>
														<div class="post-details">
															<div class="post-meta clearfix"><span class="author-meta single-author no-avatars"><span class="meta-item meta-author-wrapper"><span class="meta-author"><a href="members/admin/index.html" class="author-name tie-icon" title="Fouad Badawy">Fouad Badawy</a></span></span>
																</span><span class="date meta-item tie-icon">Oct 6, 2016</span>
																<div class="tie-alignright"><span class="meta-comment tie-icon meta-item fa-before">0</span><span class="meta-views meta-item very-hot"><span class="tie-icon-fire" aria-hidden="true"></span> 9,554 </span>
																</div>
															</div>
															<h2 class="post-title"><a href="2016/10/06/drug-testing-scarce-in-scottish-football/index.html">Les nouveaux maillots du Real Madrid pour la saison</a></h2>
															<p class="post-excerpt">Stay focused and remember we design the best WordPress News and Magazine Themes. It’s the ones closest to you that&hellip;</p>
														</div>
													</li>
													<li class="post-item post-1992 post type-post status-publish format-standard has-post-thumbnail category-racing category-sports tag-timeline tie-standard"> <a aria-label="I enjoy hard work I love setting goals and achieving them" href="2016/10/06/i-enjoy-hard-work-i-love-setting-goals-and-achieving-them/index.html" class="post-thumb"><span class="post-cat-wrap"><span class="post-cat tie-cat-139">Racing</span></span><img width="390" height="220" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAYYAAADcAQMAAABOLJSDAAAAA1BMVEUAAACnej3aAAAAAXRSTlMAQObYZgAAACJJREFUaIHtwTEBAAAAwqD1T20ND6AAAAAAAAAAAAAA4N8AKvgAAUFIrrEAAAAASUVORK5CYII=" class="attachment-jannah-image-large size-jannah-image-large lazy-img wp-post-image" alt="Photo of I enjoy hard work I love setting goals and achieving them" loading="lazy" data-src="wp-content/uploads/sites/8/2016/10/image9-390x220.jpg" /></a>
														<div class="post-details">
															<div class="post-meta clearfix"><span class="author-meta single-author no-avatars"><span class="meta-item meta-author-wrapper"><span class="meta-author"><a href="members/admin/index.html" class="author-name tie-icon" title="Fouad Badawy">Fouad Badawy</a></span></span>
																</span><span class="date meta-item tie-icon">Oct 6, 2016</span>
																<div class="tie-alignright"><span class="meta-comment tie-icon meta-item fa-before">0</span><span class="meta-views meta-item hot"><span class="tie-icon-fire" aria-hidden="true"></span> 3,450 </span>
																</div>
															</div>
															<h2 class="post-title"><a href="2016/10/06/i-enjoy-hard-work-i-love-setting-goals-and-achieving-them/index.html">I enjoy hard work I love setting goals and achieving them</a></h2>
															<p class="post-excerpt">Stay focused and remember we design the best WordPress News and Magazine Themes. It’s the ones closest to you that&hellip;</p>
														</div>
													</li>
												</ul>
												<div class="clearfix"></div>
											</div> <a class="block-pagination next-posts show-more-button load-more-button" data-text="Load More">Load More</a> </div>
									</div>
									<script>
									var js_tie_s_1441 = {
										"order": "latest",
										"source": "id",
										"id": ["75", "48", "138", "139", "8", "140", "64", "84", "1"],
										"number": "4",
										"offset": "11",
										"pagi": "load-more",
										"excerpt": "true",
										"post_meta": "true",
										"breaking_effect": "reveal",
										"sub_style": "big",
										"style": "default",
										"title_length": "",
										"excerpt_length": "",
										"media_overlay": "",
										"read_more_text": ""
									};
									</script>
								</div>
								<aside class="sidebar tie-col-md-4 tie-col-xs-12 normal-side is-sticky" aria-label="Primary Sidebar">
									<div class="theiaStickySidebar">
										<link rel='stylesheet' id='tie-css-widgets-css' href="wp-content/themes/jannah/assets/css/widgets.min.css" type='text/css' media='all' />
										<script>
										console.log('Style tie-css-widgets')
										</script>
										<div id="social-statistics-21" class="container-wrapper widget social-statistics-widget">
											<div class="widget-title the-global-title">
												<div class="the-subtitle">Follow Us<span class="widget-title-icon tie-icon"></span></div>
											</div>
											<div class="social-counter-total"> <span class="tie-icon-heart"></span> <span class="counter-total-text">Join <strong>276K</strong> Followers</span> </div>
											<ul class="solid-social-icons two-cols transparent-icons Arqam-Lite">
												<li class="social-icons-item">
													<a class="facebook-social-icon" href="http://www.facebook.com/tielabs" rel="nofollow noopener" target="_blank"> <span class="counter-icon tie-icon-facebook"></span> <span class="followers"> <span class="followers-num">14,497</span> <span class="followers-name">Fans</span> </span>
													</a>
												</li>
												<li class="social-icons-item">
													<a class="twitter-social-icon" href="http://twitter.com/tielabs" rel="nofollow noopener" target="_blank"> <span class="counter-icon tie-icon-twitter"></span> <span class="followers"> <span class="followers-num">1,052</span> <span class="followers-name">Followers</span> </span>
													</a>
												</li>
												<li class="social-icons-item">
													<a class="youtube-social-icon" href="http://youtube.com/user/TEAMMESAI" rel="nofollow noopener" target="_blank"> <span class="counter-icon tie-icon-youtube"></span> <span class="followers"> <span class="followers-num">36,200</span> <span class="followers-name">Followers</span> </span>
													</a>
												</li>
												<li class="social-icons-item">
													<a class="vimeo-social-icon" href="http://vimeo.com/channels/kidproof" rel="nofollow noopener" target="_blank"> <span class="counter-icon tie-icon-vimeo"></span> <span class="followers"> <span class="followers-num">1,461</span> <span class="followers-name">Subscribers</span> </span>
													</a>
												</li>
												<li class="social-icons-item">
													<a class="dribbble-social-icon" href="http://dribbble.com/mo3aser" rel="nofollow noopener" target="_blank"> <span class="counter-icon tie-icon-dribbble"></span> <span class="followers"> <span class="followers-num">60</span> <span class="followers-name">Followers</span> </span>
													</a>
												</li>
												<li class="social-icons-item">
													<a class="soundcloud-social-icon" href="http://soundcloud.com/maherzain" rel="nofollow noopener" target="_blank"> <span class="counter-icon tie-icon-soundcloud"></span> <span class="followers"> <span class="followers-num">102k</span> <span class="followers-name">Followers</span> </span>
													</a>
												</li>
												<li class="social-icons-item">
													<a class="behance-social-icon" href="http://www.behance.net/matiascorea" rel="nofollow noopener" target="_blank"> <span class="counter-icon tie-icon-behance"></span> <span class="followers"> <span class="followers-num">76,788</span> <span class="followers-name">Followers</span> </span>
													</a>
												</li>
												<li class="social-icons-item">
													<a class="instagram-social-icon" href="http://instagram.com/imo3aser" rel="nofollow noopener" target="_blank"> <span class="counter-icon tie-icon-instagram"></span> <span class="followers"> <span class="followers-num">4,4k+</span> <span class="followers-name">Followers</span> </span>
													</a>
												</li>
											</ul>
											<div class="clearfix"></div>
										</div>
										<div id="tie-weather-widget-13" class="widget tie-weather-widget">
											<div class="widget-title the-global-title">
												<div class="the-subtitle">Weather<span class="widget-title-icon tie-icon"></span></div>
											</div><span class="tie-weather-user-location has-title" data-options="{'location':'Cairo','units':'C','forecast_days':'5','custom_name':'Cairo','animated':'true'}"><span class="tie-icon-gps"></span></span>
											<div id="tie-weather-cairo" class="weather-wrap is-animated">
												<div class="weather-icon-and-city">
													<div class="weather-icon">
														<div class="icon-cloud"></div>
														<div class="icon-cloud-behind"></div>
														<div class="icon-basecloud-bg"></div>
														<div class="icon-sun-animi"></div>
													</div>
													<div class="weather-name the-subtitle">Cairo</div>
													<div class="weather-desc">Scattered Clouds</div>
												</div>
												<div class="weather-todays-stats">
													<div class="weather-current-temp"> 25 <sup>&#x2103;</sup> </div>
													<div class="weather-more-todays-stats">
														<div class="weather_highlow"> <span aria-hidden="true" class="tie-icon-thermometer-half"></span> 31&ordm; - 22&ordm; </div>
														<div class="weather_humidty"> <span aria-hidden="true" class="tie-icon-raindrop"></span> <span class="screen-reader-text"></span> 65% </div>
														<div class="weather_wind"> <span aria-hidden="true" class="tie-icon-wind"></span> <span class="screen-reader-text"></span> 6.2 km/h</div>
													</div>
												</div>
												<div class="weather-forecast small-weather-icons weather_days_5">
													<div class="weather-forecast-day">
														<div class="weather-icon">
															<div class="icon-cloud"></div>
															<div class="icon-cloud-behind"></div>
															<div class="icon-basecloud-bg"></div>
															<div class="icon-sun-animi"></div>
														</div>
														<div class="weather-forecast-day-temp">31<sup>&#x2103;</sup></div>
														<div class="weather-forecast-day-abbr">Fri</div>
													</div>
													<div class="weather-forecast-day">
														<div class="weather-icon">
															<div class="icon-sun"></div>
														</div>
														<div class="weather-forecast-day-temp">30<sup>&#x2103;</sup></div>
														<div class="weather-forecast-day-abbr">Sat</div>
													</div>
													<div class="weather-forecast-day">
														<div class="weather-icon">
															<div class="icon-cloud"></div>
															<div class="icon-cloud-behind"></div>
															<div class="icon-basecloud-bg"></div>
															<div class="icon-sun-animi"></div>
														</div>
														<div class="weather-forecast-day-temp">29<sup>&#x2103;</sup></div>
														<div class="weather-forecast-day-abbr">Sun</div>
													</div>
													<div class="weather-forecast-day">
														<div class="weather-icon">
															<div class="icon-sun"></div>
														</div>
														<div class="weather-forecast-day-temp">28<sup>&#x2103;</sup></div>
														<div class="weather-forecast-day-abbr">Mon</div>
													</div>
													<div class="weather-forecast-day">
														<div class="weather-icon">
															<div class="icon-sun"></div>
														</div>
														<div class="weather-forecast-day-temp">27<sup>&#x2103;</sup></div>
														<div class="weather-forecast-day-abbr">Tue</div>
													</div>
												</div>
											</div>
											<style scoped type="text/css">
											#tie-weather-widget-13 {
												background-color: #5424fb;
											}
											
											#tie-weather-widget-13 .icon-basecloud-bg:after {
												color: #5424fb;
											}
											
											#tie-weather-widget-13 {
												background: #5424fb;
												background: -webkit-linear-gradient(135deg, #9836e6, #5424fb);
												background: -moz-linear-gradient(135deg, #9836e6, #5424fb);
												background: -o-linear-gradient(135deg, #9836e6, #5424fb);
												background: linear-gradient(135deg, #5424fb, #9836e6);
											}
											
											#tie-weather-widget-13 .icon-basecloud-bg:after {
												color: inherit;
											}
											</style>
											<div class="clearfix"></div>
										</div>
										<div class="container-wrapper tabs-container-wrapper tabs-container-3">
											<div class="widget tabs-widget">
												<div class="widget-container">
													<div class="tabs-widget">
														<div class="tabs-wrapper">
															<ul class="tabs">
																<li><a href="#widget_tabs-11-recent">Recent</a></li>
																<li><a href="#widget_tabs-11-popular">Popular</a></li>
																<li><a href="#widget_tabs-11-comments">Comments</a></li>
															</ul>
															<div id="widget_tabs-11-recent" class="tab-content tab-content-recent">
																<ul class="tab-content-elements">
																	<li class="widget-single-post-item widget-post-list tie-standard">
																		<div class="post-widget-thumbnail">
																			<a aria-label="After all is said and done, more is done" href="2018/10/27/after-all-is-said-and-done-more-is-done/index.html" class="post-thumb"><img width="220" height="150" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAG4AAABLAQMAAACr9CA9AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABZJREFUOI1jYMADmEe5o9xR7iiXQi4A4BsA388WUyMAAAAASUVORK5CYII=" class="attachment-jannah-image-small size-jannah-image-small lazy-img tie-small-image wp-post-image" alt="Photo of After all is said and done, more is done" loading="lazy" data-src="wp-content/uploads/sites/8/2016/10/demo-image-1-220x150.jpg" /></a>
																		</div>
																		<div class="post-widget-body ">
																			<h3 class="post-title"><a href="2018/10/27/after-all-is-said-and-done-more-is-done/index.html">After all is said and done, more is done</a></h3>
																			<div class="post-meta"> <span class="date meta-item tie-icon">Oct 27, 2018</span>
																				<div class="post-rating image-stars">
																					<div class="stars-rating-bg"></div>
																					<div class="stars-rating-active" data-rate-val="91.833333333333%" data-lazy-percent="1">
																						<div class="stars-rating-active-inner"> </div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</li>
																	<li class="widget-single-post-item widget-post-list is-trending tie-video">
																		<div class="post-widget-thumbnail">
																			<a aria-label="Success is not a good teacher failure makes you humble" href="2016/10/28/success-is-not-a-good-teacher-failure-makes-you-humble/index.html" class="post-thumb"><img width="220" height="150" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAG4AAABLAQMAAACr9CA9AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABZJREFUOI1jYMADmEe5o9xR7iiXQi4A4BsA388WUyMAAAAASUVORK5CYII=" class="attachment-jannah-image-small size-jannah-image-small lazy-img tie-small-image wp-post-image" alt="Photo of Success is not a good teacher failure makes you humble" loading="lazy" data-src="wp-content/uploads/sites/8/2016/10/demo-new-11-220x150.jpg" /></a>
																		</div>
																		<div class="post-widget-body ">
																			<h3 class="post-title"><a href="2016/10/28/success-is-not-a-good-teacher-failure-makes-you-humble/index.html">Success is not a good teacher failure makes you humble</a></h3>
																			<div class="post-meta"> <span class="date meta-item tie-icon">Oct 28, 2016</span> </div>
																		</div>
																	</li>
																	<li class="widget-single-post-item widget-post-list is-trending tie-standard">
																		<div class="post-widget-thumbnail">
																			<a aria-label="Budget issues force the Tour to be cancelled" href="2016/10/25/budget-issues-force-2017-tour-to-be-cancelled/index.html" class="post-thumb"><img width="220" height="150" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAG4AAABLAQMAAACr9CA9AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABZJREFUOI1jYMADmEe5o9xR7iiXQi4A4BsA388WUyMAAAAASUVORK5CYII=" class="attachment-jannah-image-small size-jannah-image-small lazy-img tie-small-image wp-post-image" alt="Photo of Budget issues force the Tour to be cancelled" loading="lazy" data-src="wp-content/uploads/sites/8/2016/10/demo-image-2-220x150.jpg" /></a>
																		</div>
																		<div class="post-widget-body ">
																			<h3 class="post-title"><a href="2016/10/25/budget-issues-force-2017-tour-to-be-cancelled/index.html">Budget issues force the Tour to be cancelled</a></h3>
																			<div class="post-meta"> <span class="date meta-item tie-icon">Oct 25, 2016</span> </div>
																		</div>
																	</li>
																	<li class="widget-single-post-item widget-post-list tie-video">
																		<div class="post-widget-thumbnail">
																			<a aria-label="Instagram’s big redesign goes live with black-and-white app" href="2016/10/21/instagrams-big-redesign-goes-live-with-black-and-white-app/index.html" class="post-thumb"><img width="220" height="150" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAG4AAABLAQMAAACr9CA9AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABZJREFUOI1jYMADmEe5o9xR7iiXQi4A4BsA388WUyMAAAAASUVORK5CYII=" class="attachment-jannah-image-small size-jannah-image-small lazy-img tie-small-image wp-post-image" alt="Photo of Instagram’s big redesign goes live with black-and-white app" loading="lazy" data-src="wp-content/uploads/sites/8/2016/10/new-demo-3-220x150.jpg" /></a>
																		</div>
																		<div class="post-widget-body ">
																			<h3 class="post-title"><a href="2016/10/21/instagrams-big-redesign-goes-live-with-black-and-white-app/index.html">Instagram’s big redesign goes live with black-and-white app</a></h3>
																			<div class="post-meta"> <span class="date meta-item tie-icon">Oct 21, 2016</span> </div>
																		</div>
																	</li>
																	<li class="widget-single-post-item widget-post-list tie-video">
																		<div class="post-widget-thumbnail">
																			<a aria-label="The only thing that overcomes hard luck is hard work" href="2016/10/20/the-only-thing-that-overcomes-hard-luck-is-hard-work/index.html" class="post-thumb"><img width="220" height="150" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAG4AAABLAQMAAACr9CA9AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABZJREFUOI1jYMADmEe5o9xR7iiXQi4A4BsA388WUyMAAAAASUVORK5CYII=" class="attachment-jannah-image-small size-jannah-image-small lazy-img tie-small-image wp-post-image" alt="Photo of The only thing that overcomes hard luck is hard work" loading="lazy" data-src="wp-content/uploads/sites/8/2016/05/7040731-cam-newton-220x150.jpg" /></a>
																		</div>
																		<div class="post-widget-body ">
																			<h3 class="post-title"><a href="2016/10/20/the-only-thing-that-overcomes-hard-luck-is-hard-work/index.html">The only thing that overcomes hard luck is hard work</a></h3>
																			<div class="post-meta"> <span class="date meta-item tie-icon">Oct 20, 2016</span> </div>
																		</div>
																	</li>
																</ul>
															</div>
															<div id="widget_tabs-11-popular" class="tab-content tab-content-popular">
																<ul class="tab-content-elements">
																	<li class="widget-single-post-item widget-post-list tie-video">
																		<div class="post-widget-thumbnail">
																			<a aria-label="Instagram’s big redesign goes live with black-and-white app" href="2016/10/21/instagrams-big-redesign-goes-live-with-black-and-white-app/index.html" class="post-thumb"><img width="220" height="150" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAG4AAABLAQMAAACr9CA9AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABZJREFUOI1jYMADmEe5o9xR7iiXQi4A4BsA388WUyMAAAAASUVORK5CYII=" class="attachment-jannah-image-small size-jannah-image-small lazy-img tie-small-image wp-post-image" alt="Photo of Instagram’s big redesign goes live with black-and-white app" loading="lazy" data-src="wp-content/uploads/sites/8/2016/10/new-demo-3-220x150.jpg" /></a>
																		</div>
																		<div class="post-widget-body ">
																			<h3 class="post-title"><a href="2016/10/21/instagrams-big-redesign-goes-live-with-black-and-white-app/index.html">Instagram’s big redesign goes live with black-and-white app</a></h3>
																			<div class="post-meta"> <span class="date meta-item tie-icon">Oct 21, 2016</span> </div>
																		</div>
																	</li>
																	<li class="widget-single-post-item widget-post-list is-trending tie-video">
																		<div class="post-widget-thumbnail">
																			<a aria-label="Success is not a good teacher failure makes you humble" href="2016/10/28/success-is-not-a-good-teacher-failure-makes-you-humble/index.html" class="post-thumb"><img width="220" height="150" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAG4AAABLAQMAAACr9CA9AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABZJREFUOI1jYMADmEe5o9xR7iiXQi4A4BsA388WUyMAAAAASUVORK5CYII=" class="attachment-jannah-image-small size-jannah-image-small lazy-img tie-small-image wp-post-image" alt="Photo of Success is not a good teacher failure makes you humble" loading="lazy" data-src="wp-content/uploads/sites/8/2016/10/demo-new-11-220x150.jpg" /></a>
																		</div>
																		<div class="post-widget-body ">
																			<h3 class="post-title"><a href="2016/10/28/success-is-not-a-good-teacher-failure-makes-you-humble/index.html">Success is not a good teacher failure makes you humble</a></h3>
																			<div class="post-meta"> <span class="date meta-item tie-icon">Oct 28, 2016</span> </div>
																		</div>
																	</li>
																	<li class="widget-single-post-item widget-post-list tie-standard">
																		<div class="post-widget-thumbnail">
																			<a aria-label="The secret of life is not to do what you like but to like what you do" href="2015/09/02/there-is-safety-in-numbers/index.html" class="post-thumb"><img width="220" height="150" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAG4AAABLAQMAAACr9CA9AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABZJREFUOI1jYMADmEe5o9xR7iiXQi4A4BsA388WUyMAAAAASUVORK5CYII=" class="attachment-jannah-image-small size-jannah-image-small lazy-img tie-small-image wp-post-image" alt="Photo of The secret of life is not to do what you like but to like what you do" loading="lazy" data-src="wp-content/uploads/sites/8/2015/09/image-picjum-8-220x150.jpg" /></a>
																		</div>
																		<div class="post-widget-body ">
																			<h3 class="post-title"><a href="2015/09/02/there-is-safety-in-numbers/index.html">The secret of life is not to do what you like but to like what you do</a></h3>
																			<div class="post-meta"> <span class="date meta-item tie-icon">Sep 2, 2015</span> </div>
																		</div>
																	</li>
																	<li class="widget-single-post-item widget-post-list tie-standard">
																		<div class="post-widget-thumbnail">
																			<a aria-label="After all is said and done, more is done" href="2018/10/27/after-all-is-said-and-done-more-is-done/index.html" class="post-thumb"><img width="220" height="150" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAG4AAABLAQMAAACr9CA9AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABZJREFUOI1jYMADmEe5o9xR7iiXQi4A4BsA388WUyMAAAAASUVORK5CYII=" class="attachment-jannah-image-small size-jannah-image-small lazy-img tie-small-image wp-post-image" alt="Photo of After all is said and done, more is done" loading="lazy" data-src="wp-content/uploads/sites/8/2016/10/demo-image-1-220x150.jpg" /></a>
																		</div>
																		<div class="post-widget-body ">
																			<h3 class="post-title"><a href="2018/10/27/after-all-is-said-and-done-more-is-done/index.html">After all is said and done, more is done</a></h3>
																			<div class="post-meta"> <span class="date meta-item tie-icon">Oct 27, 2018</span>
																				<div class="post-rating image-stars">
																					<div class="stars-rating-bg"></div>
																					<div class="stars-rating-active" data-rate-val="91.833333333333%" data-lazy-percent="1">
																						<div class="stars-rating-active-inner"> </div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</li>
																	<li class="widget-single-post-item widget-post-list tie-standard">
																		<div class="post-widget-thumbnail">
																			<a aria-label="Education is the best provision for the journey to old age" href="2015/10/02/education-is-the-best-provision-for-the-journey-to-old-age/index.html" class="post-thumb"><img width="220" height="150" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAG4AAABLAQMAAACr9CA9AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABZJREFUOI1jYMADmEe5o9xR7iiXQi4A4BsA388WUyMAAAAASUVORK5CYII=" class="attachment-jannah-image-small size-jannah-image-small lazy-img tie-small-image wp-post-image" alt="Photo of Education is the best provision for the journey to old age" loading="lazy" data-src="wp-content/uploads/sites/8/2015/10/image-picjum-9-220x150.jpg" /></a>
																		</div>
																		<div class="post-widget-body ">
																			<h3 class="post-title"><a href="2015/10/02/education-is-the-best-provision-for-the-journey-to-old-age/index.html">Education is the best provision for the journey to old age</a></h3>
																			<div class="post-meta"> <span class="date meta-item tie-icon">Oct 2, 2015</span> </div>
																		</div>
																	</li>
																</ul>
															</div>
															<div id="widget_tabs-11-comments" class="tab-content tab-content-comments">
																<ul class="tab-content-elements">
																	<li>
																		<div class="post-widget-thumbnail" style="width:70px">
																			<a class="author-avatar" href="2016/10/28/success-is-not-a-good-teacher-failure-makes-you-humble/index.html#comment-18586"> <img alt='Photo of Fouad Badawy' src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAApJREFUCJljYAAAAAIAAfRxZKYAAAAASUVORK5CYII=" data-src="//www.gravatar.com/avatar/2eb5e17a9fe92866be144b89a88dfac0?s=70&#038;r=g&#038;d=mm" data-2x='//www.gravatar.com/avatar/2eb5e17a9fe92866be144b89a88dfac0?s=70&#038;r=g&#038;d=mm 2x' class='lazy-img avatar avatar-70 photo' height='70' width='70' loading='lazy' /> </a>
																		</div>
																		<div class="comment-body "> <a class="comment-author" href="2016/10/28/success-is-not-a-good-teacher-failure-makes-you-humble/index.html#comment-18586"> Fouad Badawy </a>
																			<p>focused and remember we design the best WordPress News and M...</p>
																		</div>
																	</li>
																	<li>
																		<div class="post-widget-thumbnail" style="width:70px">
																			<a class="author-avatar" href="2016/10/21/instagrams-big-redesign-goes-live-with-black-and-white-app/index.html#comment-18573"> <img alt='Photo of Fouad Badawy' src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAApJREFUCJljYAAAAAIAAfRxZKYAAAAASUVORK5CYII=" data-src="//www.gravatar.com/avatar/2eb5e17a9fe92866be144b89a88dfac0?s=70&#038;r=g&#038;d=mm" data-2x='//www.gravatar.com/avatar/2eb5e17a9fe92866be144b89a88dfac0?s=70&#038;r=g&#038;d=mm 2x' class='lazy-img avatar avatar-70 photo' height='70' width='70' loading='lazy' /> </a>
																		</div>
																		<div class="comment-body "> <a class="comment-author" href="2016/10/21/instagrams-big-redesign-goes-live-with-black-and-white-app/index.html#comment-18573"> Fouad Badawy </a>
																			<p>Great...</p>
																		</div>
																	</li>
																	<li>
																		<div class="post-widget-thumbnail" style="width:70px">
																			<a class="author-avatar" href="2016/10/21/instagrams-big-redesign-goes-live-with-black-and-white-app/index.html#comment-15735"> <img alt='Photo of Fouad Badawy' src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAApJREFUCJljYAAAAAIAAfRxZKYAAAAASUVORK5CYII=" data-src="//www.gravatar.com/avatar/2eb5e17a9fe92866be144b89a88dfac0?s=70&#038;r=g&#038;d=mm" data-2x='//www.gravatar.com/avatar/2eb5e17a9fe92866be144b89a88dfac0?s=70&#038;r=g&#038;d=mm 2x' class='lazy-img avatar avatar-70 photo' height='70' width='70' loading='lazy' /> </a>
																		</div>
																		<div class="comment-body "> <a class="comment-author" href="2016/10/21/instagrams-big-redesign-goes-live-with-black-and-white-app/index.html#comment-15735"> Fouad Badawy </a>
																			<p>Check the main demo here https://jannah.tielabs.com/demo...</p>
																		</div>
																	</li>
																	<li>
																		<div class="post-widget-thumbnail" style="width:70px">
																			<a class="author-avatar" href="2016/10/21/instagrams-big-redesign-goes-live-with-black-and-white-app/index.html#comment-8507"> <img alt='Photo of Fouad Badawy' src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAApJREFUCJljYAAAAAIAAfRxZKYAAAAASUVORK5CYII=" data-src="//www.gravatar.com/avatar/2eb5e17a9fe92866be144b89a88dfac0?s=70&#038;r=g&#038;d=mm" data-2x='//www.gravatar.com/avatar/2eb5e17a9fe92866be144b89a88dfac0?s=70&#038;r=g&#038;d=mm 2x' class='lazy-img avatar avatar-70 photo' height='70' width='70' loading='lazy' /> </a>
																		</div>
																		<div class="comment-body "> <a class="comment-author" href="2016/10/21/instagrams-big-redesign-goes-live-with-black-and-white-app/index.html#comment-8507"> Fouad Badawy </a>
																			<p>Great Post, test Comment....</p>
																		</div>
																	</li>
																	<li>
																		<div class="post-widget-thumbnail" style="width:70px">
																			<a class="author-avatar" href="product/black-pullover/index.html#comment-8479"> <img alt='Photo of Ashraf Reda' src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABAQMAAAAl21bKAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAApJREFUCJljYAAAAAIAAfRxZKYAAAAASUVORK5CYII=" data-src="//www.gravatar.com/avatar/8bf9b3cdb1c2635772e6aeb5e6dfe903?s=70&#038;r=g&#038;d=mm" data-2x='//www.gravatar.com/avatar/8bf9b3cdb1c2635772e6aeb5e6dfe903?s=70&#038;r=g&#038;d=mm 2x' class='lazy-img avatar avatar-70 photo' height='70' width='70' loading='lazy' /> </a>
																		</div>
																		<div class="comment-body "> <a class="comment-author" href="product/black-pullover/index.html#comment-8479"> Ashraf Reda </a>
																			<p>You have to try...</p>
																		</div>
																	</li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div id="posts-list-widget-31" class="container-wrapper widget posts-list">
											<div class="widget-title the-global-title">
												<div class="the-subtitle">Most Viewed<span class="widget-title-icon tie-icon"></span></div>
											</div>
											<div class="widget-posts-list-container posts-list-counter">
												<ul class="posts-list-items widget-posts-wrapper">
													<li class="widget-single-post-item widget-post-list is-trending tie-video">
														<div class="post-widget-thumbnail">
															<a aria-label="Success is not a good teacher failure makes you humble" href="2016/10/28/success-is-not-a-good-teacher-failure-makes-you-humble/index.html" class="post-thumb"><img width="220" height="150" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAG4AAABLAQMAAACr9CA9AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABZJREFUOI1jYMADmEe5o9xR7iiXQi4A4BsA388WUyMAAAAASUVORK5CYII=" class="attachment-jannah-image-small size-jannah-image-small lazy-img tie-small-image wp-post-image" alt="Photo of Success is not a good teacher failure makes you humble" loading="lazy" data-src="wp-content/uploads/sites/8/2016/10/demo-new-11-220x150.jpg" /></a>
														</div>
														<div class="post-widget-body ">
															<h3 class="post-title"><a href="2016/10/28/success-is-not-a-good-teacher-failure-makes-you-humble/index.html">Success is not a good teacher failure makes you humble.</a></h3>
															<div class="post-meta"> <span class="date meta-item tie-icon">Oct 28, 2016</span> </div>
														</div>
													</li>
													
												</ul>
											</div>
											<div class="clearfix"></div>
										</div>
									</div>
								</aside>
							</div>
						</div>
					</div>
				</div>
				
				
				@endsection