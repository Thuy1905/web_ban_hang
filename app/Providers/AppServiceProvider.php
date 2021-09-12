<?php

namespace App\Providers;
use App\Models\ProductType;
use Illuminate\Support\ServiceProvider;
use App\Cart;
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
          
        view()->composer('header',function($view){
            if(Session('cart')){
                $oldCart = session()->get('cart');
                $cart = new Cart($oldCart);
                $view->with(['cart'=>Session()->get('cart'),'product_cart'=>$cart->items,
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