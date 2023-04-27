<?php

namespace Webkul\Product\Models;

use App\ProductCategoryField;
use Exception;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;
use Webkul\Attribute\Models\AttributeFamilyProxy;
use Webkul\Attribute\Models\AttributeProxy;
use Webkul\Attribute\Repositories\AttributeRepository;
use Webkul\BookingProduct\Models\BookingProductProxy;
use Webkul\Category\Models\Category;
use Webkul\Category\Models\CategoryProxy;
use Webkul\Inventory\Models\InventorySourceProxy;
use Webkul\Product\Contracts\Product as ProductContract;
use Webkul\Product\Database\Eloquent\Builder;
use Webkul\Product\Database\Factories\ProductFactory;
use Webkul\Product\Type\AbstractType;

class ProductCategory extends Model
{
    use HasFactory;

    protected $tableName = 'product_categories';

    public function category()
    {
//        return $this->belongsTo(ProductCategory::class);
        return $this->belongsTo(Category::class);
    }
}
