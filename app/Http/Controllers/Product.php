<?php

namespace App\Http\Controllers;
use App\Models\Language;
use App\Models\Upload;
use App\Models\UsedUpload;
use App\Models\User;
use Auth;
use Storage;
use App\Http\Requests\ProductRequest;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductTranslation;
use App\Models\Category;
use App\Models\ProductTax;
use App\Models\AttributeValue;
use App\Models\Cart;
use Carbon\Carbon;
use Combinations;
use CoreComponentRepository;
use Artisan;
use Cache;
use Str;
use App\Services\ProductService;
use App\Services\ProductTaxService;
use App\Services\ProductFlashDealService;
use App\Services\ProductStockService;

class ProductController extends Controller
{

    public function all_products(Request $request)
    {

        $col_name = $request->get('col_name');
        $query = $request->get('query');
        $seller_id = $request->get('seller_id');
        $sort_search = $request->get('sort_search');
        $products = Product::orderBy('created_at', 'desc')->where('auction_product', 0)->where('wholesale_product', 0);
        $published = null;

        if ($request->has('user_id') && $request->user_id != null) {
            $products = $products->where('user_id', $request->user_id);
            $seller_id = $request->user_id;
        }
        if ($request->search != null) {
            $sort_search = $request->search;
            $products = $products
                ->where(function ($q) use ($sort_search) {
                    $q->where('name', 'like', '%' . $sort_search . '%')
                        ->orWhereHas('product_translations', function ($q) use ($sort_search) {
                            $q->where('name', 'like', '%' . $sort_search . '%');
                        })
                        ->orWhereHas('user', function ($q) use ($sort_search) {
                            $q->where('name', 'like', '%' . $sort_search . '%');
                        })
                        ->orWhereHas('stocks', function ($q) use ($sort_search) {
                            $q->where('sku', 'like', '%' . $sort_search . '%');
                        });
                });
        }

        if ($request->type != null) {
            $var = explode(",", $request->type);
            $col_name = $var[0];
            $query = $var[1];
            $products = $products->orderBy($col_name, $query);

            $sort_type = $request->type;
        }
        if ($request->get('col_name') != null && $request->get('query') != null) {
            $products = $products->orderBy($request->get('col_name'),$request->get('query'));
        }
        if ($request->has('published')) {
            $published = $request->published;
            if($published != ''){
                $products =$products->published($published);
            }
        }



        $products = $products->paginate(15);
        $type = 'All';

        return view('index', compact('products', 'published','type', 'col_name', 'query', 'seller_id', 'sort_search'));
    }
}
