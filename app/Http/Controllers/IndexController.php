<?php

namespace App\Http\Controllers;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Session;
use Schema;
use App\Cart;


class IndexController extends Controller
{
    public function main(Request $request) {
		// Получить кусок данных из сессии...
		
		$value = session('key');
		// Указать значение по умолчанию...
		
		$value = session('key', 'default');
		// Сохранить кусок данных в сессию...
		
		$date= date("Y-m-d H:i:s").rand(0,100);
		session(['key' =>$date]);
		//$data = $request->session()->all();
		$cart = new Cart;
		$cart->session_id=session('key');
		$cart->user_id=0;
		$cart->status=0;
		$cart->save();

		// echo '<pre>';
		// print_r ($cart);

        $header=view(ENV('APP_THEME').'.header')->with(array('main_active'=>'active'))->render();
        $main=view(Env('APP_THEME').'.index')->render();
        $footer=view(Env('APP_THEME').'.footer')->render();
		$chart_list=view(Env('APP_THEME').'.chart_init')->render();
        $main_page=$header.$main.$footer.$chart_list;
        return $main_page;
    }
	
	 public function catalog() {
		 
		$products=new ProductController;
		$product=$products->product();

        $header=view(ENV('APP_THEME').'.header')->with(array('catalog_active'=>'active'))->render();
        $main=view(Env('APP_THEME').'.catalog')->with(array(
			'product'=>$product
			))->render();
        $footer=view(Env('APP_THEME').'.footer')->render();
		$slide_init=view(Env('APP_THEME').'.slide_init')->render();
        $main_page=$header.$main.$footer.$slide_init;
        return $main_page;
    }
	
	public function where_buy() {

        $header=view(ENV('APP_THEME').'.header')->with(array('where_buy_active'=>'active'))->render();
        $main=view(Env('APP_THEME').'.where_buy')->render();
        $footer=view(Env('APP_THEME').'.footer')->render();
        $main_page=$header.$main.$footer;
        return $main_page;
    }
	
	public function technology() {

        $header=view(ENV('APP_THEME').'.header')->with(array('technology_active'=>'active'))->render();
        $main=view(Env('APP_THEME').'.technology')->render();
        $footer=view(Env('APP_THEME').'.footer')->render();
        $main_page=$header.$main.$footer;
        return $main_page;
    }
	
	public function testing() {

        $header=view(ENV('APP_THEME').'.header')->with(array('testing_active'=>'active'))->render();
        $main=view(Env('APP_THEME').'.testing')->render();
        $footer=view(Env('APP_THEME').'.footer')->render();
		$fancy=view(Env('APP_THEME').'.fancybox_init')->render();
        $main_page=$header.$main.$footer.$fancy;
        return $main_page;
    }
	
	public function dileram() {

        $header=view(ENV('APP_THEME').'.header')->with(array('dileram_active'=>'active'))->render();
        $main=view(Env('APP_THEME').'.for_partners')->render();
        $footer=view(Env('APP_THEME').'.footer')->render();
        $main_page=$header.$main.$footer;
        return $main_page;
    }
	
	public function articles() {

        $header=view(ENV('APP_THEME').'.header')->with(array('articles_active'=>'active'))->render();
        $main=view(Env('APP_THEME').'.articles')->render();
        $footer=view(Env('APP_THEME').'.footer')->render();
        $main_page=$header.$main.$footer;
        return $main_page;
    }
	
	public function contacts() {

        $header=view(ENV('APP_THEME').'.header')->with(array('contacts_active'=>'active'))->render();
        $main=view(Env('APP_THEME').'.contacts')->render();
        $footer=view(Env('APP_THEME').'.footer')->render();
        $main_page=$header.$main.$footer;
        return $main_page;
    }

}
