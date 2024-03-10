<section id="bodysection">
    <div class="catalog_bcg_wrapper">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <div class="catalog_head_text h-100 d-flex">
                        <p class="my-auto">
                            Каталог товаров
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="products_wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 test p-0">
                    <div class="products">
                        <div class="productes_header d-flex justify-content-between">
                            <p class="mb-0 my-auto">Показано: 10 из 45</p>
                        </div>
						<?php if(isset($product)) {
							foreach($product as $item) {
						?>
                        <div onclick="javascript:location.href='/product/<?php echo $item->id; ?>'" class="product_body">
                            <div class="row">
                                <div class="col-12 col-lg-3 text-center">
                                    <img class="img-fluid" src="<?php echo $item->photo; ?>" alt="">
                                </div>
                                <div class="col-12 col-lg-6">
                                    <div class="product_info_wrapper">
                                        <p>
                                            <a href="/product/<?php echo $item->id; ?>'"><?php echo $item->name; ?></a>
                                        </p>
                                    </div>
                                    <div class="product_stars">
                                            <i class="fa fa-star gold" aria-hidden="true"></i>
                                            <i class="fa fa-star gold" aria-hidden="true"></i>
                                            <i class="fa fa-star gold" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                    </div>
                                     <div class="about_prod_wrapper mt-3">
                                        <p>
                                           <?php echo $item->about; ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-12 col-lg-3">
                                    <div class="price_wrapper text-center">
                                        <p>
                                            ₽<span> <?php echo $item->main_price; ?></span> -  ₽<span> <?php echo $item->all_price; ?></span>
                                        </p>
                                    </div>
                                    <div class="products_button_wrapper text-center">
                                        <a href="#">Купить</a>
                                    </div>
									<div class="v_korziny_btn text-center">
										<a href="#"> В корзину </a>
									</div>
                                </div>
                            </div>
                        </div>
					<?php }} ?>
                    </div>
                </div>
                <div class="col-12 col-lg-4 test">
                    <div class="product_filter_wrapper">
                        <div class="search_input_wrapper text-center">
                            <input class="prod_search_input" type="text" placeholder="Поиск">
                            <button><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </div>
                    <div class="product_filter_draggable_wrapper d-flex flex-column">
                        <p class="price_filter_text">
                            Фильтр цены
                        </p>
                     <div class="mx-auto" id="slider-range"></div>
                        <p class="text-center">
                          <input class="product_price_number" type="text" id="amount" readonly style="border:0; color:#000; font-weight:bold;width: 100%;text-align: center;margin-top: 1rem;font-size: 1.5rem;">
                        </p>
                    </div>
                    <div class="product_checklist_wrapper">
                        <p class="price_filter_text">
                            Категории
                        </p>
                        <div class="checks_wrapper d-flex flex-column">
                            <button id="1" class="checks">Двигатель</button>
                            <button id="2" class="checks">Система охлаждения</button>
                            <button id="3" class="checks">АКПП</button>
                            <button id="4" class="checks">Тормозная система</button>
                            <button id="5" class="checks">МКПП</button>
                        </div>
                        <div class="product_search_button text-center">
                            <a href="#">Найти</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 </section>