<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session as LaravelSession;
use App\Models\Item;
use Illuminate\Support\Facades\Storage;
use App\Models\Comment;


class ItemController extends Controller
{
   public function index(Request $request)
{
    $keyword = $request->keyword;

    $query = Item::query();

    if (!empty($keyword)) {
        $query->where('name', 'like', '%' . $keyword . '%');
    }

    $items = $query->get();

    $soldItems = Order::pluck('item_id')->toArray();

    return view('index', compact('items', 'soldItems', 'keyword'));
}

public function show($id)
{
    $item = Item::findOrFail($id);

    $likes = LaravelSession::get('likes', []);

    $liked = in_array($id, $likes);

    $comments = Comment::where('item_id', $id)
        ->latest()
        ->get();

    return view('show', compact(
        'item',
        'id',
        'liked',
        'comments'
    ));
}
  public function purchase($id)
{
    $item = Item::findOrFail($id);

    return view('purchase', compact('item','id'));
}

    public function checkout(Request $request,$id)
    {
    $item = Item::findOrFail($id);

    $user = Auth::user();

    Order::create([
    'user_id' => $user->id,
    'item_id' => $id,
    'postcode' => $user->postcode,
    'address' => $user->address,
    'building' => $user->building,
    'payment_method' => $request->payment_method,
    ]);
    Stripe::setApiKey(config('services.stripe.secret'));

    $checkout_session = Session::create([

        'payment_method_types' => [
            'card',
            'konbini'
        ],

        'line_items' => [[
            'price_data' => [
                'currency' => 'jpy',

                'product_data' => [
                    'name' => $item['name'],
                ],

                'unit_amount' => $item['price'],
            ],

            'quantity' => 1,
        ]],

        'mode' => 'payment',

        'success_url' => url('/'),

        'cancel_url' => url('/purchase/' . $id),
    ]);

    return redirect($checkout_session->url);
    }

    public function sell()
    
{
    return view('sell');
}

public function store(Request $request)
{
    $file = $request->file('image');

    $filename = $file->getClientOriginalName();

    $file->storeAs('items', $filename, 'public');

    Item::create([
        'name' => $request->name,
        'price' => $request->price,
        'brand_name' => $request->brand_name,
        'description' => $request->description,
        'condition_id' => $request->condition_id,
        'image_path' => 'items/' . $filename, // ←ここを統一
        'user_id' => auth()->id(),
    ]);

    return redirect('/items');
}

public function mypage()
{
    $user = Auth::user();

    return view('mypage', compact('user'));
}

public function like($id)
{
    $likes = LaravelSession::get('likes', []);

    if (in_array($id, $likes)) {
        $likes = array_diff($likes, [$id]);
    } else {
        $likes[] = $id;
    }

    LaravelSession::put('likes', $likes);

    return back();
}
public function mylist(Request $request)
{
    $keyword = $request->keyword;

    $likes = LaravelSession::get('likes', []);

    $query = Item::whereIn('id', $likes);

    if (!empty($keyword)) {
        $query->where('name', 'like', '%' . $keyword . '%');
    }

    $items = $query->get();

    return view('mylist', compact('items', 'keyword'));
}

public function comment(Request $request, $id)
{
    Comment::create([
        'user_id' => auth()->id(),
        'item_id' => $id,
        'comment' => $request->comment,
    ]);

    return back();
}


    private function items()
    {
        return [

            1 => [
                'name' => '腕時計',
                'brand' => 'COACH',
                'price' => '15000',
                'image' => 'Armani+Mens+Clock.jpg',
                'description' => 'スタイリッシュな腕時計です',
                'category' => ['ファッション', 'メンズ'],
                'condition' => '良好',
            ],

            2 => [
                'name' => 'HDD',
                'brand' => 'TOSHIBA',
                'price' => '5000',
                'image' => 'HDD+Hard+Disk.jpg',
                'description' => '高速で使いやすいHDDです',
                'category' => ['家電'],
                'condition' => '目立った傷や汚れなし',
            ],

            3 => [
                'name' => '玉ねぎ3束',
                'brand' => '農家直送',
                'price' => '300',
                'image' => 'iLoveIMG+d.jpg',
                'description' => '新鮮な玉ねぎです',
                'category' => ['キッチン'],
                'condition' => 'やや傷や汚れあり',
            ],

            4 => [
                'name' => '革靴',
                'brand' => 'REGAL',
                'price' => '4000',
                'image' => 'Leather+Shoes+Product+Photo.jpg',
                'description' => '高級感のある革靴です',
                'category' => ['ファッション'],
                'condition' => '状態が悪い',
            ],

            5 => [
                'name' => 'ノートPC',
                'brand' => 'DELL',
                'price' => '45000',
                'image' => 'Living+Room+Laptop.jpg',
                'description' => '高性能ノートパソコン',
                'category' => ['家電'],
                'condition' => '良好',
            ],

            6 => [
                'name' => 'マイク',
                'brand' => 'SONY',
                'price' => '8000',
                'image' => 'Music+Mic+4632231.jpg',
                'description' => '高音質マイクです',
                'category' => ['家電'],
                'condition' => '目立った傷や汚れなし',
            ],

            7 => [
                'name' => 'ショルダーバッグ',
                'brand' => 'GUCCI',
                'price' => '3500',
                'image' => 'Purse+fashion+pocket.jpg',
                'description' => 'おしゃれなバッグです',
                'category' => ['ファッション', 'レディース'],
                'condition' => 'やや傷や汚れあり',
            ],

            8 => [
                'name' => 'タンブラー',
                'brand' => 'STARBUCKS',
                'price' => '500',
                'image' => 'Tumbler+souvenir.jpg',
                'description' => '使いやすいタンブラー',
                'category' => ['キッチン'],
                'condition' => '状態が悪い',
            ],

            9 => [
                'name' => 'コーヒーミル',
                'brand' => 'Kalita',
                'price' => '4000',
                'image' => 'Waitress+with+Coffee+Grinder.jpg',
                'description' => '手動コーヒーミル',
                'category' => ['キッチン'],
                'condition' => '良好',
            ],

            10 => [
                'name' => 'メイクセット',
                'brand' => 'CHANEL',
                'price' => '2500',
                'image' => 'mekeup.jpg',
                'description' => '人気メイクセット',
                'category' => ['コスメ'],
                'condition' => '目立った傷や汚れなし',
            ],

        ];
    }
}