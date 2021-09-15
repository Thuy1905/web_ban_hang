<?php

namespace App\Providers;
use App\Models\ProductType;
use Illuminate\Support\ServiceProvider;
use App\Models\Cart;
use Session;    
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('header',function($view){
            $loai_sp = ProductType::all();
            
            $view->with('loai_sp',$loai_sp);
        }); 
          
        view()->composer(['header','page.dat_hang'],function($view){
            if(session('cart')){
                $oldCart = session()->get('cart');
                $cart = new Cart($oldCart);
                $view->with(['cart'=>session()->get('cart'),'product_cart'=>$cart->items,
                'totalPrice'=>$cart->totalPrice,'totalQty'=>$cart->totalQty]);
            }
        });


    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function register()
    {
        //    
    }
}