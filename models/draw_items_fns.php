<?
function drawAllGoods(){
    global $connect;
    $res = allCategory();
    if(!$res)
        return "<p>Товары ещё не добавлены.</p>";
    else{
        $result = '';
        while($dataCategory = mysqli_fetch_assoc($res)){
            $categoryId = $dataCategory['category_id'];
            $sql = "SELECT * FROM goods WHERE category_id=$categoryId";
            $resItem = mysqli_query($connect,$sql);
            if($resItem->num_rows === 0)
                //если в данной категории нет товаров то категорию пропускаем
                continue;
            $result .= '<h3 class="title-category">'.$dataCategory['category_title'].'</h3><div class="catalog">';
            while($dataItem = mysqli_fetch_assoc($resItem)){
                $result .= '<div class="item"><div class="title_div"><h4 class="item_title">'.$dataItem['good_title'].'</h4></div>';
                $result .= '<div class="item_img"><img src="/img/min/'.$dataItem['image_name'].'" alt="Фотография '.$dataItem['good_title'].'" class="item_image"></div>';
                $result .= '<p class="desc">'.$dataItem['good_short_desc'].'</p>';
                $result .= '<p class="item_price">'.$dataItem['good_price'].'р</p>';
                if(!itemInCart($dataItem['good_id']))
                    $result .= '<div class="btns"><div class="btn btn_buy" data-idgoods="'.$dataItem['good_id'].'">Купить</div>';
                else
                    $result .= '<div class="btns"><div class="btn btn_buy incart" data-idgoods="'.$dataItem['good_id'].'">В корзине</div>';
                $result .= '<a href="/product/'.$dataCategory['categoru_cpu'].'/'.$dataItem['good_cpu'].'" class="btn btn_desc" target="_blank">Подробнее</a></div></div>';
            }
            $result.='</div>';   
        }
        return $result;
    }

}