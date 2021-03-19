<?php

include_once __DIR__ . "/../Model/Product.php";

class PagerService
{
    public static function printPager()
    {
        $allPageNumber = (new Product())->getNumberPage(isset($_GET['category_id']) ? explode(',',$_GET['category_id']) : [], $_GET['limit'] ?? Product::NUMBER_PRODUCTS_PER_PAGE);
                        
        $currentPage = intval($_GET['page'] ?? 1);
    
        if($currentPage<1 || $currentPage >$allPageNumber){
            $currentPage = 1;
        }
    
        $arNumberPages =[];
        $firstNamberPage = 1;
        if($currentPage>=2){
            if($currentPage > $allPageNumber-2){
            $arNumberPages[] = $currentPage-4;
            }
            if($currentPage > $allPageNumber-1){
                $arNumberPages[] = $currentPage-3;
            }
            if($currentPage>=3){
                $arNumberPages[] = $currentPage-2;
            }
            $arNumberPages[] = $currentPage-1;
        }
    
        $arNumberPages[] = $currentPage;
        for($next=1; sizeof($arNumberPages)<5; $next++){
            $arNumberPages[] = $currentPage + $next;
        }
?>
        
        <div class="pager">
            <?php
                if($currentPage>1) {
                    print '<div class="page-item"><a class="page-link" href="/?model=product&action=all' . (isset($_GET['category_id']) ? '&category_id='.$_GET['category_id'] : ''). '&page=1"><<</a></div>';
                    print '<div class="page-item"><a class="page-link" href="/?model=product&action=all' . (isset($_GET['category_id']) ? '&category_id='.$_GET['category_id'] : ''). '&page=' . ($currentPage - 1) . '"><</a></div>';
                }else{
                    print '<div style = "color: #e2e2e2;" class="page-link"><<</div>';
                    print '<div style = "color: #e2e2e2;" class="page-link"><</div>';
                }
            ?>
            <?php 
                foreach ($arNumberPages as $numbersPage) {
                    print '<div class="page-item"><a class="page-link ' . (intval($_GET['page'] ?? 0) === $numbersPage ? ' current' : '') . '" href="/?model=product&action=all' . (isset($_GET['category_id']) ? '&category_id='.$_GET['category_id'] : ''). '&page=' . $numbersPage . '">' . $numbersPage . '</a></div>';
                }
            ?>
            <?php
                if($currentPage<$allPageNumber){
                    print '<div class="page-item"><a class="page-link" href="/?model=product&action=all' . (isset($_GET['category_id']) ? '&category_id='.$_GET['category_id'] : ''). '&page=' . ($currentPage + 1) . '">></a></div>';
                    print '<div class="page-item"><a class="page-link" href="/?model=product&action=all' . (isset($_GET['category_id']) ? '&category_id='.$_GET['category_id'] : ''). '&page=' . $allPageNumber . '">>></a></div>';
                }else{
                    print '<div style = "color: #e2e2e2;" class="page-link">></div>';
                    print '<div style = "color: #e2e2e2;" class="page-link">>></div>';
                }
            ?>
        </div>
                <?php
    }
    
}