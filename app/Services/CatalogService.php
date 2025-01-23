<?php


namespace App\Services;

use Illuminate\Http\Request;
use App\Models\Group;

class CatalogService
{

    /**
     * Пришлось намешать выдачу категорий и продуктов, чтобы не дублировать функции и лишний раз не обращаться к БД.
     * Поозреваю, что можно написать более оптимальный запрос, но пока так.
     * 
     */

    public function getCategoryTree(Request $request){

        $mainCategory = $this->getCategoryByParent(0);

        $categoryIds = [];

        if( $request->has('category') ){

            $currentCategory = $request->category;

            array_push($categoryIds, (int)$currentCategory);
  
            $group = Group::withCount('products')->find($currentCategory);

            if ($group) {
    
                $allChildren = $this->getAllChildren($group); 
            }
            
            foreach( $mainCategory as $key => $category ){
    
                $mainCategory[$key]['children'] =  $category->id == $currentCategory ? $allChildren : [];
            }   
            
            $categoryIds = array_merge($categoryIds, $this->getAllCategoryIds($allChildren) );
        } 

        return [
            'category' => $mainCategory,
            'ids' => $categoryIds
        ];
    }

    public function getAllChildren($group)
    {

        $children = $group->children;

        foreach ($children as $child) {

            $child->children = $this->getAllChildren($child); 
        }
    
        return $children;
    }

    public function getAllCategoryIds($categories)
    {
        $ids = []; 

        foreach ($categories as $category) {
            $ids[] = $category['id']; 

            if (!empty($category['children'])) {
                $ids = array_merge($ids, $this->getAllCategoryIds($category['children']));
            }
        }

        return $ids;
    }

    private function getCategoryByParent($parent){

        return Group::withCount('products')->where('id_parent', $parent )->get();

    }


}
