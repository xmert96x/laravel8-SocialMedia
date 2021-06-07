<div>
    <div class="container">
        <div class="row">
            <!-- BEGIN SEARCH RESULT -->
            <div class="col-md-12">
                <div class="grid search">
                    <div class="grid-body">
                        <div class="row">
                            <!-- BEGIN FILTERS -->
                            <div class="col-md-3">
                                <h2 class="grid-title"><i class="fa fa-filter"></i> Filtreler</h2>
                                <hr>
                                <input wire:model="test">

                            {{$test}}
                            <!-- BEGIN FILTER BY CATEGORY -->
                                <h4>Seçenekler</h4>
                                <div class="checkbox">
                                    <label><input type="checkbox" class="icheck"> Şehir</label>
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" class="icheck"> Meselek</label>
                                </div>
                                <!-- END FILTER BY CATEGORY -->

                                <div class="padding"></div>

                                <!-- BEGIN FILTER BY DATE -->
                                <h4>Doğum Tairihi:</h4>
                                From
                                <div class="exmp-wrp">
                                    <div class="btn-wrp">
                                        <input type="date" class="btn-clck"/>
                                    </div>
                                    <span class="input-group-addon bg-blue btndate"><i class="fa fa-th"></i></span>
                                </div>

                                To
                                <div class="exmp-wrp">
                                    <div class="btn-wrp">
                                        <input type="date" class="btn-clck"/>
                                    </div>
                                    <span class="input-group-addon bg-blue btndate"><i class="fa fa-th"></i></span>
                                </div>
                                <!-- END FILTER BY DATE -->

                                <div class="padding"></div>


                            </div>
                            <!-- END FILTERS -->
                            <!-- BEGIN RESULT -->
                            <div class="col-md-9">
                                <h2><i class="fa fa-file-o"></i> Arama Sonuçları</h2>
                                <hr>
                                <!-- BEGIN SEARCH INPUT -->

                                <!-- END SEARCH INPUT -->
                                <p>"{{$request}} ile eşleşen tüm sonuçlar gösteriliyor"</p>

                                <div class="padding"></div>

                                <div class="row">
                                    <!-- BEGIN ORDER RESULT -->
                                    <div class="col-sm-6">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default dropdown-toggle"
                                                    data-toggle="dropdown">
                                                Sırlama<span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="javascript:void(0)" wire:click="sort()">Varsayılan</a></li>
                                                <li><a href="javascript:void(0)" wire:click="sort1()">Ad</a></li>

                                                <li><a href="javascript:void(0)" wire:click="sort12()">Soyad</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- END ORDER RESULT -->

                                    <!--<div class="col-md-6 text-right">
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default active"><i class="fa fa-list"></i></button>
                                            <button type="button" class="btn btn-default"><i class="fa fa-th"></i></button>
                                        </div>
                                    </div>-->
                                </div>

                                <!-- BEGIN TABLE RESULT -->
                                <div class="table-responsive">
                                    <table class="table table-hover">
                                        <tbody>
                                        <tr>

                                            <td class="image"><img src="https://via.placeholder.com/400x300/FF8C00"
                                                                   alt=""></td>
                                            <td class="product"><strong>Product 1</strong><br>This is the product
                                                description.
                                            </td>
                                            <td class="price text-right">$350</td>
                                        </tr>
                                        <tr>

                                            <td class="image"><img src="https://via.placeholder.com/400x300/5F9EA0"
                                                                   alt=""></td>
                                            <td class="product"><strong>Product 2</strong><br>This is the product
                                                description.
                                            </td>
                                            <td class="price text-right">$1,050</td>
                                        </tr>
                                        <tr>

                                            <td class="image"><img src="https://via.placeholder.com/400x300" alt="">
                                            </td>
                                            <td class="product"><strong>Product 3</strong><br>This is the product
                                                description.
                                            </td>
                                            <td class="price text-right">$550</td>
                                        </tr>
                                        <tr>
                                            <td class="image"><img src="https://via.placeholder.com/400x300/8A2BE2"
                                                                   alt=""></td>
                                            <td class="product"><strong>Product 4</strong><br>This is the product
                                                description.
                                            </td>
                                            <td class="price text-right">$330</td>
                                        </tr>
                                        <tr>

                                            <td class="image"><img src="https://via.placeholder.com/400x300" alt="">
                                            </td>
                                            <td class="product"><strong>Product 5</strong><br>This is the product
                                                description.
                                            </td>
                                            <td class="price text-right">$540</td>
                                        </tr>
                                        <tr>

                                            <td class="image"><img src="https://via.placeholder.com/400x300/6495ED"
                                                                   alt=""></td>
                                            <td class="product"><strong>Product 6</strong><br>This is the product
                                                description.
                                            </td>
                                            <td class="price text-right">$870</td>
                                        </tr>
                                        <tr>

                                            <td class="image"><img src="https://via.placeholder.com/400x300/DC143C"
                                                                   alt=""></td>
                                            <td class="product"><strong>Product 7</strong><br>This is the product
                                                description.
                                            </td>
                                            <td class="price text-right">$620</td>
                                        </tr>
                                        <tr>

                                            <td class="image"><img src="https://via.placeholder.com/400x300/9932CC"
                                                                   alt=""></td>
                                            <td class="product"><strong>Product 8</strong><br>This is the product
                                                description.
                                            </td>
                                            <td class="price text-right">$1,550</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END TABLE RESULT -->

                                <!-- BEGIN PAGINATION -->
                                <ul class="pagination">
                                    <li class="disabled"><a href="#">«</a></li>
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#">»</a></li>
                                </ul>
                                <!-- END PAGINATION -->
                            </div>
                            <!-- END RESULT -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- END SEARCH RESULT -->
        </div>
    </div>
</div>


@livewireStyles
<script src="{{ asset('js/app.js') }}" defer></script>

@livewireScripts

