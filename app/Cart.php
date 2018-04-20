<?php

namespace App;

class Cart
{
	public $items = null;
	public $totalQty = 0;
	public $totalPrice = 0;

	public function __construct($oldCart){
		if($oldCart){
			$this->items = $oldCart->items;
			$this->totalQty = $oldCart->totalQty;
			$this->totalPrice = $oldCart->totalPrice;
		}
	}

	public function add($item, $qty=1){
		if($item->promotion_price == 0){
			$giohang = ['qty'=>0, 'price' => $item->price, 'item' => $item];
		}
		else{
			$giohang = ['qty'=>0, 'price' => $item->promotion_price, 'item' => $item];
		}
		if($this->items){
			if(array_key_exists($item->id, $this->items)){
				$giohang = $this->items[$item->id];
			}
		}
		// $giohang['qty']++;
		$giohang['qty'] = $giohang['qty'] + $qty; //cộng thêm 1 = 2
		if($item->promotion_price == 0){
			$giohang['price'] = $item->price * $giohang['qty'];
		}
		else{
			$giohang['price'] = $item->promotion_price * $giohang['qty'];
		}
		$this->items[$item->id] = $giohang;
		// $this->totalQty++;
		$this->totalQty = $this->totalQty + $qty;
		if($item->promotion_price == 0){
			// $this->totalPrice += $item->price;
			$this->totalPrice = ($this->totalPrice + $qty*$giohang['item']->price);
		}
		else{
			// $this->totalPrice += $item->promotion_price;
			$this->totalPrice = ($this->totalPrice + $qty*$giohang['item']->promotion_price);
		}
	}
	//xóa 1
	public function reduceByOne($id){
		$this->items[$id]['qty']--;
		$this->items[$id]['price'] -= $this->items[$id]['item']['price'];
		$this->totalQty--;
		$this->totalPrice -= $this->items[$id]['item']['price'];
		if($this->items[$id]['qty']<=0){
			unset($this->items[$id]);
		}
	}
	//xóa nhiều
	public function removeItem($id){
		$this->totalQty -= $this->items[$id]['qty'];
		$this->totalPrice -= $this->items[$id]['price'];
		unset($this->items[$id]);
	}
	public function update($item, $qty){
		$giohang = [
			'qty'=>$qty, //khác với addnew thì update cho phép tùy chỉnh số lượng
			'price' => $item->promotion_price, 
			'item' => $item
		];
		$id = $item->id;
		if($this->items){
			if(array_key_exists($id, $this->items)){
				$this->totalPrice -= $this->items[$id]['price'];
				$this->totalQty -= $this->items[$id]['qty'];
			}
		}
		$giohang['price'] = $item->promotion_price * $giohang['qty'];
		$this->items[$id] = $giohang;
		$this->totalQty = $this->totalQty + $qty;
		$this->totalPrice = $this->totalPrice + ($giohang['item']->promotion_price)*$qty;
	}
}
