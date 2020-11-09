				@extends('master')
				@section('content')
				
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
												<h3> News </h3>
											</div>
											<div class="mag-box-container clearfix">
												<ul class="posts-items posts-list-container">
													@foreach ($post as $ns)
													<li class="post-item is-trending tie-standard">
														<div class="big-thumb-left-box-inner" data-lazy-bg="https://www.prashasanplusnews.com/public1/img/post/<?php echo ($ns->image); ?>"> <a aria-label="Not who has much is rich, but who gives much" href="2016/10/20/not-who-has-much-is-rich-but-who-gives-much/index.html" class="post-thumb"><span class="trending-post tie-icon-bolt trending-lg" aria-hidden="true"></span></a>
															<div class="post-overlay">
																<div class="post-content"> <a class="post-cat tie-cat-75" href="category/world/creative/index.html">News</a>
																	<h2 class="post-title"><a href="2016/10/20/not-who-has-much-is-rich-but-who-gives-much/index.html">{{$ns->title}}</a></h2>
																	<div class="thumb-meta">
																		<div class="post-meta clearfix"><span class="author-meta single-author no-avatars"><span class="meta-item meta-author-wrapper"><span class="meta-author"><a href="members/admin/index.html" class="author-name tie-icon" title="Kartikey">{{$ns->post_by}}</a></span></span>
																			</span><span class="date meta-item tie-icon">{{date('M d, Y', strtotime($ns->date))}}</span>
																			<!-- <div class="tie-alignright"><span class="meta-comment tie-icon meta-item fa-before">0</span><span class="meta-views meta-item very-hot"><span class="tie-icon-fire" aria-hidden="true"></span> 36,359 </span>
																			</div> -->
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

										<div class="container-wrapper">
											<div class="mag-box-title the-global-title">
												<h3> Politics </h3>
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
																			<!-- <div class="tie-alignright"><span class="meta-comment tie-icon meta-item fa-before">0</span><span class="meta-views meta-item very-hot"><span class="tie-icon-fire" aria-hidden="true"></span> 36,359 </span>
																			</div> -->
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
										</div>

										<div class="container-wrapper">
											<div class="mag-box-title the-global-title">
												<h3> Analysis </h3>
											</div>
											<div class="mag-box-container clearfix">
												<ul class="posts-items posts-list-container">
													@foreach ($vis as $vi)
													<li class="post-item is-trending tie-standard">
														<div class="big-thumb-left-box-inner" data-lazy-bg="https://www.prashasanplusnews.com/public1/img/post/<?php echo ($vi->image); ?>"> <a aria-label="Not who has much is rich, but who gives much" href="2016/10/20/not-who-has-much-is-rich-but-who-gives-much/index.html" class="post-thumb"><span class="trending-post tie-icon-bolt trending-lg" aria-hidden="true"></span></a>
															<div class="post-overlay">
																<div class="post-content"> <a class="post-cat tie-cat-75" href="category/world/creative/index.html">Analysis</a>
																	<h2 class="post-title"><a href="2016/10/20/not-who-has-much-is-rich-but-who-gives-much/index.html">{{$vi->title}}</a></h2>
																	<div class="thumb-meta">
																		<div class="post-meta clearfix"><span class="author-meta single-author no-avatars"><span class="meta-item meta-author-wrapper"><span class="meta-author"><a href="members/admin/index.html" class="author-name tie-icon" title="Kartikey">{{$vi->post_by}}</a></span></span>
																			</span><span class="date meta-item tie-icon">{{date('M d, Y', strtotime($vi->date))}}</span>
																			<!-- <div class="tie-alignright"><span class="meta-comment tie-icon meta-item fa-before">0</span><span class="meta-views meta-item very-hot"><span class="tie-icon-fire" aria-hidden="true"></span> 36,359 </span>
																			</div> -->
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</li>
													@endforeach
													@foreach ($opinion as $opi)
													<li class="post-item tie-standard">
														<a aria-label="The Top 10 Best Computer Speakers in the Market" href="2016/10/19/the-top-10-best-computer-speakers-in-the-market/index.html" class="post-thumb"><img width="220" height="150" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAG4AAABLAQMAAACr9CA9AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABZJREFUOI1jYMADmEe5o9xR7iiXQi4A4BsA388WUyMAAAAASUVORK5CYII=" class="attachment-jannah-image-small size-jannah-image-small lazy-img tie-small-image wp-post-image" alt="Photo of The Top 10 Best Computer Speakers in the Market" loading="lazy" data-src="https://www.prashasanplusnews.com/public1/img/post/<?php echo ($opi->image); ?>" /></a>
														<div class="post-details">
															<div class="post-meta clearfix"><span class="date meta-item tie-icon">{{date('M d, Y', strtotime($opi->date))}}</span></div>
															<h2 class="post-title"><a href="2016/10/19/the-top-10-best-computer-speakers-in-the-market/index.html">{{$opi->title}}</a></h2> </div>
													</li>
													@endforeach
												</ul>
												<div class="clearfix"></div>
											</div>
										</div>

										<div class="container-wrapper">
											<div class="mag-box-title the-global-title">
												<h3> State </h3>
											</div>
											<div class="mag-box-container clearfix">
												<ul class="posts-items posts-list-container">
													@foreach ($state as $st)
													<li class="post-item is-trending tie-standard">
														<div class="big-thumb-left-box-inner" data-lazy-bg="https://www.prashasanplusnews.com/public1/img/post/<?php echo ($st->image); ?>"> <a aria-label="Not who has much is rich, but who gives much" href="2016/10/20/not-who-has-much-is-rich-but-who-gives-much/index.html" class="post-thumb"><span class="trending-post tie-icon-bolt trending-lg" aria-hidden="true"></span></a>
															<div class="post-overlay">
																<div class="post-content"> <a class="post-cat tie-cat-75" href="category/world/creative/index.html">State</a>
																	<h2 class="post-title"><a href="2016/10/20/not-who-has-much-is-rich-but-who-gives-much/index.html">{{$st->title}}</a></h2>
																	<div class="thumb-meta">
																		<div class="post-meta clearfix"><span class="author-meta single-author no-avatars"><span class="meta-item meta-author-wrapper"><span class="meta-author"><a href="members/admin/index.html" class="author-name tie-icon" title="Kartikey">{{$st->post_by}}</a></span></span>
																			</span><span class="date meta-item tie-icon">{{date('M d, Y', strtotime($st->date))}}</span>
																			<!-- <div class="tie-alignright"><span class="meta-comment tie-icon meta-item fa-before">0</span><span class="meta-views meta-item very-hot"><span class="tie-icon-fire" aria-hidden="true"></span> 36,359 </span>
																			</div> -->
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</li>
													@endforeach
													@foreach ($po_state as $po_st)
													<li class="post-item tie-standard">
														<a aria-label="The Top 10 Best Computer Speakers in the Market" href="2016/10/19/the-top-10-best-computer-speakers-in-the-market/index.html" class="post-thumb"><img width="220" height="150" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAG4AAABLAQMAAACr9CA9AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABZJREFUOI1jYMADmEe5o9xR7iiXQi4A4BsA388WUyMAAAAASUVORK5CYII=" class="attachment-jannah-image-small size-jannah-image-small lazy-img tie-small-image wp-post-image" alt="Photo of The Top 10 Best Computer Speakers in the Market" loading="lazy" data-src="https://www.prashasanplusnews.com/public1/img/post/<?php echo ($po_st->image); ?>" /></a>
														<div class="post-details">
															<div class="post-meta clearfix"><span class="date meta-item tie-icon">{{date('M d, Y', strtotime($po_st->date))}}</span></div>
															<h2 class="post-title"><a href="2016/10/19/the-top-10-best-computer-speakers-in-the-market/index.html">{{$po_st->title}}</a></h2> </div>
													</li>
													@endforeach
												</ul>
												<div class="clearfix"></div>
											</div>
										</div>

										<div class="container-wrapper">
											<div class="mag-box-title the-global-title">
												<h3> Sport </h3>
											</div>
											<div class="mag-box-container clearfix">
												<ul class="posts-items posts-list-container">
													@foreach ($sport as $spo)
													<li class="post-item is-trending tie-standard">
														<div class="big-thumb-left-box-inner" data-lazy-bg="https://www.prashasanplusnews.com/public1/img/post/<?php echo ($spo->image); ?>"> <a aria-label="Not who has much is rich, but who gives much" href="2016/10/20/not-who-has-much-is-rich-but-who-gives-much/index.html" class="post-thumb"><span class="trending-post tie-icon-bolt trending-lg" aria-hidden="true"></span></a>
															<div class="post-overlay">
																<div class="post-content"> <a class="post-cat tie-cat-75" href="category/world/creative/index.html">Sport</a>
																	<h2 class="post-title"><a href="2016/10/20/not-who-has-much-is-rich-but-who-gives-much/index.html">{{$spo->title}}</a></h2>
																	<div class="thumb-meta">
																		<div class="post-meta clearfix"><span class="author-meta single-author no-avatars"><span class="meta-item meta-author-wrapper"><span class="meta-author"><a href="members/admin/index.html" class="author-name tie-icon" title="Kartikey">{{$spo->post_by}}</a></span></span>
																			</span><span class="date meta-item tie-icon">{{date('M d, Y', strtotime($spo->date))}}</span>
																			<!-- <div class="tie-alignright"><span class="meta-comment tie-icon meta-item fa-before">0</span><span class="meta-views meta-item very-hot"><span class="tie-icon-fire" aria-hidden="true"></span> 36,359 </span>
																			</div> -->
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</li>
													@endforeach
													@foreach ($po_sport as $po_sp)
													<li class="post-item tie-standard">
														<a aria-label="The Top 10 Best Computer Speakers in the Market" href="2016/10/19/the-top-10-best-computer-speakers-in-the-market/index.html" class="post-thumb"><img width="220" height="150" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAG4AAABLAQMAAACr9CA9AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABZJREFUOI1jYMADmEe5o9xR7iiXQi4A4BsA388WUyMAAAAASUVORK5CYII=" class="attachment-jannah-image-small size-jannah-image-small lazy-img tie-small-image wp-post-image" alt="Photo of The Top 10 Best Computer Speakers in the Market" loading="lazy" data-src="https://www.prashasanplusnews.com/public1/img/post/<?php echo ($po_sp->image); ?>" /></a>
														<div class="post-details">
															<div class="post-meta clearfix"><span class="date meta-item tie-icon">{{date('M d, Y', strtotime($po_sp->date))}}</span></div>
															<h2 class="post-title"><a href="2016/10/19/the-top-10-best-computer-speakers-in-the-market/index.html">{{$po_sp->title}}</a></h2> </div>
													</li>
													@endforeach
												</ul>
												<div class="clearfix"></div>
											</div>
										</div>

										<div class="container-wrapper">
											<div class="mag-box-title the-global-title">
												<h3> Entertainment </h3>
											</div>
											<div class="mag-box-container clearfix">
												<ul class="posts-items posts-list-container">
													@foreach ($enter as $ent)
													<li class="post-item is-trending tie-standard">
														<div class="big-thumb-left-box-inner" data-lazy-bg="https://www.prashasanplusnews.com/public1/img/post/<?php echo ($ent->image); ?>"> <a aria-label="Not who has much is rich, but who gives much" href="2016/10/20/not-who-has-much-is-rich-but-who-gives-much/index.html" class="post-thumb"><span class="trending-post tie-icon-bolt trending-lg" aria-hidden="true"></span></a>
															<div class="post-overlay">
																<div class="post-content"> <a class="post-cat tie-cat-75" href="category/world/creative/index.html">Entertainment</a>
																	<h2 class="post-title"><a href="2016/10/20/not-who-has-much-is-rich-but-who-gives-much/index.html">{{$ent->title}}</a></h2>
																	<div class="thumb-meta">
																		<div class="post-meta clearfix"><span class="author-meta single-author no-avatars"><span class="meta-item meta-author-wrapper"><span class="meta-author"><a href="members/admin/index.html" class="author-name tie-icon" title="Kartikey">{{$ent->post_by}}</a></span></span>
																			</span><span class="date meta-item tie-icon">{{date('M d, Y', strtotime($ent->date))}}</span>
																			<!-- <div class="tie-alignright"><span class="meta-comment tie-icon meta-item fa-before">0</span><span class="meta-views meta-item very-hot"><span class="tie-icon-fire" aria-hidden="true"></span> 36,359 </span>
																			</div> -->
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</li>
													@endforeach
													@foreach ($po_enter as $po_ent)
													<li class="post-item tie-standard">
														<a aria-label="The Top 10 Best Computer Speakers in the Market" href="2016/10/19/the-top-10-best-computer-speakers-in-the-market/index.html" class="post-thumb"><img width="220" height="150" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAG4AAABLAQMAAACr9CA9AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABZJREFUOI1jYMADmEe5o9xR7iiXQi4A4BsA388WUyMAAAAASUVORK5CYII=" class="attachment-jannah-image-small size-jannah-image-small lazy-img tie-small-image wp-post-image" alt="Photo of The Top 10 Best Computer Speakers in the Market" loading="lazy" data-src="https://www.prashasanplusnews.com/public1/img/post/<?php echo ($po_ent->image); ?>" /></a>
														<div class="post-details">
															<div class="post-meta clearfix"><span class="date meta-item tie-icon">{{date('M d, Y', strtotime($po_ent->date))}}</span></div>
															<h2 class="post-title"><a href="2016/10/19/the-top-10-best-computer-speakers-in-the-market/index.html">{{$po_ent->title}}</a></h2> </div>
													</li>
													@endforeach
												</ul>
												<div class="clearfix"></div>
											</div>
										</div>
									</div>

									<div id="tie-block_1837" class="mag-box miscellaneous-box first-post-gradient has-first-big-post media-overlay has-custom-color" data-current="1">
										<div class="container-wrapper">
											<div class="mag-box-title the-global-title">
												<h3> Videos </h3>
												
											</div>
											<div class="mag-box-container clearfix">

												<ul class="posts-items posts-list-container">
													
													@foreach ($video as $vd)
														@foreach ($master as $ct)
														@endforeach
													<li class="post-item is-trending tie-video"> <a aria-label="{{$vd->video_url}}" href="{{'/'}}{{$vd->video_url}}" class="post-thumb"><span class="trending-post tie-icon-bolt trending-lg" aria-hidden="true"></span> <div class="post-thumb-overlay-wrap"> <div class="post-thumb-overlay"> <span class="tie-icon tie-media-icon"></span> </div> </div> <img width="780" height="470" src="https://www.prashasanplusnews.com/public1/img/post/{{$vd->image}}" class="attachment-jannah-image-post size-jannah-image-post lazy-img wp-post-image" alt="Photo of Play This Game for Free on Steam This Weekend" loading="lazy" data-src="https://www.prashasanplusnews.com/public1/img/post/{{$vd->image}}" /></a>
														<div class="clearfix"></div>
														<div class="post-overlay">
															<div class="post-content"> <a class="post-cat tie-cat-75" href="#">News</a>
																<h2 class="post-title"><a href="https://www.prashasanplusnews.com/<?php echo ($vdd ?? ''); ?>/<?php echo ($vd->subcat); ?>/<?php echo ($vd->url); ?>">{{$vd->title}}</a></h2>
																<div class="thumb-meta">
																	<div class="post-meta clearfix"><span class="author-meta single-author no-avatars"><span class="meta-item meta-author-wrapper"><span class="meta-author"><a href="members/admin/index.html" class="author-name tie-icon" title="Fouad Badawy">{{$vd->post_by}}</a></span></span>
																		</span><span class="date meta-item tie-icon">{{date('M d, Y', strtotime($vd->date))}}</span>
																	</div>
																</div>
															</div>
														</div>
													</li>
													@endforeach
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
										
										<div id="posts-list-widget-6" class="container-wrapper widget posts-list">
											<div class="widget-title the-global-title">
												<div class="the-subtitle">Recent News<span class="widget-title-icon tie-icon"></span></div>
											</div>
											<div class="widget-posts-list-container posts-list-counter">
												
												<ul class="posts-list-items widget-posts-wrapper">
												@foreach ($recent as $rec)
													<li class="widget-single-post-item widget-post-list is-trending tie-video">
														<div class="post-widget-thumbnail">
															<a aria-label="Success is not a good teacher failure makes you humble" href="{{'/'}}{{$rec->url}}" class="post-thumb"><img width="220" height="150" src="https://www.prashasanplusnews.com/public1/img/post/{{$rec->image}}" class="attachment-jannah-image-small size-jannah-image-small lazy-img tie-small-image wp-post-image" alt="{{$rec->title}}" loading="lazy" data-src="https://www.prashasanplusnews.com/public1/img/post/{{$rec->image}}" /></a>
														</div>
														<div class="post-widget-body ">
															<h3 class="post-title"><a href="{{'/'}}{{$rec->url}}">{{$rec->title}}</a></h3>
															<div class="post-meta"> <span class="date meta-item tie-icon">{{date('M d, Y', strtotime($rec->date))}}</span> </div>
														</div>
													</li>
												@endforeach
												</ul>

											</div>
											<div class="clearfix"></div>
										</div>
										
										<div id="posts-list-widget-31" class="container-wrapper widget posts-list">
											<div class="widget-title the-global-title">
												<div class="the-subtitle">Life Style<span class="widget-title-icon tie-icon"></span></div>
											</div>
											<div class="widget-posts-list-container posts-list-counter">
												<ul class="posts-list-items widget-posts-wrapper">
													@foreach ($lifestyle as $life)
														<li class="widget-single-post-item widget-post-list is-trending tie-video">
															<div class="post-widget-thumbnail">
																<a aria-label="Success is not a good teacher failure makes you humble" href="{{'/'}}{{$life->url}}" class="post-thumb"><img width="220" height="150" src="https://www.prashasanplusnews.com/public1/img/post/{{$life->image}}" class="attachment-jannah-image-small size-jannah-image-small lazy-img tie-small-image wp-post-image" alt="Photo of Success is not a good teacher failure makes you humble" loading="lazy" data-src="https://www.prashasanplusnews.com/public1/img/post/{{$life->image}}" /></a>
															</div>
															<div class="post-widget-body ">
																<h3 class="post-title"><a href="{{'/'}}{{$life->url}}">{{$life->title}}</a></h3>
																<div class="post-meta"> <span class="date meta-item tie-icon">{{date('M d, Y', strtotime($life->date))}}</span> </div>
															</div>
														</li>
													@endforeach
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